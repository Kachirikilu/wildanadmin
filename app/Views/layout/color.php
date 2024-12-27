<!DOCTYPE html>

<html lang="en">

<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if (session()->get('Color') == "nightEdition") { ?>

        <link rel="stylesheet" href="/CSS & JS/colorSpesial/nightEdition.css?v=<?php echo time(); ?>" id="linkHrefColor">
        <input type="hidden" value="" id="autoNightModeColor">

        <script type="text/javascript">
            function startTime() {

                let autoNightModeColor = document.getElementById("autoNightModeColor");

                const dateColor = new Date();
                let hourColor = dateColor.getHours();
                autoNightModeColor.value = hourColor;

                let linkHrefColor = document.getElementById("linkHrefColor");
                if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/nightEdition.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Dark");
                } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/nightEdition.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Light");
                }

                setTimeout(function() {
                    startTime()
                }, 60000);
            }

            if (localStorage) {
                themeColor = localStorage.getItem("themeColor")
            }
            if (themeColor == "Light") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/nightEdition.css?v=<?php echo time(); ?>";
            } else if (themeColor == "Dark") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/nightEdition.css?v=<?php echo time(); ?>";
            }
        </script>

        <?php if (session()->get('Versi') !== "Lite") { ?>

            <?php if (session()->get('Image') == "") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W1") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W2") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W3") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w3.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W4") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W5") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W6") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W7") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W8") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w8.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W9") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w9.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W10") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w10.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W11") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w11.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W12") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w12.css?v=<?php echo time(); ?>">
            <?php } ?>

        <?php } ?>



    <?php } else if (session()->get('Color') == "aprizaEdition") { ?>

        <link rel="stylesheet" href="/CSS & JS/colorSpesial/aprizaEdition.css?v=<?php echo time(); ?>" id="linkHrefColor">
        <input type="hidden" value="" id="autoNightModeColor">

        <script type="text/javascript">
            function startTime() {

                let autoNightModeColor = document.getElementById("autoNightModeColor");

                const dateColor = new Date();
                let hourColor = dateColor.getHours();
                autoNightModeColor.value = hourColor;

                let linkHrefColor = document.getElementById("linkHrefColor");
                if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/aprizaEditionNightAuto.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Dark");
                } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/aprizaEdition.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Light");
                }

                setTimeout(function() {
                    startTime()
                }, 60000);
            }

            if (localStorage) {
                themeColor = localStorage.getItem("themeColor")
            }
            if (themeColor == "Light") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/aprizaEdition.css?v=<?php echo time(); ?>";
            } else if (themeColor == "Dark") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/aprizaEditionNightAuto.css?v=<?php echo time(); ?>";
            }
        </script>

        <?php if (session()->get('Versi') !== "Lite") { ?>

            <?php if (session()->get('Image') == "") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W1") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W2") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W3") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w3.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W4") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W5") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W6") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W7") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W8") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w8.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W9") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w9.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W10") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w10.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W11") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w11.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W12") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w12.css?v=<?php echo time(); ?>">
            <?php } ?>

        <?php } ?>



    <?php } else if (session()->get('Color') == "viraEdition") { ?>

        <link rel="stylesheet" href="/CSS & JS/colorSpesial/viraEdition.css?v=<?php echo time(); ?>" id="linkHrefColor">
        <input type="hidden" value="" id="autoNightModeColor">

        <script type="text/javascript">
            function startTime() {

                let autoNightModeColor = document.getElementById("autoNightModeColor");

                const dateColor = new Date();
                let hourColor = dateColor.getHours();
                autoNightModeColor.value = hourColor;

                let linkHrefColor = document.getElementById("linkHrefColor");
                if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/viraEditionNightAuto.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Dark");
                } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/viraEdition.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Light");
                }

                setTimeout(function() {
                    startTime()
                }, 60000);
            }

            if (localStorage) {
                themeColor = localStorage.getItem("themeColor")
            }
            if (themeColor == "Light") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/viraEdition.css?v=<?php echo time(); ?>";
            } else if (themeColor == "Dark") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/viraEditionNightAuto.css?v=<?php echo time(); ?>";
            }
        </script>

        <?php if (session()->get('Versi') !== "Lite") { ?>

            <?php if (session()->get('Image') == "") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W1") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W2") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W3") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w3.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W4") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W5") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W6") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W7") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W8") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w8.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W9") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w9.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W10") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w10.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W11") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w11.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W12") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w12.css?v=<?php echo time(); ?>">
            <?php } ?>

        <?php } ?>



    <?php } else if (session()->get('Color') == "auliaEdition") { ?>

        <link rel="stylesheet" href="/CSS & JS/colorSpesial/auliaEdition.css?v=<?php echo time(); ?>" id="linkHrefColor">
        <input type="hidden" value="" id="autoNightModeColor">

        <script type="text/javascript">
            function startTime() {

                let autoNightModeColor = document.getElementById("autoNightModeColor");

                const dateColor = new Date();
                let hourColor = dateColor.getHours();
                autoNightModeColor.value = hourColor;

                let linkHrefColor = document.getElementById("linkHrefColor");
                if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/auliaEditionNightAuto.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Dark");
                } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/auliaEdition.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Light");
                }

                setTimeout(function() {
                    startTime()
                }, 60000);
            }

            if (localStorage) {
                themeColor = localStorage.getItem("themeColor")
            }
            if (themeColor == "Light") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/auliaEdition.css?v=<?php echo time(); ?>";
            } else if (themeColor == "Dark") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/auliaEditionNightAuto.css?v=<?php echo time(); ?>";
            }
        </script>

        <?php if (session()->get('Versi') !== "Lite") { ?>

            <?php if (session()->get('Image') == "") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W1") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W2") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W3") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w3.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W4") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W5") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W6") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W7") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W8") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w8.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W9") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w9.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W10") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w10.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W11") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w11.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W12") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w12.css?v=<?php echo time(); ?>">
            <?php } ?>

        <?php } ?>



    <?php } else if (session()->get('Color') == "daffaEdition") { ?>

        <link rel="stylesheet" href="/CSS & JS/colorSpesial/daffaEdition.css?v=<?php echo time(); ?>" id="linkHrefColor">
        <input type="hidden" value="" id="autoNightModeColor">

        <script type="text/javascript">
            function startTime() {

                let autoNightModeColor = document.getElementById("autoNightModeColor");

                const dateColor = new Date();
                let hourColor = dateColor.getHours();
                autoNightModeColor.value = hourColor;

                let linkHrefColor = document.getElementById("linkHrefColor");
                if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/daffaEditionNightAuto.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Dark");
                } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/daffaEdition.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Light");
                }

                setTimeout(function() {
                    startTime()
                }, 60000);
            }

            if (localStorage) {
                themeColor = localStorage.getItem("themeColor")
            }
            if (themeColor == "Light") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/daffaEdition.css?v=<?php echo time(); ?>";
            } else if (themeColor == "Dark") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/daffaEditionNightAuto.css?v=<?php echo time(); ?>";
            }
        </script>

        <?php if (session()->get('Versi') !== "Lite") { ?>

            <?php if (session()->get('Image') == "") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W1") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W2") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W3") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w3.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W4") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W5") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W6") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W7") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W8") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w8.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W9") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w9.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W10") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w10.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W11") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w11.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W12") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w12.css?v=<?php echo time(); ?>">
            <?php } ?>

        <?php } ?>



    <?php } else if (session()->get('Color') == "ancaGTGEdition") { ?>

        <link rel="stylesheet" href="/CSS & JS/colorSpesial/ancaGTGEdition.css?v=<?php echo time(); ?>" id="linkHrefColor">
        <input type="hidden" value="" id="autoNightModeColor">

        <script type="text/javascript">
            function startTime() {

                let autoNightModeColor = document.getElementById("autoNightModeColor");

                const dateColor = new Date();
                let hourColor = dateColor.getHours();
                autoNightModeColor.value = hourColor;

                let linkHrefColor = document.getElementById("linkHrefColor");
                if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/ancaGTGEditionNightAuto.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Dark");
                } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/ancaGTGEdition.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Light");
                }

                setTimeout(function() {
                    startTime()
                }, 60000);
            }

            if (localStorage) {
                themeColor = localStorage.getItem("themeColor")
            }
            if (themeColor == "Light") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/ancaGTGEdition.css?v=<?php echo time(); ?>";
            } else if (themeColor == "Dark") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/ancaGTGEditionNightAuto.css?v=<?php echo time(); ?>";
            }
        </script>

        <?php if (session()->get('Versi') !== "Lite") { ?>

            <?php if (session()->get('Image') == "") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W1") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W2") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W3") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w3.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W4") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W5") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W6") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W7") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W8") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w8.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W9") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w9.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W10") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w10.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W11") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w11.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W12") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w12.css?v=<?php echo time(); ?>">
            <?php } ?>

        <?php } ?>



    <?php } else { ?>


        <link href="/CSS & JS/colorSpesial/original.css?v=<?php echo time(); ?>" rel="stylesheet" id="linkHrefColor">
        <input type="hidden" id="autoNightModeColor">

        <script type="text/javascript">
            function startTime() {

                let autoNightModeColor = document.getElementById("autoNightModeColor");

                const dateColor = new Date();
                let hourColor = dateColor.getHours();
                autoNightModeColor.value = hourColor;

                let linkHrefColor = document.getElementById("linkHrefColor");
                if (autoNightModeColor.value < 6 && autoNightModeColor.value >= 0 || autoNightModeColor.value <= 24 && autoNightModeColor.value >= 18) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/originalNightAuto.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Dark");
                } else if (autoNightModeColor.value < 18 && autoNightModeColor.value >= 6) {
                    linkHrefColor.href = "/CSS & JS/colorSpesial/original.css?v=<?php echo time(); ?>";
                    localStorage.setItem("themeColor", "Light");
                }

                setTimeout(function() {
                    startTime()
                }, 60000);
            }

            if (localStorage) {
                themeColor = localStorage.getItem("themeColor")
            }
            if (themeColor == "Light") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/original.css?v=<?php echo time(); ?>";
            } else if (themeColor == "Dark") {
                linkHrefColor.href = "/CSS & JS/colorSpesial/originalNightAuto.css?v=<?php echo time(); ?>";
            }
        </script>

        <?php if (session()->get('Versi') !== "Lite") { ?>

            <?php if (session()->get('Image') == "") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W1") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w1.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W2") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w2.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W3") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w3.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W4") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w4.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W5") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w5.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W6") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w6.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W7") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w7.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W8") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w8.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W9") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w9.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W10") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w10.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W11") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w11.css?v=<?php echo time(); ?>">
            <?php } else if (session()->get('Image') == "W12") { ?>
                <link rel="stylesheet" href="/CSS & JS/imageSpesial/w12.css?v=<?php echo time(); ?>">
            <?php } ?>

        <?php } ?>

    <?php } ?>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            let websiteContainer = document.getElementById("background");
            websiteContainer.style.opacity = 1;
        });
    </script>

<div style="display: none;">
    <textarea>
<body></body>
        </textarea>
</div>

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/xml/xml.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/htmlmixed/htmlmixed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/css/css.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/javascript/javascript.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/hint/show-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/hint/html-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/hint/css-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/hint/javascript-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/edit/closetag.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/edit/matchtags.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/lint/lint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/lint/css-lint.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/hint/show-hint.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/addon/lint/lint.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/theme/dracula.css" /> -->