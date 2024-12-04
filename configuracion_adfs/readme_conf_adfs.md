el archivo Response.php , esta alterado con el cerficado que cencosud utiliza para la firma de sus respuestas
este certificado se utiliza para desencriptar la firma d ela respuesta de cecosud ruta : 
cencosud_backend/Produccion/cencosud_backend/vendor/onelogin/php-saml/src/Saml2/Response.php

el archivo Saml2Controller.php
este archivo contiene validaciones q insercion en base de datos para la correcta validacion de inicio de secion en un tiempo determinado 
ruta:
/cencosud_backend/vendor/aacotroneo/laravel-saml2/src/Aacotroneo/Saml2/Http/Controllers/

EN EL ARCHIVO .ENV

env                         xml

SAML2_MZZO_IDP_ENTITYID =  entityID
SAML2_MZZO_IDP_SSO_URL =   Address
SAML2_MZZO_IDP_SL_URL =    Address