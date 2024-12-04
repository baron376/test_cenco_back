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
         .cont-grid.cont-a4-4_sisa {width: 210mm;height: 290mm; position: relative;}  

        .box { font-family: 'Roboto', sans-serif; position: relative; }

        .box .box_nombre_producto { position: absolute; font-weight: 500; text-transform: uppercase; bottom: 255mm; right: 4mm; line-height:1; width: 80%;}
        .box .box_nombre_producto h2 { margin-bottom: -2mm; }
        .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .box .box_nombre_producto_large { position: absolute; font-weight: 500; text-transform: uppercase; right: 4mm; line-height:1; width: 80%;}
        .box .box_nombre_producto_large h2 { margin-bottom: -2mm; }
        .box .box_nombre_producto_large h2:last-child { margin-bottom: 0; }
        .A4 .box .box_nombre_producto_medium { line-height: 1.25; right: 4mm; }
        .A4 .box .box_nombre_producto_medium h2 { font-size: 30pt; }
        .A4-4_vert_1.franja_tarjeta { height: 148.5mm; width: 105mm; position: absolute;}
        
        .A4-4_vert_1.faldon_01{top: 0; left: 0;}
        .A4-4_vert_1.faldon_02{top: 0; left: 50%}
        .A4-4_vert_1.faldon_03{top: 50%; left: 0;}
        .A4-4_vert_1.faldon_04{top: 50%; left: 50%;}
        
        .A4-4_vert_1 .box .box_nombre_producto {height: 23mm; bottom: 248mm; right: 6mm; text-align: right; font-size: 11.5pt;}
        /* .A4-4_vert_1 .box .box_nombre_producto {height: 23mm; bottom: 248mm; right: 6mm; text-align: right; font-size: 14pt; color: red;} */
        .A4-4_vert_1 .box .box_nombre_producto_medium {height: 23mm; width: 80%; bottom: 248mm; right: 6mm; text-align: right; font-size: 8.5pt; position: absolute; word-wrap: break-word !important; /* Este es el estilo que permite separar palabras */}
        /* .A4-4_vert_1 .box .box_nombre_producto_medium {height: 23mm; width: 80%; bottom: 248mm; right: 6mm; text-align: right; font-size: 10pt; position: absolute; color: blue;} */
        .A4-4_vert_1 .box .box_nombre_producto_large {height: 23mm; width: 80%; bottom: 248mm; right: 6mm; text-align: right; font-size: 7pt; position: absolute; }
        /* .A4-4_vert_1 .box .box_nombre_producto_large {height: 23mm; width: 80%; bottom: 248mm; right: 6mm; text-align: right; font-size: 8pt; position: absolute; color: purple} */
        .A4-4_vert_1 .box .box_nombre_producto_large.bottom,
        .A4-4_vert_1 .box .box_nombre_producto_large.bottom,
        .A4-4_vert_1 .box .box_nombre_producto_medium.bottom,
        .A4-4_vert_1 .box .box_nombre_producto_medium.bottom,
        .A4-4_vert_1 .box .box_nombre_producto.bottom,
        .A4-4_vert_1 .box .box_nombre_producto.bottom {bottom: 95mm !important;}

        .A4-4_vert_1 .box .box_promo { position: absolute; width: 99mm; height: 44mm; left: 2mm; top: 50mm; text-align: right; }
        .A4-4_vert_1 .box .box_promo h1 { font-weight: 900; line-height: 100pt; color: #000; position: relative; }
        .A4-4_vert_1 .box .box_promo h1.solo_precio { font-size: 72pt; letter-spacing: -1.2mm; margin-top: 60px; }
        .A4-4_vert_1 .box .box_promo h1.solo_puntos { font-size: 76pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4_vert_1 .box .box_promo h1.prod_por_precio { font-size: 58pt; letter-spacing: 0; margin-top: 20px; }
        .A4-4_vert_1 .box .box_promo h1.n_por_n { font-size: 120pt; letter-spacing: 0; margin-top: 20px; }
        .A4-4_vert_1 .box .box_promo h1.precio_mas_promo { font-size: 76pt; letter-spacing: -1.2mm; margin-top: -30px; }
        .A4-4_vert_1 .box .box_promo h1.solo_porcentaje { margin-top: 40px; }
        .A4-4_vert_1 .box .box_promo h1.solo_porcentaje .porcentaje { font-size: 120pt; }
        .A4-4_vert_1 .box .box_promo h1 .signo_peso { font-size: 35pt; letter-spacing: -1mm; vertical-align: bottom; }
        .A4-4_vert_1 .box .box_promo h1 .signo_peso_small { font-size: 21pt; letter-spacing: -1mm; vertical-align: top; }
        .A4-4_vert_1 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: -1mm; }
        .A4-4_vert_1 .box .box_promo h1 .dcto { font-size: 24pt; }
        .A4-4_vert_1 .box .box_promo h1 .porcentaje { font-size: 100pt; line-height: 80pt; }
        .A4-4_vert_1 .box .box_promo h1 .ic-porcentaje { font-size: 68pt; margin-right: -55px; position: absolute; top: -26px; }
        .A4-4_vert_1 .box .box_promo h1 .signo_por { font-size: 21pt; vertical-align: top; margin-right: 5px; margin-left: 5px; }
        .A4-4_vert_1 .box .box_promo h1 .signo_por_big { font-size: 80pt; vertical-align: bottom; }
        .A4-4_vert_1 .box .box_promo h2 { font-size: 36pt; font-weight: 900; }
        .A4-4_vert_1 .box .box_promo h2 sup { font-size: 24px; font-weight: 800; margin-right: -10px; }
        .A4-4_vert_1 .box .box_precio_normal { position: absolute; top: 100mm; height: 4mm; width: 100mm; left: 0; text-align: right; padding-right: 2mm; float: left;}
        .A4-4_vert_1 .box .box_precio_normal p { font-size: 12pt; text-transform: uppercase; }
        .A4-4_vert_1 .box .box_condiciones { position: absolute; top: 105mm; left: 3mm; width: 99mm; height: 18mm;}
        .A4-4_vert_1 .box .box_condiciones p.f-text { font-size: 7.5pt; margin-bottom: .75mm; padding-left: 19px; }
        .A4-4_vert_1 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-4_vert_1 .box .box_condiciones p.s-text { text-align: center; font-size: 8.2pt; line-height: 1; letter-spacing: -0.15mm; }
        .A4-4_vert_1 .box .box_franja_inferior { position: absolute; top: 129mm; height: 20mm; right: 0; width: 100%; /*background-color: aquamarine;*/ }
        
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_precio { font-size: 76pt; letter-spacing: -1.2mm; margin-top: 15px;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.precio_bajada { font-size: 62pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.prod_por_precio { font-size: 46pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.n_por_n { font-size: 110pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje { margin-top: 0px; float: right; width: 100%;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje.porcentaje { font-size: 100pt; position:absolute; top:100%}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje.todo_pago { margin-top: 0 !important; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1 .ic-porcentaje { font-size: 70pt; margin-right: -55px; position: absolute; top: -26px; right: 60px;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1 .dcto { font-size: 18pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 { margin-left: 185px; margin-top: -50px; font-size: 36pt; position: relative; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .todo_pago { font-size: 9.2pt; line-height: 1; text-align: left; margin-left: 10px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .signo_peso { font-size: 12pt; vertical-align: middle; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .punto { font-size: 18pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .signo_por { font-size: 14pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .ic-porcentaje { font-size: 25pt; position: absolute; left: 56px; top: 10px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .dcto { position: absolute; font-size: 8pt; left: 55px; top: 50px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago { position: absolute;left: -15mm;top: 40mm;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago { position: absolute; width: 100px;top: 30px;left: 40mm; line-height: 0.8;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h3 { font-weight: 800; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h3 sup { font-size: 8pt; }
        .clear {clear: both}
    </style>
</head>
<body>
    @for($i = 0; $i < count($product); $i+=4)
    <div class="cont-grid cont-a4-4_sisa">
        @if(array_key_exists($i+0, $product->toArray()))
        <div class="A4-4_vert_1 franja_tarjeta faldon_01">
            <div class="box">
                @if($product[$i+0]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+0]->id; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+0]->nombre_generico_promocion) <= 38)
                <div class="" style="font-size: 11.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+0]->nombre_generico_promocion) > 38 && strlen($product[$i+0]->nombre_generico_promocion) <= 100)
                <div class="" style="font-size: 9.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+0]->nombre_generico_promocion) > 100)
                <div class="" style="font-size: 8pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_precio"><span class="signo_peso">$</span> {{number_format($product[$i+0]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+0]->precio_referencia_moda != null || $product[$i+0]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+0]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif
                
                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+0]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+0]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+0]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+0]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 10 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+1, $product->toArray()))
        <div class="A4-4_vert_1 franja_tarjeta faldon_02">
            <div class="box">
                @if($product[$i+1]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+1]->id; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+1]->nombre_generico_promocion) <= 38)
                <div class="" style="font-size: 11.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+1]->nombre_generico_promocion) > 38 && strlen($product[$i+1]->nombre_generico_promocion) <= 100)
                <div class="" style="font-size: 9.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+1]->nombre_generico_promocion) > 100)
                <div class="" style="font-size: 8pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_precio"><span class="signo_peso">$</span> {{number_format($product[$i+1]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+1]->precio_referencia_moda != null || $product[$i+1]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+1]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif

                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+1]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+1]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+1]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+1]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 10 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+2, $product->toArray()))
        <div class="A4-4_vert_1 franja_tarjeta faldon_03">
            <div class="box">
                @if($product[$i+2]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+2]->id; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+2]->nombre_generico_promocion) <= 38)
                <div class=" bottom" style="font-size: 11.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+2]->nombre_generico_promocion) > 38 && strlen($product[$i+2]->nombre_generico_promocion) <= 100)
                <div class=" bottom" style="font-size: 9.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+2]->nombre_generico_promocion) > 100)
                <div class=" bottom" style="font-size: 8pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_precio"><span class="signo_peso">$</span> {{number_format($product[$i+2]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+2]->precio_referencia_moda != null || $product[$i+2]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+2]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif

                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+2]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+2]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+2]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+2]->fecha_termino_promo))}}</strong> O HASTA AGOTAR STOCK. MAXIMO 10 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+3, $product->toArray()))
        <div class="A4-4_vert_1 franja_tarjeta faldon_04">
            <div class="box">
                @if($product[$i+3]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+3]->id; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+3]->nombre_generico_promocion) <= 38)
                <div class=" bottom" style="font-size: 11.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+3]->nombre_generico_promocion) > 38 && strlen($product[$i+3]->nombre_generico_promocion) <= 100)
                <div class=" bottom" style="font-size: 9.5pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+3]->nombre_generico_promocion) > 100)
                <div class=" bottom" style="font-size: 8pt; text-align: right; padding: 120px 20px 0 20px; line-height: 1;">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_precio"><span class="signo_peso">$</span> {{number_format($product[$i+3]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+3]->precio_referencia_moda != null || $product[$i+3]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+3]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif

                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+3]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+3]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+3]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+3]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 10 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if($i > (count($product)-1))
        <div style="page-break-after: always"></div>
        @endif
    </div>
    @endfor
</body>
</html>
