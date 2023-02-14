<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $contentPage = [
        'home' => 'Home',
        'about' => 'About'
    ];

    public $contentType = [
        'title' => 'Title',
        'description' => 'Description',
        'info' => 'Info',
        'files' => 'Files'
    ];
}
