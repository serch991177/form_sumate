@extends('layouts.app', ['activePage' => 'formulario', 'title' => 'Sistema de Sumate', 'navName' => 'Formulario', 'activeButton' => 'laravel'])
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('crear_usuario') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title text-center"><span class="text-danger">(*)</span> Campos Obligatorios</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Nombre Completo :</label>
                                <input type="text" name="name" id="name" class="form-control" style="text-transform: uppercase;" value="{{old('name')}}" >
                                @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Correo Electronico:</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}" >
                                @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Contraseña :</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Estado :</label>
                                <select name="estado" id="estado" class="form-control" value="{{old('genero')}}" >
                                    <option value="">Seleccione una opcion</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option>
                                </select>
                                @error('estado')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" value="true" name="generador" id="generador">
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lila-outline btn-oval">Guardar Registro</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>
    </div>
    <style>
        .btn-lila-outline {
            color: #6c1b74;
            background-color: transparent;
            border: 2px solid #6c1b74; /* Color lila */
            border-radius: 25px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        .btn-lila-outline:hover {
            background-color: #6c1b74; /* Color lila al pasar el ratón (hover) */
            color: #fff; /* Cambia el color del texto al pasar el ratón (hover) */
        }
        .btn-oval {
            border-radius: 50px; 
        }
    </style>
@endsection

@push('js')
    
@endpush