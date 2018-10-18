<?php
require_once 'database.php';
$articles = $database->getArticles();

?>

<nav class="navbar navbar-inverse" style="background-color: #720031;">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="#"><a href="/">Acasă</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" style="background-color: #720031"
                   href="#">Articole <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php foreach ($articles as $article) : ?>
                        <li><a href="/articol.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></li>
                    <?php endforeach; ?>
                    <?php if($isAdmin) { ?>
                        <li><a href="/articol.php">Adauga articol</a></li>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="Galerie.html">Galerie foto</a></li>
            <li><a href="/Timeline/Timeline.php">Despre Noi</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if (!isset($_SESSION['id'])) { ?>
                <li><a href="/Timeline/index.php"><span class="glyphicon glyphicon-user"></span> Contul Meu</a></li>
            <?php } else { ?>
                <li><a href="/Timeline/logout.php"><span class="glyphicon glyphicon-user"></span> <?= $_SESSION['username'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
</nav>
