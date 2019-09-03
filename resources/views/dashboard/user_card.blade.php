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
            <form class="mb-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="age">Edad</label>
                        <input type="number" class="form-control" id="age" placeholder="Edad">
                    </div>
                </div>
                <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="phone">Teléfono de Contacto:</label>
                                <input type="number" class="form-control" id="phone" placeholder="Teléfono">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="email" placeholder="Correo">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="profile">Perfil Tanita:</label>
                                <select id="profile" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="Mujer no deportista">Mujer no deportista</option>
                                    <option value="Mujer deportista">Mujer deportista</option>
                                    <option value="Hombre no deportista">Hombre no deportista</option>
                                    <option value="Hombre deportista">Hombre deportista</option>
                                </select>
                            </div>   
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="weight">Peso(Kg)</label>
                        <input type="number" class="form-control" step="0.01" id="weight" placeholder="Peso">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="height">Estatura(cm)</label>
                        <input type="number" class="form-control" id="height" placeholder="Estatura">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="profile">Perfil</label>
                        <textarea class="form-control" id="profile" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="injury">Lesiones a tener en cuenta</label>
                        <textarea class="form-control" id="injury" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="habits">Hábitos de actividad física</label>
                        <textarea class="form-control" id="habits" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="objective">Objetivo</label>
                        <textarea class="form-control" id="objective" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                        <p class="ml-4 text-muted"> Mi género</p>
                        <ul>
                            <li class="d-inline">
                                <label class="custom-control custom-radio">
                                    <input name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Mujer</span>
                                </label>
                            </li>
                            <li class="d-inline">
                                <label class="custom-control custom-radio">
                                    <input name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Hombre</span>
                                </label>
                            </li>
                        </ul>
                        <div>
                            <p class="ml-4 d-inline">Nací en:</p>
                            <input class="ml-5 mt-1 d-inline" type="date" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                        </div>
                </div>                                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection