<!-- Chat Box -->

<ul id="ul-top3C" class="ul-top3C" style="display: none">

    <div class="scroll-body" id="scroll-body">

        <div class="other-inbox">
            <div class="bot-icon"><img src="/FileWeb/Steve Minecraft.png" width="108px"></div>
            <div class="bot-isi"send>
                <p class="break-word-chat" style="font-weight: 600;">Steve</p>
                <p class="break-word-chat" style="margin-top: 4px;">Halo <?= session()->get('Name') ?>, ada yang bisa saya bantu?</p>
            </div>
        </div>

        <div id="chat-body" class="respon"></div>
        <div id="cara-licik" style="display: none;"></div>
    </div>

    <ul style="bottom: 0px">
        <div class="user-typing">
            <div class="input-data">
                <input id="inputChat" placeholder="Type message..." autofocus required="" /></input>
                <button class="sendLayer" id="sendChat">
                    <ion-icon src="/FileWeb/Ionicons/Send.svg" style="transform: scaleX(-1.2) scaleY(1.2) translateY(1.2px); margin-right: 2px"></ion-icon> Send
                </button>
            </div>
        </div>
    </ul>
</ul>

<script>
    const chat = (txt, type) => {

        let a = document.createElement("div")

        <?php if (session()->get('Profil') !== null) { ?>
            a.innerHTML = '<div class="you-inbox"><div class="you-isi"><p class="break-word-chat">' + txt + '</p></div><div class="you-divProfil"><img src="/ProfilUser/<?= session()->get('Profil') ?>" class="image-profil"></div></div>'
        <?php } else { ?>
            a.innerHTML = '<div class="you-inbox"><div class="you-isi"><p class="break-word-chat">' + txt + '</p></div><div class="you-divProfil"><img src="/ProfilUser/Unknown.jpg" class="image-profil"></div></div>'
        <?php } ?>

        document.getElementById("chat-body").appendChild(a);

        if (type !== "user") {

            let b = document.createElement("div")

            b.innerHTML = '<div class="other-inbox"><div class="bot-icon"><img src="/FileWeb/Steve Minecraft.png" width="108px"></div><div class="bot-isi"><p class="break-word-chat" style="font-weight: 600;">Steve</p><p class="break-word-chat" style="margin-top: 4px;">' + txt + '</p></div></div>'
            document.getElementById("chat-body").appendChild(b);
            document.getElementById("cara-licik").appendChild(a);

        }
    }
</script>

<!-- Chat Box -->