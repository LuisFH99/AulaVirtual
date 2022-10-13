@extends('layouts.web')

@section('content')
<section class="sec6 mt-5" id="perfil" >
    <div class="container-fluid">
        <livewire:certificados />
    </div>
  </section>
@endsection
<!--
    <div class="mt-4 mx-4 row">
        <div class="col-md-6 p-3">
            <small class="fw-bold" >Perfil > Certificado del Curso de Ofimatica Basica. </small>
            <button class="btn btn-primario btn-sm w-5" ><i class="fas fa-arrow-circle-down"></i> Descargar Certificado</button>
            <br><br>
            {{-- <h5 class="text-dark fw-bold">¡Muchas felicidades!</h5><br> class="d-flex justify-content-center"--}}
            <a href="" target="_blank" ><img class="shadow p-0 bg-body rounded" src="{{ asset('img\CERTIFICADO-OFIMATICA.jpg') }}" style="width: 100%" alt="Certificado"></a><br><br>
        </div>
        <div class="col-md-6 p-0 mt-4">
            <div class="card p-3 mt-5 mb-3">
                <h6 class="text-dark fw-bold mb-4" style="color: #2d529f">Mis Cursos:</h6>
                <select class="form-select form-select-sm" aria-label="Default select example">
                    <option selected>Seleccionar Curso</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select><br><br>
                <small class="text-muted " style="font-size: 11px"><span class="text-danger fw-bold">(*) </span>Seleccione su curso para visualizar el certificado correspondiente.</small>
            </div>
            <div class="card p-4">
                <h4 class="text-dark fw-bold d-flex justify-content-center mb-3">¡Muchas felicidades!🎉🎉🎉</h4>
                <small class="mb-4 fw-bold text-muted d-flex justify-content-center">Ahora podras descargar todos los certificados del curso y compartir tus logros.</small>
                <div class="row">
                    <div class="mb-3">
                        <small class="text-dark">Modulo 1:</small>
                        <button class="btn btn-primario btn-sm w-5" ><i class="fas fa-arrow-circle-down"></i> Descargar Certificado</button>
                        <button class="btn btn-cancel btn-sm w-5" ><i class="fas fa-eye"></i> ver</button>
                    </div>
                    
                </div>
            </div><br>
        </div>
        
    </div>

-->