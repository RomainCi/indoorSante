<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="A page's description, usually one or two sentences."/>
    <link rel="icon" type="image/png" href="../../resources/assets/work.png" sizes="16x16">
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}"  type='image/x-icon'>
    <title>Indoor Santé</title>
    @vite('resources/css/app.css')
</head>
<body style="margin: 0" >
<div id="app">
    @yield('content')
</div>

@vite('resources/js/app.js')
<script src="https://kit.fontawesome.com/40f157f11e.js" crossorigin="anonymous"></script>
</body>

</html>