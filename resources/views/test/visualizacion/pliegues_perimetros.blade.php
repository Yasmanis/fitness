@extends('dashboard.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
<<<<<<< HEAD
        <a href="">Prueba Tanita</a>
=======
        <a href="{{ route('vgetpliegues_perimetros') }}">Visualización Pliegues Perímetros</a>
>>>>>>> 192bd471df61b1524c6f02f1992da2149d187efe
    </li>
    <li class="breadcrumb-item active">Home</li>
</ol>
<div class="container">
        <div class="row">
                <div class="col-12">
                        <form method="POST" action="{{route('vpliegues_perimetros')}}" class="form-inline">
                                @csrf
                            <div class="form-group mb-2 col">
                                <label for="inputState">Usuario</label>
                                <select id="inputState" name="user_id" class="form-control col-3 mr-3 ml-3">
                                        <option selected>Choose...</option>
                                        @foreach ($user_fichas as $item)
                                            @if (session()->has('user_id') && session('user_id') == $item->id)
                                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                            @else 
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
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
            </div>

            @if (session()->has('valores_test'))
                @foreach ($collection = session('valores_test') as $item)
                    
                @endforeach
            @endif

            <div class="row mb-3">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center bg-info" colspan="1">FMS:</th>
                            <th class="text-center">ENE</th>
                            <th class="text-center">FEB</th>
                            <th class="text-center">MAR</th>
                            <th class="text-center">ABR</th>
                            <th class="text-center">MAY</th>
                            <th class="text-center">JUN</th>
                            <th class="text-center">JUL</th>
                            <th class="text-center">AGO</th>
                            <th class="text-center">SEP</th>
                            <th class="text-center">OCT</th>
                            <th class="text-center">NOV</th>
                            <th class="text-center">DIC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tripcipital:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->tripcipital}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                
                            
                        </tr>            
                        <tr>
                            <td>Gemelo:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->plieguesgemelo}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Subescapular:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->subescapular}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Suprailíaco:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->suprailiaco}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Abdominal:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->abdominal}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td class="text-center bg-danger font-weight-bold">Perímetros(cm):</td>
                            <td colspan="12"></td>                
                        </tr>            
                        <tr>
                            <td>Brazo:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->brazo}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Pecho:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->pecho}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Abdomen:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->abdomen}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Cadera:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->cadera}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Muslo:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->muslo}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>            
                        <tr>
                            <td>Gemelo:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->perimetrogemelo}}</td>
                                @endforeach
                                @for ($i = 0; $i < 12 - count($collection); $i++)
                                    <td></td>
                                @endfor
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                        </tr>                        
                    </tbody>
                    </table>
            </div>
    </div>

    @if (session()->has('valores_test'))
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="">Gráficas de Test para {{$collection[0]->user->name}}</a>
            </li>
        </ol>
    @endif

    <div class="col">

        @if (session()->has('valores_tripcipital'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_tripcipital" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_plieguesgemelo'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_plieguesgemelo" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_subescapular'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_subescapular" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_suprailiaco'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_suprailiaco" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_abdominal'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_abdominal" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_brazo'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_brazo" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_pecho'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_pecho" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_abdomen'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_abdomen" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_cadera'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_cadera" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_muslo'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_muslo" width="200" height="200" ></canvas> 
        </div>
        @endif
        @if (session()->has('valores_perimetrogemelo'))
        <div style="width:250px; float:left; margin:30px">
            <canvas id="valores_perimetrogemelo" width="200" height="200" ></canvas> 
        </div>
        @endif

    </div>

@endsection

@push('scripts')

@if (session()->has('valores_tripcipital'))
<script>

    const ctx = document.getElementById('valores_tripcipital').getContext('2d');
    
    let chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Tripcipital",
            "data": <?php echo session('valores_tripcipital')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif

@if (session()->has('valores_plieguesgemelo'))
<script>

    const ctx2 = document.getElementById('valores_plieguesgemelo').getContext('2d');
    
    let chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Pliegues Gemelo",
            "data": <?php echo session('valores_plieguesgemelo')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif

@if (session()->has('valores_subescapular'))
<script>

    const ctx3 = document.getElementById('valores_subescapular').getContext('2d');
    
    let chart3 = new Chart(ctx3, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Subescapular",
            "data": <?php echo session('valores_subescapular')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif

@if (session()->has('valores_suprailiaco'))
<script>

    const ctx4 = document.getElementById('valores_suprailiaco').getContext('2d');
    
    let chart4 = new Chart(ctx4, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Suprailiaco",
            "data": <?php echo session('valores_suprailiaco')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif

@if (session()->has('valores_abdominal'))
<script>

    const ctx5 = document.getElementById('valores_abdominal').getContext('2d');
    
    let chart5 = new Chart(ctx5, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Abdominal",
            "data": <?php echo session('valores_abdominal')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif

@if (session()->has('valores_brazo'))
<script>

    const ctx6 = document.getElementById('valores_brazo').getContext('2d');
    
    let chart6 = new Chart(ctx6, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Brazo",
            "data": <?php echo session('valores_brazo')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif


@if (session()->has('valores_pecho'))
<script>

    const ctx7 = document.getElementById('valores_pecho').getContext('2d');
    
    let chart7 = new Chart(ctx7, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Pecho",
            "data": <?php echo session('valores_pecho')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif


@if (session()->has('valores_abdomen'))
<script>

    const ctx8 = document.getElementById('valores_abdomen').getContext('2d');
    
    let chart8 = new Chart(ctx8, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Abdomen",
            "data": <?php echo session('valores_abdomen')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif


@if (session()->has('valores_cadera'))
<script>

    const ctx9 = document.getElementById('valores_cadera').getContext('2d');
    
    let chart9 = new Chart(ctx9, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Cadera",
            "data": <?php echo session('valores_cadera')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif


@if (session()->has('valores_muslo'))
<script>

    const ctx10 = document.getElementById('valores_muslo').getContext('2d');
    
    let chart10 = new Chart(ctx10, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Muslo",
            "data": <?php echo session('valores_muslo')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif


@if (session()->has('valores_perimetrogemelo'))
<script>

    const ctx11 = document.getElementById('valores_perimetrogemelo').getContext('2d');
    
    let chart11 = new Chart(ctx11, {
        // The type of chart we want to create
        type: 'bar',
    
        "type": "bar",
    "data": {
        "labels": [
            'Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'
        ],
        "datasets": [{
            "label": "Perimetro Gemelo",
            "data": <?php echo session('valores_perimetrogemelo')?>,
            "fill": false,
            "backgroundColor": [
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)"
            ],
            "borderColor": [
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)"
            ],
            "borderWidth": 1
        }]
    },
    "options": {
        "scales": {
            "yAxes": [{
                "ticks": {
                    "beginAtZero": true
                }
            }]
        }
    }
    });


</script>

@endif
@endpush