<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel - School of net</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- SIDEBAR-->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="assets/meu-logo.png"><span>Painel</span></div>
            <div class="list-group list-group-flush border-right">
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-home"></i>Inicio</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>Funcionários</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-box-open"></i>Produtos</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i>Categorias</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-people-carry"></i>Fornecedores</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="far fa-chart-bar"></i>Relatórios</a>
            </div>   
        </div>
        <!-- CONTEÚDO -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light" id="son-navbar">
                <span id="menu-toggle" class="mr-auto"><img src="assets/meu-logo.png" class="mx-auto d-block"></span>
                <a  class="navbar-brand" href="#" id="navbar-site-title">Painel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#son-navbar-collapse"
                    aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="son-navbar-collapse">
                        <form class="form-inline" id="navbar-search-form">
                                <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar" id="navbar-search-field">
                        </form>
                    
                        <div id="navbar-profile" class="ml-auto">
                                <img src="assets/eu.jpg" alt="" srcset="">
                                <span>George Araújo</span>
                        </div>
                </div>
            </nav>
            <div id="content" class="container">
                <!-- TABELA -->
                <div class="table-title">
                    <h3>Usuários</h3>
                    <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar">
                </div>
                <table class="table bg-white">
                    <thead>
                        <tr>
                            <th class="table-col-title">#</th>
                            <th class="table-col-title">NOME</th>
                            <th class="table-col-title">SOBRENOME</th>
                            <th class="table-col-title">USUÁRIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>George</td>
                            <td>Giffoni</td>
                            <td>Diasbo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Samele</td>
                            <td>Parente</td>
                            <td>Samelinda</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Suelen</td>
                            <td>Giffoni</td>
                            <td>misskekao</td>
                        </tr>

                    </tbody>
                </table>
                <!-- FORMULÁRIO -->
                <h3 id="main-page-form-title" class="son-main-text-3">Cadastro</h3>
                <div>
                    <form class="card son-form" action="">
                        <div class="card-body son-form-body">
                            <div class="form-group">
                                <label>Autor</label>
                                <input class="form-field son-form-field form-control" type="text" id="user-field" placeholder="Autor">
                                <hr>
                            </div>
                            <div class="form-group">
                                <label>Título</label>
                                <input class="form-field son-form-field form-control" type="text" id="title-field" placeholder="Título">
                                <hr>
                            </div>
                            <div class="form-group">
                                <label>Conteúdo</label>
                                <textarea id="body-field" placeholder="Um texto qualquer" class="form-field son-form-field form-control" name="" id="" cols="30" rows="2"></textarea>
                                <hr>
                            </div>
                            <div class="form-group">
                                <label>Data</label>
                                <input class="form-field son-form-field form-control" type="date" id="date-field">
                            </div>
                        </div>
                        <div class="confirm-btns card-footer">
                            <button class="btn btn-primary">Criar e adicionar outro</button>
                            <button class="btn btn-primary">Publicar post</button>
                        </div>
                    </form>
                    <h3>Sem conteúdo</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- JS do Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(event) {
            event.preventDefault();
            // se existe remove se nao existe ele adiciona
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script src="js/chart/Chart.min.js"></script>
</body>
</html>