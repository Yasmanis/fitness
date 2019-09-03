@extends('dashboard.layout.master')

@section('content')
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1>Evaluación Fitness</h1>
                    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-paso1-tab" data-toggle="pill" href="#pills-paso1" role="tab" aria-controls="pills-paso1" aria-selected="true">Paso 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-paso2-tab" data-toggle="pill" href="#pills-paso2" role="tab" aria-controls="pills-paso2" aria-selected="false">Paso 2</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" id="pills-paso4-tab" data-toggle="pill" href="#pills-paso4" role="tab" aria-controls="pills-paso4" aria-selected="false">Paso 3</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-paso1" role="tabpanel" aria-labelledby="pills-paso1-tab">
                            <div class="card text-center">
                                <h2 class="card-header">¿Cómo de activo estás últimamente?</h2>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush text-left">
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Hago ejercicio regularmente</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Paso por distintas fases</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Considerame un novato</span>
                                            </label>
                                        </li>
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
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">A perder peso</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Fortalecer el torso</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Objetivo tren superior</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Objetivo tren inferior</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Desarrollar músculo</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Tonificar músculo</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Mejorar resistencia</span>
                                            </label>
                                        </li>
                                        <li class="list-group-control">
                                            <label class="custom-control custom-radio">
                                                <input name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Mejorar flexibilidad</span>
                                            </label>
                                        </li>
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
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Strengthen & Tone</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Campo de entrenamiento</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Weight Loss</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Aerobics</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Tabata</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">HIIT/Interval</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Peso Corporal</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Stay Fit Lifestyle</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="text-justify">
                                                        <h5 class="card-title">Functional Training</h5>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Plyometrics</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Suspension</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Equilibrio</span>
                                                        </label>
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
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Healthy Dieting</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Sports Nutrition</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Food & Recipes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-justify">
                                                        <h5 class="card-title">Health Conditions</h5>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Massage Therapy</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Physician</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Back Pain</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Arthritis</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Diabetes</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Injury Rehab</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Physical Therapy</span>
                                                        </label>
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="material-control-description">Hypertension</span>
                                                        </label>
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
                </div>
            </div>
@endsection
