@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Sistema de Sumate', 'navName' => 'Lista de Personas', 'activeButton' => 'laravel'])

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                            <div class="card-body">
                            <div class="table-responsive">
                                <!-- date table-->
                                <table id="example" class="dt-responsive table-bordered data-table dataTable no-footer dtr-inline collapsed" role="grid" >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>CI</th>
                                            <th>Nombre</th>
                                            <th>Género</th>
                                            <th>Edad</th>
                                            <th>Teléfono</th>
                                            <th>Ciudad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($registro as $registros)                                                                                                  
                                            <tr>
                                                <td>{{$registros->id}}</td>
                                                <td>{{$registros->ci}}</td>
                                                <td>{{$registros->nombre}}</td>
                                                <td>{{$registros->genero}}</td>
                                                <td>{{$registros->edad}}</td>
                                                <td>{{$registros->telefono}}</td>
                                                <td>{{$registros->ciudad}}</td>
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
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script> <!-- FontAwesome -->
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            responsive: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            dom: 'Bfrtip', // Activa los botones
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Exportar a Excel', // Agrega el icono
                    titleAttr: 'Exportar a Excel',
                    title: 'Lista de Personas',
                    className: 'btn btn-success', // Clase para el estilo verde
                    exportOptions: {
                        columns: ':visible' // Exporta solo columnas visibles
                    }
                }
            ]
        } );
    });
</script>
@endpush