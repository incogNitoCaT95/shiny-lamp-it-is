<?php
require_once 'database.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$hasArticle = false;

$action = isset($_GET['action']) ? $_GET['action'] : null;

$edit = $action === 'edit';
$delete = $action === 'delete';

if (!empty($id)) {
    $articles = $database->getArticles();
    if (array_key_exists($id, $articles)) {
        unset($article);
        $articol = $articles[$id];
        $hasArticle = true;
        unset($articles);

        if (!$edit && !$delete) {
            require 'article_view.php';
            exit;
        }
    }
}


if ($isAdmin) {
    if ($delete) {
        if ($database->deleteArticle($id)) { ?>
            <html>
            <head>
                <meta http-equiv="refresh" content="3;URL='articol.php'"/>
            </head>
            <body>
            <h3>Articol sters cu succes. Redirectare in 3 secunde...</h3>
            </body>
            </html>

            <?php die();
        } else {
            die('Eroare la stergere');
        }
    }

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';

    if (!empty($_POST) && !empty($title) && !empty($content)) {
        if ($database->saveArticle($title, $content)) { ?>
            <html>
            <head>
                <meta http-equiv="refresh" content="3;URL='/'"/>
            </head>
            <body>
            <h3>Articol salvat cu succes. Redirectare in 3 secunde...</h3>
            </body>
            </html>
        <?php } else {
            die('Problema la salvarea articolului');
        }
    } else { ?>

        <!DOCTYPE html>
        <html lang="en">
        <?php require 'head.php' ?>

        <body>
        <?php require 'menu.php'; ?>

        <div class="container">

            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?><?= $edit ? '?action=edit&id=' . $articol['id'] : '' ?>">
                <div class="form-group">
                    <label for="title">Titlu</label>
                    <input type="text" class="form-control" name="title" placeholder="Titlu articol"
                           value="<?= $edit ? $articol['title'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="content">Continut</label>
                    <textarea name="content" class="form-control"
                              id="content"><?= $edit ? $articol['content'] : '' ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Trimite</button>
                </div>

            </form>
        </div>


        <footer class="footer">
            <div class="container">
                <p class="text-muted">Copyright © 2016 Olivia&Teodora. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.3/tinymce.min.js"></script>
        <script> tinymce.init({
                selector: 'textarea',
                height: 500,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor',
                    'searchreplace visualblocks image code fullscreen',
                    'insertdatetime media table contextmenu paste code help wordcount'
                ],
                toolbar: 'insert | undo redo |  formatselect | image code | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'],
                images_upload_url: 'image.php',
                images_upload_base_path: '/',
                images_upload_credentials: true
            }); </script>
        </body>
        </html>
    <?php }
} else {
    header('Location: /');
}
?>