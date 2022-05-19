<?php
$para = 'daniel.garcia@invirtual.mx';
$titulo = 'Envio de Brief';
$mensaje = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulario</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");
        *,
        ::before,
        ::after {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb;
        }
        ::before,
        ::after {
        --tw-content: "";
        }
        html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        -o-tab-size: 4;
            tab-size: 4;
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        body {
        margin: 0;
        line-height: inherit;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        font-size: inherit;
        font-weight: inherit;
        }
        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
        height: auto;
        }
        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
        margin: 0;
        }
        [hidden] {
        display: none;
        }
        *, ::before, ::after{
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        }
        .m-auto{
        margin: auto;
        }
        .flex{
        display: flex;
        }
        .h-screen{
        height: 100vh;
        }
        .h-full{
        height: 100%;
        }
        .w-screen{
        width: 100vw;
        }
        .w-full{
        width: 100%;
        }
        .max-w-screen-2xl{
        max-width: 1536px;
        }
        .flex-col{
        flex-direction: column;
        }
        .border-invirtual-300{
        --tw-border-opacity: 1;
        border-color: rgb(83 98 194 / var(--tw-border-opacity));
        }
        .bg-gray-200{
        --tw-bg-opacity: 1;
        background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }
        .bg-invirtual-300{
        --tw-bg-opacity: 1;
        background-color: rgb(83 98 194 / var(--tw-bg-opacity));
        }
        .p-2{
        padding: 0.5rem;
        }
        .font-InvFont{
        font-family: Nunito, sans-serif;
        }
        .text-xl{
        font-size: 1.25rem;
        line-height: 1.75rem;
        }
        .font-semibold{
        font-weight: 600;
        }
        .text-white{
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        }
        /* ---------------------------------- Clases personalizadas ------------------------------- */
        .max-h-560 {
        max-height: 560px;
        }
        .border-1{
        border-width: 1px;
        }
        @media (min-width: 768px){
        .md\:w-1\/2{
            width: 50%;
        }
        .md\:flex-row{
            flex-direction: row;
        }
        }

    </style>
</head>';

$mensaje .= '<body class="font-InvFont bg-gray-200 w-screen h-screen">
    <main class="w-screen max-w-screen-2xl h-full m-auto">
        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Datos de Contacto</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Nombre: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['nombreCliente'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Correo Electrónico: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['correoCliente'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Teléfono: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['telefonoCliente'] .'</p>
                </div>
            </div>
        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Datos de la Empresa</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Nombre de la Empresa: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['nombreEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Calle y Número: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['direccionEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Colonia: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['coloniaEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Estado: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['estadoEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>País: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['paisEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Código Postal: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['cpostalEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Teléfono: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['telefonoEmpresa'] .'</p>
                </div>
            </div>
        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Información para la Página</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Cuenta con un Sitio web, dominio o alojamiento?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['checkDominio'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Nombre del Dominio: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['dominioEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Qué dominio desearía? </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['dominioDeseado'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Tiene algún significado el nombre de la empresa? </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['significadoNombre'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Giro de la empresa: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['giroEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Qué productos o servicios ofrece? </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['productosEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Mercado Meta: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['mercadoEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Objetivo principal del sitio web: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">';
                    $objetivoSitio = json_decode($_POST['objetivoSitio']); foreach($objetivoSitio as $objetivo){
                        $mensaje .= '<p>' . $objetivo . '</p>';
                    }
                $mensaje .= '</div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Qué secciones y funciones debe cubrir la página web?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">';
                    $checkFunciones = json_decode($_POST['checkFunciones']); foreach($checkFunciones as $funcion){
                        $mensaje .= '<p>'. $funcion .'</p>';
                    }
                $mensaje .= '</div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Cuenta con logotipo en archivo vectorial o editable?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['logotipoEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Existe un manual de estilo, esquema de colores, tipografía, o alguna regla?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['conReglasEstilos'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Colores, tipografía o regla que le gustaría se respetara:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['reglasEstilos'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Webs de referencia:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['webReferencia'] .'</p>
                </div>
            </div>
        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Redes Sociales</h3>
            </div>';
            
                $redes = [];
                $redesPrev = json_decode($_POST['redes']);
                for($i = 0 ; $i < count($redesPrev) ; $i += 2) {
                    $redes[$redesPrev[$i]] = $redesPrev[$i + 1];
                }

                foreach ($redes as $key => $value) {
                $mensaje .= '<div class="datosCampo flex flex-col md:flex-row ">
                    <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                        <p>'. $key .'</p>
                    </div>
                    <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                        <p>'. $value .'</p>
                    </div>
                </div>';
                }

        $mensaje .= '</div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Estructura de la Página</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Estructura</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['checkEstructura'] .'</p>
                </div>
            </div>
        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Datos Extra</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Cuentas de correo:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['cuentasEmpresa'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Describe tu empresa en 3 renglones:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['desTresRenglones'] .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Palabras clave:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $_POST['palabrasClave'] .'</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: contacto@invirtual.mx';

if(mail($para, $titulo, $mensaje, $cabeceras)){
    echo('true');
}else{
    echo('false');
}
?>
