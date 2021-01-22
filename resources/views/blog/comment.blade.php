@extends('blog.layout')

@section('content')

<div class="container" style="width:70%;">

    <form method="post" action="{{route('blog.commentStore',$data->id)}}">
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

            <h4>{{$comment->pivot->comment}} commented by {{$comment->name}} </h4>
            @endforeach
        </div>               

        <input type="text" class="form-control" name="comment" placeholder="Leave a comment">
        <button type="submit" class="btn btn-primary">Submit</button>
        <x-alert/>
        
    </form>
</div>

@endsection