<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body onload="startTimeColor()">
    <link rel="stylesheet" href="/CSS & JS/custom.css?v=<?php echo time(); ?>" id="linkHrefColor">
    <input type="hidden" value="" id="autoNightModeColor">

    <script type="text/javascript">
        function startTimeColor() {

            let autoNightModeColor = document.getElementById("autoNightModeColor");

            const dateColor = new Date();
            let hourColor = dateColor.getHours();
            autoNightModeColor.value = hourColor;

            let linkHrefColor = document.getElementById("linkHrefColor");
            if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                linkHrefColor.href = "/CSS & JS/customNightAuto.css?v=<?php echo time(); ?>";
                localStorage.setItem("themeColor", "Dark");
            } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                linkHrefColor.href = "/CSS & JS/custom.css?v=<?php echo time(); ?>";
                localStorage.setItem("themeColor", "Light");
            }

            setTimeout(function() {
                startTimeColor()
            }, 60000);
        }

        if (localStorage) {
            themeColor = localStorage.getItem("themeColor")
        }
        if (themeColor == "Light") {
            linkHrefColor.href = "/CSS & JS/custom.css?v=<?php echo time(); ?>";
        } else if (themeColor == "Dark") {
            linkHrefColor.href = "/CSS & JS/customNightAuto.css?v=<?php echo time(); ?>";
        }
    </script>
</body>

<link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">

<link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/responsifHome.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/chat.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/slide.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/dataUser.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/dataProfil.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/page.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/footer.css?v=<?php echo time(); ?>">

<title>Custom | View</title>

</head>

<body id="background">

    <div class="UltraBlurPro">

        <!-- Home -->
        <div id="home" style="width: 100%">

            <!-- Navigasi -->

            <div id="header">

                <header id="header1">

                    <div id="idText">
                        <p>Welcome</p>
                    </div>

                    <div style="display: flex; gap: 6px">

                        <div id="NavCenterXP">
                            <button onclick="Image()" id="buttonNavImage">
                                <span id="iconImage">
                                    <ion-icon name="images-outline" class="iconImage"></ion-icon>
                                </span>
                            </button>
                        </div>

                        <div id="NavCenterXP">
                            <button onclick="Color()" id="buttonNavColor">
                                <span id="iconColor">
                                    <ion-icon name="color-palette-outline" class="iconColor"></ion-icon>
                                </span>
                            </button>
                        </div>

                        <div id="NavCenterXP2">
                            <button onclick="Webkit()" id="buttonNavColor">
                                <span id="iconColor">
                                    <ion-icon name="swap-vertical-outline" class="iconImage"></ion-icon>
                                </span>
                            </button>
                        </div>

                    </div>

                </header>

            </div>

            <header id="header1"></header>

            <ul id="Nav">

                <div id="NavCenter">

                    <div class="div1"></div>
                    <div class="div2"></div>
                    <div class="div3"></div>

                    <div id="NavCenterX2" class="pencarianDIV">
                        <a class="PencarianLens" id="icon9">l</a>
                        <input type="text" class="Pencarian" id="autoComplete" placeholder="Search..." style="width: 210px; border-radius: 50px;" required="">
                    </div>

                    <div id="NavCenterX2">
                        <a href="/"><button onclick="Home()" id="buttonNavHome">
                                <span id="textH" class="teks">Home</span>
                                <span id="iconH">
                                    <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18" id="icon1"></ion-icon>
                                </span>
                            </button></a>
                    </div>

                    <div id="NavCenterX2">
                        <a href="/custom"><button onclick="Create()" id="buttonNavNews">
                                <span id="textN" class="teks">Create</span>
                                <span id="iconN">
                                    <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18" id="icon2"></ion-icon>
                                </span>
                            </button></a>
                    </div>
                    <div id="NavCenterX">
                        <a href="/chat"><button onclick="Chat()" id="buttonNavChat">
                                <span id="textC" class="teks">Chat</span>
                                <span id="iconC">
                                    <ion-icon src="/FileWeb/Ionicons/Chat.svg" class="icon20" id="icon3"></ion-icon>
                                </span>
                            </button></a>
                    </div>

                    <?php if (session()->get('UserName') !== null) { ?>

                        <div id="NavCenterX">
                            <a href="/logout"><button onclick="Logout()" id="buttonNavLogout">
                                    <span id="textL" class="teks">Logout</span>
                                    <span id="iconL">
                                        <ion-icon src="/FileWeb/Ionicons/Logout.svg" class="icon22" id="icon4"></ion-icon>
                                    </span>
                                </button></a>
                        </div>

                    <?php } else { ?>

                        <div id="NavCenterX">
                            <a href="/login"><button onclick="Login()" id="buttonNavLogout">
                                    <span id="textL" class="teks">Login</span>
                                    <span id="iconL">
                                        <ion-icon src="/FileWeb/Ionicons/Login.svg" class="icon22" id="icon4"></ion-icon>
                                    </span>
                                </button></a>
                        </div>

                    <?php } ?>

                    <div class="div3"></div>
                    <div class="div2"></div>
                    <div class="div1"></div>

                </div>

            </ul>
            <!-- Navigasi -->

            <header id="header2"></header>

            <!-- Container -->

            <div id="grid-container">

                <div class="grid-itemUtama">

                    <div id="pictureDivUtama">
                        <div id="pictureIMGUtamaCUSTOM">
                            <div class="divCUSTOMX">
                                <?php foreach ($custom as $output) { ?>

                                    <div id="divCustom">
                                        <p class="nameCUSTOM">Navbar</p>
                                        <input value="<?= $output['leftNavbar']; ?>" class="inputCUSTOM" type="color">
                                        <input value="<?= $output['rightNavbar']; ?>" class="inputCUSTOM" type="color">
                                        <a class="nameCUSTOMX"><?= $output['leftNavbar']; ?></a>, <a class="nameCUSTOMX"><?= $output['rightNavbar']; ?></a>
                                        <br>
                                        <p class="nameCUSTOM">Icon</p>
                                        <input value="<?= $output['icon']; ?>" class="inputCUSTOM" type="color">
                                        <input value="<?= $output['iconPlaceholder']; ?>" class="inputCUSTOM" type="color">
                                        <a class="nameCUSTOMX"><?= $output['icon']; ?></a>, <a class="nameCUSTOMX"><?= $output['iconPlaceholder']; ?></a>
                                        <br>
                                        <p class="nameCUSTOM">Column</p>
                                        <input value="<?= $output['backgroundColumn']; ?>" class="inputCUSTOM" type="color">
                                        <input value="<?= $output['colorColumn']; ?>" class="inputCUSTOM" type="color">
                                        <input value="<?= $output['columnBorder']; ?>" class="inputCUSTOM" type="color">
                                        <a class="nameCUSTOMX"><?= $output['backgroundColumn']; ?></a>, <a class="nameCUSTOMX"><?= $output['colorColumn']; ?></a>, <a class="nameCUSTOMX"><?= $output['columnBorder']; ?></a>
                                        <br>
                                        <p class="nameCUSTOM">Page</p>
                                        <input value="<?= $output['backgroundPage']; ?>" class="inputCUSTOM" type="color">
                                        <input value="<?= $output['colorPage']; ?>" class="inputCUSTOM" type="color">
                                        <input value="<?= $output['hoverPage']; ?>" class="inputCUSTOM" type="color">
                                        <a class="nameCUSTOMX"><?= $output['backgroundPage']; ?></a>, <a class="nameCUSTOMX"><?= $output['colorPage']; ?></a>, <a class="nameCUSTOMX"><?= $output['hoverPage']; ?></a>
                                        <br>
                                        <input value="<?= $output['By']; ?>" placeholder="By" type="text" class="inputBy"><a href="/custom_view/<?= $output['ID']; ?>"><button class="buttonBy">View</button></a><?php if (session()->get('Pangkat') == "CEO") { ?><a href="/custom_delete/<?= $output['ID']; ?>"><button class="buttonByDelete">Delete</button></a><?php } ?>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText1"><a id="Kategori1">Custom</a></div>
                                    <div id="pictureEdit1"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText2"><a id="Kategori2">Custom</a></div>
                                    <div id="pictureEdit2"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText3"><a id="Kategori3">Custom</a></div>
                                    <div id="pictureEdit3"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText4"><a id="Kategori4">Custom</a></div>
                                    <div id="pictureEdit4"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText5"><a id="Kategori5">Custom</a></div>
                                    <div id="pictureEdit5"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText6"><a id="Kategori6">Custom</a></div>
                                    <div id="pictureEdit6"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText7"><a id="Kategori7">Custom</a></div>
                                    <div id="pictureEdit7"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText8"><a id="Kategori8">Custom</a></div>
                                    <div id="pictureEdit8"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText9"><a id="Kategori9">Custom</a></div>
                                    <div id="pictureEdit9"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText10"><a id="Kategori10">Custom</a></div>
                                    <div id="pictureEdit10"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText11"><a id="Kategori11">Custom</a></div>
                                    <div id="pictureEdit11"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText12"><a id="Kategori12">Custom</a></div>
                                    <div id="pictureEdit12"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText13"><a id="Kategori13">Custom</a></div>
                                    <div id="pictureEdit13"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>
                <div class="grid-item">
                    <a style="text-decoration: none; color: black">
                        <button id="buttonDetail">
                            <div id="pictureDiv">
                                <div id="pictureDiv2"><img src="/FileWeb/Wallpaper/W1.jpg" id="pictureIMG"></div>

                                <div id="picturePopUser">
                                    <div id="pictureText14"><a id="Kategori14">Custom</a></div>
                                    <div id="pictureEdit14"><a style="text-decoration: none; color: black" id="EditText"></a></div>
                                </div>
                            </div>
                        </button>
                    </a>
                    <div id="judulDiv">
                        <div id="judulHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="isiDiv">
                        <div id="isiHuruf">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                    <div id="tanggalDiv">
                        <div id="isiTanggal">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</div>
                    </div>
                </div>

            </div>

            <!-- Container -->

            <nav aria-label="Page-navigation">
                <ul class="pagination">

                    <div>

                        <div style="display: flex; justify-content: center;">

                            <div class="page-item" id="page1">
                                <a class="page-itemX">
                                    <button class="buttonPage" id="page2">1</button>
                                </a>
                            </div>
                        </div>

                    </div>

                </ul>
            </nav>

            <!-- Foother -->

            <center>
                <div id="footer">
                    <div id="WadahKaki">
                        <div id="WadahKakiText1">
                            <div id="DIVaFooter"><a href="https://elearning.unsri.ac.id/" target="_blank" id="aFooter">E-Learning UNSRI</a></div>
                            <div id="DIVaFooter"><a href="https://codeigniter4.github.io/userguide/" target="_blank" id="aFooter">CodeIgniter 4</a></div>
                            <div id="DIVaFooter"><a href="https://flatuicolors.com/" target="_blank" id="aFooter">Flaituicolors</a></div>
                            <div id="DIVaFooter"><a href="https://ionic.io/ionicons/usage" target="_blank" id="aFooter">Ionicons 5.5.2</a></div>
                            <div id="DIVaFooter"><a href="/beta" id="aFooter">Beta Version</a></div>
                        </div>
                        <div id="WadahKakiText2">
                            <div id="DIVaFooter"><a href="https://wa.me/6282183379918" target="_blank" id="aFooter">WhatsApp</a></div>
                            <div id="DIVaFooter"><a href="/" target="_blank" id="aFooter">Home</a></div>
                            <div id="DIVaFooter"><a href="logout" target="_blank" id="aFooter">Logout</a></div>
                        </div>
                        <div id="WadahKakiPicture">
                            <a href="https://unsri.ac.id/" target="_blank"><button style="background: transparent; border: 0" id="pictureIMGButton">
                                    <div><img src="/FileWeb/UNSRI Logo.png" class="pictureKaki"></div>
                                </button></a>
                        </div>
                    </div>
                </div>
            </center>

            <!-- Foother -->

        </div>
        <!-- Home -->

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
        <script src="/CSS & JS/custom.js?v=<?php echo time(); ?>" defer></script>

    </div>

</body>

</html>