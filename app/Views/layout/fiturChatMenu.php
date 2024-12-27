<?php if (session()->get('Pangkat') == "CEO") { ?>
    <title>Chat Menu | Owner</title>
<?php } else if (session()->get('Pangkat') == "Admin") { ?>
    <title>Chat Menu | Admin</title>
<?php } else if (session()->get('Pangkat') == "User") { ?>
    <title>Chat Menu | User</title>
<?php } else if (session()->get('Pangkat') == null) { ?>
    <title>Chat Menu | Visitor</title>
<?php } ?>

<div id="blur2" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">
    <div id="blur3" style="filter: none; position: absolute; width: 100%; height: 100vh; overflow:hidden;">

        <!-- Chat Box -->

        <ul id="chat-Box-Pribadi">

            <div class="layerUser-menu">

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

            <div class="layerChat-menu">
                <div class="scroll-body-PribadiX"></div>
                <div class="scroll-body-Pribadi" id="scroll-body">/div>
                </div>
        </ul>

        <!-- Chat Box -->

    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js?v=<?php echo time(); ?>"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js?v=<?php echo time(); ?>"></script>
<script src="/CSS & JS/chatDetail.js?v=<?php echo time(); ?>" defer></script>

</body>

</html>