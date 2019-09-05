@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/training-plan">Plan de Entrenamiento</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
    </ol>

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between">
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

@endsection