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

        .A4 .box { height: 290mm; width: 209.99mm;}
        .A4 .box .box_nombre_producto { text-align: center; top: 48mm; width: 100%; font-size: 34pt; line-height: 0.8; letter-spacing: -2pt;}
        .A4 .box .box_nombre_producto h2 { margin-bottom: 6mm; }
        .A4 .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .A4 .box .box_nombre_producto.large { line-height: 1.25; top: 40mm; right: 4mm; }
        .A4 .box .box_nombre_producto.large h2 { font-size: 19pt; }
        .A4 .box .box_nombre_producto.large { line-height: 1.25; top: 40mm; right: 4mm; }
        .A4 .box .box_nombre_producto.large h2 { font-size: 21pt; }
        .A4 .box .box_promo { position: absolute; width: 204mm; height: 82mm; top: 138mm; right: 2mm; text-align: center; padding-top:0; }
        .A4 .box .box_promo h1 { font-weight: 900; font-size: 133pt; line-height: 115pt; color: #E00C15; letter-spacing: -2px; margin-top: 50px; }
        .A4 .box .box_promo h1 .signo_peso { font-size: 65pt; letter-spacing: -10px; vertical-align: bottom; }
        .A4 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4 .box .box_promo h1 .dcto { font-size: 50pt; }
        .A4 .box .box_promo h1 .porcentaje { font-size: 250pt; line-height: 120pt; }
        .A4 .box .box_promo h1 .ic-porcentaje { font-size: 180pt; margin-right: -45px; position: absolute; top: 0; left:63%}
        .A4 .box .box_promo h1.precio_mas_promo { font-size: 180pt; margin-top: 0; /* line-height: 46pt; */ }
        .A4 .box .box_promo h1.prod_por_precio { font-size: 110pt; letter-spacing: 0; margin-top: -50px; }
        .A4 .box .box_promo h1.prod_por_precio .signo_peso { font-size: 30pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4 .box .box_promo h1.prod_por_precio .signo_por { font-size: 40pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4 .box .box_promo h1.n_por_n { margin-top: 0; }
        .A4 .box .box_promo h1.n_por_n .signo_por_big { vertical-align: super; }
        .A4 .box .box_promo h1.jumbo-puntos { color: #741183; }
        .A4 .box .box_promo h2 { font-size: 48pt; font-weight: 900; position: absolute; top: -30mm; right: 100px; }
        .A4 .box .box_promo h2 sup { font-size: 30px; font-weight: 900; margin-right: 2px; }
        .A4 .box .box_promo h2.sisa-puntos_bajada { color: #741183; font-size: 40pt; margin-top: -10px; position: inherit; }
        .A4 .box .box_promo h3.mas_puntos { color: #741183; font-size: 44pt; margin-top: -10px; }
        .A4 .box .box_promo h3 .signo_peso { font-size: 21pt; vertical-align: middle; }
        .A4 .box .box_promo h3 .punto { font-size: 32pt; }
        
        .A4_cuotas .box .box_promo h2 {top: -40px;}

        .A4 .box .box_promo h2.segunda_unidad_cuotas {right: 26mm; color: #000; }
        .A4 .box .box_promo h2.segunda_unidad_cuotas sup { font-size: 28pt; }
        
        .A4 .box .box_precio_normal { position: absolute; bottom: 72mm; height: 4mm; width: 204mm; right: 10mm; text-align: right; /* background-color: bisque; */ }
        
        .A4 .box .box_precio_normal p { font-size: 24pt; line-height: 0; text-transform: uppercase; }
        
        .A4 .box .box_cuotas { position: absolute; bottom: 52mm; width: 100%; right: 0; text-align: center; line-height: 1;}
        
        .A4 .box .box_cuotas p { font-size: 20pt; }
        .A4 .box .box_condiciones { position: absolute; bottom: 12mm; width: 204mm; height: 34mm; left: 3mm; }
        .A4 .box .box_condiciones p.f-text { font-size: 18pt; text-align: center; margin-top: -5px; margin-bottom: 20px; }
        .A4 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4 .box .box_condiciones p.s-text { text-align: center; font-size: 16pt; line-height: 16pt; letter-spacing: -0.11mm; }
        .A4 .box .box_franja_inferior { top: 0; height: 38mm; }
        .A4.con-franja .box_franja_inferior {  background-image: url("{{ public_path('cssFaldones/assets/img/spid-faldon-a4.jpg')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; }
    </style>
</head>
<body>
    <?php $i = 1; ?>
    @foreach($product as $producto)
    <div class="cont-grid cont-a4">
        <div class="A4 con-franja">
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
                    <div class="promo">
                        <h2 class="segunda_unidad_cuotas">2<sup>DA</sup>UNIDAD</h2>
                        <h1 class="solo_porcentaje"><span class="porcentaje">{{$producto->tmp}}</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
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