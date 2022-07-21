@extends('layouts.web')

@section('content')
<section class="sec6 mt-5" id="perfil" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 profile_left">
                <div class="profile">
                    <div class="image">
                        <img src="{{ asset('img/user.svg') }}" alt="Perfil">
                    </div>

                    <div class="redes sombrita">
                        <div class="tit">
                            <h3>Subir Imagen:</h3>
                        </div>
                            <ul>
                                <li>
                                <input type="file" class="form-control">
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 profile_right">
                <div class="information sombrita">
                    <div class="tit"><h3>Datos Personales:</h3></div>
                    <ul>
                        <li><p>Nombres: <span>YANETH MARIZOL</span></p></li>
                        <li><p>Apellidos: <span>FACTOR HUERTA</span></p></li>
                        <li class=""><p>Número de documento: <span>47792355</span></p></li>
                        <li class=""><p>Fecha de nacimiento: <span>10-06-2022</span></p></li>
                        <li class="description d-none"><p>Descripción: <span></span></p></li>
                    </ul>
                </div>
                <div class="contact sombrita">
                    <div class="tit"><h3>Datos de Contacto:</h3></div>
                    <ul>
                        <li class="">
                            <p>Numero de Celular: <img src="https://aula.enppeduca.com/images/flags/pe.png" alt=""><span>(+51) 952588124</span></p>
                        </li>
                        <li>
                            <p>Correo Electronico: <span>yanethmarizol@gmail.com</span></p>
                        </li>
                    </ul>
                </div>
                <div class="address sombrita">
                    <div class="tit">
                        <h3>Domicilio:</h3>
                    </div>
                    <ul>
                        <li class="">
                            <p>Dirección: <span>Avenida Peru al costado de la otra Avenida</span></p>
                        </li>
                        {{-- <li>
                            <p>País: <span>PERÚ</span></p>
                        </li>
                        
                        <li>
                            <p>Ciudad: <span>LIMA</span></p>
                        </li>
                        
                        <li>
                            <p>Provincia: <span>LIMA</span></p>
                        </li>
                        
                        <li>
                            <p>Distrito: <span>JESUS MARIA</span></p>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection