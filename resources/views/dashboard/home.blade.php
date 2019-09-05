@extends('dashboard.layout.master')

@section('content')
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div class="row">
            </div>
@endsection

@push('scripts')
    <script>
        function siguiente_paso(params,value) {
        //     contador = 1;
            
        //     //Saltas para el segundo paso
        //     if (!$('#'+params+'1').hasClass('d-none')) {
        //         contador = 2;
        //         $('#'+params+'1').addClass('d-none');
        //     }else{
        //         contador = 3
        //     }
        //     //Saltas para el tercer paso
        //     if ($('#'+params+'2').hasClass('d-none') && contador == 2) {
        //         $('#'+params+'2').removeClass( "d-none" );

        //     }else{
        //         $('#'+params+'2').addClass('d-none');
        //         $('#'+params+'3').removeClass( "d-none" )
        //     }
           
        }
    </script>
@endpush
