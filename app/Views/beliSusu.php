<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beli Susu</title>
    <link rel="stylesheet" href="/CSS & JS/mobile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/loginMobile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/loginBackground.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="/CSS & JS/webkit.css?v=<?php echo time(); ?>"> -->
</head>

<body id="background" class="mobileBody">

    <main class="WadahKalkulatorHP">
        <form class="layerKalkulatorOnHP" id="layarHP" style="display: none;">

            <div id="poni">
                <div id="poniX">Beli Susu</div>
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

            <input type="hidden" placeholder="" id="layerKalkulatorHPX">

            <center>
                <div id="layerSUSU">Apakah kamu lihat kentang?</div>
                <select class="inputSusu" id="inputKentang">
                    <option value="0">Tidak lihat</option>
                    <option value="1">Lihat, tapi hanya satu.</option>
                    <option value="2">Lihat, tapi hanya dua.</option>
                    <option value="3">Lihat, tapi hanya tiga.</option>
                    <option value="4">Lihat, dan jumlahnya cukup.</option>
                    <option value="4">Lihat, ada banyak kentang di sini.</option>
                    <option value="5.1">Lihat, hanya satu tapi tidak ada telur.</option>
                    <option value="5.2">Lihat, hanya dua tapi tidak ada telur.</option>
                    <option value="5.3">Lihat, hanya tiga tapi tidak ada telur.</option>
                    <option value="5.4">Lihat, ada 4 tapi tidak ada telur.</option>
                    <option value="5.4">Lihat, ada banyak kentang tapi tidak ada telur.</option>
                    <option value="6">Jangankan kentang, telur juga tidak ada.</option>
                </select>
                <button onclick="go()" form="" style="border-radius: 0.8em; border: 1px solid gray; background: rgba(255, 255, 255, 0.5)">Go</button>
            </center>
            
            <section class="buttonKalkulatorHP">
                <div class="buttonKalkulatorLHP" id="bRight1HP">
                    <div style=" text-align:left; padding: 12px">Tugas:
                        <div id="task">

                        </div>
                    </div>
                </div>
                </div>
            </section>
        </form>
        <form class="layerKalkulatorHP" id="layaroffHP" style="display: inline;">

            <div id="poni">
                <div class="poniR1">OO</div>
            </div>
            <div id="poni">
                <div class="poniR1X">00</div>
            </div>
            <div id="poni">
                <div class="poniR2">O</div>
            </div>
            <div id="poni">
                <div class="poniR2X">0</div>
            </div>

            <button form="" id="lonceng"></button>
            <button form="" id="volUp"></button>
            <button form="" id="volDown"></button>
            <button form="" onclick="onHP()" id="on-off"></button>

        </form>

        <div class="bottomPhone">
            <button id="gesturiPhone" style="display: none;" class="gesturiPhone"></button>

            <div class="bottomPhoneRL">
                <button form="" id="antena"></button>
                <div class="bottomSpeakerL">
                    <div id="speaker1"></div>
                    <div id="speaker2"></div>
                    <div id="speaker3"></div>
                </div>
            </div>

            <button form="" id="baut1"></button>
            <button form="" id="charger"></button>
            <button form="" id="baut2"></button>

            <div class="bottomPhoneRL">
                <div class="bottomSpeakerR">
                    <div id="speaker4"></div>
                    <div id="speaker5"></div>
                    <div id="speaker6"></div>
                    <div id="speaker7"></div>
                    <div id="speaker8"></div>
                </div>
            </div>
        </div>

    </main>

    <script src="/CSS & JS/kalkulator.js?v=<?php echo time(); ?>" defer></script>

</body>

</html>