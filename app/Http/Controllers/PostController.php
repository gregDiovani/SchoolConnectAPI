<?php

namespace App\Http\Controllers;

use App\Services\ServiceLogin;
use Illuminate\Http\Request;
use MyHelper;


class PostController extends Controller
{
    public function index(){

        dd(MyHelper::execute());
    
    }
}
