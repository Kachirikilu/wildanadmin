<?php if (session()->get('Pangkat') == "CEO") { ?>
    <title>Chat Group | Owner</title>
<?php } else if (session()->get('Pangkat') == "Admin") { ?>
    <title>Chat Group | Admin</title>
<?php } else if (session()->get('Pangkat') == "User") { ?>
    <title>Chat Group | User</title>
<?php } else if (session()->get('Pangkat') == null) { ?>
    <title>Chat Group | Visitor</title>
<?php } ?>

<div id="blur2" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">
    <div id="blur3" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">

        <!-- Chat Box -->

        <div id="chat-Box-Pribadi">

            <div class="layerUser">

                <a href="/chat_group" style="text-decoration: none;">
                    <button class="chat-all">

                        <div class="all-divProfil"><img src="/FileWeb/UNSRI.jpeg" class="image-profil"></div>
                        <div class="NameChat">
                            <p class="name-NameChat">Group</p>
                            <p class="email-NameChat">by Wildan Athif Muttaqien</p>
                            <div class="previewChat">

                                <?php foreach ($chatGroupView as $groupOutputX) { ?>

                                    <?php if ($groupOutputX['IDUserName'] == session()->get('ID')) { ?>
                                        <p class="email-NameChat">You: <?= $groupOutputX['Chat'] ?></p>
                                    <?php } ?>
                                    <?php if ($groupOutputX['IDUserName'] !== session()->get('ID')) { ?>
                                        <?php
                                        $userData = $user->where('ID', $groupOutputX['IDUserName'])->first();
                                        if ($userData !== null) {
                                        ?>
                                            <p class="email-NameChat"><?= $userData['Name'] ?>: <?= $groupOutputX['Chat'] ?></p>
                                        <?php } else { ?>
                                            <p class="email-NameChat"><a style="color: red">Error404</a>: <?= $groupOutputX['Chat'] ?></p>
                                        <?php } ?>
                                    <?php } ?>

                                <?php } ?>

                            </div>
                        </div>

                    </button>
                </a>

                <!-- Kolom Chat -->

                <?php foreach ($userX as $datauser) { ?>
                    <?php if ($datauser['UserName'] !== session()->get('UserName')) { ?>

                        <?php if ($datauser['Pangkat'] == "CEO") { ?>
                            <a href="/chat_viewer/<?= $datauser['ID'] ?>" style="text-decoration: none;">
                                <button class="chat-all">
                                    <div class="all-divProfil"><img src="/ProfilUser/<?= $datauser['Profil'] ?>" class="image-profil"></div>
                                    <div class="NameChat">
                                        <p class="name-NameChat"><?= $datauser['Name'] ?><?php if ($datauser['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-vira" style="color: #1b9cfc;"></ion-icon><?php } ?></p>
                                        <p class="email-NameChat"><?= $datauser['Pangkat'] ?> | <?= $datauser['UserName'] ?></p>
                                        <div class="previewChat">
                                            <?php foreach ($chatView as $chatOutputX) { ?>
                                                <?php $chatX = $user->where('ID', $chatOutputX['IDPengirim'])->first() ?>
                                                <?php if ($chatX !== null) { ?>
                                                    <?php if ($chatX['Name'] == session()->get('Name')) { ?>
                                                        <?php if ($chatOutputX['IDDikirim'] == $datauser['ID']) { ?>
                                                            <p class="email-NameChat">You: <?= $chatOutputX['Chat'] ?></p>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <?php if ($chatOutputX['IDPengirim'] == $datauser['ID']) { ?>
                                                            <?php if ($chatOutputX['IDDikirim'] == session()->get('ID')) { ?>
                                                                <p class="email-NameChat"><?= $chatOutputX['Chat'] ?></p>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        <?php } ?>

                    <?php } ?>
                <?php } ?>
                <?php foreach ($userX as $datauser) { ?>
                    <?php if ($datauser['UserName'] !== session()->get('UserName')) { ?>

                        <?php if ($datauser['Pangkat'] == "Admin") { ?>
                            <a href="/chat_viewer/<?= $datauser['ID'] ?>" style="text-decoration: none;">
                                <button class="chat-all">
                                    <div class="all-divProfil"><img src="/ProfilUser/<?= $datauser['Profil'] ?>" class="image-profil"></div>
                                    <div class="NameChat">
                                        <p class="name-NameChat"><?= $datauser['Name'] ?><?php if ($datauser['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-vira" style="color: #1b9cfc;"></ion-icon><?php } ?></p>
                                        <p class="email-NameChat"><?= $datauser['Pangkat'] ?> | <?= $datauser['UserName'] ?></p>
                                        <div class="previewChat">
                                            <?php foreach ($chatView as $chatOutputX) { ?>
                                                <?php $chatX = $user->where('ID', $chatOutputX['IDPengirim'])->first() ?>
                                                <?php if ($chatX !== null) { ?>
                                                    <?php if ($chatX['Name'] == session()->get('Name')) { ?>
                                                        <?php if ($chatOutputX['IDDikirim'] == $datauser['ID']) { ?>
                                                            <p class="email-NameChat">You: <?= $chatOutputX['Chat'] ?></p>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <?php if ($chatOutputX['IDPengirim'] == $datauser['ID']) { ?>
                                                            <?php if ($chatOutputX['IDDikirim'] == session()->get('ID')) { ?>
                                                                <p class="email-NameChat"><?= $chatOutputX['Chat'] ?></p>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        <?php } ?>

                    <?php } ?>
                <?php } ?>
                <?php foreach ($userX as $datauser) { ?>
                    <?php if ($datauser['UserName'] !== session()->get('UserName')) { ?>

                        <?php if ($datauser['Pangkat'] == "User") { ?>
                            <a href="/chat_viewer/<?= $datauser['ID'] ?>" style="text-decoration: none;">
                                <button class="chat-all">
                                    <div class="all-divProfil"><img src="/ProfilUser/<?= $datauser['Profil'] ?>" class="image-profil"></div>
                                    <div class="NameChat">
                                        <p class="name-NameChat"><?= $datauser['Name'] ?><?php if ($datauser['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-vira" style="color: #1b9cfc;"></ion-icon><?php } ?></p>
                                        <p class="email-NameChat"><?= $datauser['Pangkat'] ?> | <?= $datauser['UserName'] ?></p>
                                        <div class="previewChat">
                                            <?php foreach ($chatView as $chatOutputX) { ?>
                                                <?php $chatX = $user->where('ID', $chatOutputX['IDPengirim'])->first() ?>
                                                <?php if ($chatX !== null) { ?>
                                                    <?php if ($chatX['Name'] == session()->get('Name')) { ?>
                                                        <?php if ($chatOutputX['IDDikirim'] == $datauser['ID']) { ?>
                                                            <p class="email-NameChat">You: <?= $chatOutputX['Chat'] ?></p>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <?php if ($chatOutputX['IDPengirim'] == $datauser['ID']) { ?>
                                                            <?php if ($chatOutputX['IDDikirim'] == session()->get('ID')) { ?>
                                                                <p class="email-NameChat"><?= $chatOutputX['Chat'] ?></p>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        <?php } ?>

                    <?php } ?>
                <?php } ?>

                <!-- Kolom Chat -->

                <div style="height: 56px;"></div>

            </div>

            <div class="layerChat">
                <div class="scroll-body-Pribadi" id="scroll-body">

                <div class="profilLayer">
                        <center>
                            <div class="imageProfil-divLayer"><img src="/FileWeb/UNSRI.jpeg" class="image-profil"></div>
                            <p class="nameProfil-Layer">Group</p>
                        </center>
                    </div>

                    <?php foreach ($chatGroup as $chatOutput) { ?>

                        <?php $group = $user->where('ID', $chatOutput['IDUserName'])->first() ?>

                        <?php if ($group !== null) { ?>
                            <?php if ($group['Name'] == session()->get('Name')) { ?>

                                <div class="you-inbox">
                                    <div class="you-isi">

                                        <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                            <p class="you-timeP"><?= $chatOutput['Time'] ?></p>
                                        <?php } else { ?>
                                            <p class="you-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                        <?php } ?>

                                        <p class="break-word-chat"><?= $chatOutput['Chat'] ?></p>

                                        <div style="display: flex;">
                                            <a href="/delete_chat_group_main/<?= $chatOutput['ID']; ?>" class="you-delete"></a>
                                            <a href="/edit_chat_group_main/<?= $chatOutput['ID']; ?>" class="you-edit"></a>
                                        </div>
                                    </div>
                                    <div class="you-divProfil">
                                        <img src="/ProfilUser/<?= session()->get('Profil') ?>" class="image-profil">
                                    </div>

                                </div>

                            <?php } else { ?>

                                <div class="other-inbox">

                                    <div class="you-divProfil"><img src="/ProfilUser/<?= $group['Profil'] ?>" class="image-profil"></div>

                                    <?php if ($group['Color'] == "nightEdition") { ?>
                                        <div class="other-isi night-other">
                                            <div class="other-tanggalChat">
                                                <div class="other-time">
                                                    <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                        <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                    <?php } else { ?>
                                                        <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                        <?php } else if ($group['Color'] == "aprizaEdition") { ?>
                                            <div class="other-isi apriza-other">
                                                <div class="other-tanggalChat">
                                                    <div class="other-time">
                                                        <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                            <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                        <?php } else { ?>
                                                            <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                            <?php } else if ($group['Color'] == "viraEdition") { ?>
                                                <div class="other-isi vira-other">
                                                    <div class="other-tanggalChat">
                                                        <div class="other-time">
                                                            <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                                <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                            <?php } else { ?>
                                                                <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-vira"></ion-icon><?php } ?></p>
                                                <?php } else if ($group['Color'] == "auliaEdition") { ?>
                                                    <div class="other-isi aulia-other">
                                                        <div class="other-tanggalChat">
                                                            <div class="other-time">
                                                                <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                                    <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                                <?php } else { ?>
                                                                    <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-aulia"></ion-icon><?php } ?></p>
                                                    <?php } else if ($group['Color'] == "daffaEdition") { ?>
                                                        <div class="other-isi daffa-other">
                                                            <div class="other-tanggalChat">
                                                                <div class="other-time">
                                                                    <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                                        <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                                    <?php } else { ?>
                                                                        <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                                        <?php } else if ($group['Color'] == "ancaGTGEdition") { ?>
                                                            <div class="other-isi ancaGTG-other">
                                                                <div class="other-tanggalChat">
                                                                    <div class="other-time">
                                                                        <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                                            <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                                        <?php } else { ?>
                                                                            <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                                            <?php } else { ?>
                                                                <div class="other-isi original-other">
                                                                    <div class="other-tanggalChat">
                                                                        <div class="other-time">
                                                                            <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                                                <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                                            <?php } else { ?>
                                                                                <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                    <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                                                <?php } ?>

                                                                <p class="break-word-chat" style="margin-top: 4px;"><?= $chatOutput['Chat'] ?></p>

                                                                <?php if (session()->get('Pangkat') == "CEO") { ?>
                                                                    <div style="display: flex;"><a href="/delete_chat_group_main/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
                                                                <?php } else if (session()->get('Pangkat') == "Admin") {  ?>
                                                                    <?php if ($group['Pangkat'] !== "CEO") { ?>
                                                                        <div style="display: flex;"><a href="/delete_chat_group_main/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                </div>
                                                            </div>

                                                        <?php } ?>

                                                    <?php } else { ?>

                                                        <div class="other-inbox">
                                                            <div class="you-divProfil"><img src="/ProfilUser/Error.jpg" class="image-profil"></div>

                                                            <div class="other-isi error-other">
                                                                <div class="other-tanggalChat">
                                                                    <div class="other-time">
                                                                        <?php if (session()->get('DateSessionL') == $chatOutput['Date']) { ?>
                                                                            <p class="other-timeP"><?= $chatOutput['Time'] ?></p>
                                                                        <?php } else { ?>
                                                                            <p class="other-timeP"><?= $chatOutput['Time'] ?>, <?= $chatOutput['Date'] ?></p>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <p class="break-word-chat" style="font-weight: 600; color: red;">Account has been deleted</p>
                                                                <p class="break-word-chat" style="margin-top: 4px;"><?= $chatOutput['Chat'] ?></p>

                                                                <?php if (session()->get('Pangkat') == "CEO") { ?>
                                                                    <div style="display: flex;"><a href="/delete_chat_group_main/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
                                                                <?php } else if (session()->get('Pangkat') == "Admin") {  ?>
                                                                    <div style="display: flex;"><a href="/delete_chat_group_main/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                    <?php } ?>
                                                <?php } ?>

                                                        </div>

                                                        <?= csrf_field(); ?>

                                                        <form action="/Chatcontroller/chatgroupmain" method="post" enctype="multipart/form-data" class="formGroupChat">
                                                            <div class="user-typing">
                                                                <div class="input-data">
                                                                    <input id="inputChat" placeholder="Type message..." autofocus required="" name="inputGroupChat" class="chatInput">

                                                                    <input type="hidden" name="inputTime" id="inputTimeG" required="">
                                                                    <input type="hidden" name="inputDate" id="inputDateG" required="">

                                                                    <button class="sendLayer" id="sendChat" onclick="startTimeGroup()">
                                                                        <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 2px"></ion-icon> Send
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                                <script type="text/javascript">
                                                    localStorage.setItem("Scroll", "Scroll");

                                                    if (localStorage) {
                                                        Scroll = localStorage.getItem("Scroll")
                                                    }
                                                    if (Scroll == "Scroll") {
                                                        const scrollScrollBody = document.querySelector(".scroll-body-Pribadi");
                                                        scrollScrollBody.scrollTop += 999999999999;
                                                    }

                                                    window.addEventListener("load", function() {
                                                        const scrollScrollBody = document.querySelector(".scroll-body-Pribadi");
                                                        scrollScrollBody.scrollTop += 999999999999;
                                                    });

                                                    function startTimeGroup() {
                                                        const date = new Date();

                                                        let TimeG = document.getElementById("inputTimeG");
                                                        let DateG = document.getElementById("inputDateG");

                                                        let tahun = date.getFullYear();
                                                        let bulanX = date.getMonth();
                                                        let tanggalX = date.getDate();
                                                        let hour = date.getHours();
                                                        let minute = date.getMinutes();

                                                        if (bulanX == 0) {
                                                            bulan = "Jan";
                                                        } else if (bulanX == 1) {
                                                            bulan = "Feb";
                                                        } else if (bulanX == 2) {
                                                            bulan = "Mar";
                                                        } else if (bulanX == 3) {
                                                            bulan = "Apr";
                                                        } else if (bulanX == 4) {
                                                            bulan = "May";
                                                        } else if (bulanX == 5) {
                                                            bulan = "Jun";
                                                        } else if (bulanX == 6) {
                                                            bulan = "Jul";
                                                        } else if (bulanX == 7) {
                                                            bulan = "Aug";
                                                        } else if (bulanX == 8) {
                                                            bulan = "Sep";
                                                        } else if (bulanX == 9) {
                                                            bulan = "Oct";
                                                        } else if (bulanX == 10) {
                                                            bulan = "Nov";
                                                        } else if (bulanX == 11) {
                                                            bulan = "Dec";
                                                        }

                                                        if (tanggalX < 10) {
                                                            tanggal = "0" + tanggalX;
                                                        } else if (tanggalX > 9) {
                                                            tanggal = tanggalX;
                                                        }

                                                        if (hour < 10) {
                                                            if (minute < 10) {
                                                                TimeG.value = "0" + hour + ":0" + minute;
                                                            } else if (minute > 9) {
                                                                TimeG.value = "0" + hour + ":" + minute;
                                                            }
                                                        } else if (hour > 9) {
                                                            if (minute < 10) {
                                                                TimeG.value = hour + ":0" + minute;
                                                            } else if (minute > 9) {
                                                                TimeG.value = hour + ":" + minute;
                                                            }
                                                        }

                                                        DateG.value = bulan + " " + tanggal + " " + tahun;
                                                        setTimeout(function() {
                                                            startTimeGhat()
                                                        }, 1000);
                                                    }
                                                </script>

                                                <!-- Chat Box -->

                                            </div>
                                        </div>

                                        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
                                        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
                                        <script src="/CSS & JS/chatDetail.js?v=<?php echo time(); ?>" defer></script>

                                        </body>

                                        </html>