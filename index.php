<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Ativos</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light" id="p-navbar">
        <a href="#" id="navbar-site-title" class="navbar-brand">Painel</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#p-navbar-collapse"
        aria-controls="p-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="p-navbar-collapse">
            <form id="navbar-search-form" class="form-inline">
                <input type="text" id="navbar-search-field" class="form-control p-form-field" placeholder="Pesquisar">
            </form>
    
            <div id="navbar-profile" class="ml-auto">
                <img src="https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_960_720.png" alt="user-photo">
                <span>Victor Lima</span>
            </div>
        </div>


    </nav>
    
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- JS BOOTSTRAP -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>