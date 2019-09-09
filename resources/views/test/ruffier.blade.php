@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
                <a href="{{ route('vgetruffier') }}">Ruffier</a>
        </li>
        <li class="breadcrumb-item active">Pruebas</li>
    </ol>

    <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Ruffier</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                            
                        <form method="POST" action="{{route('storeruffierTest')}}">
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
                                        <p class="card-text m-1"><span class="font-weight-bold">OBJETIVO: </span>Medir la resistencia aeróbica al esfuerzo de corta duración y la capacidad de recuperación cardíaca.</p>            
                                        <p class="card-text m-1"><span class="font-weight-bold">EJECUCIÓN: </span>1º Utilizar las pulsaciones en reposo, tomadas previamente. 2º Realizar 30 sentadillas profundas de piernas a un ritmo constante, en un ángulo de 90º en 45 segundos. 3º Tomarse las pulsaciones, durante un minuto, inmediatamente después de acabar las sentadillas, descansar otro minuto y volver a tomarse las pulsaciones durante otro más.</p>
                                    </div>
                                </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2 class="text-center">Baremo</h2>
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center bg-info">Clasificación</th>
                                                        <th class="text-center bg-info"> Valores </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center bg-success">Excelente</td>
                                                            <td class="text-center">0</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center" style="background-color: greenyellow">Bueno</td>
                                                            <td class="text-center">0.1 - 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center bg-warning">Medio</td>
                                                            <td class="text-center">5.1 - 10</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center" style="background-color: brown">Medio</td>
                                                            <td class="text-center">10.1 - 15</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center bg-danger">Malo (requiere evaluación)</td>
                                                            <td class="text-center">15.1 - 20</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-sm-6 mt-5">
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">(P1 + P2 + P3 )- 200 / 10 </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">P1 = Pulsaciones por minuto en reposo. </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">P2 = Pulsaciones por minuto después del ejercicio.	</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">P3 = Pulsaciones por minuto después de un minuto de recuperación.</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>     
                                    <div class="row">
                                            <div class="col">
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center bg-info">Usuario</th>
                                                            <th class="text-center bg-info">F.C en Reposo</th>
                                                            <th class="text-center bg-info">F.C Máxima</th>
                                                            <th class="text-center bg-info">F.C de Reserva</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-25 text-center">{{ Auth::user()->name }}</td>
                                                            <td class="w-25 text-center">
                                                                <input class="text-center h-100 w-100 border-0" type="text" name="fcreposo" required> 
                                                            </td>
                                                            <td class="w-25 text-center">
                                                                <input class="text-center h-100 w-100 border-0" type="text" name="fcmaxima" required> 
                                                            </td>
                                                            <td class="w-25 text-center">
                                                                <input class="text-center h-100 w-100 border-0" type="text" name="fcreserva" required> 
                                                            </td>
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
                                    @if (session()->has('infostoreruffierTest'))
                                        <div class="alert alert-success text-center" role="alert">
                                            <strong>{{ session('infostoreruffierTest') }}!</strong>
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