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
                </ul>
            </div>

            <div class="tab-content col-12" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-test1" role="tabpanel" aria-labelledby="pills-test1-tab">
                            <form method="POST" action="{{route('storeplieguesperimetrosTest')}}">
                                @csrf
                                <div class="container">
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputState">Usuario</label>
                                          <select id="inputState" name="user_id" class="form-control">
                                            <option selected>Choose...</option>
                                            {{-- @foreach ($user_fichas as $item)
                                              <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach --}}
                                          </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="fecha">Fecha:</label>
                                          <input type="date" class="form-control" id="fecha" name="fecha">
                                        </div>
                                </div>
                                </div>
                                <hr>

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
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="tripcipital" required></td>
                                    <td>Brazo</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="brazo" required></td>
                                </tr>
                                <tr>
                                    <td>Gemelo</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="plieguesgemelo" required></td>
                                    <td>Pecho</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="pecho" required></td>
                                </tr>
                                <tr>
                                    <td>Subescapular</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="subescapular" required></td>
                                    <td>Abdomen</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="abdomen" required></td>
                                </tr>
                                <tr>
                                    <td>Suprailíaco</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="suprailiaco" required></td>
                                    <td>Cadera</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="cadera" required></td>
                                </tr>
                                <tr>
                                    <td>Abdominal</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="abdominal" required></td>
                                    <td>Muslo</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="muslo" required></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>Gemelo</td>
                                    <td class="w-25"><input class="text-center h-100 w-100 border-0" type="number" name="perimetrogemelo" required></td>
                                </tr>
                                </tbody>
                            </table>
                            @if (session()->has('infoplieguesperimetrosTest'))
                                <div class="alert alert-success text-center" role="alert">
                                    <strong>{{ session('infoplieguesperimetrosTest') }}!</strong>
                                </div>
                            @endif
                            <div class="d-flex mb-3">
                                <div class="ml-auto">
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </div>
                            </div>
                        </form>
                        </div>
                
            </div>
    </div>
@endsection