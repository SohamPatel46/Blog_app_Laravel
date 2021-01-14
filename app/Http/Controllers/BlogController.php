<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BlogController;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(){
        return view('blog.index');
    }

    public function create(){
        return view('blog.create');
    }
    
}
