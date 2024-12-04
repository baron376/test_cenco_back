<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>

	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet" /> -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<title>{{$campana->nombre}}</title>
	<style type="text/css" media="screen">
		/* Linked Styles */
		body { font-family: "Roboto", sans-serif; padding: 16px 0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none; }
		a { color:#66c7ff; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }

      table { border-collapse: collapse; }
      td { padding: 10px;}
			
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			.bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }
			
			.text-header,
			.m-center { text-align: center !important; }
			
			.center { margin: 0 auto !important; }
			.container { padding: 20px 10px !important }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.m-br-15 { height: 15px !important; }
			.p30-15 { padding: 30px 15px !important; }
			.p40 { padding: 20px !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-top,
			.column-empty,
			.column-empty2,
			.column-dir-top { float: left !important; width: 100% !important; display: block !important; }
			.column-empty { padding-bottom: 10px !important; }
			.column-empty2 { padding-bottom: 20px !important; }
			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <thead style="width: 100%; border-bottom: 2px solid #0B5A97;">
            <tr width="100%">
               <td width="75%" class="h5 white" style="">
                  <h4 style="color:#0B5A97; font-size: 28px; line-height: 1; padding: 0 12px 0 10px;">CAMPAÑA PROVEEDOR <strong>APROBADA</strong></h4>
               </td>
               <td>
                  <a href="{{ config('app.front')}}" target="_blank" style="text-decoration:none;">
                     <img src="{{ config('app.url')}}/ImgPublic/cenco-check-blue.png" style="width: 70px; padding-left: 12px; padding-bottom: 5px;">
                     @if($campana->id_cadena === 3)
                     <img src="{{ config('app.url')}}/ImgPublic/logo-spid-small.png" style="width: 40px;"alt="" />
                     @endif
                     @if($campana->id_cadena === 1)
                     <img src="{{ config('app.url')}}/ImgPublic/logo-jumbo-small.png" style="width: 40px;" alt="" />
                     @endif
                     @if($campana->id_cadena === 2)
                     <img src="{{ config('app.url')}}/ImgPublic/logo-sisa-small.png" style="width: 40px;" alt="" />
                     @endif
                     <!-- <img src="{{ config('app.front')}}/dist/img/spid.png" width="80" height="31" border="0" alt="" /> -->
                  </a>
               </td>
            </tr>
         </thead>
      <tbody style="vertical-align: top; width: 100%;">
         <th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
         <tr width="100%">
            <td width="75%">
               <table width="100%">
                  <tr>
                     <td class="text pb20" style="color:#777777; font-family:'Noto Sans', sans-serif; font-size:16px; line-height: 1.5; text-align:left; padding-bottom:20px;"> Informamos que la campaña <b>{{$campana->nombre}}</b> ha sido <strong>aprobada</strong> y está lista para ser implementada. La autorización se encuentra adjunta en este correo.
                     <br><br>
                     <span style="color: #D71314; font-size: 14px; line-height: 1.2; font-weight: bold;">¡RECUERDA!</span><br>
                     <span style="font-size: 12px; line-height: 1.1;">Debes implementar el código QR de la autorización en la pieza gráfica del pop en la esquina inferior derecha, debe medir máximo 1,5cmx1,5cm y debe ser legible. Si el pop no tiene el código QR no puede ingresar al local.</span>
                     </td>
                  </tr>
                  <tr>
                     <td ><div class="text-button" style="background:#114490; color:#ffffff; font-size:14px; line-height:18px; padding:12px 20px; text-align:center; border-radius:6px; width:30%;">
                     <a href="{{ config('app.front')}}/LoginPro" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">Ir a Cencocheck</span></a>
                     </div></td>
                  </tr>
                  <!-- <tr>
                     <td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"> <a href="{{ config('app.front')}}" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><img src="{{ config('app.front')}}/dist/img/cenco-check-blue.png" width="80" height="31" border="0" alt="" /></a> </td>
                  </tr>
                  <tr>
                     <td class="text-footer1 pb10" style="color:#999999; font-size:16px; line-height:20px; text-align:center; padding-bottom:10px;">{{ config('app.name')}}</td>
                  </tr>
                  <tr>
                     <td class="text-footer2 pb30" style="color:#999999; font-size:12px; line-height:26px; text-align:center; padding-bottom:30px;"></td>
                  </tr> -->
               </table>
            </td>
            <!-- <td>
               
            </td> -->
         </tr>
      </tbody>
	</table>
</body>
</html>
