@extends('dashboard.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('vgetfms') }}">Visualización FMS</a>
    </li>
    <li class="breadcrumb-item active">Home</li>
</ol>
<div class="container">
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
                            <td>Total:</td>
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