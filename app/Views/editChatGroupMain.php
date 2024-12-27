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
        <title>Edit <?= session()->get('Name') ?> Chat Group | Owner</title>
    <?php } else if (session()->get('Pangkat') == "Admin") { ?>
        <title>Edit <?= session()->get('Name') ?> Chat Group | Admin</title>
    <?php } else if (session()->get('Pangkat') == "User") { ?>
        <title>Edit <?= session()->get('Name') ?> Chat Group | User</title>
    <?php } else if (session()->get('Pangkat') == null) { ?>
        <title>Edit <?= session()->get('Name') ?> Chat Group | Visitor</title>
    <?php } ?>

</head>

<body id="background" onload="startTime()">

    <!-- Edit Function -->

    <?php if (session()->get('ID') == $chatGroup['IDUserName']) { ?>

        <div id="WadahEdit">
            <div id="center">
                <center>
                    <div class="WadahEditComment">
                        <nav class="WadahCreateNav">
                            <a href="/chat_group" style="text-decoration: none;"><button id="buttonCreateBack">
                                    <span id="textBack" class="colorNavCreateED">Back</span>
                                    <span id="textCreate" class="colorNavCreateED">Edit Chat</span>
                                </button></a>
                        </nav>
                        <?= csrf_field(); ?>
                        <div class="WadahEditKomenIsi">
                            <form action="/chatcontroller/updatechatgroupmain/<?= $chatGroup['ID']; ?>" id="update" method="post" enctype="multipart/form-data">
                                <div>
                                    <center><input value="<?= $chatGroup['Chat']; ?>" class="inputEditComment" type="text" id="inputChat" name="inputChat" placeholder="Edit your chat..." required="" value="<?= old('inputTittle') ?>" autofocus></center>
                                </div>

                                <div style="margin-bottom: 5px"></div>

                            </form>
                        </div>

                        <div id="DIVbuttonOkeCancel">
                            <div id="DIVbuttonOke"><button class="buttonOke" form="update" name="update" type="submit" value="upload">Oke</button></div>
                            <div id="DIVbuttonCancel"><a href="/chat_group"><button class="buttonCancel">Cancel</button></a></div>
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
                            <a href="/chat_group" style="text-decoration: none;"><button id="buttonCreateBack">
                                    <span id="textBack" class="colorNavCreateED">Back</span>
                                    <span id="textCreate" class="colorNavCreateED">You don't have authorization!</span>
                                </button></a>
                        </nav>
                        <div class="WadahEditKomenIsi">
                            <form>
                                <div>
                                    <center><input value="Error! 404 :(" class="inputEditComment" type="text" id="inputKomentar" name="inputKomentar" placeholder="Edit your chat..." required="" value="<?= old('inputTittle') ?>" autofocus></center>
                                </div>
                            </form>
                            <div style="margin-bottom: 5px"></div>
                        </div>
                        <div id="DIVbuttonOkeCancel">
                            <div id="DIVbuttonOke"><button class="buttonOke" form="">Error!</button></div>
                            <div id="DIVbuttonCancel"><a href="/chat_group"><button class="buttonCancel">Home</button></a></div>
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

    <!-- Edit Function -->

    <div class="UltraBlurX"></div>

    <!-- Home -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>

</body>

</html>