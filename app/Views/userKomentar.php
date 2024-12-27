<!-- Komentar Box Lite -->

<div class="bodyKomentarLite">

    <div class="scroll-bodyKomentarLite">

        <?php $komentar = $kolomKomentar->where('IDArtikel', $createAdmin['ID'])->findAll() ?>

        <?php $komentarIklan = $user->where('ID', 1)->first() ?>

        <?php if ($createAdmin['View'] > 99) { ?>
            <table id="komentar-kolom">
                <tr>
                    <td rowspan="2" id="komentar-profil">

                        <div class="divPangkat">
                            <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                        </div>
                    </td>
                    <td id="komentar-name">
                        <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" id="komentar-isi">
                        <p class="komentar-isi">Artikel ini telah mencapai 100 kali dilihat! Ayo, dukung artikel ini supaya lebih berkembang.</p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        <?php } else if ($createAdmin['View'] > 49) { ?>
            <table id="komentar-kolom">
                <tr>
                    <td rowspan="2" id="komentar-profil">

                        <div class="divPangkat">
                            <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                        </div>
                    </td>
                    <td id="komentar-name">
                        <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" id="komentar-isi">
                        <p class="komentar-isi">Artikel ini telah mencapai 50 kali dilihat! Ayo, dukung artikel ini supaya lebih berkembang.</p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        <?php } ?>

        <table class="komentar-kolom" id="tableIklanForeachLite">
            <tr>
                <td rowspan="2" id="komentar-profil">

                    <div class="divPangkat">
                        <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                        <div></div>
                    </div>
                </td>
                <td id="komentar-name">
                    <div style="display: flex;">
                        <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                        <p class="komentar-name">
                            <ion-icon name="checkmark-circle" style="color: #1B9CFC; transform: scale(1.4) translate(2px, 1.4px)"></ion-icon>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="2" id="komentar-isi">
                    <table>
                        <tr>
                            <p class="komentar-isiX">Baca artikel lainnya yang serupa:</p>
                        </tr>
                        <tr>
                            <td>
                                <div class="multi-PictureForeach">
                                    <?php rsort($createAdminX);
                                    foreach ($createAdminX as $output) {
                                        if ($output['Kategori'] !== $createAdmin['Kategori']) {
                                        } else if ($output['Judul'] !== $createAdmin['Judul']) {
                                    ?>
                                            <div id="divForeach">
                                                <div id="divGambar"><a href="/beta_article/<?= $output['Slug'] ?>"><button style="border:0; background: transparent; width: 100%"><img src="/ArticlePicture/<?= $output['Picture'] ?>" class="komentar-pictureForeach"></button></a></div>
                                                <div id="divJudulForeach" style="display: flex;  justify-content: space-between;">
                                                    <div class="bungkusDivGambarForeach">
                                                        <p id="JudulForeach"><?= $output['Judul'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>

        <input type="hidden" id="dataOutputForeachLite" value="<?php rsort($createAdminX);
                                                                foreach ($createAdminX as $output) {
                                                                    if ($output['Kategori'] !== $createAdmin['Kategori']) {
                                                                    } elseif ($output['Judul'] !== $createAdmin['Judul']) { ?><?= $output['Picture'] ?><?php }
                                                                                                                                            } ?>">

        <script>
            let inputForeachLite = document.getElementById("dataOutputForeachLite");
            let tableForeachLite = document.getElementById("tableIklanForeachLite");
            if (inputForeachLite.value == "") {
                tableForeachLite.style.display = "none";
            }
        </script>

        <?php rsort($komentar) ?>
        <?php foreach ($komentar as $komentarOutput) { ?>
            <?php $komentarX = $user->where('ID', $komentarOutput['IDUserName'])->first() ?>

            <?php if ($komentarX !== null) { ?>

                <table id="komentar-kolom">
                    <tr>
                        <td rowspan="2" id="komentar-profil">

                            <div class="divPangkat">
                                <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarX['Profil'] ?>" class="komentar-profil-Picture"></div>
                                <div></div>
                            </div>

                        </td>
                        <td id="komentar-name">
                            <p class="komentar-name"><?= $komentarX['Name'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" id="komentar-isi">
                            <table>
                                <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                    <?php if ($komentarOutput['Picture'] == "") { ?>
                                        <tr>
                                            <p class="komentar-isi"><?= $komentarOutput['Komentar'] ?></p>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <p class="komentar-isiX"><?= $komentarOutput['Komentar'] ?></p>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                                <?php if ($komentarOutput['Picture'] !== "") { ?>
                                    <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                        <tr>
                                            <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-picture"></td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-pictureX"></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </table>
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            <?php } else { ?>

                <table id="komentar-kolom">
                    <tr>
                        <td rowspan="2" id="komentar-profil">
                            <div class="divPangkat">
                                <div class="komentar-profil"><img src="/ProfilUser/Error.jpg" class="komentar-profil-Picture"></div>
                                <div></div>
                            </div>
                        </td>
                        <td id="komentar-name">
                            <p class="komentar-name" style="color: red;">Account has been deleted</p>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" id="komentar-isi">
                            <table>
                                <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                    <?php if ($komentarOutput['Picture'] == "") { ?>
                                        <tr>
                                            <p class="komentar-isi"><?= $komentarOutput['Komentar'] ?></p>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <p class="komentar-isiX"><?= $komentarOutput['Komentar'] ?></p>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                                <?php if ($komentarOutput['Picture'] !== "") { ?>
                                    <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                        <tr>
                                            <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-picture"></td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-pictureX"></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </table>
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            <?php } ?>

        <?php } ?>

        <!-- Padding -->
        <div style="height:40px"></div> <!-- Padding -->
    </div>

</div>

<!-- Komentar Box Lite -->

</div>
<div id="layer2">

    <!-- Komentar Box -->

    <div class="bodyKomentar">

        <div class="scroll-bodyKomentar">
            <div class="scroll-bodyKomentarX">
                <div class="scroll-bodyKomentarT">

                    <?php $komentar = $kolomKomentar->where('IDArtikel', $createAdmin['ID'])->findAll() ?>

                    <input type="hidden" value="<?php $komentar ?>" name="komentarValue">

                    <?php $komentarIklan = $user->where('ID', 1)->first() ?>

                    <?php if ($createAdmin['View'] > 99) { ?>
                        <table id="komentar-kolom">
                            <tr>
                                <td rowspan="2" id="komentar-profil">

                                    <div class="divPangkat">
                                        <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                                    </div>
                                </td>
                                <td id="komentar-name">
                                    <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" id="komentar-isi">
                                    <p class="komentar-isi">Artikel ini telah mencapai 100 kali dilihat! Ayo, dukung artikel ini supaya lebih berkembang.</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    <?php } else if ($createAdmin['View'] > 49) { ?>
                        <table id="komentar-kolom">
                            <tr>
                                <td rowspan="2" id="komentar-profil">

                                    <div class="divPangkat">
                                        <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                                    </div>
                                </td>
                                <td id="komentar-name">
                                    <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" id="komentar-isi">
                                    <p class="komentar-isi">Artikel ini telah mencapai 50 kali dilihat! Ayo, dukung artikel ini supaya lebih berkembang.</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    <?php } ?>

                    <table class="komentar-kolom" id="tableIklanForeach">
                        <tr>
                            <td rowspan="2" id="komentar-profil">

                                <div class="divPangkat">
                                    <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                                    <div></div>
                                </div>
                            </td>
                            <td id="komentar-name">
                                <div style="display: flex;">
                                    <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                    <p class="komentar-name">
                                        <ion-icon name="checkmark-circle" style="color: #1B9CFC; transform: scale(1.4) translate(2px, 1.4px)"></ion-icon>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" id="komentar-isi">
                                <table>
                                    <tr>
                                        <p class="komentar-isiX">Baca artikel lainnya yang serupa:</p>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="multi-PictureForeach">
                                                <?php rsort($createAdminX);
                                                foreach ($createAdminX as $output) {
                                                    if ($output['Kategori'] !== $createAdmin['Kategori']) {
                                                    } else if ($output['Judul'] !== $createAdmin['Judul']) {
                                                ?>
                                                        <div id="divForeach">
                                                            <div id="divGambar"><a href="/beta_article/<?= $output['Slug'] ?>"><button style="border:0; background: transparent; width: 100%"><img src="/ArticlePicture/<?= $output['Picture'] ?>" class="komentar-pictureForeach"></button></a></div>
                                                            <div id="divJudulForeach" style="display: flex;  justify-content: space-between;">
                                                                <div class="bungkusDivGambarForeach">
                                                                    <p id="JudulForeach"><?= $output['Judul'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php }
                                                } ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>

                    <input type="hidden" id="dataOutputForeach" value="<?php rsort($createAdminX);
                                                                        foreach ($createAdminX as $output) {
                                                                            if ($output['Kategori'] !== $createAdmin['Kategori']) {
                                                                            } elseif ($output['Judul'] !== $createAdmin['Judul']) { ?><?= $output['Picture'] ?><?php }
                                                                                                                                                } ?>">

                    <script>
                        let inputForeach = document.getElementById("dataOutputForeach");
                        let tableForeach = document.getElementById("tableIklanForeach");
                        if (inputForeach.value == "") {
                            tableForeach.style.display = "none";
                        }
                    </script>

                    <?php rsort($komentar) ?>
                    <?php foreach ($komentar as $komentarOutput) { ?>
                        <?php $komentarX = $user->where('ID', $komentarOutput['IDUserName'])->first() ?>

                        <?php if ($komentarX !== null) { ?>

                            <table id="komentar-kolom">
                                <tr>
                                    <td rowspan="2" id="komentar-profil">

                                        <div class="divPangkat">
                                            <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarX['Profil'] ?>" class="komentar-profil-Picture"></div>
                                            <div></div>
                                        </div>
                                    </td>
                                    <td id="komentar-name">
                                        <p class="komentar-name"><?= $komentarX['Name'] ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2" id="komentar-isi">
                                        <table>
                                            <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                                <?php if ($komentarOutput['Picture'] == "") { ?>
                                                    <tr>
                                                        <p class="komentar-isi"><?= $komentarOutput['Komentar'] ?></p>
                                                    </tr>
                                                <?php } else { ?>
                                                    <tr>
                                                        <p class="komentar-isiX"><?= $komentarOutput['Komentar'] ?></p>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if ($komentarOutput['Picture'] !== "") { ?>
                                                <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                                    <tr>
                                                        <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-picture"></td>
                                                    </tr>
                                                <?php } else { ?>
                                                    <tr>
                                                        <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-pictureX"></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>

                        <?php } else { ?>

                            <table id="komentar-kolom">
                                <tr>
                                    <td rowspan="2" id="komentar-profil">
                                        <div class="komentar-profil"><img src="/ProfilUser/Error.jpg" class="komentar-profil-Picture"></div>
                                        <div></div>
                                    </td>
                                    <td id="komentar-name">
                                        <p class="komentar-name" style="color: red;">Account has been deleted</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2" id="komentar-isi">
                                        <table>
                                            <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                                <?php if ($komentarOutput['Picture'] == "") { ?>
                                                    <tr>
                                                        <p class="komentar-isi"><?= $komentarOutput['Komentar'] ?></p>
                                                    </tr>
                                                <?php } else { ?>
                                                    <tr>
                                                        <p class="komentar-isiX"><?= $komentarOutput['Komentar'] ?></p>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if ($komentarOutput['Picture'] !== "") { ?>
                                                <?php if ($komentarOutput['Komentar'] !== "") { ?>
                                                    <tr>
                                                        <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-picture"></td>
                                                    </tr>
                                                <?php } else { ?>
                                                    <tr>
                                                        <td><img src="/CommentPicture/<?= $komentarOutput['Picture'] ?>" class="komentar-pictureX"></td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>

                        <?php } ?>

                    <?php } ?>

                    <!-- Padding -->
                    <div style="height:21px"></div> <!-- Padding -->

                </div>
            </div>
        </div>

    </div>

    <!-- Komentar Box -->

</div>

</div>

</center>

</div>
<!-- Home -->

</div>

</body>

</html>