@extends('layouts.app', ['activePage' => 'formulario', 'title' => 'Sistema de Sumate', 'navName' => 'Formulario', 'activeButton' => 'laravel'])
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('guardar_registro') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header card-header-info">
                        <img src="{{ asset('light-bootstrap/img/banner-1.jpg') }}" width="1000px" height="200px" alt="banner sumate">
                        <h4 class="card-title text-center"><span class="text-danger">(*)</span> Campos Obligatorios</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> CI :</label>
                                <input type="text" name="ci" id="ci" class="form-control" style="text-transform: uppercase;" value="{{old('ci')}}" >
                                @error('ci')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Nombre Completo:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" style="text-transform: uppercase;" value="{{old('nombre')}}" >
                                @error('nombre')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Genero :</label>
                                <select name="genero" id="genero" class="form-control" value="{{old('genero')}}" >
                                    <option value="">Seleccione una opcion</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                </select>
                                @error('genero')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Edad</label>
                                <input type="text" name="edad" id="edad" class="form-control" style="text-transform: uppercase;" value="{{old('edad')}}" >
                                @error('edad')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" style="text-transform: uppercase;" value="{{old('telefono')}}" >
                                @error('telefono')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for=""><span class="text-danger">(*)</span> Ciudad</label>
                                <select name="ciudad" id="ciudad" class="form-control" value="{{old('ciudad')}}">
                                    <option value="">Seleccione una opcion</option>
                                    <option value="SANTA CRUZ">SANTA CRUZ</option>
                                    <option value="COCHABAMBA">COCHABAMBA</option>
                                    <option value="LA PAZ">LA PAZ</option>
                                    <option value="BENI">BENI</option>
                                    <option value="PANDO">PANDO</option>
                                    <option value="ORURO">ORURO</option>
                                    <option value="POTOSI">POTOSI</option>
                                    <option value="TARIJA">TARIJA</option>
                                    <option value="EL ALTO">EL ALTO</option>
                                    <option value="CHUQUISACA">CHUQUISACA</option>
                                </select>
                                @error('ciudad')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                        </div>
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