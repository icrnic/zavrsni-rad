@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
     
        <div class="panel-body">

 <div class="panel panel-default">
 <div class="panel-heading">
 <a href="{{url('posts/new')}}"><button type="submit" class="btn btn-primary">Dodaj Post</button></a>


 </div>
     <table class="table table-striped task-table">
         <thead>
             <th>Naslov</th>
             <th>Opis</th>
             <th>Vlasnik</th>
             <th>Detalji</th>
             <th>Uredi</th>
             <th>Obriši</th>
         </thead>
         <tbody>
         @foreach ($posts as $post)
            
             <tr>
                 <td class="table-text>">
                    <div>{{ $post->name}}</div>
                 </td>
                 <td class="table-text>">
                    <div>{{ $post->description}}</div>
                 </td>
                 
                 <td class="table-text>">
                    <div>{{ $post->user->email}}</div>
                 </td>
                 
                 <td>
                 <form action="{{ url('posts/details', $post->id) }}" method="GET">
                    
                    

                     <button type="submit" class="btn btn-success" id="">
                         <i class="fa fa-btn fa-edit"></i>Detalj
                     </button>

                 </form>
                 </td>
                
                 <td>
                 <form action="{{ url('posts/edit', $post->id) }}" method="GET">
                    
                 

                     <button type="submit" class="btn btn-success" id="">
                         <i class="fa fa-btn fa-edit"></i>Uredi
                     </button>

                 </form>
                 </td>
                 <td>
                 <form action="{{url('posts/' . $post->id)}}" method="POST">
                     {{csrf_field()}}
                     {{method_field('DELETE')}}

                     <button type="submit" class="btn btn-danger">
                         <i class="fa fa-btn fa-trash"></i>Delete
                     </button>

                 </form>
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

