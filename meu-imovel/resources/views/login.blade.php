<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Local-->
    
    <link rel="stylesheet" href="assets/css/login.css">
    
    <!--Bootstrap-->
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <!------------->
    <title>Meu Imovel! - Gerencie seus imoveis</title>
</head>
<body>
    <div class="wrapper">
        <div class="card text-center">
            <div class="title">
                <h1>
                    Meu Imovel!
                </h1>
            </div>
            <form class="form-control" action="{{ route('apiLogin') }}" method="post" autocomplete="off">
                @csrf
                <div class="sub-title">
                    <h4>
                        Login
                    </h4>
                </div>
                <div class="input">
                    <div class="input-group">
                        <span class="input-group-text btn btn-success" id="basic-addon1"><i class="bx bx-user"></i></span>
                        <input class="form-control" type="email" name="email" id="user" placeholder="Insira seu Email">
                    </div>
                </div>
                <div class="input">
                    <div class="input-group">
                        <span class="input-group-text btn btn-success" id="basic-addon1"><i class="bx bx-lock"></i></span> 
                        <input class="form-control" type="password" name="password" id="passwrd" placeholder="Insira sua Senha">
                    </div>
                </div>
                <div class="button-display text-center">
                    <button class="btn btn-success">Entrar</button>
                </div>                       
            </form>
        </div>
    </div>

</body>
<!--Scripts-->
    <script src="assets/js/scrypt.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!----------->
</html>