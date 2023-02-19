<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categories;
use App\Models\PersonalShoppers;
use App\Models\PersonalShopperImages;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        try {
            $req = $request->all();

            $req['password'] = Hash::make($req['password']);
            $req['role_id'] = 2;

            $user = User::create($req);

            $roleName = Role::where('id', 2)->pluck('name', 'id')->first();
            $user->assignRole($roleName);

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil melakukan registrasi'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $req = $request->all();
            if (Auth::attempt($request->only('username', 'password'))) {
                $data = User::where('username', $req['username'])->get();
                $request->session()->regenerate();
                return response()->json([
                    'data' => $data,
                    'success' => true,
                    'code' => 200,
                    'message' => 'Selamat datang ' . $req['username']
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'code' => 401,
                    'message' => 'The provided credentials do not match our records.'
                ], 401);
            }
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json([
                    'success' => true,
                    'code' => 200,
                    'message' => 'Anda berhasil logout'
                ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function createCategories(Request $request)
    {
        try {
            $req = $request->all();
            $user = Auth::user();

            $data = User::find($user->id);

            $req['created_at'] = date('Y-m-d H:i:s');
            $req['created_by'] = $data->id;
            $req['updated_at'] = date('Y-m-d H:i:s');
            $req['updated_by'] = $data->id;

            $categories = Categories::create($req);
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil menambahkan data categories'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function indexCategories()
    {
        try {
            $data = Categories::get();

            return response()->json([
                'data' => $data,
                'success' => true,
                'code' => 200
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function editCategories($id)
    {
        try {
            $categories = Categories::find($id);

            return response()->json([
                'results' => $categories
            ]);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function updateCategories(Request $request, $id)
    {
        try {
            $categories = Categories::find($id);
            $req = $request->all();

            $user = Auth::user();
            $data = User::find($user->id);

            $req['updated_at'] = date('Y-m-d H:i:s');
            $req['updated_by'] = $data->id;

            $categories->update($req);

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil mengubah data categories'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function destroyCategories($id)
    {
        try {
            $categories = Categories::find($id)->delete();

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil menghapus data categories'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function createShopper(Request $request)
    {
        try {
            $req = $request->all();
            // dd($req);
            $user = Auth::user();
            $data = User::find($user->id);

            $req['created_at'] = date('Y-m-d H:i:s');
            $req['created_by'] = $data->id;
            $req['updated_at'] = date('Y-m-d H:i:s');
            $req['updated_by'] = $data->id;

            $shopper = PersonalShoppers::create($req);

            $shopperImage = [];
            if ($request->file('images') && count($request->file('images'))) {
                foreach ($request->file('images') as $key => $value) {
                    $name = $request->file('images')[$key]->getClientOriginalName();
                    $fileName = rand().'_'.time().'_'.$name;  
                    $request->images[$key]->move(public_path('uploads/shopper_image'), $fileName);

                    $shopperImage[] = [
                        'personal_shopper_id' => $shopper->id,
                        'name' => 'uploads/shopper_image/' . $fileName,
                        'created_at' => date('Y-m-d H:i:s'),
                        'created_by' => $data->id,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => $data->id,
                    ];
                }
            }

            if (count($shopperImage)) {
                $shopper->personalShopperImages()->createMany($shopperImage);
            }

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil menambahkan data detail jastip'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function indexPersonalShopper()
    {
        try {
            $data = PersonalShoppers::with('personalShopperImages')->get();

            return response()->json([
                'data' => $data,
                'success' => true,
                'code' => 200
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function editPersonalShopper($id)
    {
        try {
            $shopper = PersonalShoppers::with('personalShopperImages')->get();

            return response()->json([
                'results' => $shopper
            ]);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function updatePersonalShopper(Request $request, $id)
    {
        try {
            $shopper = PersonalShoppers::find($id);
            $req = $request->all();

            $user = Auth::user();
            $data = User::find($user->id);

            $req['updated_at'] = date('Y-m-d H:i:s');
            $req['updated_by'] = $data->id;

            $shopper->update($req);

            $shopperImage = [];
            if ($request->file('images') && count($request->file('images'))) {
                foreach ($request->file('images') as $key => $value) {
                    $name = $request->file('images')[$key]->getClientOriginalName();
                    $fileName = rand().'_'.time().'_'.$name;  
                    $request->images[$key]->move(public_path('uploads/shopper_image'), $fileName);

                    $shopperImage[] = [
                        'personal_shopper_id' => $id,
                        'name' => 'uploads/shopper_image/' . $fileName,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => $data->id,
                    ];
                }
            }

            if (count($shopperImage)) {
                //updatemany?
                $shopper->personalShopperImages()->createMany($shopperImage);
            }

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil mengubah data detail jastip'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function destroyPersonalShopper($id)
    {
        try {
            $shopper = PersonalShoppers::find($id)->delete();

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil menghapus data detail jastip'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function destroypersonalShopperImages($id)
    {
        try {
            $shopper = personalShopperImages::find($id)->delete();

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil menghapus data foto jastip'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function createCustomers(Request $request)
    {
        try {
            $req = $request->all();
            $user = Auth::user();

            $data = User::find($user->id);

            $req['created_at'] = date('Y-m-d H:i:s');
            $req['created_by'] = $data->id;
            $req['updated_at'] = date('Y-m-d H:i:s');
            $req['updated_by'] = $data->id;

            $customer = Customers::create($req);
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil menambahkan data customer'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function indexCustomers()
    {
        try {
            $data = Customers::get();

            return response()->json([
                'data' => $data,
                'success' => true,
                'code' => 200
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function editCustomers($id)
    {
        try {
            $customer = Customers::find($id);

            return response()->json([
                'results' => $customer
            ]);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function updateCustomers(Request $request, $id)
    {
        try {
            $customer = Customers::find($id);
            $req = $request->all();

            $user = Auth::user();
            $data = User::find($user->id);

            $req['updated_at'] = date('Y-m-d H:i:s');
            $req['updated_by'] = $data->id;

            $customer->update($req);

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil mengubah data customer'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function destroyCustomers($id)
    {
        try {
            $customer = Customers::find($id)->delete();

            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Berhasil menghapus data customer'
            ], 200);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function getPersonalShoppers(Request $request)
    {
        try {
            $req = $request->all();
            $search = '';
            $user = Auth::user();
            if (isset($req['term'])) {
                $search = $req['term'];
            }

            $data = PersonalShoppers::select('name', 'id')
                ->where(function ($q) use ($search) {
                    $q->orWhere('name', 'LIKE', '%' . $search . '%');
                })
                ->where('created_by', $user->id)
                ->take(10)
                ->get()
                ->toArray();

            return response()->json(['results' => $data]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function reportShopper(Request $request)
    {
        try {
            $req = $request->all();

            $data = DB::select("
                        SELECT
                            personal_shoppers.id,
                            personal_shoppers.name,
                            personal_shoppers.stock,
                            COUNT(customers.id) as jumlah
                        FROM
                            personal_shoppers
                            INNER JOIN customers on customers.personal_shopper_id = personal_shoppers.id
                        GROUP BY 
                            personal_shoppers.id
                        HAVING 
                            COUNT(customers.id) > 0
                    ");

            return response()->json(['results' => $data]);
        } catch (Exception $e) {
            return response()->json($th->getMessage(), 500);
        }
    }
}