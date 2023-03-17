<!-- Para especificar que este es un documento HTML5. -->
<!DOCTYPE html>
<!-- Para especificar idioma del documento HTML5. -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metadatos -->
    <!-- La codificación de caracteres. -->
    <meta charset="UTF-8">
    <!-- La declaración de la ventana gráfica. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- La compatibilidad con Internet Explorer. -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- El nombre del autor del documento. -->
    <meta name="description" content="Descripción del documento">
    <!-- El nombre del autor del documento. -->
    <meta name="author" content="Nombre del autor">
    <!-- Las palabras clave que describen el contenido del documento. -->
    <meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3">
    <!-- Define cómo los motores de búsqueda deben indexar y rastrear el documento. -->
    <meta name="robots" content="index,follow">
    <!-- Indica el software utilizado para generar el documento. -->
    <meta name="generator" content="Nombre del software utilizado">
    <!-- Título que se muestra cuando se comparte el enlace del documento en redes sociales. -->
    <meta property="og:title" content="Título que se muestra en redes sociales">
    <!-- URL de la imagen que se muestra cuando se comparte el enlace del documento en redes sociales. -->
    <meta property="og:image" content="URL de la imagen que se muestra en redes sociales">

    <!-- Titulo del sitio web -->
    <title>@yield('meta-title', config('app.name'))</title>

    <!-- Enlaces a hojas de estilo CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha384-NXcJ/dE50k2rnZ0sU8W39BfzvUH2Qxjlhazk8WnX9fYmkHz51ryJhZ6qGwqjCIFe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-5z5g5RPSdYd0rVl5eLy8P6hv+/L6vN1hQWNx6dPyK/zy9AgvgeSQh6ERfw0FpAcC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.css"> -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

    <!-- Enlaces a fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Scripts Iniciales de Font Awesome -->
    <!--<script src="https://kit.fontawesome.com/1234567890.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-5DpZ5O2a5k5C5vEX6V4gFAOaPpJf0x0f2WAYuF+oMD9ZdQQKLZMnMqL8oWnKdiB" crossorigin="anonymous"></script>
    <script src="script.js"></script>-->
</head>

<body>
    <header>
        {{-- <nav>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </nav> --}}
    </header>

    <h1>Hello</h1>

    <div id="app">
        <div class="container">
            <div style="min-height: 100vh">
                <transition name="slide-fade" mode="out-in">
                    <router-view :key="$route.fullPath"></router-view>
                </transition>
            </div>
        </div>
        {{-- <footer>
            <p>Copyright © 2023</p>
        </footer> --}}
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
