@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/user-tests">Pruebas de Usuario</a>
        </li>
        <li class="breadcrumb-item active">Pruebas</li>
    </ol>

    <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Salto Vertical</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                            
                        <form method="POST" action="{{route('storesalto_verticalTest')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                        <div class="card mb-3">
                                <div class="card-header font-weight-bold text-center bg-warning"><i class="fa fa-fw fa-exclamation-triangle"></i>DESCRIPCIÓN DE LA PRUEBA</div>
                                <div class="card-body text-justify">
                                    <p class="card-text m-1"><span class="font-weight-bold">OBJETIVO: </span>Medir la pontencia de salto (tren inferior).</p>            
                                    <p class="card-text m-1"><span class="font-weight-bold">EJECUCIÓN: </span>Partiremos de una posición de sentadilla, concretamente, a 90º y de ahí realizaremos un salto hacia arriba con la condición de colocar las manos en la cadera, evitando así realizar un contramovimiento, el cual debemos evitar, por que de esta forma no cogemos impulso, con el cual no podríamos determinar la pontencia real del tren inferior.</p>
                                    <p class="card-text m-1"><span class="font-weight-bold">VALORACIÓN: </span>La única condición a tener en cuenta para valorar positivamente esta prueba, es la de no realizar contramovimiento.</p>
                                </div>
                            </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                          Baremo Masculino
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Criterial</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                          Baremo Femenino
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Criterial</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center bg-info">Usuario</th>
                                            <th class="text-center bg-info">Resultados</th>
                                            <th class="text-center bg-info">Nota</th>
                                            <th class="text-center bg-info">Ficha de Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="w-25 text-center">{{ Auth::user()->name }}</td>
                                            <td class="w-25 text-center">
                                                <input class="text-center h-100 w-100 border-0" type="text" name="resultados" required> 
                                            </td>
                                            <td class="w-25 text-center">
                                                <input class="text-center h-100 w-100 border-0" type="text" name="notas" required> 
                                            </td>
                                            <td class="w-25 text-center">
                                                <a href="#">Ficha {{ Auth::user()->name }}</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if (session()->has('infosalto_verticalTest'))
                            <div class="alert alert-success text-center" role="alert">
                                <strong>{{ session('infosalto_verticalTest') }}!</strong>
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