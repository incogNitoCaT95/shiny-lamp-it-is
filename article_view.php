<?php
/**
 * @var array $article
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bumbişori</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie--modes-warning.js"></script>
    <meta name="description" content="Atestat">
    <meta name="author" content="Olivia&Teodora">
    <link rel="icon" href="logofinal.png">
    <link rel="stylesheet" type="text/css" href="cursor.css">
    <link rel="stylesheet" type="text/css" href="id.css">
    <link rel="stylesheet" type="text/css" href="cssarticol.css">
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
    <link rel="icon" href="logofinal.png">
</head>

<body>
<?php require 'menu.php'; ?>

<div class="container">
    <div class="page-header" align=center>
        <h1><?= $articol['title'] ?></h1>
    </div>
</div>


<div class="txtbox">
    <?= $articol['content'] ?>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright © 2016 Olivia&Teodora. All rights reserved.</p>
    </div>
</footer>
</body>
</html>