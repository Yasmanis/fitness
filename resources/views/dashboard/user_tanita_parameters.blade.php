@extends('dashboard.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/user-tanita-parameters">Parámetros Tanita</a>
    </li>
    <li class="breadcrumb-item active">Home</li>
</ol>
<div class="container mb-5">
    <form method="POST" action="{{route('user-tanita-parameters')}}">
      @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Usuario</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              @foreach ($user_fichas as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
          </div>
        </div>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="peso">Peso(Kg):</label>
            <input type="number" class="form-control" id="peso" name="peso" placeholder="Peso" required>
          </div>
          <div class="form-group col-md-4">
            <label for="bmi">BMI(índice):</label>
            <input type="number" class="form-control" id="bmi" name="bmi" placeholder="BMI" required>
          </div>
          <div class="form-group col-md-4">
            <label for="peso_graso_general">Peso graso general(%):</label>
            <input type="number" class="form-control" id="peso_graso_general" name="peso_graso_general" placeholder="Peso Graso General" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="hidratacion">Hidratación(%):</label>
            <input type="number" class="form-control" id="hidratacion" name="hidratacion" placeholder="Hidratación" required>
          </div>
          <div class="form-group col-md-4">
            <label for="peso_muscular">Peso Muscular(Kg):</label>
            <input type="number" class="form-control" id="peso_muscular" name="peso_muscular" placeholder="Peso Muscular" required>
          </div>
          <div class="form-group col-md-4">
            <label for="complexion_fisica">Complexión física(índice):</label>
            <input type="number" class="form-control" id="complexion_fisica" name="complexion_fisica" placeholder="Complexión Física" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="peso_oseo">Peso óseo(Kg):</label>
            <input type="number" class="form-control" id="peso_oseo" name="peso_oseo" placeholder="Peso Óseo" required>
          </div>
          <div class="form-group col-md-4">
            <label for="gasto_calorico">Gasto calórico(BMR/Kcal):</label>
            <input type="number" class="form-control" id="gasto_calorico" name="gasto_caloritico" placeholder="Gasto Calórico" required>
          </div>
          <div class="form-group col-md-4">
            <label for="edad_metabolica">Edad metabólica(años):</label>
            <input type="number" class="form-control" id="edad_metabolica" name="edad_metabolica" placeholder="Edad Metabólica" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="grasa_visceral">Grasa visceral(nivel):</label>
            <input type="number" class="form-control" id="grasa_visceral" name="grasa_visceral" placeholder="Grasa Visceral" required>
          </div>
          <div class="form-group col-md-4">
            <label for="fuerza_mano_derecha">Fuerza mano derecha(Kg):</label>
            <input type="number" class="form-control" id="fuerza_mano_derecha" name="fuerza_mano_derecha" placeholder="Fuerza mano derecha" required>
          </div>
          <div class="form-group col-md-4">
            <label for="fuerza_mano_izquierda">Fuerza mano izquierda(Kg):</label>
            <input type="number" class="form-control" id="fuerza_mano_izquierda" name="fuerza_mano_izquierda" placeholder="Fuerza mano izquierda" required>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="observaciones_toma_datos">Observaciones en la toma de datos:</label>
                <textarea class="form-control" id="observaciones_toma_datos" name="observaciones" rows="3" required></textarea>
            </div>
        </div>
        @if (session()->has('info'))
            <div class="alert alert-success text-center" role="alert">
                <strong>{{ session('info') }}!</strong>
            </div>
        @endif        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection