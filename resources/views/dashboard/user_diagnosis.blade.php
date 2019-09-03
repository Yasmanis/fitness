@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/user-diagnosis">Anamnésis</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
    </ol>
    <h2 class="text-center my-2">Historia médica</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="custom-controls-stacked d-block my-3">
                        <h6 class="text-center font-weight-bold">Ha padecido usted:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Infarto de miocardio y/o angina de pecho</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Cirugía cardiáca</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Cateterismo cardiaco</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Angioplastia coronaria</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Implante de marcapasos o desfribilador cardiaco</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Enfermedad en válvula cardiaca</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Enfermedad cardiaca congénita</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Transplante cardiaco</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="custom-controls-stacked d-block my-3">
                        <h6 class="text-center font-weight-bold">Síntomas:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Molestias en el pecho con el esfuerzo</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Falta de aire desproporcionada al esfuerzo realizado</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Ha tenido marco, desfallecimiento o pérdida de conciencia</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Toma medicación para el corazón o la tensión arterial</span>
                        </label>
                        <h6 class="text-center font-weight-bold">Edad:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Persona de 65 años en adelante</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center my-2">Indique si se encuentra en alguna de estas situaciones</h2>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="custom-controls-stacked d-block my-3">
                        <h6 class="text-center font-weight-bold">Factores de riesgo cardiovascular:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Hombre mayor de 45 años</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Mujer mayor de 55 años</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Histerectomia (extirpación uterina)</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Menopáusica</span>
                        </label>
                        <h6 class="text-center font-weight-bold">Tensión arterial:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Desconocida</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Mayor a 180/35</span>
                        </label>
                        <h6 class="text-center font-weight-bold">Fumador:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Más de x cigarrillos diarios</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Antiguo fumador</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="custom-controls-stacked d-block my-3">
                        <h6 class="text-center font-weight-bold">Colesterol:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Desconocido</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Por encima de 200 mg/dl</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Algún familiar ha sufrido un ataque cardiaco antes de los 55 años</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Diabético</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Sedentarismo (actividad física < 30min en 3 días en la semana)</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Obesidad</span>
                        </label>
                        <h6 class="text-center font-weight-bold">Otros:</h6>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Problemas en huesos o articulaciones</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Otras enfermedades</span>
                        </label>
                        <label class="custom-control ios-switch d-block">
                            <input type="checkbox" class="ios-switch-control-input">
                            <span class="ios-switch-control-indicator"></span>
                            <span class="ios-switch-control-description">Posible ejercicio físico perjudicial</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection