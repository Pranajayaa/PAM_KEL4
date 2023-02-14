<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';
        $pageDescription = 'Some description for the page';

        return view('front-end.index');
    }

    public function about()
    {
        return view('front-end.about');
    }
}
