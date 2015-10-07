<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
        @yield ('title')
        </title>
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font-Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- w/e left -->
        <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        @yield ('stylesheets')
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,300italic,400italic,700italic,800italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="page-loader">
            <img src="{{ asset('assets/img/loader.gif') }}" alt="">
        </div>
        
        @include ('components.navigation')
        
        @yield ('content')

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/parallax.js') }}"></script>
        <script type="text/javascript" src='{{ asset('assets/js/countto.js') }}'></script>
        <script type="text/javascript" src="{{ asset('assets/js/portfolio.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/animheader.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
        @yield ('scripts')
    </body>
</html>