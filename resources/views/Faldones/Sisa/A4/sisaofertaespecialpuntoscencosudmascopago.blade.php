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
        .box .box_franja_inferior { position: absolute; width: 100%; }

        .A4_v2 .box { height: 290mm; width: 210mm; }
        .A4_v2 .box .bg-producto { right: 12mm; height: 38mm; width: 146mm; top: 46mm; }
        .A4_v2 .box .box_nombre_producto { text-align: center; bottom: 165mm; left: 0; width: 99%; font-size: 38pt; line-height: 50pt; }
        .A4_v2 .box .box_nombre_producto h2 { margin-bottom: 6mm; }
        .A4_v2 .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .A4_v2 .box .box_nombre_producto.large { line-height: 1.25; bottom: 165mm; right: 4mm; }
        .A4_v2 .box .box_nombre_producto.large h2 { font-size: 19pt; }
        .A4_v2 .box .box_nombre_producto.medium { line-height: 1.25; bottom: 165mm; right: 4mm;}
        .A4_v2 .box .box_nombre_producto.medium h2 { font-size: 30pt; }
        .A4_v2 .box .box_promo { position: absolute; width: 202mm; height: 150mm; top: 104mm; left: 0mm; text-align: center; padding-top: 25mm; }
        .A4_v2 .box .box_promo h1 { font-weight: 900; font-size: 133pt; line-height: 115pt; color: #000; letter-spacing: -2px; }
        .A4_v2 .box .box_promo h1 .signo_peso { position: absolute; left: 28%;top: 10%; font-size: 56pt; letter-spacing: -10px; vertical-align: bottom; }
        .A4_v2 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4_v2 .box .box_promo h1 .dcto { font-size: 50pt; }
        .A4_v2 .box .box_promo h1 .porcentaje { font-size: 250pt; line-height: 80pt; }
        .A4_v2 .box .box_promo h1 .ic-porcentaje { font-size: 170pt; margin-right: -45px; position: absolute; top: 85px; }
        .A4_v2 .box .box_promo h1.solo_porcentaje { margin-top: 50px; }
        .A4_v2 .box .box_promo h1.prod_por_precio { font-size: 110pt; letter-spacing: 0; margin-top: -50px; }
        .A4_v2 .box .box_promo h1.prod_por_precio .signo_peso { font-size: 30pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4_v2 .box .box_promo h1.prod_por_precio .signo_por { font-size: 40pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4_v2 .box .box_promo h1.porcentaje_mas_promo { margin-top: 50px; }
        .A4_v2 .box .box_promo h1.porcentaje_mas_promo .ic-porcentaje { top: 95px; }
        .A4_v2 .box .box_promo h1.precio_mas_promo { font-size: 130pt; }
        .A4_v2 .box .box_promo h1.precio_mas_promo .signo_peso { font-size: 48pt; }
        .A4_v2 .box .box_promo h2 { font-size: 72pt; font-weight: 900; position: absolute; top: -40px; right: 100px; margin-top: 10px; }
        .A4_v2 .box .box_promo h2 sup { font-size: 44px; font-weight: 800; margin-right: 2px; }
        .A4_v2 .box .box_promo h2.sisa-puntos_bajada { font-size: 40pt; margin-top: -10px; position: inherit; }
        .A4_v2 .box .box_promo h2.otro_medio_pago { font-size: 44pt; margin-left: 250px; margin-top: 20px; position: relative; text-align: left; }
        .A4_v2 .box .box_promo h2.otro_medio_pago .todo_pago { margin-left: 25px; font-size: 18pt; line-height: 1; }
        .A4_v2 .box .box_promo h3.mas_puntos { font-size: 44pt; margin-top: -10px; }
        .A4_v2 .box .box_promo h3 .signo_peso { font-size: 21pt; vertical-align: middle; }
        .A4_v2 .box .box_promo h3 .punto { font-size: 32pt; }
        .A4_v2 .box .box_precio_normal { position: absolute; bottom: 44mm; height: 4mm; width: 204mm; right: 10mm; text-align: right; /* background-color: bisque; */ }
        .A4_v2 .box .box_precio_normal p { font-size: 24pt; line-height: 0; text-transform: uppercase; }
        .A4_v2 .box .box_condiciones { position: absolute; bottom: 6mm; width: 204mm; height: 34mm; left: 3mm; /* background-color: cadetblue; */ }
        .A4_v2 .box .box_condiciones p.f-text { font-size: 20pt; margin-bottom: 2mm; }
        .A4_v2 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4_v2 .box .box_condiciones p.s-text { text-align: center; font-size: 16pt; line-height: 18pt; letter-spacing: -0.11mm; }
        .A4_v2 .box .box_franja_inferior { top: 0; height: 38mm; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h1 { text-align: right; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h1.solo_precio { font-size: 124pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h1.prod_por_precio { font-size: 100pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2.otro_medio_pago { position: absolute;left: -2%;top: 33%;font-size: 58pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago { margin-left: 10px; position: absolute; left: 55%;top: 7%;}
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago.ml_todo_pago { margin-left: 80px; font-size: 24pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2 .signo_peso {position: absolute; top: 10%; font-size: 18pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2 .punto { font-size: 24pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2 .signo_por { font-size: 21pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2 .ic-porcentaje { font-size: 48pt; position: absolute; left: 105px; margin-top: -10px; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h2 .dcto { position: absolute; font-size: 15pt; left: 105px; bottom: 8px; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h3 sup { font-size: 12pt; }
        .A4_v2.sisa_oferta_tarjeta .box .box_promo h3.segundad_unidad_tarjeta { position: absolute; top: 0; right: 0; font-size: 32pt; font-weight: 900; }
        /* .A4_v2.sisa_oferta_tarjeta .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-sisa-tarjeta.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; }
        .A4_v2.sisa_oferta_tarjeta h1 { background-image: url("{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta.png')}}"); background-repeat: no-repeat; background-size: 100px; background-position: 70px 50%; }
        .A4_v2.sisa_oferta_puntos .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-sisa-puntos.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; } */
    </style>
</head>
<body>
    <?php $i = 1; ?>
    @foreach($product as $producto)
    <div class="cont-grid cont-a4">
        <div class="A4_v2 sisa_oferta sisa_oferta_puntos">
            <div class="box">
                @if($producto->qr != 2)
                <div class="box_qr">
                    <?php $id =$producto->id; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

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
                        <h1 class="sisa-puntos">{{number_format($producto->tmp, 0, '', '.')}}</h1>
                        <h2 class="sisa-puntos_bajada">PUNTOS CENCOSUD</h2>
                        @if($producto->tc > 0)
                        <h3 class="mas_puntos"><span>+</span><span class="signo_peso">$</span>{{number_format($producto->tc, 0, '', '.')}}</h3>
                        @endif
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