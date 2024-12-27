<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS & JS/user.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/responsifHome.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/userDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/userHome.css?v=<?php echo time(); ?>">
    <title>Home | BETA</title>

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
            <!-- Lite => Lite Version -->
            <!-- BETA => Experimental Version -->
            <!-- Alpha => Developers Only -->
            <!-- ========================================= -->

        </div>

        <div id="NavCenter">
            <div id="NavCenter1">
                <a href="/beta" class="hrefStyle">Home</a>
            </div>
            <div id="NavCenter2">
                <?php if (session()->get("UserName") !== null) { ?>
                    <a href="/" class="hrefStyle">Last Update</a>
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
            <form action="" method="post">
                <input onclick="Pencarian()" name="keyword" type="text" class="Pencarian" placeholder="Search..." required="">
                <button type="submit" name="submit" style="display: none;"></button>
            </form>

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

    <div id="home">

        <!-- Container -->

        <div id="grid-container">

            <div class="grid-itemUtama">

                <div id="pictureDivUtama">
                    <a href="https://unsri.ac.id/" target="_blank"><button style="background: transparent; border: 0" id="pictureIMGButton">
                            <img src="/FileWeb/UNSRI.jpeg" id="pictureIMGUtama">
                        </button></a>
                </div>

            </div>

            <?php rsort($createAdmin) ?>
            <?php foreach ($createAdmin as $output) { ?>


                <div class="grid-item">
                    <a href="/beta_article_viewer/<?= $output['ID']; ?>" style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/ArticlePicture/<?= $output['Picture']; ?>" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText"><a id="Kategori"><?= $output['Kategori']; ?></a></div>
                                    <div id="pictureEdit"><a style="text-decoration: none" id=""></a></div>
                                    <div id="pictureDelete"><a style="text-decoration: none" id=""></a></div>
                                </div>

                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <p id="judulHuruf"><?= $output['Judul']; ?></p>
                    </div>
                    <div id="isiDiv">
                        <p id="isiHuruf"><?= $output['Paragraf1']; ?></p>
                    </div>

                    <?php if (session()->get('DateSession') == $output['Tanggal']) { ?>
                        <div>
                            <p id="isiTanggal">Today, <?= $output['Tanggal']; ?></p>
                        </div>
                    <?php } else if ($output['View'] > 11) { ?>
                        <div>
                            <p id="isiTanggal"><?= $output['View']; ?> Views, <?= $output['Tanggal']; ?></p>
                        </div>
                    <?php } else { ?>
                        <div>
                            <p id="isiTanggal"><?= $output['Kategori']; ?>, <?= $output['Tanggal']; ?></p>
                        </div>
                    <?php } ?>


                </div>

                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf2']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf3']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf4']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf5']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf6']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf7']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf8']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf9']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf10']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf11']; ?></p>
                </div>
                <div style="display: none;">
                    <p id="isiHuruf"><?= $output['Paragraf12']; ?></p>
                </div>

            <?php } ?>

            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>

        </div>

        <!-- Container -->

        <?= $pager->links('home', 'home_pagination') ?>

    </div>

</body>

</html>