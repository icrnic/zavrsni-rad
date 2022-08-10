@extends('layouts.app')


@section('content')

<div class="container">
        <div class="col-sm-offset-2 col-sm-8">
        <h2>Dodaj novi post</h2>

        <form action="{{url('posts/')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="task-name">Naslov</label>
    <input type="text" name="name" class="form-control" id="task-name"  placeholder="Naziv" value="" >
   
   
  </div>
  <div class="form-group">
    <label for="task-description">Opis</label>
    <input type="text" name="description" class="form-control" id="task-description" placeholder="Opis" value="">
  
  </div>
  <div class="form-group">
  <label for="formFileLg" class="form-label">Dodaj Sliku</label>
<input class="form-control form-control-lg" id="formFileLg" type="file" name="image" />
</div>
</br>
<div class="form-group">


</div>


  
  <button type="submit" class="btn btn-primary">Dodaj Post</button>
</form>
     
        </div>
    </div>
        @endsection


        

