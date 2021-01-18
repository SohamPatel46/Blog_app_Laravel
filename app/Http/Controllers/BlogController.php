<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BlogController;
use App\Http\Requests\BlogCreateRequest;
use App\Models\blog;
use App\Models\User;


use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(){

        $blog = blog::with('userInverse')->get();
        //dd($blog);
        return view('blog.index')->with(['data'=>$blog]);
        //return view('blog.index');
    }

    public function create(){
        return view('blog.create');
    }

    public function store(BlogCreateRequest $request){
        //dd($request->all());

        auth()->user()->blog()->create($request->all());
        return redirect()->back()->with('message','Blog submitted successfully !! Cheers ');              
    }

    public function delete(){

        return view('blog.create');
    }
    
}
