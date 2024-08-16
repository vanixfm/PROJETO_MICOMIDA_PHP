<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
        .login-form h1 {
            color: #ff8c00; /* Título em laranja */
            font-weight: bold;
            text-align: center;
        }
        .login-form .form-group {
            text-align: center;
        }
        .login-form label {
            font-weight: bold;
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
        .login-form button {
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
        .login-form button:hover {
            background-color: #23272b; /* Cor do botão ao passar o mouse */
        }
        .login-form a {
            color: #ff8c00; /* Link "Sem cadastro" em laranja */
            display: block;
            margin-top: 10px;
            text-align: center;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h1>Login</h1>
        <?php
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Conectar ao banco de dados
            $conn = new mysqli('localhost', 'root', '', 'dbmicomida');

            // Verificar conexão
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            // Preparar e executar a consulta
            $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($senha_hash);
            $stmt->fetch();

            if ($stmt->num_rows > 0 && password_verify($senha, $senha_hash)) {
                $_SESSION['email'] = $email;
                header("Location: favoritos.php");
                exit();
            } else {
                echo "<p>Email ou senha inválidos.</p>";
            }

            // Fechar a conexão
            $stmt->close();
            $conn->close();
        }
        ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <a href="cadastrocliente.php">Sem cadastro</a>
    </div>
</body>
</html>
