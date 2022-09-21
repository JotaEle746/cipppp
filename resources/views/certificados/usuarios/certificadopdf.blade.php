<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 PDF</title>
    <!-- Bootstrap CSS -->
    <style>
        .container{
            text-align: center;
            padding: 40px 15% 30px 15%; 
        }
        .firm{
            display: flex;
            justify-content: center;
            padding-top: 20px;
        }
        .fir1{
            padding: 10px;
            float: left;
        }
        .fir2{
            padding: 10px;
            float: right;
        }
    </style>
</head>

<body>
    <div class="container mt-4 row justify-center-center">
        <div class="row">
            <div class="col text-center">
                <h4>COLEGIO DE INGENIEROS DEL PERÚ CD - PUNO</h4>
                <h1>CERTIFICADO</h1>
            </div>
            <div class="col display-5">
                <h3>Otorgado a:</h3>
                <h3 class="text-center mb-1">
                    {{$colegiado->nombres}}
                </h3>
                <p>En reconocimiento por su participación en el CURSO TALLER EN PORGRACMIÓN CON LARVEL EN CALIDAD DE ASISTENTE, módulo organizado por el Capítulo de Ingenieria de y de systemas."</p>
                <p>llevado a cabo desde el hasta de del, con una duración de días.<span class="font-weight-bold text-uppercas">{{-- {{$curso->nombre}} --}}</span>
                    {{--  {{$curso->duracion}} --}}
                </p>
            </div>
            <br>
            <div class="firm">
                <div class="fir1">
                    <p>________________________________________</p>
                    <p>Ing. Jhomar Marcelino Tonconi Quispe</p>
                    <p>DECANO</p>
                    <p>COLEGIO DE INGENIEROS DEL PERÜ CD-PUNO</p>
                </div>
                <div class="fir2">
                    <p>________________________________________</p>
                    <p>Ing.</p>
                    <p>DIRECTOR DE ESTUDIOS
                    </p>
                    <p>CAPITULO</p>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
