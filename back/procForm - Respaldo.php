<?php
$para = 'daniel.garcia@invirtual.mx';
$titulo = 'Envio de Brief';


?>


<!DOCTYPE html>
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
        --tw-content: '';
        }
        html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        -o-tab-size: 4;
            tab-size: 4;
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        /*
        1. Remove the margin in all browsers.
        2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
        */

        body {
        margin: 0;
        /* 1 */
        line-height: inherit;
        /* 2 */
        }

        /*
        1. Add the correct height in Firefox.
        2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
        3. Ensure horizontal rules are visible by default.
        */

        hr {
        height: 0;
        /* 1 */
        color: inherit;
        /* 2 */
        border-top-width: 1px;
        /* 3 */
        }

        /*
        Add the correct text decoration in Chrome, Edge, and Safari.
        */

        abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
        }

        /*
        Remove the default font size and weight for headings.
        */

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        font-size: inherit;
        font-weight: inherit;
        }

        /*
        Reset links to optimize for opt-in styling instead of opt-out.
        */

        a {
        color: inherit;
        text-decoration: inherit;
        }

        /*
        Add the correct font weight in Edge and Safari.
        */

        b,
        strong {
        font-weight: bolder;
        }

        /*
        1. Use the user's configured `mono` font family by default.
        2. Correct the odd `em` font sizing in all browsers.
        */

        code,
        kbd,
        samp,
        pre {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        /* 1 */
        font-size: 1em;
        /* 2 */
        }

        /*
        Add the correct font size in all browsers.
        */

        small {
        font-size: 80%;
        }

        /*
        Prevent `sub` and `sup` elements from affecting the line height in all browsers.
        */

        sub,
        sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
        }

        sub {
        bottom: -0.25em;
        }

        sup {
        top: -0.5em;
        }

        /*
        1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
        2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
        3. Remove gaps between table borders by default.
        */

        table {
        text-indent: 0;
        /* 1 */
        border-color: inherit;
        /* 2 */
        border-collapse: collapse;
        /* 3 */
        }

        /*
        1. Change the font styles in all browsers.
        2. Remove the margin in Firefox and Safari.
        3. Remove default padding in all browsers.
        */

        button,
        input,
        optgroup,
        select,
        textarea {
        font-family: inherit;
        /* 1 */
        font-size: 100%;
        /* 1 */
        line-height: inherit;
        /* 1 */
        color: inherit;
        /* 1 */
        margin: 0;
        /* 2 */
        padding: 0;
        /* 3 */
        }

        /*
        Remove the inheritance of text transform in Edge and Firefox.
        */

        button,
        select {
        text-transform: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Remove default button styles.
        */

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
        -webkit-appearance: button;
        /* 1 */
        background-color: transparent;
        /* 2 */
        background-image: none;
        /* 2 */
        }

        /*
        Use the modern Firefox focus style for all focusable elements.
        */

        :-moz-focusring {
        outline: auto;
        }

        /*
        Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
        */

        :-moz-ui-invalid {
        box-shadow: none;
        }

        /*
        Add the correct vertical alignment in Chrome and Firefox.
        */

        progress {
        vertical-align: baseline;
        }

        /*
        Correct the cursor style of increment and decrement buttons in Safari.
        */

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
        height: auto;
        }

        /*
        1. Correct the odd appearance in Chrome and Safari.
        2. Correct the outline style in Safari.
        */

        [type='search'] {
        -webkit-appearance: textfield;
        /* 1 */
        outline-offset: -2px;
        /* 2 */
        }

        /*
        Remove the inner padding in Chrome and Safari on macOS.
        */

        ::-webkit-search-decoration {
        -webkit-appearance: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Change font properties to `inherit` in Safari.
        */

        ::-webkit-file-upload-button {
        -webkit-appearance: button;
        /* 1 */
        font: inherit;
        /* 2 */
        }

        /*
        Add the correct display in Chrome and Safari.
        */

        summary {
        display: list-item;
        }

        /*
        Removes the default spacing and border for appropriate elements.
        */

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

        fieldset {
        margin: 0;
        padding: 0;
        }

        legend {
        padding: 0;
        }

        ol,
        ul,
        menu {
        list-style: none;
        margin: 0;
        padding: 0;
        }

        /*
        Prevent resizing textareas horizontally by default.
        */

        textarea {
        resize: vertical;
        }

        /*
        1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
        2. Set the default placeholder color to the user's configured gray 400 color.
        */

        input::-moz-placeholder, textarea::-moz-placeholder {
        opacity: 1;
        /* 1 */
        color: #9ca3af;
        /* 2 */
        }

        input:-ms-input-placeholder, textarea:-ms-input-placeholder {
        opacity: 1;
        /* 1 */
        color: #9ca3af;
        /* 2 */
        }

        input::placeholder,
        textarea::placeholder {
        opacity: 1;
        /* 1 */
        color: #9ca3af;
        /* 2 */
        }

        /*
        Set the default cursor for buttons.
        */

        button,
        [role="button"] {
        cursor: pointer;
        }

        /*
        Make sure disabled buttons don't get the pointer cursor.
        */

        :disabled {
        cursor: default;
        }

        /*
        1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
        2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
        This can trigger a poorly considered lint error in some tools but is included by design.
        */

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
        display: block;
        /* 1 */
        vertical-align: middle;
        /* 2 */
        }

        /*
        Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
        */

        img,
        video {
        max-width: 100%;
        height: auto;
        }

        /*
        Ensure the default browser behavior of the `hidden` attribute.
        */

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
</head>
<body class="font-InvFont bg-gray-200 w-screen h-screen">
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
                    <p><?= $_POST['nombreCliente'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Correo Electrónico: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['correoCliente'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Teléfono: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['telefonoCliente'] ?></p>
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
                    <p><?= $_POST['nombreEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Dirección: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['direccionEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Alcaldía / Municipio: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['municipioEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Ciudad: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['ciudadEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Estado: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['estadoEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Código Postal: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['cpostalEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Teléfono: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['telefonoEmpresa'] ?></p>
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
                    <p><?= $_POST['checkDominio'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Nombre del Dominio: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['dominioEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Qué dominio desearía? </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['dominioDeseado'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Tiene algún significado el nombre de la empresa? </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['significadoNombre'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Giro de la empresa: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['giroEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Qué productos o servicios ofrece? </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['productosEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Mercado Meta: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['mercadoEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Objetivo principal del sitio web: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <?php $objetivoSitio = json_decode($_POST['objetivoSitio']); foreach($objetivoSitio as $objetivo){?>
                        <p><?= $objetivo ?></p>
                    <?php }?>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Qué secciones y funciones debe cubrir la página web?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <?php $checkFunciones = json_decode($_POST['checkFunciones']); foreach($checkFunciones as $funcion){?>
                        <p><?= $funcion ?></p>
                    <?php }?>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Cuenta con logotipo en archivo vectorial o editable?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['logotipoEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Existe un manual de estilo, esquema de colores, tipografía, o alguna regla?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['conReglasEstilos'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Colores, tipografía o regla que le gustaría se respetara:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['reglasEstilos'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Webs de referencia:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['webReferencia'] ?></p>
                </div>
            </div>
        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Redes Sociales</h3>
            </div>
            
            <?php 
                $redes = [];
                $redesPrev = json_decode($_POST['redes']);
                for($i = 0 ; $i < count($redesPrev) ; $i += 2) {
                    $redes[$redesPrev[$i]] = $redesPrev[$i + 1];
                }

                foreach ($redes as $key => $value) {?>
                <div class="datosCampo flex flex-col md:flex-row ">
                    <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                        <p><?= $key ?></p>
                    </div>
                    <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                        <p><?= $value ?></p>
                    </div>
                </div>
            <?php }?>

        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Estructura de la Página</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Estructura</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['checkEstructura'] ?></p>
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
                    <p><?= $_POST['cuentasEmpresa'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Describe tu empresa en 3 renglones:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['desTresRenglones'] ?></p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Palabras clave:</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p><?= $_POST['palabrasClave'] ?></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
