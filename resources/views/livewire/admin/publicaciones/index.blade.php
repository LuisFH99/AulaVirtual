@extends('adminlte::page')

{{-- @section('title', 'Publicaciones') --}}

@section('content_header')
    <div class="d-flex justify-content-center ">
        <h3 class="font-weight-bold mt-2 ">PUBLICACIONES RECIENTES</h3>
    </div>
@stop

@section('content')
    <livewire:admin.publicaciones-controller />
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('show-add', event =>{
             $('#add').modal('show');
            })
                
    window.addEventListener('hide-add', event =>{
            $('#add').modal('hide');
            })

    window.addEventListener('show-addTema', event =>{
             $('#addTema').modal('show');
            })
                
    window.addEventListener('hide-addTema', event =>{
            $('#addTema').modal('hide');
            })
            
    function Confirm(id){
        Swal.fire({
        title: 'Confirmar',
        text: "¿Esta seguro de eliminar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#303F9F',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Eliminar'
        }).then(function(result){
        if (result.value) {
        window.livewire.emit('deleteRow',id)
            swal.close()
        }})
    }
</script>
@stop