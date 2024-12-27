<!-- Group Box -->

<ul id="ul-top3C" class="ul-top3C" style="display: none">

    <div class="scroll-body" id="scroll-body">

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
                                <a href="/delete_chat_group/<?= $chatOutput['ID']; ?>" class="you-delete"></a>
                                <a href="/edit_chat_group/<?= $chatOutput['ID']; ?>" class="you-edit"></a>
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
                                                        <div style="display: flex;"><a href="/delete_chat_group/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
                                                    <?php } else if (session()->get('Pangkat') == "Admin") {  ?>
                                                        <?php if ($group['Pangkat'] !== "CEO") { ?>
                                                            <div style="display: flex;"><a href="/delete_chat_group/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
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
                                                        <div style="display: flex;"><a href="/delete_chat_group/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
                                                    <?php } else if (session()->get('Pangkat') == "Admin") {  ?>
                                                        <div style="display: flex;"><a href="/delete_chat_group/<?= $chatOutput['ID']; ?>" class="you-delete"></a></div>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    <?php } ?>

                                            </div>

                                            <?= csrf_field(); ?>

                                            <form action="/Chatcontroller/chatgroup" method="post" enctype="multipart/form-data" class="formGroupChat">
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

</ul>

<script type="text/javascript">
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
            startTimeGroup()
        }, 1000);
    }
</script>

<!-- Group Box -->