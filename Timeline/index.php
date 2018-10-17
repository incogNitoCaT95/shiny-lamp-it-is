<?php
require_once '../database.php';

$wantsToRegister = false;

if (!empty($_POST)) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (isset($_POST['register'])) {
        if (!empty($email) && !empty($username) && !empty($password)) {
            if ($database->createUser($email, $username, $password)) { ?>
                <html>
                <head>
                    <meta http-equiv="refresh" content="3;URL='/Timeline/index.php'"/>
                </head>
                <body>
                <h3>Inregistrare cu succes. Redirectare in 3 secunde...</h3>
                </body>
                </html>

                <?php die();
            } else {
                die('Problema la inregistrarea');
            }
        }
    } else if (isset($_POST['login'])) {
        $user = $database->checkUser($username, $password);

        if (!empty($user)) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $database->isUserAdmin();
            ?>
            <html>
            <head>
                <meta http-equiv="refresh" content="3;URL='/'"/>
            </head>
            <body>
            <h3>Logare cu succes. Redirectare in 3 secunde...</h3>
            </body>
            </html>
            <?php die();
        } else {
            die('Problema la logare');
        }
    }
}
?>
<html>
<head>
    <title>Contul meu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="description" content="Atestat">
    <meta name="author" content="Olivia&Teodora">
    <link rel="icon" href="/images/logofinal.png">
    <link rel="stylesheet" type="text/css" href="/cursor.css">
    <link rel="stylesheet" type="text/css" href="/sticky-footer.css">

</head>
<body>
<nav class="navbar navbar-inverse" style="background-color: #720031;">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="#"><a href="Acasa.html">Acasă</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="background-color: #720031"
                                    href="#">Articole <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="Bumbisori.html">Bumbişori</a></li>
                    <li><a href="Lalele.html">Lalele</a></li>
                    <li><a href="Panselute.html">Panseluţe</a></li>
                </ul>
            </li>
            <li><a href="Galerie.html">Galerie foto</a></li>
            <li><a href="Timeline/Timeline.html">Despre Noi</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Contul Meu</a></li>
        </ul>
    </div>
</nav>
<!--formular:-->
<div class="container">
    <h2>Inregistreaza-te</h2>
    <form class="form-horizontal" method="post">
        <input type="hidden" name="register" value="true">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Introduceti email-ul">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="user">Nume user:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user" name="username"
                       placeholder="Introduceti numele de utilizator">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Parola:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" name="password" placeholder="Introduceti parola">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Creeaza contul</button>
            </div>
        </div>
    </form>
</div>
<br>


<div class="container">
    <h2>Ai deja un cont? Conecteaza-te:</h2>
    <form class="form-horizontal" method="post">
        <input type="hidden" name="login" value="true">

        <div class="form-group">
            <label class="control-label col-sm-2" for="user">Nume user:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user" name='username'
                       placeholder="Introduceti numele de utilizator">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Parola:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" name='password' placeholder="Introduceti parola">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Conecteaza-te</button>
            </div>
        </div>
    </form>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright © 2016 Olivia&Teodora. All rights reserved.</p>
    </div>
</footer>
</body>
</html>