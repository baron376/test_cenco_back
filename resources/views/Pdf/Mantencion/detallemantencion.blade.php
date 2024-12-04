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
      @page { margin-left: 0.5cm; margin-right: 0; margin-top: 1cm; margin-bottom: 4cm; }
      body { font-family: "Roboto", sans-serif; }
      .qr { height: 165px; width: 150px; text-align: center; position: relative; top: 5px; left: 265px; }
      .border-table {border: 1px solid #CFCFCF; padding: 5px 10px; vertical-align: top;}
      table { border-collapse: collapse; }
    </style>
  </head>
  <body>
    <div style="width: 100%;">
      <br>
      <table style="width: 100%;">
         <thead style="width: 100%; border-bottom: 2px solid #0B5A97;">
            <tr style="width: 100%;">
               <td style="width: 80%;"><h4 style="color:#0B5A97; font-size: 28px; line-height: 1; padding-right: 12px;">Asunto {{$mantencion->asunto}}</h4>
               </td>
               <td>
                  <img src="{{ public_path('ImgPublic/cenco-check-blue.png')}}" style="width: 75px; padding-left: 12px; padding-bottom:8px;">
                  @if($mantencion->id_cadena ==1 )
                  <img src="{{ public_path('ImgPublic/logo-jumbo-small.png')}}" style="width: 45px;">
                  @else
                  <img src="{{ public_path('ImgPublic/logo-sisa-small.png')}}" style="width: 45px;">
                  @endif
               </td>
            </tr>
         </thead>
         <tbody style="vertical-align: top; width: 100%;">
            <tr>
               <td style="width: 80%; margin-top: 24px; padding-top:24px;">
                  <table style="width: 100%;">
                     <tr>
                        <td class="border-table" style="color: #0B5A97; font-weight: bold;">Zona:</td>
                        <td class="border-table">{{$zona}}</td>
                     </tr>
                     <tr>
                        <td class="border-table" style="color: #0B5A97; font-weight: bold;">Sala:</td>
                        <td class="border-table">{{$sala}}</td>
                     </tr>
                     <tr>
                        <td class="border-table" style="color: #0B5A97; font-weight: bold;">Solicitante:</td>
                        <td class="border-table">{{$mantencion->user_crea->nombre. ' ' . $mantencion->user_crea->apellido }}</td>
                     </tr>
                     <tr>
                        <td class="border-table" style="color: #0B5A97; font-weight: bold;">Email Solicitante:</td>
                        <td class="border-table">{{$mantencion->user_crea->email}}</td>
                     </tr>
                     <tr>
                        <td class="border-table" style="color: #0B5A97; font-weight: bold;">Materiales</td>
                        <td class="border-table">
                           <table style="width: 100%;">
                              @if( $mantencion->elementos->count()>0)
                              @foreach($mantencion->elementos as $elemento)
                              <tr>
                                <td>
                                  {{$elemento->nombre}}<br>
                                  {{$elemento->medida}}<br>
                                  <img src="{{public_path($elemento->url)}}" style="width: 300px; height: 250px;" alt="">
                                </td>
                              </tr>
                              @endforeach
                              @endif
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td class="border-table" style="color: #0B5A97; font-weight: bold;">Comentarios</td>
                        <td class="border-table">
                          @foreach($mantencion->comentarios as $comentario)
                          {{$comentario->comentario}} <br>
                          @endforeach
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
    </div>
  </body>
</html>

