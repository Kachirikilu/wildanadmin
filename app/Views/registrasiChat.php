<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS & JS/colorSpesial/original.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/loginBackground.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/registrasi.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/CSS & JS/admin.css?v=<?php echo time(); ?>">
    <title>Registration Form</title>
</head>

<body>

    <div id="center">
        <div class="WadahRegistrasi">
            <nav class="WadahRegisterNavAwal">
                <a href="/login_chat" style="text-decoration: none;"><button id="buttonRegistrasiLogout">
                        <span id="textLogin">Login</span>
                        <span id="textRegistrasi">Registrasi Form</span>
                    </button></a>
            </nav>
            <form action="/registrasicontroller/savechat" id="registrasi" method="post" enctype="multipart/form-data">