<!DOCTYPE html>
<html class="@yield('html-class')">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ Config::get('app.name') }} @yield('head_title')</title>
        <meta name="author" content="Muhamad Anjar">
        <meta name="title" content="{{ Config::get('app.meta')}}" />
        <meta name="description" content="{{ Config::get('app.meta')}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        
        <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../image/touch/apple-touch-icon-57x57-precomposed.png">-->
        <link rel="icon" type="image/png" href="{{ url('/image/favicon.png')}}" sizes="16x16">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        @yield('style-head')
        
        <!-- Theme stylesheet : optional -->
        @yield('style-theme')
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        @yield('script-head')
        
        <!-- END STYLESHEETS -->
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                'serverUrl' => Config::get('app.url'),
                'geoserverUrl' => Config::get('app.geoserver_url')
            ]); ?>;
            
        </script>
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body class="@yield('body-class')">
        @yield('body')
        
        @yield('script-body')
        
        @yield('script-end')        
        
        
    </body>
    <!--/ END Body -->
</html>