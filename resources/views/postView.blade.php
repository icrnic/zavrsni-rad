@extends('layouts.app')

@section('content')

<div class="container">
</br></br></br>

       @php($user = Auth::user())
            @if($user != null)
            @if(auth()->user()->role->name==='Administrator' || auth()->user()->role->name==='Editor')
            <form action="{{ url('posts/edit', $post->id) }}" method="GET">
                    
                 

                    <button type="submit" class="btn btn-success" id="">
                        <i class="fa fa-btn fa-edit"></i>Uredi
                    </button>

            </form>
            @endif
            @endif
        <!-- Portfolio Item Heading -->
       
      
        <!-- Portfolio Item Row -->
        <div class="row">
                
          <div class="col-md-8">
            <img class="img-fluid" src="{{ asset('uploads/' . $post->image)}}" alt="">
          </div>
      
          <div class="col-md-4">
          <h1 class="my-4">{{ $post->name}}</h1>
            <p>{{ $post->description}}</p>
            <h3>Autor</h3>
            <div>{{ $post->user->name}}</div>

          </div>
        </div>
</div>

@endsection