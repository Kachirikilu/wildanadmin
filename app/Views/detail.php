<?php if (session()->get('Pangkat') == "CEO") { ?>
    <title><?= $createAdmin['Judul'] ?> | Owner</title>
<?php } else if (session()->get('Pangkat') == "Admin") { ?>
    <title><?= $createAdmin['Judul'] ?> | Admin</title>
<?php } else if (session()->get('Pangkat') == "User") { ?>
    <title><?= $createAdmin['Judul'] ?> | User</title>
<?php } else if (session()->get('Pangkat') == null) { ?>
    <title><?= $createAdmin['Judul'] ?> | Visitor</title>
<?php } ?>

<div id="blur2" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">
    <div id="blur3" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">

        <!-- Home -->
        <div id="homeDetail">

            <center>

                <div id="layerUtama">

                    <div id="layer1">

                        <div id="divUtama">
                            <div id="divGambar"><img src="/ArticlePicture/<?= $createAdmin['Picture'] ?>" id="Picture"></div>
                            <div id="divJudul" style="display: flex; justify-content: space-between;">
                                <div class="bungkusDivGambar">
                                    <p id="Judul"><?= $createAdmin['Kategori'] ?>, <?= $createAdmin['Tanggal'] ?></p>
                                </div>
                                <?php if ($createAdmin['View'] > 11) { ?>
                                    <div class="bungkusDivGambarX">
                                        <p id="Judul"><?= $createAdmin['View'] ?> Views</p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <?php if (session()->get('Pangkat') == "CEO") { ?>

                            <div id="divPR">
                                <a href="/delete_article/<?= $createAdmin['Slug']; ?>" style="text-decoration: none; color: black"><button class="btn-Delete">Delete</button></a>
                                <a href="/article/update/<?= $createAdmin['Slug']; ?>" style="text-decoration: none; color: black"><button class="btn-Edit">Edit</button></a>
                            </div>

                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                            <?php if ($createAdmin['Penulis'] !== "Wildan Athif Muttaqien") { ?>

                                <div id="divPR">
                                    <a href="/delete_article/<?= $createAdmin['Slug']; ?>" style="text-decoration: none; color: black"><button class="btn-Delete">Delete</button></a>
                                    <a href="/article/update/<?= $createAdmin['Slug']; ?>" style="text-decoration: none; color: black"><button class="btn-Edit">Edit</button></a>
                                </div>

                            <?php } ?>

                        <?php } ?>