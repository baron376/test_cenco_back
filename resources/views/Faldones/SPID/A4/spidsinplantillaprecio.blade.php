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
        .box .box_franja_inferior { position: absolute; width: 100%; /* background-color: aqua; */ }
        .A4_cuotas .box { position: relative; height: 290mm; width: 210mm; }
        .A4 .box .box_nombre_producto { text-align: center; top: 48mm; left: 0; width: 100%; font-size: 34pt; line-height: .8; }
        .A4 .box .box_nombre_producto h2 { margin-bottom: 6mm; }
        .A4 .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .A4 .box .box_nombre_producto.large { line-height: 1.25; bottom: 165mm; right: 4mm; }
        .A4 .box .box_nombre_producto.large h2 { font-size: 19pt; }
        .A4 .box .box_nombre_producto.medium { line-height: 1.25; bottom: 165mm; right: 4mm;}
        .A4 .box .box_nombre_producto.medium h2 { font-size: 30pt; }
        .A4 .box .box_promo { position: absolute; /*background-color: aquamarine; */ width: 204mm; height: 132mm; top: 104mm; left: 3mm; text-align: center; padding-top: 25mm; }
        .A4 .box .box_promo h1 { font-weight: 900; font-size: 150pt; line-height: 115pt; color: #E00C15; margin-top: 50px; }
        .A4 .box .box_promo h1 .signo_peso { font-size: 65pt; letter-spacing: -10px; vertical-align: middle; }
        .A4 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4 .box .box_promo h1 .dcto { font-size: 50pt; }
        .A4 .box .box_promo h1 .porcentaje { font-size: 250pt; line-height: 80pt; }
        .A4 .box .box_promo h1 .ic-porcentaje { font-size: 170pt; margin-right: -45px; position: absolute; top: 90px; }
        .A4 .box .box_promo h1.precio_mas_promo { font-size: 180pt; margin-top: 0; /* line-height: 46pt; */ }
        .A4 .box .box_promo h1.prod_por_precio { font-size: 110pt; letter-spacing: 0; margin-top: -50px; }
        .A4 .box .box_promo h1.prod_por_precio .signo_peso { font-size: 30pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4 .box .box_promo h1.prod_por_precio .signo_por { font-size: 40pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4 .box .box_promo h1.n_por_n { margin-top: 0; }
        .A4 .box .box_promo h1.n_por_n .signo_por_big { vertical-align: super; }
        .A4 .box .box_promo h1.jumbo-puntos { color: #741183; }
        .A4 .box .box_promo h2 { font-size: 48pt; font-weight: 900; position: absolute; top: 0; right: 100px; }
        .A4 .box .box_promo h2 sup { font-size: 30px; font-weight: 800; margin-right: 2px; }
        .A4 .box .box_promo h2.sisa-puntos_bajada { color: #741183; font-size: 40pt; margin-top: -10px; position: inherit; }
        .A4 .box .box_promo h3.mas_puntos { color: #741183; font-size: 44pt; margin-top: -10px; }
        .A4 .box .box_promo h3 .signo_peso { font-size: 21pt; vertical-align: middle; }
        .A4 .box .box_promo h3 .punto { font-size: 32pt; }
        .A4 .box .box_precio_normal { position: absolute; bottom: 40mm; height: 4mm; width: 204mm; right: 10mm; text-align: right; /* background-color: bisque; */ }
        .A4 .box .box_precio_normal p { font-size: 24pt; line-height: 0; text-transform: uppercase; }
        .A4 .box .box_condiciones { position: absolute; bottom: 10mm; width: 204mm; height: 34mm; left: 3mm; /* background-color: cadetblue; */ }
        .A4 .box .box_condiciones p.f-text { font-size: 16pt; }
        .A4 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4 .box .box_condiciones p.s-text { text-align: center; font-size: 16pt; line-height: 18pt; letter-spacing: -0.11mm; }
        .A4 .box .box_franja_inferior { top: 0; height: 38mm; }
        .A4 .box .box_qr { position: absolute; top: 90px; }
    </style>

</head>
<body>
    <?php $i = 1; ?>
    @foreach($product as $producto)
    <div class="cont-grid cont-a4">
        <div class="A4 sin-franja">
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
                        <h1><span class="signo_peso">$</span> {{number_format($producto->tmp, 0, '', '.')}}</h1>
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