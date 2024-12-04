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
        
        .box .box_franja_inferior { position: absolute; width: 100%; }
        
        .A4-8.franja_tarjeta { height: 74.25mm; width: 105mm; position: absolute;}
        
        .A4-8.faldon_01{top: 0; left: 0;}
        .A4-8.faldon_02{top: 0; left: 50%}
        .A4-8.faldon_03{top: 25%; left: 0;}
        .A4-8.faldon_04{top: 25%; left: 50%;}
        .A4-8.faldon_05{top: 50%; left: 0;}
        .A4-8.faldon_06{top: 50%; left: 50%}
        .A4-8.faldon_07{top: 75%; left: 0;}
        .A4-8.faldon_08{top: 75%; left: 50%;}
        
        .A4-8 .box { height: 74.15mm; width: 104.99mm; }
        .A4-8 .box .box_qr { width: 12mm; height: 12mm; position: absolute; top: 2mm; left: 6mm; }
        .A4-8 .box .box_qr img { width: 100%; max-width: 100%; }
        .A4-8 .box .bg-producto { position: absolute; height: 10mm; width: 70%; top: 2mm; right: 3mm; }
        .A4-8 .box .box_nombre_producto { top: 2mm; right: 3mm; font-weight: 600; text-align: right; font-size: 7pt; line-height: .8; }
        .A4-8 .box .box_promo { position: absolute; width: 101mm; height: 24mm; top: 14mm; text-align: right; }
        .A4-8 .box .box_promo h1 { font-weight: 900; color: #E00C15; padding-right: 2.5mm;}
        .A4-8 .box .box_promo h1 .signo_peso { font-size: 20pt; letter-spacing: -10px; vertical-align: middle; margin-right: 2mm; }
        .A4-8 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4-8 .box .box_promo h1 .dcto { font-size: 16pt; }
        .A4-8 .box .box_promo h1 .porcentaje { font-size: 90pt; line-height: 80pt; }
        .A4-8 .box .box_promo h1 .ic-porcentaje { font-size: 58pt; margin-right: -50px; position: absolute; top: -24px; }
        .A4-8 .box .box_promo h1.solo_precio { font-size: 40pt; line-height: 30pt; letter-spacing: -2px;}
        .A4-8 .box .box_promo h1.solo_porcentaje { margin-top: -12px; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo { margin-top: 3px; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo .porcentaje { font-size: 75pt; line-height: 40pt; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo .ic-porcentaje { font-size: 50pt; margin-right: -55px; top: -5px; }
        .A4-8 .box .box_promo h1.porcentaje_mas_promo .dcto { font-size: 14pt; }
        .A4-8 .box .box_promo h1.precio_mas_promo { font-size: 68pt; line-height: 46pt; }
        .A4-8 .box .box_promo h1.prod_por_precio { font-size: 54pt; letter-spacing: 0; margin-top: 0; }
        .A4-8 .box .box_promo h1.prod_por_precio .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 3mm; }
        .A4-8 .box .box_promo h1.prod_por_precio .signo_por { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 3mm; }
        .A4-8 .box .box_promo h1.n_por_n { font-size: 0; letter-spacing: 0; margin-top: -18px; }
        .A4-8 .box .box_promo h1.n_por_n .signo_por_big { font-size: 70pt; }
        .A4-8 .box .box_promo h1.n_por_n .porcentaje { font-size: 90pt; line-height: 1; }
        .A4-8 .box .box_promo h2 { font-weight: 900; font-size: 35pt; line-height: 25pt; }
        .A4-8 .box .box_promo h2 sup { font-size: 10px; font-weight: 900; margin-right: 2px; }
        .A4-8 .box .box_precio_normal { position: absolute; top: 40mm; height: 2mm; width: 102mm; left: 0; text-align: right; /*background-color: bisque; */ }
        .A4-8 .box .box_precio_normal p { font-size: 6pt; text-transform: uppercase; }
        .A4-8 .box .box_condiciones { position: absolute; top: 42mm; left: 2mm; width: 100mm; height: 16mm; /* background-color: cadetblue;*/ }
        .A4-8 .box .box_condiciones p.f-text { font-size: 5pt; }
        .A4-8 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-8 .box .box_condiciones p.s-text { text-align: center; font-size: 7pt; line-height: 6pt; letter-spacing: -0.15mm; }
        .A4-8 .box .box_franja_inferior { top: 54mm; height: 20mm; }
        /* .A4-8.franja_tarjeta .box .box_promo h1 { background-image: url("{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.png')}}"); background-repeat: no-repeat; background-size: 45px; background-position: 10mm 0; } */
        .A4-8.franja_tarjeta .box .box_promo h1 .ic-porcentaje { font-size: 42pt; margin-right: -55px; position: absolute; top: -20px; }
        .A4-8.franja_tarjeta .box .box_promo h1 .dcto { font-size: 12pt; }
        .A4-8.franja_tarjeta .box .box_promo h1.solo_precio {}
        .A4-8.franja_tarjeta .box .box_promo h1.precio_bajada { font-size: 62pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-8.franja_tarjeta .box .box_promo h1.prod_por_precio { font-size: 46pt; margin-top: -15px; }
        .A4-8.franja_tarjeta .box .box_promo h1.n_por_n { font-size: 0; }
        .A4-8.franja_tarjeta .box .box_promo h1.solo_porcentaje { margin-top: -25px; margin-right: 30px; }
        .A4-8.franja_tarjeta .box .box_promo h1.solo_porcentaje .porcentaje { font-size: 60pt; }
        .A4-8.franja_tarjeta .box .box_promo h1.solo_porcentaje.todo_pago { margin-top: 0 !important; }
        .A4-8.franja_tarjeta .box .box_promo h1.precio_mas_promo {font-size: 35pt; line-height: 25pt; letter-spacing: -2px; }
        .A4-8.franja_tarjeta .box .box_promo h1.precio_mas_promo .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 3mm; }
        .A4-8.franja_tarjeta .box .box_promo h2 { position: relative; color: #E00C15; letter-spacing: -2px;}
        .A4-8.franja_tarjeta .box .box_promo h2 .todo_pago { font-size: 10pt; line-height: .8; text-align: center; color: #000; letter-spacing: 0; position: absolute; top: 2mm; left: 0; width: 30mm;}
        .A4-8.franja_tarjeta .box .box_promo h2 .signo_peso { font-size: 20pt; letter-spacing: -10px; vertical-align: middle; margin-right: 2mm;  }
        .A4-8.franja_tarjeta .box .box_promo h2 .punto { font-size: 18pt; }
        .A4-8.franja_tarjeta .box .box_promo h2 .signo_por { font-size: 14pt; }
        .A4-8.franja_tarjeta .box .box_promo h2 .ic-porcentaje { font-size: 14pt; position: absolute; left: 46px; margin-top: -10px; }
        .A4-8.franja_tarjeta .box .box_promo h2 .dcto { position: absolute; font-size: 5pt; left: 45px; bottom: 10px; }
        .A4-8.franja_tarjeta .box .box_promo h2.otro_medio_pago { margin-left: 190px; margin-top: -27px; }
        .A4-8.franja_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago { margin-left: 25px; }
        .A4-8.franja_tarjeta .box .box_promo h2.precio_otro_medio_pago { }
        .A4-8.franja_tarjeta .box .box_promo h2.precio_otro_medio_pago .todo_pago { margin-left: 6px; font-size: 8pt; }
        .A4-8.franja_tarjeta .box .box_promo h2.produc_por_precio_otro_pago { margin-left: 80px; }
        .A4-8.franja_tarjeta .box .box_promo h3 { font-weight: 900; margin-top: -6px; font-size: 10pt;}
        .A4-8.franja_tarjeta .box .box_promo h3 sup { font-size: 7pt; }
        .A4-8.franja_tarjeta .box .box_promo h3.segunda_unidad { text-align: center; position: absolute; line-height: 1; top: 0; right: 0;}
        .A4-8.franja_tarjeta .box .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-jumbo-tarjeta.png')}}"); background-repeat: no-repeat; background-size: contain; background-position: center; }
        .clear {clear: both}
        
        .A4-8.franja_tarjeta .box .box_promo h1.precio_mas_promo,
        .A4-8.franja_tarjeta .box .box_promo h2.precio_otro_medio_pago {position: absolute; height: 12mm; right: 2mm; /* border: 1px solid #000;*/ width: 100%;}
        .A4-8.franja_tarjeta .box .box_promo h1.precio_mas_promo {top: 4mm;}
        .A4-8.franja_tarjeta .box .box_promo h2.precio_otro_medio_pago {top: 15mm;} 
        
        .A4-8.franja_tarjeta .box .box_promo .img-logo {position: absolute; left: 12mm; top: 2mm; width: 45px;}
    </style>
  </head>
  <body>
   <div class="cont-grid cont-a4-8">
        <div class="A4-8 franja_tarjeta faldon_01">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito<br>Robinson Crusoe<br>Variedades 104 G dr1</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h3 class="segunda_unidad">2<sup>DA</sup> UNIDAD</h3>
                        <h1 class="precio_mas_promo "><span class="signo_peso">$</span>3.000</h1>
                        <h2 class="precio_otro_medio_pago"><span class="signo_peso">$</span>4.000 <div class="todo_pago">CON&nbsp;OTRO &nbsp;MEDIO&nbsp;DE&nbsp;PAGO</div></h2>
                        <img src="{{ public_path('cssFaldones/assets/img/logo_oferta_tarjeta_sincuotas_color.svg')}}" alt="" class="img-logo">
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-8 franja_tarjeta faldon_02">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G dr2</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_porcentaje"><span class="porcentaje">40</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-8 franja_tarjeta faldon_03">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G dr3</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_porcentaje"><span class="porcentaje">40</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-8 franja_tarjeta faldon_04">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G dr 4</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_porcentaje"><span class="porcentaje">40</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-8 franja_tarjeta faldon_05">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G dr5</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_porcentaje"><span class="porcentaje">40</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-8 franja_tarjeta faldon_06">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G dr 6</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_porcentaje"><span class="porcentaje">40</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-8 franja_tarjeta faldon_07">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G dr 7</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_porcentaje"><span class="porcentaje">40</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-8 franja_tarjeta faldon_08">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G dr 8</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_porcentaje"><span class="porcentaje">40</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitarrio <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCK MAXIMO 15 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
  </body>
</html>