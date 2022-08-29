@extends('layouts.web')
@section('css')
    {{-- <link href="{{ asset('css/alerts_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"
        integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="sec4 mt-0" id="curso">
        <div class="container-fluid">
            <livewire:docentes.publicacion-controller />
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/cute-alert.js') }}"></script>
    {{-- <script src="{{ asset('js/toastr.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                Livewire.on('confirmQuitarRecurso', recursoId=>{
                    cuteAlert({
                    type: "question",
                    title: "Mensaje de Sistema",
                    img: "question.svg",
                    message: "¿Esta seguro de Quitar el Recurso?",
                    confirmText: "SI",
                    cancelText: "NO"
                    }).then((e)=>{
                        console.log(e)
                    if ( e == ("confirm")){
                        Livewire.emitTo('docentes.publicacion-controller','eliminarRecurso',recursoId)
                    } else {
                        console.log('No confirmo');
                    }
                    })
                });
                Livewire.on('confirmQuitarSoftware', requerimientoId=>{
                    cuteAlert({
                    type: "question",
                    title: "Mensaje de Sistema",
                    img: "question.svg",
                    message: "¿Esta seguro de quitar el software del requerimiento?",
                    confirmText: "SI",
                    cancelText: "NO"
                    }).then((e)=>{
                        console.log(e)
                    if ( e == ("confirm")){
                        Livewire.emitTo('requerimiento','quitarsoftware',requerimientoId)
                    } else {
                        console.log('No confirmo');
                    }
                    })
                });
            });
@endsection
