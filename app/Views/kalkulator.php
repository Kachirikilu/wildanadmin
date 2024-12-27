<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
    <link rel="stylesheet" href="/CSS & JS/mobile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/loginMobile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/loginBackground.css?v=<?php echo time(); ?>">
</head>

<body id="background" class="mobileBody">

    <main class="WadahKalkulatorHP">
        <form class="layerKalkulatorOnHP" id="layarHP" style="display: none;">

            <div id="poni">
                <div id="poniX"><a href="/" style="text-decoration: none; color: white;">Calculator by Wildan A.M.</a></div>
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




            <p id="primaOutput" class="outputPrima"></p>

            <input type="hidden" placeholder="0" id="outputPrima">
            <input type="hidden" placeholder="0" id="layerKalkulatorHPX">
            <input placeholder="0" id="layerKalkulatorHP">
            <section class="buttonKalkulatorHP">
                <div class="buttonKalkulatorLHP" id="bRight1HP">
                    <button class="tombolKalkuUHP" form="" onclick="displayHP('clear')">AC</button>
                    <button class="tombolKalkuUHP" form="" onclick="displayHP('del')">del</button>
                    <button class="tombolKalkuUHP" form="" onclick="displayHP('%')">%</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('÷')">÷</button>

                    <button class="tombolKalkuXHP" form="" onclick="displayHP('7')">7</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('8')">8</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('9')">9</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('×')">×</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('4')">4</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('5')">5</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('6')">6</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('-')">-</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('1')">1</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('2')">2</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('3')">3</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('+')">+</button>

                    <button class="tombolKalkuHP" form="" onclick="MoreHP()">M</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('0')">0</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('.')">.</button>
                    <button class="tombolKalkuXXHP" form="" onclick="displayHP('action')">=</button>
                </div>

                <div class="buttonKalkulatorLHP" id="bRight2HP" style="display: none;">
                    <button class="tombolKalkuUHP" form="" onclick="displayHP('clear')">AC</button>
                    <button class="tombolKalkuUHP" form="" onclick="displayHP('del')">del</button>
                    <button class="tombolKalkuUHP" form="" onclick="displayHP('%')">%</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('kurungL')">(</button>

                    <button class="tombolKalkuXHP" form="" onclick="displayHP('7')">7</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('8')">8</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('9')">9</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('kurungR')">)</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('4')">4</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('5')">5</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('6')">6</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('*1e+1')">e</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('1')">1</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('2')">2</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('3')">3</button>
                    <button class="tombolKalkuHP" form="" onclick="displayHP('+')">+</button>

                    <button class="tombolKalkuHP" form="" onclick="MoreHP()">M</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('0')">0</button>
                    <button class="tombolKalkuXHP" form="" onclick="displayHP('.')">.</button>
                    <button class="tombolKalkuXXHP" form="" onclick="displayHP('action')">=</button>
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