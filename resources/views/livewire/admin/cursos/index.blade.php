@extends('adminlte::page')

{{-- @section('title', 'Cursos') --}}

@section('content_header')
    <div class="d-flex justify-content-center ">
        <h3 class="font-weight-bold mt-2 ">CURSOS</h3>
    </div>
@stop

@section('content')
    <livewire:admin.curso-controller />
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
@stop
