@extends('layouts.app', ['activePage' => 'formulario', 'title' => 'Sistema de Sumate', 'navName' => 'Formulario', 'activeButton' => 'laravel'])

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-info">
                    <h1 class="card-title text-center">DATOS CABECERA</h1>
                    <h4 class="card-title text-center"><span class="text-danger">(*)</span> Campos Obligatorios</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <!-- date table-->
                        <table id="example" class="table dt-responsive table-bordered data-table dataTable no-footer dtr-inline collapsed " role="grid" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha de Registro</th>
                                    <th>Nombre</th>
                                    <th>Codigo</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($registro as $registros)                                                                                                  
                                    <tr>
                                        <td>{{$registros->id}}</td>
                                        <td>{{$registros->created_at}}</td>
                                        <td>{{$registros->identificacion}}</td>
                                        <td>{{$registros->codigo}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end date table-->  
                    </div>
                </div>      
                
            </div>
        </div>
    </div>
@endsection

@push('js')
<!--cdn javascript datatable-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<!-- inicializacion de data table-->
<script>
    $('#example').DataTable( {
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
        },
    } );
</script>
@endpush