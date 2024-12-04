<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Cencosud</title>
    <style>
      @page {
          margin-left: 0.5cm;
          margin-right: 0;
          margin-top:2cm;
          margin-bottom:4cm;
        }
        .logo-container {
          position: relative;
          text-align: center;
        }

        .logo {
            height: 110px;
            width: 350px;
            background-color: #095aa5;
            margin: 15px auto;
          }

        .logocadena {
            height: 110px;
            width: 150px;
            position: relative;
            margin: 15px auto;
          }
          .qr-container {
            text-align: center;
            margin-top: 20px; 
            margin-bottom: 20px;
          }

        .qr {
          height: 165px;
          width: 150px;
          text-align: center;
          margin: 0 auto;
        }
        .nombrec{
            text-align: center;
            position: relative;
        }
        .tabla{
            top: 25px;
            text-align: center;
            position: relative;
            left: 90px;
        }
        .mensaje{
          color: red;
          font-weight: bold;
          margin-bottom: 20px;
        }

        .c_mensaje{
          padding: 10px 20px 20px;
        }

      
    </style>
</head>
  </head>
  <body>
    <div style="width: 100%;">
      <br>

      <div class="logo-container">
        <div class="logo">
         <img src="{{ public_path('ImgPublic/cenco-check.png')}}">
        </div>
        <div class="logocadena">
          @if($campana->cadena->id === 1 )
          <img src="{{ public_path('ImgPublic/logo-jumbo-small.png')}}">
          @endif
	        @if($campana->cadena->id === 2 )
          <img src="{{ public_path('ImgPublic/logo-sisa-small.png')}}">
          @endif
	        @if($campana->cadena->id === 3 )
          <img src="{{ public_path('ImgPublic/logo-spid-small.png')}}">
          @endif
        </div>
      </div>
        <div class="nombrec">
        <h4>Campaña {{$campana->nombre}}</h4>
        <span class="mensaje">¡Recuerda!</span> <br>
        <span class="mensaje">Debes implementar en el packaging de las degustaciones y sampling el código QR de la autorización.<span>
        </div>
      <div class="qr-container">
        <div class="qr">
        {!! DNS2D::getBarcodeHTML("$urlQrcode", 'QRCODE', 5,5) !!}
        </div>
      </div>
      <div class = "tabla">
      <table style="width: 80%;">
        <tr>
          <td style=" width: 50%; padding-bottom: 10px;">Estado:</td>
          <td>{{$campana->estado->nombre}}</td>
        </tr>
        <tr >
          <td style=" padding-bottom: 10px;">Etapa:</td>
          <td>{{$campana->etapa_promotora->nombre}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Cadena:</td>
          <td>{{$campana->cadena->nombre}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Vigencia:</td>
          <td>{{$campana->desde." al ".$campana->hasta}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Proveedor:</td>
          <td>{{$campana->proveedor->nombre}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Sección:</td>
          <td>{{ $campana->sesion->cdg_int."-".$campana->sesion->nombre}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Salas:</td>
        </tr>
        @if( $campana->salas->count()>0)
            @foreach($campana->salas as $sala)
             <tr>
              <td></td>
              <td> {{$sala->display_nombre_sap}}</td>
            </tr>
            @endforeach
        @endif
	<tr>
          <td style="padding-bottom: 20px;">Turno:</td>
          <td>{!! $campana->turno->nombre!!}</td>
        </tr>
	<tr>
          <td style="padding-bottom: 20px;">Entrega Regalo:</td>
          <td>{!! $campana->entrega_regalo == 1 ? 'SI' : 'NO' !!}</td>
        </tr>
	<tr>
          <td style="padding-bottom: 20px;">Degustación:</td>
          <td>{!! $campana->degustacion == 1 ? 'SI' : 'NO' !!}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Mueble:</td>
          <td>{!! $campana->material_externo == 1 ? 'SI' : 'NO' !!}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Concurso:</td>
          <td>{!! $campana->concurso_asociado == 1 ? 'SI' : 'NO' !!}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 20px;">Descripción:</td>
          <td>{{$campana->descripcion}}</td>
        </tr>
      </table>
    </div>
    </div>
  </body>
</html>
