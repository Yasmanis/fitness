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
                    <a class="nav-link active" id="pills-test1-tab" data-toggle="pill" href="#pills-test1" role="tab" aria-controls="pills-test1" aria-selected="true">Pliegues y Perímetros</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" id="pills-test2-tab" data-toggle="pill" href="#pills-test2" role="tab" aria-controls="pills-test2" aria-selected="false">FMS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-test3-tab" data-toggle="pill" href="#pills-test3" role="tab" aria-controls="pills-test3" aria-selected="false">Plancha Prono</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" id="pills-test4-tab" data-toggle="pill" href="#pills-test4" role="tab" aria-controls="pills-test4" aria-selected="false">Burpees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-test5-tab" data-toggle="pill" href="#pills-test5" role="tab" aria-controls="pills-test5" aria-selected="false">Dominadas/Suspensión Isométrica</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" id="pills-test6-tab" data-toggle="pill" href="#pills-test6" role="tab" aria-controls="pills-test6" aria-selected="false">Cooper</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" id="pills-test7-tab" data-toggle="pill" href="#pills-test7" role="tab" aria-controls="pills-test7" aria-selected="false">Ruffier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-test8-tab" data-toggle="pill" href="#pills-test8" role="tab" aria-controls="pills-test8" aria-selected="false">Salto Vertical</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-test9-tab" data-toggle="pill" href="#pills-test9" role="tab" aria-controls="pills-test9" aria-selected="false">Test de Rockport</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center bg-info" colspan="2">Pliegues Grasos(mm)</th>
                            <th class="text-center bg-danger" colspan="2">Perímetros(cm)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tripcipital</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td>Brazo</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>
                        <tr>
                            <td>Gemelo</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td>Pecho</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>
                        <tr>
                            <td>Subescapular</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td>Abdomen</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>
                        <tr>
                            <td>Suprailíaco</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td>Cadera</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>
                        <tr>
                            <td>Abdominal</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td>Muslo</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td>Gemelo</td>
                            <td class="w-25"><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="d-flex mb-3">
                        <div class="ml-auto">
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-test2" role="tabpanel" aria-labelledby="pills-test2-tab">
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
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                            </tr>
                            <tr>
                                <td colspan="1"></td>
                                <td class="w-20 font-weight-bold bg-info">Parte izquierda</td>
                                <td class="w-20 font-weight-bold bg-info">Parte derecha</td>
                                <td colspan="2"></td>                            
                            </tr>
                            <tr>
                                <td class="w-20">Paso de valla</td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>                              
                            </tr>
                            <tr>
                                <td class="w-20">Estocada en línea</td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>                              
                            </tr>
                            <tr>
                                <td class="w-20">Movilidad de hombros</td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>                              
                            </tr>
                            <tr>
                                <td class="w-20">Elevación activa con pierna recta</td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>                              
                            </tr>
                            <tr>
                                <td class="w-20">Estabilidad de tronco en flexión</td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>                              
                            </tr>
                            <tr>
                                <td colspan="1"></td>
                                <td class="w-20 font-weight-bold bg-info">Parte izquierda</td>
                                <td class="w-20 font-weight-bold bg-info">Parte derecha</td>
                                <td colspan="2"></td>                            
                            </tr>
                            <tr>
                                <td class="w-20">Estabilidad de tronco en rotación</td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                <td class="w-20"><input class="text-center h-100 w-100 border-0" type="text"></td>                              
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-center">Total: <input class="text-center h-100 w-50 border-0" type="text"></td>
                                <td colspan="1"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex mb-3">
                        <div class="ml-auto">
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                          <p><span class="font-weight-bold">VARÓN:</span> Nivel aceptable de calidad de movimiento >14</p>
                          <p><span class="font-weight-bold">MUJER:</span> Nivel aceptable de calidad de movimiento >16</p>
                      </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-test3" role="tabpanel" aria-labelledby="pills-test3-tab">
                        <div class="card mb-3">
                            <div class="card-header font-weight-bold text-center bg-warning"><i class="fa fa-fw fa-exclamation-triangle"></i>DESCRIPCIÓN DE LA PRUEBA</div>
                            <div class="card-body text-justify">
                                <p class="card-text m-1"><span class="font-weight-bold">OBJETIVO: </span>Medir la resistencia muscular localzada.</p>            
                                <p class="card-text m-1"><span class="font-weight-bold">EJECUCIÓN: </span>La prueba consiste en ponerse en posición de plancha, apoyando los brazos, alineando las piernas extendidas con la columna y manteniendo la cadera en posición neutra. Los brazos deben mantener un ángulo de 90ºen la articulación del codo.</p>
                                <p class="card-text m-1"><span class="font-weight-bold">VALORACIÓN: </span>El test valora el tiempo que se puede mantener la posición estable y sin compensación. El test finaliza cuando la cadera desciende o se dispone en anteversión, acentuándose la curva lumbar o una hiperlordosis.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="text-center">Baremo Masculino</h2>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center bg-info">Clasificación</th>
                                        <th class="text-center bg-info">Valores</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bg-success text-center">Excelente</td>
                                            <td class="text-center"> > 120´´</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-warning text-center">Bueno</td>
                                            <td class="text-center"> 61´´- 119´´</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-danger text-center">Bajo</td>
                                            <td class="text-center"> < 60´´</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="text-center">Baremo Femenino</h2>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center bg-info">Clasificación</th>
                                        <th class="text-center bg-info">Valores</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bg-success text-center">Excelente</td>
                                            <td class="text-center"> > 70´´</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-warning text-center">Bueno</td>
                                            <td class="text-center"> 31´´- 69´´</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-danger text-center">Bajo</td>
                                            <td class="text-center"> < 30´´</td>
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
                                            <td class="w-30"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                            <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-test4" role="tabpanel" aria-labelledby="pills-test4-tab">
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
                                            <td class="w-30"><input class="text-center h-100 w-100 border-0" type="text"></td>
                                            <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-test5" role="tabpanel" aria-labelledby="pills-test5-tab">
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
                                                <input class="text-center h-100 w-40 border-0" type="text"> 
                                                <p class="d-inline ml-2 mr-2">/</p>
                                                <input class="text-center h-100 w-40 border-0" type="text">
                                            </td>
                                            <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-test6" role="tabpanel" aria-labelledby="pills-test6-tab">
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
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                                <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="ml-auto">
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="pills-test7" role="tabpanel" aria-labelledby="pills-test7-tab">
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
                                                <th class="text-center bg-info">Nombre</th>
                                                <th class="text-center bg-info">Resultados</th>
                                                <th class="text-center bg-danger">Ficha de Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="w-35 text-center">{{ Auth::user()->name }}</td>
                                                <td class="w-30 text-center">
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                                <td class="w-35 text-center"> <a href="#">Ficha {{ Auth::user()->name }}</a></td>
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
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                                <td class="w-25 text-center">
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                                <td class="w-25 text-center">
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="ml-auto">
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="pills-test8" role="tabpanel" aria-labelledby="pills-test8-tab">
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
                                            <input class="text-center h-100 w-100 border-0" type="text"> 
                                        </td>
                                        <td class="w-25 text-center">
                                            <input class="text-center h-100 w-100 border-0" type="text"> 
                                        </td>
                                        <td class="w-25 text-center">
                                            <a href="#">Ficha {{ Auth::user()->name }}</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="ml-auto">
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-test9" role="tabpanel" aria-labelledby="pills-test9-tab">
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
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                                <td class="w-20 text-center">
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                                <td class="w-20 text-center">
                                                    <input class="text-center h-100 w-100 border-0" type="text"> 
                                                </td>
                                                <td class="w-20 text-center">
                                                    <a href="#">Ficha {{ Auth::user()->name }}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="ml-auto">
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>

@endsection
