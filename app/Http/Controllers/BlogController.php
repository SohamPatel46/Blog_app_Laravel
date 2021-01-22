<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BlogController;
use App\Http\Requests\BlogCreateRequest;
use App\Models\blog;
use App\Models\User;
use App\Models\Comment;


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

    public function delete(blog $id){
        //dd($id->all());
        $id->delete();
        return redirect(route('blog.index'))->with('message',"Blog Deleted ");
    }

    public function comment(blog $id){    
        return view('blog.comment')->with(['data'=>$id]);
    }
    public function show(blog $id){        
        return view('blog.show')->with(['data'=>$id]);
    }
    public function commentStore(blog $id,Request $request){
        //dd($id);      
        if(!$request->comment){
            return redirect()->back()->with('error',"Comment should not be empty ");
        }

        Comment::create([
            'comment'=>$request->comment,
            'user_id'=>auth()->user()->id,
            'blog_id'=>$id->id,
        ]);

        return redirect()->back()->with('message',"Commented ");
    }

}
