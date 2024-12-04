<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Cencosud</title>
    <style>
        @page {
            /*margin-left: 0.5cm; margin-right: 0; margin-top:2cm; margin-bottom:4cm; */
            padding: 0 .5cm;
        }
        *{
            box-sizing: border-box;
        }
        body {
            font-family: "Roboto", sans-serif;
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
            margin-top: 25px;
            margin-bottom: 20px;
        }

        .qr {
            height: 165px;
            width: 150px;
            text-align: center;
            margin: 0 auto;
        }

        .nombrec {
            text-align: center;
            position: relative;
        }

        .tabla {
            top: 5px;
            text-align: center;
            position: relative;
            left: 90px;
        }

        .mensaje {
            color: red;
            font-weight: bold;
        }

        .c_mensaje {
            padding: 10px 20px 20px;
        }

        .border-table {
            border: 1px solid #CFCFCF;
            padding: 5px 10px;
            vertical-align: top;
        }

        table {
            border-collapse: collapse;
        }
    </style>

</head>

<body>

        <table style="width: 100%; vertical-align: top;">
            <thead style="width: 100%; border-bottom: 2px solid #0B5A97;">
                <tr style="width: 100%;">
                    <td style="width: 70%;">
                        <h4 style="color:#0B5A97; font-size: 28px; line-height: 1; padding-right: 12px;">Autorización de
                            Ingreso de Implementación de campañas</h4>
                    </td>
                    <td><img src="{{ public_path('ImgPublic/cenco-check-blue.png') }}"
                            style="width: 100px; padding-left: 12px;">

                        @if ($campana->cadena->id == 1)
                            <img src="{{ public_path('ImgPublic/logo-jumbo-small.png') }}" style="width: 50px;">
                        @else
                            <img src="{{ public_path('ImgPublic/logo-sisa-small.png') }}" style="width: 50px;">
                        @endif
                    </td>
                </tr>
            </thead>
        </table>
        

        <table style="width: 100%; vertical-align: top;">
            <tbody style="vertical-align: top; width: 100%;">
                <tr>
                    <td style="width: 70%; margin-top: 24px; padding-top:24px; vertical-align: top;">
                        <table style="width: 100%;">
                            <tr>
                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Campaña:</td>
                                <td class="border-table">{{ $campana->nombre }}</td>
                            </tr>


                            <tr>
                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Proveedor:</td>
                                <td class="border-table">{{ $campana->proveedor->nombre }}</td>
                            </tr>
                            <tr>
                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Sección:</td>
                                <td class="border-table">{{ $campana->sesion->cdg_int . '-' . $campana->sesion->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Sub Sección:</td>
                                <td class="border-table">
                                    @isset($campana->sub_sesion->nombre)
                                        {{ $campana->sub_sesion->nombre }}
                                    @else
                                        ''
                                    @endisset

                                </td>
                            </tr>

                            <tr>
                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Tipo de campaña:
                                </td>
                                <td class="border-table">{{ $campana->tpCampana->name }}</td>
                            </tr>
                            <tr>
                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Elementos de
                                    Campana:</td>
                                <td class="border-table">
                                    <?php
                                    $elementos = $campana->elementos
                                        ->groupBy(function ($e) {
                                            return $e->pivot->desde . ' - ' . $e->pivot->hasta . ' - ' . $e->name;
                                        })
                                        ->toArray();
                                    ?>
                                    @foreach ($elementos as $name => $elemento)
                                        {{ $name }}<br>
                                    @endforeach
                                    {{--
              @foreach ($campana->elementos as $elemento)
                  {{ $elemento->pivot->desde }} - {{ $elemento->pivot->hasta }}<br>
                  {{ $elemento->name }}<br>
		  @endforeach
		  --}}
                                </td>
                            </tr>
                            <tr>

                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Ultimo Comentario:
                                </td>
                                <td class="border-table">{{ $comentario->comentario }}</td>
                            </tr>


                            <tr>
                                <td class="border-table" style="color: #0B5A97; font-weight: bold;">Salas:</td>

                               
                                <td class="border-table" style="font-size: 11px;">
                                    @php
                                        $salasCount = $salas->count();
                                        $campanaSalasCount = $campana->salas_disponibles->count();
                                    @endphp
                                    @if ($campanaSalasCount > 0 && $campanaSalasCount < $salasCount)
                                        
                                            <table>
                                                @php $chunkedSalas = $campana->salas_disponibles->chunk(13); @endphp
                                                @foreach ($chunkedSalas as $chunk)
                                                    <tr>
                                                        @foreach ($chunk as $sala)
                                                            <td>{{ $sala->cdg_local }}</td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    @else
                                        @if ($campanaSalasCount >= $salasCount)
                                            TODAS
                                        @else
                                        <table>
                                                @php $chunkedSalas = $campana->salas->chunk(13); @endphp
                                                @foreach ($chunkedSalas as $chunk)
                                                    <tr>
                                                        @foreach ($chunk as $sala)
                                                            <td>{{ $sala->cdg_local }}</td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="text-align: left; vertical-align: top; margin-top: 24px; padding-top:24px; padding-left: 12px;">
                        <table>
                            <tr>
                                <td>
                                    <span style="font-size: 18px font-weight:bold; text-align:center; margin-bottom: 20px;">CONTROL
                                        INTERNO</span>
                                    {!! DNS2D::getBarcodeHTML("$urlQrcode", 'QRCODE', 5, 5) !!}
                                    <span
                                        style="color: #D71314; font-size: 12px; line-height: 1; font-weight: bold;">¡RECUERDA!</span><br>
                                    <span style="font-size: 12px; line-height: 1;">Debes implementar el código QR de la autorización
                                        en la pieza gráfica del pop en la esquina inferior derecha, debe medir máximo 1,5cmx1,5cm y
                                        debe ser legible. Si el pop no tiene el código QR no puede ingresar al local.
                                        <br>
                                    </span>
                                </td>
                            </tr>
                        </table>
                        
                    </td>
                </tr>

            </tbody>
        </table>

</body>

</html>
