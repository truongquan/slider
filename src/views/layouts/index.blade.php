<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Important Owl stylesheet -->
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('/owl-carousel/owl.carousel.css') }}">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="{{ asset('/owl-carousel/owl.theme.css') }}">
     
    <!--  jQuery 1.7+  -->
    <script src="{{ asset('/owl-carousel/jquery-1.9.1.min.js') }}"></script>
     
    <!-- Include js plugin -->
    <script src="{{ asset('/owl-carousel/owl.carousel.js') }}"></script>
</head>
<body>
<div class="container">
<div class="row">
    @yield('content')
</div>
</div>
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
