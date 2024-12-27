<!-- Data User Slider -->

<ul id="ul-top3DU" class="ul-top3DU" style="display: none;">
    <div id="center">
        <div id="centerDU">
            <div id="container-DataUser">


                <?php foreach ($userX as $datauser) { ?>

                    <?php if ($datauser['Pangkat'] == "CEO") { ?>

                        <div id="grid-DataUser">
                            <div class="du-slide">

                                <div class="dp-slideL">
                                    <div class="dp-slideLX">

                                        <?php if ($datauser['UserName'] !== session()->get('UserName')) { ?>
                                            <a href="/chat_viewer/<?= $datauser['ID']; ?>"><button id="du-slidePicture"><img src="/ProfilUser/<?= $datauser['Profil']; ?>" class="dp-slidePictureX"></button></a>
                                        <?php } else { ?>
                                            <button id="du-slidePicture"><img src="/ProfilUser/<?= $datauser['Profil']; ?>" class="dp-slidePictureX"></button>
                                        <?php } ?>

                                        <?php if (session()->get('Pangkat') == "CEO") { ?>

                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>

                                                <?php if ($datauser['UserName'] == session()->get('UserName')) { ?>
                                                    <div id="du-slidePictureText">
                                                        <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                        <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div id="du-slidePictureTextNone">
                                                        <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    </div>
                                                <?php } ?>


                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } else { ?>

                                            <?php if ($datauser['UserName'] == session()->get('UserName')) { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "CEO") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="dp-slideR">
                                    <div class="dp-slideRxL">
                                        <div class="textBlock">Nama</div>
                                        <div class="textBlock">Username</div>
                                        <div class="textBlock">Status</div>
                                        <div class="textBlock">Email</div>
                                        <div class="textBlock">WhatsApp</div>
                                        <div class="textBlock">Instagram</div>
                                        <div class="textBlock">Facebook</div>
                                    </div>
                                    <div class="dp-slideRxC">
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                    </div>
                                    <div class="dp-slideRxR">
                                        <div class="textBlock"><?= $datauser['Name']; ?></div>
                                        <div class="textBlock"><?= $datauser['UserName']; ?></div>
                                        <div class="textBlock">
                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>
                                                <p style="color: #fff30d; font-weight: 600;"><?= $datauser['Pangkat'] ?></p>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <p style="color: #3be2ff; font-weight: 600;"><?= $datauser['Pangkat'] ?></p>
                                            <?php } else { ?>
                                                <?= $datauser['Pangkat'] ?>
                                            <?php } ?>
                                        </div>
                                        <div class="textBlock"><?= $datauser['Email']; ?></div>
                                        <div class="textBlock"><?= $datauser['WhatsApp']; ?></div>
                                        <div class="textBlock"><?= $datauser['Instagram']; ?></div>
                                        <div class="textBlock"><?= $datauser['Facebook']; ?></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php } ?>

                <?php } ?>

                <?php foreach ($userX as $datauser) { ?>

                    <?php if ($datauser['Pangkat'] == "Admin") { ?>

                        <div id="grid-DataUser">
                            <div class="du-slide">

                                <div class="dp-slideL">
                                    <div class="dp-slideLX">

                                        <?php if ($datauser['UserName'] !== session()->get('UserName')) { ?>
                                            <a href="/chat_viewer/<?= $datauser['ID']; ?>"><button id="du-slidePicture"><img src="/ProfilUser/<?= $datauser['Profil']; ?>" class="dp-slidePictureX"></button></a>
                                        <?php } else { ?>
                                            <button id="du-slidePicture"><img src="/ProfilUser/<?= $datauser['Profil']; ?>" class="dp-slidePictureX"></button>
                                        <?php } ?>

                                        <?php if (session()->get('Pangkat') == "CEO") { ?>

                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>

                                                <?php if ($datauser['UserName'] == session()->get('UserName')) { ?>
                                                    <div id="du-slidePictureText">
                                                        <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                        <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div id="du-slidePictureTextNone">
                                                        <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    </div>
                                                <?php } ?>


                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>

                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } else { ?>

                                            <?php if ($datauser['UserName'] == session()->get('UserName')) { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "CEO") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="dp-slideR">
                                    <div class="dp-slideRxL">
                                        <div class="textBlock">Nama</div>
                                        <div class="textBlock">Username</div>
                                        <div class="textBlock">Status</div>
                                        <div class="textBlock">Email</div>
                                        <div class="textBlock">WhatsApp</div>
                                        <div class="textBlock">Instagram</div>
                                        <div class="textBlock">Facebook</div>
                                    </div>
                                    <div class="dp-slideRxC">
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                    </div>
                                    <div class="dp-slideRxR">
                                        <div class="textBlock"><?= $datauser['Name']; ?></div>
                                        <div class="textBlock"><?= $datauser['UserName']; ?></div>
                                        <div class="textBlock">
                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>
                                                <p style="color: #fff30d; font-weight: 600;"><?= $datauser['Pangkat'] ?></p>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <p style="color: #3be2ff; font-weight: 600;"><?= $datauser['Pangkat'] ?></p>
                                            <?php } else { ?>
                                                <?= $datauser['Pangkat'] ?>
                                            <?php } ?>
                                        </div>
                                        <div class="textBlock"><?= $datauser['Email']; ?></div>
                                        <div class="textBlock"><?= $datauser['WhatsApp']; ?></div>
                                        <div class="textBlock"><?= $datauser['Instagram']; ?></div>
                                        <div class="textBlock"><?= $datauser['Facebook']; ?></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php } ?>

                <?php } ?>

                <?php foreach ($userX as $datauser) { ?>

                    <?php if ($datauser['Pangkat'] == "User") { ?>

                        <div id="grid-DataUser">
                            <div class="du-slide">

                                <div class="dp-slideL">
                                    <div class="dp-slideLX">

                                        <?php if ($datauser['UserName'] !== session()->get('UserName')) { ?>
                                            <a href="/chat_viewer/<?= $datauser['ID']; ?>"><button id="du-slidePicture"><img src="/ProfilUser/<?= $datauser['Profil']; ?>" class="dp-slidePictureX"></button></a>
                                        <?php } else { ?>
                                            <button id="du-slidePicture"><img src="/ProfilUser/<?= $datauser['Profil']; ?>" class="dp-slidePictureX"></button>
                                        <?php } ?>

                                        <?php if (session()->get('Pangkat') == "CEO") { ?>

                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>

                                                <?php if ($datauser['UserName'] == session()->get('UserName')) { ?>
                                                    <div id="du-slidePictureText">
                                                        <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                        <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div id="du-slidePictureTextNone">
                                                        <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    </div>
                                                <?php } ?>


                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>

                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } else { ?>

                                            <?php if ($datauser['UserName'] == session()->get('UserName')) { ?>
                                                <div id="du-slidePictureText">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                    <div id="pictureDelete"><a href="/userdata_delete/<?= $datauser['UserName']; ?>" style="text-decoration: none;" id="pictureTextD">Delete</a></div>
                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "CEO") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextCEO"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextAdmin"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } else { ?>
                                                <div id="du-slidePictureTextNone">
                                                    <div id="pictureTextUser"><a href="/userdata_viewer/<?= $datauser['ID']; ?>" style="text-decoration: none; color: black"><?= $datauser['Pangkat']; ?></a></div>
                                                </div>
                                            <?php } ?>

                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="dp-slideR">
                                    <div class="dp-slideRxL">
                                        <div class="textBlock">Nama</div>
                                        <div class="textBlock">Username</div>
                                        <div class="textBlock">Status</div>
                                        <div class="textBlock">Email</div>
                                        <div class="textBlock">WhatsApp</div>
                                        <div class="textBlock">Instagram</div>
                                        <div class="textBlock">Facebook</div>
                                    </div>
                                    <div class="dp-slideRxC">
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                        <div>:</div>
                                    </div>
                                    <div class="dp-slideRxR">
                                        <div class="textBlock"><?= $datauser['Name']; ?></div>
                                        <div class="textBlock"><?= $datauser['UserName']; ?></div>
                                        <div class="textBlock">
                                            <?php if ($datauser['Pangkat'] == "CEO") { ?>
                                                <p style="color: #fff30d; font-weight: 600;"><?= $datauser['Pangkat'] ?></p>
                                            <?php } else if ($datauser['Pangkat'] == "Admin") { ?>
                                                <p style="color: #3be2ff; font-weight: 600;"><?= $datauser['Pangkat'] ?></p>
                                            <?php } else { ?>
                                                <?= $datauser['Pangkat'] ?>
                                            <?php } ?>
                                        </div>
                                        <div class="textBlock"><?= $datauser['Email']; ?></div>
                                        <div class="textBlock"><?= $datauser['WhatsApp']; ?></div>
                                        <div class="textBlock"><?= $datauser['Instagram']; ?></div>
                                        <div class="textBlock"><?= $datauser['Facebook']; ?></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php } ?>

                <?php } ?>

            </div>
        </div>
    </div>
</ul>

<!-- Data User Slider -->

<!-- Data Profil Slider -->

<ul id="ul-top3DP" class="ul-top3DP" style="display: none;">

    <div id="grid-DataProfil">
        <div class="dp-slide dp-slide-blur">

            <div class="dp-slideL">
                <div class="dp-slideLX">

                    <?php if (session()->get('Pangkat') !== null) { ?>
                        <div id="dp-slidePicture"><img src="/ProfilUser/<?= session()->get('Profil') ?>" class="dp-slidePictureX"></div>
                    <?php } ?>

                    <div id="duX-slidePictureText">
                        <?php if (session()->get('Pangkat') == "CEO") { ?>
                            <div id="pictureTextCEOX"><a style="text-decoration: none; color: black"><?= session()->get('Pangkat'); ?></a></div>
                        <?php } else if (session()->get('Pangkat') == "Admin") { ?>
                            <div id="pictureTextAdminX"><a style="text-decoration: none; color: black"><?= session()->get('Pangkat'); ?></a></div>
                        <?php } else { ?>
                            <div id="pictureTextUserX"><a style="text-decoration: none; color: black"><?= session()->get('Pangkat'); ?></a></div>
                        <?php } ?>
                    </div>



                </div>
            </div>

            <div id="dp-slideR">
                <div class="dp-slideR1">
                    <div class="dp-slideRxL">
                        <div class="textBlock">Nama</div>
                        <div class="textBlock">Username</div>
                        <div class="textBlock">Status</div>
                        <div class="textBlock">Email</div>
                        <div class="textBlock">WhatsApp</div>
                        <div class="textBlock">Instagram</div>
                        <div class="textBlock">Facebook</div>
                        <div class="textBlock">View</div>
                    </div>
                    <div class="dp-slideRxC">
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                    </div>
                    <div class="dp-slideRxR">
                        <div class="textBlock"><?= session()->get('Name') ?></div>
                        <div class="textBlock"><?= session()->get('UserName') ?></div>
                        <div class="textBlock">
                            <?php if (session()->get('Pangkat') == "CEO") { ?>
                                <p style="color: #fff30d; font-weight: 600;"><?= session()->get('Pangkat') ?></p>
                            <?php } else if (session()->get('Pangkat') == "Admin") { ?>
                                <p style="color: #3be2ff; font-weight: 600;"><?= session()->get('Pangkat') ?></p>
                            <?php } else { ?>
                                <?= session()->get('Pangkat') ?>
                            <?php } ?>
                        </div>
                        <div class="textBlock"><?= session()->get('Email') ?></div>
                        <div class="textBlock"><?= session()->get('WhatsApp') ?></div>
                        <div class="textBlock"><?= session()->get('Instagram') ?></div>
                        <div class="textBlock"><?= session()->get('Facebook') ?></div>
                        <?php if (session()->get('View') < 2) { ?>
                            <div class="textBlock"><?= session()->get('View') ?> View</div>
                        <?php } else if (session()->get('View') > 1) { ?>
                            <div class="textBlock"><?= session()->get('View') ?> Views</div>
                        <?php } ?>
                    </div>
                </div>
                <div class="dp-slideR2">
                    <div class="dp-slideR2Delete"> <a href="/userdata_delete/<?= session()->get('UserName') ?>" style="text-decoration: none; color: black"><button class="btn-Delete-UP">Delete</button></a></div>
                    <div class="dp-slideR2Edit"><a href="/userdata_update/<?= session()->get('UserName') ?>" style="text-decoration: none; color: black"><button class="btn-Edit-UP">Edit</button></a></div>
                </div>
            </div>

        </div>
    </div>

</ul>

<!-- Data Profil Slider -->