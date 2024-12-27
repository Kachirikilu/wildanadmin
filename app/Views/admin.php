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
            <!-- <div id="newDiv" class="newDiv"> -->
                <a href="https://unsri.ac.id/" target="_blank"><button id="pictureIMGButton">
                        <img src="/FileWeb/UNSRI.jpeg" id="pictureIMGUtama">
                    </button></a>
            <!-- </div> -->
            <!-- <div id="newDiv" class="newDiv">
                <a href="https://unsri.ac.id/" target="_blank"><button id="pictureIMGButton">
                        <img src="/FileWeb/UNSRI Logo.png" id="pictureIMGUtama">
                    </button></a>
            </div>
            <div id="newDiv" class="newDiv">
                <a href="https://unsri.ac.id/" target="_blank"><button id="pictureIMGButton">
                        <img src="/FileWeb/Wallpaper Preview/W1.jpg" id="pictureIMGUtama">
                    </button></a>
            </div> -->
        </div>

        <!-- <div class="nextPrev">
            <button id="prevButton">Previous</button>
            <button id="nextButton">Next</button>
        </div> -->

    </div>

    <!-- <style>
        .grid-itemUtama {
            width: 100%;
            border-radius: 0.6em;
            overflow: hidden;
            grid-column: 1 / span 2;
            aspect-ratio: 16 / 10;
        }

        #pictureDivUtama {
            display: flex;
            border-radius: 0.6em;
            width: 100%;
            transform: translateX(-70px);
            aspect-ratio: 16 / 10;
        }

        .newDiv {
            position: relative;
            aspect-ratio: 16 / 10;
            height: 100%;
        }

        #pictureIMGUtama,
        #pictureIMGButton {
            position: relative;
            z-index: 2;
            object-fit: cover;
            width: 100%;
            height: 100%;
            transition: 0.16s ease-out;
            background: transparent;
            border: 0;
        }

        .nextPrev {
            position: relative;
            background: blue;
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(-100%);
        }
    </style> -->



    <!-- <div>
        <?php
        // foreach ($topViews as $item) :
        ?>
            <li>
                <?php
                // echo $item['Judul'];
                ?> -
                <?php
                // echo $item['View'];
                ?>
                views</li>
        <?php
        // endforeach;
        ?>
    </div> -->

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
                                <div id="pictureEdit"><a href="/update_article/<?= $output['Slug']; ?>" style="text-decoration: none" id="EditText">Edit Data</a></div>
                                <div id="pictureDelete"><a href="/delete_article/<?= $output['Slug']; ?>" style="text-decoration: none" id="DeleteText">Delete</a></div>
                            </div>

                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                            <?php if ($output['Penulis'] !== "Wildan Athif Muttaqien") { ?>

                                <div id="picturePop">
                                    <div id="pictureText"><a id="Kategori"><?= $output['Kategori']; ?></a></div>
                                    <div id="pictureEdit"><a href="/update_article/<?= $output['Slug']; ?>" style="text-decoration: none" id="EditText">Edit Data</a></div>
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

</div>

<!-- Container -->

<?= $pager->links('home', 'home_pagination') ?>