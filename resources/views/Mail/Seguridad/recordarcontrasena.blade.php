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
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<title>Email Bienvenida Cencosud</title>
	<style type="text/css" media="screen">
		body { font-family: "Roboto", sans-serif; padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none }
		a { color:#66c7ff; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic;}
		.mcnPreviewText { display: none !important; }

		.cke_editable,
		.cke_editable a,
		.cke_editable span,
		.cke_editable a span { color: #000001 !important; }		

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
<body class="body" >
   <span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <thead style="width: 100%; border-bottom: 2px solid #0B5A97;">
         <tr width="100%">
            <td width="80%" class="h5 white" style="">
               <h4 style="color:#0B5A97; font-size: 28px; line-height: 1; padding: 0 12px 0 10px; margin:0;">OLVIDO DE CONTRASEÑA</h4>
            </td>
            <td>
               <a href="{{ config('app.front')}}" target="_blank" style="text-decoration:none;">
                  <img src="{{ config('app.url')}}/ImgPublic/cenco-check-blue.png" style="width: 70px; padding-left: 12px; padding-bottom: 5px;">
                  <img src="{{ config('app.url')}}/ImgPublic/logo-spid-small.png" style="width: 40px;"alt="" />
                  <img src="{{ config('app.url')}}/ImgPublic/logo-jumbo-small.png" style="width: 40px;" alt="" />
                  <img src="{{ config('app.url')}}/ImgPublic/logo-sisa-small.png" style="width: 40px;" alt="" />
               </a>
            </td>
         </tr>
      </thead>
      <tbody style="vertical-align: top; width: 100%;">
         <th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
         <tr width="100%">
            <td width="80%">
               <table width="100%">
                  <tr>
                     <td class="text pb20" style="color:#777777; font-family:'Noto Sans', Arial,sans-serif; font-size:14px; line-height:26px; text-align:justify; padding-bottom:20px;"> Estimado : {{$usuario->nombre}} Usted ha indicado que no recuerda su contraseña para entrar al sistema <B>CENCOCHECK</B> si desea Cambiar su contraseña por Favor presione  <a href="{{$usuario->urlResetPassword}}" >  aqui  </a>
                     </br> <B>CENCOCHECK</B> 
                     </td>
                  </tr>
                  <tr>
                     <td ><div class="text-button" style="background:#114490; color:#ffffff; font-size:14px; line-height:18px; padding:12px 20px; text-align:center; border-radius:6px; width:30%;">
					 <a href="{{$usuario->urlResetPassword}}" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;"> Recuperar Contraseña</span></a>
                     </div></td>
                  </tr>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
</body>
</html>
