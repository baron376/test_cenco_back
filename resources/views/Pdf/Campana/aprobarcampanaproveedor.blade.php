<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  </head>
  <body style="display: flex; width: 100%; box-sizing: border-box; margin: 50px;">
    <!-- Contenedor tabla -->
    <div style="width: 50%;">
      <h2>Campaña {{$nombre}}</h2>
      <br>
      <table style="width: 100%;">
        <tr>
          <td style="padding-bottom: 10px;">Estado:</td>
          <td>{{$estado}}</td>
        </tr>
      
        <tr >
          <td style="width: 50%; padding-bottom: 10px;">Etapa:</td>
          <td>{{$etapa}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Cadena:</td>
          <td>{{$cadena}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Nombre:</td>
          <td>{{$nombre}}</td>
        </tr>
        
        <tr>
          <td style="padding-bottom: 20px;">Vigencia:</td>
          <td>{{$vigencia}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Proveedor:</td>
          <td>{{$proveedor}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Sección:</td>
          <td>{{$seccion}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Zona:</td>
          <td>{{$zona}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Salas:</td>
          <td>{{$sala}}</td>
        </tr>

        <tr>
          <td style="padding-bottom: 20px;">Descripción:</td>
          <td>{{$descripcion}}</td>
        </tr>
      </table>
    </div>
    <!-- Contenedor QR -->
    <div style="display: flex; justify-content: center; align-items: center; width: 50%;">
      <div style="background-image: url(https://borealtech.com/wp-content/uploads/2018/10/codigo-qr-1024x1024.jpg); background-size: cover; width: 130px; height: 130px;"></div>
    </div>
  </body>
</html>