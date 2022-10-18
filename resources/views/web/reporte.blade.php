<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado {{$curso}}</title>
    <style>

        html {
            margin: 0 0;
        }
        
        /* body{
            margin: 0;
            padding: 0;
        } */

        .fondo{
            
            background-image: url(img\CERTIFICADO-OFIMATICA.jpg);
            background-size: contain; 
            background-repeat: no-repeat;
            /* background-position: left; */
            position: relative;
            height: 100%;
            left: 1;
            /* margin: 0;
            padding: 0;
            border: 0; */
        }

        /* .qr{
            position: absolute; 
            right: 15; 
            bottom: 25;
        } */

        /* .text{
            position: absolute;
            left: 200;
            top: 254;
            font-family: 'Times New Roman', Times, serif;
            color: black;
            font-size: 50px;
        } */

    </style>
</head>
{{-- <body style="background-image: url(https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);background-repeat: no-repeat;background-size:100%"> --}}
<body>    
    {{-- <div class="fondo">
        <h1 class="text">Pineda Quispe Gonzalo</h1>
    </div>
    <div class="qr">
        <img src="data:image/svg+xml;utf8, {{ $valor }}" />
        <img src="data:image/svg+xml;base64,{{ base64_encode($qr) }}">
    </div> --}}
</body>
</html>