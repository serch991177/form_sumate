@extends('layouts.app', ['activePage' => 'formulario', 'title' => 'Sistema de Sumate', 'navName' => 'Formulario', 'activeButton' => 'laravel'])
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('guardar_registro') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header card-header-info">
                        <h1 class="card-title text-center">FORMULARIO SUMATE</h1>
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
                                <label for=""><span class="text-danger">(*)</span> Nombre :</label>
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
                                <input type="text" name="ciudad" id="ciudad" class="form-control" style="text-transform: uppercase;" value="{{old('ciudad')}}" >
                                @error('ciudad')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <input type="submit" value="Guardar Registro" class="btn btn-info">
                        </div>
                    </div>    
                    
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    
@endpush