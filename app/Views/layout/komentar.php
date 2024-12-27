<?= csrf_field(); ?>

<form action="/komentarcontroller/save" id="formKomentar" method="post" enctype="multipart/form-data">
    <input type="file" accept="image/*" name="inputGambar" id="inputGambar" style="display: none;">
    <input class="input-dataKomentarInput" type="text" name="inputKomentar" id="inputKomentarUtama" placeholder="Type comment..." style="display: none;">
    <input class="input-dataKomentarInput" type="text" name="inputKomentarSecond" id="inputKomentarSecond" placeholder="Type comment..." required="" style="display: none;">
    <input type="hidden" value="<?= $createAdmin['ID'] ?>" name="inputID">

    <input type="hidden" name="inputTime" id="inputTimeK" required="">
    <input type="hidden" name="inputDate" id="inputDateK" required="">
</form>

<script type="text/javascript">
    function startTimeKomentar() {
        const date = new Date();

        let TimeK = document.getElementById("inputTimeK");
        let DateK = document.getElementById("inputDateK");

        let tahun = date.getFullYear();
        let bulanX = date.getMonth();
        let tanggalX = date.getDate();
        let hour = date.getHours();
        let minute = date.getMinutes();

        if (bulanX == 0) {
            bulan = "Jan";
        } else if (bulanX == 1) {
            bulan = "Feb";
        } else if (bulanX == 2) {
            bulan = "Mar";
        } else if (bulanX == 3) {
            bulan = "Apr";
        } else if (bulanX == 4) {
            bulan = "May";
        } else if (bulanX == 5) {
            bulan = "Jun";
        } else if (bulanX == 6) {
            bulan = "Jul";
        } else if (bulanX == 7) {
            bulan = "Aug";
        } else if (bulanX == 8) {
            bulan = "Sep";
        } else if (bulanX == 9) {
            bulan = "Oct";
        } else if (bulanX == 10) {
            bulan = "Nov";
        } else if (bulanX == 11) {
            bulan = "Dec";
        }

        if (tanggalX < 10) {
            tanggal = "0" + tanggalX;
        } else if (tanggalX > 9) {
            tanggal = tanggalX;
        }

        if (hour < 10) {
            if (minute < 10) {
                TimeK.value = "0" + hour + ":0" + minute;
            } else if (minute > 9) {
                TimeK.value = "0" + hour + ":" + minute;
            }
        } else if (hour > 9) {
            if (minute < 10) {
                TimeK.value = hour + ":0" + minute;
            } else if (minute > 9) {
                TimeK.value = hour + ":" + minute;
            }
        }

        DateK.value = bulan + " " + tanggal + " " + tahun;
        setTimeout(function() {
            startTimeK()
        }, 1000);
    }
</script>


<!-- Komentar Box Lite -->

<div class="bodyKomentarLite">
    <div class="scroll-bodyKomentarLite">

        <div class="user-typingKomentarLite">

            <?php if (session()->get('Pangkat') !== null) { ?>

                <div style="color: red; display: none;" id="outputValidationLite">
                    <?= $validation->getError('inputGambar') ?><br>
                    <div style="height: 17px;" id="outputValidationX"></div>
                </div>

                <div class="input-dataKomentar">
                    <div style="height: 37px">
                        <label class="input-gambarKomentar" for="inputGambar">
                            <ion-icon src="/FileWeb/Ionicons/File.svg" style="transform: scaleX(1.4) scaleY(1.4) translateY(1.2px); color: #444444;"></ion-icon>
                        </label>
                    </div>
                    <div class="widthInput"><input class="input-dataKomentarInput" type="text" id="inputMobile" placeholder="Type comment... <?= $validation->getError('inputGambar') ?>" required=""></div>
                    <div><button class="input-dataKomentarButton" id="on" form="formKomentar" onclick="startTimeKomentar()">
                            <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 2px"></ion-icon> Send
                        </button></div>
                </div>

            <?php } else { ?>

                <div class="input-dataKomentar">
                    <div style="height: 37px">
                        <label class="input-gambarKomentar" for="inputGambarMobile">
                            <ion-icon src="/FileWeb/Ionicons/File.svg" style="transform: scaleX(1.4) scaleY(1.4) translateY(1.2px); color: #444444;"></ion-icon>
                        </label>
                    </div>
                    <div class="widthInput"><input class="input-dataKomentarInput" type="text" id="inputMobile" placeholder="Please login first" required=""></div>
                    <div><a href="/login"><button class="input-dataKomentarButton" id="on" form="">
                                <ion-icon src="/FileWeb/Ionicons/Login.svg" style="transform: scaleX(1.4) scaleY(1.4) translateY(1.2px); margin-right: 2.72px;"></ion-icon> Login
                            </button></a></div>
                </div>

            <?php } ?>

            <div class="divKomentarPictureLiteX">
                <div class="divKomentarPictureLite" id="divKomentarPictureLite">
                    <table>
                        <tr>
                            <td align="right"><button onclick="closePicKomenLite()" form="" style="background: transparent; border: 0;">
                                    <ion-icon name="close-outline" style="transform: scale(1.6); margin-right: 5px; color: white;" id="putaranXKomentarLite"></ion-icon>
                                </button></td>
                        </tr>
                        <tr>
                            <td style="padding: 0 3px"><img id="komentarPictureLite" class="komentarPicture"></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <?php $komentar = $kolomKomentar->where('IDArtikel', $createAdmin['ID'])->findAll() ?>

        <?php $komentarIklan = $user->where('ID', 1)->first() ?>

        <?php if ($createAdmin['View'] > 99) { ?>
            <table class="komentar-kolom">
                <tr>
                    <td rowspan="2" id="komentar-profil">

                        <div class="divPangkat">
                            <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                            <div class="pangkatCEO">CEO</div>
                        </div>
                    </td>
                    <td id="komentar-name">
                        <div style="display: flex;">
                            <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                            <p class="komentar-name">
                                <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" id="komentar-isi">
                        <p class="komentar-isi">Artikel ini telah mencapai 100 kali dilihat! Ayo, dukung web ini supaya lebih ramai.</p>
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
            <table class="komentar-kolom">
                <tr>
                    <td rowspan="2" id="komentar-profil">

                        <div class="divPangkat">
                            <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                            <div class="pangkatCEO">CEO</div>
                        </div>
                    </td>
                    <td id="komentar-name">
                        <div style="display: flex;">
                            <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                            <p class="komentar-name">
                                <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" id="komentar-isi">
                        <p class="komentar-isi">Artikel ini telah mencapai 50 kali dilihat! Ayo, dukung web ini supaya lebih ramai.</p>
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
                        <div class="pangkatCEO">CEO</div>
                    </div>
                </td>
                <td id="komentar-name">
                    <div style="display: flex;">
                        <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                        <p class="komentar-name">
                            <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
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
                                                <div id="divGambar"><a href="/article/<?= $output['Slug'] ?>"><button style="border:0; background: transparent; width: 100%"><img src="/ArticlePicture/<?= $output['Picture'] ?>" class="komentar-pictureForeach"></button></a></div>
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

        <?php if ($createAdmin['Kategori'] == "Tugas" || $createAdmin['Kategori'] == "E-Learning") { ?>

            <?php $Tugas = $kolomTugas->where('IDArtikel', $createAdmin['ID'])->findAll() ?>
            <?php if (empty($Tugas)) : ?>
            <?php else : ?>

                <table class="komentar-kolom">
                    <tr>
                        <td rowspan="2" id="komentar-profil">

                            <div class="divPangkat">
                                <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                                <div class="pangkatCEO">CEO</div>
                            </div>
                        </td>
                        <td id="komentar-name">
                            <div style="display: flex;">
                                <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                <p class="komentar-name">
                                    <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" id="komentar-isi">
                            <p class="komentar-isi">Yang sudah mengumpulkan tugas:</p>

                            <table class="komentar-list" id="komentarlite-list">
                                <tbody>

                                    <?php foreach ($Tugas as $TugasOutput) { ?>

                                        <?php
                                        if ($TugasOutput['Kelas'] == "A_IDL") {
                                            $KelasOutput = 'A Indralaya';
                                        } else if ($TugasOutput['Kelas'] == "B_IDL") {
                                            $KelasOutput = 'B Indralaya';
                                        } else if ($TugasOutput['Kelas'] == "A_PLG") {
                                            $KelasOutput = 'A Palembang';
                                        } else if ($TugasOutput['Kelas'] == "B_PLG") {
                                            $KelasOutput = 'B Palembang';
                                        }
                                        ?>

                                        <tr>
                                            <td>
                                                <?php if (session()->get('Pangkat') == "CEO" || session()->get('Pangkat') == "Admin") { ?>
                                                    <?= $TugasOutput['Nama'] ?> (<?= $TugasOutput['NIM'] ?>), Kelas <?= $KelasOutput ?>.
                                                    <p style="font-size: small; margin: 2px 0 4px 0;"><?= $TugasOutput['Time'] ?>, <?= $TugasOutput['Date'] ?></p>


                                                    <a class="adapTebal" href="/FileTugas/<?= $createAdmin['Judul'] ?>/<?= $TugasOutput['Kelas'] ?>/<?= $TugasOutput['File'] ?>" download>Unduh Tugas</a>


                                                <?php } else { ?>
                                                    <?php if ($createAdmin['Kategori'] !== "Tugas") { ?>
                                                        <?= $TugasOutput['Nama'] ?> (<?= $TugasOutput['NIM'] ?>), Kelas <?= $KelasOutput ?>.
                                                        <p style="font-size: small; margin: 2px 0 4px 0;"><?= $TugasOutput['Time'] ?>, <?= $TugasOutput['Date'] ?></p>
                                                    <?php } else { ?>
                                                        XXXXXXXXXXXX (0304XXXXXXXXXX), Kelas <?= $KelasOutput ?>.
                                                        <p style="font-size: small; margin: 2px 0 4px 0;"><?= $TugasOutput['Time'] ?>, <?= $TugasOutput['Date'] ?></p>
                                                    <?php } ?>
                                                <?php } ?>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            var table = document.getElementById('komentarlite-list');
                                            var tbody = table.querySelector('tbody');
                                            var rows = tbody.getElementsByTagName('tr');

                                            // Tambahkan nomor ke setiap baris
                                            for (var i = 0; i < rows.length; i++) {
                                                var cell = document.createElement('th');
                                                cell.textContent = (i + 1) + "."; // Menambahkan tanda titik setelah nomor
                                                rows[i].insertBefore(cell, rows[i].firstChild);
                                            }
                                        });
                                    </script>

                                </tbody>
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

            <?php endif; ?>

        <?php } ?>

        <?php rsort($komentar) ?>
        <?php foreach ($komentar as $komentarOutput) { ?>
            <?php $komentarX = $user->where('ID', $komentarOutput['IDUserName'])->first() ?>

            <?php if ($komentarX !== null) { ?>

                <table class="komentar-kolom">
                    <tr>
                        <td rowspan="2" id="komentar-profil">

                            <div class="divPangkat">
                                <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarX['Profil'] ?>" class="komentar-profil-Picture"></div>

                                <?php if ($komentarX['Pangkat'] == "CEO") { ?>
                                    <div class="pangkatCEO"><?= $komentarX['Pangkat'] ?></div>
                                <?php } else if ($komentarX['Pangkat'] == "Admin") { ?>
                                    <div class="pangkatAdmin"><?= $komentarX['Pangkat'] ?><div>
                                        <?php } else { ?>
                                            <div></div>
                                        <?php } ?>

                                        </div>

                        </td>
                        <td id="komentar-name">
                            <?php if ($komentarX['Pangkat'] == "CEO") { ?>
                                <div style="display: flex;">
                                    <p class="komentar-name"><?= $komentarX['Name'] ?></p>
                                    <p class="komentar-name">
                                        <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                                    </p>
                                </div>
                            <?php } else { ?>
                                <p class="komentar-name"><?= $komentarX['Name'] ?></p>
                            <?php } ?>
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
                        <?php if (session()->get('Pangkat') == "CEO") { ?>

                            <?php if (session()->get('ID') == $komentarOutput['IDUserName']) { ?>
                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div style="display: flex;">
                                            <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                            <a href="/edit_comment/<?= $komentarOutput['ID']; ?>" class="editKomentar">ㅤ</a>
                                        </div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            <?php } else if ($komentarX['Pangkat'] !== "CEO") { ?>
                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div style="display: flex;">
                                            <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                        </div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            <?php } else if (session()->get('Pangkat') == "CEO") { ?>
                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div></div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            <?php } ?>

                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                            <?php if (session()->get('ID') == $komentarOutput['IDUserName']) { ?>
                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div style="display: flex;">
                                            <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                            <a href="/edit_comment/<?= $komentarOutput['ID']; ?>" class="editKomentar">ㅤ</a>
                                        </div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            <?php } else if ($komentarX['Pangkat'] == "CEO") { ?>
                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div></div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            <?php } else if ($komentarX['Pangkat'] !== "CEO") { ?>
                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div style="display: flex;">
                                            <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                        </div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            <?php } ?>

                        <?php } else { ?>

                            <?php if (session()->get('ID') == $komentarOutput['IDUserName']) { ?>
                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div style="display: flex;">
                                            <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                            <a href="/edit_comment/<?= $komentarOutput['ID']; ?>" class="editKomentar">ㅤ</a>
                                        </div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?>></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>

                            <?php } else { ?>

                                <td class="komentar-delete">
                                    <div class="tanggalKomentar">
                                        <div></div>
                                        <div>
                                            <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                <p><?= $komentarOutput['Time'] ?></p>
                                            <?php } else { ?>
                                                <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>

                            <?php } ?>

                        <?php } ?>
                    </tr>
                </table>

            <?php } else { ?>

                <table class="komentar-kolom">
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
                        <?php if (session()->get('Pangkat') == "CEO") { ?>
                            <td class="komentar-delete">
                                <div class="tanggalKomentar">
                                    <div style="display: flex;">
                                        <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                    </div>
                                    <div>
                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                            <p><?= $komentarOutput['Time'] ?></p>
                                        <?php } else { ?>
                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </td>
                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>
                            <td class="komentar-delete">
                                <div class="tanggalKomentar">
                                    <div style="display: flex;">
                                        <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                    </div>
                                    <div>
                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                            <p><?= $komentarOutput['Time'] ?></p>
                                        <?php } else { ?>
                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </td>
                        <?php } else if (session()->get('Pangkat') == "User") { ?>
                            <td class="komentar-delete">
                                <div class="tanggalKomentar">
                                    <div></div>
                                    <div>
                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                            <p><?= $komentarOutput['Time'] ?></p>
                                        <?php } else { ?>
                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </td>
                        <?php } else if (session()->get('Pangkat') == null) { ?>
                            <td class="komentar-delete">
                                <div class="tanggalKomentar">
                                    <div></div>
                                    <div>
                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                            <p><?= $komentarOutput['Time'] ?></p>
                                        <?php } else { ?>
                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </td>
                        <?php } ?>
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
                        <table class="komentar-kolom">
                            <tr>
                                <td rowspan="2" id="komentar-profil">

                                    <div class="divPangkat">
                                        <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                                        <div class="pangkatCEO">CEO</div>
                                    </div>
                                </td>
                                <td id="komentar-name">
                                    <div style="display: flex;">
                                        <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                        <p class="komentar-name">
                                            <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" id="komentar-isi">
                                    <p class="komentar-isi">Artikel ini telah mencapai 100 kali dilihat! Ayo, dukung web ini supaya lebih ramai.</p>
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
                        <table class="komentar-kolom">
                            <tr>
                                <td rowspan="2" id="komentar-profil">

                                    <div class="divPangkat">
                                        <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                                        <div class="pangkatCEO">CEO</div>
                                    </div>
                                </td>
                                <td id="komentar-name">
                                    <div style="display: flex;">
                                        <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                        <p class="komentar-name">
                                            <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" id="komentar-isi">
                                    <p class="komentar-isi">Artikel ini telah mencapai 50 kali dilihat! Ayo, dukung web ini supaya lebih ramai.</p>
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
                                    <div class="pangkatCEO">CEO</div>
                                </div>
                            </td>
                            <td id="komentar-name">
                                <div style="display: flex;">
                                    <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                    <p class="komentar-name">
                                        <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
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
                                                            <div id="divGambar"><a href="/article/<?= $output['Slug'] ?>"><button style="border: 0; background: transparent; width: 100%"><img src="/ArticlePicture/<?= $output['Picture'] ?>" class="komentar-pictureForeach"></button></a></div>
                                                            <div id="divJudulForeach" style="display: flex; justify-content: space-between;">
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

                    <?php if ($createAdmin['Kategori'] == "Tugas" || $createAdmin['Kategori'] == "E-Learning") { ?>

                        <?php $Tugas = $kolomTugas->where('IDArtikel', $createAdmin['ID'])->findAll() ?>
                        <?php if (empty($Tugas)) : ?>
                        <?php else : ?>

                            <table class="komentar-kolom">
                                <tr>
                                    <td rowspan="2" id="komentar-profil">

                                        <div class="divPangkat">
                                            <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarIklan['Profil'] ?>" class="komentar-profil-Picture"></div>
                                            <div class="pangkatCEO">CEO</div>
                                        </div>
                                    </td>
                                    <td id="komentar-name">
                                        <div style="display: flex;">
                                            <p class="komentar-name"><?= $komentarIklan['Name'] ?></p>
                                            <p class="komentar-name">
                                                <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2" id="komentar-isi">
                                        <p class="komentar-isi">Yang sudah mengumpulkan tugas:</p>

                                        <table class="komentar-list" id="komentar-list">
                                            <tbody>

                                                <?php foreach ($Tugas as $TugasOutput) { ?>

                                                    <?php
                                                    if ($TugasOutput['Kelas'] == "A_IDL") {
                                                        $KelasOutput = 'A Indralaya';
                                                    } else if ($TugasOutput['Kelas'] == "B_IDL") {
                                                        $KelasOutput = 'B Indralaya';
                                                    } else if ($TugasOutput['Kelas'] == "A_PLG") {
                                                        $KelasOutput = 'A Palembang';
                                                    } else if ($TugasOutput['Kelas'] == "B_PLG") {
                                                        $KelasOutput = 'B Palembang';
                                                    }
                                                    ?>

                                                    <tr>
                                                        <td>
                                                            <?php if (session()->get('Pangkat') == "CEO" || session()->get('Pangkat') == "Admin") { ?>
                                                                <?= $TugasOutput['Nama'] ?> (<?= $TugasOutput['NIM'] ?>), Kelas <?= $KelasOutput ?>.
                                                                <p style="font-size: small; margin: 2px 0 4px 0;"><?= $TugasOutput['Time'] ?>, <?= $TugasOutput['Date'] ?></p>


                                                                <a class="adapTebal" href="/FileTugas/<?= $createAdmin['Judul'] ?>/<?= $TugasOutput['Kelas'] ?>/<?= $TugasOutput['File'] ?>" download>Unduh Tugas</a>


                                                            <?php } else { ?>
                                                                <?php if ($createAdmin['Kategori'] !== "Tugas") { ?>
                                                                    <?= $TugasOutput['Nama'] ?> (<?= $TugasOutput['NIM'] ?>), Kelas <?= $KelasOutput ?>.
                                                                    <p style="font-size: small; margin: 2px 0 4px 0;"><?= $TugasOutput['Time'] ?>, <?= $TugasOutput['Date'] ?></p>
                                                                <?php } else { ?>
                                                                    XXXXXXXXXXXX (0304XXXXXXXXXX), Kelas <?= $KelasOutput ?>.
                                                                    <p style="font-size: small; margin: 2px 0 4px 0;"><?= $TugasOutput['Time'] ?>, <?= $TugasOutput['Date'] ?></p>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>

                                                <?php } ?>

                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        var table = document.getElementById('komentar-list');
                                                        var tbody = table.querySelector('tbody');
                                                        var rows = tbody.getElementsByTagName('tr');

                                                        // Tambahkan nomor ke setiap baris
                                                        for (var i = 0; i < rows.length; i++) {
                                                            var cell = document.createElement('th');
                                                            cell.textContent = (i + 1) + "."; // Menambahkan tanda titik setelah nomor
                                                            rows[i].insertBefore(cell, rows[i].firstChild);
                                                        }
                                                    });
                                                </script>

                                            </tbody>
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

                        <?php endif; ?>

                    <?php } ?>

                    <?php rsort($komentar) ?>
                    <?php foreach ($komentar as $komentarOutput) { ?>
                        <?php $komentarX = $user->where('ID', $komentarOutput['IDUserName'])->first() ?>

                        <?php if ($komentarX !== null) { ?>

                            <table class="komentar-kolom">
                                <tr>
                                    <td rowspan="2" id="komentar-profil">

                                        <div class="divPangkat">
                                            <div class="komentar-profil"><img src="/ProfilUser/<?= $komentarX['Profil'] ?>" class="komentar-profil-Picture"></div>

                                            <?php if ($komentarX['Pangkat'] == "CEO") { ?>
                                                <div class="pangkatCEO"><?= $komentarX['Pangkat'] ?></div>
                                            <?php } else if ($komentarX['Pangkat'] == "Admin") { ?>
                                                <div class="pangkatAdmin"><?= $komentarX['Pangkat'] ?><div>
                                                    <?php } else { ?>
                                                        <div></div>
                                                    <?php } ?>
                                                    </div>

                                    </td>
                                    <td id="komentar-name">
                                        <?php if ($komentarX['Pangkat'] == "CEO") { ?>
                                            <div style="display: flex;">
                                                <p class="komentar-name"><?= $komentarX['Name'] ?></p>
                                                <p class="komentar-name">
                                                    <ion-icon src="/FileWeb/Ionicons/Verified.svg" style="color: #1b9cfc; transform: scale(1.4) translate(2px, 1.42px)"></ion-icon>
                                                </p>
                                            </div>
                                        <?php } else { ?>
                                            <p class="komentar-name"><?= $komentarX['Name'] ?></p>
                                        <?php } ?>
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

                                    <?php if (session()->get('Pangkat') == "CEO") { ?>

                                        <?php if (session()->get('ID') == $komentarOutput['IDUserName']) { ?>
                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div style="display: flex;">
                                                        <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                                        <a href="/edit_comment/<?= $komentarOutput['ID']; ?>" class="editKomentar">ㅤ</a>
                                                    </div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php } else if ($komentarX['Pangkat'] !== "CEO") { ?>
                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div style="display: flex;">
                                                        <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                                    </div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php } else if (session()->get('Pangkat') == "CEO") { ?>
                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div></div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php } ?>

                                    <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                                        <?php if (session()->get('ID') == $komentarOutput['IDUserName']) { ?>
                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div style="display: flex;">
                                                        <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                                        <a href="/edit_comment/<?= $komentarOutput['ID']; ?>" class="editKomentar">ㅤ</a>
                                                    </div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php } else if ($komentarX['Pangkat'] == "CEO") { ?>
                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div></div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php } else if ($komentarX['Pangkat'] !== "CEO") { ?>
                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div style="display: flex;">
                                                        <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                                    </div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?>></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php } ?>

                                    <?php } else { ?>

                                        <?php if (session()->get('ID') == $komentarOutput['IDUserName']) { ?>
                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div style="display: flex;">
                                                        <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                                        <a href="/edit_comment/<?= $komentarOutput['ID']; ?>" class="editKomentar">ㅤ</a>
                                                    </div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?>></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>

                                        <?php } else { ?>

                                            <td class="komentar-delete">
                                                <div class="tanggalKomentar">
                                                    <div></div>
                                                    <div>
                                                        <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                            <p><?= $komentarOutput['Time'] ?></p>
                                                        <?php } else { ?>
                                                            <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>

                                        <?php } ?>

                                    <?php } ?>

                                </tr>
                            </table>

                        <?php } else { ?>

                            <table class="komentar-kolom">
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
                                    <?php if (session()->get('Pangkat') == "CEO") { ?>
                                        <td class="komentar-delete">
                                            <div class="tanggalKomentar">
                                                <div style="display: flex;">
                                                    <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                                </div>
                                                <div>
                                                    <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                        <p><?= $komentarOutput['Time'] ?></p>
                                                    <?php } else { ?>
                                                        <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    <?php } else if (session()->get('Pangkat') == "Admin") { ?>
                                        <td class="komentar-delete">
                                            <div class="tanggalKomentar">
                                                <div style="display: flex;">
                                                    <a href="/delete_comment/<?= $komentarOutput['ID']; ?>" class="deleteKomentar">ㅤ</a>
                                                </div>
                                                <div>
                                                    <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                        <p><?= $komentarOutput['Time'] ?></p>
                                                    <?php } else { ?>
                                                        <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    <?php } else if (session()->get('Pangkat') == "User") { ?>
                                        <td class="komentar-delete">
                                            <div class="tanggalKomentar">
                                                <div></div>
                                                <div>
                                                    <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                        <p><?= $komentarOutput['Time'] ?></p>
                                                    <?php } else { ?>
                                                        <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    <?php } else if (session()->get('Pangkat') == null) { ?>
                                        <td class="komentar-delete">
                                            <div class="tanggalKomentar">
                                                <div></div>
                                                <div>
                                                    <?php if (session()->get('DateSessionL') == $komentarOutput['Date']) { ?>
                                                        <p><?= $komentarOutput['Time'] ?></p>
                                                    <?php } else { ?>
                                                        <p><?= $komentarOutput['Time'] ?>, <?= $komentarOutput['Date'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    <?php } ?>
                                </tr>
                            </table>

                        <?php } ?>

                    <?php } ?>

                    <!-- Padding -->
                    <div style="height:21px"></div> <!-- Padding -->

                </div>
            </div>
        </div>

        <input type="hidden" value="<?= $validation->getError('inputGambar') ?>" id="validation">

        <div class="user-typingKomentar">
            <div style="color: red; display: none;" id="outputValidation">
                <?= $validation->getError('inputGambar') ?><br>
                <div style="height: 7px;" id="outputValidationX"></div>
            </div>
            <div class="divKomentarPicture" id="divKomentarPicture">
                <table>
                    <tr>
                        <td align="right"><button onclick="closePicKomen()" form="" style="background: transparent; border: 0;">
                                <ion-icon src="/FileWeb/Ionicons/Close.svg" style="transform: scale(1.6); margin-right: 5px; color: white;" id="putaranXKomentar"></ion-icon>
                            </button></td>
                    </tr>
                    <tr>
                        <td style="padding: 0 3px;"><img id="komentarPicture" class="komentarPicture"></td>
                    </tr>
                </table>
            </div>
            <script type="text/javascript">
                validation = document.getElementById("validation");
                outputValidation = document.getElementById("outputValidation");
                outputValidationLite = document.getElementById("outputValidationLite");

                if (validation.value !== "") {
                    outputValidation.style.display = "inline"
                    outputValidationLite.style.display = "inline"
                }
            </script>

            <div class="input-dataKomentar">

                <?php if (session()->get('Pangkat') !== null) { ?>

                    <div>
                        <label class="input-gambarKomentar" for="inputGambar">
                            <ion-icon src="/FileWeb/Ionicons/File.svg" style="transform: scaleX(1.4) scaleY(1.4) translateY(1.2px); color: #444444;"></ion-icon>
                        </label>
                        <input class="input-dataKomentarInput" type="text" id="inputDesktop" placeholder="Type comment... <?= $validation->getError('inputGambar') ?>" required="">
                    </div>
                    <div><button class="input-dataKomentarButton" id="on" form="formKomentar" onclick="startTimeKomentar()">
                            <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 2px"></ion-icon> Send
                        </button></div>

                <?php } else { ?>

                    <div>
                        <label class="input-gambarKomentar" for="inputGambarDesktop">
                            <ion-icon src="/FileWeb/Ionicons/File.svg" style="transform: scaleX(1.4) scaleY(1.4) translateY(1.2px); color: #444444;"></ion-icon>
                        </label><input class="input-dataKomentarInput" type="text" id="inputDesktop" placeholder="Please login first" required="">
                    </div>
                    <div><a href="/login"><button class="input-dataKomentarButton" id="on" form="">
                                <ion-icon src="/FileWeb/Ionicons/Login.svg" style="transform: scaleX(1.4) scaleY(1.4) translateY(1.2px); margin-right: 2.72px;"></ion-icon> Login
                            </button></a></div>

                <?php } ?>

            </div>

        </div>

        <script language="JavaScript">
            let inputPictureDesktop = document.getElementById("inputGambarDesktop");
            let inputPictureMobile = document.getElementById("inputGambarMobile");
            let inputDesktop = document.getElementById("inputDesktop");
            let inputMobile = document.getElementById("inputMobile");
            let inputUtama = document.getElementById("inputKomentarUtama")
            let inputSecond = document.getElementById("inputKomentarSecond")
            inputDesktop.onkeyup = inputDesktop.onkeypress = function() {
                inputMobile.value = this.value;
                inputUtama.value = this.value;
                inputSecond.value = this.value;
            }
            inputMobile.onkeyup = inputMobile.onkeypress = function() {
                inputDesktop.value = this.value;
                inputUtama.value = this.value;
                inputSecond.value = this.value;
            }

            inputDesktop.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("on").click();
                }
            });
            inputMobile.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("on").click();
                }
            });
        </script>

    </div>

    <!-- Komentar Box -->

</div>

</div>

</center>