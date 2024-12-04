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
        .A4-4_vert_1.franja_tarjeta { height: 148.5mm; width: 105mm; position: absolute;}
        
        .A4-4_vert_1.faldon_01{top: 0; left: 0;}
        .A4-4_vert_1.faldon_02{top: 0; left: 50%}
        .A4-4_vert_1.faldon_03{top: 50%; left: 0;}
        .A4-4_vert_1.faldon_04{top: 50%; left: 50%;}
        
        .A4-4_vert_1 .box .box_nombre_producto { position:absolute; top: 10mm; right: 4mm; font-weight: 600; text-align: right; font-size: 7.98pt; line-height: 0.8; width: 100%; height: 50%;}
        .A4-4_vert_1 .box .box_nombre_producto.large { line-height: 1.25; top: 35mm; right: 4mm; font-size: 7.98pt;}
        .A4-4_vert_1 .box .box_nombre_producto.large h2 { font-size: 7.98pt; }
        .A4-4_vert_1 .box .box_promo { position: absolute; width: 100mm; height: 44mm; left: 2mm; top: 30mm; text-align: right; }
        .A4-4_vert_1 .box .box_promo h1 { font-weight: 900; line-height: 100pt; color: #000; position: relative; }
        .A4-4_vert_1 .box .box_promo h1.solo_precio { font-size: 72pt; letter-spacing: -1.2mm; margin-top: 60px; }
        .A4-4_vert_1 .box .box_promo h1.solo_puntos { font-size: 60pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4_vert_1 .box .box_promo h1.prod_por_precio { font-size: 58pt; letter-spacing: 0; margin-top: 20px; }
        .A4-4_vert_1 .box .box_promo h1.n_por_n { font-size: 120pt; letter-spacing: 0; margin-top: 20px; }
        .A4-4_vert_1 .box .box_promo h1.precio_mas_promo { font-size: 72pt; letter-spacing: -1.2mm; margin-top: -30px; }
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
        .A4-4_vert_1 .box .box_promo h2 { font-size: 30pt; font-weight: 900; }
        .A4-4_vert_1 .box .box_promo h2 sup { font-size: 54px; font-weight: 800; margin-right: -10px; }
        .A4-4_vert_1 .box .box_precio_normal { position: absolute; top: 98mm; height: 4mm; width: 100mm; left: 0; text-align: right; padding-right: 2mm; float: left;}
        .A4-4_vert_1 .box .box_precio_normal p { font-size: 10pt; text-transform: uppercase; }
        .A4-4_vert_1 .box .box_condiciones { position: absolute; top: 103mm; left: 3mm; width: 99mm; height: 18mm;}
        .A4-4_vert_1 .box .box_condiciones p.f-text { font-size: 7.5pt; margin-bottom: .75mm; padding-left: 15px; }
        .A4-4_vert_1 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-4_vert_1 .box .box_condiciones p.s-text { text-align: center; font-size: 8.2pt; line-height: 1; letter-spacing: -0.15mm; }
        .A4-4_vert_1 .box .box_franja_inferior { top: 124mm; height: 20mm; }
        
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_precio { font-size: 62pt; letter-spacing: -1.2mm; margin-top: 15px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.precio_bajada { font-size: 62pt; letter-spacing: -1.2mm; margin-top: -15px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.prod_por_precio { font-size: 46pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.n_por_n { font-size: 110pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje { margin-top: 0px; float: right; width: 100%;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje.porcentaje { font-size: 100pt; position:absolute; top:100%}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1.solo_porcentaje.todo_pago { margin-top: 0 !important; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1 .ic-porcentaje { font-size: 70pt; margin-right: -55px; position: absolute; top: -26px; right: 60px;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h1 .dcto { font-size: 18pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 { margin-left: 155px; margin-top: -50px; font-size: 30pt; position: relative; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .todo_pago { font-size: 9.2pt; line-height: 1; text-align: left; margin-left: 10px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .signo_peso { font-size: 12pt; vertical-align: middle; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .punto { font-size: 18pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .signo_por { font-size: 14pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .ic-porcentaje { font-size: 25pt; position: absolute; left: 56px; top: 10px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2 .dcto { position: absolute; font-size: 8pt; left: 55px; top: 50px; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago { position: relative; float: left;margin-left: 135px; margin-top: 120px;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h2.otro_medio_pago .todo_pago { position: absolute; width: 100px;top: 30px;left: 80px; line-height: 0.8;}
        .A4-4_vert_1.franja_tarjeta .box .box_promo h3 { font-weight: 800; }
        .A4-4_vert_1.franja_tarjeta .box .box_promo h3 sup { font-size: 8pt; }
        .A4-4_vert_1.franja_tarjeta .box .box_franja_inferior { background-image: url("{{ public_path('cssFaldones/assets/img/faldon-sisa-puntos.png')}}"); background-repeat: no-repeat; background-size: cover; background-position: center; width:100%;position:absolute;bottom: 0;}
        .clear {clear: both}
    </style>
</head>
<body>
    <div class="cont-grid cont-a4-4_sisa">
        <div class="A4-4_vert_1 franja_tarjeta faldon_01">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>SHAMPOO O BÁLSAMO PANTENE RESTAURACIÓN O HIDRATACIÓN 480 ML, HEAD&SHOULDERS APPLE O COCO O HERBAL SMOOTH O SHINE 400 ML O CREMA DENTAL O CEPILLO BLANQUEAMIENTO ORAL B</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_puntos">10<span class="punto">.</span>000</h1>
                        <h2>PUNTOS CENCOSUD</h2>
                    </div>
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
        <div class="A4-4_vert_1 franja_tarjeta faldon_02">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>SHAMPOO O BÁLSAMO PANTENE RESTAURACIÓN O HIDRATACIÓN 480 ML, HEAD&SHOULDERS APPLE O COCO O HERBAL SMOOTH O SHINE 400 ML O CREMA DENTAL O CEPILLO BLANQUEAMIENTO ORAL B</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_puntos">10<span class="punto">.</span>000</h1>
                        <h2>PUNTOS CENCOSUD</h2>
                    </div>
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
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>SHAMPOO O BÁLSAMO PANTENE RESTAURACIÓN O HIDRATACIÓN 480 ML, HEAD&SHOULDERS APPLE O COCO O HERBAL SMOOTH O SHINE 400 ML O CREMA DENTAL O CEPILLO BLANQUEAMIENTO ORAL B</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_puntos">10<span class="punto">.</span>000</h1>
                        <h2>PUNTOS CENCOSUD</h2>
                    </div>
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
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>SHAMPOO O BÁLSAMO PANTENE RESTAURACIÓN O HIDRATACIÓN 480 ML, HEAD&SHOULDERS APPLE O COCO O HERBAL SMOOTH O SHINE 400 ML O CREMA DENTAL O CEPILLO BLANQUEAMIENTO ORAL B</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_puntos">10<span class="punto">.</span>000</h1>
                        <h2>PUNTOS CENCOSUD</h2>
                    </div>
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
    </div>
</body>
</html>