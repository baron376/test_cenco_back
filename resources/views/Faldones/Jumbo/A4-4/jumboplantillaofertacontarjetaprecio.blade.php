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

        .A4-4.franja_tarjeta { height: 105mm; width: 148.5mm; position: absolute;}

        .A4-4.faldon_01{top: 0; left: 0;}
        .A4-4.faldon_02{top: 0; left: 50%}
        .A4-4.faldon_03{top: 55%; left: 0;}
        .A4-4.faldon_04{top: 55%; left: 50%;}

        .A4-4 .box { height: 104.99mm; width: 147.99mm; position: relative;}
        .A4-4 .box .box_qr { width: 16mm; height: 16mm; /* border: 1px solid #f0f0f0; */ position: absolute; top: 6mm; left: 6mm; }
        .A4-4 .box .box_qr img { object-fit: contain; }
        .A4-4 .box .box_promo { position: absolute; /* background-color: aquamarine; */ width: 140mm; height: 30mm; left: 4mm; top: 28mm; text-align: right; }
        
        .A4-4 .box .box_promo h1 { font-weight: 900; font-size: 45pt; line-height: 30pt; color: #E00C15; letter-spacing: -2px; padding-right: 4mm;}
        .A4-4 .box .box_promo h1 .signo_peso { font-size: 30pt; vertical-align: bottom; /*margin-right: 2mm; */}
        .A4-4 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4-4 .box .box_promo h1 .dcto { font-size: 21pt; }
        /* .A4-4 .box .box_promo h1 .porcentaje { font-size: 160pt; line-height: 110pt; } */
        .A4-4 .box .box_promo h1 .ic-porcentaje { font-size: 62t;  }
        .A4-4 .box .box_promo h1.solo_porcentaje { margin-top: 5px; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo { margin-top: -5px; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo .porcentaje { font-size: 120pt; line-height: 40pt; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo .ic-porcentaje { font-size: 80pt; margin-right: -50px; top: 20px; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo .dcto { font-size: 24pt; }
        .A4-4 .box .box_promo h1.precio_mas_promo { font-size: 110pt; line-height: 46pt; }
        .A4-4 .box .box_promo h1.prod_por_precio { font-size: 82pt; letter-spacing: -5px; margin-top: 10px; }
        .A4-4 .box .box_promo h1.prod_por_precio .signo_peso { font-size: 21pt; /*vertical-align: middle;*/ margin-right: 3mm; }
        .A4-4 .box .box_promo h1.prod_por_precio .signo_por { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 4mm; margin-left: 2mm; }
        .A4-4 .box .box_promo h1.n_por_n { font-size: 120pt; line-height: 80pt;}
        .A4-4 .box .box_promo h1.n_por_n .signo_por_big { font-size: 60pt; /*vertical-align: middle;*/ }
        .A4-4 .box .box_promo h1.n_por_n .porcentaje { font-size: 150pt; line-height: 1; }
        
        .A4-4 .box .box_promo h2 { font-size: 55pt; font-weight: 900; line-height: 30pt; letter-spacing: -2px; color: #E00C15;}
        .A4-4 .box .box_promo h2 sup { font-size: 21px; font-weight: 900; margin-right: 2px; }
        
        .A4-4 .box .box_cuotas { position: absolute; top: 60mm;width: 100%; left: 0; text-align: center; }
        
        .A4-4 .box .box_cuotas p { font-size: 8pt; line-height: .8; margin-top: 1mm;}
        .A4-4 .box .box_precio_normal { position: absolute; top: 68mm; height: 4mm; width: 69mm; right: 6mm; text-align: right; /* background-color: bisque; */ }
        .A4-4 .box .box_precio_normal p { font-size: 8pt; text-transform: uppercase; }
        
        .A4-4 .box .box_condiciones { position: absolute; top: 72mm; left: 2mm; width: 142mm; height: 16mm; /* background-color: cadetblue; */ }
        .A4-4 .box .box_condiciones.pre { width: 69mm; height: 4mm; top: 68mm;}
        .A4-4 .box .box_condiciones p.f-text { font-size: 8pt; }
        .A4-4 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-4 .box .box_condiciones p.s-text { text-align: center; font-size: 9pt; line-height: 9pt; letter-spacing: -0.11mm; margin-top: 1mm;}
        
        .A4-4 .box .box_franja_inferior { width: 100%; position: absolute; top: 88mm; height: 17mm; left: 0; }
        
        /* .A4-4.franja_tarjeta .box .box_promo h1 { background-image: url("{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.png')}}"); background-repeat: no-repeat; background-size: 60px; background-position: 30mm 0; }*/
        
        .A4-4.franja_tarjeta .box .box_promo h1 .ic-porcentaje { font-size: 68pt; position: absolute; top: -30px; right: 22mm;}
        .A4-4.franja_tarjeta .box .box_promo h1 .dcto { font-size: 21pt; }
        .A4-4.franja_tarjeta .box .box_promo h1.solo_precio { font-size: 55pt;  margin-top: 0; }
        .A4-4.franja_tarjeta .box .box_promo h1.precio_bajada { font-size: 70pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4.franja_tarjeta .box .box_promo h1.prod_por_precio { font-size: 70pt; margin-top: -10px; }
        .A4-4.franja_tarjeta .box .box_promo h1.n_por_n { }
        .A4-4.franja_tarjeta .box .box_promo h1.solo_porcentaje { margin-top: -25px; margin-right: 30px; }
        .A4-4.franja_tarjeta .box .box_promo h1.solo_porcentaje .porcentaje { font-size: 100pt; }
        .A4-4.franja_tarjeta .box .box_promo h1.solo_porcentaje.todo_pago { margin-top: 0 !important; }
        .A4-4.franja_tarjeta .box .box_promo h1.segunda_unidad .ic-porcentaje { font-size: 60pt; margin-right: -50px; position: absolute; top: -5px; }
        .A4-4.franja_tarjeta .box .box_promo h1.segunda_unidad .dcto { font-size: 20pt; }
        .A4-4.franja_tarjeta .box .box_promo h1.segunda_unidad .porcentaje { font-size: 90pt; }
        .A4-4.franja_tarjeta .box .box_promo h1.precio_mas_promo { font-size: 46pt; letter-spacing: -1mm; margin-top: 0px; }
        .A4-4.franja_tarjeta .box .box_promo h1.precio_mas_promo .signo_peso { font-size: 21pt; /*vertical-align: middle;*/ margin-right: 3mm; }
        
        .A4-4.franja_tarjeta .box .box_promo h2 .todo_pago { font-size: 12pt; line-height: 1; text-align: left; margin-left: 10px; color: #000; }
        .A4-4.franja_tarjeta .box .box_promo h2 .signo_peso { font-size: 30pt; /*vertical-align: middle;*/ }
        .A4-4.franja_tarjeta .box .box_promo h2 .punto { font-size: 18pt; }
        .A4-4.franja_tarjeta .box .box_promo h2 .signo_por { font-size: 14pt; }
        .A4-4.franja_tarjeta .box .box_promo h2 .ic-porcentaje { font-size: 26pt; position: absolute; top: 0;right: -8mm; }
        .A4-4.franja_tarjeta .box .box_promo h2 .dcto { position: absolute; font-size: 8pt; top: 11mm; right: -9mm; }
        
        .A4-4.franja_tarjeta .box .box_promo h2.otro_medio_pago { position: relative; }
        .A4-4.franja_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago { position: absolute; left: 21mm; top: 2mm; letter-spacing: 0; line-height: .8; width: 30mm; text-align: center; font-size: 10pt;}
        .A4-4.franja_tarjeta .box .box_promo h2.precio_otro_medio_pago { font-size: 18pt; }
        .A4-4.franja_tarjeta .box .box_promo h2.precio_otro_medio_pago .todo_pago { margin-left: 6px; font-size: 8pt; }
        
        .A4-4.franja_tarjeta .box .box_promo h2.produc_por_precio_otro_pago { margin-left: 130px; margin-top: -40px; font-size: 36pt; }
        .A4-4.franja_tarjeta .box .box_promo h2.segunda_unidad { font-size: 40pt; margin-left: 250px; }
        .A4-4.franja_tarjeta .box .box_promo h2.segunda_unidad .ic-porcentaje { font-size: 28pt; left: 73px; margin-top: -10px; }
        .A4-4.franja_tarjeta .box .box_promo h2.segunda_unidad .dcto { font-size: 8pt; left: 75px; bottom: 15px; }
        .A4-4.franja_tarjeta .box .box_promo h3 { font-weight: 900; margin-top: -6px;}
        .A4-4.franja_tarjeta .box .box_promo h3 sup { font-size: 8pt; }
        
        .A4-4.franja_tarjeta .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-jumbo-tarjeta_a4-4.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; }
        
        .A4-4.franja_tarjeta .box .box_promo h1.solo_precio,
        .A4-4.franja_tarjeta .box .box_promo h2.otro_medio_pago {position: absolute; height: 15mm; right: 2mm; /*border: 1px solid #000;*/ width: 100%;}
        .A4-4.franja_tarjeta .box .box_promo h2.otro_medio_pago {right: 6mm; }
        .A4-4.franja_tarjeta .box .box_promo h1.solo_precio {top: 0;}
        .A4-4.franja_tarjeta .box .box_promo h2.otro_medio_pago {top: 15mm;}
        
        .A4-4.franja_tarjeta .box .box_promo .img-logo {position: absolute; left: 26mm; top: -2mm; width: 60px;}
    </style>
</head>
<body>
    @for($i = 0; $i < count($product); $i+=4)
    <div class="cont-grid cont-a4-4">
        @if(array_key_exists($i+0, $product->toArray()))
        <div class="A4-4 franja_tarjeta faldon_01">
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
                        <h1 class="solo_precio"><span class="signo_peso">$</span>{{number_format($product[$i+0]->tc, 0, '', '.')}}</h1>
                        @if($product[$i+0]->tmp > 0)
                        <h2 class="otro_medio_pago" style="margin: 15px 0 0 0;" ><span class="signo_peso">$</span>{{number_format($product[$i+0]->tmp, 0, '', '.')}} <div class="todo_pago">CON&nbsp;OTRO &nbsp;MEDIO&nbsp;DE&nbsp;PAGO</div></h2>
                        @endif
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
        <div class="A4-4 franja_tarjeta faldon_02">
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
                        <h1 class="solo_precio"><span class="signo_peso">$</span>{{number_format($product[$i+1]->tc, 0, '', '.')}}</h1>
                        @if($product[$i+1]->tmp > 0)
                        <h2 class="otro_medio_pago" style="margin: 15px 0 0 0;" ><span class="signo_peso">$</span>{{number_format($product[$i+1]->tmp, 0, '', '.')}} <div class="todo_pago">CON&nbsp;OTRO &nbsp;MEDIO&nbsp;DE&nbsp;PAGO</div></h2>
                        @endif
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
        <div class="A4-4 franja_tarjeta faldon_03">
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
                        <h1 class="solo_precio"><span class="signo_peso">$</span>{{number_format($product[$i+2]->tc, 0, '', '.')}}</h1>
                        @if($product[$i+2]->tmp > 0)
                        <h2 class="otro_medio_pago" style="margin: 15px 0 0 0;" ><span class="signo_peso">$</span>{{number_format($product[$i+2]->tmp, 0, '', '.')}} <div class="todo_pago">CON&nbsp;OTRO &nbsp;MEDIO&nbsp;DE&nbsp;PAGO</div></h2>
                        @endif
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
        <div class="A4-4 franja_tarjeta faldon_04">
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
                        <h1 class="solo_precio"><span class="signo_peso">$</span>{{number_format($product[$i+3]->tc, 0, '', '.')}}</h1>
                        @if($product[$i+3]->tmp > 0)
                        <h2 class="otro_medio_pago" style="margin: 15px 0 0 0;" ><span class="signo_peso">$</span>{{number_format($product[$i+3]->tmp, 0, '', '.')}} <div class="todo_pago">CON&nbsp;OTRO &nbsp;MEDIO&nbsp;DE&nbsp;PAGO</div></h2>
                        @endif
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
    </div>
    @endfor
</body>
</html>