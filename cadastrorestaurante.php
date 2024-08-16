<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>🐵Micomida</title>
    <script>
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        document.getElementById('rua').value = "";
        document.getElementById('bairro').value = "";
        document.getElementById('cidade').value = "";
        document.getElementById('uf').value = "";
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            // Atualiza os campos com os valores.
            document.getElementById('rua').value = conteudo.logradouro;
            document.getElementById('bairro').value = conteudo.bairro;
            document.getElementById('cidade').value = conteudo.localidade;
            document.getElementById('uf').value = conteudo.uf;
        } else {
            // CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {
        // Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        // Verifica se campo cep possui valor informado.
        if (cep != "") {
            // Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            // Valida o formato do CEP.
            if (validacep.test(cep)) {
                // Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";

                // Cria um elemento javascript.
                var script = document.createElement('script');

                // Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                // Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);
            } else {
                // cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } else {
            // cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    }
    </script>
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
            margin: 0;
        }

        .login-form {
            max-width: 800px;
            border-radius: 8px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .login-form h1 {
            color: #ff8c00; /* Título em laranja */
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
        }

        .login-form .form-group {
            margin-bottom: 10px;
        }

        .login-form input[type="text"],
        .login-form input[type="email"],
        .login-form input[type="password"],
        .login-form input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 5px;
            border-radius: 4px;
            border: 1px solid #ced4da;
            font-size: 14px;
        }

        .login-form input[type="radio"] {
            margin: 0 5px;
        }

        .login-form button[type="submit"],
        .login-form input[type="submit"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: none;
            background-color: #ff8c00; /* Botão de envio em laranja */
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .login-form button[type="submit"]:hover,
        .login-form input[type="submit"]:hover {
            background-color: #e07b00; /* Cor do botão ao passar o mouse */
        }

        .login-form a {
            color: #ff8c00; /* Link "Voltar" em laranja */
            display: block;
            margin-top: 10px;
            text-align: center;
            font-size: 14px;
            font-weight: bold; /* Link em negrito */
        }

        .login-form a:hover {
            text-decoration: underline;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
            min-width: 0; /* Para permitir que os elementos encolham */
        }

        .form-row .form-group input {
            width: 100%;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <div class="text-center">
            <img src="img/logo.png" alt="Logo" width="120">
            <h1>Cadastro Restaurante</h1>
        </div>
        <form action="cadastrorestaurante.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                    <label>Nome restaurante</label>
                    <input type="text" name="nm_restaurante" placeholder="Nome restaurante" maxlength="40" required />
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" placeholder="Telefone" maxlength="40" required />
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" name="cep" id="cep" onblur="pesquisacep(this.value);" placeholder="CEP" maxlength="15" />
                    </div>
                    <div class="form-group">
                        <label>Rua</label>
                        <input type="text" name="rua" id="rua" placeholder="Rua" maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label>Número</label>
                        <input type="text" name="numero" placeholder="Número" maxlength="10" />
                    </div>
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" name="bairro" id="bairro" placeholder="Bairro" maxlength="80" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" maxlength="80" />
                    </div>
                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" name="uf" id="uf" placeholder="UF" maxlength="2" />
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="emailrestaurante" placeholder="E-mail" />
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senharestaurante" placeholder="Senha" maxlength="40" />
                    </div>
                </div>
               
                <?php
                    include "conn.php";
                    $exibir = $conn->prepare('SELECT * FROM `tipocomida`');
                    $exibir->execute();
                    while ($row = $exibir->fetch()) {
                        echo "<input type='checkbox' name='tipos_comida[]' value='" . $row['id_tipocomida'] . "'>" . $row['nm_tipocomida'] . "<br/>";
                    }
                ?>
                <div class="form-group">
                    <input type="text" name="insta" placeholder="Instagram" maxlength="100" required />
                </div>
                <div class="form-group">
                    <label>Rodízio</label>
                    <input type="radio" name="rodizio" value="1"> SIM
                    <input type="radio" name="rodizio" value="0"> NÃO
                </div>
                <div class="form-group">
                    <label>Delivery</label>
                    <input type="radio" name="delivery" value="1"> SIM
                    <input type="radio" name="delivery" value="0"> NÃO
                </div>
                <div class="form-group">
                    <label>A la carte</label>
                    <input type="radio" name="alacarte" value="1"> SIM
                    <input type="radio" name="alacarte" value="0"> NÃO
                </div>
                <div class="form-group">
                    <input type="submit" name="gravar" value="Enviar" />
                </div>
                <div class="text-center">
                    <a href="index.php">Voltar</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
