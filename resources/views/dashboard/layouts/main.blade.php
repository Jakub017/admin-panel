<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
</head>

<body>
    <div class="container">
        <div class="sidebar-container">
            @include('dashboard.elements.sidebar')
        </div>
        <div class="dashboard-container">
            @include('dashboard.elements.nav')
            <div class="content-container">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{asset('js/dashboard.js')}}"></script>
</body>

</html>
