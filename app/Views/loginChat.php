<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="/CSS & JS/mobile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/loginMobile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/loginBackground.css?v=<?php echo time(); ?>">
</head>

<body id="background" class="mobileLoginBody" onload="startTimeMobileClock()" style="overflow-y: hidden;">

    <div id="diviPhone" style="display: flex;" class="diviPhone">

        <main class="WadahKalkulatorHP">
            <div class="layerKalkulatorOnHPMobile" id="layarHP" style="display: inline;">

                <div id="poni">
                    <div id="poniX"><a href="/registrasi_chat" style="text-decoration: none; color: white;">Go to registration</a></div>
                </div>

                <button form="" id="lonceng"></button>
                <button form="" id="volUp"></button>
                <button form="" id="volDown"></button>
                <button form="" onclick="onHP()" id="on-off"></button>

                <div class="poni">
                    <div id="poniRS1" class="poniR1">OO</div>
                </div>
                <div class="poni">
                    <div id="poniRS2" class="poniR1X">00</div>
                </div>
                <div class="poni">
                    <div id="poniRS3" class="poniR2">O</div>
                </div>
                <div class="poni">
                    <div id="poniRS4" class="poniR2X">0</div>
                </div>
                <div class="navMobile">
                    <div style="display: flex; gap: 5.2px">
                        <div class="navMobileLeft" id="clockNavMobile"></div>
                        <div class="navMobileLeft" id="dayNavMobile"></div>
                    </div>
                    <div class="navMobileRight">
                        <ion-icon name="cellular" class="navSignal"></ion-icon>
                        <ion-icon name="wifi" class="navWiFi"></ion-icon>
                        <ion-icon name="battery-full"></ion-icon>
                    </div>
                </div>

                <div class="iFrameDiv" style="overflow: hidden;">
                    <div class="iFrameMobileTop">
                        <div class="inputiFrameDiv">
                            <ion-icon name="lock-closed" class="inputLock"></ion-icon>
                            <input type="text" class="inputiFrame" id="inputSearch" value="https://wildanadmin.000webhostapp.com" onchange="searchButton()">
                            <button class="inputCopyButton" onclick="copylink()"><ion-icon name="open-outline" class="inputCopy"></ion-icon></button>
                        </div>
                    </div>
                    <div class="iFrameDivX">
                        <div class="iFrameLoginMobile" id="iFrame">

                            <div class="loginDiv">

                                <form action="/registrasicontroller/loginchat" id="login" method="post" enctype="multipart/form-data">
                                    <center>
                                        <div class="validationClass" id="validasiOutput1" style="margin-bottom: 7px;"><?= session()->get('UserNameSS') ?></div>
                                    </center>
                                    <div>
                                        <center><input class="inputLogin" type="text" id="inputUserName" name="inputUserName" placeholder="Email or username" required="" autofocus></center>
                                    </div>
                                    <center>
                                        <div class="validationClass" id="validasiOutput2"><?= session()->get('PasswordSS') ?></div>
                                    </center>
                                    <div>
                                        <center><input class="inputLogin" type="password" id="inputPassword" name="inputPassword" name="inputPasswordSession" placeholder="Password" required="" autofocus></center>
                                    </div>
                                    <div>
                                        <center><input class="inputLogin" type="hidden" id="inputPasswordSession" name="inputPasswordSession" placeholder="Password" required="" autofocus></center>
                                    </div>
                                    <div>
                                        <center><select class="inputLoginSelect" name="inputVersion">
                                                <option value='Chat'>Chat feature</option>
                                                <option value='lastUpdate'>Last update</option>
                                                <option value='Lite'>Lite version</option>
                                                <option value='Mobile'>Mobile edition</option>
                                                <option value='BETA'>Oldest version</option>
                                                <option value='Custom'>Submit custom</option>
                                        </center></select>
                                    </div>
                                    <div>

                                        <input type="hidden" value="<?= session()->get('UserNameSS') ?>" id="validasiInput1">
                                        <input type="hidden" value="<?= session()->get('PasswordSS') ?>" id="validasiInput2">
                                        <script language="JavaScript">
                                            let password = document.getElementById("inputPassword");
                                            let passwordSession = document.getElementById("inputPasswordSession");
                                            password.onkeyup = password.onkeypress = function() {
                                                passwordSession.value = this.value;
                                            }

                                            let validasi1 = document.getElementById("validasiInput1")
                                            let validasiOut1 = document.getElementById("validasiOutput1")
                                            if (validasi1.value == "") {
                                                validasiOut1.style.display = "none"
                                            }

                                            let validasi2 = document.getElementById("validasiInput2")
                                            let validasiOut2 = document.getElementById("validasiOutput2")
                                            if (validasi2.value == "") {
                                                validasiOut2.style.display = "none"
                                            }
                                        </script>

                                        <input type="hidden" name="inputDateSession" id="tanggalSession" require="">
                                        <input type="hidden" name="inputDateSessionL" id="tanggalSessionL" require="">

                                    </div>
                                    <div class="user-Profil">
                                </form>
                                <center>
                                    <a href="/registrasi_chat" class="NewAccount">New account</a>