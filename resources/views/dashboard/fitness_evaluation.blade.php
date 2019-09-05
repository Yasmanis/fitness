@extends('dashboard.layout.master')

@section('content')
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Evaluación Fitness</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1>Evaluación Fitness</h1>
                    <form method="post" action="{{route('new_fitness_evaluation')}}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->id()}}">
                        <input type="submit" value="Procesar">
                    
                    <button id="button_siguiente" value="lipills-paso-tab" class="btn btn-success float-right" onclick="siguiente_paso(this.value)">Siguient</button>

                    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item" id="lipills-paso-tab1">
                            <a class="nav-link active" id="pills-paso-tab1" data-toggle="pill" href="#pills-paso1" role="tab" aria-controls="pills-paso1" aria-selected="true" onclick="siguiente_paso(this.id)">Paso 1</a>
                        </li>
                        <li class="nav-item" id="lipills-paso-tab2">
                            <a class="nav-link" id="pills-paso2-tab" data-toggle="pill" href="#pills-paso2" role="tab" aria-controls="pills-paso2" aria-selected="false" onclick="siguiente_paso(this.id)">Paso 2</a>
                        </li>                        
                        <li class="nav-item" id="lipills-paso-tab3" disabled>
                            <a class="nav-link" id="pills-paso4-tab" data-toggle="pill" href="#pills-paso4" role="tab" aria-controls="pills-paso4" aria-selected="false" onclick="siguiente_paso(this.id)">Paso 3</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-paso1" role="tabpanel" aria-labelledby="pills-paso1-tab">
                            <div class="card text-center">
                                <h2 class="card-header">¿Cómo de activo estás últimamente?</h2>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-left">
                                        @foreach ($fitness_actives as $item)
                                        <li class="list-group-control">
                                                <label class="custom-control custom-radio">
                                                    <input name="fitness_active_id" value="{{$item->id}}" type="radio" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">{{$item->option}}</span>
                                                </label>
                                            </li>
                                        @endforeach
                                       
                                        <br><br>
                                        <strong>{!! $errors->first('fitness_active_id','<div class="alert alert-danger text-danger" role="alert"><span class=error>Seleccione que tan activo se encuentra!! en el Paso1</span></div>') !!}</strong>
                                        <strong>{!! $errors->first('fitness_objetive_id','<div class="alert alert-danger text-danger" role="alert"><span class=error>Seleccione su principal objectivo!! en el Paso2</span></div>') !!}</strong>
                                        <strong>{!! $errors->first('condition_id','<div class="alert alert-danger text-danger" role="alert"><span class=error>Seleccione tres de las formaciones en las que esté interesado!! en el Paso3</span></div>') !!}</strong>
                                        
                                        
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    La constancia es la clave del éxito. Nosotros te ayudaremos a conseguirla!
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-paso2" role="tabpanel" aria-labelledby="pills-paso2-tab">
                            <div class="card text-center">
                                <h2 class="card-header">¿Con que objetivo quieres empezar?</h2>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-left">
                                        @foreach ($fitness_objectives as $item)
                                            <li class="list-group-control">
                                                <label class="custom-control custom-radio">
                                                    <input name="fitness_objetive_id" value="{{$item->id}}" type="radio" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">{{$item->option}}</span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    Impresionante, te ayudaremos a alcanzar este objetivo
                                </div>
                            </div>
                        </div>                    
                        <div class="tab-pane fade" id="pills-paso4" role="tabpanel" aria-labelledby="pills-paso4-tab">
                            <div class="card text-center">
                                <h2 class="card-header">¿Está interesado en cualquier tipo de formación?</h2>
                                <div class="card-body">
                                    <h3>Escoge hasta tres.</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-justify">
                                                        <h5 class="card-title">Conditioning</h5>
                                                        @foreach ($conditions as $item)
                                                            <label class="custom-control material-checkbox">
                                                                <input type="checkbox" class="material-control-input" name="condition_id[]" value="{{$item->id}}">
                                                                <span class="material-control-indicator"></span>
                                                                <span class="material-control-description">{{$item->name}}</span>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="text-justify">
                                                        <h5 class="card-title">Functional Training</h5>
                                                        @foreach ($functional_training as $item)
                                                            <label class="custom-control material-checkbox">
                                                                <input type="checkbox" name="functional_training_id[]" class="material-control-input" value="{{$item->id}}">
                                                                <span class="material-control-indicator"></span>
                                                                <span class="material-control-description">{{$item->name}}</span>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="text-justify">
                                                        <h5 class="card-title">Diet & Nutrition</h5>
                                                        @foreach ($diet_nutrition as $item)
                                                            <label class="custom-control material-checkbox">
                                                                <input type="checkbox" name="diet_nutrition_id[]" class="material-control-input" value="{{$item->id}}">
                                                                <span class="material-control-indicator"></span>
                                                                <span class="material-control-description">{{$item->name}}</span>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-justify">
                                                        <h5 class="card-title">Health Conditions</h5>
                                                        @foreach ($health_conditions as $item)
                                                            <label class="custom-control material-checkbox">
                                                                <input type="checkbox" name="health_conditions_id[]" class="material-control-input" value="{{$item->id}}">
                                                                <span class="material-control-indicator"></span>
                                                                <span class="material-control-description">{{$item->name}}</span>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    Te recomendaremos entrenadores, programas y rutinas para estas especialidades.
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
@endsection

@push('scripts')
    <script>
        function siguiente_paso(params,value) {
        //     contador = 1;
            
        //     //Saltas para el segundo paso
        //     if (!$('#'+params+'1').hasClass('d-none')) {
        //         contador = 2;
        //         $('#'+params+'1').addClass('d-none');
        //     }else{
        //         contador = 3
        //     }
        //     //Saltas para el tercer paso
        //     if ($('#'+params+'2').hasClass('d-none') && contador == 2) {
        //         $('#'+params+'2').removeClass( "d-none" );

        //     }else{
        //         $('#'+params+'2').addClass('d-none');
        //         $('#'+params+'3').removeClass( "d-none" )
        //     }
           
        }
    </script>
@endpush
