@extends('blog.layout')

@section('content')

<div class="container" style="width:70%;">

    <form method="post" action="{{route('blog.store')}}">
        @csrf
        <div class="form-group" >
            <h2> Title :  {{$data->title}} </h2>
        </div>

        <div class="form-group">
            <h2> Content </h2>
            <h3>{!!$data->blog_content!!} </h3>              
        </div>  

        <div class="form-group">
            <h2> Comments </h2>
            @foreach($data->blogComment as $comment)

            <p>{{$comment->pivot->comment}} -----> By {{$comment->name}} </p>
            @endforeach
        </div>
    </form>
</div>

@endsection