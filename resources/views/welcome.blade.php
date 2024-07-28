<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Digital Transport</title>

</head>
<body>

<div class="container-scroller">
    @yield('content')
</div>



</body>
</html>
