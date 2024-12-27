<?php if (session()->get('Pangkat') == "CEO") { ?>
    <title>Home | Owner</title>
<?php } else if (session()->get('Pangkat') == "Admin") { ?>
    <title>Home | Admin</title>
<?php } else if (session()->get('Pangkat') == "User") { ?>
    <title>Home | User</title>
<?php } else if (session()->get('Pangkat') == null) { ?>
    <title>Home | Visitor</title>
<?php } ?>

<!-- Container -->

<div id="grid-container">

    <div class="grid-itemUtama">

        <div id="pictureDivUtama">
            <a href="https://unsri.ac.id/" target="_blank"><button id="pictureIMGButton">
                    <img src="/FileWeb/UNSRI.jpeg" id="pictureIMGUtama">
                </button></a>
        </div>

    </div>

    <?php rsort($createAdmin) ?>
    <?php foreach ($createAdmin as $output) { ?>

        <div class="grid-item">
            <a href="/article_viewer/<?= $output['ID']; ?>" style="text-decoration: none; color: black">
                <button id="buttonDetail">
                    <div id="pictureDiv">
                        <div id="pictureDiv2"><img src="/ArticlePicture/<?= $output['Picture']; ?>" id="pictureIMG"></div>

                        <?php if (session()->get('Pangkat') == "CEO") { ?>

                            <div id="picturePop">
                                <div id="pictureText"><a id="Kategori"><?= $output['Kategori']; ?></a></div>
                                <div id="pictureEdit"><a href="/update_article/<?= $output['Slug']; ?>" style="text-decoration: none" id="EditText">Edit</a></div>
                                <div id="pictureDelete"><a href="/delete_article/<?= $output['Slug']; ?>" style="text-decoration: none" id="DeleteText">Delete</a></div>
                            </div>

                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                            <?php if ($output['Penulis'] !== "Wildan Athif Muttaqien") { ?>

                                <div id="picturePop">
                                    <div id="pictureText"><a id="Kategori"><?= $output['Kategori']; ?></a></div>
                                    <div id="pictureEdit"><a href="/update_article/<?= $output['Slug']; ?>" style="text-decoration: none" id="EditText">Edit</a></div>
                                    <div id="pictureDelete"><a href="/delete_article/<?= $output['Slug']; ?>" style="text-decoration: none" id="DeleteText">Delete</a></div>
                                </div>

                            <?php } else { ?>

                                <div id="picturePopUser">
                                    <div id="pictureText"><a id="Kategori"><?= $output['Kategori']; ?></a></div>
                                    <div id="pictureEdit"><a style="text-decoration: none" id=""></a></div>
                                    <div id="pictureDelete"><a style="text-decoration: none" id=""></a></div>
                                </div>

                            <?php } ?>

                        <?php } else if (session()->get('Pangkat') == "User") { ?>

                            <div id="picturePopUser">
                                <div id="pictureText"><a id="Kategori"><?= $output['Kategori']; ?></a></div>
                                <div id="pictureEdit"><a style="text-decoration: none" id=""></a></div>
                                <div id="pictureDelete"><a style="text-decoration: none" id=""></a></div>
                            </div>

                        <?php } else { ?>

                            <div id="picturePopUser">
                                <div id="pictureText"><a id="Kategori"><?= $output['Kategori']; ?></a></div>
                                <div id="pictureEdit"><a style="text-decoration: none" id=""></a></div>
                                <div id="pictureDelete"><a style="text-decoration: none" id=""></a></div>
                            </div>

                        <?php } ?>

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
                <div id="tanggalDiv">
                    <p id="isiTanggal">New, <?= $output['Tanggal']; ?></p>
                </div>
            <?php } else if ($output['View'] > 11) { ?>
                <div id="tanggalDiv">
                    <p id="isiTanggal"><?= $output['View']; ?> Views, <?= $output['Tanggal']; ?></p>
                </div>
            <?php } else { ?>
                <div id="tanggalDiv">
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