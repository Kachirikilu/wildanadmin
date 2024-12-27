<?php if (session()->get('Pangkat') == "CEO") { ?>
    <title><?= $userData['Name'] ?> Data | Owner</title>
<?php } else if (session()->get('Pangkat') == "Admin") { ?>
    <title><?= $userData['Name'] ?> Data | Admin</title>
<?php } else if (session()->get('Pangkat') == "User") { ?>
    <title><?= $userData['Name'] ?> Data | User</title>
<?php } else if (session()->get('Pangkat') == null) { ?>
    <title><?= $userData['Name'] ?> Data | Visitor</title>
<?php } ?>


<div id="blur2" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">
    <div id="blur3" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">

        <!-- Home -->
        <div id="datauser">


            <ul class="ul-top3DPX" id="ul-top3DPX">

                <div id="grid-DataProfil">
                    <div class="dp-slide dp-slide-blur">

                        <div class="dp-slideL">
                            <div class="dp-slideLX">
                                <div id="dp-slidePicture"><img src="/ProfilUser/<?= $userData['Profil']  ?>" class="dp-slidePictureX"></div>
                                <div id="duX-slidePictureText">

                                        <?php if ($userData['Pangkat'] == "CEO") { ?>
                                            <div id="pictureTextCEOX"><a style="text-decoration: none; color: black"><?= $userData['Pangkat']; ?></a></div>
                                        <?php } else if ($userData['Pangkat'] == "Admin") { ?>
                                            <div id="pictureTextAdminX"><a style="text-decoration: none; color: black"><?= $userData['Pangkat']; ?></a></div>
                                        <?php } else { ?>
                                            <div id="pictureTextUserX"><a style="text-decoration: none; color: black"><?= $userData['Pangkat']; ?></a></div>
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
                                    <?php if (session()->get('UserName') == $userData['UserName']) { ?>
                                        <div class="textBlock">View</div>
                                    <?php } ?>
                                </div>
                                <div class="dp-slideRxC">
                                    <div>:</div>
                                    <div>:</div>
                                    <div>:</div>
                                    <div>:</div>
                                    <div>:</div>
                                    <div>:</div>
                                    <div>:</div>
                                    <?php if (session()->get('UserName') == $userData['UserName']) { ?>
                                        <div>:</div>
                                    <?php } ?>
                                </div>
                                <div class="dp-slideRxR">
                                    <div class="textBlock"><?= $userData['Name'] ?></div>
                                    <div class="textBlock"><?= $userData['UserName'] ?></div>
                                    <div class="textBlock">
                                        <?php if ($userData['Pangkat'] == "CEO") { ?>
                                            <p style="color: #fff30d; font-weight: 600;"><?= $userData['Pangkat'] ?></p>
                                        <?php } else if ($userData['Pangkat'] == "Admin") { ?>
                                            <p style="color: #3be2ff; font-weight: 600;"><?= $userData['Pangkat'] ?></p>
                                        <?php } else { ?>
                                            <?= $userData['Pangkat'] ?>
                                        <?php } ?>
                                    </div>
                                    <div class="textBlock"><?= $userData['Email'] ?></div>
                                    <div class="textBlock"><?= $userData['WhatsApp'] ?></div>
                                    <div class="textBlock"><?= $userData['Instagram'] ?></div>
                                    <div class="textBlock"><?= $userData['Facebook'] ?></div>
                                    <?php if (session()->get('UserName') == $userData['UserName']) { ?>
                                        <?php if ($userData['View'] < 2) { ?>
                                            <div class="textBlock"><?= $userData['View'] ?> View</div>
                                        <?php } else if ($userData['View'] > 1) { ?>
                                            <div class="textBlock"><?= $userData['View'] ?> Views</div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>

                            <?php if (session()->get('UserName') == $userData['UserName'] || session()->get('Pangkat') == "CEO") { ?>
                                <div class="dp-slideR2">
                                    <div class="dp-slideR2Delete"> <a href="/userdata_delete/<?= $userData['UserName'] ?>" style="text-decoration: none; color: black"><button class="btn-Delete-UP">Delete</button></a></div>
                                    <div class="dp-slideR2Edit"><a href="/userdata_update/<?= $userData['UserName'] ?>" style="text-decoration: none; color: black"><button class="btn-Edit-UP">Edit</button></a></div>
                                </div>
                            <?php } ?>
                        </div>


                    </div>
                </div>

            </ul>


        </div>
        <!-- Home -->

    </div>
</div>
</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
<script src="/CSS & JS/detailDataUser.js?v=<?php echo time(); ?>" defer></script>
<script src="/CSS & JS/chat.js?v=<?php echo time(); ?>" defer></script>

</div>

</body>

</html>