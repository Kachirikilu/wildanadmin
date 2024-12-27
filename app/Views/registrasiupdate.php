    <link rel="stylesheet" href="/CSS & JS/registrasi.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">

    <?php if (session()->get('Pangkat') == "CEO") { ?>
        <title>Edit <?= session()->get('Name') ?> Data | Owner</title>
    <?php } else if (session()->get('Pangkat') == "Admin") { ?>
        <title>Edit <?= session()->get('Name') ?> Data | Admin</title>
    <?php } else if (session()->get('Pangkat') == "User") { ?>
        <title>Edit <?= session()->get('Name') ?> Data | User</title>
    <?php } else if (session()->get('Pangkat') == null) { ?>
        <title>Edit <?= session()->get('Name') ?> Data | Visitor</title>
    <?php } ?>

    </head>

    <body id="background" onload="startTime()">

        <div class="WadahRegistrasiT">

            <?php if (session()->get('ID') == $userRegistrasi['ID']) { ?>

                <div id="center">
                    <div class="WadahRegistrasi">
                        <nav class="WadahRegisterNav">
                            <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonRegistrasiLogout">
                                    <span id="textLogin" class="colorNavCreateED">Back</span>
                                    <span id="textRegistrasi" class="colorNavCreateED">Account Edit</span>
                                </button></a>
                        </nav>
                        <form action="/registrasicontroller/update/<?= session()->get('ID') ?>" id="registrasi" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div>
                                <center><input value="<?= session()->get('Name') ?>" class="inputRegistrasi" type="text" id="inputName" name="inputName" placeholder="Name" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input value="<?= session()->get('Email') ?>" class="inputRegistrasi" type="email" id="inputEmail" name="inputEmail" placeholder="Email" required="" autofocus></center>
                            </div>
                            <center><a style="color: red;"><?= $validation->getError('inputEmail') ?></a></center>
                            <div>
                                <center><input value="<?= session()->get('UserName') ?>" class="inputRegistrasi" type="hidden" id="inputUserNameX" name="inputUserNameX" autofocus></center>
                            </div>
                            <center><a style="color: red;"><?= $validation->getError('inputUserName') ?></a></center>
                            <div>
                                <center><input value="<?= session()->get('UserName') ?>" class="inputRegistrasi" type="text" id="inputUserName" name="inputUserName" placeholder="Username" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input class="inputRegistrasi" type="password" id="inputPassword" name="inputPassword" placeholder="New password" required="" autofocus></center>
                            </div>
                            <center><a style="color: red;"><?= $validation->getError('inputPasswordX') ?></a></center>
                            <div>
                                <center><input class="inputRegistrasi" type="password" id="inputPasswordX" name="inputPasswordX" placeholder="Repeat new password" required="" autofocus></center>
                            </div>
                            <center><button class="buttonMore" id="More" form="" onclick="More()" style="display: inline;">
                                    <ion-icon id="iconM" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> More
                                </button></center>
                            <div>
                                <center><input value="<?= session()->get('WhatsApp') ?>" class="inputRegistrasi" type="number" id="inputWhatsApp" name="inputWhatsApp" placeholder="WhatsApp" autofocus></center>
                            </div>
                            <div>
                                <?php if (session()->get('Instagram') !== "-") { ?>
                                    <center><input value="<?= session()->get('Instagram') ?>" class="inputRegistrasi" type="text" id="inputInstagram" name="inputInstagram" placeholder="Instagram" autofocus></center>
                                <?php } else { ?>
                                    <center><input value="" class="inputRegistrasi" type="text" id="inputInstagram" name="inputInstagram" placeholder="Instagram" autofocus></center>
                                <?php } ?>
                            </div>
                            <div>
                                <?php if (session()->get('Facebook') !== "-") { ?>
                                    <center><input value="<?= session()->get('Facebook') ?>" class="inputRegistrasi" type="text" id="inputFacebook" name="inputFacebook" placeholder="Facebook" autofocus></center>
                                <?php } else { ?>
                                    <center><input value="" class="inputRegistrasi" type="text" id="inputFacebook" name="inputFacebook" placeholder="Facebook" autofocus></center>
                                <?php } ?>
                            </div>
                            <div>
                                <center><input class="inputRegistrasi" type="password" id="inputAdminID" name="inputAdminID" placeholder="Admin ID" autofocus></center>
                            </div>

                            <div>
                                <center><input class="inputRegistrasi" type="hidden" name="inputColor" value="<?= session()->get('Color') ?>" autofocus></center>
                            </div>
                            <div>
                                <center><input class="inputRegistrasi" type="hidden" name="inputWallpaper" value="<?= session()->get('Wallpaper') ?>" autofocus></center>
                            </div>

                            <center><a style="color: red;"><?= $validation->getError('inputProfil') ?></a></center>
                            <div class="user-Profil">
                                <center>
                                    <div>
                                        <input class="inputRegistrasi" type="file" accept="image/*" id="inputProfil" name="inputProfil" autofocus>
                                        <button class="buttonRegistrasi" form="registrasi" name="registrasi" type="submit" value="upload">
                                            <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 0.6px"></ion-icon> Edit
                                        </button>
                                    </div>
                        </form>
                    </div>
                </div>

            <?php } else if (session()->get('Pangkat') == "CEO") { ?>

                <div id="center">
                    <div class="WadahRegistrasi">
                        <nav class="WadahRegisterNav">
                            <a  href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonRegistrasiLogout">
                                    <span id="textLogin" class="colorNavCreateED">Back</span>
                                    <span id="textRegistrasi" class="colorNavCreateED">Account Edit</span>
                                </button></a>
                        </nav>
                        
                        <form action="/registrasicontroller/updatepangkat/<?= $userRegistrasi['ID'] ?>" id="registrasi" method="post" enctype="multipart/form-data">
                            <div>
                                <center><input value="<?= $userRegistrasi['Name'] ?>" class="inputRegistrasi" type="text" id="inputName" placeholder="Name" autofocus></center>
                            </div>
                            <div>
                                <center><input value="<?= $userRegistrasi['Email'] ?>" class="inputRegistrasi" type="email" id="inputEmail" placeholder="Email" autofocus></center>
                            </div>
                            <div>
                                <center><input value="<?= $userRegistrasi['UserName'] ?>" class="inputRegistrasi" type="text" id="inputUserName" placeholder="Username" autofocus></center>
                            </div>

                            <?php if ($userRegistrasi['Pangkat'] == "User") { ?>
                                
                                <center><select id="selekCoding2" onchange="buttonCoding2()" class="inputAdminCEO" name="inputAdminCEO">
                                        <option class="optionTerpilih" value='User'>User</option>
                                        <option value='Admin'>Admin</option>
                                </center></select>

                            <?php } else if ($userRegistrasi['Pangkat'] == "Admin") { ?>

                                <center><select id="selekCoding2" onchange="buttonCoding2()" class="inputAdminCEO" name="inputAdminCEO">
                                        <option class="optionTerpilih" value='Admin'>Admin</option>
                                        <option value='User'>User</option>
                                </center></select>

                            <?php } ?>

                            <div class="user-Profil">
                                <center>
                                    <div>
                                        <input class="inputRegistrasi" type="file" accept="image/*" id="inputProfil" autofocus>
                                        <button class="buttonRegistrasi" form="registrasi" name="registrasi" type="submit" value="upload">
                                            <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 0.6px"></ion-icon> Edit
                                        </button>
                                    </div>
                        </form>
                    </div>
                </div>

            <?php } else { ?>

                <div id="center">
                    <div class="WadahRegistrasi">
                        <nav class="WadahRegisterNav">
                            <a href="/" style="text-decoration: none;"><button id="buttonRegistrasiLogout">
                                    <span id="textLogin" class="colorNavCreateED">Home</span>
                                    <span id="textRegistrasi" class="colorNavCreateED">You don't have authorization!</span>
                                </button></a>
                        </nav>
                        <form>
                            <div>
                                <center><input value="Error! 404 :(" class="inputRegistrasi" type="text" id="inputName" name="inputName" placeholder="Name" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input value="Error! 404 :(" class="inputRegistrasi" type="email" id="inputEmail" name="inputEmail" placeholder="Email" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input value="Error! 404 :(" class="inputRegistrasi" type="hidden" id="inputUserNameX" name="inputUserNameX" autofocus></center>
                            </div>
                            <div>
                                <center><input value="Error! 404 :(" class="inputRegistrasi" type="text" id="inputUserName" name="inputUserName" placeholder="Username" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input class="inputRegistrasi" type="password" id="inputPassword" name="inputPassword" placeholder="New Password" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input class="inputRegistrasi" type="password" id="inputPasswordX" name="inputPasswordX" placeholder="Confirm Your New Password!" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input value="404" class="inputRegistrasi" type="number" id="inputWhatsApp" name="inputWhatsApp" placeholder="WhatsApp" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input value="Error! 404 :(" class="inputRegistrasi" type="text" id="inputInstagram" name="inputInstagram" placeholder="Instagram" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input value="Error! 404 :(" class="inputRegistrasi" type="text" id="inputFacebook" name="inputFacebook" placeholder="Facebook" required="" autofocus></center>
                            </div>
                            <div>
                                <center><input class="inputRegistrasi" type="password" id="inputAdminID" name="inputAdminID" placeholder="Admin ID" autofocus></center>
                            </div>
                            <div class="user-Profil">
                                <center>
                                    <div>
                                        <input class="inputRegistrasi" type="file" accept="image/*" id="inputProfil" name="inputProfil" autofocus>
                                        <button class="buttonRegistrasi">
                                            <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 0.6px"></ion-icon> Error!
                                        </button>
                                    </div>
                        </form>
                    </div>
                </div>

            <?php } ?>

        </div>

        <div class="UltraBlur"></div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
        <script src="/CSS & JS/registrasi.js?v=<?php echo time(); ?>" defer></script>

    </body>

    </html>