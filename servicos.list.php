<?php 
include_once ('./Site.crud.php');
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
           <!-- Navigation-->
        <?php 
            require("./header.php");
        ?>
        <!-- Cadastro-->
        <section class="page-section" id="servicos">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sistema de Gerenciamento de Serviços</h2>
                    <h3 class="section-subheading text-muted">Utilize a tabela abaixo para editar ou excluir as informações sobre os serviços prestados.</h3>
                    <?php if($_GET) : ?>
                    <h3 class="section-subheading text-danger"><strong>Ocoreu um erro ao tentar alterar o banco de dados.</strong></h3>
                    <?php endif; ?>
                </div>
                <table class="table table-stripped" style="color: black;">
                    <thead>
                        <th>#</th>
                        <th>Classe</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Gerir</th>
                    </thead>
                    <tbody>
                        <?php foreach (listaServicos() as $servico) : ?>
                        <tr>
                            <td><?= $servico->id ?></td>
                            <td><?= $servico->classe ?></td>
                            <td><?= $servico->titulo ?></td>
                            <td><?= $servico->descricao ?></td>
                            <td>
                                <a href="servicos.form.editar.php?id=<?= $servico->id ?>"><i class="bi bi-pencil-square"></i></a>&nbsp;
                                <a onclick="return confirm('Deseja realmente remover este item?')" href="servicos.deletar.php?id=<?= $servico->id ?>"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
