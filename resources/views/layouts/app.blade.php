<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quizacoatl</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script defer src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('/css//style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css//app.css') }}">

</head>
<body>
    <div id="app">
         <main class="py-4">
             @yield('content')
         </main>
    </div>
    <script src="{{ asset('/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('/js/template.js') }}"></script>
</body>
</html>
