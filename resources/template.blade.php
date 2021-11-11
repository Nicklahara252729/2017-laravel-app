<!DOCPTYE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel App</title>
        <link href="{{asset(bootstrap-4.0.0-beta/bootstrap.min.css)}}" rel="stylesheet">
        <link href="{{asset(css/style.css)}}" rel="stylesheet">
        
        <script src="{{asset(js/html5shiv.min.js)}}" type="text/javascript"></script>
        <script src="{{asset(js/respond_1_4_2.min.js)}}" type="text/javascript"></script>
    </head>
    <body>
        @yeild('main')
        @yeild('footer')
        <script src="{{asset(js/jquery-3.2.1.js)}}"></script>
        <script src="{{asset(js/)}}"
    </body>
</html>