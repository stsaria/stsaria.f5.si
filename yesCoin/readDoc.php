<!DOCTYPE html>
<html lang="ja" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YesCoin =Doc=</title>
        <link rel="icon" href="img/logo.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include "header.html" ?>
        <div style="text-align: center;">
            <h1><?php echo $_GET["docid"]; ?></h1>
        </div>
        <hr>
        <?php if (isset($_GET["docid"]) && file_exists("docs/".$_GET["docid"].".html")) : ?>
            <div class="container">
            <?php echo file_get_contents("docs/".$_GET["docid"].".html") ?>
        <?php else: ?>
            <h1 style="text-align: center;">Not Found Document</h1>
        <?php endif; ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>