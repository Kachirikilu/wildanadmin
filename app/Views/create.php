    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/create.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/upload.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/chat.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/slide.css?v=<?php echo time(); ?>">

    <?php if (session()->get('Pangkat') == "CEO") { ?>
        <title>Create | Owner</title>
    <?php } else if (session()->get('Pangkat') == "Admin") { ?>
        <title>Create | Admin</title>
    <?php } ?>

    </head>

    <body id="background" onload="startTime()">

    <div style="display: none;">
        <textarea>
<body></body>
        </textarea>
    </div>

        <!-- Create Function -->

        <div class="WadahCreateT">
            <div class="WadahCreateFlex">

                <center>
                    <div class="WadahCreate">
                        <nav class="WadahCreateNav">
                            <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonCreateBack">
                                    <span id="textBack" class="colorNavCreateED">Back</span>
                                    <span id="textCreate" class="colorNavCreateED">Create Form</span>
                                </button></a>
                        </nav>
                        <?= csrf_field(); ?>

                        <div class="WadahCreateIsi">
                            <form action="/createcontroller/save" id="create" method="post" enctype="multipart/form-data">
                                <a style="color: red;"><?= $validation->getError('inputTitle') ?></a>
                                <div>
                                    <center><input class="inputCreateJ" type="text" id="inputTitle" name="inputTitle" placeholder="Title" required="" value="<?= old('inputTitle') ?>" autofocus></center>
                                </div>

                                <div>
                                    <img id="picturePreviewP1" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: inline;" id="DivP1">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP1') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP1" style="display: none;" name="inputP1" autofocus>
                                        <button class="buttonPicture" id="Picture1" form="" onclick="Picture1()" style="display: inline;">
                                            <ion-icon id="iconPic1" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf2" form="" onclick="Paragraf2()" style="display: inline;">
                                            <ion-icon id="iconP2" name="add-outline" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display1('clear')" id="deleteP1" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding1" onchange="buttonCoding1()" class="inputCreateOpsiX" name="inputInfoCoding1">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Routes.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf1" name="inputParagraf1" placeholder="Paragraph 1" required="" autofocus><?= old('inputParagraf1') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding1" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding1"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding1" placeholder="Coding 1" autofocus wrap="off"><?= old('inputCoding1') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding1CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding1CSS" placeholder="Coding 1" autofocus wrap="off"><?= old('inputCoding1CC') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding1JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding1JS" placeholder="Coding 1" autofocus wrap="off"><?= old('inputCoding1JS') ?></textarea>
                                    </div>
                                </div>


                                <div>
                                    <img id="picturePreviewP2" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP2">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP2') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP2" style="display: none;" name="inputP2" autofocus>
                                        <button class="buttonPicture" id="Picture2" form="" onclick="Picture2()" style="display: inline;">
                                            <ion-icon id="iconPic2" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf3" form="" onclick="Paragraf3()" style="display: inline;">
                                            <ion-icon id="iconP3" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display2('clear')" id="deleteP2" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding2" onchange="buttonCoding2()" class="inputCreateOpsiX" name="inputInfoCoding2">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf2" name="inputParagraf2" placeholder="Paragraph 2" autofocus><?= old('inputParagraf2') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding2" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding2"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding2" placeholder="Coding 2" autofocus wrap="off"><?= old('inputCoding2') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding2CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding2CSS" placeholder="Coding 2" autofocus wrap="off"><?= old('inputCoding2CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding2JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding2JS" placeholder="Coding 2" autofocus wrap="off"><?= old('inputCoding2JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP3" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP3">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP3') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP3" style="display: none;" name="inputP3" autofocus>
                                        <button class="buttonPicture" id="Picture3" form="" onclick="Picture3()" style="display: inline;">
                                            <ion-icon id="iconPic3" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf4" form="" onclick="Paragraf4()" style="display: inline;">
                                            <ion-icon id="iconP4" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display3('clear')" id="deleteP3" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding3" onchange="buttonCoding3()" class="inputCreateOpsiX" name="inputInfoCoding3">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf3" name="inputParagraf3" placeholder="Paragraph 3" autofocus><?= old('inputParagraf3') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding3" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding3"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding3" placeholder="Coding 3" autofocus wrap="off"><?= old('inputCoding3') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding3CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding3CSS" placeholder="Coding 3" autofocus wrap="off"><?= old('inputCoding3CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding3JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding3JS" placeholder="Coding 3" autofocus wrap="off"><?= old('inputCoding3JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP4" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP4">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP4') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP4" style="display: none;" name="inputP4" autofocus>
                                        <button class="buttonPicture" id="Picture4" form="" onclick="Picture4()" style="display: inline;">
                                            <ion-icon id="iconPic4" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf5" form="" onclick="Paragraf5()" style="display: inline;">
                                            <ion-icon id="iconP5" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display4('clear')" id="deleteP4" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding4" onchange="buttonCoding4()" class="inputCreateOpsiX" name="inputInfoCoding4">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf4" name="inputParagraf4" placeholder="Paragraph 4" autofocus><?= old('inputParagraf4') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding4" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding4"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding4" placeholder="Coding 4" autofocus wrap="off"><?= old('inputCoding4') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding4CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding4CSS" placeholder="Coding 4" autofocus wrap="off"><?= old('inputCoding4CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding4JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding4JS" placeholder="Coding 4" autofocus wrap="off"><?= old('inputCoding4JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP5" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP5">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP5') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP5" style="display: none;" name="inputP5" autofocus>
                                        <button class="buttonPicture" id="Picture5" form="" onclick="Picture5()" style="display: inline;">
                                            <ion-icon id="iconPic5" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf6" form="" onclick="Paragraf6()" style="display: inline;">
                                            <ion-icon id="iconP6" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display5('clear')" id="deleteP5" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding5" onchange="buttonCoding5()" class="inputCreateOpsiX" name="inputInfoCoding5">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf5" name="inputParagraf5" placeholder="Paragraph 5" autofocus><?= old('inputParagraf5') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding5" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding5"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding5" placeholder="Coding 5" autofocus wrap="off"><?= old('inputCoding5') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding5CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding5CSS" placeholder="Coding 5" autofocus wrap="off"><?= old('inputCoding5CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding5JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding5JS" placeholder="Coding 5" autofocus wrap="off"><?= old('inputCoding5JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP6" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP6">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP6') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP6" style="display: none;" name="inputP6" autofocus>
                                        <button class="buttonPicture" id="Picture6" form="" onclick="Picture6()" style="display: inline;">
                                            <ion-icon id="iconPic6" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf7" form="" onclick="Paragraf7()" style="display: inline;">
                                            <ion-icon id="iconP7" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display6('clear')" id="deleteP6" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding6" onchange="buttonCoding6()" class="inputCreateOpsiX" name="inputInfoCoding6">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf6" name="inputParagraf6" placeholder="Paragraph 6" autofocus><?= old('inputParagraf6') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding6" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding6"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding6" placeholder="Coding 6" autofocus wrap="off"><?= old('inputCoding6') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding6CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding6CSS" placeholder="Coding 6" autofocus wrap="off"><?= old('inputCoding6CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding6JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding6JS" placeholder="Coding 6" autofocus wrap="off"><?= old('inputCoding6JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP7" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP7">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP7') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP7" style="display: none;" name="inputP7" autofocus>
                                        <button class="buttonPicture" id="Picture7" form="" onclick="Picture7()" style="display: inline;">
                                            <ion-icon id="iconPic7" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf8" form="" onclick="Paragraf8()" style="display: inline;">
                                            <ion-icon id="iconP8" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display7('clear')" id="deleteP7" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding7" onchange="buttonCoding7()" class="inputCreateOpsiX" name="inputInfoCoding7">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf7" name="inputParagraf7" placeholder="Paragraph 7" autofocus><?= old('inputParagraf7') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding7" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding7"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding7" placeholder="Coding 7" autofocus wrap="off"><?= old('inputCoding7') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding7CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding7CSS" placeholder="Coding 7" autofocus wrap="off"><?= old('inputCoding7CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding7JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding7JS" placeholder="Coding 7" autofocus wrap="off"><?= old('inputCoding7JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP8" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP8">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP8') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP8" style="display: none;" name="inputP8" autofocus>
                                        <button class="buttonPicture" id="Picture8" form="" onclick="Picture8()" style="display: inline;">
                                            <ion-icon id="iconPic8" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf9" form="" onclick="Paragraf9()" style="display: inline;">
                                            <ion-icon id="iconP9" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display8('clear')" id="deleteP8" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding8" onchange="buttonCoding8()" class="inputCreateOpsiX" name="inputInfoCoding8">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf8" name="inputParagraf8" placeholder="Paragraph 8" autofocus><?= old('inputParagraf8') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding8" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding8"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding8" placeholder="Coding 8" autofocus wrap="off"><?= old('inputCoding8') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding8CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding8CSS" placeholder="Coding 8" autofocus wrap="off"><?= old('inputCoding8CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding8JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding8JS" placeholder="Coding 8" autofocus wrap="off"><?= old('inputCoding8JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP9" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP9">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP9') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP9" style="display: none;" name="inputP9" autofocus>
                                        <button class="buttonPicture" id="Picture9" form="" onclick="Picture9()" style="display: inline;">
                                            <ion-icon id="iconPic9" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf10" form="" onclick="Paragraf10()" style="display: inline;">
                                            <ion-icon id="iconP10" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display9('clear')" id="deleteP9" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding9" onchange="buttonCoding9()" class="inputCreateOpsiX" name="inputInfoCoding9">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf9" name="inputParagraf9" placeholder="Paragraph 9" autofocus><?= old('inputParagraf9') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding9" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding9"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding9" placeholder="Coding 9" autofocus wrap="off"><?= old('inputCoding9') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding9CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding9CSS" placeholder="Coding 9" autofocus wrap="off"><?= old('inputCoding9CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding9JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding9JS" placeholder="Coding 9" autofocus wrap="off"><?= old('inputCoding9JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP10" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP10">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP10') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP10" style="display: none;" name="inputP10" autofocus>
                                        <button class="buttonPicture" id="Picture10" form="" onclick="Picture10()" style="display: inline;">
                                            <ion-icon id="iconPic10" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf11" form="" onclick="Paragraf11()" style="display: inline;">
                                            <ion-icon id="iconP11" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display10('clear')" id="deleteP10" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding10" onchange="buttonCoding10()" class="inputCreateOpsiX" name="inputInfoCoding10">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf10" name="inputParagraf10" placeholder="Paragraph 10" autofocus><?= old('inputParagraf10') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding10" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding10"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding10" placeholder="Coding 10" autofocus wrap="off"><?= old('inputCoding10') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding10CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding10CSS" placeholder="Coding 10" autofocus wrap="off"><?= old('inputCoding10CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding10JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding10JS" placeholder="Coding 10" autofocus wrap="off"><?= old('inputCoding10JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP11" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP11">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP11') ?></a>
                                    <div style="margin-left: 14px; margin-right: 14px;">
                                        <input class="inputCreateX" type="file" accept="image/*" id="inputP11" style="display: none;" name="inputP11" autofocus>
                                        <button class="buttonPicture" id="Picture11" form="" onclick="Picture11()" style="display: inline;">
                                            <ion-icon id="iconPic11" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                        </button>
                                        <button class="buttonParagraf" id="Paragraf12" form="" onclick="Paragraf12()" style="display: inline;">
                                            <ion-icon id="iconP12" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
                                        </button>
                                    </div>
                                    <button class="buttonDelete" form="" onclick="display11('clear')" id="deleteP11" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding11" onchange="buttonCoding11()" class="inputCreateOpsiX" name="inputInfoCoding11">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf11" name="inputParagraf11" placeholder="Paragraph 11" autofocus><?= old('inputParagraf11') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding11" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding11"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding11" placeholder="Coding 11" autofocus wrap="off"><?= old('inputCoding11') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding11CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding11CSS" placeholder="Coding 11" autofocus wrap="off"><?= old('inputCoding11CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding11JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding11JS" placeholder="Coding 11" autofocus wrap="off"><?= old('inputCoding11JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <img id="picturePreviewP12" class="picturePreviewLite" style="display: none;">
                                </div>

                                <div style="display: none;" id="DivP12">
                                    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP12') ?></a>
                                    <input class="inputCreateX" type="file" accept="image/*" id="inputP12" style="display: none;" name="inputP12" autofocus>
                                    <button class="buttonPicture" id="Picture12" form="" onclick="Picture12()" style="display: inline;">
                                        <ion-icon id="iconPic12" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                    </button>
                                    <button class="buttonDelete" form="" onclick="display12('clear')" id="deleteP12" style="display: none">Delete Image</button>

                                    <center><select id="selekCoding12" onchange="buttonCoding12()" class="inputCreateOpsiX" name="inputInfoCoding12">
                                            <option value='none'>none</option>
                                            <option value='html runcode'>HTML (run code)</option>
                                            <option value='html'>HTML</option>
                                            <option value='css'>CSS</option>
                                            <option value='javascript'>Javascript</option>
                                            <option value='CodeIgniter 4'>CodeIgniter 4</option>
                                            <option value='view.php'>View.php</option>
                                            <option value='Controller.php'>Controller.php</option>
                                            <option value='Model.php'>Model.php</option>
                                            <option value='Router.php'>Routes.php</option>
                                            <option value='.env'>.env</option>
                                            <option value='cmd'>cmd</option>
                                    </center></select>

                                    <center><textarea class="inputTextContent" type="text" id="inputParagraf12" name="inputParagraf12" placeholder="Paragraph 12" autofocus><?= old('inputParagraf12') ?></textarea></center>

                                    <div class="wadahTextArea" id="inputCoding12" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding" id="infoCoding12"></p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding12" placeholder="Coding 12" autofocus wrap="off"><?= old('inputCoding12') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding12CSS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">css</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding12CSS" placeholder="Coding 12" autofocus wrap="off"><?= old('inputCoding12CSS') ?></textarea>
                                    </div>
                                    <div class="wadahTextArea" id="inputCoding12JS" style="display: none;">
                                        <div class="headerTextArea">
                                            <p class="pInfoCoding">js</p>
                                        </div>
                                        <textarea class="inputCoding" type="text" name="inputCoding12JS" placeholder="Coding 12" autofocus wrap="off"><?= old('inputCoding12JS') ?></textarea>
                                    </div>
                                </div>

                                <div>
                                    <center><input class="inputCreate" type="text" id="inputWriter" name="inputWriter" placeholder="Writer" value="<?= session()->get('Name') ?>" required="" autofocus></center>
                                </div>

                                <div>
                                    <center><select id="selekOpsi" onchange="buttonSelekOpsi()" class="inputCreateOpsi" name="inputKategori">
                                            <option value='Random'>Random</option>
                                            <option value='E-Learning'>E-Learning</option>
                                            <option value='Tugas'>Tugas</option>
                                            <option value='Information'>Information</option>
                                            <option value='Miscellaneous'>Miscellaneous</option>
                                            <option value='Technology'>Technology</option>
                                            <option value='Electronic'>Electronic</option>
                                            <option value='Gadget'>Gadget</option>
                                            <option value='Photography'>Photography</option>
                                            <option value='Automotive'>Automotive</option>
                                            <option value='Science'>Science</option>
                                            <option value='Education'>Education</option>
                                            <option value='Sport'>Sport</option>
                                            <option value='NInternational'>International</option>
                                            <option value='National'>National</option>
                                            <option value='Political'>Political</option>
                                            <option value='Economy'>Economy</option>
                                            <option value='Tradition'>Tradition</option>
                                            <option value='Food'>Food</option>
                                            <option value='School'>School</option>
                                            <option value='Film'>Film</option>
                                            <option value='Music'>Music</option>
                                            <option value='Horror'>Horror</option>
                                            <option value='Anime'>Anime</option>
                                            <option value='Games'>Games</option>
                                            <option value='Memes'>Memes</option>
                                    </center></select>

                                    <!-- <center><select style="display: none;" id="selekOpsi2" onchange="buttonSelekOpsi2()" class="inputCreateOpsi2" name="inputKategori2">
                                            <option value='Task'>Task</option>
                                            <option value='Install'>Install</option>
                                            <option value='HTML'>HTML (run code)</option>
                                            <option value='CSS'>CSS</option>
                                            <option value='Javascript'>Javascript</option>
                                    </center></select> -->

                                    <!-- <center><select style="display: none;" id="selekOpsi3" onchange="buttonSelekOpsi3()" class="inputCreateOpsi3" name="inputKategori3">
                                            <option value='1'>Tutorial 1</option>
                                            <option value='2'>Tutorial 2</option>
                                            <option value='3'>Tutorial 3</option>
                                            <option value='4'>Tutorial 4</option>
                                            <option value='5'>Tutorial 5</option>
                                            <option value='6'>Tutorial 6</option>
                                            <option value='7'>Tutorial 7</option>
                                            <option value='8'>Tutorial 8</option>
                                            <option value='9'>Tutorial 9</option>
                                            <option value='10'>Tutorial 10</option>
                                            <option value='11'>Tutorial 11</option>
                                            <option value='12'>Tutorial 12</option>
                                            <option value='13'>Tutorial 13</option>
                                            <option value='14'>Tutorial 14</option>
                                            <option value='15'>Tutorial 15</option>
                                    </center></select> -->

                                    <script>
                                        // var inputCoding1 = document.getElementById("inputCoding1");
                                        // var inputCoding2 = document.getElementById("inputCoding2");
                                        // var inputCoding3 = document.getElementById("inputCoding3");
                                        // var inputCoding4 = document.getElementById("inputCoding4");
                                        // var inputCoding5 = document.getElementById("inputCoding5");
                                        // var inputCoding6 = document.getElementById("inputCoding6");
                                        // var inputCoding7 = document.getElementById("inputCoding7");
                                        // var inputCoding8 = document.getElementById("inputCoding8");
                                        // var inputCoding9 = document.getElementById("inputCoding9");
                                        // var inputCoding10 = document.getElementById("inputCoding10");
                                        // var inputCoding11 = document.getElementById("inputCoding11");
                                        // var inputCoding12 = document.getElementById("inputCoding12");

                                        // var selekCoding1 = document.getElementById("selekCoding1");
                                        // var selekCoding2 = document.getElementById("selekCoding2");
                                        // var selekCoding3 = document.getElementById("selekCoding3");
                                        // var selekCoding4 = document.getElementById("selekCoding4");
                                        // var selekCoding5 = document.getElementById("selekCoding5");
                                        // var selekCoding6 = document.getElementById("selekCoding6");
                                        // var selekCoding7 = document.getElementById("selekCoding7");
                                        // var selekCoding8 = document.getElementById("selekCoding8");
                                        // var selekCoding9 = document.getElementById("selekCoding9");
                                        // var selekCoding10 = document.getElementById("selekCoding10");
                                        // var selekCoding11 = document.getElementById("selekCoding11");
                                        // var selekCoding12 = document.getElementById("selekCoding12");


                                        // var infoCoding1 = document.getElementById("infoCoding1");
                                        // var infoCoding2 = document.getElementById("infoCoding2");
                                        // var infoCoding3 = document.getElementById("infoCoding3");
                                        // var infoCoding4 = document.getElementById("infoCoding4");
                                        // var infoCoding5 = document.getElementById("infoCoding5");
                                        // var infoCoding6 = document.getElementById("infoCoding6");
                                        // var infoCoding7 = document.getElementById("infoCoding7");
                                        // var infoCoding8 = document.getElementById("infoCoding8");
                                        // var infoCoding9 = document.getElementById("infoCoding9");
                                        // var infoCoding10 = document.getElementById("infoCoding10");
                                        // var infoCoding11 = document.getElementById("infoCoding11");
                                        // var infoCoding12 = document.getElementById("infoCoding12");

                                        // function buttonCoding1() {
                                        //     if (selekCoding1.value !== "none") {
                                        //         inputCoding1.style.display = "inline";
                                        //         infoCoding1.innerHTML = selekCoding1.value;
                                        //     } else {
                                        //         inputCoding1.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding2() {
                                        //     if (selekCoding2.value !== "none") {
                                        //         inputCoding2.style.display = "inline";
                                        //         infoCoding2.innerHTML = selekCoding2.value;
                                        //     } else {
                                        //         inputCoding2.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding3() {
                                        //     if (selekCoding3.value !== "none") {
                                        //         inputCoding3.style.display = "inline";
                                        //         infoCoding3.innerHTML = selekCoding3.value;
                                        //     } else {
                                        //         inputCoding3.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding4() {
                                        //     if (selekCoding4.value !== "none") {
                                        //         inputCoding4.style.display = "inline";
                                        //         infoCoding4.innerHTML = selekCoding4.value;
                                        //     } else {
                                        //         inputCoding4.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding5() {
                                        //     if (selekCoding5.value !== "none") {
                                        //         inputCoding5.style.display = "inline";
                                        //         infoCoding5.innerHTML = selekCoding5.value;
                                        //     } else {
                                        //         inputCoding5.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding6() {
                                        //     if (selekCoding6.value !== "none") {
                                        //         inputCoding6.style.display = "inline";
                                        //         infoCoding6.innerHTML = selekCoding6.value;
                                        //     } else {
                                        //         inputCoding6.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding7() {
                                        //     if (selekCoding7.value !== "none") {
                                        //         inputCoding7.style.display = "inline";
                                        //         infoCoding7.innerHTML = selekCoding7.value;
                                        //     } else {
                                        //         inputCoding7.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding8() {
                                        //     if (selekCoding8.value !== "none") {
                                        //         inputCoding8.style.display = "inline";
                                        //         infoCoding8.innerHTML = selekCoding8.value;
                                        //     } else {
                                        //         inputCoding8.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding9() {
                                        //     if (selekCoding9.value !== "none") {
                                        //         inputCoding9.style.display = "inline";
                                        //         infoCoding9.innerHTML = selekCoding9.value;
                                        //     } else {
                                        //         inputCoding9.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding10() {
                                        //     if (selekCoding10.value !== "none") {
                                        //         inputCoding10.style.display = "inline";
                                        //         infoCoding10.innerHTML = selekCoding10.value;
                                        //     } else {
                                        //         inputCoding10.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding11() {
                                        //     if (selekCoding11.value !== "none") {
                                        //         inputCoding11.style.display = "inline";
                                        //         infoCoding11.innerHTML = selekCoding11.value;
                                        //     } else {
                                        //         inputCoding11.style.display = "none";
                                        //     }
                                        // }

                                        // function buttonCoding12() {
                                        //     if (selekCoding12.value !== "none") {
                                        //         inputCoding12.style.display = "inline";
                                        //         infoCoding12.innerHTML = selekCoding12.value;
                                        //     } else {
                                        //         inputCoding12.style.display = "none";
                                        //     }
                                        // }


                                        // function buttonSelekOpsi() {
                                        //     var selekOpsi = document.getElementById("selekOpsi");
                                        //     var selekOpsi2 = document.getElementById("selekOpsi2");

                                        //     if (selekOpsi.value == "E-Learning") {
                                        //         selekOpsi2.style.display = "inline";
                                        //     } else {
                                        //         selekOpsi2.style.display = "none";
                                        //     }
                                        // }



                                        // function buttonSelekOpsi2() {
                                        //     var selekOpsi2 = document.getElementById("selekOpsi2");
                                        //     var selekOpsi3 = document.getElementById("selekOpsi3");

                                        //     var inputCoding1 = document.getElementById("inputCoding1");
                                        //     var inputCoding2 = document.getElementById("inputCoding2");
                                        //     var inputCoding3 = document.getElementById("inputCoding3");
                                        //     var inputCoding4 = document.getElementById("inputCoding4");
                                        //     var inputCoding5 = document.getElementById("inputCoding5");
                                        //     var inputCoding6 = document.getElementById("inputCoding6");
                                        //     var inputCoding7 = document.getElementById("inputCoding7");
                                        //     var inputCoding8 = document.getElementById("inputCoding8");
                                        //     var inputCoding9 = document.getElementById("inputCoding9");
                                        //     var inputCoding10 = document.getElementById("inputCoding10");
                                        //     var inputCoding11 = document.getElementById("inputCoding11");
                                        //     var inputCoding12 = document.getElementById("inputCoding12");

                                        //     if (selekOpsi2.value !== "Task") {
                                        //         if (selekOpsi2.value !== "Install") {
                                        //             selekOpsi3.style.display = "inline";

                                        //             inputCoding1.style.display = "inline";
                                        //             inputCoding2.style.display = "inline";
                                        //             inputCoding3.style.display = "inline";
                                        //             inputCoding4.style.display = "inline";
                                        //             inputCoding5.style.display = "inline";
                                        //             inputCoding6.style.display = "inline";
                                        //             inputCoding7.style.display = "inline";
                                        //             inputCoding8.style.display = "inline";
                                        //             inputCoding9.style.display = "inline";
                                        //             inputCoding10.style.display = "inline";
                                        //             inputCoding11.style.display = "inline";
                                        //             inputCoding12.style.display = "inline";
                                        //         } else {
                                        //             selekOpsi3.style.display = "inline";

                                        //             inputCoding1.style.display = "none";
                                        //             inputCoding2.style.display = "none";
                                        //             inputCoding3.style.display = "none";
                                        //             inputCoding4.style.display = "none";
                                        //             inputCoding5.style.display = "none";
                                        //             inputCoding6.style.display = "none";
                                        //             inputCoding7.style.display = "none";
                                        //             inputCoding8.style.display = "none";
                                        //             inputCoding9.style.display = "none";
                                        //             inputCoding10.style.display = "none";
                                        //             inputCoding11.style.display = "none";
                                        //             inputCoding12.style.display = "none";
                                        //         }
                                        //     } else {
                                        //         selekOpsi3.style.display = "none";

                                        //         inputCoding1.style.display = "none";
                                        //         inputCoding2.style.display = "none";
                                        //         inputCoding3.style.display = "none";
                                        //         inputCoding4.style.display = "none";
                                        //         inputCoding5.style.display = "none";
                                        //         inputCoding6.style.display = "none";
                                        //         inputCoding7.style.display = "none";
                                        //         inputCoding8.style.display = "none";
                                        //         inputCoding9.style.display = "none";
                                        //         inputCoding10.style.display = "none";
                                        //         inputCoding11.style.display = "none";
                                        //         inputCoding12.style.display = "none";
                                        //     }
                                        // }
                                    </script>

                                </div>

                                <textarea style="display: none;" name="inputDate" id="tanggal"></textarea>

                                <input style="display: none;" id="inputDateSlug" name="inputDateSlug" required="">

                                <script type="text/javascript">
                                    function startTimeCreate() {
                                        const date = new Date();

                                        let tahun = date.getFullYear();
                                        let bulanX = date.getMonth();
                                        let tanggal = date.getDate();
                                        let hour = date.getHours();
                                        let minute = date.getMinutes();
                                        let second = date.getSeconds();

                                        if (bulanX == 0) {
                                            bulan = "0" + 1;
                                        } else if (bulanX == 1) {
                                            bulan = "0" + 2;
                                        } else if (bulanX == 2) {
                                            bulan = "0" + 3;
                                        } else if (bulanX == 3) {
                                            bulan = "0" + 4;
                                        } else if (bulanX == 4) {
                                            bulan = "0" + 5;
                                        } else if (bulanX == 5) {
                                            bulan = "0" + 6;
                                        } else if (bulanX == 6) {
                                            bulan = "0" + 7;
                                        } else if (bulanX == 7) {
                                            bulan = "0" + 8;
                                        } else if (bulanX == 8) {
                                            bulan = "0" + 9;
                                        } else if (bulanX == 9) {
                                            bulan = 10;
                                        } else if (bulanX == 10) {
                                            bulan = 11;
                                        } else if (bulanX == 11) {
                                            bulan = 12;
                                        }

                                        if (tanggal < 10) {
                                            if (hour < 10) {
                                                if (minute < 10) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "0" + hour + "0" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "0" + hour + "0" + minute + "" + second;
                                                    }
                                                } else if (minute > 9) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "0" + hour + "" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "0" + hour + "" + minute + "" + second;
                                                    }
                                                }
                                            } else if (hour > 9) {
                                                if (minute < 10) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "" + hour + "0" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "" + hour + "0" + minute + "" + second;
                                                    }
                                                } else if (minute > 9) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "" + hour + "" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "0" + tanggal + "" + hour + "" + minute + "" + second;
                                                    }
                                                }
                                            }
                                        } else if (tanggal > 9) {
                                            if (hour < 10) {
                                                if (minute < 10) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "0" + hour + "0" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "0" + hour + "0" + minute + "" + second;
                                                    }
                                                } else if (minute > 9) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "0" + hour + "" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "0" + hour + "" + minute + "" + second;
                                                    }
                                                }
                                            } else if (hour > 9) {
                                                if (minute < 10) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "" + hour + "0" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "" + hour + "0" + minute + "" + second;
                                                    }
                                                } else if (minute > 9) {
                                                    if (second < 10) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "" + hour + "" + minute + "0" + second;
                                                    } else if (second > 9) {
                                                        document.getElementById("inputDateSlug").value = "_" + tahun + "" + bulan + "" + tanggal + "" + hour + "" + minute + "" + second;
                                                    }
                                                }
                                            }
                                        }

                                        document.getElementById("tanggal").innerHTML = date.toDateString();
                                        setTimeout(function() {
                                            startTimeCreate()
                                        }, 1000);
                                    }
                                </script>

                                <div>
                                    <img id="picturePreview" class="picturePreview" style="display: none;">
                                </div>

                                <a style="color: red; margin-bottom: 15px;"><?= $validation->getError('inputPicture') ?></a>
                                <div>
                                    <input class="inputCreate" type="file" accept="image/*" id="inputPicture" name="inputPicture" autofocus>
                                    <button class="buttonCreate" form="create" name="create" type="submit" value="upload" onclick="startTimeCreate()">
                                        <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 0.6px"></ion-icon> Create
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>

            </div>
        </div>
        </center>

        </div>

        <!-- Create Function -->

        <div class="UltraBlur"></div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>?v=<?php echo time(); ?>?v=<?php echo time(); ?>"></script>
        <script src="/CSS & JS/create.js?v=<?php echo time(); ?>" defer></script>
        <script src="/CSS & JS/upload.js?v=<?php echo time(); ?>" defer></script>
        <script src="/CSS & JS/codeMirror/coding.js?v=<?php echo time(); ?>" defer></script>

    </body>

    </html>