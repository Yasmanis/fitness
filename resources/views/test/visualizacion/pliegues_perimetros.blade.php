@extends('dashboard.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/test/vpliegues_perimetros">Visualización Pliegues Perímetros</a>
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
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>                    
                        </form>  
                </div>
            </div> --}}
            <div class="row mb-3">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center bg-info" colspan="1">Pliegues Grasos(mm):</th>
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
                            <td>Gemelo:</td>
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
                            <td>Subescapular:</td>
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
                            <td>Suprailíaco:</td>
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
                            <td>Abdominal:</td>
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
                            <td class="text-center bg-danger font-weight-bold">Perímetros(cm):</td>
                            <td colspan="12"></td>                
                        </tr>            
                        <tr>
                            <td>Brazo:</td>
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
                            <td>Pecho:</td>
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
                            <td>Abdomen:</td>
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
                            <td>Cadera:</td>
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
                            <td>Muslo:</td>
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
                            <td>Gemelo:</td>
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
</div>

@endsection