﻿<!DOCTYPE>
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
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
    <link rel="stylesheet" type="text/css" href="/css/cursor.css">
    <link rel="stylesheet" type="text/css" href="/css/id.css">
    <link rel="stylesheet" type="text/css" href="/css/cssarticol.css">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template
    <link href="sticky-footer.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="sticky-footer.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="content/js/jquery.min.js"></script>
    <script src="content/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <link rel="icon" href="/images/logofinal.png">
</head>
<style type="text/css">
    <!--
    .style1 {
        font-size: 36px;
        font-weight: bold;
    }

    -->
</style>
</head>

<body>

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
            <li><a href="Timeline.php">Despre Noi</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Contul Meu</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="page-header" align=center>
        <h1>Bine ai venit!</h1>
    </div>
</div>


<div class="txtbox">
    <div class="textpagina">

        <form action="upload.php" method="post" enctype="multipart/form-data" align="center">
            Ne poți trimite pozele tale și, cine știe, poate le vei vedea în galeria noastră! Cele mai bune fotografii
            vor fi alese. Nu uita să-ți personalizezi fotografia!
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Incarca fotografia" name="submit1">
        </form>
        <br>
        <p align="center"><a href="index.php">Deconectează-te</a></p>

    </div>
</div>
<br></br>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright © 2016 Olivia&Teodora. All rights reserved.</p>
    </div>
</footer>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>