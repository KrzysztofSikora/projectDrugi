<html>
<head> <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">


    <title>Zalogowanie</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!--jQuery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style>

</style>


</head>
<body>

<?php

session_save_path('session/');
session_start();



// obsługa błędów


if(isset($_GET['success'])) {
    switch($_GET['success']) {
        case 0:
            echo "Rejestracja potwierdzona.";
            break;

        case 1:
            echo "Pomyślnie zalogowano.";
            break;
        case 6:
            echo "Zamówienie złożenie. Sprawdź pocztę.";
            break;
    }
}

?>








<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="?page=dashboard">O nas <span class="sr-only">(current)</span></a></li>
                <li><a href="?page=logout">Wyloguj</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorie <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=przeglad2">Podstawowa</a></li>
                        <li><a href="?page=jumbotron">Test</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?page=koszyk"><button type="button" class="btn btn-default btn-xs">
                             Koszyk <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        </button></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ustawienia <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=dashboard">Konto</a></li>
                        <li><a href="?page=settings_adres">Adres</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--<!--koniec nawigacji-->
<div class="container">
        <div class="row jumbotron">


            <div class="col-md-4">
                    <?php
                    if(isset($_GET['success']) && $_GET["success"] == 1) {
                        echo "<div class='alert alert-success'>Pomyślnie zalogowano!</div>";}
                    ?> <!-- pomyślnie zalogowano -->


    <!--                --><?php //if($_GET['page'] == "dashboard" || empty($_GET['page']))
    //
    //                   if($_GET['page'] == "settings")
    //
    //                   if($_GET['page'] == "przeglad2")
    //
    //                   if($_GET['page'] == "koszyk")
    //                ?>


            </div>
                <div class="col-md-8">
                            <?php

                                if(isset($_GET['page'])) {

                                        require 'pages/' . $_GET['page'] . ".php";
                                     }
                                 else {
                                    require 'pages/' . 'przeglad2.php';
                                }
                            ?>



                </div>
        </div>
</div>
<!--koniec jumbotrona-->
<div class="container">
    <div class="jumbotron">


        <div class="col-md-4">






        </div>
        <div class="col-md-8">
<!--            --><?php
//            require_once 'pages/przeglad2.php';
//            ?>


        </div>
    </div>
</div>
<!--koniec jumbotrona-->




</body>
</html>
