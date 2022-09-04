<div class="row">
    @foreach ($usuarios as $u)
    <div class="col-md-4 profile_left">
        <div class="profile">
            <div class="image">
                @if ($u->image !=null)
                    <img class="img-fluid" style="width:100%; height::100%" src="{{ asset('storage/img/'.$u->image) }}">
                    <h6 class="text-center fw-bold text-primary mt-2" wire:loading  wire:target="image">*Subiendo Foto....</h6>
                @else
                    <img src="{{ asset('img/user.svg') }}" alt="Perfil">
                @endif
            </div>

            <div class="redes sombrita">
                <div class="tit">
                    <h3>Subir Foto:</h3>
                </div>
                    <ul>
                        <li>
                            <div class="row">
                                <form wire:submit.prevent="save">
                                    <div class="d-grid gap-2 mx-auto">
                                        <input type="file" wire:model.defer="image"  class="form-control @error('image') is-invalid @enderror" id="image">
                                        @error('image')<span class="text-danger er">{{$message}}</span>@enderror
                                        <button class="btn btn-primario btn-block" type="submit"><i class="fa-solid fa-upload"></i>&nbsp;Actualizar Foto</button>
                                      </div>
                                    {{-- <div class="col-dm-10">
                                        <input type="file" wire:model.defer="image"  class="form-control @error('image') is-invalid @enderror" id="image">
                                        @error('image')<span class="text-danger er">{{$message}}</span>@enderror
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary btn-block" type="submit"><i class="fa-solid fa-cloud-arrow-up"></i></button>
                                    </div>
                                    <h6 class="text-center fw-bold text-primary" wire:loading  wire:target="image">Subiendo Foto...</h6> --}}
                                </form>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8 profile_right">
        <div class="information sombrita">
            <div class="tit"><h3>Datos Personales:</h3></div>
            <ul>
                <li><p>Nombres: <span>{{$u->nombres}}</span></p></li>
                <li><p>Apellidos: <span>{{$u->apellidos}}</span></p></li>
                <li class=""><p>Número de documento: <span>{{$u->dni}}</span></p></li>
                <li class=""><p>Fecha de nacimiento: <span>{{$u->fechNac}}</span></p></li>
                <li class="description d-none"><p>Descripción: <span></span></p></li>
            </ul>
        </div>
        <div class="contact sombrita">
            <div class="tit"><h3>Datos de Contacto:</h3></div>
            <ul>
                <li class="">
                    <p>Numero de Celular: <img src="https://aula.enppeduca.com/images/flags/pe.png" alt=""><span>(+51) {{$u->celular}}</span></p>
                </li>
                <li>
                    <p>Correo Electronico: <span>{{$u->correo}}</span></p>
                </li>
            </ul>
        </div>
        <div class="address sombrita">
            <div class="tit">
                <h3>Domicilio:</h3>
            </div>
            <ul>
                <li class="">
                    <p>Dirección: <span>-</span></p>
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

    @endforeach
</div>

