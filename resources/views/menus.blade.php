@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
     
        <div class="panel-body">


 <div class="panel panel-default">
 <div class="panel-heading">
 <a href="{{url('menus/new')}}"><button type="submit" class="btn btn-primary">Dodaj Meni</button></a>
 <a href="{{url('/addPostToMenu')}}"><button type="submit" class="btn btn-primary">Dodaj Post u meni</button></a>
  
 </div>
     <table class="table table-striped task-table">
         <thead>
             <th>Ime Menia</th>
             
             <th>Uredi</th>
             <th>Obriši</th>
             <th>Posts</th>
             <th>Obriši post iz menia</th>
         </thead>
         <tbody>
         @foreach ($menus as $menu)
            
             <tr>
                 <td class="table-text>">
                     <div>{{ $menu->name}}</div>
                 </td>
                
                 <td>
                 <form action="{{ url('menus/edit', $menu->id) }}" method="GET">
                    
               

                     <button type="submit" class="btn btn-success" id="">
                         <i class="fa fa-btn fa-edit"></i>Uredi
                     </button>

                 </form>
                 </td>
                 <td>
                 <form action="{{url('menus/' . $menu->id)}}" method="POST">
                     {{csrf_field()}}
                     {{method_field('DELETE')}}

                     <button type="submit" class="btn btn-danger">
                         <i class="fa fa-btn fa-trash"></i>Delete
                     </button>

                 </form>
                 </td>
                 <td>
                 
                     
                 @foreach ($menu->posts as $post) 
                 <form action="{{ url('posts/details', $post->id) }}" method="GET">
                 <button type="submit" class="btn btn-success" id="">
                         <i class="fa fa-btn fa-edit"></i>{{$post->name}} 
                     </button> </br></br>
                 </form>
                @endforeach  

                    

                 
                 </td>
                 <td>
                 
                     
                    

                 @foreach ($menu->posts as $post)
                 <form action="{{url('deletePost/' .$menu->id .'/'.$post->id)}}" method="POST">
                 {{csrf_field()}}
                     {{method_field('DELETE')}}

                 <button type="submit" class="btn btn-success" id="">
                         <i class="fa fa-btn fa-edit"></i>Obriši post iza menia
                     </button> </br></br>
                     </form>
                @endforeach  

                 
                 </td>
             </tr>
          @endforeach
             </tbody>               
     </table>
 </div>
 </div>  
        </div>
    </div>
</div>
@endsection
