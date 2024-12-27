<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/registrasi.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/delete.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/chat.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/slide.css?v=<?php echo time(); ?>">

    <?php if (session()->get('Pangkat') == "CEO") { ?>
        <title>Delete <?= $userData['Name'] ?> Data | Owner</title>
    <?php } else if (session()->get('Pangkat') == "Admin") { ?>
        <title>Delete <?= $userData['Name'] ?> Data | Admin</title>
    <?php } else if (session()->get('Pangkat') == "User") { ?>
        <title>Delete <?= $userData['Name'] ?> Data | User</title>
    <?php } else if (session()->get('Pangkat') == null) { ?>
        <title>Delete <?= $userData['Name'] ?> Data | Visitor</title>
    <?php } ?>

</head>

<body id="background" onload="startTime()">

    <!-- Delete Function -->

    <?php if (session()->get('Pangkat') == "CEO") { ?>

        <?php if (session()->get('ID') == $userData['ID']) { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonCreateBack">
                                        <span id="textBack" class="colorNavCreateED">Back</span>
                                        <span id="textCreate" class="colorNavCreateED">Delete Account</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form action="/userdata/<?= $userData['UserName']; ?>" id="deleteForm" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="Profil" value="<?= $userData['Profil']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px; margin-top: 14px; margin-bottom: 8px;">Do you want to delete account '<?= $userData['UserName']; ?>'?</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                <div id="DIVbuttonCancel"><a href="javascript:window.history.back()"><button class="buttonCancel">Cancel</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } else if (session()->get('Pangkat') !== $userData['Pangkat']) { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonCreateBack">
                                        <span id="textBack" class="colorNavCreateED">Back</span>
                                        <span id="textCreate" class="colorNavCreateED">Delete Account</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form action="/userdata/<?= $userData['UserName']; ?>" id="deleteForm" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="Profil" value="<?= $userData['Profil']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete account '<?= $userData['UserName']; ?>'?</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                <div id="DIVbuttonCancel"><a href="javascript:window.history.back()"><button class="buttonCancel">Cancel</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } else { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a style="text-decoration: none;"><button id="buttonLogoutRegistrasi">
                                        <span id="textRegistrasi">Registrasi</span>
                                        <span id="textLogin">Error! 404 :(</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form>
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="Profil" value="<?= $userData['Profil']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">You don't have authorization!</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke">Error!</button></div>
                                <div id="DIVbuttonCancel"><a href="/"><button class="buttonCancel">Home</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } ?>

    <?php } else if (session()->get('Pangkat') == "Admin") { ?>

        <?php if ($userData['Pangkat'] !== "CEO") { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonCreateBack">
                                        <span id="textBack" class="colorNavCreateED">Back</span>
                                        <span id="textCreate" class="colorNavCreateED">Delete Account</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form action="/userdata/<?= $userData['UserName']; ?>" id="deleteForm" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="Profil" value="<?= $userData['Profil']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete account '<?= $userData['UserName']; ?>'?</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                <div id="DIVbuttonCancel"><a href="javascript:window.history.back()"><button class="buttonCancel">Cancel</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } else { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a style="text-decoration: none;"><button id="buttonLogoutRegistrasi">
                                        <span id="textRegistrasi">Registrasi</span>
                                        <span id="textLogin">Error! 404 :(</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form>
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="Profil" value="<?= $userData['Profil']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">You don't have authorization!</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke">Error!</button></div>
                                <div id="DIVbuttonCancel"><a href="/"><button class="buttonCancel">Home</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } ?>

    <?php }
    if (session()->get('Pangkat') == "User") { ?>

        <?php if (session()->get('ID') == $userData['ID']) { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonCreateBack">
                                        <span id="textBack" class="colorNavCreateED">Back</span>
                                        <span id="textCreate" class="colorNavCreateED">Delete Account</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form action="/userdata/<?= $userData['UserName']; ?>" id="deleteForm" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="Profil" value="<?= $userData['Profil']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete account '<?= $userData['UserName']; ?>'?</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                <div id="DIVbuttonCancel"><a href="javascript:window.history.back()"><button class="buttonCancel">Cancel</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } else { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a style="text-decoration: none;"><button id="buttonLogoutRegistrasi">
                                        <span id="textRegistrasi">Registrasi</span>
                                        <span id="textLogin">Error! 404 :(</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form>
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="Profil" value="<?= $userData['Profil']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">You don't have authorization!</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke">Error!</button></div>
                                <div id="DIVbuttonCancel"><a href="/"><button class="buttonCancel">Home</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } ?>

    <?php } ?>

    <!-- Delete Function -->

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

    <div class="UltraBlur"></div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>

</body>

</html>