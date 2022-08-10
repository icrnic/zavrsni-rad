@extends('layouts.app')


@section('content')

<div class="container">
        <div class="col-sm-offset-2 col-sm-8">
        <h2>Dodaj novi Meni</h2>

        <form action="{{url('menus/')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="task-name">Naziv</label>
    <input type="text" name="name" class="form-control" id="task-name"  placeholder="Naziv" value="" >
   
   
  </div>

  <button type="submit" class="btn btn-primary">Dodaj Meni</button>
</form>
     
        </div>
    </div>
        @endsection


        

