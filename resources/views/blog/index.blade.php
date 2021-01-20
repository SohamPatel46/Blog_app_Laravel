@extends('blog.layout')

@section('content')

    <div class="container">

        <x-alert/>

        <div class="row">
        
        @forelse($data as $blog)

            <div class="col-sm" style="margin-top:20px;"> 

                @if( Auth::user()->id === $blog->user_id)
                
                <a href="{{route('blog.show',$blog->id)}}" style="text-decoration:none;color:black;">
                    <div class="card" style="width: 18rem;">
                        <img height="200px" src="{{asset('/storage/sem5.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$blog->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                            {{ $blog->userInverse->name }}</h6>                        
                            
                            <a href="#" class="card-link">Edit</a>
                            <a class="card-link">
                            <span onclick="event.preventDefault();
                                if(confirm('Are you sure ?')){
                                document.getElementById('blog-delete-{{$blog->id}}').submit()}"                                 
                                >Delete</span> </a>
                            
                            <form style="display:none" id="{{'blog-delete-'.$blog->id}}"
                                method="post" action="{{route('blog.delete',$blog->id)}}">
                                @csrf
                                @method('delete') 
                            </form>                       

                        </div>
                    </div>
                </a>
                    
                @else
                <a href="{{route('blog.comment',$blog->id)}}" style="text-decoration:none;color:black;">
                    <div class="card" style="width: 18rem;">
                        <img height="200px" src="{{asset('/storage/sem5.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$blog->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $blog->userInverse->name }}</h6>                        
                            <a href="{{route('blog.comment',$blog->id)}}" class="card-link">Comment</a>
                        </div>
                    </div>
                </a>
                    @endif
                </a>            
            </div> 

        @empty
            <p>No tasks created</p>
        @endforelse

        </div>

    

    </div>
    
@endsection
