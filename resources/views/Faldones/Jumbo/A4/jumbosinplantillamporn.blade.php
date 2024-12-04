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
        .A4_cuotas .box .box_nombre_producto { text-align: center; top: 48mm; left: 0; width: 100%; font-size: 34pt; line-height: .8; }
        .A4_cuotas .box .box_nombre_producto h2 { margin-bottom: 6mm; }
        .A4_cuotas .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .A4_cuotas .box .box_nombre_producto.large { line-height: 1.25; bottom: 180mm; right: 4mm; }
        .A4_cuotas .box .box_nombre_producto.large h2 { font-size: 19pt; }
        .A4_cuotas .box .box_nombre_producto.medium { line-height: 1.25; bottom: 180mm; right: 4mm;}
        .A4_cuotas .box .box_nombre_producto.medium h2 { font-size: 30pt; }
        .A4_cuotas .box .box_promo { position: absolute; width: 240mm; height: 98mm; top: 120mm; left: -15mm; text-align: center; padding-top: 25mm; }
        .A4_cuotas .box .box_promo h1 { font-weight: 900; font-size: 200pt; line-height: 115pt; color: #E00C15; letter-spacing: -2px; }
        .A4_cuotas .box .box_promo h1 .signo_peso { font-size: 65pt; letter-spacing: -10px; vertical-align: bottom; }
        .A4_cuotas .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4_cuotas .box .box_promo h1 .prod_qty { position:absolute ;top: 14%;left: 12%;}
        .A4_cuotas .box .box_promo h1 .dcto { font-size: 50pt; padding-left:50%}
        .A4_cuotas .box .box_promo h1 .porcentaje { font-size: 250pt; line-height: 80pt;}
        .A4_cuotas .box .box_promo h1 .ic-porcentaje { font-size: 170pt; position: absolute; top: 10mm; left: 130mm;}
        .A4_cuotas .box .box_promo h1.precio_mas_promo { font-size: 180pt; margin-top: -50px; }
        .A4_cuotas .box .box_promo h1.prod_por_precio { font-size: 110pt; letter-spacing: 0;}
        .A4_cuotas .box .box_promo h1.prod_por_precio .signo_peso { font-size: 30pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm;  position:absolute ;top:27%;left: 24%;}
        .A4_cuotas .box .box_promo h1.prod_por_precio .signo_por { font-size: 40pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; position:absolute ;top:25%;left: 20%;}
        .A4_cuotas .box .box_promo h1.n_por_n { margin-top: 0; }
        .A4_cuotas .box .box_promo h1.n_por_n .signo_por_big { margin-top: 45mm; }
        .A4_cuotas .box .box_promo h2 { font-size: 48pt; font-weight: 900; position: absolute; top: -40px; right: 100px; }
        .A4_cuotas .box .box_promo h2 sup { font-size: 30px; font-weight: 800; margin-right: 2px; }
        .A4_cuotas .box .box_precio_normal { position: absolute; bottom: 40mm; height: 4mm; width: 204mm; right: 10mm; text-align: right;}
        .A4_cuotas .box .box_precio_normal p { font-size: 24pt; line-height: 0; text-transform: uppercase; }
        .A4_cuotas .box .box_cuotas { position: absolute; bottom: 56mm; width: 178mm; right: 0; text-align: center; }
        .A4_cuotas .box .box_cuotas p { font-size: 20pt; }
        .A4_cuotas .box .box_condiciones { position: absolute; bottom: 10mm; width: 204mm; height: 34mm; left: 3mm; }
        .A4_cuotas .box .box_condiciones p.f-text { font-size: 16pt; }
        .A4_cuotas .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4_cuotas .box .box_condiciones p.s-text { text-align: center; font-size: 16pt; line-height: 18pt; letter-spacing: -0.11mm; }
        .A4_cuotas .box .box_franja_inferior { top: 0; height: 38mm;}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1 { text-align: center; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1.solo_precio { font-size: 150pt; margin-top: 0; margin-bottom: 10px; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h1.prod_por_precio { font-size: 100pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 { color: #E00C15; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago { font-size: 44pt;position: absolute;left: -18%;top: 38%; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago .todo_pago { margin-left: 25px; font-size: 18pt; line-height: 1; color: #000; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_tarjeta { font-size: 52pt; margin-top: -10px; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_tarjeta .ic-porcentaje { font-size: 42pt; left: 200px; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_tarjeta .dcto { font-size: 12pt; left: 200px; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago .todo_pago {  position: absolute; left: 60% ;top: 8%; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.otro_medio_pago .todo_pago.ml_todo_pago { font-size: 24pt; margin-top:300px; margin-left:250px}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .signo_peso { position: absolute; top: 6%; left:39%; font-size: 18pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .punto { font-size: 24pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .signo_por { position: absolute; top: 6%;left:37%;font-size: 21pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .prod_qty { position: absolute; top: 6%; left:35%; font-size: 21pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .ic-porcentaje { font-size: 48pt;  position: absolute ; top: 70mm; left:-20mm }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .porcentaje { font-size: 48pt; position: absolute ; top: 70mm; left:33mm}
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2 .dcto { position: absolute; font-size: 15pt; left: 10mm; bottom: 84mm; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.segunda_unidad_cuotas { position: absolute; top: -10%; right: 5%; font-size: 32pt; right: 10px; color: #000; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h2.segunda_unidad_cuotas sup { font-size: 18pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h3 sup { font-size: 16pt; }
        .A4_cuotas.franja_oferta_con_tarjeta_cuotas .box .box_promo h3.segundad_unidad_tarjeta { position: absolute; top: 0; right: 0; font-size: 32pt; font-weight: 900; }
    </style>
</head>
<body>
    <?php $i = 1; ?>
    @foreach($product as $producto)
    <div class="cont-grid cont-a4">
        <div class="A4_cuotas franja_oferta_con_tarjeta_cuotas">
            <div class="box">

                @if(strlen($producto->nombre_generico_promocion) <= 43)
                <div class="box_nombre_producto">
                    <h2>{{$producto->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($producto->nombre_generico_promocion) > 43 && strlen($producto->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto medium">
                    <h2>{{$producto->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($producto->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto large">
                    <h2>{{$producto->nombre_generico_promocion}}</h2>
                </div>
                @endif
                
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="n_por_n"><span class="porcentaje">{{substr($producto->tmp, 0,1)}}</span><span class="signo_por_big">x</span><span class="porcentaje">{{substr($producto->tmp, -1)}}</span></h1>
                    </div>
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
                
                <div class="box_condiciones">
                    <p class="f-text">{{$producto->tipo_volante_catalogo}} <strong>SAP:</strong> {{$producto->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($producto->fecha_inicio_promo))}} AL  {{date('d-m-Y', strtotime($producto->fecha_termino_promo))}}</strong> O HASTA AGOTAR STOCK MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
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
