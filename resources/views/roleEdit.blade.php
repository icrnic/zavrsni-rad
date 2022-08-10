@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <!-- New task form -->
                    <form action="{{url('role/' . $role->id)}}" method="POST" class="form-horizontal">
                        {{ csrf_field()}}

                    <!-- Role name -->
                    <div class="form-group">
                        <label for="role-name" class="col-sm-3 control-label">Naziv uloge</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="role-name" class="form-control" value="{{old ('role') ? old('role') : $role->name }}">
                        </div>
                    </div>

                    <!-- Add task button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-save">Spremi</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection