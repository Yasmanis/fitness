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
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Burpees</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                        
                            <form method="POST" action="{{route('storeburpeesTest')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                            <div class="card mb-3">
                                    <div class="card-header font-weight-bold text-center bg-warning"><i class="fa fa-fw fa-exclamation-triangle"></i>DESCRIPCIÓN DE LA PRUEBA</div>
                                    <div class="card-body text-justify">
                                        <p class="card-text m-1"><span class="font-weight-bold">OBJETIVO: </span>Medir la resistencia anaeróbica láctica.</p>            
                                        <p class="card-text m-1"><span class="font-weight-bold">EJECUCIÓN: </span>La forma correcta de realizar un burpee es partir de una posición natural, estando de pie, el siguiente paso es  agacharse colocando las manos en el suelo con los brazos estirados y abiertos a la altura de los hombros. Estirar las piernas hacia atrás, haciendo una especie de flexión pero apoyando el pecho en el suelo directamente. Recoger de nuevo las piernas e incorporarse dando un salto hacia arriba con los brazos estirados, volviendo así a la posición inicial.</p>
                                        <p class="card-text m-1"><span class="font-weight-bold">VALORACIÓN: </span>Para valorar positivamente esta prueba, tienen que darse dos condiciones. (1) Que el pecho toque el suelo al bajar  y (2) al subir y volver a la posición inicial, hay que acabar la repetición con un salto.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2 class="text-center">Baremo Masculino</h2>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center bg-info">Nº de Repeticiones</th>
                                                <th class="text-center bg-info">Estado</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="bg-danger text-center">0 - 30</td>
                                                    <td class="text-center"> Malo </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color:chocolate;">31 - 40</td>
                                                    <td class="text-center"> Normal </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: yellow">41 - 50</td>
                                                    <td class="text-center"> Bueno </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: greenyellow">51 - 60</td>
                                                    <td class="text-center"> Muy Bueno </td>
                                                </tr>                                        
                                                <tr>
                                                    <td class="text-center" style="background-color: green"> > 60</td>
                                                    <td class="text-center"> Excelente </td>
                                                </tr>                                        
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 class="text-center">Baremo Femenino</h2>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center bg-info">Nº de Repeticiones</th>
                                                <th class="text-center bg-info">Estado</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="bg-danger text-center">0 - 30</td>
                                                    <td class="text-center"> Malo </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color:chocolate;">31 - 40</td>
                                                    <td class="text-center"> Normal </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: yellow">41 - 50</td>
                                                    <td class="text-center"> Bueno </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: greenyellow">51 - 60</td>
                                                    <td class="text-center"> Muy Bueno </td>
                                                </tr>                                        
                                                <tr>
                                                    <td class="text-center" style="background-color: green"> > 60</td>
                                                    <td class="text-center"> Excelente </td>
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
                                @if (session()->has('infoburpeesTest'))
                                    <div class="alert alert-success text-center" role="alert">
                                        <strong>{{ session('infoburpeesTest') }}!</strong>
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