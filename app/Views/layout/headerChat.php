<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/CSS & JS/detail.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/responsifHome.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/chatPribadi.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/chat.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/slide.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/dataUser.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/dataProfil.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/footer.css?v=<?php echo time(); ?>">
</head>

<body id="background" onload="startTime()">

    <div class="UltraBlurPro">

        <!-- Navigasi -->
        <ul id="NavNon">

            <div id="NavCenterDes">

                <div class="div1"></div>
                <div class="div2"></div>
                <div class="div3"></div>


                <div id="NavCenterXChat">
                    <a href="/chat"><button onclick="Chat()" id="buttonNavChat">
                            <span id="textC" class="teks">Chat</span>
                            <span id="iconC">
                                <ion-icon src="/FileWeb/Ionicons/Bot.svg" class="icon20"></ion-icon>
                            </span>
                        </button></a>
                </div>

                <div id="NavCenterXBack" style="display: none;">
                    <a><button onclick="Back()" id="buttonNavHomeX">
                            <span id="textHX" class="teks">Back</span>
                            <span id="iconHX">
                                <ion-icon src="/FileWeb/Ionicons/Back.svg" class="icon20"></ion-icon>
                            </span>
                        </button></a>
                </div>

                <div id="NavCenterX">
                    <a href="/"><button onclick="Home()" id="buttonNavHome">
                            <span id="textH" class="teks">Home</span>
                            <span id="iconH">
                                <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                            </span>
                        </button></a>
                </div>

                <div id="NavCenterX">
                    <button onclick="DataUser()" id="buttonNavNews">
                        <span id="textN" class="teks">User</span>
                        <span id="iconN">
                            <ion-icon src="/FileWeb/Ionicons/User.svg" class="icon18"></ion-icon>
                        </span>
                    </button>
                </div>

                <?php if (session()->get('UserName') !== null) { ?>

                    <div id="NavCenterX2">
                        <button onclick="Profil()" id="buttonNavProfil">
                            <span id="textP" class="teks">Profil</span>
                            <span id="iconP"><img src="/ProfilUser/<?= session()->get('Profil') ?>" style="width: 17px; transform: scale(2.86); aspect-ratio: 1 / 1; object-fit:cover; border-radius: 10em;"></span>
                        </button>
                    </div>

                <?php } else { ?>

                    <div id="NavCenterX2" style="display:none;">
                        <button onclick="Profil()" id="buttonNavProfil"></button>
                    </div>

                <?php } ?>

                <?php if (session()->get('UserName') !== null) { ?>

                    <div id="NavCenterX">
                        <a href="/logout_chat"><button onclick="Logout()" id="buttonNavLogout">
                                <span id="textL" class="teks">Logout</span>
                                <span id="iconL">
                                    <ion-icon src="/FileWeb/Ionicons/Logout.svg" class="icon22"></ion-icon>
                                </span>
                            </button></a>
                    </div>

                <?php } else { ?>

                    <div id="NavCenterX">
                        <a href="/login"><button onclick="Logout()" id="buttonNavLogout">
                                <span id="textL" class="teks">Login</span>
                                <span id="iconL">
                                    <ion-icon src="/FileWeb/Ionicons/Login.svg" class="icon22"></ion-icon>
                                </span>
                            </button></a>
                    </div>

                <?php } ?>

                <div class="div3"></div>
                <div class="div2"></div>
                <div class="div1"></div>

            </div>

            <div id="NavCenterMob">

                <div class="div1"></div>
                <div class="div2"></div>
                <div class="div3"></div>

                <div id="NavCenterXChat2">
                    <a href="/chat"><button onclick="Chat()" id="buttonNavChatM">
                            <span id="textCM" class="teks">Chat</span>
                            <span id="iconCM">
                                <ion-icon src="/FileWeb/Ionicons/Bot.svg" class="icon20"></ion-icon>
                            </span>
                        </button></a>
                </div>

                <div id="NavCenterXBack2" style="display: none;">
                    <a><button onclick="Back()" id="buttonNavHomeX2">
                            <span id="textHX2" class="teks">Back</span>
                            <span id="iconHX2">
                                <ion-icon src="/FileWeb/Ionicons/Chat.svg" class="icon20"></ion-icon>
                            </span>
                        </button></a>
                </div>

                <?php if (session()->get('Pangkat') !== null) { ?>

                    <div id="NavCenterX3" style="display: none;">
                        <a href="/"><button onclick="Home()" id="buttonNavHomeM">
                                <span id="textHM" class="teks">Home</span>
                                <span id="iconHM">
                                    <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                                </span>
                            </button></a>
                    </div>

                    <div id="NavCenterX2">
                        <button onclick="Profil()" id="buttonNavProfilM">
                            <span id="textPM" class="teks">Profil</span>
                            <span id="iconPM"><img src="/ProfilUser/<?= session()->get('Profil') ?>" style="width: 17px; transform: scale(2.86); aspect-ratio: 1 / 1; object-fit:cover; border-radius: 10em;"></span>
                        </button>
                    </div>

                <?php } else { ?>

                    <div id="NavCenterX3" style="display: none;">
                        <a href="/"><button onclick="Home()" id="buttonNavHomeM">
                                <span id="textHM" class="teks">Home</span>
                                <span id="iconHM">
                                    <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                                </span>
                            </button></a>
                    </div>

                    <div id="NavCenterX2">
                        <button onclick="Profil()" id="buttonNavProfilM">
                            <span id="textPM" class="teks">Profil</span>
                            <span id="iconPM"><img src="/ProfilUser/<?= session()->get('Profil') ?>" style="width: 17px; transform: scale(2.86); aspect-ratio: 1 / 1; object-fit:cover; border-radius: 10em;"></span>
                        </button>
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

        <!-- Navigasi Pop-Up -->
        <ul id="Nav2B">
            <ul id="Nav2A" style="display: none;">
                <ul id="Nav2">

                    <div id="NavCenter2">

                        <div id="NavCenter2A">

                            <div id="NavCenterXP">
                                <a href="/"><button onclick="Home()" id="buttonNavHomeP">
                                        <span id="textHP" class="teksP">Home</span>
                                        <span id="iconHP">
                                            <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18P"></ion-icon>
                                        </span>
                                    </button></a>
                            </div>

                            <div id="NavCenterXP">
                                <button onclick="DataUser()" id="buttonNavNewsP">
                                    <span id="textNP" class="teksP">User</span>
                                    <span id="iconNP">
                                        <ion-icon src="/FileWeb/Ionicons/User.svg" class="icon18P"></ion-icon>
                                    </span>
                                </button>
                            </div>

                            <?php if (session()->get('Pangkat') !== null) { ?>

                                <div id="NavCenterXP">
                                    <a href="/logout_chat"><button onclick="Logout()" id="buttonNavLogoutP">
                                            <span id="textLP" class="teksP">Logout</span>
                                            <span id="iconLP">
                                                <ion-icon src="/FileWeb/Ionicons/Logout.svg" class="icon22P"></ion-icon>
                                            </span>
                                        </button></a>
                                </div>

                            <?php } else { ?>

                                <div id="NavCenterXP">
                                    <a href="/login"><button onclick="Logout()" id="buttonNavLogoutP">
                                            <span id="textLP" class="teksP">Login</span>
                                            <span id="iconLP">
                                                <ion-icon src="/FileWeb/Ionicons/Login.svg" class="icon22P"></ion-icon>
                                            </span>
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