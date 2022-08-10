@extends('layouts.app')
@section('content')

    
        <div class="container">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Ime</th>
                    <th>E-mail</th>
                    <th>Uloga</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            <div>{{$user->id}}</div>
                        </td>
                        <td>
                            <div>{{$user->name}}</div>
                        </td>
                        <td>
                            <div>{{$user->email}}</div>
                        </td>
                        <td>
                            <form id="update-role-form-{{$user->id}}" action="{{route('updateRole', $user->id)}}"
                                method="POST">
                                {{csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">

                                <div class="form-group">
                                    <select name="role" id="role">
                                        <option disabled @if($user->role == null) selected @endif>Izaberite ulogu</option>

                                        @foreach ($roles as $role)
                                        <option @if($user->role->id == $role->id) selected @endif value="{{$role->id}}">
                                         {{$role->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button class="btn btn-primary"
                            onclick="event.preventDefault(); document.getElementById('update-role-form-{{$user->id}}').submit
                            ();">
                                Spremi
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
  @endsection