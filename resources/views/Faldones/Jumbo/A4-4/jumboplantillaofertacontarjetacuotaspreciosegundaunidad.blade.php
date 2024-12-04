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
        
        .cont-grid.cont-a4-4 {width: 297mm;height: 190mm; position: relative;} 
        .box { font-family: 'Roboto', sans-serif; }
        
        .A4-4-cuotas { height: 105mm; width: 148.5mm; position: absolute;}
        
        .A4-4-cuotas.faldon_01{top: 0; left: 0;}
        .A4-4-cuotas.faldon_02{top: 0; left: 50%}
        .A4-4-cuotas.faldon_03{top: 55%; left: 0;}
        .A4-4-cuotas.faldon_04{top: 55%; left: 50%;}

        .A4-4-cuotas .box { height: 104.99mm; width: 147.99mm; position: relative;}
        .A4-4-cuotas .box .box_qr { width: 16mm; height: 16mm; /* border: 1px solid #f0f0f0; */ position: absolute; top: 6mm; left: 6mm; }
        .A4-4-cuotas .box .box_promo { position: absolute; /* background-color: aquamarine; */ width: 140mm; height: 30mm; left: 4mm; top: 34mm; text-align: right; }
        .A4-4-cuotas .box .box_promo h1 { font-weight: 900; font-size: 70pt; line-height: 50pt; color: #E00C15; letter-spacing: -2px; padding-right: 2mm;}
        .A4-4-cuotas .box .box_promo h1 .signo_peso { font-size: 25pt; letter-spacing: -10px; vertical-align: bottom; margin-right: 2mm; }
        .A4-4-cuotas .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4-4-cuotas .box .box_promo h1 .ic-porcentaje { font-size: 62pt; margin-right: -50px; position: absolute; top: -5px; }
        .A4-4-cuotas .box .box_promo h1 .dcto { font-size: 21pt; }
        .A4-4-cuotas .box .box_promo h1.solo_precio { letter-spacing: -1.2mm; margin-top: 0; }
        .A4-4-cuotas .box .box_promo h1.precio_bajada { font-size: 62pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4-cuotas .box .box_promo h1.prod_por_precio { font-size: 50pt; }
        .A4-4-cuotas .box .box_promo h1.prod_por_precio .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4-4-cuotas .box .box_promo h1.prod_por_precio .signo_por { font-size: 21pt; letter-spacing: -10px; vertical-align: top; margin-right: 4mm; margin-left: 2mm; }
        .A4-4-cuotas .box .box_promo h1.solo_prod_por_precio { font-size: 80pt; margin-top: 10px; }
        .A4-4-cuotas .box .box_promo h1.n_por_n { font-size: 110pt; margin-top: 5px; }
        .A4-4-cuotas .box .box_promo h1.solo_porcentaje { margin-top: 5px; margin-right: 30px; }
        .A4-4-cuotas .box .box_promo h1.solo_porcentaje .porcentaje { font-size: 100pt; }
        .A4-4-cuotas .box .box_promo h1.solo_porcentaje.todo_pago { margin-top: 0 !important; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad { margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad .ic-porcentaje { font-size: 60pt; margin-right: -50px; position: absolute; top: 10px; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad .dcto { font-size: 20pt; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad .porcentaje { font-size: 90pt; }
        .A4-4-cuotas .box .box_promo h1.precio_mas_promo { font-size: 90pt; letter-spacing: -1mm; margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h1.precio_mas_promo .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 3mm; }
        .A4-4-cuotas .box .box_promo h2 { font-size: 45pt; line-height: 35pt; color: #E00C15; font-weight: 900;letter-spacing: -1.2mm;}
        .A4-4-cuotas .box .box_promo h2 .todo_pago { font-size: 10pt; line-height: 1; text-align: center; color: #000; position: absolute; top: 4mm; left: 4mm; letter-spacing: 0; width: 35mm; line-height: .8;}
        .A4-4-cuotas .box .box_promo h2 .signo_peso { font-size: 25pt; vertical-align: middle; letter-spacing: -10px; margin-right: 3mm;}
        .A4-4-cuotas .box .box_promo h2 .punto { font-size: 18pt; }
        .A4-4-cuotas .box .box_promo h2 .signo_por { font-size: 21pt; vertical-align: middle; letter-spacing: -10px; margin-right: 4mm; margin-left: 2mm;}
        .A4-4-cuotas .box .box_promo h2 .ic-porcentaje { font-size: 30pt; position: absolute; left: 80px; margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h2 .dcto { position: absolute; font-size: 9pt; left: 80px; bottom: 13px; }
        .A4-4-cuotas .box .box_promo h2.otro_medio_pago {  }
        .A4-4-cuotas .box .box_promo h2.otro_medio_pago .todo_pago { }
        .A4-4-cuotas .box .box_promo h2.precio_otro_medio_pago { font-size: 18pt; margin-top: -12px; }
        .A4-4-cuotas .box .box_promo h2.precio_otro_medio_pago .todo_pago { font-size: 8pt; }
        .A4-4-cuotas .box .box_promo h2.produc_por_precio_otro_pago { font-size: 50pt; line-height: 30pt; text-align: right;}
        .A4-4-cuotas .box .box_promo h2.segunda_unidad { font-size: 40pt; margin-left: 250px; }
        .A4-4-cuotas .box .box_promo h2.segunda_unidad .ic-porcentaje { font-size: 28pt; left: 73px; margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h2.segunda_unidad .dcto { font-size: 8pt; left: 75px; bottom: 15px; }
        .A4-4-cuotas .box .box_promo .segunda_unidad { font-weight: 900; font-size: 21pt; }
        .A4-4-cuotas .box .box_promo .segunda_unidad sup { font-size: 12pt; }
        .A4-4-cuotas .box .box_promo .segunda_unidad { text-align: right; position: absolute; right: 0; line-height: .8; top: -8mm;  }
        .A4-4-cuotas .box .box_cuotas { position: absolute; top: 60mm; width: 100%; right: 0; text-align: center; }
        .A4-4-cuotas .box .box_cuotas p { font-size: 12pt; line-height: 10pt; margin-top: 1mm;}
        .A4-4-cuotas .box .box_precio_normal { position: absolute; top: 68mm; height: 4mm; width: 138mm; right: 6mm; text-align: right; /* background-color: bisque; */ }
        .A4-4-cuotas .box .box_precio_normal p { font-size: 8pt; text-transform: uppercase; }
        .A4-4-cuotas .box .box_condiciones { position: absolute; top: 72mm; left: 2mm; width: 142mm; height: 16mm; /* background-color: cadetblue; */ }
        .A4-4-cuotas .box .box_condiciones p.f-text { font-size: 8pt; }
        .A4-4-cuotas .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-4-cuotas .box .box_condiciones p.s-text { text-align: center; font-size: 9pt; line-height: 9pt; letter-spacing: -0.11mm; margin-top: 1mm; }
        .A4-4-cuotas .box .box_franja_inferior {width: 100%; position: absolute; top: 88mm; height: 17mm; left: 0;}

        /* .con_franja_oferta_tarjeta .box .box_promo h1 { background-image: url("{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.png')}}"); background-repeat: no-repeat; background-size: 65px; background-position: 12mm 0; } */
        /*.con_franja_oferta_tarjeta .box .box_promo h1.solo_porcentaje { margin-top: -10px; }
        .con_franja_oferta_tarjeta .box .box_promo h1.solo_porcentaje .porcentaje { margin-right: 20px; font-size: 80pt; }
        .con_franja_oferta_tarjeta .box .box_promo h1.solo_porcentaje .ic-porcentaje { font-size: 50pt; right: 90px; margin-top: -10px; }
        .con_franja_oferta_tarjeta .box .box_promo h1.solo_porcentaje .dcto { font-size: 16pt; margin-right: 10px; bottom: 13px; }
        .con_franja_oferta_tarjeta .box .box_promo h1.solo_precio { font-size: 60pt; margin-top: -10px; }
        .con_franja_oferta_tarjeta .box .box_promo h1.solo_precio .signo_peso { font-size: 21pt; }
        .con_franja_oferta_tarjeta .box .box_promo h1.solo_precio.otro_medio_precio { font-size: 82pt; }
        .con_franja_oferta_tarjeta .box .box_promo h2 { margin-left: 270px; font-size: 28pt; margin-top: -20px; }
        .con_franja_oferta_tarjeta .box .box_promo h2.otro_medio_pago { font-size: 28pt; margin-left: 309px; margin-top: -43px; }
        .con_franja_oferta_tarjeta .box .box_promo h2.otro_medio_pago .porcentaje { font-size: 21pt; left: 40px; margin-top: -5px; }
        .con_franja_oferta_tarjeta .box .box_promo h2.otro_medio_pago .ic-porcentaje { font-size: 23pt; left: 40px; margin-top: -5px; }
        .con_franja_oferta_tarjeta .box .box_promo h2.otro_medio_pago .dcto { font-size: 7pt; left: 40px; bottom: 0px; }
        .con_franja_oferta_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago { font-size: 10pt; } */
        .con_franja_oferta_tarjeta .box .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-jumbo-tarjeta_a4-4.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; }
        .clear {clear: both}
        
        .A4-4-cuotas.con_franja_oferta_tarjeta .box .box_promo h1.solo_precio,
        .A4-4-cuotas.con_franja_oferta_tarjeta .box .box_promo h2 {position: absolute; height: 15mm; right: 2mm; /*border: 1px solid #000;*/ width: 100%;}
        .A4-4-cuotas.con_franja_oferta_tarjeta .box .box_promo h1.solo_precio {top: 10;}
        .A4-4-cuotas.con_franja_oferta_tarjeta .box .box_promo h2 {top: 18mm;}
        
        .A4-4-cuotas.con_franja_oferta_tarjeta .box .box_promo .img-logo {position: absolute; left: 10mm; top: 0; width: 60px;}
    </style>
    
</head>
<body>
    @for($i = 0; $i < count($product); $i+=4)
    <div class="cont-grid cont-a4-4">
        
        @if(array_key_exists($i+0, $product->toArray()))
        <div class="A4-4-cuotas con_franja_oferta_tarjeta faldon_01">
            <div class="box">
                @if($product[$i+0]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+0]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif
                
                @if(strlen($product[$i+0]->nombre_generico_promocion) <= 38)
                <div class="" style="font-size: 12pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+0]->nombre_generico_promocion) > 38 && strlen($product[$i+0]->nombre_generico_promocion) <= 100)
                <div class="" style="font-size: 10pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+0]->nombre_generico_promocion) > 100)
                <div class="" style="font-size: 8pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+0]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <b><div class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></div></b>
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+0]->tmp, 0, '', '.')}}</h1>
                        <img src="{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.svg')}}" alt="" class="img-logo">
                    </div>
                </div>

                @if($product[$i+0]->cuotas > 0)
                <div class="box_cuotas">
                    <p>{{$product[$i+0]->cuotas}} cuotas de $ {{number_format($product[$i+0]->valor_cuota, 0, '', '.')}} C.A.E: {{$product[$i+0]->cae}}% Costo total: $ {{number_format($product[$i+0]->costo_total, 0, '', '.')}}</p>
                </div>
                @endif

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
        <div class="A4-4-cuotas con_franja_oferta_tarjeta faldon_02">
            <div class="box">
                @if($product[$i+1]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+1]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif
                
                @if(strlen($product[$i+1]->nombre_generico_promocion) <= 38)
                <div class="" style="font-size: 12pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+1]->nombre_generico_promocion) > 38 && strlen($product[$i+1]->nombre_generico_promocion) <= 100)
                <div class="" style="font-size: 10pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+1]->nombre_generico_promocion) > 100)
                <div class="" style="font-size: 8pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+1]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <b><div class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></div></b>
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+1]->tmp, 0, '', '.')}}</h1>
                        <img src="{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.svg')}}" alt="" class="img-logo">
                    </div>
                </div>

                @if($product[$i+1]->cuotas > 0)
                <div class="box_cuotas">
                    <p>{{$product[$i+1]->cuotas}} cuotas de $ {{number_format($product[$i+1]->valor_cuota, 0, '', '.')}} C.A.E: {{$product[$i+1]->cae}}% Costo total: $ {{number_format($product[$i+1]->costo_total, 0, '', '.')}}</p>
                </div>
                @endif

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
        <div class="A4-4-cuotas con_franja_oferta_tarjeta faldon_03">
            <div class="box">
                @if($product[$i+2]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+2]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif
                
                @if(strlen($product[$i+2]->nombre_generico_promocion) <= 38)
                <div class=" bottom" style="font-size: 12pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+2]->nombre_generico_promocion) > 38 && strlen($product[$i+2]->nombre_generico_promocion) <= 100)
                <div class=" bottom" style="font-size: 10pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+2]->nombre_generico_promocion) > 100)
                <div class=" bottom" style="font-size: 8pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+2]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <b><div class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></div></b>
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+2]->tmp, 0, '', '.')}}</h1>
                        <img src="{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.svg')}}" alt="" class="img-logo">
                    </div>
                </div>

                @if($product[$i+2]->cuotas > 0)
                <div class="box_cuotas">
                    <p>{{$product[$i+2]->cuotas}} cuotas de $ {{number_format($product[$i+2]->valor_cuota, 0, '', '.')}} C.A.E: {{$product[$i+2]->cae}}% Costo total: $ {{number_format($product[$i+2]->costo_total, 0, '', '.')}}</p>
                </div>
                @endif

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
        <div class="A4-4-cuotas con_franja_oferta_tarjeta faldon_04">
            <div class="box">
                @if($product[$i+3]->qr != 2)
                <div class="box_qr">
                    <?php $id =$product[$i+3]->count_robot; ?>
                    {!! DNS2D::getBarcodeHTML("$id", 'DATAMATRIX', 6,6) !!}
                </div>
                @endif
                
                @if(strlen($product[$i+3]->nombre_generico_promocion) <= 38)
                <div class=" bottom" style="font-size: 12pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+3]->nombre_generico_promocion) > 38 && strlen($product[$i+3]->nombre_generico_promocion) <= 100)
                <div class=" bottom" style="font-size: 10pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif
                @if(strlen($product[$i+3]->nombre_generico_promocion) > 100)
                <div class=" bottom" style="font-size: 8pt; text-align: right; padding: 20px 20px 0 95px; line-height: 1;">
                    <h2>{{$product[$i+3]->nombre_generico_promocion}}</h2>
                </div>
                @endif

                <div class="box_promo">
                    <div class="promo">
                        <b><div class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></div></b>
                        <h1><span class="signo_peso">$</span> {{number_format($product[$i+3]->tmp, 0, '', '.')}}</h1>
                        <img src="{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.svg')}}" alt="" class="img-logo">
                    </div>
                </div>

                @if($product[$i+3]->cuotas > 0)
                <div class="box_cuotas">
                    <p>{{$product[$i+3]->cuotas}} cuotas de $ {{number_format($product[$i+3]->valor_cuota, 0, '', '.')}} C.A.E: {{$product[$i+3]->cae}}% Costo total: $ {{number_format($product[$i+3]->costo_total, 0, '', '.')}}</p>
                </div>
                @endif

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

        @if($i > (count($product)-1))
        <div style="page-break-after: always"></div>
        @endif
    </div>
    @endfor
</body>
</html>