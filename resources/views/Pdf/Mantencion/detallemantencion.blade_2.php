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
        .logo { height: 110px;
                width: 350px;
                text-align: center;
                background-color : #095aa5;
                position: relative;
                top: 15px;
                left: 130px;
                float:left;
                margin-left : 130px;
            }
            .logocadena { height: 110px;
                width: 150px;
                text-align: center;
                position: relative;
                top: 15px;
                left:190px;
            }       
        .qr { height: 165px;
                width: 150px;
                text-align: center;
                position: relative;
                top: 5px;
                left: 265px;
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
    </style>
</head>
  </head>
  <body>
    <div style="width: 100%;">
      <br>

      <div>
        <div class="logo">
         <img src="{{ public_path('ImgPublic/cenco-check.png')}}">
        </div>
        <div class="logocadena">
          @if($mantencion->id_cadena ==1 )
          <img src="{{ public_path('ImgPublic/logo-jumbo-small.png')}}">
          @else
          <img src="{{ public_path('ImgPublic/logo-sisa-small.png')}}">
          @endif
        </div>
      </div>
      <div class="nombrec">
        <h4>Asunto {{$mantencion->asunto}}</h4>
      </div>
      <div class = "tabla">
        <table style="width: 100%;">
          <tr>
            <td style="padding-bottom: 10px;">Zona:</td>
            <td>{{$zona}}</td>
          </tr>
          <tr>
            <td style="padding-bottom: 10px;">Sala:</td>
            <td>{{$sala}}</td>
          </tr>
          <tr>
            <td style="padding-bottom: 10px;">Solicitante:</td>
            <td>{{$mantencion->user_crea->nombre. ' ' . $mantencion->user_crea->apellido }}</td>
          </tr>
          <tr>
            <td style="padding-bottom: 10px;">Email Solicitante:</td>
            <td>{{$mantencion->user_crea->email}}</td>
          </tr>
        </table>
      </div>
      <br>
      <div class="nombrec">
        <h4>Materiales</h4>
      </div>
        <div class = "tabla">
      <table style="width: 100%;">
         @if( $mantencion->elementos->count()>0)
            @foreach($mantencion->elementos as $elemento)
             <tr>
              <td></td>
              <td> {{$elemento->nombre}}</td>
              <td> {{$elemento->medida}}</td>
              <td> <img src="{{public_path($elemento->url)}}" style="width: 300px; height: 250px;"  alt=""> </td>
            </tr>
            @endforeach
        @endif
      </table>
    </div>
      <br>

      <div class="nombrec">
        <h4>Comentarios</h4>
      </div>
      <div class = "tabla">
        <table style="width: 100%;">
          @foreach($mantencion->comentarios as $comentario)
          <tr>
            <td>{{$comentario->comentario}}</td>
          </tr>
          @endforeach
        </table>
      </div>
     
  
  
  </body>
</html>

