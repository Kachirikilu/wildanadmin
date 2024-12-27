<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/responsifHome.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/responsifFitur.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/grup.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/chat.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/slide.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/dataUser.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/dataProfil.css?v=<?php echo time(); ?>">
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
                                <a href="/"><button onclick="Home()" id="buttonNavHomeP">
                                        <span id="textHP" class="teksP">Home</span>
                                        <span id="iconHP">
                                            <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18P"></ion-icon>
                                        </span>
                                    </button></a>
                            </div>

                            <?php if (session()->get('Pangkat') == "CEO" || session()->get('Pangkat') == "Admin") { ?>

                                <div id="NavCenterXP">
                                    <a href="/create_article"><button onclick="Create()" id="buttonNavCreateP">
                                            <span id="textCreP" class="teksP">Create</span>
                                            <span id="iconCreP">
                                                <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18P"></ion-icon>
                                            </span>
                                        </button></a>
                                </div>

                            <?php } else { ?>

                                <div id="NavCenterXP" style="display:none;">
                                    <a href="/create_article"><button onclick="Create()" id="buttonNavCreateP">
                                            <span id="textCreP" class="teksP">Create</span>
                                            <span id="iconCreP">
                                                <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18P"></ion-icon>
                                            </span>
                                        </button></a>
                                </div>

                            <?php } ?>

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
                                    <a href="/logout"><button onclick="Logout()" id="buttonNavLogoutP">
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