<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('message-title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/errors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="card">
            <div class="error-box text-center">
                @yield('message-content')
            </div>
        </div>
    </div>
</body>
</html>