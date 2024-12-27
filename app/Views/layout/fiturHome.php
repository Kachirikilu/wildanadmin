<!-- Color -->

<ul id="ul-top3Color" class="ul-top3DU" style="display: none;">
    <div id="center">
        <div id="centerDU">
            <div id="container-Fitur">

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slideColor">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/color/<?= session()->get('ID') ?>" id="color" method="post" enctype="multipart/form-data">
                                        <input value="" type="hidden" name="inputColor">
                                        <input value="W1" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/colornull" id="color" method="post" enctype="multipart/form-data">
                                        <input value="" type="hidden" name="inputColor">
                                        <input value="W1" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="color" name="color" type="submit" value="upload"><img id="originalPicture" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slideColor">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/color/<?= session()->get('ID') ?>" id="colorNight" method="post" enctype="multipart/form-data">
                                        <input value="nightEdition" type="hidden" name="inputColor">
                                        <input value="W2" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/colornull" id="colorNight" method="post" enctype="multipart/form-data">
                                        <input value="nightEdition" type="hidden" name="inputColor">
                                        <input value="W2" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="colorNight" name="colorNight" type="submit" value="upload"><img src="/FileWeb/Desain/Night Mode.png" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slideColor">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/color/<?= session()->get('ID') ?>" id="colorApriza" method="post" enctype="multipart/form-data">
                                        <input value="aprizaEdition" type="hidden" name="inputColor">
                                        <input value="W3" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/colornull" id="colorApriza" method="post" enctype="multipart/form-data">
                                        <input value="aprizaEdition" type="hidden" name="inputColor">
                                        <input value="W3" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="colorApriza" name="colorApriza" type="submit" value="upload"><img id="aprizaEditionPicture" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slideColor">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/color/<?= session()->get('ID') ?>" id="colorVira" method="post" enctype="multipart/form-data">
                                        <input value="viraEdition" type="hidden" name="inputColor">
                                        <input value="W4" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/colornull" id="colorVira" method="post" enctype="multipart/form-data">
                                        <input value="viraEdition" type="hidden" name="inputColor">
                                        <input value="W4" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="colorVira" name="colorVira" type="submit" value="upload"><img id="viraEditionPicture" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slideColor">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/color/<?= session()->get('ID') ?>" id="colorAulia" method="post" enctype="multipart/form-data">
                                        <input value="auliaEdition" type="hidden" name="inputColor">
                                        <input value="W5" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/colornull" id="colorAulia" method="post" enctype="multipart/form-data">
                                        <input value="auliaEdition" type="hidden" name="inputColor">
                                        <input value="W5" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="colorAulia" name="colorAulia" type="submit" value="upload"><img id="auliaEditionPicture" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slideColor">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/color/<?= session()->get('ID') ?>" id="colorDaffa" method="post" enctype="multipart/form-data">
                                        <input value="daffaEdition" type="hidden" name="inputColor">
                                        <input value="W6" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/colornull" id="colorDaffa" method="post" enctype="multipart/form-data">
                                        <input value="daffaEdition" type="hidden" name="inputColor">
                                        <input value="W6" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="colorDaffa" name="colorDaffa" type="submit" value="upload"><img id="daffaEditionPicture" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slideColor">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/color/<?= session()->get('ID') ?>" id="colorAncaGTG" method="post" enctype="multipart/form-data">
                                        <input value="ancaGTGEdition" type="hidden" name="inputColor">
                                        <input value="W7" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/colornull" id="colorAncaGTG" method="post" enctype="multipart/form-data">
                                        <input value="ancaGTGEdition" type="hidden" name="inputColor">
                                        <input value="W7" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="colorAncaGTG" name="colorAncaGTG" type="submit" value="upload"><img id="ancaGTGEditionPicture" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</ul>

<!-- Color -->

<input type="hidden" value="" id="autoNightModeAll">

<script type="text/javascript">
    let autoNightModeAll = document.getElementById("autoNightModeAll");

    const dateAll = new Date();
    let hourAll = dateAll.getHours();
    autoNightModeAll.value = hourAll;

    let originalPicture = document.getElementById("originalPicture");
    let aprizaEditionPicture = document.getElementById("aprizaEditionPicture");
    let viraEditionPicture = document.getElementById("viraEditionPicture");
    let auliaEditionPicture = document.getElementById("auliaEditionPicture");
    let daffaEditionPicture = document.getElementById("daffaEditionPicture");
    let ancaGTGEditionPicture = document.getElementById("ancaGTGEditionPicture");

    if (autoNightModeAll.value < 6 && autoNightModeAll.value >= 0 || autoNightModeAll.value <= 24 && autoNightModeAll.value >= 18) {
        originalPicture.src = "/FileWeb/Desain/Original Night.png";
        aprizaEditionPicture.src = "/FileWeb/Desain/Apriza Night.png";
        viraEditionPicture.src = "/FileWeb/Desain/Vira Night.png";
        auliaEditionPicture.src = "/FileWeb/Desain/Aulia Night.png";
        daffaEditionPicture.src = "/FileWeb/Desain/Daffa Night.png";
        ancaGTGEditionPicture.src = "/FileWeb/Desain/Anca GTG Night.png";
    } else if (autoNightModeAll.value < 18 && autoNightModeAll.value >= 6) {
        originalPicture.src = "/FileWeb/Desain/Original.png";
        aprizaEditionPicture.src = "/FileWeb/Desain/Apriza.png";
        viraEditionPicture.src = "/FileWeb/Desain/Vira.png";
        auliaEditionPicture.src = "/FileWeb/Desain/Aulia.png";
        daffaEditionPicture.src = "/FileWeb/Desain/Daffa.png";
        ancaGTGEditionPicture.src = "/FileWeb/Desain/Anca GTG.png";
    }
</script>

<!-- Image -->

<ul id="ul-top3Image" class="ul-top3DU" style="display: none;">
    <div id="center">
        <div id="centerDU">
            <div id="container-Fitur">

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW1" method="post" enctype="multipart/form-data">
                                        <input value="W1" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW1" method="post" enctype="multipart/form-data">
                                        <input value="W1" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW1" name="imageW1" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W1.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW2" method="post" enctype="multipart/form-data">
                                        <input value="W2" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW2" method="post" enctype="multipart/form-data">
                                        <input value="W2" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW2" name="imageW2" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W2.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW3" method="post" enctype="multipart/form-data">
                                        <input value="W3" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW3" method="post" enctype="multipart/form-data">
                                        <input value="W3" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW3" name="imageW3" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W3.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW4" method="post" enctype="multipart/form-data">
                                        <input value="W4" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW4" method="post" enctype="multipart/form-data">
                                        <input value="W4" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW4" name="imageW4" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W4.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW5" method="post" enctype="multipart/form-data">
                                        <input value="W5" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW5" method="post" enctype="multipart/form-data">
                                        <input value="W5" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW5" name="imageW5" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W5.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW6" method="post" enctype="multipart/form-data">
                                        <input value="W6" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW6" method="post" enctype="multipart/form-data">
                                        <input value="W6" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW6" name="imageW6" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W6.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW7" method="post" enctype="multipart/form-data">
                                        <input value="W7" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW7" method="post" enctype="multipart/form-data">
                                        <input value="W7" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW7" name="imageW7" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W7.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW8" method="post" enctype="multipart/form-data">
                                        <input value="W8" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW8" method="post" enctype="multipart/form-data">
                                        <input value="W8" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW8" name="imageW8" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W8.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW9" method="post" enctype="multipart/form-data">
                                        <input value="W9" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW9" method="post" enctype="multipart/form-data">
                                        <input value="W9" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW9" name="imageW9" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W9.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW10" method="post" enctype="multipart/form-data">
                                        <input value="W10" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW10" method="post" enctype="multipart/form-data">
                                        <input value="W10" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW10" name="imageW10" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W10.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="image11" method="post" enctype="multipart/form-data">
                                        <input value="W11" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="image11" method="post" enctype="multipart/form-data">
                                        <input value="W11" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="image11" name="image11" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W11.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-Fitur">
                    <div class="du-slide">
                        <div class="dp-slidePicture">
                            <div class="dp-slideLX">

                                <?php if (session()->get('ID') !== null) { ?>
                                    <form action="/registrasicontroller/image/<?= session()->get('ID') ?>" id="imageW12" method="post" enctype="multipart/form-data">
                                        <input value="W12" type="hidden" name="inputImage">
                                        <input value="<?= session()->get('PasswordSession') ?>" type="hidden" name="inputPS" autofocus>
                                    </form>
                                <?php } else { ?>
                                    <form action="/registrasicontroller/imagenull" id="imageW12" method="post" enctype="multipart/form-data">
                                        <input value="W12" type="hidden" name="inputImage">
                                    </form>
                                <?php } ?>

                                <a><button id="du-slidePicture" form="imageW12" name="imageW12" type="submit" value="upload"><img src="/FileWeb/Wallpaper Preview/W12.jpg" class="dp-slidePictureX"></button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</ul>

<!-- Image -->

<div id="blur2" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">
    <div id="blur3" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">
        <div id="blur4" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">
            <div id="blur5" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">