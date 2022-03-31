<?php 
include_once ('Site.crud.php');
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
                    <h2 class="section-heading text-uppercase">Sistema de Cadastro de Serviços</h2>
                    <h3 class="section-subheading text-muted">Utilize a tabela abaixo para incluir as informações sobre os serviços prestados.</h3>
                    <?php if($_GET) : ?>
                    <h3 class="section-subheading text-danger"><strong>Ocoreu um erro ao tentar cadastrar no banco de dados.</strong></h3>
                    <?php endif; ?>
                </div>
                <form id="servicosForm" data-sb-form-api-token="API_TOKEN" method="POST" action="servicos.registrar.php">
                    <div class="row align-items-center mb-5 offset-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Classe input-->
                                <input class="form-control" id="classe" name="inputClasse" type="text" placeholder="Informe a classe *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="classe:required">A Classe é necessária.</div>
                            </div>
                            <div class="form-group">
                                <!-- Titulo input-->
                                <input class="form-control" id="title" name="inputTitulo" type="text" placeholder="Informe o titulo *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="title:required">O titulo é necessário.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Descrição input-->
                                <input class="form-control" id="description" name="inputDescricao" type="text" placeholder="Informe a descrição *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="description:required">A descrição é necessária.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Inclusão de dados feita com sucesso!</div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Registrar</button></div>
                </form>
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
