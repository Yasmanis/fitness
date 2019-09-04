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
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Test de Rockport</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-testd1" role="tabpanel" aria-labelledby="pills-testd1-tab">
                            
                        <form method="POST" action="{{route('storerockportTest')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                        <div class="container-fluid">
                                <div class="row">
                                    <h2 class="text-center">Baremo Masculino</h2>
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center bg-info">Estado</th>
                                            <th class="text-center bg-info"> < 29 años </th>
                                            <th class="text-center bg-info">  30 a 39 años </th>
                                            <th class="text-center bg-info">  40 a 49 años </th>
                                            <th class="text-center bg-info">  50 a 59 años </th>
                                            <th class="text-center bg-info">  60 a 69 años </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="background-color: pink">Bajo</td>
                                                <td class="text-center"> < 25 </td>
                                                <td class="text-center"> < 23 </td>
                                                <td class="text-center"> < 20 </td>
                                                <td class="text-center"> < 18 </td>
                                                <td class="text-center"> < 16 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="background-color: brown">Regular</td>
                                                <td class="text-center"> 25 - 33 </td>
                                                <td class="text-center"> 23 - 30 </td>
                                                <td class="text-center"> 20 - 26 </td>
                                                <td class="text-center"> 18 - 24 </td>
                                                <td class="text-center"> 16 - 22 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center bg-warning">Medio</td>
                                                <td class="text-center"> 34 - 42 </td>
                                                <td class="text-center"> 31 - 38 </td>
                                                <td class="text-center"> 27 - 35 </td>
                                                <td class="text-center"> 25 - 33 </td>
                                                <td class="text-center"> 23 - 30 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="background-color: greenyellow">Bueno</td>
                                                <td class="text-center"> 43 - 52 </td>
                                                <td class="text-center"> 39 - 48 </td>
                                                <td class="text-center"> 36 - 44 </td>
                                                <td class="text-center"> 34 - 42 </td>
                                                <td class="text-center"> 31 - 40 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center bg-success">Excelente</td>
                                                <td class="text-center"> > 52 </td>
                                                <td class="text-center"> > 48 </td>
                                                <td class="text-center"> > 44 </td>
                                                <td class="text-center"> > 42 </td>
                                                <td class="text-center"> > 40 </td>
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
                                                <th class="text-center bg-info"> < 29 años </th>
                                                <th class="text-center bg-info">  30 a 39 años </th>
                                                <th class="text-center bg-info">  40 a 49 años </th>
                                                <th class="text-center bg-info">  50 a 59 años </th>
                                                <th class="text-center bg-info">  60 a 69 años </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="background-color: pink">Bajo</td>
                                                    <td class="text-center"> < 24 </td>
                                                    <td class="text-center"> < 20 </td>
                                                    <td class="text-center"> < 17 </td>
                                                    <td class="text-center"> < 15 </td>
                                                    <td class="text-center"> < 13 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: brown">Regular</td>
                                                    <td class="text-center"> 24 - 30 </td>
                                                    <td class="text-center"> 20 - 27 </td>
                                                    <td class="text-center"> 17 - 23 </td>
                                                    <td class="text-center"> 15 - 20 </td>
                                                    <td class="text-center"> 13 - 17 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center bg-warning">Medio</td>
                                                    <td class="text-center"> 31 - 37 </td>
                                                    <td class="text-center"> 28 - 33 </td>
                                                    <td class="text-center"> 24 - 30 </td>
                                                    <td class="text-center"> 21 - 27 </td>
                                                    <td class="text-center"> 18 - 23 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="background-color: greenyellow">Bueno</td>
                                                    <td class="text-center"> 38 - 48 </td>
                                                    <td class="text-center"> 34 - 44 </td>
                                                    <td class="text-center"> 31 - 41 </td>
                                                    <td class="text-center"> 28 - 37 </td>
                                                    <td class="text-center"> 24 - 34 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center bg-success">Excelente</td>
                                                    <td class="text-center"> > 48 </td>
                                                    <td class="text-center"> > 44 </td>
                                                    <td class="text-center"> > 41 </td>
                                                    <td class="text-center"> > 37 </td>
                                                    <td class="text-center"> > 34 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="row mt-3">
                                    <div class="col">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center bg-info">Usuario</th>
                                                    <th class="text-center bg-info">F.C</th>
                                                    <th class="text-center bg-info">Distancia</th>
                                                    <th class="text-center bg-info">Tiempo</th>
                                                    <th class="text-center bg-info">Ficha de Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="w-20 text-center">{{ Auth::user()->name }}</td>
                                                    <td class="w-20 text-center">
                                                        <input class="text-center h-100 w-100 border-0" type="text" name="fc" required> 
                                                    </td>
                                                    <td class="w-20 text-center">
                                                        <input class="text-center h-100 w-100 border-0" type="text" name="distancia" required> 
                                                    </td>
                                                    <td class="w-20 text-center">
                                                        <input class="text-center h-100 w-100 border-0" type="text" name="tiempo" required> 
                                                    </td>
                                                    <td class="w-20 text-center">
                                                        <a href="#">Ficha {{ Auth::user()->name }}</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @if (session()->has('inforockportTest'))
                                    <div class="alert alert-success text-center" role="alert">
                                        <strong>{{ session('inforockportTest') }}!</strong>
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