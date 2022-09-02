
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('icons/fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo-fundasam.png') }}">
    <style>
        @media(max-width:650px){
            .img-contenido{
                display: none;
            }
            .body{
                overflow-y: visible;
            }
            input{
                width: 100%
            }
            hr{
                width: 100%
            }
        }
    </style>
</head>
<body style="overflow-y: hidden">
    <div class="row d-flex m-0">
        <div class="col-sm-7 bg-white p-0 m-0 rounded  img-contenido">
            <img src="{{ asset('img/4600166 - copia.jpg') }}" class="img-fluid p-0 m-0" alt="Imagen login" width="400" style="width: 90%;height:100%;">
        </div>
        <div class="col-sm-5 p-5 m-0 "> 
            <div class="text-center">
                <img src="{{ asset('img\logo-fundasam.png') }}" class="img-fluid imagen-login" width="100" alt="logo de la unasam">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="align-self-center text-center">
                <h4 class="text-dark fw-bold mr-5 mt-4 "> BIENVENIDO AL AULA VIRTUAL FUNDASAM</h4>
                <small class="text-muted ">Por favor, ingrese sus credenciales para iniciar sesion</small>
            </div>
            
            <hr style=" border: 2px solid rgb(248, 249, 250); width: 85%"><!-- style="background: rgb(234, 239, 251) -->
            <form method="POST" action="{{ route('login') }}" class="m-0">
                @csrf
                <div class="mb-4">
                    <label for="email" class="col-md-4 col-form-label text-sm-start fw-bold ">{{ __('Usuario:') }}</label>
    
                    <div class="col-md-10">
                       <input id="email" class="username form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su usuario">
    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class=" mb-4">
                    <label for="password" class="col-md-4 col-form-label text-md-start fw-bold ">{{ __('Contraseña:') }}</label>
    
                    <div class="col-md-10">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingrese su contraseña"><br>
    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="mb-4">
                    <div class="col-md-10 text-center">
                        <div class="d-grid ">
                            <button class="btn btn-primary " type="submit">Ingresar&nbsp;<i class="fa-solid fa-right-to-bracket"></i></button>
                        </div>
                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link text-muted" href="{{ route('password.request') }}" style="text-decoration: none">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif --}}
                    </div>
                    <hr style=" border: 2px solid rgb(248, 249, 250); width: 85%">

                </div>
            </form>
        </div>
    </div>
</body>
</html>
{{-- @endsection --}}
