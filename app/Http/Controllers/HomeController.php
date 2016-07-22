<?php

namespace App\Http\Controllers;

use App\Models\ApkFile;
use App\Models\ConsistencyCheck;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Yaml\Tests\A;

class HomeController extends Controller {

    public function getIndex(){
        return view('site.home')->with('title', 'Home');
    }

    public function getPublications(){
        return view('site.publications')->with('title', 'Publications');
    }
}