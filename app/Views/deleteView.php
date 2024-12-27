    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="/CSS & JS/detail.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/delete.css?v=<?php echo time();?>">

    <?php if (session()->get('Pangkat') == "CEO") { ?>
        <title>Delete <?= $createAdmin['Judul']; ?> | Owner</title>
    <?php } else if (session()->get('Pangkat') == "Admin") { ?>
        <title>Delete <?= $createAdmin['Judul']; ?> | Admin</title>
    <?php } ?>

</head>

<body id="background" onload="startTime()">

    <!-- Delete Function -->

    <div id="WadahDelete">
        <div id="center">
            <center>
                <div class="WadahDelete">
                    <nav class="WadahDeleteNav">
                    <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonCreateBack">
                            <span id="textBack" class="colorNavCreateED">Back</span>
                            <span id="textCreate" class="colorNavCreateED">Delete</span>
                        </button></a>
                    </nav>
                    <div class="WadahEditKomenIsiforDelete">
                    <form action="/article/<?= $createAdmin['Slug']; ?>" id="deleteForm" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="Picture" value="<?= $createAdmin['Picture']; ?>">
                        <input type="hidden" name="P1" value="<?= $createAdmin['PictureP1']; ?>">
                        <input type="hidden" name="P2" value="<?= $createAdmin['PictureP2']; ?>">
                        <input type="hidden" name="P3" value="<?= $createAdmin['PictureP3']; ?>">
                        <input type="hidden" name="P4" value="<?= $createAdmin['PictureP4']; ?>">
                        <input type="hidden" name="P5" value="<?= $createAdmin['PictureP5']; ?>">
                        <input type="hidden" name="P6" value="<?= $createAdmin['PictureP6']; ?>">
                        <input type="hidden" name="P7" value="<?= $createAdmin['PictureP7']; ?>">
                        <input type="hidden" name="P8" value="<?= $createAdmin['PictureP8']; ?>">
                        <input type="hidden" name="P9" value="<?= $createAdmin['PictureP9']; ?>">
                        <input type="hidden" name="P10" value="<?= $createAdmin['PictureP10']; ?>">
                        <input type="hidden" name="P11" value="<?= $createAdmin['PictureP11']; ?>">
                        <input type="hidden" name="P12" value="<?= $createAdmin['PictureP12']; ?>">
                    </form>
                    <div style="width: 90%;">
                        <p style="overflow: hidden; text-overflow: ellipsis;  margin-top: 14px; margin-bottom: 8px;">Do you want to delete the article '<?= $createAdmin['Judul']; ?>'?</p>
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