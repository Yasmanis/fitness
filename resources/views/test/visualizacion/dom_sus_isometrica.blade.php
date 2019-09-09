@extends('dashboard.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('vgetdomin_susp_isométrica') }}">Visualización Dominadas/Suspensión Isométrica</a>
    </li>
    <li class="breadcrumb-item active">Home</li>
</ol>
<div class="container">
        <form method="POST" action="{{route('vdomin_susp_isométrica')}}" class="form-inline mb-2">
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
                            <td>Tiempo:</td>
                            <td><input class="text-center h-100 w-100 border-0" type="text" disabled></td>                
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>            
                        <tr>
                            <td>Cantidad:</td>
                            <td><input class="text-center h-100 w-100 border-0" type="text" disabled></td>                
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                            <td><input class="text-center h-100 w-100 border-0" type="text"></td>
                        </tr>            
                        
                    </tbody>
                    </table>
            </div>
</div>

@endsection