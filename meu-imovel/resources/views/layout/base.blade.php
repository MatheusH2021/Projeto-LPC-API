<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Imovel - @yield('title')</title>
    
    <!-- CSS -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/favicon.png') }}">
    
    <!--------->

</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a style="text-decoration: none;"href="{{ route('home') }}" class="nav_logo"> <i class='bx bx-building-house nav_logo-icon'></i> <span class="nav_logo-name">Meu Imovel!</span></a>
                <div class="nav_list"> 
                    <a style="text-decoration: none; color: white;" href="{{ url('home') }}" class="nav_link" title="home"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a> 
                    <a style="text-decoration: none; color: white;" href="{{ url('cadastrar') }}" class="nav_link" title="Adicionar Imovel"> <i class='bx bx-edit nav_icon'></i> <span class="nav_name">Adicionar Imoveis</span> </a>  
                </div>
            </div> <a style="text-decoration: none; color: white" href="{{ url('logout') }}" class="nav_link" title="Sair"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a>
        </nav>
    </div>
    
    @yield('content')

    <footer class="text-center">@Meu Imovel-2022</footer>

</body>

    <!-- Scripts -->
    
    <script src="{{ asset('assets/js/scrypt.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!------------->

</html>
    
