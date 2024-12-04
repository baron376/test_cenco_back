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
        .A4_cuotas .box .box_promo h1 { font-weight: 900; font-size: 133pt; line-height: 115pt; color: #000; letter-spacing: -2px; }
        .A4_cuotas .box .box_promo h1 .signo_peso { font-size: 65pt; letter-spacing: -10px; vertical-align: middle; }
        .A4_cuotas .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        
        .A4_cuotas .box .box_promo h1 .dcto { font-size:30pt; letter-spacing: 0;}
        .A4_cuotas .box .box_promo h1 .porcentaje { font-size: 165pt; line-height: 120pt; }
        .A4_cuotas .box .box_promo h1 .ic-porcentaje { font-size: 130pt; position: absolute; top: -8mm; right:0;}
        
        .A4_cuotas .box .box_promo h1.precio_mas_promo { font-size: 180pt; margin-top: -50px; }
        .A4_cuotas .box .box_promo h1.prod_por_precio { font-size: 110pt; letter-spacing: 0; margin-top: -50px; }
        .A4_cuotas .box .box_promo h1.prod_por_precio .signo_peso { font-size: 30pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4_cuotas .box .box_promo h1.prod_por_precio .signo_por { font-size: 40pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4_cuotas .box .box_promo h1.n_por_n { margin-top: 0; }
        .A4_cuotas .box .box_promo h1.n_por_n .signo_por_big { vertical-align: super; }
        .A4_cuotas .box .box_promo h2 { font-size: 48pt; font-weight: 900; }
        .A4_cuotas .box .box_promo h2 sup { font-size: 30px; font-weight: 800; margin-right: 2px; }
        .A4_cuotas .box .box_precio_normal { position: absolute; bottom: 40mm; height: 4mm; width: 204mm; right: 12mm; text-align: right;}
        .A4_cuotas .box .box_precio_normal p { font-size: 24pt; line-height: 0; text-transform: uppercase; }
        .A4_cuotas .box .box_cuotas { position: absolute; bottom: 50mm; width: 100%; right: 0; text-align: center; }
        .A4_cuotas .box .box_cuotas p { font-size: 20pt; }
        .A4_cuotas .box .box_condiciones { position: absolute; bottom: 10mm; width: 204mm; height: 34mm; left: 3mm; }
        .A4_cuotas .box .box_condiciones p.f-text { font-size: 16pt; }
        .A4_cuotas .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4_cuotas .box .box_condiciones p.s-text { text-align: center; font-size: 16pt; line-height: 18pt; letter-spacing: -0.11mm; }
        .A4_cuotas .box .box_franja_inferior { top: 0; height: 38mm; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1 { text-align: right; position: relative; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1.solo_precio { font-size: 132pt; margin-top: 0; margin-bottom: 10px; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1.prod_por_precio { font-size: 100pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 { color: #000; text-align: right;}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago { font-size: 44pt; }

        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago .todo_pago {text-align: center; font-size: 18pt; line-height: .8; color: #000; position: absolute; top: 18mm; left: 4mm; width: 50mm; letter-spacing: 0;}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago .todo_pago.ml_todo_pago { }
        
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .signo_peso { font-size: 18pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .punto { font-size: 24pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .signo_por { font-size: 21pt; }
        
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .ic-porcentaje { font-size: 130pt; position: absolute ; top: -22mm; right: 0;}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .porcentaje { font-size: 165pt; line-height: 120pt;}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .dcto { font-size: 30pt; letter-spacing: 0;}
        
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.segunda_unidad_cuotas { position: absolute; top: -16%; font-size: 32pt; right: 10px; color: #000; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.segunda_unidad_cuotas sup { font-size: 18pt; font-weight: 900;}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h3 sup { font-size: 16pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h3.segundad_unidad_tarjeta { position: absolute; top: 0; right: 0; font-size: 32pt; font-weight: 900; }
        /* .A4_cuotas.franja_oferta_con_tarjeta .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-jumbo-oferta_a4.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; } */
        /*.A4_cuotas.franja_oferta_con_tarjeta_cuotas h1 {background-image: url("{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta.png')}}"); background-repeat: no-repeat; background-size: 100px; background-position: 14mm 4mm; } */
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .img-logo { position: absolute; width: 100px; left:17mm; top: 14mm; }
        
        /* .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-jumbo-tarjeta_a4.png')}}"); background-repeat: no-repeat; background-size: contain; background-position: center; } */

        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1.solo_porcentaje,
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago { position: absolute; height: 48mm; width: 204mm; right: 0; /*border: 1px solid #000;*/}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1.solo_porcentaje { top: 0; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago { top: 50mm; }
    </style>
  </head>
  <body>
    <?php $i = 1; ?>
    @foreach($product as $producto) 
    <div class="cont-grid cont-a4">
        <div class="A4_cuotas franja_oferta_con_tarjeta_cuotas">
            <div class="box">
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>{{$producto->nombre_generico_promocion}} </h2>
                </div>
                <div class="box_promo">
                    <h1 class="solo_porcentaje"><span class="porcentaje">{{$producto->tc}}</span><div class="ic-porcentaje">%</div><span class="dcto">DCTO.</span></h1>
                    @if($producto->tmp > 0)
                    <h2 class="otro_medio_pago otro_medio_tarjeta"><span class="porcentaje">{{$producto->tmp}}</span><div class="ic-porcentaje">%</div><span class="dcto">DCTO.</span><div class="todo_pago ml_todo_pago">CON OTRO MEDIO DE PAGO</div></h2>
                    @endif
                    <img src="{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta2.svg')}}" alt="" class="img-logo">
                </div>
                @if($producto->precio_referencia_moda != null || $producto->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($producto->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif
                @if($producto->cuotas > 0)
                <div class="box_cuotas">
                    <p>{{$producto->cuotas}} cuotas de $ {{number_format($producto->valor_cuota, 0, '', '.')}} C.A.E: {{$producto->cae}}% Costo total: $ {{number_format($producto->costo_total, 0, '', '.')}}</p>
                </div>
                @endif
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> {{$producto->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($producto->fecha_inicio_promo))}} AL  {{date('d-m-Y', strtotime($producto->fecha_termino_promo))}}</strong> O HASTA AGOTAR STOCK MAXIMO 10 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
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