<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS & JS/user.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/userDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/responsifHome.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/userHome.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/userDetail.css?v=<?php echo time(); ?>">
    <title>Home - Beta</title>
    <title><?= $createAdmin['Judul'] ?> | BETA</title>

</head>

<body id="background">

    <!-- Navigasi -->
    <ul id="Nav">

        <div id="NavLeft">
            <div id="BETAVERSION">
                <h2 class="hrefStyle">V1.2.0 BETA</h2>
            </div>

            <!-- ========================================= -->
            <!-- V1.2.0 Alpha -->
            <!-- V => Web Version -->
            <!-- 1 => Interface -->
            <!-- 2 => View -->
            <!-- 0 => Featureless -->
            <!-- ========================================= -->
            <!-- Stable => Full Release -->
            <!-- BETA => Experimental Version -->
            <!-- Alpha => Developers Only -->
            <!-- ========================================= -->

        </div>

        <div id="NavCenter">
            <div id="NavCenter1">
                <a href="article/beta" class="hrefStyle">Home</a>
            </div>
            <div id="NavCenter2">
                <?php if (session()->get("UserName") !== null) { ?>
                    <a href="/article/<?= $createAdmin['Slug'] ?>" class="hrefStyle">Last Update</a>
                <?php } else if (session()->get("UserName") == null) { ?>
                    <a href="/login" class="hrefStyle">Last Update</a>
                <?php } ?>
            </div>
            <div id="NavCenter3">
                <a href="/custom" class="hrefStyle">Custom</a>
            </div>
            <div id="NavCenter4">
                <a href="https://wa.me/6282183379918" target="_blank" class="hrefStyle">Call Me</a>
            </div>
        </div>

        <div id="NavRight">

            <?php if (session()->get('Pangkat') !== null) { ?>

                <div id="NavRight5">
                    <a href="/logout" class="hrefStyle">Logout</a>
                </div>

            <?php } else { ?>

                <div id="NavRight5">
                    <a href="/login" class="hrefStyle">Login</a>
                </div>

            <?php } ?>

        </div>

    </ul>
    <!-- Navigasi -->

    <!-- Home -->
    <div id="homeDetail">

        <center>

            <div id="layerUtama">

                <div id="layer1">

                    <div id="divUtama">
                        <div id="divGambar"><img src="/ArticlePicture/<?= $createAdmin['Picture'] ?>" id="Picture"></div>
                    </div>