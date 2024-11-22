<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
</head>

<body>
    @if (session('success'))
        <h3>{{ session('success') }}</h3>
    @endif
    @if (session('error'))
        <h3>{{ session('error') }}</h3>
    @endif
    @yield('content')

</body>

</html>
