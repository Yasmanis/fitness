@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('vgetplancha_prono') }}">Plancha Prono</a>
        </li>
        <li class="breadcrumb-item active">Pruebas</li>
    </ol>

    <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Plancha Prono</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                        
                            <form method="POST" action="{{route('storeplanchapronoTest')}}">
                                @csrf  
                                <div class="container">                                    
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                              <label for="user_id">Usuario</label>
                                              <select id="user_id" name="user_id" class="form-control">
                                                <option selected>Choose...</option>
                                                @foreach ($user_fichas as $item)
                                                  <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="date">Año</label>
                                                <select id="date" name="date" class="form-control">
                                                    <option selected>Choose...</option>
                                                        @for ($i = 2019; $i < 2100; $i++)
                                                          <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                    </div>
                                    </div>                              
                            <div class="card mb-3">
                                    <div class="card-header font-weight-bold text-center bg-warning"><i class="fa fa-fw fa-exclamation-triangle"></i>DESCRIPCIÓN DE LA PRUEBA</div>
                                    <div class="card-body text-justify">
                                        <p class="card-text m-1"><span class="font-weight-bold">OBJETIVO: </span>Medir la resistencia muscular localzada.</p>            
                                        <p class="card-text m-1"><span class="font-weight-bold">EJECUCIÓN: </span>La prueba consiste en ponerse en posición de plancha, apoyando los brazos, alineando las piernas extendidas con la columna y manteniendo la cadera en posición neutra. Los brazos deben mantener un ángulo de 90ºen la articulación del codo.</p>
                                        <p class="card-text m-1"><span class="font-weight-bold">VALORACIÓN: </span>El test valora el tiempo que se puede mantener la posición estable y sin compensación. El test finaliza cuando la cadera desciende o se dispone en anteversión, acentuándose la curva lumbar o una hiperlordosis.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2 class="text-center">Baremo Masculino</h2>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center bg-info">Clasificación</th>
                                                <th class="text-center bg-info">Valores</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="bg-success text-center">Excelente</td>
                                                    <td class="text-center"> > 120´´</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-warning text-center">Bueno</td>
                                                    <td class="text-center"> 61´´- 119´´</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-danger text-center">Bajo</td>
                                                    <td class="text-center"> < 60´´</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 class="text-center">Baremo Femenino</h2>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center bg-info">Clasificación</th>
                                                <th class="text-center bg-info">Valores</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="bg-success text-center">Excelente</td>
                                                    <td class="text-center"> > 70´´</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-warning text-center">Bueno</td>
                                                    <td class="text-center"> 31´´- 69´´</td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-danger text-center">Bajo</td>
                                                    <td class="text-center"> < 30´´</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center bg-info">Nombre</th>
                                                    <th class="text-center bg-info">Resultados</th>
                                                    <th class="text-center bg-danger">Ficha de Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="w-35 text-center">{{ Auth::user()->name }}</td>
                                                    <td class="w-30"><input class="text-center h-100 w-100 border-0" type="text" name="resultados" required></td>
                                                    <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @if (session()->has('infoplanchapronoTest'))
                                    <div class="alert alert-success text-center" role="alert">
                                        <strong>{{ session('infoplanchapronoTest') }}!</strong>
                                    </div>
                                @endif
                                <div class="d-flex mb-3">
                                    <div class="ml-auto">
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </div>
                                </div>
                            </form>
                        </div>
                
            </div>
    </div>
@endsection