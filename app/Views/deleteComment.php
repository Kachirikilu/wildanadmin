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
    <link rel="stylesheet" href="/CSS & JS/delete.css?v=<?php echo time(); ?>">
</head>

<body id="background" onload="startTime()">

    <!-- Delete Function -->

    <?php $slugArtikel = $createAdminX->where('ID',  $komentarData['IDArtikel'])->first();
    $Artikel = $slugArtikel['Slug'];
    ?>

    <?php $komentarX = $user->where('ID', $komentarData['IDUserName'])->first() ?>

    <?php if ($komentarX !== null) { ?>

        <?php if (session()->get('Pangkat') == "CEO") { ?>
            <title>Delete <?= $komentarX['Name'] ?> Comment | Owner</title>
        <?php } else if (session()->get('Pangkat') == "Admin") { ?>
            <title>Delete <?= $komentarX['Name'] ?> Comment | Admin</title>
        <?php } else if (session()->get('Pangkat') == "User") { ?>
            <title>Delete <?= $komentarX['Name'] ?> Comment | User</title>
        <?php } else if (session()->get('Pangkat') == null) { ?>
            <title>Delete <?= $komentarX['Name'] ?> Comment | Visitor</title>
        <?php } ?>

    <?php } else { ?>

        <?php if (session()->get('Pangkat') == "CEO") { ?>
            <title>Delete Unknown Comment | Owner</title>
        <?php } else if (session()->get('Pangkat') == "Admin") { ?>
            <title>Delete Unknown Comment | Admin</title>
        <?php } else if (session()->get('Pangkat') == "User") { ?>
            <title>Delete Unknown Comment | User</title>
        <?php } else if (session()->get('Pangkat') == null) { ?>
            <title>Delete Unknown Comment | Visitor</title>
        <?php } ?>

    <?php } ?>

    <?php if ($komentarX !== null) { ?>

        <?php if (session()->get('Pangkat') == "CEO") { ?>

            <?php if (session()->get('ID') == $komentarX['ID']) { ?>

                <div id="WadahDelete">
                    <div id="center">
                        <center>
                            <div class="WadahDelete">
                                <nav class="WadahDeleteNav">
                                    <a href="/article/<?= $Artikel; ?>" style="text-decoration: none;"><button id="buttonCreateBack">
                                            <span id="textBack" class="colorNavCreateED">Back</span>
                                            <span id="textCreate" class="colorNavCreateED">Delete Comment</span>
                                        </button></a>
                                </nav>
                                <div class="WadahEditKomenIsiforDelete">
                                    <form action="/delete_comment/<?= $komentarData['ID']; ?>" id="deleteForm" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="IDArtikel" value="<?= $komentarData['IDArtikel']; ?>">
                                        <input type="hidden" name="inputGambar" value="<?= $komentarData['Picture']; ?>">
                                    </form>
                                    <div style="width: 90%;">
                                        <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete comment '<?= $komentarData['Komentar']; ?>'?</p>
                                    </div>
                                </div>
                                <div id="DIVbuttonOkeCancel">
                                    <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                    <div id="DIVbuttonCancel"><a href="/article/<?= $Artikel; ?>"><button class="buttonCancel">Cancel</button></a></div>
                                </div>
                            </div>
                    </div>
                    </center>
                </div>

            <?php } else if (session()->get('Pangkat') !== $komentarX['Pangkat']) { ?>

                <div id="WadahDelete">
                    <div id="center">
                        <center>
                            <div class="WadahDelete">
                                <nav class="WadahDeleteNav">
                                    <a href="/article/<?= $Artikel; ?>" style="text-decoration: none;"><button id="buttonCreateBack">
                                            <span id="textBack" class="colorNavCreateED">Back</span>
                                            <span id="textCreate" class="colorNavCreateED">Delete Comment</span>
                                        </button></a>
                                </nav>
                                <div class="WadahEditKomenIsiforDelete">
                                    <form action="/delete_comment/<?= $komentarData['ID']; ?>" id="deleteForm" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="IDArtikel" value="<?= $komentarData['IDArtikel']; ?>">
                                        <input type="hidden" name="inputGambar" value="<?= $komentarData['Picture']; ?>">
                                    </form>
                                    <div style="width: 90%;">
                                        <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete comment '<?= $komentarData['Komentar']; ?>'?</p>
                                    </div>
                                </div>
                                <div id="DIVbuttonOkeCancel">
                                    <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                    <div id="DIVbuttonCancel"><a href="/article/<?= $Artikel; ?>"><button class="buttonCancel">Cancel</button></a></div>
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

            <?php if ($komentarX['Pangkat'] !== "CEO") { ?>

                <div id="WadahDelete">
                    <div id="center">
                        <center>
                            <div class="WadahDelete">
                                <nav class="WadahDeleteNav">
                                    <a href="/article/<?= $Artikel; ?>" style="text-decoration: none;"><button id="buttonCreateBack">
                                            <span id="textBack" class="colorNavCreateED">Back</span>
                                            <span id="textCreate" class="colorNavCreateED">Delete Comment</span>
                                        </button></a>
                                </nav>
                                <div class="WadahEditKomenIsiforDelete">
                                    <form action="/delete_comment/<?= $komentarData['ID']; ?>" id="deleteForm" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="IDArtikel" value="<?= $komentarData['IDArtikel']; ?>">
                                        <input type="hidden" name="inputGambar" value="<?= $komentarData['Picture']; ?>">
                                    </form>
                                    <div style="width: 90%;">
                                        <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete comment '<?= $komentarData['Komentar']; ?>'?</p>
                                    </div>
                                </div>
                                <div id="DIVbuttonOkeCancel">
                                    <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                    <div id="DIVbuttonCancel"><a href="/article/<?= $Artikel; ?>"><button class="buttonCancel">Cancel</button></a></div>
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

        <?php } else if (session()->get('Pangkat') == "User") { ?>

            <?php if (session()->get('ID') == $komentarX['ID']) { ?>

                <div id="WadahDelete">
                    <div id="center">
                        <center>
                            <div class="WadahDelete">
                                <nav class="WadahDeleteNav">
                                    <a href="/article/<?= $Artikel; ?>" style="text-decoration: none;"><button id="buttonCreateBack">
                                            <span id="textBack" class="colorNavCreateED">Back</span>
                                            <span id="textCreate" class="colorNavCreateED">Delete Comment</span>
                                        </button></a>
                                </nav>
                                <div class="WadahEditKomenIsiforDelete">
                                    <form action="/delete_comment/<?= $komentarData['ID']; ?>" id="deleteForm" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="IDArtikel" value="<?= $komentarData['IDArtikel']; ?>">
                                        <input type="hidden" name="inputGambar" value="<?= $komentarData['Picture']; ?>">
                                    </form>
                                    <div style="width: 90%;">
                                        <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete comment '<?= $komentarData['Komentar']; ?>'?</p>
                                    </div>
                                </div>
                                <div id="DIVbuttonOkeCancel">
                                    <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                    <div id="DIVbuttonCancel"><a href="/article/<?= $Artikel; ?>"><button class="buttonCancel">Cancel</button></a></div>
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

        <?php } else if (session()->get() !== null) { ?>

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

    <?php } else { ?>

        <?php if (session()->get('Pangkat') == "CEO") { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a href="/article/<?= $Artikel; ?>" style="text-decoration: none;"><button id="buttonCreateBack">
                                        <span id="textBack" class="colorNavCreateED">Back</span>
                                        <span id="textCreate" class="colorNavCreateED">Delete Comment</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form action="/delete_comment/<?= $komentarData['ID']; ?>" id="deleteForm" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="IDArtikel" value="<?= $komentarData['IDArtikel']; ?>">
                                    <input type="hidden" name="inputGambar" value="<?= $komentarData['Picture']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete comment '<?= $komentarData['Komentar']; ?>'?</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                <div id="DIVbuttonCancel"><a href="/article/<?= $Artikel; ?>"><button class="buttonCancel">Cancel</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

            <div id="WadahDelete">
                <div id="center">
                    <center>
                        <div class="WadahDelete">
                            <nav class="WadahDeleteNav">
                                <a href="/article/<?= $Artikel; ?>" style="text-decoration: none;"><button id="buttonCreateBack">
                                        <span id="textBack" class="colorNavCreateED">Back</span>
                                        <span id="textCreate" class="colorNavCreateED">Delete Comment</span>
                                    </button></a>
                            </nav>
                            <div class="WadahEditKomenIsiforDelete">
                                <form action="/delete_comment/<?= $komentarData['ID']; ?>" id="deleteForm" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="IDArtikel" value="<?= $komentarData['IDArtikel']; ?>">
                                    <input type="hidden" name="inputGambar" value="<?= $komentarData['Picture']; ?>">
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">Do you want to delete comment '<?= $komentarData['Komentar']; ?>'?</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                                <div id="DIVbuttonCancel"><a href="/article/<?= $Artikel; ?>"><button class="buttonCancel">Cancel</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } else if (session()->get('Pangkat') == "User") { ?>

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
                                </form>
                                <div style="width: 90%;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; margin-top: 14px; margin-bottom: 8px;">You don't have authorization!</p>
                                </div>
                            </div>
                            <div id="DIVbuttonOkeCancel">
                                <div id="DIVbuttonOke"><button class="buttonOke">Error!</button></div>
                                <div id="DIVbuttonCancel"><a href="/"><button class="buttonCancel">Cancel</button></a></div>
                            </div>
                        </div>
                </div>
                </center>
            </div>

        <?php } else if (session()->get('Pangkat') == null) { ?>

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

    <!-- Delete Function -->