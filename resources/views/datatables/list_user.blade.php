@extends('datatables.layout.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Listado de Usuarios</a>
    </li>
    <li class="breadcrumb-item active">Home</li>
</ol>

<div class="container">
    <table id="example" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>  
                <th scope="col">Edad</th>  
                <th scope="col">Teléfono</th>  
                <th scope="col">Correo</th>  
                <th scope="col">Género</th>  
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user) 
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->edad }}
                    </td>
                    <td>
                        {{ $user->phone }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->genero }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('delete-user',$user->id) }}">
                            <i class="fa fa-fw fa-trash"></i>
                        </a>                                
                    </td>
                    </tr>
                    @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush