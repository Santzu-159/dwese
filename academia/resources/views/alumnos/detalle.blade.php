@extends('plantillas.plantilla')
@section('titulo')
Academia s.a.
@endsection
@section('cabecera')
Gestión de Alumnos
@endsection
@section('contenido')
@if ($text=Session::get('mensaje'))
    <p class="alert alert-danger my-3">{{$text}}</p>
@endif
<span class="clearfix"></span>
    <div class="card text-white bg-info mt-5 mx-auto" style="max-width: 48rem;">
        <div class="card-header text-center"><b>{{($alumno->nombre)}}</b></div>
        <div class="card-body" style="font-size: 1.1em">
            <h5 class="card-title text-center">Codigo: exit{{($alumno->id)}}</h5>
            <p class="card-text">
            <div class="float-right"><img src="{{asset($alumno->logo)}}" width="160px" heght="160px" class="rounded-circle"></div>
            <p><b>Nombre:</b> {{$alumno->nombre.", ".$alumno->apellidos}}</p>
            <p><b>Mail:</b> {{$alumno->mail}}</p>
            <p><b>Módulos:</b>
                <div class="row align-items-sm-stretch">
                <ul>
                    @foreach ($alumno->modulos as $modulo)
                        <li>{{$modulo->nombre." (".$modulo->pivot->nota.")"}}</li>
                    @endforeach
                </ul>
            </div>
            </p>
            </p>
            <a href="{{route('alumnos.index')}}" class="float-right btn btn-success">Volver</a>
            <a href="{{route('alumnos.fmatricula', $alumno)}}"class ="float-right btn btn-warning mr-2 mt-3">Matricular Alumno</a>
        </div>
    </div>
@endsection