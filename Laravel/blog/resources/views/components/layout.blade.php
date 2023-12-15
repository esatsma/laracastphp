<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>My Blog</title>

    <link href="/app.css" rel="stylesheet" />


</head>
<body class="antialiased">
    {{ $slot }}
</body>
</html>
