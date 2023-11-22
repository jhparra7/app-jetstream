@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1 class="font-bold text-blue-700 text-2xl">Inicio</h1>
    <a href="{{route('cursos.index')}}">Cursos</a>
@endsection