<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/responsifHome.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/dataProfil.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/slide.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/page.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/footer.css?v=<?php echo time(); ?>">
</head>

<body id="background" onload="startTime()">

    <div class="UltraBlurPro">

        <!-- Navigasi Pop-Up -->
        <ul id="Nav2B">
            <ul id="Nav2A" style="display: none;">
                <ul id="Nav2">

                    <div id="NavCenter2">

                        <div id="NavCenter2C">
                            <div id="NavCenterX2">
                                <form action="" method="post" autocomplete="off">
                                    <a class="PencarianLens">l</a>
                                    <input onclick="Pencarian()" name="keyword" type="text" class="Pencarian" id="autoComplete2" placeholder="Search..." required="">
                                    <ul class="list2"></ul>
                                    <button type="submit" name="submit" id="buttonPencarian">Search</button>
                                </form>
                            </div>
                        </div>

                        <div id="NavCenter2A">

                            <div id="NavCenterXP">
                                <a href="/" style="text-decoration: none;"><button onclick="Home()" id="buttonNavHomeP">
                                        <span class="teksPLite">Home</span>
                                    </button></a>
                            </div>

                            <?php if (session()->get('UserName') == null) { ?>

                                <div id="NavCenterX2">
                                    <a href="/chat"><button onclick="Chat()" id="buttonNavHomeM">
                                            <span class="teksLite">Chat</span>
                                        </button></a>
                                </div>

                            <?php } ?>

                            <?php if (session()->get('Pangkat') == "CEO" || session()->get('Pangkat') == "Admin") { ?>

                                <div id="NavCenterXP">
                                    <a href="/create_article" style="text-decoration: none;"><button onclick="Create()" id="buttonNavCreateP">
                                            <span class="teksPLite">Create</span>
                                        </button></a>
                                </div>

                            <?php } else { ?>

                                <div id="NavCenterXP" style="display:none;">
                                    <a href="/create_article" style="text-decoration: none;"><button onclick="Create()" id="buttonNavCreateP">
                                            <span class="teksPLite">Create</span>
                                        </button></a>
                                </div>

                            <?php } ?>

                            <?php if (session()->get('Pangkat') !== null) { ?>

                                <div id="NavCenterXP">
                                    <a href="/logout" style="text-decoration: none;"><button onclick="Logout()" id="buttonNavLogoutP">
                                            <span class="teksPLite">Logout</span>
                                        </button></a>
                                </div>

                            <?php } else { ?>

                                <div id="NavCenterXP">
                                    <a href="/login" style="text-decoration: none;"><button onclick="Logout()" id="buttonNavLogoutP">
                                            <span class="teksPLite">Login</span>
                                        </button></a>
                                </div>

                            <?php } ?>

                        </div>
                        <div id="NavCenter2B">
                            <div id="MenuPopUpA">
                                <button onclick="Menu()" id="buttonMenuP">
                                    <span id="iconMP">
                                        <ion-icon src="/FileWeb/Ionicons/Close.svg" class="iconMP"></ion-icon>
                                    </span>
                                </button>
                            </div>
                        </div>

                    </div>

                </ul>
            </ul>
        </ul>
        <!-- Navigasi Pop-Up -->

        <!-- Navigasi -->
        <ul id="NavLite">

            <div id="NavCenter">

                <div class="div1"></div>
                <div class="div2"></div>
                <div class="div3"></div>

                <div id="NavCenterX2" class="pencarianDIV">
                    <form action="" method="post" autocomplete="off">
                        <a class="PencarianLens">l</a>
                        <input onclick="Pencarian()" name="keyword" type="text" class="Pencarian" id="autoComplete" placeholder="Search..." required="">
                        <ul class="list"></ul>
                        <button type="submit" name="submit" id="buttonPencarian">Search</button>
                        <script src="/CSS & JS/autoComplete.js?v=<?php echo time(); ?>"></script>
                    </form>
                </div>

                <?php if (session()->get('UserName') == null) { ?>

                    <div id="NavCenterX2">
                        <a href="/"><button onclick="Home()" id="buttonNavHome">
                                <span class="teksLite">Home</span>
                            </button></a>
                    </div>

                <?php } else { ?>

                    <div id="NavCenterX">
                        <a href="/"><button onclick="Home()" id="buttonNavHome">
                                <span class="teksLite">Home</span>
                            </button></a>
                    </div>

                <?php } ?>

                <?php if (session()->get('UserName') == null) { ?>

                    <div id="NavCenterX2">
                        <a href="/chat"><button onclick="Chat()" id="buttonNavHomeM">
                                <span class="teksLite">Chat</span>
                            </button></a>
                    </div>

                <?php } ?>

                <?php if (session()->get('Pangkat') == "CEO") { ?>

                    <div id="NavCenterX">
                        <a href="/create_article"><button onclick="Create()" id="buttonNavCreate">
                                <span class="teksLite">Create</span>
                            </button></a>
                    </div>

                <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                    <div id="NavCenterX">
                        <a href="/create_article"><button onclick="Create()" id="buttonNavCreate">
                                <span class="teksLite">Create</span>
                            </button></a>
                    </div>

                <?php } else { ?>

                    <div id="NavCenterX" style="display:none;">
                        <a href="/create_article"><button onclick="Create()" id="buttonNavCreate">
                                <span class="teksLite">Create</span>
                            </button></a>
                    </div>

                <?php } ?>

                <?php if (session()->get('UserName') !== null) { ?>

                    <div id="NavCenterX3" style="display: none;">
                        <a href="/"><button onclick="Home()" id="buttonNavHomeM">
                                <span class="teksLite">Home</span>
                            </button></a>
                    </div>

                    <div id="NavCenterX2">
                        <a href="/chat"><button onclick="Chat()" id="buttonNavChat">
                                <span class="teksLite">Chat</span>
                            </button></a>
                    </div>

                    <div id="NavCenterX2">
                        <button onclick="Profil()" id="buttonNavProfil">
                            <span id="textP" class="teks">Profil</span>
                            <span id="iconP"><img src="/ProfilUser/<?= session()->get('Profil') ?>" style="width: 17px; transform: scale(2.86); aspect-ratio: 1 / 1; object-fit:cover; border-radius: 10em;"></span>
                        </button>
                    </div>

                <?php } else { ?>

                    <div id="NavCenterX2" style="display: none;">
                        <button onclick="Profil()" id="buttonNavProfil"></button>
                    </div>

                <?php } ?>

                <?php if (session()->get('UserName') !== null) { ?>

                    <div id="NavCenterX">
                        <a href="logout"><button onclick="Logout()" id="buttonNavLogout">
                                <span class="teksLite">Logout</span>
                            </button></a>
                    </div>

                <?php } else { ?>

                    <div id="NavCenterX">
                        <a href="/login"><button onclick="Logout()" id="buttonNavLogout">
                                <span class="teksLite">Login</span>
                            </button></a>
                    </div>

                <?php } ?>

                <div id="MenuPopUp">
                    <button onclick="Menu()" id="buttonMenu">
                        <table style="transform: scale(0.78);">
                            <tr class="buttonMenuAB">
                                <th id="buttonMenuA">
                                    <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                                </th>
                            </tr>
                            <tr class="buttonMenuT">
                                <th>
                                    <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                                </th>
                            </tr>
                            <tr class="buttonMenuAB">
                                <th id="buttonMenuB">
                                    <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                                </th>
                            </tr>
                        </table>
                    </button>
                </div>

                <div class="div3"></div>
                <div class="div2"></div>
                <div class="div1"></div>

            </div>

        </ul>
        <!-- Navigasi -->

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
                            <div class="dp-slideR2Edit"><a href="/userdata_update/<?= session()->get('UserName') ?>" style="text-decoration: none; color: black"><button class="btn-Edit-UP">Edit</button></a></div>
                            <div class="dp-slideR2Delete"> <a href="/userdata_delete/<?= session()->get('UserName') ?>" style="text-decoration: none; color: black"><button class="btn-Delete-UP">Delete</button></a></div>
                        </div>
                    </div>

                </div>
            </div>

        </ul>

        <!-- Data Profil Slider -->

        <!-- Home -->
        <div id="homeLite">