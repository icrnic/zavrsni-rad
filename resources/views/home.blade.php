@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="px-4 py-5 my-5 text-center">
 
 <h1 class="display-5 fw-bold">Ivan Crnić - Zavrsni Rad</h1>
 <div class="col-lg-6 mx-auto">
   <p class="lead mb-4">Dobro došli na stranicu IC-ZR</p>
   <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    
   </div>
 </div>
</div>
                </div>
            </div>
        </div>
    </div>

@endsection
