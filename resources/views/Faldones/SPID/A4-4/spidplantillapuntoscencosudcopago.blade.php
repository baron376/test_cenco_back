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
        /* FONT */
        @font-face {font-family: 'Arial';font-style: normal;font-weight: 100;src: local('Arial Light Regular'), url('../fonts/Arial_LightRegular.woff') format('woff');}
        @font-face {font-family: 'Arial';font-style: normal;font-weight: 400;src: local('Arial Regular'), url('../fonts/Arial_Regular.woff') format('woff');}
        @font-face {font-family: 'Arial';font-style: normal;font-weight: 500;src: local('Arial Medium'), url('../fonts/Arial_Medium.woff') format('woff');}
        @font-face {font-family: 'Arial';font-style: normal;font-weight: 700;src: local('Arial Bold'), url('../fonts/Arial_Bold.woff') format('woff');}
        @font-face {font-family: 'Arial';font-style: normal;font-weight: 900;src: local('Arial Black'), url('../fonts/Arial_Black.woff') format('woff');}
        
        /* ESTILOS */
        * { box-sizing: border-box; -webkit-box-sizing: border-box; padding: 0; margin: 0; }

        .box { font-family: 'Arial', Arial, Helvetica, sans-serif; /*border: 1px solid black;*/ position: relative; }
        .box .box_nombre_producto { position: absolute; font-weight: 500; text-transform: uppercase; }
        .box .box_nombre_producto h2 { margin-bottom: 6mm; }
        .box .box_nombre_producto h2:last-child { margin-bottom: 0; }
        .box .box_franja_inferior { position: absolute; width: 100%; /* background-color: aqua; */ }

        .A4-4 .box { height: 104.99mm; width: 147.99mm; }
        .A4-4 .box .box_qr { width: 16mm; height: 16mm; /* border: 1px solid #f0f0f0; */ position: absolute; top: 6mm; left: 6mm; }
        .A4-4 .box .box_qr img { object-fit: contain; }
        .A4-4 .box .bg-producto { position: absolute; height: 16mm; width: 80%; top: 4mm; right: 6mm; /* background-color: aqua; */ }
        .A4-4 .box .box_nombre_producto { top: 6mm; right: 6mm; font-weight: 600; text-align: right; font-size: 11pt; line-height: 0; }
        .A4-4 .box .box_promo { position: absolute; /* background-color: aquamarine; */ width: 140mm; height: 43mm; left: 4mm; top: 23mm; text-align: right; }
        .A4-4 .box .box_promo h1 { font-weight: 900; font-size: 105pt; line-height: 100pt; color: #E00C15; letter-spacing: -2px; margin-top: 20px; }
        .A4-4 .box .box_promo h1 .signo_peso { font-size: 45pt; letter-spacing: -10px; vertical-align: bottom; }
        .A4-4 .box .box_promo h1 .punto { font-weight: 400; letter-spacing: 0; }
        .A4-4 .box .box_promo h1 .dcto { font-size: 32pt; }
        .A4-4 .box .box_promo h1 .porcentaje { font-size: 160pt; line-height: 110pt; }
        .A4-4 .box .box_promo h1 .ic-porcentaje { font-size: 100pt; margin-right: -50px; position: absolute; top: -5px; }
        .A4-4 .box .box_promo h1.solo_precio { font-size: 64pt; line-height: 66pt; letter-spacing: -2px; margin-top: -5px; }
        .A4-4 .box .box_promo h1.solo_porcentaje { margin-top: 5px; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo { margin-top: -5px; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo .porcentaje { font-size: 120pt; line-height: 40pt; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo .ic-porcentaje { font-size: 80pt; margin-right: -50px; top: 20px; }
        .A4-4 .box .box_promo h1.porcentaje_mas_promo .dcto { font-size: 24pt; }
        .A4-4 .box .box_promo h1.precio_mas_promo { font-size: 110pt; line-height: 46pt; }
        .A4-4 .box .box_promo h1.prod_por_precio { font-size: 82pt; letter-spacing: -5px; margin-top: 10px; }
        .A4-4 .box .box_promo h1.prod_por_precio .signo_peso { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 3mm; }
        .A4-4 .box .box_promo h1.prod_por_precio .signo_por { font-size: 21pt; letter-spacing: -10px; vertical-align: middle; margin-right: 4mm; margin-left: 2mm; }
        .A4-4 .box .box_promo h1.n_por_n { font-size: 0; letter-spacing: 0; margin-top: -25px; }
        .A4-4 .box .box_promo h1.n_por_n .signo_por_big { font-size: 100pt; vertical-align: text-bottom; }
        .A4-4 .box .box_promo h1.n_por_n .porcentaje { font-size: 150pt; line-height: 1; }
        .A4-4 .box .box_promo h2 { font-size: 32pt; font-weight: 900; margin-top: -15px; }
        .A4-4 .box .box_promo h2 sup { font-size: 21px; font-weight: 800; margin-right: 2px; }
        .A4-4 .box .box_precio_normal { position: absolute; top: 68mm; height: 4mm; width: 138mm; right: 6mm; text-align: right; /* background-color: bisque; */ }
        .A4-4 .box .box_precio_normal p { font-size: 8pt; text-transform: uppercase; }
        .A4-4 .box .box_condiciones { position: absolute; bottom: 17mm; left: 2mm; width: 142mm; height: 16mm; /* background-color: cadetblue; */ }
        .A4-4 .box .box_condiciones p.f-text { font-size: 8pt; }
        .A4-4 .box .box_condiciones p.f-text strong { margin-left: 15px; margin-right: 10px; }
        .A4-4 .box .box_condiciones p.s-text { text-align: center; font-size: 9pt; line-height: 11pt; letter-spacing: -0.11mm; }
        .A4-4 .box .box_franja_inferior { bottom: 0; height: 17mm; }
        
        .A4-4.con_puntos .box .box_promo { text-align: center; color: #7F0A7E; }
        .A4-4.con_puntos .box .box_promo h1 { font-size: 90pt; margin-top: -25px; margin-bottom: 5px; color: #7F0A7E; }
        .A4-4.con_puntos .box .box_promo h2 { font-size: 24pt; margin-top: -30px; }
        .A4-4.con_puntos .box .box_promo h3 { font-size: 30pt; margin-top: -10px; }
        .A4-4.con_puntos .box .box_promo h3 .signo_peso { font-size: 14pt; vertical-align: middle; margin-left: 2px; }
        .A4-4.con_puntos .box .box_promo h3 .punto { font-size: 21pt; }
        .A4-4.con_puntos .box_franja_inferior { background-image: url(../../assets/img/faldon-sisa-puntos.png); background-repeat: no-repeat; background-size: cover; background-position: center; }
    </style>
</head>
<body>
    <div class="cont-grid cont-a4-4">
        <div class="A4-4 con_puntos">
            <div class="box">
                <div class="box_qr"></div>
                <!-- <div class="bg-producto"></div> -->
                <div class="box_nombre_producto">
                    <h2>Atún Lomito</h2>
                    <h2>Robinson Crusoe</h2>
                    <h2>Variedades 104 G DR</h2>
                </div>
                <div class="box_promo">
                    <div class="promo">
                        <h1 class="solo_puntos">10<span class="punto">.</span>000</h1>
                        <h2>PUNTOS CENCOSUD</h2>
                        <h3>+<span class="signo_peso">$</span>20<span class="punto">.</span>990</h3>
                    </div>
                </div>
                <div class="box_precio_normal">
                    <p>Precio normal Unitario <strong>$4.999</strong></p>
                </div>
                <div class="box_condiciones">
                    <p class="f-text">CATALOGO FDM JULIO <strong>SAP:</strong> 4980770</p>
                    <p class="s-text"><strong>VALIDAS DESDE EL 29/11/2019 AL 31/12/2019</strong> O HASTA AGOTAR STOCKMAXIMO 12 PROMOCIONES POR PERSONAS. NO APLICA A COMPRAS CON FACTURA. NO ACUMULABLE CON OTRAS PROMOCIONES</p>
                </div>
                <div class="box_franja_inferior"></div>
            </div>
        </div>
    </div>
</body>
</html>