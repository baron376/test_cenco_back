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

        .box .box_nombre_producto { position: absolute; font-weight: 500; text-transform: uppercase; bottom: 255mm; right: 4mm; line-height:.8; width: 80%;}
        .box .box_nombre_producto h2 { margin-bottom: -2mm; }
        .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .box .box_nombre_producto_large { position: absolute; font-weight: 500; text-transform: uppercase; right: 4mm; line-height:1; width: 80%;}
        .box .box_nombre_producto_large h2 { margin-bottom: -2mm; }
        .box .box_nombre_producto_large h2:last-child { margin-bottom: 0; }
        .A4 .box .box_nombre_producto_medium { line-height: 1.25; right: 4mm;}
        .A4 .box .box_nombre_producto_medium h2 { font-size: 30pt; }
        .A4-4_vert_1.franja_tarjeta { height: 148.5mm; width: 105mm; position: absolute;}
        
        .A4-4_vert_1.faldon_01{top: 0; left: 0;}
        .A4-4_vert_1.faldon_02{top: 0; left: 50%}
        .A4-4_vert_1.faldon_03{top: 50%; left: 0;}
        .A4-4_vert_1.faldon_04{top: 50%; left: 50%;}
        
        .A4-4_vert_1 .box .box_nombre_producto {height: 23mm; bottom: 248mm; right: 6mm; text-align: right; font-size: 15pt;}
        .A4-4_vert_1 .box .box_nombre_producto_medium {height: 23mm; width: 80%; bottom: 248mm; right: 6mm; text-align: right; font-size: 10pt; position: absolute;}
        .A4-4_vert_1 .box .box_nombre_producto_large {height: 23mm; width: 80%; bottom: 248mm; right: 6mm; text-align: right; font-size: 8pt; position: absolute;}
        .A4-4_vert_1 .box .box_nombre_producto_large.bottom,
        .A4-4_vert_1 .box .box_nombre_producto_large.bottom,
        .A4-4_vert_1 .box .box_nombre_producto_medium.bottom,
        .A4-4_vert_1 .box .box_nombre_producto_medium.bottom,
        .A4-4_vert_1 .box .box_nombre_producto.bottom,
        .A4-4_vert_1 .box .box_nombre_producto.bottom {bottom: 95mm !important;}

        .A4-4_vert_1 .box .box_promo { position: absolute; width: 99mm; height: 44mm; left: 2mm; top: 60mm; text-align: right; }
        .A4-4_vert_1 .box .box_promo h1 { font-weight: 900; color: #000; position: relative; }
        .A4-4_vert_1 .box .box_promo h1.solo_precio { font-size: 72pt;  }
        .A4-4_vert_1 .box .box_promo h1.solo_puntos { font-size: 76pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4_vert_1 .box .box_promo h1.prod_por_precio { font-size: 58pt; letter-spacing: 0; }
        .A4-4_vert_1 .box .box_promo h1.n_por_n { font-size: 120pt; letter-spacing: 0; margin-top: 20px; }
        .A4-4_vert_1 .box .box_promo h1.precio_mas_promo { font-size: 72pt; letter-spacing: -1.2mm; margin-top: -30px; }
        .A4-4_vert_1 .box .box_promo h1.solo_porcentaje {}
        .A4-4_vert_1 .box .box_promo h1.solo_porcentaje .porcentaje { font-size: 70pt; line-height: 55pt }
        .A4-4_vert_1 .box .box_promo h1 .signo_peso { font-size: 18pt; vertical-align: middle; margin-right: 5px; margin-left: 5px; }
        .A4-4_vert_1 .box .box_promo h1 .signo_peso_small { font-size: 21pt; letter-spacing: -1mm; vertical-align: top; }
        .A4-4_vert_1 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: -1mm; }
        .A4-4_vert_1 .box .box_promo h1 .dcto { font-size: 24pt; letter-spacing: 0;}
        .A4-4_vert_1 .box .box_promo h1 .porcentaje { font-size: 100pt; line-height: 80pt; }
        .A4-4_vert_1 .box .box_promo h1 .ic-porcentaje { font-size: 68pt; position: absolute; top: 0; right: 0;}
        .A4-4_vert_1 .box .box_promo h1 .signo_por { font-size: 18pt; vertical-align: middle; margin-right: 5px; margin-left: 5px; }
        .A4-4_vert_1 .box .box_promo h1 .signo_por_big { font-size: 80pt; vertical-align: bottom; }
        .A4-4_vert_1 .box .box_promo h2 { font-size: 36pt; font-weight: 900; }
        .A4-4_vert_1 .box .box_promo h2 sup { font-size: 24px; font-weight: 800; margin-right: -10px; }
        .A4-4_vert_1 .box .box_precio_normal { position: absolute; top: 100mm; height: 4mm; width: 100mm; left: 0; text-align: right; padding-right: 2mm; float: left;}
        .A4-4_vert_1 .box .box_precio_normal p { font-size: 12pt; text-transform: uppercase; }
        .A4-4_vert_1 .box .box_condiciones { position: absolute; top: 105mm; left: 2mm; width: 101mm; height: 18mm;}
        .A4-4_vert_1 .box .box_condiciones p.f-text { font-size: 7.5pt; margin-bottom: .75mm; }
        .A4-4_vert_1 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-4_vert_1 .box .box_condiciones p.s-text { text-align: center; font-size: 8.2pt; line-height: 1; letter-spacing: -0.15mm; }
        .A4-4_vert_1 .box .box_franja_inferior { position: absolute; top: 129mm; height: 20mm; right: 0; width: 100%; /*background-color: aquamarine;*/ }
        
        /*.A4-4_vert_1.franja_tarjeta .box .box_promo h1 { background-image:url("{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta.png')}}"); background-repeat: no-repeat; background-size: 65px; background-position:12mm 0mm;}*/
        .A4-4_vert_1.franja_tarjeta .box .box_promo .img-logo { position: absolute; width: 60px; left:10mm; top: 0; }
        
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_precio {  font-size: 45pt; line-height:36pt; padding-right: 2mm;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.precio_bajada { font-size: 62pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.prod_por_precio { font-size: 42pt; line-height: 36pt;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.n_por_n { font-size: 110pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje { }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje.porcentaje {}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje.todo_pago { margin-top: 0 !important; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1 .ic-porcentaje { font-size: 55pt; position: absolute; top: -8mm; right: 0;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1 .dcto { font-size: 14pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 { font-size: 70pt; line-height: 55pt; position: relative; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .todo_pago { font-size: 9.2pt; line-height: 1; text-align: left; margin-left: 10px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .signo_peso { font-size: 18pt; vertical-align: middle; margin-right: 5px; margin-left: 5px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .punto { font-size: 18pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .signo_por { font-size: 18pt; vertical-align: middle; margin-right: 5px; margin-left: 5px;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .ic-porcentaje { font-size: 55pt; position: absolute; right: 0; top: -4mm; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .dcto {font-size: 14pt; letter-spacing: 0;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago { font-size: 45pt; line-height:36pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago { position: absolute; top: 0mm; left:0; line-height:1; letter-spacing: 0; text-align: center;width:25mm}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h3 { font-weight: 900; margin-top: -8mm}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h3 sup { font-size: 8pt; }
        /* .A4-4_vert_1.franja_tarjeta .box .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-sisa-tarjeta.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; width:100%;position:absolute;bottom: 0;} */
        .clear {clear: both}
        
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_precio,
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago {position: absolute; /*border: 1px solid #000;*/ letter-spacing: -1mm; height: 20mm; right: 0; width: 98%;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_precio {top: 0;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago {top: 20mm;}
    </style>
  </head>
  <body>
    <div class="cont-grid cont-a4">
        <div class="A4-4_vert_1 franja_tarjeta faldon_01">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto box_nombre_producto_medium">
                    <h2>Chocolate Costanuss<br>Libre Azúcar<br>110 GR.1</h2>
                </div>
                <div class="box_promo">
                   <h3>2<sup>DA</sup> UNIDAD CON TARJETA</h3>
                    <h1 class="solo_precio"><span class="signo_peso">$</span>9.000</h1>
                    <h2 class="otro_medio_pago"><span class="signo_peso">$</span>8.000 <div class="todo_pago">CON  OTRO MEDIO DE PAGO</div></h2>
                    <img src="{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta2.svg')}}" alt="" class="img-logo">
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR  STOCK. MAXIMO 10 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-4_vert_1 franja_tarjeta faldon_02">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto">
                    <h2>Chocolate Costanuss</h2>
                    <h2>Libre Azúcar </h2>
                    <h2>110 GR. 2</h2>
                </div>
                <div class="box_promo">
                    <h1 class="solo_porcentaje"><span class="porcentaje">50</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    <h2 class="otro_medio_pago">40<span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span><div class="todo_pago">CON  OTRO MEDIO DE PAGO</div></h2>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 10 PROMOCIONES POR PERSONAS. OFERTAS EN CARNES ROJAS Y BLANCAS MAXIMO 10 KILOS POR PERSONA. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-4_vert_1 franja_tarjeta faldon_03">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto">
                    <h2>Chocolate Costanuss</h2>
                    <h2>Libre Azúcar </h2>
                    <h2>110 GR.3</h2>
                </div>
                <div class="box_promo">
                    <h1 class="solo_porcentaje"><span class="porcentaje">50</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    <h2 class="otro_medio_pago">40<span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span><div class="todo_pago">CON  OTRO MEDIO DE PAGO</div></h2>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 10 PROMOCIONES POR PERSONAS. OFERTAS EN CARNES ROJAS Y BLANCAS MAXIMO 10 KILOS POR PERSONA. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-4_vert_1 franja_tarjeta faldon_04">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto">
                    <h2>Chocolate Costanuss</h2>
                    <h2>Libre Azúcar </h2>
                    <h2>110 GR.4</h2>
                </div>
                <div class="box_promo">
                    <h1 class="solo_porcentaje"><span class="porcentaje">50</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    <h2 class="otro_medio_pago">40<span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span><div class="todo_pago">CON  OTRO MEDIO DE PAGO</div></h2>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 10 PROMOCIONES POR PERSONAS. OFERTAS EN CARNES ROJAS Y BLANCAS MAXIMO 10 KILOS POR PERSONA. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div style="page-break-after: always"></div>
  </body>
</html>