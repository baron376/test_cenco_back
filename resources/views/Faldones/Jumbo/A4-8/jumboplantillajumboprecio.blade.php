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
        
        .cont-grid.cont-a4-8 {width: 210mm;height: 290mm; position: relative;}
        .box { font-family: 'Roboto', sans-serif;}
        
        .box .box_nombre_producto { position: absolute; font-weight: 500; text-transform: uppercase; }
        .box .box_nombre_producto h2 { margin-bottom: 3.4mm; }
        .box .box_nombre_producto h2:last-child { margin-bottom: 0; }

        .box .box_nombre_producto_medium { position: absolute; font-weight: 500; text-transform: uppercase; }
        .box .box_nombre_producto_medium h2 { margin-bottom: 3.4mm; }
        .box .box_nombre_producto_medium h2:last-child { margin-bottom: 0; }

        .box .box_nombre_producto_large { position: absolute; font-weight: 500; text-transform: uppercase; }
        .box .box_nombre_producto_large h2 { margin-bottom: 3.4mm; }
        .box .box_nombre_producto_large h2:last-child { margin-bottom: 0; }
        
        .box .box_franja_inferior { position: absolute; width: 100%; }
        
        .A4-8.franja_oferta { height: 74.25mm; width: 105mm; position: absolute;}
        
        .A4-8.faldon_01{top: 0; left: 0;}
        .A4-8.faldon_02{top: 0; left: 50%}
        .A4-8.faldon_03{top: 25%; left: 0;}
        .A4-8.faldon_04{top: 25%; left: 50%;}
        .A4-8.faldon_05{top: 50%; left: 0;}
        .A4-8.faldon_06{top: 50%; left: 50%}
        .A4-8.faldon_07{top: 75%; left: 0;}
        .A4-8.faldon_08{top: 75%; left: 50%;}
        
        .A4-8 .box { height: 74.15mm; width: 104.99mm; }
        .A4-8 .box .box_qr { width: 12mm; height: 12mm; /* border: 1px solid #f0f0f0; */ position: absolute; top: 2mm; left: 6mm; }
        .A4-8 .box .box_qr img { width: 100%; max-width: 100%; }
        .A4-8 .box .bg-producto { position: absolute; height: 10mm; width: 70%; top: 2mm; right: 3mm; }
        .A4-8 .box .box_nombre_producto { top: 4mm; right: 3mm; font-weight: 600; text-align: right; font-size: 7pt;}
        .A4-8 .box .box_nombre_producto_medium { top: 4mm; right: 3mm; font-weight: 600; text-align: right; font-size: 5pt;}
        .A4-8 .box .box_nombre_producto_large { top: 4mm; right: 3mm; font-weight: 600; text-align: right; font-size: 3pt;}
        .A4-8 .box .box_promo { position: absolute; width: 101mm; height: 24mm; top: 12mm; text-align: right; }
        .A4-8 .box .box_promo h1 { font-size: 45pt; font-weight: 900; color: #E00C15; }
        .A4-8 .box .box_promo h1 .signo_peso { font-size: 35pt; letter-spacing: -10px; vertical-align: bottom; margin-right: 2mm; }
        .A4-8 .box .box_promo h1 .signo_por { font-size: 37pt; letter-spacing: -10px; vertical-align: ; margin-right: 2mm; }
        .A4-8 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4-8 .box .box_promo h1 .dcto { font-size: 16pt; }
        .A4-8 .box .box_promo h1 .porcentaje { font-size: 90pt; line-height: 80pt; }
        .A4-8 .box .box_promo h1 .ic-porcentaje { font-size: 58pt; margin-right: -50px; position: absolute; top: -20px; right: 14mm;}
        .A4-8 .box .box_promo h1.solo_precio { font-size: 64pt; line-height: 66pt; letter-spacing: -2px; margin-top: -5px; }
        .A4-8 .box .box_promo h1.solo_porcentaje { margin-top: -12px; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo { margin-top: 3px; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo .porcentaje { font-size: 75pt; line-height: 40pt; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo .ic-porcentaje { font-size: 50pt; margin-right: -55px; top: -5px; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo .dcto { font-size: 14pt; }
        .A4-8 .box .box_promo h1.precio_mas_promo { font-size: 68pt; line-height: 46pt; }
        .A4-8 .box .box_promo h1.prod_por_precio { font-size: 54pt; letter-spacing: 0; margin-top: 0; }
        .A4-8 .box .box_promo h1.prod_por_precio .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: middle;}
        .A4-8 .box .box_promo h1.prod_por_precio .signo_por { font-size: 21pt; letter-spacing: -10px; vertical-align: middle;}
        .A4-8 .box .box_promo h1.n_por_n { font-size: 0; letter-spacing: 0; margin-top: -18px; }
        .A4-8 .box .box_promo h1.n_por_n .signo_por_big { font-size: 70pt; }
        .A4-8 .box .box_promo h1.n_por_n .porcentaje { font-size: 90pt; line-height: 1; }
        .A4-8 .box .box_promo h2 { font-size: 16pt; font-weight: 900; margin-top: -9px; }
        .A4-8 .box .box_promo h2 sup { font-size: 12px; font-weight: 800; margin-right: 2px; }
        .A4-8 .box .box_precio_normal { position: absolute; top: 40mm; height: 2mm; width: 102mm; left: 0; text-align: right; /*background-color: bisque; */ }
        .A4-8 .box .box_precio_normal p { font-size: 6pt; text-transform: uppercase; }
        .A4-8 .box .box_condiciones { position: absolute; top: 42mm; left: 2mm; width: 100mm; height: 16mm; /* background-color: cadetblue;*/ }
        .A4-8 .box .box_condiciones p.f-text { font-size: 5pt; }
        .A4-8 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-8 .box .box_condiciones p.s-text { text-align: center; font-size: 7pt; line-height: 6pt; letter-spacing: -0.15mm; }
        .A4-8 .box .box_franja_inferior { top: 54mm; height: 20mm; background-image: url("{{ public_path('cssFaldones/assets/img/faldon-jumbo-jumbo.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; }
        .clear {clear: both}
    </style>
</head>
<body>
    @for($i = 0; $i < count($product); $i+=8)
    <div class="cont-grid cont-a4-8">
        @if(array_key_exists($i+0, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_01">
            <div class="box">
                @if($product[$i+0]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+0]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+0]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+0]->nombre_generico_promocion) > 38 && strlen($product[$i+0]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+0]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+0]->tmp, 0, '', '.')}}</h1>
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
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+0]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+0]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+1, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_02">
            <div class="box">
                @if($product[$i+1]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+1]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+1]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+1]->nombre_generico_promocion) > 38 && strlen($product[$i+1]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+1]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+1]->tmp, 0, '', '.')}}</h1>
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
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+1]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+1]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+2, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_03">
            <div class="box">
                @if($product[$i+2]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+2]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+2]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+2]->nombre_generico_promocion) > 38 && strlen($product[$i+2]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+2]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+2]->tmp, 0, '', '.')}}</h1>
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
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+2]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+2]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+3, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_04">
            <div class="box">
                @if($product[$i+3]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+3]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+3]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+3]->nombre_generico_promocion) > 38 && strlen($product[$i+3]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+3]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+3]->tmp, 0, '', '.')}}</h1>
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
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+3]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+3]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+4, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_05">
            <div class="box">
                @if($product[$i+4]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+4]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+4]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+4]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+4]->nombre_generico_promocion) > 38 && strlen($product[$i+4]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+4]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+4]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+4]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+4]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+4]->precio_referencia_moda != null || $product[$i+4]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+4]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif
                
                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+4]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+4]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+4]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+4]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+5, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_06">
            <div class="box">
                @if($product[$i+5]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+5]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+5]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+5]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+5]->nombre_generico_promocion) > 38 && strlen($product[$i+5]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+5]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+5]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+5]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+5]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+5]->precio_referencia_moda != null || $product[$i+5]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+5]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif
                
                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+5]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+5]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+5]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+5]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+6, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_07">
            <div class="box">
                @if($product[$i+6]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+6]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+6]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+6]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+6]->nombre_generico_promocion) > 38 && strlen($product[$i+6]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+6]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+6]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+6]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+6]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+6]->precio_referencia_moda != null || $product[$i+6]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+6]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif
                
                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+6]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+6]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+6]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+6]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        @endif
        @if(array_key_exists($i+7, $product->toArray()))
        <div class="A4-8 franja_oferta faldon_08">
            <div class="box">
                @if($product[$i+7]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+7]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif

                @if(strlen($product[$i+7]->nombre_generico_promocion) <= 38)
                <div class="box_nombre_producto">
                    <h2>{{$product[$i+7]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+7]->nombre_generico_promocion) > 38 && strlen($product[$i+7]->nombre_generico_promocion) <= 100)
                <div class="box_nombre_producto_medium">
                    <h2>{{$product[$i+7]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                @if(strlen($product[$i+7]->nombre_generico_promocion) > 100)
                <div class="box_nombre_producto_large">
                    <h2>{{$product[$i+7]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+7]->tmp, 0, '', '.')}}</h1>
                    </div>
                </div>

                @if($product[$i+7]->precio_referencia_moda != null || $product[$i+7]->precio_referencia_moda != 0)
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong> $ {{number_format($product[$i+7]->precio_referencia_moda, 0, '', '.')}} </strong></p>
                </div>
                @else
                <div class="box_precio_normal">
                    <p> &nbsp; </p>
                </div>
                @endif
                
                <div class="box_condiciones">
                    <p class="f-text">{{$product[$i+7]->tipo_volante_catalogo}} <strong>SAP:</strong> {{$product[$i+7]->sap}}</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL {{date('d-m-Y', strtotime($product[$i+7]->fecha_inicio_promo))}}  AL {{date('d-m-Y', strtotime($product[$i+7]->fecha_termino_promo))}}</strong> O HASTA AGOTAR  STOCK. MAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
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