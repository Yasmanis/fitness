@extends('dashboard.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/user-tanita">Prueba Tanita</a>
    </li>
    <li class="breadcrumb-item active">Tanita</li>
</ol>
<div class="row">
    <div class="col-12">
            <form class="form-inline">
                <div class="form-group mb-2 col">
                    <label for="inputState">Usuario</label>
                    <select id="inputState" class="form-control col-md-3 ml-3 mr-3">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>                    
            </form>  
    </div>
</div>
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
                <td>Peso(Kg):</td>
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
                <td>BMI(índice):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Peso graso general(%):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Hidratación(%):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Peso Muscular(Kg):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Complexión física(índice):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Peso óseo(Kg):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Gasto calórico(BMR/Kcal):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Edad metabólica(años):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Grasa visceral(nivel):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Fuerza mano derecha(Kg):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Fuerza mano izquierda(Kg):</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
            <tr>
                <td>Observaciones en la toma de datos:</td>
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
                <td><input class="text-center h-100 w-100 border-0" type="text"></td>
            </tr>            
        </tbody>
        </table>
</div>
@endsection