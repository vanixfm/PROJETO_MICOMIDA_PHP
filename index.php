<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>🐵Micomida</title>
    <style>
        .nav-link {
            color: white;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: orange;
            transform: scale(1.2);
        }

        .sidebar {
            background-color: #f8f9fa;
            padding: 15px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        .social-icon {
            width: 30px;
            height: 30px;
        }

        .footer {
            background-color: black;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer img {
            max-width: 100px;
            max-height: 100px;
            margin-bottom: 10px;
        }

        .footer p {
            font-size: 12px;
            margin: 0;
        }

        .form-check-label {
            color: orange;
            font-weight: bold;
        }

        .form-check-input:checked ~ .form-check-label {
            color: darkorange;
        }

        .logo {
            max-width: 100%;
            height: auto;
        }

        /* Ajustando o layout para que os cards fiquem lado a lado */
        @media (min-width: 768px) {
            .row .col-md-4 {
                display: flex;
                justify-content: center;
            }

            .card {
                width: 20rem; /* Ajuste o valor conforme necessário */
            }
        }
    </style>
</head>
<body>
<nav>
    <div class="container-fluid">
        <div class="row" style="background-color:black">
            <div class="col-xl-2 col-lg-6 col-md-12">
                <img src="img/logo.png" alt="Logo de um macaco segurando uma faixa escrito micomida" class="logo">
            </div>
            <div class="col-xl-10 col-lg-6 col-md-12">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><h1>Sou cliente</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginrestaurante.php"><h1>Sou restaurante</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="avaliacao.php"><h1>Contato</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favoritos.php"><h1>Sobre o Micomida</h1></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<?php
if(isset($_GET['alerta'])){
    $nm_cliente = "Nome do Cliente"; // Substitua pelo nome do cliente obtido da tabela cliente
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Deseja realmente sair?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Olá, <?php echo htmlspecialchars($nm_cliente); ?>. Tem certeza de que deseja sair?</p>
            </div>
            <div class="modal-footer">
                <a href="index.php?logout" class="btn btn-primary">Sim</a>
                <a href="index.php" class="btn btn-secondary" data-dismiss="modal">Não</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#myModal').modal('show');
    });
</script>
<?php
}

if(isset($_GET['logout'])){
    session_destroy();
    header('location: login.php');
}
?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-3">
                <div class="sidebar">
                    <form method="post" action="index.php">
                        <div class="form-group">
                            <label for="tipo">Tipo:</label>
                            <?php
                            include "conn.php";
                            $exibir = $conn->prepare('SELECT * FROM tipocomida');
                            $exibir->execute();
                            while ($row = $exibir->fetch()) {
                                echo "<div class='form-check'>";
                                echo "<input type='checkbox' name='tipos_comida[]' value='" . $row['id_tipocomida'] . "' class='form-check-input'>";
                                echo "<label class='form-check-label'>" . htmlspecialchars($row['nm_tipocomida']) . "</label>";
                                echo "</div>";
                            }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-orange">Filtrar</button>
                    </form>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-3 col-md-3">
                <div class="sidebar">
                    <form method="post" action="index.php">
                        <div class="form-group">
                            <label for="nota">Nota:</label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="nota" id="nota" value="" class="form-check-input" checked>
                                <label class="form-check-label" for="nota">Todas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="nota" id="nota1" value="1" class="form-check-input">
                                <label class="form-check-label" for="nota1">1 estrela</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="nota" id="nota2" value="2" class="form-check-input">
                                <label class="form-check-label" for="nota2">2 estrelas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="nota" id="nota3" value="3" class="form-check-input">
                                <label class="form-check-label" for="nota3">3 estrelas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="nota" id="nota4" value="4" class="form-check-input">
                                <label class="form-check-label" for="nota4">4 estrelas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="nota" id="nota5" value="5" class="form-check-input">
                                <label class="form-check-label" for="nota5">5 estrelas</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-white">Filtrar</button>
                    </form>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-2 col-md-2">
                <div class="sidebar">
                    <form method="post" action="index.php">
                        <div class="form-group">
                            <label for="delivery">Delivery:</label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="delivery" id="delivery" value="" class="form-check-input" checked>
                                <label class="form-check-label" for="delivery">Todos</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="delivery" id="deliverySim" value="sim" class="form-check-input">
                                <label class="form-check-label" for="deliverySim">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="delivery" id="deliveryNao" value="nao" class="form-check-input">
                                <label class="form-check-label" for="deliveryNao">Não</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-orange">Filtrar</button>
                    </form>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    <?php
                    // Conectar ao banco de dados
                    include "conn.php";

                    // Construir a consulta com base nos filtros
                    $sql = "SELECT * FROM restaurante";
                    $conditions = [];

                    if (!empty($_POST['tipos_comida'])) {
                        $tipos_comida = implode(',', array_map('intval', $_POST['tipos_comida']));
                        $conditions[] = "id_restaurante IN (SELECT id_restaurante FROM tipo_restaurante WHERE id_tipocomida IN ($tipos_comida))";
                    }

                    if (!empty($_POST['nota'])) {
                        $nota = intval($_POST['nota']);
                        $conditions[] = "id_restaurante IN (SELECT id_restaurante FROM avaliacao WHERE nota = $nota)";
                    }

                    if (isset($_POST['delivery'])) {
                        $delivery = $_POST['delivery'] == 'sim' ? 1 : 0;
                        $conditions[] = "delivery = $delivery";
                    }

                    if (count($conditions) > 0) {
                        $sql .= " WHERE " . implode(' AND ', $conditions);
                    }

                    $stmt = $conn->query($sql);

                    while ($row = $stmt->fetch()) {
                        // Recuperar imagem
                        $id_restaurante = $row['id_restaurante'];
                        $imagem_stmt = $conn->prepare("SELECT url_arq FROM arquivos WHERE id_login = ? LIMIT 1");
                        $imagem_stmt->execute([$row['id_login_restaurante']]);
                        $imagem_row = $imagem_stmt->fetch();
                        $imagem = $imagem_row ? $imagem_row['url_arq'] : 'img/default.jpg';

                        // Recuperar endereço
                        $id_endereco = $row['id_endereco'];
                        $endereco_stmt = $conn->prepare("SELECT * FROM endereco WHERE id_endereco = ?");
                        $endereco_stmt->execute([$id_endereco]);
                        $endereco_row = $endereco_stmt->fetch();

                        $endereco = $endereco_row['rua'] . ', ' . $endereco_row['numero'] . ' - ' . $endereco_row['bairro'] . ', ' . $endereco_row['cidade'] . ' - ' . $endereco_row['uf'] . ', CEP: ' . $endereco_row['cep_end'];

                        // Calcular média de avaliações
                        $avaliacao_stmt = $conn->prepare("SELECT AVG(nota) as media FROM avaliacao WHERE id_restaurante = ?");
                        $avaliacao_stmt->execute([$id_restaurante]);
                        $avaliacao_row = $avaliacao_stmt->fetch();
                        $media = $avaliacao_row ? round($avaliacao_row['media']) : 0;
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo htmlspecialchars($imagem); ?>" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['nm_restaurante']); ?></h5>
                                <p class="card-text">Telefone: <?php echo htmlspecialchars($row['telefone_restaurante']); ?></p>
                                <p class="card-text">Endereço: <?php echo htmlspecialchars($endereco); ?></p>
                                <p class="card-text">Avaliação: <?php echo str_repeat('★', $media) . str_repeat('☆', 5 - $media); ?></p>
                                <a href="<?php echo htmlspecialchars($row['insta']); ?>" class="btn btn-dark">Instagram</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <img src="img/logo.png" alt="Logo de um macaco segurando uma faixa escrito micomida">
    <p>© 2024 Micomida. Todos os direitos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK3R6Q3MRb0t4/4w5l/rFj9OZ7U5Xy+2h6qVf2D4FOuQwS0" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UOa4Y6g35Q4sK2vnQ0y3A6w2ih20H4yL0sH8hGo3ZkF1g6kQs2Gq75GJg7+blpC0s0" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-Chfqq9fH0n4bI4fT2b2bVd4sLgXo8sPq0sH74Ur0c5F1Biwv/j5T7wW3Mxtu4Ggt/" crossorigin="anonymous"></script>
</body>
</html>
