<link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/home.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/adminDisplay.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/detail.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/create.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="/CSS & JS/upload.css?v=<?php echo time(); ?>">

<?php if (session()->get('Pangkat') == "CEO") { ?>
    <title>Edit <?= $createAdmin['Judul']; ?> | Owner</title>
<?php } else if (session()->get('Pangkat') == "Admin") { ?>
    <title>Edit <?= $createAdmin['Judul']; ?> | Admin</title>
<?php } ?>

</head>

<body id="background" onload="startTime()">

    <!-- Edit Function -->
    <div class="WadahCreateT">
        <div class="WadahCreateFlex">

            <center>
                <div class="WadahCreate">
                    <nav class="WadahCreateNav">
                        <a href="/" style="text-decoration: none;"><button id="buttonCreateBack">
                                <span id="textBack" class="colorNavCreateED">Home</span>
                                <span id="textCreate" class="colorNavCreateED">Edit Form</span>
                            </button></a>
                    </nav>
                    <div class="WadahCreateIsi">
                        <?= csrf_field(); ?>
                        <form action="/updatecontroller/update/<?= $createAdmin['ID']; ?>" id="update" method="post" enctype="multipart/form-data">