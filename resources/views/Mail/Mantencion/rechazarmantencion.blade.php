<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>{{$detalle_mail['nombre_mantencion']}}</title>
    <style>
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
            text-align: left;
            position: relative;
            left: 90px;
        }
    </style>
  </head>
  <body style="font-family: Roboto, sans-serif; box-sizing: border-box;">
    <header style="background-color: #F0F9FA; text-align: center; padding: 8px; border: solid 0.5px #95AFC0; border-radius: 5px;">
      <h4>{{$detalle_mail['nombre_mantencion']}}</h4>
    </header>
    <main style="padding: 0 30px;">
      <h2>Estimado(a):</h2>
      <p>{{$detalle_mail['nombre']}}</p>
      <br>
      <p>
        Le Informamos que la matencion con el asunto <b>{{$detalle_mail['nombre_mantencion']}}</b> esta rechazada.
      </p>
      <br>
      <p>
        Motivo: <b>{{$detalle_mail['motivo']}}</b><br/>
      </p>
    </main>
    <div class = "tabla">
      <table style="width: 100%;">
        <tr>
          <td style="padding-bottom: 10px;">zona:</td>
          <td>{{$detalle_mail['zona']}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 10px;">Sala:</td>
          <td>{{$detalle_mail['mantencion']->salas->first()->nombre_sap}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 10px;">Solicitante:</td>
          <td>{{$detalle_mail['mantencion']->user_crea->first()->nombre}}</td>
        </tr>
        <tr>
          <td style="padding-bottom: 10px;">Email Solicitante:</td>
          <td>{{$detalle_mail['mantencion']->user_crea->first()->email}}</td>
        </tr>
        @foreach($detalle_mail['mantencion']->elementos as $elemento)
        <tr>
          <td style="padding-bottom: 10px;">Material: {{$elemento->nombre}}</td>
          <td>Medidas: {{$elemento->medida}}</td>
        </tr>
        @endforeach
      </table>
    </div>
    <br>
    <footer style="background-color: #CED6E0; text-align: center; padding: 8px; border: solid 0.5px #95AFC0; border-radius: 5px;">
      <p style="color:#a4b0be">{{$detalle_mail['fecha']}}</p>
    </footer>
  </body>
</html>