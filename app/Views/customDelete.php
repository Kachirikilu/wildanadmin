<link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/responsifHome.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/delete.css?v=<?php echo time(); ?>">

<title>Custom Delete | <?= $custom['By'] ?></title>

</head>

<body id="background">

    <!-- Delete Function -->

    <div id="WadahDelete">
        <div id="center">
            <center>
                <div class="WadahDelete">
                    <nav class="WadahDeleteNav" style="background: #1e90ff;">
                        <a href="javascript:window.history.back()" style="text-decoration: none;"><button id="buttonCreateBack">
                                <span id="textBack">Back</span>
                                <span id="textCreate">Delete</span>
                            </button></a>
                    </nav>
                    <form action="/custom_delete/<?= $custom['ID'] ?>" id="deleteForm" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                    <div style="width: 90%;">
                        <p style="overflow: hidden; text-overflow: ellipsis;  margin-top: 14px; margin-bottom: 8px;">Do you want to delete the custom by '<?= $custom['By'] ?>'?</p>
                    </div>
                    <div id="DIVbuttonOkeCancel">
                        <div id="DIVbuttonOke"><button class="buttonOke" form="deleteForm" name="delete" type="submit" value="upload">Oke</button></div>
                        <div id="DIVbuttonCancel"><a href="javascript:window.history.back()"><button class="buttonCancel">Cancel</button></a></div>
                    </div>
                </div>
        </div>
        </center>
    </div>

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

    <div class="UltraBlurX">