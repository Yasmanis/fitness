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
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Dominadas/Suspensión Isométrica</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">

                            <form method="POST" action="{{route('storedom_susp_isometricoTest')}}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{auth()->id()}}">
                            <div class="card mb-3">
                                <div class="card-header font-weight-bold text-center bg-warning"><i class="fa fa-fw fa-exclamation-triangle"></i>DESCRIPCIÓN DE LA PRUEBA</div>
                                <div class="card-body text-justify">
                                    <p class="card-text m-1"><span class="font-weight-bold">OBJETIVO: </span>Medir la fuerza máxima, a la vez que la resistencia.</p>            
                                    <p class="card-text m-1"><span class="font-weight-bold">EJECUCIÓN: </span>Nos agarraremos a una barra con los brazos estirados (en suspensión) y tiraremos hacia arriba con toda la fuerza posble llevando nuestro cuerpo a la par que nuestros brazos.</p>
                                    <p class="card-text m-1"><span class="font-weight-bold">VALORACIÓN: </span>Para valorar positivamente esta prueba, debemos tener en cuenta dos factores importantes. (1) llevar la barbilla por encima de la barra y (2) al bajar, estirar los codos al completo.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2 class="text-center">Baremo Dominandas</h2>
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center bg-info">Flexiones</th>
                                            <th class="text-center bg-info">Puntos</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">0 a 4</td>
                                                <td class="text-center"> 0 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center"> 1 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td class="text-center"> 2 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td class="text-center"> 3 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">8 y 9</td>
                                                <td class="text-center"> 4 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">10 y 11</td>
                                                <td class="text-center"> 5 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">12 y 13</td>
                                                <td class="text-center"> 6 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td class="text-center"> 7 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">15</td>
                                                <td class="text-center"> 8 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">16</td>
                                                <td class="text-center"> 9 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">17</td>
                                                <td class="text-center"> 10 </td>
                                            </tr>                                                                               
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="text-center">Baremo Isométrico</h2>
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center bg-info">Duración</th>
                                            <th class="text-center bg-info">Puntos</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">0 a 35´´</td>
                                                <td class="text-center"> 0 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">36´´ a 40´´</td>
                                                <td class="text-center"> 1 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">41´´ a 45´´</td>
                                                <td class="text-center"> 2 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">46´´ a 51´´</td>
                                                <td class="text-center"> 3 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">52´´ a 56´´</td>
                                                <td class="text-center"> 4 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">57´´ a 62´´</td>
                                                <td class="text-center"> 5 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">63´´ a 69´´</td>
                                                <td class="text-center"> 6 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">70´´ a 77´´</td>
                                                <td class="text-center"> 7 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">78´´ a 85´´</td>
                                                <td class="text-center"> 8 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">86´´ a 94´´</td>
                                                <td class="text-center"> 9 </td>
                                            </tr>                                                                               
                                            <tr>
                                                <td class="text-center">95´´ o +</td>
                                                <td class="text-center"> 10 </td>
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
                                                    <input class="text-center h-100 w-40 border-0" type="number" name="baremo_dominada" required> 
                                                    <p class="d-inline ml-2 mr-2">/</p>
                                                    <input class="text-center h-100 w-40 border-0" type="number" name="baremo_isometrico" required>
                                                </td>
                                                <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if (session()->has('infodom_susp_isometricoTest'))
                                <div class="alert alert-success text-center" role="alert">
                                    <strong>{{ session('infodom_susp_isometricoTest') }}!</strong>
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