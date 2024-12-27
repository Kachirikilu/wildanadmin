<a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputTitle') ?></a>
<div>
    <center><input value="<?= $createAdmin['Judul']; ?>" class="inputCreateJ" type="text" id="inputTitle" name="inputTitle" placeholder="Tittle" required="" value="<?= old('inputTitle') ?>" autofocus></center>
</div>
<div>
    <center><input value="<?= $createAdmin['ID']; ?>" class="inputCreate" type="hidden" id="ID" name="ID"></center>
</div>

<div style="display: inline;" id="DivP1">


<div style="display: none;">
    <textarea>
<body></body>
    </textarea>
</div>


    <?php if ($createAdmin['PictureP1'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP1'] ?>" id="picturePreviewP1" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP1" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP1') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP1" style="display: none;" name="inputP1" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP1']; ?>" name="P1" id="P1">
            <input type="hidden" value="<?= $createAdmin['PictureP1']; ?>" name="P1X" id="P1X">

            <?php if ($createAdmin['PictureP1'] == "") { ?>
                <button class="buttonPicture" id="Picture1" form="" onclick="Picture1()" style="display: inline;">
                    <ion-icon id="iconPic1" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture1" form="" onclick="Picture1()" style="display: inline;">
                    <ion-icon id="iconPic1" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf2" form="" onclick="Paragraf2()" style="display: inline;">
                <ion-icon id="iconP2" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP1'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display1X('clear')" id="deleteP1" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display1X('clear')" id="deleteP1" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding1" onchange="buttonCoding1()" class="inputCreateOpsiX" name="inputInfoCoding1">
                <?php if ($createAdmin['infoCoding1'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding1'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding1'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding1'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf1" name="inputParagraf1" placeholder="Paragraph 1" required="" autofocus><?= $createAdmin['Paragraf1']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding1" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding1"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding1" placeholder="Coding 1" autofocus wrap="off"><?= $createAdmin['Coding1'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding1CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding1CSS" placeholder="Coding 1" autofocus wrap="off"><?= $createAdmin['Coding1CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding1JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding1JS" placeholder="Coding 1" autofocus wrap="off"><?= $createAdmin['Coding1JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP2">

    <?php if ($createAdmin['PictureP2'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP2'] ?>" id="picturePreviewP2" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP2" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP2') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP2" style="display: none;" name="inputP2" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP2']; ?>" name="P2" id="P2">
            <input type="hidden" value="<?= $createAdmin['PictureP2']; ?>" name="P2X" id="P2X">

            <?php if ($createAdmin['PictureP2'] == "") { ?>
                <button class="buttonPicture" id="Picture2" form="" onclick="Picture2()" style="display: inline;">
                    <ion-icon id="iconPic2" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture2" form="" onclick="Picture2()" style="display: inline;">
                    <ion-icon id="iconPic2" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf3" form="" onclick="Paragraf3()" style="display: inline;">
                <ion-icon id="iconP3" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP2'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display2X('clear')" id="deleteP2" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display2X('clear')" id="deleteP2" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding2" onchange="buttonCoding2()" class="inputCreateOpsiX" name="inputInfoCoding2">
                <?php if ($createAdmin['infoCoding2'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding2'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding2'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding2'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf2" name="inputParagraf2" placeholder="Paragraph 2" autofocus><?= $createAdmin['Paragraf2']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding2" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding2"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding2" placeholder="Coding 2" autofocus wrap="off"><?= $createAdmin['Coding2'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding2CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding2CSS" placeholder="Coding 2" autofocus wrap="off"><?= $createAdmin['Coding2CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding2JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding2JS" placeholder="Coding 2" autofocus wrap="off"><?= $createAdmin['Coding2JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP3">

    <?php if ($createAdmin['PictureP3'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP3'] ?>" id="picturePreviewP3" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP3" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP3') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP3" style="display: none;" name="inputP3" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP3']; ?>" name="P3" id="P3">
            <input type="hidden" value="<?= $createAdmin['PictureP3']; ?>" name="P3X" id="P3X">

            <?php if ($createAdmin['PictureP3'] == "") { ?>
                <button class="buttonPicture" id="Picture3" form="" onclick="Picture3()" style="display: inline;">
                    <ion-icon id="iconPic3" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture3" form="" onclick="Picture3()" style="display: inline;">
                    <ion-icon id="iconPic3" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf4" form="" onclick="Paragraf4()" style="display: inline;">
                <ion-icon id="iconP4" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP3'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display3X('clear')" id="deleteP3" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display3X('clear')" id="deleteP3" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding3" onchange="buttonCoding3()" class="inputCreateOpsiX" name="inputInfoCoding3">
                <?php if ($createAdmin['infoCoding3'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding3'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding3'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding3'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf3" name="inputParagraf3" placeholder="Paragraph 3" autofocus><?= $createAdmin['Paragraf3']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding3" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding3"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding3" placeholder="Coding 3" autofocus wrap="off"><?= $createAdmin['Coding3'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding3CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding3CSS" placeholder="Coding 3" autofocus wrap="off"><?= $createAdmin['Coding3CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding3JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding3JS" placeholder="Coding 3" autofocus wrap="off"><?= $createAdmin['Coding3JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP4">

    <?php if ($createAdmin['PictureP4'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP4'] ?>" id="picturePreviewP4" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP4" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP4') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP4" style="display: none;" name="inputP4" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP4']; ?>" name="P4" id="P4">
            <input type="hidden" value="<?= $createAdmin['PictureP4']; ?>" name="P4X" id="P4X">

            <?php if ($createAdmin['PictureP4'] == "") { ?>
                <button class="buttonPicture" id="Picture4" form="" onclick="Picture4()" style="display: inline;">
                    <ion-icon id="iconPic4" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture4" form="" onclick="Picture4()" style="display: inline;">
                    <ion-icon id="iconPic4" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf5" form="" onclick="Paragraf5()" style="display: inline;">
                <ion-icon id="iconP5" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP4'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display4X('clear')" id="deleteP4" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display4X('clear')" id="deleteP4" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding4" onchange="buttonCoding4()" class="inputCreateOpsiX" name="inputInfoCoding4">
                <?php if ($createAdmin['infoCoding4'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding4'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding4'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding4'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf4" name="inputParagraf4" placeholder="Paragraph 4" autofocus><?= $createAdmin['Paragraf4']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding4" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding4"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding4" placeholder="Coding 4" autofocus wrap="off"><?= $createAdmin['Coding4'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding4CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding4CSS" placeholder="Coding 4" autofocus wrap="off"><?= $createAdmin['Coding4CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding4JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding4JS" placeholder="Coding 4" autofocus wrap="off"><?= $createAdmin['Coding4JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP5">

    <?php if ($createAdmin['PictureP5'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP5'] ?>" id="picturePreviewP5" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP5" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP5') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP5" style="display: none;" name="inputP5" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP5']; ?>" name="P5" id="P5">
            <input type="hidden" value="<?= $createAdmin['PictureP5']; ?>" name="P5X" id="P5X">

            <?php if ($createAdmin['PictureP5'] == "") { ?>
                <button class="buttonPicture" id="Picture5" form="" onclick="Picture5()" style="display: inline;">
                    <ion-icon id="iconPic5" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture5" form="" onclick="Picture5()" style="display: inline;">
                    <ion-icon id="iconPic5" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf6" form="" onclick="Paragraf6()" style="display: inline;">
                <ion-icon id="iconP6" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP5'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display5X('clear')" id="deleteP5" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display5X('clear')" id="deleteP5" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding5" onchange="buttonCoding5()" class="inputCreateOpsiX" name="inputInfoCoding5">
                <?php if ($createAdmin['infoCoding5'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding5'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding5'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding5'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf5" name="inputParagraf5" placeholder="Paragraph 5" autofocus><?= $createAdmin['Paragraf5']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding5" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding5"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding5" placeholder="Coding 5" autofocus wrap="off"><?= $createAdmin['Coding5'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding5CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding5CSS" placeholder="Coding 5" autofocus wrap="off"><?= $createAdmin['Coding5CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding5JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding5JS" placeholder="Coding 5" autofocus wrap="off"><?= $createAdmin['Coding5JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP6">

    <?php if ($createAdmin['PictureP6'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP6'] ?>" id="picturePreviewP6" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP6" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP6') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP6" style="display: none;" name="inputP6" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP6']; ?>" name="P6" id="P6">
            <input type="hidden" value="<?= $createAdmin['PictureP6']; ?>" name="P6X" id="P6X">

            <?php if ($createAdmin['PictureP6'] == "") { ?>
                <button class="buttonPicture" id="Picture6" form="" onclick="Picture6()" style="display: inline;">
                    <ion-icon id="iconPic6" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture6" form="" onclick="Picture6()" style="display: inline;">
                    <ion-icon id="iconPic6" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf7" form="" onclick="Paragraf7()" style="display: inline;">
                <ion-icon id="iconP7" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP6'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display6X('clear')" id="deleteP6" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display6X('clear')" id="deleteP6" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding6" onchange="buttonCoding6()" class="inputCreateOpsiX" name="inputInfoCoding6">
                <?php if ($createAdmin['infoCoding6'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding6'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding6'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding6'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf6" name="inputParagraf6" placeholder="Paragraph 6" autofocus><?= $createAdmin['Paragraf6']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding6" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding6"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding6" placeholder="Coding 6" autofocus wrap="off"><?= $createAdmin['Coding6'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding6CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding6CSS" placeholder="Coding 6" autofocus wrap="off"><?= $createAdmin['Coding6CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding6JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding6JS" placeholder="Coding 6" autofocus wrap="off"><?= $createAdmin['Coding6JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP7">

    <?php if ($createAdmin['PictureP7'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP7'] ?>" id="picturePreviewP7" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP7" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP7') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP7" style="display: none;" name="inputP7" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP7']; ?>" name="P7" id="P7">
            <input type="hidden" value="<?= $createAdmin['PictureP7']; ?>" name="P7X" id="P7X">

            <?php if ($createAdmin['PictureP7'] == "") { ?>
                <button class="buttonPicture" id="Picture7" form="" onclick="Picture7()" style="display: inline;">
                    <ion-icon id="iconPic7" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture7" form="" onclick="Picture7()" style="display: inline;">
                    <ion-icon id="iconPic7" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf8" form="" onclick="Paragraf8()" style="display: inline;">
                <ion-icon id="iconP8" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP7'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display7X('clear')" id="deleteP7" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display7X('clear')" id="deleteP7" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding7" onchange="buttonCoding7()" class="inputCreateOpsiX" name="inputInfoCoding7">
                <?php if ($createAdmin['infoCoding7'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding7'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding7'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding7'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf7" name="inputParagraf7" placeholder="Paragraph 7" autofocus><?= $createAdmin['Paragraf7']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding7" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding7"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding7" placeholder="Coding 7" autofocus wrap="off"><?= $createAdmin['Coding7'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding7CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding7CSS" placeholder="Coding 7" autofocus wrap="off"><?= $createAdmin['Coding7CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding7JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding7JS" placeholder="Coding 7" autofocus wrap="off"><?= $createAdmin['Coding7JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP8">

    <?php if ($createAdmin['PictureP8'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP8'] ?>" id="picturePreviewP8" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP8" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP8') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP8" style="display: none;" name="inputP8" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP8']; ?>" name="P8" id="P8">
            <input type="hidden" value="<?= $createAdmin['PictureP8']; ?>" name="P8X" id="P8X">

            <?php if ($createAdmin['PictureP8'] == "") { ?>
                <button class="buttonPicture" id="Picture8" form="" onclick="Picture8()" style="display: inline;">
                    <ion-icon id="iconPic8" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture8" form="" onclick="Picture8()" style="display: inline;">
                    <ion-icon id="iconPic8" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf9" form="" onclick="Paragraf9()" style="display: inline;">
                <ion-icon id="iconP9" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP8'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display8X('clear')" id="deleteP8" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display8X('clear')" id="deleteP8" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding8" onchange="buttonCoding8()" class="inputCreateOpsiX" name="inputInfoCoding8">
                <?php if ($createAdmin['infoCoding8'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding8'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding8'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding8'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf8" name="inputParagraf8" placeholder="Paragraph 8" autofocus><?= $createAdmin['Paragraf8']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding8" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding8"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding8" placeholder="Coding 8" autofocus wrap="off"><?= $createAdmin['Coding8'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding8CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding8CSS" placeholder="Coding 8" autofocus wrap="off"><?= $createAdmin['Coding8CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding8JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding8JS" placeholder="Coding 8" autofocus wrap="off"><?= $createAdmin['Coding8JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP9">

    <?php if ($createAdmin['PictureP9'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP9'] ?>" id="picturePreviewP9" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP9" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP9') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP9" style="display: none;" name="inputP9" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP9']; ?>" name="P9" id="P9">
            <input type="hidden" value="<?= $createAdmin['PictureP9']; ?>" name="P9X" id="P9X">

            <?php if ($createAdmin['PictureP9'] == "") { ?>
                <button class="buttonPicture" id="Picture9" form="" onclick="Picture9()" style="display: inline;">
                    <ion-icon id="iconPic9" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture9" form="" onclick="Picture9()" style="display: inline;">
                    <ion-icon id="iconPic9" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf10" form="" onclick="Paragraf10()" style="display: inline;">
                <ion-icon id="iconP10" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP9'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display9X('clear')" id="deleteP9" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display9X('clear')" id="deleteP9" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding9" onchange="buttonCoding9()" class="inputCreateOpsiX" name="inputInfoCoding9">
                <?php if ($createAdmin['infoCoding9'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding9'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding9'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding9'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf9" name="inputParagraf9" placeholder="Paragraph 9" autofocus><?= $createAdmin['Paragraf9']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding9" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding9"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding9" placeholder="Coding 9" autofocus wrap="off"><?= $createAdmin['Coding9'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding9CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding9CSS" placeholder="Coding 9" autofocus wrap="off"><?= $createAdmin['Coding9CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding9JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding9JS" placeholder="Coding 9" autofocus wrap="off"><?= $createAdmin['Coding9JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP10">

    <?php if ($createAdmin['PictureP10'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP10'] ?>" id="picturePreviewP10" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP10" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP10') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP10" style="display: none;" name="inputP10" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP10']; ?>" name="P10" id="P10">
            <input type="hidden" value="<?= $createAdmin['PictureP10']; ?>" name="P10X" id="P10X">

            <?php if ($createAdmin['PictureP10'] == "") { ?>
                <button class="buttonPicture" id="Picture10" form="" onclick="Picture10()" style="display: inline;">
                    <ion-icon id="iconPic10" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture10" form="" onclick="Picture10()" style="display: inline;">
                    <ion-icon id="iconPic10" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf11" form="" onclick="Paragraf11()" style="display: inline;">
                <ion-icon id="iconP11" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP10'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display10X('clear')" id="deleteP10" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display10X('clear')" id="deleteP10" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding10" onchange="buttonCoding10()" class="inputCreateOpsiX" name="inputInfoCoding10">
                <?php if ($createAdmin['infoCoding10'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding10'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding10'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding10'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf10" name="inputParagraf10" placeholder="Paragraph 10" autofocus><?= $createAdmin['Paragraf10']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding10" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding10"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding10" placeholder="Coding 10" autofocus wrap="off"><?= $createAdmin['Coding10'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding10CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding10CSS" placeholder="Coding 10" autofocus wrap="off"><?= $createAdmin['Coding10CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding10JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding10JS" placeholder="Coding 10" autofocus wrap="off"><?= $createAdmin['Coding10JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP11">

    <?php if ($createAdmin['PictureP11'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP11'] ?>" id="picturePreviewP11" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP11" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP11') ?>
        <div style="margin-left: 14px; margin-right: 14px;">
            <input class="inputCreateX" type="file" accept="image/*" id="inputP11" style="display: none;" name="inputP11" autofocus>
            <input type="hidden" value="<?= $createAdmin['PictureP11']; ?>" name="P11" id="P11">
            <input type="hidden" value="<?= $createAdmin['PictureP11']; ?>" name="P11X" id="P11X">

            <?php if ($createAdmin['PictureP11'] == "") { ?>
                <button class="buttonPicture" id="Picture11" form="" onclick="Picture11()" style="display: inline;">
                    <ion-icon id="iconPic11" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                </button>
            <?php } else { ?>
                <button class="buttonPicture" id="Picture11" form="" onclick="Picture11()" style="display: inline;">
                    <ion-icon id="iconPic11" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                </button>
            <?php } ?>

            <button class="buttonParagraf" id="Paragraf12" form="" onclick="Paragraf12()" style="display: inline;">
                <ion-icon id="iconP12" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Next Paragraph
            </button>
        </div>

        <?php if ($createAdmin['PictureP11'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display11X('clear')" id="deleteP11" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display11X('clear')" id="deleteP11" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding11" onchange="buttonCoding11()" class="inputCreateOpsiX" name="inputInfoCoding11">
                <?php if ($createAdmin['infoCoding11'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding11'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding11'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>

                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding11'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf11" name="inputParagraf11" placeholder="Paragraph 11" autofocus><?= $createAdmin['Paragraf11']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding11" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding11"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding11" placeholder="Coding 11" autofocus wrap="off"><?= $createAdmin['Coding11'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding11CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding11CSS" placeholder="Coding 11" autofocus wrap="off"><?= $createAdmin['Coding11CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding11JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding11JS" placeholder="Coding 11" autofocus wrap="off"><?= $createAdmin['Coding11JS'] ?></textarea>
        </div>
</div>

<div style="display: none;" id="DivP12">

    <?php if ($createAdmin['PictureP12'] !== "") { ?>
        <div>
            <img src="/ArticlePicture/<?= $createAdmin['PictureP12'] ?>" id="picturePreviewP12" class="picturePreviewLite">
        </div>
    <?php } else { ?>
        <div>
            <img id="picturePreviewP12" class="picturePreviewLite" style="display: none">
        </div>
    <?php } ?>

    <a style="color: red; margin-bottom: 4px;"><?= $validation->getError('inputP12') ?>
        <input class="inputCreateX" type="file" accept="image/*" id="inputP12" style="display: none;" name="inputP12" autofocus>
        <input type="hidden" value="<?= $createAdmin['PictureP12']; ?>" name="P12" id="P12">
        <input type="hidden" value="<?= $createAdmin['PictureP12']; ?>" name="P12X" id="P12X">

        <?php if ($createAdmin['PictureP12'] == "") { ?>
            <button class="buttonPicture" id="Picture12" form="" onclick="Picture12()" style="display: inline;">
                <ion-icon id="iconPic12" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
            </button>
        <?php } else { ?>
            <button class="buttonPicture" id="Picture12" form="" onclick="Picture12()" style="display: inline;">
                <ion-icon id="iconPic12" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
            </button>
        <?php } ?>

        <?php if ($createAdmin['PictureP12'] !== "") { ?>
            <button class="buttonDelete" form="" onclick="display12X('clear')" id="deleteP12" style="display: inline">Delete Image</button>
        <?php } else { ?>
            <button class="buttonDelete" form="" onclick="display12X('clear')" id="deleteP12" style="display: none">Delete Image</button>
        <?php } ?>

        <center><select id="selekCoding12" onchange="buttonCoding12()" class="inputCreateOpsiX" name="inputInfoCoding12">
                <?php if ($createAdmin['infoCoding12'] == "none") { ?>
                    <option class="optionTerpilih" value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding12'] == "html runcode") { ?>
                    <option class="optionTerpilih" value='html runcode'>HTML (run code)</option>
                    <option value='none'>none</option>
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
                <?php } else if ($createAdmin['infoCoding12'] == "html") { ?>
                    <option class="optionTerpilih" value='html'>HTML</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "css") { ?>
                    <option class="optionTerpilih" value='css'>CSS</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "javascript") { ?>
                    <option class="optionTerpilih" value='javascript'>Javascript</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "CodeIgniter 4") { ?>
                    <option class="optionTerpilih" value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "view.php") { ?>
                    <option class="optionTerpilih" value='view.php'>View.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "Controller.php") { ?>
                    <option class="optionTerpilih" value='Controller.php'>Controller.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "Model.php") { ?>
                    <option class="optionTerpilih" value='Model.php'>Model.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Routes.php'>Routes.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "Routes.php") { ?>
                    <option class="optionTerpilih" value='Routes.php'>Routes.php</option>
                    <option value='none'>none</option>
                    <option value='html runcode'>HTML (run code)</option>
                    <option value='html'>HTML</option>
                    <option value='css'>CSS</option>
                    <option value='javascript'>Javascript</option>
                    <option value='CodeIgniter 4'>CodeIgniter 4</option>
                    <option value='view.php'>View.php</option>
                    <option value='Controller.php'>Controller.php</option>
                    <option value='Model.php'>Model.php</option>
                    <option value='.env'>.env</option>
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == ".env") { ?>
                    <option class="optionTerpilih" value='.env'>.env</option>
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
                    <option value='cmd'>cmd</option>
                <?php } else if ($createAdmin['infoCoding12'] == "cmd") { ?>
                    <option class="optionTerpilih" value='cmd'>cmd</option>
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
                <?php } else { ?>
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
                <?php } ?>
        </center></select>

        <center><textarea class="inputTextContent" type="text" id="inputParagraf12" name="inputParagraf12" placeholder="Paragraph 12" autofocus><?= $createAdmin['Paragraf12']; ?></textarea></center>

        <div class="wadahTextArea" id="inputCoding12" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding" id="infoCoding12"></p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding12" placeholder="Coding 12" autofocus wrap="off"><?= $createAdmin['Coding12'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding12CSS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">css</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding12CSS" placeholder="Coding 12" autofocus wrap="off"><?= $createAdmin['Coding12CSS'] ?></textarea>
        </div>
        <div class="wadahTextArea" id="inputCoding12JS" style="display: none;">
            <div class="headerTextArea">
                <p class="pInfoCoding">js</p>
            </div>
            <textarea class="inputCoding" type="text" name="inputCoding12JS" placeholder="Coding 12" autofocus wrap="off"><?= $createAdmin['Coding12JS'] ?></textarea>
        </div>
</div>

<div>
    <center><input value="<?= $createAdmin['Penulis']; ?>" class="inputCreate" type="text" id="inputWriter" name="inputWriter" placeholder="Writer" required="" autofocus></center>
</div>

<div>
    <center><select id="selekOpsi" class="inputCreateOpsi" name="inputKategori">

            <?php if ($createAdmin['Kategori'] == "Random") { ?>
                <option class="optionTerpilih" value='Random'>Random</option>
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
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "E-Learning") { ?>
                <option class="optionTerpilih" value='E-Learning'>E-Learning</option>
                <option value='Random'>Random</option>
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
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Tugas") { ?>
                <option class="optionTerpilih" value='Tugas'>Tugas</option>
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
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Information") { ?>
                <option class="optionTerpilih" value='Information'>Information</option>
                <option value='Random'>Random</option>
                <option value='E-Learning'>E-Learning</option>
                <option value='Tugas'>Tugas</option>
                <option value='Miscellaneous'>Miscellaneous</option>
                <option value='Technology'>Technology</option>
                <option value='Electronic'>Electronic</option>
                <option value='Gadget'>Gadget</option>
                <option value='Photography'>Photography</option>
                <option value='Automotive'>Automotive</option>
                <option value='Science'>Science</option>
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Miscellaneous") { ?>
                <option class="optionTerpilih" value='Miscellaneous'>Miscellaneous</option>
                <option value='Random'>Random</option>
                <option value='E-Learning'>E-Learning</option>
                <option value='Tugas'>Tugas</option>
                <option value='Information'>Information</option>
                <option value='Technology'>Technology</option>
                <option value='Electronic'>Electronic</option>
                <option value='Gadget'>Gadget</option>
                <option value='Photography'>Photography</option>
                <option value='Automotive'>Automotive</option>
                <option value='Science'>Science</option>
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Technology") { ?>
                <option class="optionTerpilih" value='Technology'>Technology</option>
                <option value='Random'>Random</option>
                <option value='E-Learning'>E-Learning</option>
                <option value='Tugas'>Tugas</option>
                <option value='Information'>Information</option>
                <option value='Miscellaneous'>Miscellaneous</option>
                <option value='Electronic'>Electronic</option>
                <option value='Gadget'>Gadget</option>
                <option value='Photography'>Photography</option>
                <option value='Automotive'>Automotive</option>
                <option value='Science'>Science</option>
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Electronic") { ?>
                <option class="optionTerpilih" value='Electronic'>Electronic</option>
                <option value='Random'>Random</option>
                <option value='E-Learning'>E-Learning</option>
                <option value='Tugas'>Tugas</option>
                <option value='Information'>Information</option>
                <option value='Miscellaneous'>Miscellaneous</option>
                <option value='Technology'>Technology</option>
                <option value='Gadget'>Gadget</option>
                <option value='Photography'>Photography</option>
                <option value='Automotive'>Automotive</option>
                <option value='Science'>Science</option>
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Gadget") { ?>
                <option class="optionTerpilih" value='Gadget'>Gadget</option>
                <option value='Random'>Random</option>
                <option value='E-Learning'>E-Learning</option>
                <option value='Tugas'>Tugas</option>
                <option value='Information'>Information</option>
                <option value='Miscellaneous'>Miscellaneous</option>
                <option value='Technology'>Technology</option>
                <option value='Electronic'>Electronic</option>
                <option value='Photography'>Photography</option>
                <option value='Automotive'>Automotive</option>
                <option value='Science'>Science</option>
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Photography") { ?>
                <option class="optionTerpilih" value='Photography'>Photography</option>
                <option value='Random'>Random</option>
                <option value='E-Learning'>E-Learning</option>
                <option value='Tugas'>Tugas</option>
                <option value='Information'>Information</option>
                <option value='Miscellaneous'>Miscellaneous</option>
                <option value='Technology'>Technology</option>
                <option value='Electronic'>Electronic</option>
                <option value='Gadget'>Gadget</option>
                <option value='Automotive'>Automotive</option>
                <option value='Science'>Science</option>
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Automotive") { ?>
                <option class="optionTerpilih" value='Automotive'>Automotive</option>
                <option value='Random'>Random</option>
                <option value='E-Learning'>E-Learning</option>
                <option value='Tugas'>Tugas</option>
                <option value='Information'>Information</option>
                <option value='Miscellaneous'>Miscellaneous</option>
                <option value='Technology'>Technology</option>
                <option value='Electronic'>Electronic</option>
                <option value='Gadget'>Gadget</option>
                <option value='Photography'>Photography</option>
                <option value='Science'>Science</option>
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Science") { ?>
                <option class="optionTerpilih" value='Science'>Science</option>
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
                <option value='Education'>Education</option>
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Education") { ?>
                <option class="optionTerpilih" value='Education'>Education</option>
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
                <option value='Sport'>Sport</option>
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Sport") { ?>
                <option class="optionTerpilih" value='Sport'>Sport</option>
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
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "International") { ?>
                <option class="optionTerpilih" value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "National") { ?>
                <option class="optionTerpilih" value='National'>National</option>
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
                <option value='International'>International</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Political") { ?>
                <option class="optionTerpilih" value='Political'>Political</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
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
            <?php } else if ($createAdmin['Kategori'] == "Economy") { ?>
                <option class="optionTerpilih" value='Economy'>Economy</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Tradition'>Tradition</option>
                <option value='Food'>Food</option>
                <option value='School'>School</option>
                <option value='Film'>Film</option>
                <option value='Music'>Music</option>
                <option value='Horror'>Horror</option>
                <option value='Anime'>Anime</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Tradition") { ?>
                <option class="optionTerpilih" value='Tradition'>Tradition</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Economy'>Economy</option>
                <option value='Food'>Food</option>
                <option value='School'>School</option>
                <option value='Film'>Film</option>
                <option value='Music'>Music</option>
                <option value='Horror'>Horror</option>
                <option value='Anime'>Anime</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Food") { ?>
                <option class="optionTerpilih" value='Food'>Food</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Economy'>Economy</option>
                <option value='Tradition'>Tradition</option>
                <option value='School'>School</option>
                <option value='Film'>Film</option>
                <option value='Music'>Music</option>
                <option value='Horror'>Horror</option>
                <option value='Anime'>Anime</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "School") { ?>
                <option class="optionTerpilih" value='School'>School</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Economy'>Economy</option>
                <option value='Tradition'>Tradition</option>
                <option value='Food'>Food</option>
                <option value='Film'>Film</option>
                <option value='Music'>Music</option>
                <option value='Horror'>Horror</option>
                <option value='Anime'>Anime</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Film") { ?>
                <option class="optionTerpilih" value='Film'>Film</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Economy'>Economy</option>
                <option value='Tradition'>Tradition</option>
                <option value='Food'>Food</option>
                <option value='School'>School</option>
                <option value='Music'>Music</option>
                <option value='Horror'>Horror</option>
                <option value='Anime'>Anime</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Music") { ?>
                <option class="optionTerpilih" value='Music'>Music</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Economy'>Economy</option>
                <option value='Tradition'>Tradition</option>
                <option value='Food'>Food</option>
                <option value='School'>School</option>
                <option value='Film'>Film</option>
                <option value='Horror'>Horror</option>
                <option value='Anime'>Anime</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Horror") { ?>
                <option class="optionTerpilih" value='Horror'>Horror</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Economy'>Economy</option>
                <option value='Tradition'>Tradition</option>
                <option value='Food'>Food</option>
                <option value='School'>School</option>
                <option value='Film'>Film</option>
                <option value='Music'>Music</option>
                <option value='Anime'>Anime</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Anime") { ?>
                <option class="optionTerpilih" value='Anime'>Anime</option>
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
                <option value='International'>International</option>
                <option value='National'>National</option>
                <option value='Political'>Political</option>
                <option value='Economy'>Economy</option>
                <option value='Tradition'>Tradition</option>
                <option value='Food'>Food</option>
                <option value='School'>School</option>
                <option value='Film'>Film</option>
                <option value='Music'>Music</option>
                <option value='Horror'>Horror</option>
                <option value='Games'>Games</option>
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Games") { ?>
                <option class="optionTerpilih" value='Games'>Games</option>
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
                <option value='International'>International</option>
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
                <option value='Memes'>Memes</option>
            <?php } else if ($createAdmin['Kategori'] == "Memes") { ?>
                <option class="optionTerpilih" value='Memes'>Memes</option>
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
                <option value='International'>International</option>
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
            <?php } else { ?>
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
                <option value='International'>International</option>
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
            <?php } ?>

    </center></select>
</div>






<!-- <center><select style="display: none;" id="selekOpsi2" onchange="buttonSelekOpsi2()" class="inputCreateOpsi2" name="inputKategori2">
        <option value='Task'>Task</option>
        <option value='Install'>Install</option>
        <option value='HTML'>HTML (run code)</option>
        <option value='CSS'>CSS</option>
        <option value='Javascript'>Javascript</option>
</center></select>

<center><select style="display: none;" id="selekOpsi3" onchange="buttonSelekOpsi3()" class="inputCreateOpsi3" name="inputKategori3">
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
    document.addEventListener("DOMContentLoaded", function() {

        var selekOpsi = document.getElementById("selekOpsi");
        var selekOpsi2 = document.getElementById("selekOpsi2");
        var selekOpsi3 = document.getElementById("selekOpsi3");

        if (selekOpsi.value == "E-Learning") {
            selekOpsi2.style.display = "inline";
        } else {
            selekOpsi2.style.display = "none";
        }


        var inputCoding1 = document.getElementById("inputCoding1");
        var inputCoding2 = document.getElementById("inputCoding2");
        var inputCoding3 = document.getElementById("inputCoding3");
        var inputCoding4 = document.getElementById("inputCoding4");
        var inputCoding5 = document.getElementById("inputCoding5");
        var inputCoding6 = document.getElementById("inputCoding6");
        var inputCoding7 = document.getElementById("inputCoding7");
        var inputCoding8 = document.getElementById("inputCoding8");
        var inputCoding9 = document.getElementById("inputCoding9");
        var inputCoding10 = document.getElementById("inputCoding10");
        var inputCoding11 = document.getElementById("inputCoding11");
        var inputCoding12 = document.getElementById("inputCoding12");

        if (selekOpsi2.value !== "Task") {
            if (selekOpsi2.value !== "Install") {
                selekOpsi3.style.display = "inline";

                inputCoding1.style.display = "inline";
                inputCoding2.style.display = "inline";
                inputCoding3.style.display = "inline";
                inputCoding4.style.display = "inline";
                inputCoding5.style.display = "inline";
                inputCoding6.style.display = "inline";
                inputCoding7.style.display = "inline";
                inputCoding8.style.display = "inline";
                inputCoding9.style.display = "inline";
                inputCoding10.style.display = "inline";
                inputCoding11.style.display = "inline";
                inputCoding12.style.display = "inline";
            } else {
                selekOpsi3.style.display = "inline";

                inputCoding1.style.display = "none";
                inputCoding2.style.display = "none";
                inputCoding3.style.display = "none";
                inputCoding4.style.display = "none";
                inputCoding5.style.display = "none";
                inputCoding6.style.display = "none";
                inputCoding7.style.display = "none";
                inputCoding8.style.display = "none";
                inputCoding9.style.display = "none";
                inputCoding10.style.display = "none";
                inputCoding11.style.display = "none";
                inputCoding12.style.display = "none";
            }
        } else {
            selekOpsi3.style.display = "none";

            inputCoding1.style.display = "none";
            inputCoding2.style.display = "none";
            inputCoding3.style.display = "none";
            inputCoding4.style.display = "none";
            inputCoding5.style.display = "none";
            inputCoding6.style.display = "none";
            inputCoding7.style.display = "none";
            inputCoding8.style.display = "none";
            inputCoding9.style.display = "none";
            inputCoding10.style.display = "none";
            inputCoding11.style.display = "none";
            inputCoding12.style.display = "none";
        }
    });



    function buttonSelekOpsi() {
        var selekOpsi = document.getElementById("selekOpsi");
        var selekOpsi2 = document.getElementById("selekOpsi2");

        if (selekOpsi.value == "E-Learning") {
            selekOpsi2.style.display = "inline";
        } else {
            selekOpsi2.style.display = "none";
        }
    }



    function buttonSelekOpsi2() {
        var selekOpsi2 = document.getElementById("selekOpsi2");
        var selekOpsi3 = document.getElementById("selekOpsi3");

        var inputCoding1 = document.getElementById("inputCoding1");
        var inputCoding2 = document.getElementById("inputCoding2");
        var inputCoding3 = document.getElementById("inputCoding3");
        var inputCoding4 = document.getElementById("inputCoding4");
        var inputCoding5 = document.getElementById("inputCoding5");
        var inputCoding6 = document.getElementById("inputCoding6");
        var inputCoding7 = document.getElementById("inputCoding7");
        var inputCoding8 = document.getElementById("inputCoding8");
        var inputCoding9 = document.getElementById("inputCoding9");
        var inputCoding10 = document.getElementById("inputCoding10");
        var inputCoding11 = document.getElementById("inputCoding11");
        var inputCoding12 = document.getElementById("inputCoding12");

        if (selekOpsi2.value !== "Task") {
            if (selekOpsi2.value !== "Install") {
                selekOpsi3.style.display = "inline";

                inputCoding1.style.display = "inline";
                inputCoding2.style.display = "inline";
                inputCoding3.style.display = "inline";
                inputCoding4.style.display = "inline";
                inputCoding5.style.display = "inline";
                inputCoding6.style.display = "inline";
                inputCoding7.style.display = "inline";
                inputCoding8.style.display = "inline";
                inputCoding9.style.display = "inline";
                inputCoding10.style.display = "inline";
                inputCoding11.style.display = "inline";
                inputCoding12.style.display = "inline";
            } else {
                selekOpsi3.style.display = "inline";

                inputCoding1.style.display = "none";
                inputCoding2.style.display = "none";
                inputCoding3.style.display = "none";
                inputCoding4.style.display = "none";
                inputCoding5.style.display = "none";
                inputCoding6.style.display = "none";
                inputCoding7.style.display = "none";
                inputCoding8.style.display = "none";
                inputCoding9.style.display = "none";
                inputCoding10.style.display = "none";
                inputCoding11.style.display = "none";
                inputCoding12.style.display = "none";
            }
        } else {
            selekOpsi3.style.display = "none";

            inputCoding1.style.display = "none";
            inputCoding2.style.display = "none";
            inputCoding3.style.display = "none";
            inputCoding4.style.display = "none";
            inputCoding5.style.display = "none";
            inputCoding6.style.display = "none";
            inputCoding7.style.display = "none";
            inputCoding8.style.display = "none";
            inputCoding9.style.display = "none";
            inputCoding10.style.display = "none";
            inputCoding11.style.display = "none";
            inputCoding12.style.display = "none";
        }
    }
</script>




















<textarea style="display: none;" name="inputDate"><?= $createAdmin['Tanggal'] ?></textarea>

<input style="display: none;" value="<?= $createAdmin['DateSlug'] ?>" name="inputDateSlug">

<div>
    <img src="/ArticlePicture/<?= $createAdmin['Picture'] ?>" id="picturePreview" class="picturePreview">
</div>

<a style="color: red; margin-bottom: 15px;"><?= $validation->getError('inputPicture') ?></a>
<div>
    <input class="inputCreate" type="file" accept="image/*" id="inputPicture" name="inputPicture" autofocus>
    <button class="buttonCreate" form="update" name="update" type="submit" value="upload">
        <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 0.6px"></ion-icon> Edit
    </button>
</div>
</form>
</div>
</div>
</center>

</div>
</div>

<script src="/CSS & JS/create.js?v=<?php echo time(); ?>" defer></script>
<script src="/CSS & JS/upload.js?v=<?php echo time(); ?>" defer></script>
<script src="/CSS & JS/codeMirror/coding.js?v=<?php echo time(); ?>" defer></script>

<!-- Edit Function -->