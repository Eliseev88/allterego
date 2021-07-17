<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no" />
    <meta property="og:title" content="Allterego">
    <meta property="og:site_name" content="AllteregoDress">
    <meta property="og:url" content="http://allteregodress.com">
    <meta property="og:description" content="Women's designer clothes">
    <meta property="og:image" content="/img/favicon.jpg">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.jpg"/>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/bootstrap.bundle.js"></script>
    @yield('header')
    <title>@section('title') AllteregoDress @show</title>
</head>
<body>
    <div class="wrapper">
        @yield('content')
    </div>

    <footer class="container-fluid text-center footer" id="footer-div-fixed">
        Авторские права &copy; <?php echo date("Y");?> Allterego
    </footer>

<script src="/js/app.js"></script>
</body>
</html>
