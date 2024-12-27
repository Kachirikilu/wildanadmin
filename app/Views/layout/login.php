<button class="buttonLogin" form="login" name="login" type="submit" value="upload">
    <ion-icon name="log-in-outline" style="transform: scale(1.5); margin-right:1.6px"></ion-icon> Login
</button>

</center>
</div>

</div>

</div>
</div>
<div class="footerUnder">
    <div class="iconFooterDiv">
        <ion-icon name="arrow-back-outline" class="iconFooter" style="transform: scale(1.2);"></ion-icon>
        <ion-icon name="arrow-forward" class="iconFooter" style="transform: scale(1.2);"></ion-icon>
        <div class="addIconFooter"><ion-icon name="add" class="iconFooter" style="transform: scale(1.5);"></ion-icon></div>
        <div class="iconFooterX">
            <p style="transform: translateX(-0.62px);">14</p>
        </div>
        <ion-icon name="ellipsis-horizontal" class="iconFooter" style="transform: scale(1.2);"></ion-icon>
    </div>
</div>
</div>

<div class="footerMobile">
    <a href="/" class="gesturiPhone"></a>
</div>

<div class="iFrameMobileBottom"></div>

<script type="text/javascript">
    let iFrame = document.getElementById("iFrame");
    let search = document.getElementById("inputSearch");

    function searchButton() {
        iFrame.src = search.value;
    }

    function startTimeMobileClock() {

        const date = new Date();
        let d = date.getDay();
        let h = date.getHours();
        let m = date.getMinutes();
        if (h < 10) {
            if (m < 10) {
                document.getElementById("clockNavMobile").innerHTML = "0" + h + ".0" + m
            } else if (m > 9) {
                document.getElementById("clockNavMobile").innerHTML = "0" + h + "." + m
            }
        } else if (h > 9) {
            if (m < 10) {
                document.getElementById("clockNavMobile").innerHTML = h + ".0" + m
            } else if (m > 9) {
                document.getElementById("clockNavMobile").innerHTML = h + "." + m
            }
        }

        let tahun = date.getFullYear();
        let bulanX = date.getMonth();
        let tanggalX = date.getDate();
        let hour = date.getHours();
        let minute = date.getMinutes();

        if (bulanX == 0) {
            bulan = "Jan";
        } else if (bulanX == 1) {
            bulan = "Feb";
        } else if (bulanX == 2) {
            bulan = "Mar";
        } else if (bulanX == 3) {
            bulan = "Apr";
        } else if (bulanX == 4) {
            bulan = "May";
        } else if (bulanX == 5) {
            bulan = "Jun";
        } else if (bulanX == 6) {
            bulan = "Jul";
        } else if (bulanX == 7) {
            bulan = "Aug";
        } else if (bulanX == 8) {
            bulan = "Sep";
        } else if (bulanX == 9) {
            bulan = "Oct";
        } else if (bulanX == 10) {
            bulan = "Nov";
        } else if (bulanX == 11) {
            bulan = "Dec";
        }

        if (tanggalX < 10) {
            tanggal = "0" + tanggalX;
        } else if (tanggalX > 9) {
            tanggal = tanggalX;
        }

        document.getElementById("tanggalSession").value = date.toDateString();
        document.getElementById("tanggalSessionL").value = bulan + " " + tanggal + " " + tahun;

        if (d == 0) {
            document.getElementById("dayNavMobile").innerHTML = "Sun"
        } else if (d == 1) {
            document.getElementById("dayNavMobile").innerHTML = "Mon"
        } else if (d == 2) {
            document.getElementById("dayNavMobile").innerHTML = "Tue"
        } else if (d == 3) {
            document.getElementById("dayNavMobile").innerHTML = "Wed"
        } else if (d == 4) {
            document.getElementById("dayNavMobile").innerHTML = "Thu"
        } else if (d == 5) {
            document.getElementById("dayNavMobile").innerHTML = "Fri"
        } else if (d == 6) {
            document.getElementById("dayNavMobile").innerHTML = "Sat"
        }

        setTimeout(function() {
            startTimeMobileClock()
        }, 1000);
    }

    function copylink() {
        search.select();
        search.setSelectionRange(0, 99999);

        navigator.clipboard.writeText(search.value);
    }
</script>

</div>
<form class="layerKalkulatorHP" id="layaroffHP" style="display: none;">

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
          <button id="gesturiPhone" onclick="homeButton()" class="gesturiPhone"></button>

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

</div>

<div class="animated-Background">
    <div class="container-Background">
        <div class="bubbles">

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:10" class="spanApriza"></span>
            <span style="--i:15" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:10" class="spanApriza"></span>
            <span style="--i:15" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:10" class="spanApriza"></span>
            <span style="--i:15" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:10" class="spanApriza"></span>
            <span style="--i:15" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

        </div>
    </div>
</div>

<script src="/CSS & JS/kalkulator.js?v=<?php echo time(); ?>" defer></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<div style="display: none;">
    <textarea>
<body></body>
        </textarea>
</div>

</body>

</html>