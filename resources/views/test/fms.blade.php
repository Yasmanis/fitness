@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('getfms') }}">FMS</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
    </ol>

    <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">FMS</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                    
                            <form method="POST" action="{{route('storefmsTest')}}">
                                @csrf
                        {{-- <div class="row">
                        <div class="col-12">
                        <form method="POST" action="{{route('storeplieguesperimetrosTest')}}" class="form-inline">
                                @csrf
                            <div class="form-group mb-2 col">
                                <label for="inputState">Usuario</label>
                                <select id="inputState" name="user_id" class="form-control col-3 mr-3 ml-3">
                                        <option selected>Choose...</option>
                                        @foreach ($user_fichas as $item)
                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                </select>
                                <div class="form-group col-md-3">
                                  <label for="fecha">Fecha:</label>
                                  <input type="date" class="form-control" id="fecha" name="fecha">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>                    
                        </form>  
                </div>
            </div> --}}
                            <div class="card mb-3">
                                    <div class="card-header font-weight-bold text-center bg-warning"><i class="fa fa-fw fa-exclamation-triangle"></i>DESCRIPCIÓN DE LA PRUEBA</div>
                                    <div class="card-body text-justify">
                                        <p class="card-text">Esta prueba se basa en evaluar la movilidad o rango de movimiento del usuario y, dependiendo de los resultados, tanto individuales como colectivos, determinar si dicha persona necesita evaluación médica urgente o necesita tratamiento especial para mejorar la falta de movilidad en las zonas de las que carece de la misma.</p>
                                    </div>
                                </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center bg-info">Prueba</th>
                                    <th class="text-center bg-info" colspan="2">Puntuación Final</th>
                                    <th class="text-center bg-info">Puntuación Final</th>
                                    <th class="text-center bg-info">Observaciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sentadillas con brazos</td>
                                        <td colspan="2"></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="santadillasPF" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="santadillasObservaciones" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td class="w-20 font-weight-bold bg-info">Parte izquierda</td>
                                        <td class="w-20 font-weight-bold bg-info">Parte derecha</td>
                                        <td colspan="2"></td>                            
                                    </tr>
                                    <tr>
                                        <td class="w-20">Paso de valla</td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="paso_vallaI" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="paso_vallaD" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="paso_vallaPF" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="paso_vallaObservaciones" required></td>                              
                                    </tr>
                                    <tr>
                                        <td class="w-20">Estocada en línea</td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estocada_lineaI" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estocada_lineaD" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estocada_lineaPF" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estocada_lineaObservaciones" required></td>                              
                                    </tr>
                                    <tr>
                                        <td class="w-20">Movilidad de hombros</td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="movilidad_hombrosI" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="movilidad_hombrosD" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="movilidad_hombrosPF" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="movilidad_hombrosObservaciones" required></td>                              
                                    </tr>
                                    <tr>
                                        <td class="w-20">Elevación activa con pierna recta</td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="elev_activa_pierna_rectaI" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="elev_activa_pierna_rectaD" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="elev_activa_pierna_rectaPF" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="elev_activa_pierna_rectaObservaciones" required></td>                              
                                    </tr>
                                    <tr>
                                        <td class="w-20">Estabilidad de tronco en flexión</td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_flexionI" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_flexionD" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_flexionPF" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_flexionObservaciones" required></td>                              
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td class="w-20 font-weight-bold bg-info">Parte izquierda</td>
                                        <td class="w-20 font-weight-bold bg-info">Parte derecha</td>
                                        <td colspan="2"></td>                            
                                    </tr>
                                    <tr>
                                        <td class="w-20">Estabilidad de tronco en rotación</td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_rotacionI" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_rotacionD" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_rotacionPF" required></td>
                                        <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text" name="estab_tronco_en_rotacionObservaciones" required></td>                              
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="text-center">Total: <input class="text-center h-100 w-50 border-0" type="text" name="total" required></td>
                                        <td colspan="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                            @if (session()->has('infofmsTest'))
                                <div class="alert alert-success text-center" role="alert">
                                    <strong>{{ session('infofmsTest') }}!</strong>
                                </div>
                            @endif
                            <div class="d-flex mb-3">
                                <div class="ml-auto">
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-body">
                                  <p><span class="font-weight-bold">VARÓN:</span> Nivel aceptable de calidad de movimiento >14</p>
                                  <p><span class="font-weight-bold">MUJER:</span> Nivel aceptable de calidad de movimiento >16</p>
                              </div>
                            </div>
                            </form>
                        </div>
                
            </div>
    </div>
@endsection