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
            }, 60000);function divideByAllIntegers(num) {
  var result = [];

  for (var i = 1; i <= num; i++) {
    if (num % i == 0) {
      result.push(i);
    }
  }

  return result;
}
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

<title>Custom</title>

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
                        <a href="/custom_view"><button onclick="DataUser()" id="buttonNavNews">
                                <span id="textN" class="teks">Custom</span>
                                <span id="iconN">
                                    <ion-icon src="/FileWeb/Ionicons/Custom.svg" class="icon18" id="icon2"></ion-icon>
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
                            <div class="divCUSTOM">
                                <form action="/custom/share" id="login" method="post" enctype="multipart/form-data">
                                    <p class="nameCUSTOM">Navbar</p>
                                    <input id="leftNavbar" name="leftNavbar" oninput="color()" value="#166af2" class="inputCUSTOM" type="color">
                                    <input id="rightNavbar" name="rightNavbar" oninput="color()" value="#57f4ff" class="inputCUSTOM" type="color">
                                    <br>
                                    <p class="nameCUSTOM">Icon</p>
                                    <input id="icon" name="icon" oninput="color()" value="#e8fffd" class="inputCUSTOM" type="color">
                                    <input id="iconPlaceholder" name="iconPlaceholder" oninput="color()" value="#d4eae8" class="inputCUSTOM" type="color">
                                    <br>
                                    <p class="nameCUSTOM">Column</p>
                                    <input id="backgroundColumn" name="backgroundColumn" oninput="color()" value="#1e90ff" class="inputCUSTOM" type="color">
                                    <input id="colorColumn" name="colorColumn" oninput="color()" value="#ffffff" class="inputCUSTOM" type="color">
                                    <input id="columnBorder" name="columnBorder" oninput="color()" value="#30e3f0" class="inputCUSTOM" type="color">
                                    <br>
                                    <p class="nameCUSTOM">Page</p>
                                    <input id="backgroundPage" name="backgroundPage" oninput="color()" value="#43b7ff" class="inputCUSTOM" type="color">
                                    <input id="colorPage" name="colorPage" oninput="color()" value="#e8fffd" class="inputCUSTOM" type="color">
                                    <input id="hoverPage" name="hoverPage" oninput="color()" value="#1e90ff" class="inputCUSTOM" type="color">
                                    <br>
                                    <input name="By" placeholder="By" type="text" class="inputBy" value="<?= session()->get('Name') ?>" required=""><button class="buttonBy">Share</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="grid-item" id="column-border1">
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
                <div class="grid-item" id="column-border2">
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
                <div class="grid-item" id="column-border3">
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
                <div class="grid-item" id="column-border4">
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
                <div class="grid-item" id="column-border5">
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
                <div class="grid-item" id="column-border6">
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
                <div class="grid-item" id="column-border7">
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
                <div class="grid-item" id="column-border8">
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
                <div class="grid-item" id="column-border9">
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
                <div class="grid-item" id="column-border10">
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
                <div class="grid-item" id="column-border11">
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
                <div class="grid-item" id="column-border12">
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
                <div class="grid-item" id="column-border13">
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
                <div class="grid-item" id="column-border14">
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

            <style id="placeholder"></style>
            <style id="focus"></style>

            <script language="JavaScript">
                Navbar = document.getElementById("Nav")

                iconItem1 = document.getElementById("icon1")
                iconItem2 = document.getElementById("icon2")
                iconItem3 = document.getElementById("icon3")
                iconItem4 = document.getElementById("icon4")
                iconItem5 = document.getElementById("icon5")
                iconItem6 = document.getElementById("icon6")
                iconItem7 = document.getElementById("icon7")
                iconItem8 = document.getElementById("autoComplete")
                iconItem8inner = document.getElementById("focus")
                iconItem9 = document.getElementById("icon9")
                iconItem10 = document.getElementById("placeholder")

                iconText1 = document.getElementById("textH")
                iconText2 = document.getElementById("textN")
                iconText3 = document.getElementById("textC")
                iconText4 = document.getElementById("textL")

                column1 = document.getElementById("pictureText1")
                column2 = document.getElementById("pictureText2")
                column3 = document.getElementById("pictureText3")
                column4 = document.getElementById("pictureText4")
                column5 = document.getElementById("pictureText5")
                column6 = document.getElementById("pictureText6")
                column7 = document.getElementById("pictureText7")
                column8 = document.getElementById("pictureText8")
                column9 = document.getElementById("pictureText9")
                column10 = document.getElementById("pictureText10")
                column11 = document.getElementById("pictureText11")
                column12 = document.getElementById("pictureText12")
                column13 = document.getElementById("pictureText13")
                column14 = document.getElementById("pictureText14")

                column1e = document.getElementById("pictureEdit1")
                column2e = document.getElementById("pictureEdit2")
                column3e = document.getElementById("pictureEdit3")
                column4e = document.getElementById("pictureEdit4")
                column5e = document.getElementById("pictureEdit5")
                column6e = document.getElementById("pictureEdit6")
                column7e = document.getElementById("pictureEdit7")
                column8e = document.getElementById("pictureEdit8")
                column9e = document.getElementById("pictureEdit9")
                column10e = document.getElementById("pictureEdit10")
                column11e = document.getElementById("pictureEdit11")
                column12e = document.getElementById("pictureEdit12")
                column13e = document.getElementById("pictureEdit13")
                column14e = document.getElementById("pictureEdit14")

                column1s = document.getElementById("column-border1")
                column2s = document.getElementById("column-border2")
                column3s = document.getElementById("column-border3")
                column4s = document.getElementById("column-border4")
                column5s = document.getElementById("column-border5")
                column6s = document.getElementById("column-border6")
                column7s = document.getElementById("column-border7")
                column8s = document.getElementById("column-border8")
                column9s = document.getElementById("column-border9")
                column10s = document.getElementById("column-border10")
                column11s = document.getElementById("column-border11")
                column12s = document.getElementById("column-border12")
                column13s = document.getElementById("column-border13")
                column14s = document.getElementById("column-border14")

                footer = document.getElementById("footer")

                kategori1 = document.getElementById("Kategori1")
                kategori2 = document.getElementById("Kategori2")
                kategori3 = document.getElementById("Kategori3")
                kategori4 = document.getElementById("Kategori4")
                kategori5 = document.getElementById("Kategori5")
                kategori6 = document.getElementById("Kategori6")
                kategori7 = document.getElementById("Kategori7")
                kategori8 = document.getElementById("Kategori8")
                kategori9 = document.getElementById("Kategori9")
                kategori10 = document.getElementById("Kategori10")
                kategori11 = document.getElementById("Kategori11")
                kategori12 = document.getElementById("Kategori12")
                kategori13 = document.getElementById("Kategori13")
                kategori14 = document.getElementById("Kategori14")

                page1 = document.getElementById("page1")
                page2 = document.getElementById("page2")
                document.getElementById("page1").onmouseover = function() {
                    menuMouseOver()
                };
                document.getElementById("page1").onmouseout = function() {
                    menuMouseOut()
                };

                leftNavbar = document.getElementById("leftNavbar")
                rightNavbar = document.getElementById("rightNavbar")
                icon = document.getElementById("icon")
                iconP = document.getElementById("iconPlaceholder")
                bC = document.getElementById("backgroundColumn")
                cC = document.getElementById("colorColumn")
                cB = document.getElementById("columnBorder")
                bP = document.getElementById("backgroundPage")
                cP = document.getElementById("colorPage")
                hP = document.getElementById("hoverPage")
                webkit = document.getElementById("webkit")

                function menuMouseOver() {
                    let page = document.getElementById("page1");
                    page.style.background = hP.value
                }

                function menuMouseOut() {
                    let page = document.getElementById("page1");
                    page.style.background = bP.value
                }

                const color = (event) => {

                    Navbar.style.background = "linear-gradient(to right," + leftNavbar.value + "," + rightNavbar.value + ")"

                    iconItem1.style.color = icon.value
                    iconItem2.style.color = icon.value
                    iconItem3.style.color = icon.value
                    iconItem4.style.color = icon.value
                    iconItem8.style.border = "3.4px solid" + icon.value
                    iconItem8.style.color = icon.value
                    iconItem8inner.innerHTML = ".Pencarian:focus::placeholder { color:" + icon.value + "}"
                    iconItem9.style.color = icon.value
                    iconItem10.innerHTML = ".Pencarian::placeholder { color:" + iconP.value + "}"
                    iconText1.style.color = icon.value
                    iconText2.style.color = icon.value
                    iconText3.style.color = icon.value
                    iconText4.style.color = icon.value

                    column1.style.background = bC.value
                    column2.style.background = bC.value
                    column3.style.background = bC.value
                    column4.style.background = bC.value
                    column5.style.background = bC.value
                    column6.style.background = bC.value
                    column7.style.background = bC.value
                    column8.style.background = bC.value
                    column9.style.background = bC.value
                    column10.style.background = bC.value
                    column11.style.background = bC.value
                    column12.style.background = bC.value
                    column13.style.background = bC.value
                    column14.style.background = bC.value

                    column1e.style.background = bC.value
                    column2e.style.background = bC.value
                    column3e.style.background = bC.value
                    column4e.style.background = bC.value
                    column5e.style.background = bC.value
                    column6e.style.background = bC.value
                    column7e.style.background = bC.value
                    column8e.style.background = bC.value
                    column9e.style.background = bC.value
                    column10e.style.background = bC.value
                    column11e.style.background = bC.value
                    column12e.style.background = bC.value
                    column13e.style.background = bC.value
                    column14e.style.background = bC.value

                    column1s.style.borderBottom = "4px solid" + cB.value
                    column2s.style.borderBottom = "4px solid" + cB.value
                    column3s.style.borderBottom = "4px solid" + cB.value
                    column4s.style.borderBottom = "4px solid" + cB.value
                    column5s.style.borderBottom = "4px solid" + cB.value
                    column6s.style.borderBottom = "4px solid" + cB.value
                    column7s.style.borderBottom = "4px solid" + cB.value
                    column8s.style.borderBottom = "4px solid" + cB.value
                    column9s.style.borderBottom = "4px solid" + cB.value
                    column10s.style.borderBottom = "4px solid" + cB.value
                    column11s.style.borderBottom = "4px solid" + cB.value
                    column12s.style.borderBottom = "4px solid" + cB.value
                    column13s.style.borderBottom = "4px solid" + cB.value
                    column14s.style.borderBottom = "4px solid" + cB.value

                    footer.style.borderTop = "1.2px solid" + cB.value

                    kategori1.style.color = cC.value
                    kategori2.style.color = cC.value
                    kategori3.style.color = cC.value
                    kategori4.style.color = cC.value
                    kategori5.style.color = cC.value
                    kategori6.style.color = cC.value
                    kategori7.style.color = cC.value
                    kategori8.style.color = cC.value
                    kategori9.style.color = cC.value
                    kategori10.style.color = cC.value
                    kategori11.style.color = cC.value
                    kategori12.style.color = cC.value
                    kategori13.style.color = cC.value
                    kategori14.style.color = cC.value

                    page1.style.background = bP.value
                    page2.style.color = cP.value
                }
            </script>

        </div>
        <!-- Home -->

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
        <script src="/CSS & JS/custom.js?v=<?php echo time(); ?>" defer></script>

    </div>

</body>

</html>