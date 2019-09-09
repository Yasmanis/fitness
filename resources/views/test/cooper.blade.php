@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('vgetcooper') }}">Cooper</a>
        </li>
        <li class="breadcrumb-item active">Pruebas</li>
    </ol>

    <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Cooper</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                            
                        <form method="POST" action="{{route('storecooperTest')}}">
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
                                    <p class="card-text m-1"><span class="font-weight-bold">OBJETIVO: </span>Determinar la condición física de la persona y medir la resistencia aérobica.</p>            
                                    <p class="card-text m-1"><span class="font-weight-bold">EJECUCIÓN: </span>Se trata de correr en una surperficie llana durante 12 min a un ritmo constante.</p>
                                    <p class="card-text m-1"><span class="font-weight-bold">VALORACIÓN: </span>Para valorar positivamente dicha prueba, la única condición a tener en cuenta es la de no parar de correr hasta que termine el tiempo.</p>
                                </div>
                            </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <h2 class="text-center">Baremo Masculino</h2>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center bg-info">Estado</th>
                                                <th class="text-center bg-info"> < 30 años </th>
                                                <th class="text-center bg-info"> de 30 a 39 años </th>
                                                <th class="text-center bg-info">  40 a 49 años </th>
                                                <th class="text-center bg-info"> > 50 años </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="background-color: pink">Muy Malo</td>
                                                    <td class="text-center"> < 1600m </td>
                                                    <td class="text-center"> < 1500m </td>
                                                    <td class="text-center"> < 1400m </td>
                                                    <td class="text-center"> < 1300m </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-danger text-center">Malo</td>
                                                    <td class="text-center"> de 1600 a 2199m </td>
                                                    <td class="text-center"> de 1500 a 1899m </td>
                                                    <td class="text-center"> de 1400 a 1699m </td>
                                                    <td class="text-center"> de 1300 a 1599m </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-warning text-center">Regular</td>
                                                    <td class="text-center"> de 2200 a 2399m </td>
                                                    <td class="text-center"> de 1900 a 2299m </td>
                                                    <td class="text-center"> de 1700 a 2099m </td>
                                                    <td class="text-center"> de 1600 a 1999m </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: greenyellow">Bueno</td>
                                                    <td class="text-center"> de 2400 a 2800m </td>
                                                    <td class="text-center"> de 2300 a 2700m </td>
                                                    <td class="text-center"> de 2100 a 2500m </td>
                                                    <td class="text-center"> de 2000 a 2400m </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-success text-center">Muy Bueno</td>
                                                    <td class="text-center"> > 2800m </td>
                                                    <td class="text-center"> > 2700m </td>
                                                    <td class="text-center"> > 2500m </td>
                                                    <td class="text-center"> > 2400m </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <h2 class="text-center">Baremo Femenino</h2>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center bg-info">Estado</th>
                                                <th class="text-center bg-info"> < 30 años </th>
                                                <th class="text-center bg-info"> de 30 a 39 años </th>
                                                <th class="text-center bg-info"> < 40 a 49 años </th>
                                                <th class="text-center bg-info"> > 50 años </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="background-color: pink">Muy Malo</td>
                                                    <td class="text-center"> < 1500m </td>
                                                    <td class="text-center"> < 1400m </td>
                                                    <td class="text-center"> < 1200m </td>
                                                    <td class="text-center"> < 1100m </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-danger text-center">Malo</td>
                                                    <td class="text-center"> 1500 a 1799m </td>
                                                    <td class="text-center"> 1400 a 1699m </td>
                                                    <td class="text-center"> 1200 a 1499m </td>
                                                    <td class="text-center"> 1100 a 1300m </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-warning text-center">Regular</td>
                                                    <td class="text-center"> 1800 a 2199m </td>
                                                    <td class="text-center"> 1700 a 1999m </td>
                                                    <td class="text-center"> 1500 a 1899m </td>
                                                    <td class="text-center"> 1400 a 1699m</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: greenyellow">Bueno</td>
                                                    <td class="text-center"> 2200 a 2700m </td>
                                                    <td class="text-center"> 2000 a 2500m </td>
                                                    <td class="text-center"> 1900 a 2300m </td>
                                                    <td class="text-center"> 1700 a 2200m </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-success text-center">Muy Bueno</td>
                                                    <td class="text-center"> > 2700m </td>
                                                    <td class="text-center"> > 2500m </td>
                                                    <td class="text-center"> > 2300m </td>
                                                    <td class="text-center"> > 2200m </td>
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
                                                    <td class="w-30 text-center">
                                                        <input class="text-center h-100 w-100 border-0" type="text" name="resultados" required> 
                                                    </td>
                                                    <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @if (session()->has('infostorecooperTest'))
                                    <div class="alert alert-success text-center" role="alert">
                                        <strong>{{ session('infostorecooperTest') }}!</strong>
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