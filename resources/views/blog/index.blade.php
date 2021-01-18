@extends('blog.layout')

@section('content')

    <div class="container">

        <div class="row">
        
        @forelse($data as $blog)

            <div class="col-sm" style="margin-top:20px;">
                <div class="card" style="width: 18rem;">
                    <img height="200px" src="{{asset('/storage/sem5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $blog->userInverse->name }}</h6>                        
                        
                        @if( Auth::user()->id === $blog->user_id)
                            <a href="#" class="card-link">Edit</a>
                            <a href="" class="card-link">Delete</a>                       

                        @else
                            <a href="#" class="card-link">Comment</a>                       

                        @endif
                    </div>
                </div>              
            </div>         
        @empty
            <p>No tasks created</p>
        @endforelse

        </div>

    

    </div>
    
@endsection
