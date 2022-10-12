@extends('layouts.web')
@section('css')
    <link href="{{ asset('css/alerts_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div class="container">
        <livewire:docentes.calificacion-controller />
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/toastr.js') }}"></script>
@endsection
