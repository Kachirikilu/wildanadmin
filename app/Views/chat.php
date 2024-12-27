<!-- Group Box -->

<ul id="ul-top3C" class="ul-top3C">

    <div class="scroll-body" id="scroll-body">

        <?php foreach ($chatGroup as $chatOutput) { ?>

            <?php $group = $user->where('ID', $chatOutput['IDUserName'])->first() ?>

            <?php if ($group !== null) { ?>
                <?php if ($group['Name'] == session()->get('Name')) { ?>

                    <div class="you-inbox">
                        <div class="you-isi">
                            <p class="break-word-chat"><?= $chatOutput['Chat'] ?></p>
                            <div style="display: flex;">
                                <a href="/edit_chat/<?= $chatOutput['ID']; ?>" class="you-edit">ㅤ</a>
                                <a href="/delete_chat/<?= $chatOutput['ID']; ?>" class="you-delete">ㅤ</a>
                            </div>
                        </div>
                        <div class="you-divProfil"><img src="/ProfilUser/<?= session()->get('Profil') ?>" class="image-profil"></div>
                    </div>

                <?php } else { ?>

                    <div class="other-inbox">
                        <div class="you-divProfil"><img src="/ProfilUser/<?= $group['Profil'] ?>" class="image-profil"></div>

                        <?php if ($group['Color'] == "nightEdition") { ?>
                            <div class="other-isi night-other">
                                <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                            <?php } else if ($group['Color'] == "aprizaEdition") { ?>
                                <div class="other-isi apriza-other">
                                    <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                <?php } else if ($group['Color'] == "viraEdition") { ?>
                                    <div class="other-isi vira-other">
                                        <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-vira"></ion-icon><?php } ?></p>
                                    <?php } else if ($group['Color'] == "auliaEdition") { ?>
                                        <div class="other-isi aulia-other">
                                            <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                        <?php } else if ($group['Color'] == "daffaEdition") { ?>
                                            <div class="other-isi daffa-other">
                                                <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                            <?php } else if ($group['Color'] == "ancaGTGEdition") { ?>
                                                <div class="other-isi ancaGTG-other">
                                                    <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                                <?php } else { ?>
                                                    <div class="other-isi original-other">
                                                        <p class="break-word-chat" style="font-weight: 600;"><?= $group['Name'] ?><?php if ($group['Pangkat'] == "CEO") { ?> <ion-icon src="/FileWeb/Ionicons/Verified.svg" class="checkmark-circle-other icon-other-white"></ion-icon><?php } ?></p>
                                                    <?php } ?>

                                                    <p class="break-word-chat" style="margin-top: 4px;"><?= $chatOutput['Chat'] ?></p>

                                                    <?php if (session()->get('Pangkat') == "CEO") { ?>
                                                        <div style="display: flex;"><a href="/delete_chat/<?= $chatOutput['ID']; ?>" class="you-delete">ㅤ</a></div>
                                                    <?php } else if (session()->get('Pangkat') == "Admin") {  ?>
                                                        <?php if ($group['Pangkat'] !== "CEO") { ?>
                                                            <div style="display: flex;"><a href="/delete_chat/<?= $chatOutput['ID']; ?>" class="you-delete">ㅤ</a></div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        <?php } else { ?>

                                            <div class="other-inbox">
                                                <div class="you-divProfil"><img src="/ProfilUser/Error.jpg" class="image-profil"></div>


                                                <div class="other-isi error-other">
                                                    <p class="break-word-chat" style="font-weight: 600; color: red;">Account has been deleted</p>
                                                    <p class="break-word-chat" style="margin-top: 4px;"><?= $chatOutput['Chat'] ?></p>

                                                    <?php if (session()->get('Pangkat') == "CEO") { ?>
                                                        <div style="display: flex;"><a href="/delete_chat/<?= $chatOutput['ID']; ?>" class="you-delete">ㅤ</a></div>
                                                    <?php } else if (session()->get('Pangkat') == "Admin") {  ?>
                                                        <div style="display: flex;"><a href="/delete_chat/<?= $chatOutput['ID']; ?>" class="you-delete">ㅤ</a></div>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    <?php } ?>

                                            </div>

                                            <?= csrf_field(); ?>

                                            <form action="/Chatcontroller/save" method="post" enctype="multipart/form-data" class="formGroupChat">
                                                <div class="user-typing">
                                                    <div class="input-data">
                                                        <input id="inputChat" placeholder="Type message..." autofocus required="" name="inputGroupChat" class="chatInput">
                                                        <button class="sendLayer" id="sendChat">
                                                            <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 2px"></ion-icon> Send
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

</ul>

<!-- Group Box -->