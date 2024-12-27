<div style="display: none;">
    <textarea>
<body></body>
        </textarea>
</div>

<div id="divP">

    <p id="PX" style="font-weight: 600;"><?= $createAdmin['Judul'] ?></p>

    <link href="/CSS & JS/libsCodeMirror/codemirror.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.js?v=<?php echo time(); ?>"></script>

    <script src="/CSS & JS/libsCodeMirror/xml.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/htmlmixed.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/css.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/javascript.js?v=<?php echo time(); ?>"></script>

    <script src="/CSS & JS/libsCodeMirror/show-hint.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/html-hint.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/css-hint.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/javascript-hint.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/closetag.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/matchtags.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/lint.js?v=<?php echo time(); ?>"></script>
    <script src="/CSS & JS/libsCodeMirror/css-lint.js?v=<?php echo time(); ?>"></script>

    <link rel="stylesheet" href="/CSS & JS/libsCodeMirror/show-hint.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/CSS & JS/libsCodeMirror/lint.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/CSS & JS/libsCodeMirror/dracula.css?v=<?php echo time(); ?>" />

    <link rel="stylesheet" href="/CSS & JS/tugas.css?v=<?php echo time(); ?>" />

    <?php if ($createAdmin['Kategori'] == "Tugas") { ?>

    <form action="/tugascontroller/save" id="formTugas" method="post" enctype="multipart/form-data">
        <div class="tugasDiv">
            <div class="tugasDivInput">

                <input type="text" placeholder="Nama" name="inputNama" required="">
                <input type="number" placeholder="NIM" name="inputNIM" required="">

                <select name="inputKelas">
                    <option value='A_IDL'>Kelas:ㅤA Indralaya</option>
                    <option value='B_IDL'>Kelas:ㅤB Indralaya</option>
                    <option value='A_PLG'>Kelas:ㅤA Palembang</option>
                    <option value='B_PLG'>Kelas:ㅤB Palembang</option>
                </select>

                <input type="hidden" value="<?= $createAdmin['ID'] ?>" name="inputID">

                <input type="hidden" name="inputTime" id="inputTimeK2" required="">
                <input type="hidden" name="inputDate" id="inputDateK2" required="">
                

            </div>
            
            <div class="buttonTugas">
                <input type="file" name="inputTugas" required="">
                <button id="on" form="formTugas" onclick="startTimeKomentar2()">Kirim</button>
            </div>
        </div>
    </form>

    <script type="text/javascript">
        function startTimeKomentar2() {
            const date = new Date();

            let TimeK = document.getElementById("inputTimeK2");
            let DateK = document.getElementById("inputDateK2");

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

            if (hour < 10) {
                if (minute < 10) {
                    TimeK.value = "0" + hour + ":0" + minute;
                } else if (minute > 9) {
                    TimeK.value = "0" + hour + ":" + minute;
                }
            } else if (hour > 9) {
                if (minute < 10) {
                    TimeK.value = hour + ":0" + minute;
                } else if (minute > 9) {
                    TimeK.value = hour + ":" + minute;
                }
            }

            DateK.value = bulan + " " + tanggal + " " + tahun;
            setTimeout(function() {
                startTimeK()
            }, 1000);
        }
    </script>

    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP1'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP1'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf1'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf1'] ?></p>
    <?php } ?>

    <style>
        .test {
            width: auto;
        }
    </style>

    <?php if ($createAdmin['infoCoding1'] !== "none" && $createAdmin['infoCoding1'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding1'] == "html runcode") { ?>
                            <button onclick="htmlButton1()" id="htmlButton1X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton1()" id="cssButton1X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton1()" id="jsButton1X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding1'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding1'] == "html runcode") { ?>
                            <button onclick="runCode1()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode1()" id="copyHTML1" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode1CSS()" id="copyCSS1" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode1JS()" id="copyJS1" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding1'] == "html" || $createAdmin['infoCoding1'] == "CodeIgniter 4" || $createAdmin['infoCoding1'] == "view.php" || $createAdmin['infoCoding1'] == "Controller.php" || $createAdmin['infoCoding1'] == "Model.php" || $createAdmin['infoCoding1'] == "Routes.php" || $createAdmin['infoCoding1'] == ".env" || $createAdmin['infoCoding1'] == "cmd") { ?>
                            <button onclick="copyCode1()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding1'] == "css") { ?>
                            <button onclick="copyCode1CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding1'] == "javascript") { ?>
                            <button onclick="copyCode1JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding1'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML1">
                            <textarea id="textArea1" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding1'] ?></textarea>
                        </div>
                        <div id="wadahCSS1">
                            <textarea id="cssCode1" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding1CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS1">
                            <textarea id="jsCode1" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding1JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding1'] == "html" || $createAdmin['infoCoding1'] == "CodeIgniter 4" || $createAdmin['infoCoding1'] == "view.php" || $createAdmin['infoCoding1'] == "Controller.php" || $createAdmin['infoCoding1'] == "Model.php" || $createAdmin['infoCoding1'] == "Routes.php" || $createAdmin['infoCoding1'] == ".env" || $createAdmin['infoCoding1'] == "cmd") { ?>

                    <div id="wadahHTML1">
                        <textarea id="textArea1" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding1'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS1">
                            <textarea id="cssCode1" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS1">
                            <textarea id="jsCode1" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding1'] == "css") { ?>

                    <div id="wadahCSS1">
                        <textarea id="cssCode1" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding1'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML1">
                            <textarea id="textArea1" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS1">
                            <textarea id="jsCode1" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding1'] == "javascript") { ?>


                    <div id="wadahJS1">
                        <textarea id="jsCode1" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding1'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML1">
                            <textarea id="textArea1" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS1">
                            <textarea id="cssCode1" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding1'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult1"></div>
                    <div class="result-container" id="cssResult1"></div>
                    <div class="result-container" id="jsResult1"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding1'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror1.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP2'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP2'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf2'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf2'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding2'] !== "none" && $createAdmin['infoCoding2'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding2'] == "html runcode") { ?>
                            <button onclick="htmlButton2()" id="htmlButton2X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton2()" id="cssButton2X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton2()" id="jsButton2X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding2'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding2'] == "html runcode") { ?>
                            <button onclick="runCode2()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode2()" id="copyHTML2" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode2CSS()" id="copyCSS2" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode2JS()" id="copyJS2" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding2'] == "html" || $createAdmin['infoCoding2'] == "CodeIgniter 4" || $createAdmin['infoCoding2'] == "view.php" || $createAdmin['infoCoding2'] == "Controller.php" || $createAdmin['infoCoding2'] == "Model.php" || $createAdmin['infoCoding2'] == "Routes.php" || $createAdmin['infoCoding2'] == ".env" || $createAdmin['infoCoding2'] == "cmd") { ?>
                            <button onclick="copyCode2()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding2'] == "css") { ?>
                            <button onclick="copyCode2CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding2'] == "javascript") { ?>
                            <button onclick="copyCode2JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding2'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML2">
                            <textarea id="textArea2" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding2'] ?></textarea>
                        </div>
                        <div id="wadahCSS2">
                            <textarea id="cssCode2" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding2CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS2">
                            <textarea id="jsCode2" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding2JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding2'] == "html" || $createAdmin['infoCoding2'] == "CodeIgniter 4" || $createAdmin['infoCoding2'] == "view.php" || $createAdmin['infoCoding2'] == "Controller.php" || $createAdmin['infoCoding2'] == "Model.php" || $createAdmin['infoCoding2'] == "Routes.php" || $createAdmin['infoCoding2'] == ".env" || $createAdmin['infoCoding2'] == "cmd") { ?>

                    <div id="wadahHTML2">
                        <textarea id="textArea2" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding2'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS2">
                            <textarea id="cssCode2" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS2">
                            <textarea id="jsCode2" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding2'] == "css") { ?>

                    <div id="wadahCSS2">
                        <textarea id="cssCode2" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding2'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML2">
                            <textarea id="textArea2" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS2">
                            <textarea id="jsCode2" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding2'] == "javascript") { ?>


                    <div id="wadahJS2">
                        <textarea id="jsCode2" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding2'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML2">
                            <textarea id="textArea2" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS2">
                            <textarea id="cssCode2" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding2'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult2"></div>
                    <div class="result-container" id="cssResult2"></div>
                    <div class="result-container" id="jsResult2"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding2'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror2.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP3'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP3'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf3'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf3'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding3'] !== "none" && $createAdmin['infoCoding3'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding3'] == "html runcode") { ?>
                            <button onclick="htmlButton3()" id="htmlButton3X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton3()" id="cssButton3X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton3()" id="jsButton3X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding3'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding3'] == "html runcode") { ?>
                            <button onclick="runCode3()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode3()" id="copyHTML3" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode3CSS()" id="copyCSS3" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode3JS()" id="copyJS3" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding3'] == "html" || $createAdmin['infoCoding3'] == "CodeIgniter 4" || $createAdmin['infoCoding3'] == "view.php" || $createAdmin['infoCoding3'] == "Controller.php" || $createAdmin['infoCoding3'] == "Model.php" || $createAdmin['infoCoding3'] == "Routes.php" || $createAdmin['infoCoding3'] == ".env" || $createAdmin['infoCoding3'] == "cmd") { ?>
                            <button onclick="copyCode3()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding3'] == "css") { ?>
                            <button onclick="copyCode3CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding3'] == "javascript") { ?>
                            <button onclick="copyCode3JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding3'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML3">
                            <textarea id="textArea3" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding3'] ?></textarea>
                        </div>
                        <div id="wadahCSS3">
                            <textarea id="cssCode3" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding3CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS3">
                            <textarea id="jsCode3" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding3JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding3'] == "html" || $createAdmin['infoCoding3'] == "CodeIgniter 4" || $createAdmin['infoCoding3'] == "view.php" || $createAdmin['infoCoding3'] == "Controller.php" || $createAdmin['infoCoding3'] == "Model.php" || $createAdmin['infoCoding3'] == "Routes.php" || $createAdmin['infoCoding3'] == ".env" || $createAdmin['infoCoding3'] == "cmd") { ?>

                    <div id="wadahHTML3">
                        <textarea id="textArea3" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding3'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS3">
                            <textarea id="cssCode3" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS3">
                            <textarea id="jsCode3" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding3'] == "css") { ?>

                    <div id="wadahCSS3">
                        <textarea id="cssCode3" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding3'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML3">
                            <textarea id="textArea3" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS3">
                            <textarea id="jsCode3" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding3'] == "javascript") { ?>


                    <div id="wadahJS3">
                        <textarea id="jsCode3" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding3'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML3">
                            <textarea id="textArea3" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS3">
                            <textarea id="cssCode3" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding3'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult3"></div>
                    <div class="result-container" id="cssResult3"></div>
                    <div class="result-container" id="jsResult3"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding3'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror3.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP4'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP4'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf4'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf4'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding4'] !== "none" && $createAdmin['infoCoding4'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding4'] == "html runcode") { ?>
                            <button onclick="htmlButton4()" id="htmlButton4X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton4()" id="cssButton4X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton4()" id="jsButton4X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding4'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding4'] == "html runcode") { ?>
                            <button onclick="runCode4()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode4()" id="copyHTML4" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode4CSS()" id="copyCSS4" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode4JS()" id="copyJS4" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding4'] == "html" || $createAdmin['infoCoding4'] == "CodeIgniter 4" || $createAdmin['infoCoding4'] == "view.php" || $createAdmin['infoCoding4'] == "Controller.php" || $createAdmin['infoCoding4'] == "Model.php" || $createAdmin['infoCoding4'] == "Routes.php" || $createAdmin['infoCoding4'] == ".env" || $createAdmin['infoCoding4'] == "cmd") { ?>
                            <button onclick="copyCode4()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding4'] == "css") { ?>
                            <button onclick="copyCode4CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding4'] == "javascript") { ?>
                            <button onclick="copyCode4JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding4'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML4">
                            <textarea id="textArea4" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding4'] ?></textarea>
                        </div>
                        <div id="wadahCSS4">
                            <textarea id="cssCode4" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding4CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS4">
                            <textarea id="jsCode4" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding4JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding4'] == "html" || $createAdmin['infoCoding4'] == "CodeIgniter 4" || $createAdmin['infoCoding4'] == "view.php" || $createAdmin['infoCoding4'] == "Controller.php" || $createAdmin['infoCoding4'] == "Model.php" || $createAdmin['infoCoding4'] == "Routes.php" || $createAdmin['infoCoding4'] == ".env" || $createAdmin['infoCoding4'] == "cmd") { ?>

                    <div id="wadahHTML4">
                        <textarea id="textArea4" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding4'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS4">
                            <textarea id="cssCode4" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS4">
                            <textarea id="jsCode4" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding4'] == "css") { ?>

                    <div id="wadahCSS4">
                        <textarea id="cssCode4" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding4'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML4">
                            <textarea id="textArea4" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS4">
                            <textarea id="jsCode4" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding4'] == "javascript") { ?>


                    <div id="wadahJS4">
                        <textarea id="jsCode4" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding4'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML4">
                            <textarea id="textArea4" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS4">
                            <textarea id="cssCode4" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding4'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult4"></div>
                    <div class="result-container" id="cssResult4"></div>
                    <div class="result-container" id="jsResult4"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding4'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror4.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP5'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP5'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf5'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf5'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding5'] !== "none" && $createAdmin['infoCoding5'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding5'] == "html runcode") { ?>
                            <button onclick="htmlButton5()" id="htmlButton5X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton5()" id="cssButton5X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton5()" id="jsButton5X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding5'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding5'] == "html runcode") { ?>
                            <button onclick="runCode5()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode5()" id="copyHTML5" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode5CSS()" id="copyCSS5" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode5JS()" id="copyJS5" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding5'] == "html" || $createAdmin['infoCoding5'] == "CodeIgniter 4" || $createAdmin['infoCoding5'] == "view.php" || $createAdmin['infoCoding5'] == "Controller.php" || $createAdmin['infoCoding5'] == "Model.php" || $createAdmin['infoCoding5'] == "Routes.php" || $createAdmin['infoCoding5'] == ".env" || $createAdmin['infoCoding5'] == "cmd") { ?>
                            <button onclick="copyCode5()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding5'] == "css") { ?>
                            <button onclick="copyCode5CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding5'] == "javascript") { ?>
                            <button onclick="copyCode5JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding5'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML5">
                            <textarea id="textArea5" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding5'] ?></textarea>
                        </div>
                        <div id="wadahCSS5">
                            <textarea id="cssCode5" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding5CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS5">
                            <textarea id="jsCode5" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding5JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding5'] == "html" || $createAdmin['infoCoding5'] == "CodeIgniter 4" || $createAdmin['infoCoding5'] == "view.php" || $createAdmin['infoCoding5'] == "Controller.php" || $createAdmin['infoCoding5'] == "Model.php" || $createAdmin['infoCoding5'] == "Routes.php" || $createAdmin['infoCoding5'] == ".env" || $createAdmin['infoCoding5'] == "cmd") { ?>

                    <div id="wadahHTML5">
                        <textarea id="textArea5" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding5'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS5">
                            <textarea id="cssCode5" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS5">
                            <textarea id="jsCode5" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding5'] == "css") { ?>

                    <div id="wadahCSS5">
                        <textarea id="cssCode5" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding5'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML5">
                            <textarea id="textArea5" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS5">
                            <textarea id="jsCode5" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding5'] == "javascript") { ?>


                    <div id="wadahJS5">
                        <textarea id="jsCode5" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding5'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML5">
                            <textarea id="textArea5" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS5">
                            <textarea id="cssCode5" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding5'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult5"></div>
                    <div class="result-container" id="cssResult5"></div>
                    <div class="result-container" id="jsResult5"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding5'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror5.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP6'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP6'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf6'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf6'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding6'] !== "none" && $createAdmin['infoCoding6'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding6'] == "html runcode") { ?>
                            <button onclick="htmlButton6()" id="htmlButton6X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton6()" id="cssButton6X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton6()" id="jsButton6X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding6'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding6'] == "html runcode") { ?>
                            <button onclick="runCode6()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode6()" id="copyHTML6" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode6CSS()" id="copyCSS6" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode6JS()" id="copyJS6" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding6'] == "html" || $createAdmin['infoCoding6'] == "CodeIgniter 4" || $createAdmin['infoCoding6'] == "view.php" || $createAdmin['infoCoding6'] == "Controller.php" || $createAdmin['infoCoding6'] == "Model.php" || $createAdmin['infoCoding6'] == "Routes.php" || $createAdmin['infoCoding6'] == ".env" || $createAdmin['infoCoding6'] == "cmd") { ?>
                            <button onclick="copyCode6()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding6'] == "css") { ?>
                            <button onclick="copyCode6CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding6'] == "javascript") { ?>
                            <button onclick="copyCode6JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding6'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML6">
                            <textarea id="textArea6" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding6'] ?></textarea>
                        </div>
                        <div id="wadahCSS6">
                            <textarea id="cssCode6" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding6CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS6">
                            <textarea id="jsCode6" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding6JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding6'] == "html" || $createAdmin['infoCoding6'] == "CodeIgniter 4" || $createAdmin['infoCoding6'] == "view.php" || $createAdmin['infoCoding6'] == "Controller.php" || $createAdmin['infoCoding6'] == "Model.php" || $createAdmin['infoCoding6'] == "Routes.php" || $createAdmin['infoCoding6'] == ".env" || $createAdmin['infoCoding6'] == "cmd") { ?>

                    <div id="wadahHTML6">
                        <textarea id="textArea6" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding6'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS6">
                            <textarea id="cssCode6" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS6">
                            <textarea id="jsCode6" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding6'] == "css") { ?>

                    <div id="wadahCSS6">
                        <textarea id="cssCode6" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding6'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML6">
                            <textarea id="textArea6" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS6">
                            <textarea id="jsCode6" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding6'] == "javascript") { ?>


                    <div id="wadahJS6">
                        <textarea id="jsCode6" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding6'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML6">
                            <textarea id="textArea6" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS6">
                            <textarea id="cssCode6" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding6'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult6"></div>
                    <div class="result-container" id="cssResult6"></div>
                    <div class="result-container" id="jsResult6"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding6'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror6.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP7'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP7'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf7'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf7'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding7'] !== "none" && $createAdmin['infoCoding7'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding7'] == "html runcode") { ?>
                            <button onclick="htmlButton7()" id="htmlButton7X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton7()" id="cssButton7X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton7()" id="jsButton7X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding7'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding7'] == "html runcode") { ?>
                            <button onclick="runCode7()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode7()" id="copyHTML7" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode7CSS()" id="copyCSS7" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode7JS()" id="copyJS7" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding7'] == "html" || $createAdmin['infoCoding7'] == "CodeIgniter 4" || $createAdmin['infoCoding7'] == "view.php" || $createAdmin['infoCoding7'] == "Controller.php" || $createAdmin['infoCoding7'] == "Model.php" || $createAdmin['infoCoding7'] == "Routes.php" || $createAdmin['infoCoding7'] == ".env" || $createAdmin['infoCoding7'] == "cmd") { ?>
                            <button onclick="copyCode7()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding7'] == "css") { ?>
                            <button onclick="copyCode7CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding7'] == "javascript") { ?>
                            <button onclick="copyCode7JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding7'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML7">
                            <textarea id="textArea7" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding7'] ?></textarea>
                        </div>
                        <div id="wadahCSS7">
                            <textarea id="cssCode7" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding7CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS7">
                            <textarea id="jsCode7" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding7JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding7'] == "html" || $createAdmin['infoCoding7'] == "CodeIgniter 4" || $createAdmin['infoCoding7'] == "view.php" || $createAdmin['infoCoding7'] == "Controller.php" || $createAdmin['infoCoding7'] == "Model.php" || $createAdmin['infoCoding7'] == "Routes.php" || $createAdmin['infoCoding7'] == ".env" || $createAdmin['infoCoding7'] == "cmd") { ?>

                    <div id="wadahHTML7">
                        <textarea id="textArea7" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding7'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS7">
                            <textarea id="cssCode7" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS7">
                            <textarea id="jsCode7" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding7'] == "css") { ?>

                    <div id="wadahCSS7">
                        <textarea id="cssCode7" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding7'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML7">
                            <textarea id="textArea7" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS7">
                            <textarea id="jsCode7" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding7'] == "javascript") { ?>


                    <div id="wadahJS7">
                        <textarea id="jsCode7" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding7'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML7">
                            <textarea id="textArea7" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS7">
                            <textarea id="cssCode7" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding7'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult7"></div>
                    <div class="result-container" id="cssResult7"></div>
                    <div class="result-container" id="jsResult7"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding7'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror7.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP8'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP8'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf8'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf8'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding8'] !== "none" && $createAdmin['infoCoding8'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding8'] == "html runcode") { ?>
                            <button onclick="htmlButton8()" id="htmlButton8X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton8()" id="cssButton8X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton8()" id="jsButton8X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding8'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding8'] == "html runcode") { ?>
                            <button onclick="runCode8()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode8()" id="copyHTML8" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode8CSS()" id="copyCSS8" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode8JS()" id="copyJS8" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding8'] == "html" || $createAdmin['infoCoding8'] == "CodeIgniter 4" || $createAdmin['infoCoding8'] == "view.php" || $createAdmin['infoCoding8'] == "Controller.php" || $createAdmin['infoCoding8'] == "Model.php" || $createAdmin['infoCoding8'] == "Routes.php" || $createAdmin['infoCoding8'] == ".env" || $createAdmin['infoCoding8'] == "cmd") { ?>
                            <button onclick="copyCode8()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding8'] == "css") { ?>
                            <button onclick="copyCode8CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding8'] == "javascript") { ?>
                            <button onclick="copyCode8JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding8'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML8">
                            <textarea id="textArea8" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding8'] ?></textarea>
                        </div>
                        <div id="wadahCSS8">
                            <textarea id="cssCode8" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding8CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS8">
                            <textarea id="jsCode8" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding8JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding8'] == "html" || $createAdmin['infoCoding8'] == "CodeIgniter 4" || $createAdmin['infoCoding8'] == "view.php" || $createAdmin['infoCoding8'] == "Controller.php" || $createAdmin['infoCoding8'] == "Model.php" || $createAdmin['infoCoding8'] == "Routes.php" || $createAdmin['infoCoding8'] == ".env" || $createAdmin['infoCoding8'] == "cmd") { ?>

                    <div id="wadahHTML8">
                        <textarea id="textArea8" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding8'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS8">
                            <textarea id="cssCode8" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS8">
                            <textarea id="jsCode8" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding8'] == "css") { ?>

                    <div id="wadahCSS8">
                        <textarea id="cssCode8" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding8'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML8">
                            <textarea id="textArea8" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS8">
                            <textarea id="jsCode8" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding8'] == "javascript") { ?>


                    <div id="wadahJS8">
                        <textarea id="jsCode8" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding8'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML8">
                            <textarea id="textArea8" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS8">
                            <textarea id="cssCode8" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding8'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult8"></div>
                    <div class="result-container" id="cssResult8"></div>
                    <div class="result-container" id="jsResult8"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding8'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror8.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP9'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP9'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf9'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf9'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding9'] !== "none" && $createAdmin['infoCoding9'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding9'] == "html runcode") { ?>
                            <button onclick="htmlButton9()" id="htmlButton9X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton9()" id="cssButton9X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton9()" id="jsButton9X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding9'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding9'] == "html runcode") { ?>
                            <button onclick="runCode9()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode9()" id="copyHTML9" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode9CSS()" id="copyCSS9" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode9JS()" id="copyJS9" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding9'] == "html" || $createAdmin['infoCoding9'] == "CodeIgniter 4" || $createAdmin['infoCoding9'] == "view.php" || $createAdmin['infoCoding9'] == "Controller.php" || $createAdmin['infoCoding9'] == "Model.php" || $createAdmin['infoCoding9'] == "Routes.php" || $createAdmin['infoCoding9'] == ".env" || $createAdmin['infoCoding9'] == "cmd") { ?>
                            <button onclick="copyCode9()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding9'] == "css") { ?>
                            <button onclick="copyCode9CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding9'] == "javascript") { ?>
                            <button onclick="copyCode9JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding9'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML9">
                            <textarea id="textArea9" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding9'] ?></textarea>
                        </div>
                        <div id="wadahCSS9">
                            <textarea id="cssCode9" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding9CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS9">
                            <textarea id="jsCode9" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding9JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding9'] == "html" || $createAdmin['infoCoding9'] == "CodeIgniter 4" || $createAdmin['infoCoding9'] == "view.php" || $createAdmin['infoCoding9'] == "Controller.php" || $createAdmin['infoCoding9'] == "Model.php" || $createAdmin['infoCoding9'] == "Routes.php" || $createAdmin['infoCoding9'] == ".env" || $createAdmin['infoCoding9'] == "cmd") { ?>

                    <div id="wadahHTML9">
                        <textarea id="textArea9" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding9'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS9">
                            <textarea id="cssCode9" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS9">
                            <textarea id="jsCode9" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding9'] == "css") { ?>

                    <div id="wadahCSS9">
                        <textarea id="cssCode9" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding9'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML9">
                            <textarea id="textArea9" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS9">
                            <textarea id="jsCode9" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding9'] == "javascript") { ?>


                    <div id="wadahJS9">
                        <textarea id="jsCode9" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding9'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML9">
                            <textarea id="textArea9" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS9">
                            <textarea id="cssCode9" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding9'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult9"></div>
                    <div class="result-container" id="cssResult9"></div>
                    <div class="result-container" id="jsResult9"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding9'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror9.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP10'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP10'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf10'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf10'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding10'] !== "none" && $createAdmin['infoCoding10'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding10'] == "html runcode") { ?>
                            <button onclick="htmlButton10()" id="htmlButton10X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton10()" id="cssButton10X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton10()" id="jsButton10X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding10'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding10'] == "html runcode") { ?>
                            <button onclick="runCode10()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode10()" id="copyHTML10" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode10CSS()" id="copyCSS10" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode10JS()" id="copyJS10" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding10'] == "html" || $createAdmin['infoCoding10'] == "CodeIgniter 4" || $createAdmin['infoCoding10'] == "view.php" || $createAdmin['infoCoding10'] == "Controller.php" || $createAdmin['infoCoding10'] == "Model.php" || $createAdmin['infoCoding10'] == "Routes.php" || $createAdmin['infoCoding10'] == ".env" || $createAdmin['infoCoding10'] == "cmd") { ?>
                            <button onclick="copyCode10()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding10'] == "css") { ?>
                            <button onclick="copyCode10CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding10'] == "javascript") { ?>
                            <button onclick="copyCode10JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding10'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML10">
                            <textarea id="textArea10" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding10'] ?></textarea>
                        </div>
                        <div id="wadahCSS10">
                            <textarea id="cssCode10" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding10CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS10">
                            <textarea id="jsCode10" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding10JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding10'] == "html" || $createAdmin['infoCoding10'] == "CodeIgniter 4" || $createAdmin['infoCoding10'] == "view.php" || $createAdmin['infoCoding10'] == "Controller.php" || $createAdmin['infoCoding10'] == "Model.php" || $createAdmin['infoCoding10'] == "Routes.php" || $createAdmin['infoCoding10'] == ".env" || $createAdmin['infoCoding10'] == "cmd") { ?>

                    <div id="wadahHTML10">
                        <textarea id="textArea10" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding10'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS10">
                            <textarea id="cssCode10" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS10">
                            <textarea id="jsCode10" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding10'] == "css") { ?>

                    <div id="wadahCSS10">
                        <textarea id="cssCode10" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding10'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML10">
                            <textarea id="textArea10" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS10">
                            <textarea id="jsCode10" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding10'] == "javascript") { ?>


                    <div id="wadahJS10">
                        <textarea id="jsCode10" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding10'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML10">
                            <textarea id="textArea10" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS10">
                            <textarea id="cssCode10" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding10'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult10"></div>
                    <div class="result-container" id="cssResult10"></div>
                    <div class="result-container" id="jsResult10"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding10'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror10.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP11'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP11'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf11'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf11'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding11'] !== "none" && $createAdmin['infoCoding11'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding11'] == "html runcode") { ?>
                            <button onclick="htmlButton11()" id="htmlButton11X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton11()" id="cssButton11X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton11()" id="jsButton11X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding11'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding11'] == "html runcode") { ?>
                            <button onclick="runCode11()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode11()" id="copyHTML11" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode11CSS()" id="copyCSS11" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode11JS()" id="copyJS11" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding11'] == "html" || $createAdmin['infoCoding11'] == "CodeIgniter 4" || $createAdmin['infoCoding11'] == "view.php" || $createAdmin['infoCoding11'] == "Controller.php" || $createAdmin['infoCoding11'] == "Model.php" || $createAdmin['infoCoding11'] == "Routes.php" || $createAdmin['infoCoding11'] == ".env" || $createAdmin['infoCoding11'] == "cmd") { ?>
                            <button onclick="copyCode11()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding11'] == "css") { ?>
                            <button onclick="copyCode11CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding11'] == "javascript") { ?>
                            <button onclick="copyCode11JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding11'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML11">
                            <textarea id="textArea11" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding11'] ?></textarea>
                        </div>
                        <div id="wadahCSS11">
                            <textarea id="cssCode11" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding11CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS11">
                            <textarea id="jsCode11" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding11JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding11'] == "html" || $createAdmin['infoCoding11'] == "CodeIgniter 4" || $createAdmin['infoCoding11'] == "view.php" || $createAdmin['infoCoding11'] == "Controller.php" || $createAdmin['infoCoding11'] == "Model.php" || $createAdmin['infoCoding11'] == "Routes.php" || $createAdmin['infoCoding11'] == ".env" || $createAdmin['infoCoding11'] == "cmd") { ?>

                    <div id="wadahHTML11">
                        <textarea id="textArea11" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding11'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS11">
                            <textarea id="cssCode11" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS11">
                            <textarea id="jsCode11" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding11'] == "css") { ?>

                    <div id="wadahCSS11">
                        <textarea id="cssCode11" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding11'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML11">
                            <textarea id="textArea11" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS11">
                            <textarea id="jsCode11" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding11'] == "javascript") { ?>


                    <div id="wadahJS11">
                        <textarea id="jsCode11" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding11'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML11">
                            <textarea id="textArea11" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS11">
                            <textarea id="cssCode11" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding11'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult11"></div>
                    <div class="result-container" id="cssResult11"></div>
                    <div class="result-container" id="jsResult11"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding11'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror11.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <?php if ($createAdmin['PictureP12'] !== "") { ?>
        <div id="P-Pic"><img src="/ArticlePicture/<?= $createAdmin['PictureP12'] ?>" id="P-PicX"></div>
    <?php } ?>
    <?php if ($createAdmin['Paragraf12'] !== "") { ?>
        <p id="P"><?= $createAdmin['Paragraf12'] ?></p>
    <?php } ?>

    <?php if ($createAdmin['infoCoding12'] !== "none" && $createAdmin['infoCoding12'] !== "") { ?>
        <div class="wadahTextOutput">
            <div class="wadahTextArea">
                <div class="headerTextArea">
                    <div>

                        <?php if ($createAdmin['infoCoding12'] == "html runcode") { ?>
                            <button onclick="htmlButton12()" id="htmlButton12X" class="buttonRunCopy">
                                html
                            </button>
                            <button onclick="cssButton12()" id="cssButton12X" class="buttonRunCopy" style="color: gray">
                                css
                            </button>
                            <button onclick="jsButton12()" id="jsButton12X" class="buttonRunCopy" style="color: gray">
                                javascript
                            </button>
                        <?php } else { ?>
                            <p class="pInfoCoding"><?= $createAdmin['infoCoding12'] ?></p>
                        <?php } ?>
                    </div>
                    <div>

                        <?php if ($createAdmin['infoCoding12'] == "html runcode") { ?>
                            <button onclick="runCode12()" class="buttonRunCopy">
                                Run
                            </button>
                            <button onclick="copyCode12()" id="copyHTML12" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode12CSS()" id="copyCSS12" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                            <button onclick="copyCode12JS()" id="copyJS12" style="display: none;" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding12'] == "html" || $createAdmin['infoCoding12'] == "CodeIgniter 4" || $createAdmin['infoCoding12'] == "view.php" || $createAdmin['infoCoding12'] == "Controller.php" || $createAdmin['infoCoding12'] == "Model.php" || $createAdmin['infoCoding12'] == "Routes.php" || $createAdmin['infoCoding12'] == ".env" || $createAdmin['infoCoding12'] == "cmd") { ?>
                            <button onclick="copyCode12()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding12'] == "css") { ?>
                            <button onclick="copyCode12CSS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } else if ($createAdmin['infoCoding12'] == "javascript") { ?>
                            <button onclick="copyCode12JS()" class="buttonRunCopy">
                                <ion-icon name="clipboard-outline" class="clipboard-RunCode"></ion-icon>
                                Copy code
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <?php if ($createAdmin['infoCoding12'] == "html runcode") { ?>

                    <div class="wadahHTMLCSSJS">

                        <div id="wadahHTML12">
                            <textarea id="textArea12" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding12'] ?></textarea>
                        </div>
                        <div id="wadahCSS12">
                            <textarea id="cssCode12" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding12CSS'] ?></textarea>
                        </div>
                        <div id="wadahJS12">
                            <textarea id="jsCode12" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding12JS'] ?></textarea>
                        </div>

                    </div>

                <?php } else if ($createAdmin['infoCoding12'] == "html" || $createAdmin['infoCoding12'] == "CodeIgniter 4" || $createAdmin['infoCoding12'] == "view.php" || $createAdmin['infoCoding12'] == "Controller.php" || $createAdmin['infoCoding12'] == "Model.php" || $createAdmin['infoCoding12'] == "Routes.php" || $createAdmin['infoCoding12'] == ".env" || $createAdmin['infoCoding12'] == "cmd") { ?>

                    <div id="wadahHTML12">
                        <textarea id="textArea12" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding12'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahCSS12">
                            <textarea id="cssCode12" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS12">
                            <textarea id="jsCode12" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding12'] == "css") { ?>

                    <div id="wadahCSS12">
                        <textarea id="cssCode12" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding12'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML12">
                            <textarea id="textArea12" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                        <div id="wadahJS12">
                            <textarea id="jsCode12" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } else if ($createAdmin['infoCoding12'] == "javascript") { ?>


                    <div id="wadahJS12">
                        <textarea id="jsCode12" class="textAreaDesain" wrap="off"><?= $createAdmin['Coding12'] ?></textarea>
                    </div>

                    <div style="display: none">
                        <div id="wadahHTML12">
                            <textarea id="textArea12" class="textAreaDesain" wrap="off"></textarea>
                        </div>

                        <div id="wadahCSS12">
                            <textarea id="cssCode12" class="textAreaDesain" wrap="off"></textarea>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <?php if ($createAdmin['infoCoding12'] == "html runcode") { ?>
                <div class="outputTextArea">
                    <div class="result-container" id="htmlResult12"></div>
                    <div class="result-container" id="cssResult12"></div>
                    <div class="result-container" id="jsResult12"></div>
                </div>
            <?php } ?>
        </div>

        <?php if ($createAdmin['infoCoding12'] !== "none") { ?>
            <script src="/CSS & JS/codeMirror/codeMirror12.js?v=<?php echo time(); ?>" defer></script>
        <?php } ?>
    <?php } ?>

    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->
    <!-- Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas Pembatas -->

    <br>

    <?php if ($createAdmin['View'] > 11) { ?>
        <p id="PX2" style="font-weight:600">Writer: <?= $createAdmin['Penulis'] ?></p>
        <p id="PX" class="viewUnder" style="font-weight:600"><?= $createAdmin['View'] ?> Views</p>
    <?php } else { ?>
        <p id="PX" style="font-weight:600">Writer: <?= $createAdmin['Penulis'] ?></p>
    <?php } ?>

</div>

<div id="divPUnder"></div>

<div style="display: none;">
    <textarea>
<body></body>
        </textarea>
</div>