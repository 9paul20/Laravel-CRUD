<!-- Para especificar que este es un documento HTML5. -->
<!DOCTYPE html>
<!-- Para especificar idioma del documento HTML5. -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metadatos -->
    <!-- La codificación de caracteres. -->
    <meta charset="UTF-8">
    <!-- La declaración de la ventana gráfica. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <!-- Importacion de las clases CSS compiladas por Webpack -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha384-NXcJ/dE50k2rnZ0sU8W39BfzvUH2Qxjlhazk8WnX9fYmkHz51ryJhZ6qGwqjCIFe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-5z5g5RPSdYd0rVl5eLy8P6hv+/L6vN1hQWNx6dPyK/zy9AgvgeSQh6ERfw0FpAcC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.css"> -->

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

    <!--<header>-->
    <!-- -->
    <!--</header>-->

    <div id="app">
        <div style="min-height: 100vh">
            <h2 class="text-center">@yield('meta-title', config('app.name'))</h2>
            <v-app>
                <v-navigation-drawer app v-model="drawer" color="green" dark>
                    <v-list dense>
                        {{-- @foreach ($appData.items as $item)
                        <v-list-item :key="{{ $loop->index }}" router :to="{{ $item['route'] }}">
                        <v-list-item-icon>
                            <v-icon>{{ $item['icon'] }}</v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title>{{ $item['title'] }}</v-list-item-title>
                        </v-list-item-content>
                        </v-list-item>
                        @endforeach --}}
                    </v-list>
                </v-navigation-drawer>
                <v-app-bar app color="green" dark>
                    <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                    <v-toolbar-title>@yield('meta-title', config('app.name'))</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-btn text>Logout<v-icon>mdi-logout</v-icon>
                    </v-btn>
                </v-app-bar>
                <v-main>
                    <transition name="slide-fade" mode="out-in">
                        {{-- <router-view></router-view> --}}
                    </transition>
                </v-main>
                <v-footer app color="black" dark>
                    <span>&copy; 2023 - My Company</span>
                </v-footer>
            </v-app>
        </div>
    </div>

    <!-- Importacion de las clases JS compiladas por Webpack -->
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        $obj = @json($appData);

        console.log($obj);


        // console.log(@json($appData));

    </script>


    <!--<footer>-->
    <!-- -->
    <!--</footer>-->


    {{-- <script src="{{ asset('js/NavItems.js') }}"></script> --}}


</body>

</html>
