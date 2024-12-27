<?= csrf_field(); ?>
<div>
    <center><input class="inputRegistrasi" type="text" id="inputName" name="inputName" placeholder="Name" required="" autofocus></center>
</div>
<center><a style="color: red;"><?= $validation->getError('inputEmail') ?></a></center>
<div>
    <center><input class="inputRegistrasi" type="email" id="inputEmail" name="inputEmail" placeholder="Email" required="" autofocus></center>
</div>
<center><a style="color: red;"><?= $validation->getError('inputUserName') ?></a></center>
<div>
    <center><input class="inputRegistrasi" type="text" id="inputUserName" name="inputUserName" placeholder="Username" required="" autofocus></center>
</div>
<div>
    <center><input class="inputRegistrasi" type="password" id="inputPassword" name="inputPassword" placeholder="Password" required="" autofocus></center>
</div>
<center><a style="color: red;"><?= $validation->getError('inputPasswordX') ?></a></center>
<div>
    <center><input class="inputRegistrasi" type="password" id="inputPasswordX" name="inputPasswordX" placeholder="Repeat password" required="" autofocus></center>
</div>
<center><button class="buttonMore" id="More" form="" onclick="More()" style="display: inline;">
        <ion-icon id="iconM" src="/FileWeb/Ionicons/Add.svg" style="transform: scale(1.2) translateY(1.8px);"></ion-icon> More
    </button></center>
<div>
    <center><input class="inputRegistrasi" type="number" id="inputWhatsApp" name="inputWhatsApp" placeholder="WhatsApp" autofocus></center>
</div>
<div>
    <center><input class="inputRegistrasi" type="text" id="inputInstagram" name="inputInstagram" placeholder="Instagram" autofocus></center>
</div>
<div>
    <center><input class="inputRegistrasi" type="text" id="inputFacebook" name="inputFacebook" placeholder="Facebook" autofocus></center>
</div>
<div>
    <center><input class="inputRegistrasi" type="password" id="inputAdminID" name="inputAdminID" placeholder="Admin ID" autofocus></center>
</div>
<div>
    <center><input class="inputRegistrasi" type="hidden" name="inputColor" value="" autofocus></center>
</div>
<div>
    <center><input class="inputRegistrasi" type="hidden" name="inputWallpaper" value="" autofocus></center>
</div>
<center><a style="color: red;"><?= $validation->getError('inputProfil') ?></a></center>
<div class="user-Profil">
    <center>
        <div>
            <input class="inputRegistrasi" type="file" accept="image/*" id="inputProfil" name="inputProfil" autofocus>
            <button class="buttonRegistrasi" form="registrasi" name="registrasi" type="submit" value="upload">
                <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 0.6px"></ion-icon> Create
            </button>
        </div>
        </form>
</div>
</div>

<div class="animated-Background">
    <div class="container-Background">
        <div class="bubbles">

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:14" class="spanApriza"></span>
            <span style="--i:23" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:14" class="spanApriza"></span>
            <span style="--i:23" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:14" class="spanApriza"></span>
            <span style="--i:23" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

            <!-- Pembatas -->
            <span style="--i:12" class="spanOriginal"></span>
            <span style="--i:11" class="spanOriginalX"></span>

            <span style="--i:24" class="spanNightMode"></span>
            <span style="--i:22" class="spanNightModeX"></span>

            <span style="--i:14" class="spanApriza"></span>
            <span style="--i:23" class="spanAprizaX"></span>

            <span style="--i:10" class="spanVira"></span>
            <span style="--i:9" class="spanViraX"></span>

            <span style="--i:24" class="spanAulia"></span>
            <span style="--i:25" class="spanAuliaX"></span>

            <span style="--i:20" class="spanDaffa"></span>
            <span style="--i:25" class="spanDaffaX"></span>

            <span style="--i:15" class="spanAncaGTG"></span>
            <span style="--i:10" class="spanAncaGTGX"></span>
            <!-- Pembatas -->

        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
<script src="/CSS & JS/registrasi.js?v=<?php echo time(); ?>" defer></script>

<div style="display: none;">
    <textarea>
<body></body>
        </textarea>
</div>

</body>

</html>