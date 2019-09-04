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
        <form  class="mb-3" action="{{ route('training-plan-post') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="muscle">Músculo</label>
                <input type="text" class="form-control" id="muscle" name="muscle" placeholder="Músculo a trabajar">
              </div>               
              <div class="form-group col-md-6">
                <label for="image">Imagen</label>
                <input type="file" id="image" name="image" class="form-control">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="description">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descripción del Ejercicio">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="dosification">Dosificación</label>
                <input type="text" class="form-control" id="dosification" name="dosification" placeholder="Dosificación del Ejercicio">
              </div>                                        
            </div>
            
            <button type="submit" name="upload" class="btn btn-primary">Upload</button>
        </form>
        
        @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
                  <strong>{{ $message }}</strong>
          </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection
