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
            top: 5px;
            text-align: center;
            position: relative;
            left: 90px;
        }
        .mensaje{
          color: red;
          font-weight: bold;
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

      <div>
      </div>
        <div class="nombrec">
        <h4>Autorización de Ingreso de Implementación de campañas</h4>
        </div>
      <div class="logo-container">
        <div class="logo">
         <img src="{{ public_path('ImgPublic/cenco-check.png')}}">
        </div>
        <div class="logocadena">
          @if($campana->cadena->id ==1 )
          <img src="{{ public_path('ImgPublic/logo-jumbo-small.png')}}">
          @else
          <img src="{{ public_path('ImgPublic/logo-sisa-small.png')}}">
          @endif
        </div>
        </div>
          <div class="nombrec">
          <h4>Campaña {{$campana->nombre}}</h4>
          <span class="mensaje">¡Recuerda!</span> <br>
          <span class="mensaje">Debes implementar este código QR en el material aprobado, de lo contrario no podrás activar la campaña.<span>
          </div>
        <div class="qr-container">
        <div class="qr">
        {!! DNS2D::getBarcodeHTML("$urlQrcode", 'QRCODE', 5,5) !!}
        </div>
      </div>
      
      <div class = "tabla">
      <table style="width: 100%;">
        <tr>
          <td style="padding-bottom: 10px;">Estado:</td>
          <td>{{$campana->campana_estado->nombre}}</td>
        </tr>
        
        <tr >
          <td style="width: 30%; padding-bottom: 10px;">Etapa:</td>
          <td>{{$campana->campana_etapa->nombre}}</td>
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
          <td style="padding-bottom: 20px;">Zona:</td>
          <td>{!! $campana->zonas->implode('nombre', '<br>') !!}</td>
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
        </tr>
       <!-- {{--  <tr>
          <td style="padding-bottom: 20px;">Salas:</td>
          <td>{!! $campana->salas->implode('nombre_sap', '<br>') !!}</td>
        </tr> --}} -->

        <tr>
          <td style="padding-bottom: 20px;">Material POP a implementar:</td>
          <td>{{$campana->descripcion}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Espacio Exhibición:</td>
          <td>{{ $campana->espacio_exhibicion->nombre}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Zona Exhibición:</td>
          <td>{{ $campana->zona_exhibicion->nombre}}</td>
        </tr>
      </table>
    </div>
    </div>
  </body>
</html>