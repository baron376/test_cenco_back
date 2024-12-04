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
        
        .cont-grid.cont-a4-4 {width: 297mm;height: 200mm; position: relative;} 
        .box { font-family: 'Roboto', sans-serif; }
        
        .box .box_nombre_producto { position: absolute; font-weight: 500; text-transform: uppercase; top: 30mm; right: 4mm; line-height:.8; width: 80%; height: 18mm;}
        .box .box_nombre_producto h2 { margin-bottom: -2mm; }
        .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        
        .A4-4-cuotas.con_franja_oferta { height: 105mm; width: 148.5mm; position: absolute;}
        
        .A4-4-cuotas.faldon_01{top: 0; left: 0;}
        .A4-4-cuotas.faldon_02{top: 0; left: 50%}
        .A4-4-cuotas.faldon_03{top: 50%; left: 0;}
        .A4-4-cuotas.faldon_04{top: 50%; left: 50%;}

        .A4-4-cuotas .box { height: 104.99mm; width: 147.99mm; position: relative;}
        .A4-4-cuotas .box .box_qr { width: 16mm; height: 16mm; /* border: 1px solid #f0f0f0; */ position: absolute; top: 6mm; left: 6mm; }
        .A4-4-cuotas .box .bg-producto { position: absolute; background-color: aqua; height: 16mm; width: 80%; top: 4mm; right: 6mm; }
        .A4-4-cuotas .box .box_nombre_producto { top: 4mm; right: 6mm; text-align: right; font-size: 11pt;}
        .A4-4-cuotas .box .box_promo { position: absolute; /* background-color: aquamarine; */ width: 140mm; height: 30mm; left: 4mm; top: 22mm; text-align: right; }
        .A4-4-cuotas .box .box_promo h1 { font-weight: 900; font-size: 90pt; line-height: 72pt; color: #E00C15; letter-spacing: -2px; }
        .A4-4-cuotas .box .box_promo h1 .signo_peso { font-size: 45pt; letter-spacing: -10px; vertical-align: bottom; margin-right: 2mm; }
        .A4-4-cuotas .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4-4-cuotas .box .box_promo h1 .ic-porcentaje { font-size: 68pt; margin-right: -50px; position: absolute; top: -2mm; right: 14mm;}
        .A4-4-cuotas .box .box_promo h1 .dcto { font-size: 21pt; }
        .A4-4-cuotas .box .box_promo h1.solo_precio { font-size: 85pt; letter-spacing: -1.2mm; margin-top: 0; margin-bottom: 10px; }
        .A4-4-cuotas .box .box_promo h1.precio_bajada { font-size: 62pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4-cuotas .box .box_promo h1.prod_por_precio { font-size: 70pt; margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h1.prod_por_precio .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: top; margin-right: 3mm; }
        .A4-4-cuotas .box .box_promo h1.prod_por_precio .signo_por { font-size: 21pt; letter-spacing: -10px; vertical-align: top; margin-right: 4mm; margin-left: 2mm; }
        .A4-4-cuotas .box .box_promo h1.solo_prod_por_precio { font-size: 80pt; margin-top: 10px; }
        .A4-4-cuotas .box .box_promo h1.n_por_n { font-size: 110pt; margin-top: 5px; }
        .A4-4-cuotas .box .box_promo h1.solo_porcentaje { padding-top: 5mm; margin-right: 30px; position: relative;}
        .A4-4-cuotas .box .box_promo h1.solo_porcentaje .porcentaje { font-size: 100pt; }
        .A4-4-cuotas .box .box_promo h1.solo_porcentaje.todo_pago { margin-top: 0 !important; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad { margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad .ic-porcentaje { font-size: 60pt; margin-right: -50px; position: absolute; top: 10px; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad .dcto { font-size: 20pt; }
        .A4-4-cuotas .box .box_promo h1.segunda_unidad .porcentaje { font-size: 90pt; }
        .A4-4-cuotas .box .box_promo h1.precio_mas_promo { font-size: 90pt; letter-spacing: -1mm; margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h1.precio_mas_promo .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 3mm; }
        .A4-4-cuotas .box .box_promo h2 { display: flex; align-items: center; margin-left: 130px; margin-top: -30px; font-size: 46pt; position: relative; color: #E00C15; }
        .A4-4-cuotas .box .box_promo h2 .todo_pago { font-size: 12pt; line-height: 1; text-align: left; margin-left: 10px; color: #000; }
        .A4-4-cuotas .box .box_promo h2 .signo_peso { font-size: 12pt; vertical-align: middle; }
        .A4-4-cuotas .box .box_promo h2 .punto { font-size: 18pt; }
        .A4-4-cuotas .box .box_promo h2 .signo_por { font-size: 14pt; }
        .A4-4-cuotas .box .box_promo h2 .ic-porcentaje { font-size: 30pt; position: absolute; left: 80px; margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h2 .dcto { position: absolute; font-size: 9pt; left: 80px; bottom: 13px; }
        .A4-4-cuotas .box .box_promo h2.otro_medio_pago { margin-left: 230px; margin-top: -70px; }
        .A4-4-cuotas .box .box_promo h2.otro_medio_pago .todo_pago { margin-left: 50px; }
        .A4-4-cuotas .box .box_promo h2.precio_otro_medio_pago { font-size: 18pt; margin-left: 180px; margin-top: -12px; }
        .A4-4-cuotas .box .box_promo h2.precio_otro_medio_pago .todo_pago { margin-left: 6px; font-size: 8pt; }
        .A4-4-cuotas .box .box_promo h2.produc_por_precio_otro_pago { margin-left: 130px; margin-top: -18px; font-size: 36pt; }
        .A4-4-cuotas .box .box_promo h2.segunda_unidad { font-size: 40pt; margin-left: 250px; }
        .A4-4-cuotas .box .box_promo h2.segunda_unidad .ic-porcentaje { font-size: 28pt; left: 73px; margin-top: -10px; }
        .A4-4-cuotas .box .box_promo h2.segunda_unidad .dcto { font-size: 8pt; left: 75px; bottom: 15px; }
        .A4-4-cuotas .box .box_promo h3 { font-weight: 800; margin-top: -10px; margin-right: 10px; font-size: 21pt; }
        .A4-4-cuotas .box .box_promo h3 sup { font-size: 8pt; }
        .A4-4-cuotas .box .box_promo h3.segunda_unidad { position: absolute; left: 100mm; top: -6mm; font-size: 17pt; font-weight: 900;}
        .A4-4-cuotas .box .box_cuotas { position: absolute; top: 54mm;width: 96mm; right: 0; text-align: center; padding: 2mm 0 2mm 14mm;}
        .A4-4-cuotas .box .box_cuotas { background-image: url("{{ public_path('cssFaldones/assets/img/electro_pagando_con.png')}}"); background-repeat: no-repeat; background-size: 70px; background-position: 6mm 0; }
        .A4-4-cuotas .box .box_cuotas p { font-size: 12pt; line-height: 10pt; margin-top: 1mm;}
        .A4-4-cuotas .box .box_precio_normal { position: absolute; top: 68mm; height: 4mm; width: 69mm; right: 6mm; text-align: right; /* background-color: bisque; */ }
        .A4-4-cuotas .box .box_precio_normal p { font-size: 8pt; text-transform: uppercase; }
        .A4-4-cuotas .box .box_condiciones { position: absolute; top: 72mm; left: 2mm; width: 142mm; height: 16mm; /* background-color: cadetblue; */ }
        
        .A4-4-cuotas .box .box_condiciones.pre { width: 69mm; height: 4mm; top: 68mm;}
        
        .A4-4-cuotas .box .box_condiciones p.f-text { font-size: 8pt; }
        .A4-4-cuotas .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-4-cuotas .box .box_condiciones p.s-text { text-align: center; font-size: 9pt; line-height: 9pt; letter-spacing: -0.11mm; margin-top: 1mm; }
        .A4-4-cuotas .box .box_franja_inferior {width: 100%; position: absolute; top: 88mm; height: 17mm; left: 0;}
        .A4-4-cuotas.con_franja_oferta .box_franja_inferior {background-image: url("{{ public_path('cssFaldones/assets/img/spid-faldon-a4-4.jpg')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; }
        .clear {clear: both}
    </style>
</head>
<body>
    <div class="cont-grid cont-a4-4">
        <div class="A4-4-cuotas con_franja_oferta faldon_01">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto">
                    <h2>Ventilador pedestal <br>kendal 16'' 3 en 1 <br>zf1602rmii metal 1</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h3 class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></h3>
                        <h1 class="solo_porcentaje"><span class="porcentaje">30</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_cuotas">
                    <p>15 cuotas de $ 5.148</p>
                    <p>C.A.E: 3 0,62% Costo total: $ 77.726</p>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$79.990</strong></p>
                </div>
                <div class="box_condiciones pre">
                    <p class="f-text">CATALOGO FDM JULIO <strong>EAN:</strong> 4980770</p>
                </div>
                <div class="box_condiciones">
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-4-cuotas con_franja_oferta faldon_02">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto">
                    <h2>Ventilador pedestal <br>kendal 16'' 3 en 1 <br>zf1602rmii metal 2</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h3 class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></h3>
                        <h1 class="solo_porcentaje"><span class="porcentaje">30</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_cuotas">
                    <p>15 cuotas de $ 5.148</p>
                    <p>C.A.E: 3 0,62% Costo total: $ 77.726</p>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$79.990</strong></p>
                </div>
                <div class="box_condiciones pre">
                    <p class="f-text">CATALOGO FDM JULIO <strong>EAN:</strong> 4980770</p>
                </div>
                <div class="box_condiciones">
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-4-cuotas con_franja_oferta faldon_03">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto">
                    <h2>Ventilador pedestal <br>kendal 16'' 3 en 1 <br>zf1602rmii metal 3</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h3 class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></h3>
                        <h1 class="solo_porcentaje"><span class="porcentaje">30</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_cuotas">
                    <p>15 cuotas de $ 5.148</p>
                    <p>C.A.E: 3 0,62% Costo total: $ 77.726</p>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$79.990</strong></p>
                </div>
                <div class="box_condiciones pre">
                    <p class="f-text">CATALOGO FDM JULIO <strong>EAN:</strong> 4980770</p>
                </div>
                <div class="box_condiciones">
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="A4-4-cuotas con_franja_oferta faldon_04">
            <div class="box">
                <div class="box_qr"></div>
                <div class="box_nombre_producto">
                    <h2>Ventilador pedestal <br>kendal 16'' 3 en 1 <br>zf1602rmii metal 4</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h3 class="segunda_unidad">2<sup>DA</sup> UNIDAD<br></h3>
                        <h1 class="solo_porcentaje"><span class="porcentaje">30</span><span class="ic-porcentaje">%</span><span class="dcto">DCTO.</span></h1>
                    </div>
                </div>
                <div class="box_cuotas">
                    <p>15 cuotas de $ 5.148</p>
                    <p>C.A.E: 3 0,62% Costo total: $ 77.726</p>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$79.990</strong></p>
                </div>
                <div class="box_condiciones pre">
                    <p class="f-text">CATALOGO FDM JULIO <strong>EAN:</strong> 4980770</p>
                </div>
                <div class="box_condiciones">
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</body>
</html>