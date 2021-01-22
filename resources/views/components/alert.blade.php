<div style="padding:15px;">
    <!-- An unexamined life is not worth living. - Socrates -->
    @if(session()->has('message'))

        <div class="alert alert-success" role="alert">
        {{session()->get('message')}}
        </div>
    
    @endif

    @if(session()->has('error'))

        <div class="alert alert-danger" role="alert">
        {{session()->get('error')}}
        </div>
    
    @endif

    @if ($errors->any())
    
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>