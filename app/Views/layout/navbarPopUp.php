<ul id="NavX" style="display: none;">

    <div id="NavCenter">

        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
        <div id="NavCenterX2">
            <a><button onclick="HomeR()" id="buttonNavHomeX">
                    <span id="textHX" class="teks">Back</span>
                    <span id="iconHX">
                        <ion-icon src="/FileWeb/Ionicons/Back.svg" class="icon20"></ion-icon>
                    </span>
                </button></a>
        </div>
        <?php if (session()->get('Pangkat') == "CEO") { ?>

            <div id="NavCenterX">
                <a href="/create_article"><button onclick="Create()" id="buttonNavCreateX">
                        <span id="textCreX" class="teks">Create</span>
                        <span id="iconCreX">
                            <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18"></ion-icon>
                        </span>
                    </button></a>
            </div>

        <?php } else if (session()->get('Pangkat') == "Admin") { ?>

            <div id="NavCenterX">
                <a href="/create_article"><button onclick="Create()" id="buttonNavCreateX">
                        <span id="textCreX" class="teks">Create</span>
                        <span id="iconCreX">
                            <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18"></ion-icon>
                        </span>
                    </button></a>
            </div>

        <?php } else { ?>

            <div id="NavCenterX" style="display:none;">
                <a href="/create_article"><button onclick="Create()" id="buttonNavCreateX">
                        <span id="textCreX" class="teks">Create</span>
                        <span id="iconCreX">
                            <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18"></ion-icon>
                        </span>
                    </button></a>
            </div>

        <?php } ?>

        <div id="NavCenterX">
            <button onclick="DataUser()" id="buttonNavNewsX">
                <span id="textNX" class="teks">User</span>
                <span id="iconNX">
                    <ion-icon src="/FileWeb/Ionicons/User.svg" class="icon18"></ion-icon>
                </span>
            </button>
        </div>
        <div id="NavCenterX">
            <button onclick="Chat()" id="buttonNavChatX">
                <span id="textCX" class="teks">Group</span>
                <span id="iconCX">
                    <ion-icon src="/FileWeb/Ionicons/Group.svg" class="icon20"></ion-icon>
                </span>
            </button>
        </div>

        <?php if (session()->get('UserName') !== null) { ?>

            <div id="NavCenterX3" style="display: none;">
                <a href="/"><button onclick="Home()" id="buttonNavHomeMX">
                        <span id="textHMX" class="teks">Home</span>
                        <span id="iconHMX">
                            <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                        </span>
                    </button></a>
            </div>

            <div id="NavCenterX2">
                <button onclick="Profil()" id="buttonNavProfilX">
                    <span id="textPX" class="teks">Profil</span>
                    <span id="iconPX"><img src="/ProfilUser/<?= session()->get('Profil') ?>" style="width: 17px; transform: scale(2.86); aspect-ratio: 1 / 1; object-fit:cover; border-radius: 10em;"></span>
                </button>
            </div>

        <?php } else { ?>

            <div id="NavCenterX3">
                <a href="/"><button onclick="Home()" id="buttonNavHomeMX">
                        <span id="textHMX" class="teks">Home</span>
                        <span id="iconHMX">
                            <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                        </span>
                    </button></a>
            </div>

            <div id="NavCenterX2" style="display: none;">
                <button onclick="Profil()" id="buttonNavProfilX"></button>
            </div>

        <?php } ?>

        <?php if (session()->get('UserName') !== null) { ?>

            <div id="NavCenterX">
                <a href="logout"><button onclick="Logout()" id="buttonNavLogoutX">
                        <span id="textLX" class="teks">Logout</span>
                        <span id="iconLX">
                            <ion-icon src="/FileWeb/Ionicons/Logout.svg" class="icon22"></ion-icon>
                        </span>
                    </button></a>
            </div>

        <?php } else { ?>

            <div id="NavCenterX">
                <a href="/login"><button onclick="Logout()" id="buttonNavLogoutX">
                        <span id="textLX" class="teks">Login</span>
                        <span id="iconLX">
                            <ion-icon src="/FileWeb/Ionicons/Login.svg" class="icon22"></ion-icon>
                        </span>
                    </button></a>
            </div>

        <?php } ?>

        <div id="MenuPopUp">
            <button onclick="Menu()" id="buttonMenuX">
                <table style="transform: scale(0.78);">
                    <tr class="buttonMenuAB">
                        <th id="buttonMenuAX">
                            <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                        </th>
                    </tr>
                    <tr class="buttonMenuT">
                        <th>
                            <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                        </th>
                    </tr>
                    <tr class="buttonMenuAB">
                        <th id="buttonMenuBX">
                            <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                        </th>
                    </tr>
                </table>
            </button>
        </div>
        <div class="div3"></div>
        <div class="div2"></div>
        <div class="div1"></div>

    </div>

</ul>