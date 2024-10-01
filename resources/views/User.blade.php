@extends('layouts.app', ['activePage' => 'user', 'title' => 'Sistema de Sumate', 'navName' => 'Creacion de Usuarios', 'activeButton' => 'laravel'])

@section('content')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-end me-3 my-3">
                                <form action="" >   
                                    <a href="{{route('formulario-registro')}}" class="btn btn-md text-black" title="Crear Nuevo Usuario"><i class="nc-icon nc-tap-01"></i></a>
                                </form>    
                            </div>
                            <div class="table-responsive">
                                <!-- date table-->
                                <table id="example" class="dt-responsive table-bordered data-table dataTable no-footer dtr-inline collapsed" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Correo</th>
                                            <th>Nombre</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($registro as $registros)                                                                                                  
                                            <tr>
                                                <td>{{$registros->id}}</td>
                                                <td>{{$registros->email}}</td>
                                                <td>{{$registros->name}}</td>
                                                <td>
                                                    <div class="form-group text-center">
                                                        <form action="{{route('editar_funcionario')}}" method="post" >
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$registros->id}}">
                                                            <button class="btn btn-warning" title="Ver / Editar"><i class="fa fa-file-text-o"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
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
        </div>
    </div>
    <style>
        /* Estilo para los encabezados de la tabla */
        .data-table thead th {
            background-color: #8E2386; /* Azul similar al de la imagen */
            color: white; /* Texto en blanco para buen contraste */
            border-bottom: 2px solid #8E2386; /* Borde púrpura para combinar */
        }
        /* Estilo para las filas de la tabla */
        .data-table tbody tr:nth-child(odd) {
            background-color: #f1f9ff; /* Fondo claro con tono azulado */
        }
        .data-table tbody tr:nth-child(even) {
            background-color: #e9f3fb; /* Fondo aún más claro para filas pares */
        }
        /* Estilo para el hover sobre las filas */
        .data-table tbody tr:hover {
            background-color: #8E2386; /* Púrpura al hacer hover */
            color: white; /* Texto en blanco */
        }
        /* Estilo para las celdas */
        .data-table td {
            border: 1px solid #8E2386; /* Borde púrpura */
        }
        /* Estilo para las filas seleccionadas */
        .data-table tbody tr.selected {
            background-color: #8E2386; /* Púrpura cuando se selecciona una fila */
            color: white;
        }
    </style>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $('#example').DataTable( {
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
        },
    } );
</script>
@endpush