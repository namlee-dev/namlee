<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nam Lee &#60; apprentie dev web &#62; : mon parcours de developpeuse web </title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Fontawasome -->
    <script src="https://kit.fontawesome.com/d9bdb299ba.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $assetsBaseUri ?>css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="<?= $assetsBaseUri ?>css/style.css" media="all">
    <link rel="stylesheet" href="<?= $assetsBaseUri ?>css/responsive.css" media="all">
    <!-- Favicon -->
    <link rel="icon" href="<?= $assetsBaseUri ?>images/Nam.jpg" />
</head>

<body>
    <div class="container">
        <header>

            <div class="d-flex justify-content-center align-items-center bg-main">
                <img id="header__title--image" src="<?= $assetsBaseUri ?>images/Nam.jpg"
                    alt="avatar de l'auteur Nam Lee">
                <h1>Nam Lee &#60; apprentie dev web &#62</h1>
            </div>

            <div>
                <?php require __DIR__ . '/../partial/nav.tpl.php' ?>
            </div>

        </header>
    </div>

    <div class="container">
        <main>