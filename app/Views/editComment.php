<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/detail.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/create.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/delete.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/registrasi.css?v=<?php echo time(); ?>">

    <?php if (session()->get('Pangkat') == "CEO") { ?>
        <title>Edit <?= session()->get('Name') ?> Comment | Owner</title>
    <?php } else if (session()->get('Pangkat') == "Admin") { ?>
        <title>Edit <?= session()->get('Name') ?> Comment | Admin</title>
    <?php } else if (session()->get('Pangkat') == "User") { ?>
        <title>Edit <?= session()->get('Name') ?> Comment | User</title>
    <?php } else if (session()->get('Pangkat') == null) { ?>
        <title>Edit <?= session()->get('Name') ?> Comment | Visitor</title>
    <?php } ?>

</head>

<body id="background" onload="startTime()">

    <!-- Edit Function -->

    <?php if (session()->get('ID') == $komentarData['IDUserName']) { ?>

        <?php $slugArtikel = $createAdminX->where('ID',  $komentarData['IDArtikel'])->first();
        $Artikel = $slugArtikel['Slug'];
        ?>

        <div id="WadahEdit">
            <div id="center">
                <center>
                    <div class="WadahEditComment">
                        <nav class="WadahCreateNav">
                            <a href="/article/<?= $Artikel; ?>" style="text-decoration: none;"><button id="buttonCreateBack">
                                    <span id="textBack" class="colorNavCreateED">Back</span>
                                    <span id="textCreate" class="colorNavCreateED">Edit Comment</span>
                                </button></a>
                        </nav>
                        <?= csrf_field(); ?>
                        <div class="WadahEditKomenIsi">
                            <form action="/komentarcontroller/update/<?= $komentarData['ID']; ?>" id="update" method="post" enctype="multipart/form-data">
                                <div>
                                    <center><input value="<?= $komentarData['Komentar']; ?>" class="inputEditComment" type="text" id="inputKomentar" name="inputKomentar" placeholder="Edit your comment..." required="" autofocus></center>
                                    <input type="hidden" name="inputID" value="<?= $komentarData['IDArtikel']; ?>">
                                </div>
                                <div>
                                    <center><input value="<?= $komentarData['ID']; ?>" type="hidden" id="ID" name="ID"></center>
                                </div>

                                <a style="color: red;"><?= $validation->getError('inputGambar') ?></a>

                                <?php if ($komentarData['Picture'] !== "") { ?>
                                    <div>
                                        <img src="/CommentPicture/<?= $komentarData['Picture'] ?>" id="picturePreview" class="picturePreviewKomen">
                                    </div>
                                <?php } else { ?>
                                    <div>
                                        <img id="picturePreview" class="picturePreviewKomen" style="display: none">
                                    </div>
                                <?php } ?>

                                <input class="inputCreateX" type="file" accept="image/*" value="<?= $komentarData['Picture']; ?>" name="inputGambar" id="PKomentar" style="display: none;">
                                <input type="hidden" value="<?= $komentarData['Picture']; ?>" name="inputGambarX" id="PKomentarX">

                                <?php if ($komentarData['Picture'] == "") { ?>
                                    <button class="buttonPicture" id="PictureKomentar" form="" onclick="pictureKomentar()" style="display: inline;">
                                        <ion-icon id="iconPicKomen" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> Add Picture
                                    </button>
                                <?php } else { ?>
                                    <button class="buttonPicture" id="PictureKomentar" form="" onclick="pictureKomentar()" style="display: inline;">
                                        <ion-icon id="iconPicKomen" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> New Picture
                                    </button>
                                <?php } ?>

                                <?php if ($komentarData['Picture'] !== "") { ?>
                                    <button class="buttonDelete" form="" onclick="deletePicKomentar()" id="deletePKomentar" style="display: inline">Delete Image</button>
                                <?php } else { ?>
                                    <button class="buttonDelete" form="" onclick="deletePicKomentar()" id="deletePKomentar" style="display: none">Delete Image</button>
                                <?php } ?>

                                <div style="margin-bottom: 5px"></div>

                            </form>
                        </div>

                        <div id="DIVbuttonOkeCancel">
                            <div id="DIVbuttonOke"><button class="buttonOke" form="update" name="update" type="submit" value="upload">Oke</button></div>
                            <div id="DIVbuttonCancel"><a href="/article/<?= $Artikel; ?>"><button class="buttonCancel">Cancel</button></a></div>
                        </div>
                    </div>
                </center>
            </div>
        </div>

    <?php } else { ?>

        <div id="WadahEdit">
            <div id="center">
                <center>
                    <div class="WadahEditComment">
                        <nav class="WadahCreateNav">
                            <a href="/" style="text-decoration: none;"><button id="buttonCreateBack">
                                    <span id="textBack" class="colorNavCreateED">Back</span>
                                    <span id="textCreate" class="colorNavCreateED">You don't have authorization!</span>
                                </button></a>
                        </nav>

                        <div class="WadahEditKomenIsi">
                            <form>
                                <div>
                                    <center><input value="Error! 404 :(" class="inputEditComment" type="text" id="inputKomentar" name="inputKomentar" placeholder="Edit your comment..." required="" value="<?= old('inputTittle') ?>" autofocus></center>
                                </div>
                            </form>

                            <div style="margin-bottom: 5px"></div>

                        </div>
                        <button class="buttonLogin">
                            <ion-icon name="paper-plane-outline" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right:0.6px"></ion-icon> Error!
                        </button>
                        <div id="DIVbuttonOkeCancel">
                            <div id="DIVbuttonOke"><button class="buttonOke" form="">Error!</button></div>
                            <div id="DIVbuttonCancel"><a href="/"><button class="buttonCancel">Home</button></a></div>
                        </div>
                    </div>
                </center>
            </div>
        </div>

    <?php } ?>

    <script>
        document.getElementById("buttonCreateBack").onmouseover = function() {
            menuMouseOverCreateBa()
        };
        document.getElementById("buttonCreateBack").onmouseout = function() {
            menuMouseOutCreateBa()
        };

        function menuMouseOverCreateBa() {
            let x = document.getElementById("textBack");
            if (x.style.animation == "textBack 500ms ease forwards") {} else {
                x.style.animation = "textBack 500ms ease forwards";
            }
            let y = document.getElementById("textCreate");
            if (y.style.animation == "textCreate 500ms ease forwards") {} else {
                y.style.animation = "textCreate 500ms ease forwards";
            }
        }

        function menuMouseOutCreateBa() {
            let x = document.getElementById("textBack");
            if (x.style.animation == "textBackR 420ms ease forwards") {} else {
                x.style.animation = "textBackR 420ms ease forwards";
            }
            let y = document.getElementById("textCreate");
            if (y.style.animation == "textCreateR 420ms ease forwards") {} else {
                y.style.animation = "textCreateR 420ms ease forwards";
            }
        }
    </script>

    <script src="/CSS & JS/editUpload.js?v=<?php echo time(); ?>" defer></script>

    <!-- Edit Function -->