<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Cencosud</title>
    <style>
        * { box-sizing: border-box; padding: 0; margin: 0; }
        .box { font-family: 'Roboto', sans-serif; position: relative; }
        .box .box_nombre_producto { position: absolute; font-weight: 500; text-transform: uppercase; }
        .box .box_nombre_producto h2 { margin-bottom: 6mm; }
        .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .box .box_franja_inferior { position: absolute; width: 100%;}

        .A4_cuotas .box { position: relative; height: 290mm; width: 210mm; }
        .A4_cuotas .box .box_nombre_producto { text-align: center; top: 48mm; width: 100%; font-size: 34pt; line-height: .8; letter-spacing: -2pt; }
        .A4_cuotas .box .box_nombre_producto h2 { margin-bottom: 6mm; }
        .A4_cuotas .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .A4_cuotas .box .box_promo { position: absolute; width: 204mm; height: 88mm; top: 126mm; left: 3mm; text-align: center; padding-top: 10mm; }
        .A4_cuotas .box .box_promo h1 { font-weight: 900; font-size: 133pt; line-height: 115pt; color: #E00C15; letter-spacing: -2px; }
        
        .A4_cuotas .box .box_promo h1 .dcto { font-size: 50pt; }
        .A4_cuotas .box .box_promo h1 .porcentaje { font-size: 250pt; line-height: 120pt; }
        .A4_cuotas .box .box_promo h1 .ic-porcentaje { font-size: 180pt; margin-right: -45px; position: absolute; top: -14mm; right: 16mm;}
        
        .A4_cuotas .box .box_promo h2 { font-size: 48pt; font-weight: 900; }
        
        .A4_cuotas .box .box_precio_normal { position: absolute; bottom: 76mm; height: 4mm; width: 204mm; right: 12mm; text-align: right;}
        .A4_cuotas .box .box_precio_normal p { font-size: 24pt; line-height: 0; text-transform: uppercase; }
        .A4_cuotas .box .box_cuotas { position: absolute; bottom: 56mm; width: 100%; right: 0; text-align: center; }
        .A4_cuotas .box .box_cuotas p { font-size: 20pt; }
        .A4_cuotas .box .box_condiciones { position: absolute; bottom: 12mm; width: 204mm; height: 34mm; left: 3mm; }
        .A4_cuotas .box .box_condiciones p.f-text { font-size: 18pt; text-align: center; margin-top: -10px; margin-bottom: 20px;}
        .A4_cuotas .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4_cuotas .box .box_condiciones p.s-text { text-align: center; font-size: 16pt; line-height: 16pt; letter-spacing: -0.11mm; }
        .A4_cuotas .box .box_franja_inferior { top: 0; height: 38mm; }
        
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1 { text-align: right; position: relative; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 { color: #E00C15; }
        
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas h1 { background-image: url("{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_color.png')}}"); background-repeat: no-repeat; background-size: 100px; background-position: 0 0%;}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/spid-faldon-a4.jpg')}}"); background-repeat: no-repeat; background-size: contain; background-position: center; }
    </style>
  </head>
  <body>
    <div class="cont-grid cont-a4">
        <div class="A4_cuotas franja_oferta_con_tarjeta_cuotas">
            <div class="box">
                @if(strlen($producto->nombre_generico_promocion) < 44)
                <div class="box_nombre_producto">
                    <h2>{{$producto->nombre_generico_promocion}} </h2>
                </div>
                @else
                <div class="box_nombre_producto large">
                    <h2>{{$producto->nombre_generico_promocion}} </h2>
                </div>
                @endif
                <div class="box_promo">
                    <h1 class="porcentaje_mas_promo"><span class="porcentaje">{{$producto->tmp}}</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$ {{number_format($producto->precio_referencia_moda, 0, '', '.')}}</strong></p>
                </div>
                @if($producto->cuotas > 0)
                <div class="box_cuotas">
                    <p>{{$producto->cuotas}} cuotas de $ {{number_format($producto->valor_cuota, 0, '', '.')}} C.A.E: {{$producto->cae}}% Costo total: $ {{number_format($producto->costo_total, 0, '', '.')}}</p>
                </div>
                @endif
                <div class="box_condiciones">
                    <p class="f-text">EAN: {{$producto->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($producto->fecha_inicio_promo))}} AL {{date('d-m-Y', strtotime($producto->fecha_termino_promo))}}</strong> O HASTA AGOTAR STOCK MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
    </div>
    @if($i < $product->count())
    <div style="page-break-after: always"></div>
    @endif
    <?php $i++; ?>
    @endforeach
</body>
</html>