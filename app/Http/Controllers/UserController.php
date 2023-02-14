<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public static $pageTitle = 'User';
    // public static $pageDescription = 'User Description';
    // public static $modelName = 'App\Models\User';
    public static $permissionName = 'user';
    public static $folderPath = 'user';
    public static $routePath = 'users';
    public static $pageBreadcrumbs = [];

    function __construct()
    {
        $this->middleware('permission:'.self::$permissionName.'-list', ['only' => ['index']]);
        $this->middleware('permission:'.self::$permissionName.'-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:'.self::$permissionName.'-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:'.self::$permissionName.'-delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.self::$permissionName.'-show', ['only' => ['show']]);

        self::$pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath,
            'title' => 'List '.self::$pageTitle,
        ];
    }

    public function index(Request $req)
    {
        if ($req->ajax()) {
            return Datatables::of(User::with('roles'))->addIndexColumn()->make(true);
        }

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $permissionName = self::$permissionName;
        $routePath = self::$routePath;

        return view(self::$folderPath.'.index', compact('pageTitle', 'pageBreadcrumbs', 'permissionName', 'routePath'));
    }

    public function create()
    {
        $user = new User();
        $roles = Role::pluck('name', 'name')->all();

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath.'/create',
            'title' => 'Create '.self::$pageTitle,
        ];
        $routePath = self::$routePath;
        
        return view(self::$folderPath.'.create', compact('user', 'pageTitle', 'pageBreadcrumbs', 'routePath', 'roles'));
    }

    public function store(Request $request)
    {
        $req = $request->all();
        $req['password'] = Hash::make($req['password']);
        $user = User::create($req);
        $user->assignRole($req['roles']);

        return redirect()->route(self::$routePath.'.index')
            ->with('success', self::$pageTitle.' created successfully.');
    }

    public function show($id)
    {
        $user = User::find($id);

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath.'/'.$id,
            'title' => 'Show '.self::$pageTitle,
        ];
        $routePath = self::$routePath;

        return view(self::$folderPath.'.show', compact('user', 'pageTitle', 'pageBreadcrumbs', 'routePath'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath.'/'.$id.'/edit',
            'title' => 'Update '.self::$pageTitle,
        ];
        $routePath = self::$routePath;

        return view(self::$folderPath.'.edit', compact('user', 'pageTitle', 'pageBreadcrumbs', 'routePath', 'roles', 'userRole'));
    }

    public function update(Request $request, User $user)
    {
        $req = $request->all();
        if (!empty($req['password'])) {
            $req['password'] = Hash::make($req['password']);
        } else {
            unset($req['password']);
        }
        $user->update($req);

        DB::table('model_has_roles')->where('model_id', $user->id)->delete();

        $user->assignRole($req['roles']);

        return redirect()->route(self::$routePath.'.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $req, $id)
    {
        $user = User::find($id)->delete();

        if ($req->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route(self::$routePath.'.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
}
