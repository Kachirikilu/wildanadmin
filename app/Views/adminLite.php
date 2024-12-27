<!-- Home -->
<div id="home">

    <!-- Container -->

    <div id="grid-container">

        <div id="grid-itemUtama">
            <div id="pictureDivUtama" style="background-image: url(/FileWeb/UNSRI.jpeg);"></div>
        </div>

        <?php rsort($createAdmin) ?>
        <?php foreach ($createAdmin as $output) { ?>


            <div id="grid-item">
                <a href="/home/detail/<?= $output['ID']; ?>" style="text-decoration: none; color: black">
                    <button id="buttonDetail">
                        <div id="pictureDiv">
                            <div id="pictureDiv2"><img src="/ArticlePicture/<?= $output['Picture']; ?>" id="pictureIMG"></div>

                            <?php if (session()->get('Pangkat') !== "User") { ?>

                                <div id="picturePop">
                                    <div id="pictureText"><a>Tools</a></div>
                                    <div id="pictureEdit"><a href="/home/edit/<?= $output['ID']; ?>" style="text-decoration: none; color: black" id="EditText">Edit</a></div>
                                    <div id="pictureDelete"><a href="/home/deleteview/<?= $output['ID']; ?>" style="text-decoration: none; color: black" id="DeleteText">Delete</a></div>
                                </div>

                            <?php } else { ?>

                                <div id="picturePopUser">
                                    <div id="pictureText"><a>News</a></div>
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
            </div>

        <?php } ?>

    </div>

    <!-- Container -->

    <?= $pager->links('home', 'home_pagination') ?>