@extends('adminlte::page')

{{-- @section('title', 'Estudiantes') --}}

@section('content_header')
    <div class="d-flex justify-content-center ">
        <h3 class="font-weight-bold mt-2 ">GESTION DE ESTUDANTES</h3>
    </div>
@stop

@section('content')
    <livewire:admin.estudiante-controller />
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
@stop
