@extends('dashboard.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('vgetplancha_prono') }}">Visualización Plancha Prono</a>
    </li>
    <li class="breadcrumb-item active">Home</li>
</ol>

<div class="container">
        <form method="POST" action="{{route('storeplanchapronoTest')}}" class="form-inline mb-2">
            @csrf
                <div class="form-group mb-2">
                    <label for="user_id" class="mr-2">Usuario:</label>
                    <select id="user_id" name="user_id" class="form-control">
                        <option selected>Choose...</option>
                        @foreach ($user_fichas as $item)
                            @if (session()->has('user_id') && session('user_id') == $item->id)
                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                            @else 
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2 mx-sm-3">
                        <label for="date" class="mr-2">Año</label>
                        <select id="date" name="date" class="form-control">
                            <option selected>Choose...</option>
                                @for ($i = 2019; $i < 2100; $i++)
                                  <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 my-0">Submit</button>
        </form>  

            @if (session()->has('valores_test'))
                @foreach ($collection = session('valores_test') as $item)
                    
                @endforeach
            @endif

            <div class="row mb-3">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center bg-info" colspan="1"></th>
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
                            <td>Resultado:</td>
                            @if (!empty($collection))
                                @foreach ($collection as $item)
                                    <td>{{$item->resultado}}</td>
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
        <div class="container">
            <div class="row">
            @if (session()->has('resultado'))
                <div class="col-sm">
                    <div style="width:250px; float:left; margin:30px">
                        <canvas id="resultado" width="200" height="200" ></canvas> 
                    </div>
                </div>
            @endif           
            
            </div>
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


@endpush