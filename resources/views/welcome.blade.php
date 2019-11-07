<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="app">
            <student-dashboard></student-dashboard>
        </div>
        <script src="/js/app.js"></script>
</body>
</html>