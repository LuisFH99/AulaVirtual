@extends('adminlte::page')

{{-- @section('title', 'Publicaciones') --}}

@section('content_header')
    {{-- <div class="d-flex justify-content-center ">
        <h3 class="font-weight-bold mt-2 "></h3>
    </div> --}}
@stop

@section('content')
    <livewire:admin.matricula-controller />
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_style.css">
@stop

@section('js')
    
@stop