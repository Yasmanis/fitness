@extends('dashboard.layout.master')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/user-card">Ficha de Usuario</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
    </ol>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{ asset('theme/dashboard/img/avatar.png') }}" alt="Avatar" class="img-fluid">
        </div>
        <div class="col-sm-9">
            <form method="POST" action="{{route('user_ficha')}}" class="mb-3">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="age">Edad</label>
                        <input type="number" class="form-control" id="age" name="edad" placeholder="Edad" required>
                    </div>
                </div>
                <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="phone">Teléfono de Contacto:</label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Teléfono" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="profile">Perfil Tanita:</label>
                                <select id="profile" name="id_perfil_tanita" class="form-control" required>
                                    <option selected>Choose...</option>
                                    <option value="1">Mujer no deportista</option>
                                    <option value="2">Mujer deportista</option>
                                    <option value="3">Hombre no deportista</option>
                                    <option value="4">Hombre deportista</option>
                                </select>
                            </div>   
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="weight">Peso(Kg)</label>
                        <input type="number" name="peso" class="form-control" step="0.01" id="weight" placeholder="Peso" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="height">Estatura(cm)</label>
                        <input type="number" name="estatura" class="form-control" id="height" placeholder="Estatura" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="profile">Perfil</label>
                        <textarea name="perfil" class="form-control" id="profile" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="injury">Lesiones a tener en cuenta</label>
                        <textarea name="lesiones" class="form-control" id="injury" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="habits">Hábitos de actividad física</label>
                        <textarea name="habitos" class="form-control" id="habits" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="objective">Objetivo</label>
                        <textarea name="objetivos" class="form-control" id="objective" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                        <p class="ml-4 text-muted"> Mi género</p>
                        <ul>
                            <li class="d-inline">
                                <label class="custom-control custom-radio">
                                    <input name="genero" value="mujer" type="radio" class="custom-control-input" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Mujer</span>
                                </label>
                            </li>
                            <li class="d-inline">
                                <label class="custom-control custom-radio">
                                    <input name="genero" value="hombre" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Hombre</span>
                                </label>
                            </li>
                        </ul>
                        <div>
                            <p class="ml-4 d-inline">Nací en:</p>
                            <input class="ml-5 mt-1 d-inline" name="day_of_birth" type="date" value="{{now()}}" required>
                        </div>
                </div>                                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection