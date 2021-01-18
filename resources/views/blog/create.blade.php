@extends('blog.layout')

@section('content')
    <h3 style="text-align: center;">Create a Master-Piece</h3>
    <div class="container" style="width:70%;">

        <form method="post" action="{{route('blog.store')}}">
            @csrf
            <div class="form-group">
                <h4> Blog Title</h4>
                <input type="text" class="form-control" name="title" placeholder="Enter title">
            </div>

            <div class="form-group">
                <h4>Blog - content</h4>
                <textarea style="height:250px;" id="mytextarea" name="blog_content"></textarea>
            </div>        
            <button type="submit" class="btn btn-primary">Submit</button>
            <x-alert/>
        </form>
    </div>
@endsection
