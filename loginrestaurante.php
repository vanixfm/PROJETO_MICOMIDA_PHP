<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <title>🐵Micomida</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            background-image: url('caminho/para/sua/imagem.jpg'); /* Substitua pelo caminho da sua imagem */
            background-size: cover; /* Cobrir todo o fundo */
            background-repeat: no-repeat; /* Não repetir a imagem */
            background-position: center; /* Centralizar a imagem */
        }
        .login-form {
            max-width: 400px;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .login-form .form-group {
            text-align: center;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-size: 14px;
        }

        .login-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #343a40; /* Botão de login na cor dark */
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
        }

        .login-form button[type="submit"]:hover {
            background-color: #23272b; /* Cor do botão ao passar o mouse */
        }

        .login-form p {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .login-form a {
            color: #ff8c00; /* Link "Não possuo conta" em laranja */
            display: block;
            margin-top: 10px;
            text-align: center;
        }

        .login-form a:hover {
            text-decoration: underline;
        }

        .login-form h1 {
            color: #ff8c00; /* Título "Login restaurante" em laranja */
            font-weight: bold;
            text-align: center;
        }

        #google-login-button {
            background-color: #007bff; /* Botão "Login com Google" na cor original */
            color: #fff;
            font-weight: bold;
        }

        #google-login-button:hover {
            background-color: #0069d9; /* Cor do botão ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="login-form">
        <div class="text-center">
            <img src="img/logo.png" alt="Logo" width="150">
            <h1>Login restaurante</h1>
            <form action="processar_login.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="emailrestaurante" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="senharestaurante" placeholder="Senha" required>
                </div>
                <button type="submit" name="loginrestaurante" class="btn btn-dark">Entrar</button>
            </form>
            <a class="nav-link" href="cadastrorestaurante.php">Não possuo conta</a>
        </div>
    </div>
</body>
</html>
