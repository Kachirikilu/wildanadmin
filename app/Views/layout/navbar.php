<!-- Home -->
<div id="home">

    <!-- Navigasi -->

    <div id="header">

        <header id="header1">

            <?php if (session()->get('Color') == "nightEdition") { ?>
                <div id="idText">
                    <p>Night Mode</p>
                </div>
            <?php } else if (session()->get('Color') == "aprizaEdition") { ?>
                <div id="idText">
                    <p>Apriza Edition</p>
                </div>
            <?php } else if (session()->get('Color') == "viraEdition") { ?>
                <div id="idText">
                    <p>Vira Edition</p>
                </div>
            <?php } else if (session()->get('Color') == "auliaEdition") { ?>
                <div id="idText">
                    <p>Aulia Edition</p>
                </div>
            <?php } else if (session()->get('Color') == "daffaEdition") { ?>
                <div id="idText">
                    <p>Daffa Edition</p>
                </div>
            <?php } else if (session()->get('Color') == "ancaGTGEdition") { ?>
                <div id="idText">
                    <p>Anca GTG</p>
                </div>
            <?php } else { ?>
                <div id="idText">
                    <p>Welcome</p>
                </div>
            <?php } ?>

            <div id="idTextHidden"></div>

            <div class="buttonOptionDesain">

                <div id="NavCenterXP">
                    <button onclick="Image()" id="buttonNavImage">
                        <span id="iconImage">
                            <ion-icon src="/FileWeb/Ionicons/Wallpaper.svg" class="iconImage"></ion-icon>
                        </span>
                    </button>
                </div>

                <div id="NavCenterXP">
                    <button onclick="Color()" id="buttonNavColor">
                        <span id="iconColor">
                            <ion-icon src="/FileWeb/Ionicons/Color.svg" class="iconColor"></ion-icon>
                        </span>
                    </button>
                </div>

                <div id="NavCenterXP2">
                    <button onclick="Webkit()" id="buttonNavColor">
                        <span id="iconColor">
                            <ion-icon src="/FileWeb/Ionicons/Swap.svg" class="iconImage"></ion-icon>
                        </span>
                    </button>
                </div>

            </div>

        </header>

    </div>

    <header id="header1"></header>

    <ul id="Nav">

        <div id="NavCenter">

            <div class="div1"></div>
            <div class="div2"></div>
            <div class="div3"></div>

            <div id="NavCenterX2" class="pencarianDIV">
                <form action="" method="post" autocomplete="off">
                    <a class="PencarianLens">l</a>
                    <input onclick="Pencarian()" name="keyword" type="text" class="Pencarian" id="autoComplete" placeholder="Search..." required="">
                    <ul class="list"></ul>
                    <button type="submit" name="submit" id="buttonPencarian">Search</button>
                    <script src="/CSS & JS/autoComplete.js?v=<?php echo time(); ?>"></script>
                </form>
            </div>

            <div id="NavCenterX">
                <a href="/"><button onclick="Home()" id="buttonNavHome">
                        <span id="textH" class="teks">Home</span>
                        <span id="iconH">
                            <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                        </span>
                    </button></a>
            </div>

            <?php if (session()->get('Pangkat') == "CEO") { ?>

                <div id="NavCenterX">
                    <a href="/create_article"><button onclick="Create()" id="buttonNavCreate">
                            <span id="textCre" class="teks">Create</span>
                            <span id="iconCre">
                                <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18"></ion-icon>
                            </span>
                        </button></a>
                </div>

            <?php } else if (session()->get('Pangkat') == "Admin") { ?>

                <div id="NavCenterX">
                    <a href="/create_article"><button onclick="Create()" id="buttonNavCreate">
                            <span id="textCre" class="teks">Create</span>
                            <span id="iconCre">
                                <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18"></ion-icon>
                            </span>
                        </button></a>
                </div>

            <?php } else { ?>

                <div id="NavCenterX" style="display:none;">
                    <a href="/create_article"><button onclick="Create()" id="buttonNavCreate">
                            <span id="textCre" class="teks">Create</span>
                            <span id="iconCre">
                                <ion-icon src="/FileWeb/Ionicons/Create.svg" class="icon18"></ion-icon>
                            </span>
                        </button></a>
                </div>

            <?php } ?>

            <div id="NavCenterX">
                <button onclick="DataUser()" id="buttonNavNews">
                    <span id="textN" class="teks">User</span>
                    <span id="iconN">
                        <ion-icon src="/FileWeb/Ionicons/User.svg" class="icon18"></ion-icon>
                    </span>
                </button>
            </div>
            <div id="NavCenterX2">
                <button onclick="Chat()" id="buttonNavChat">
                    <span id="textC" class="teks">Group</span>
                    <span id="iconC">
                        <ion-icon src="/FileWeb/Ionicons/Group.svg" class="icon20"></ion-icon>
                    </span>
                </button>
            </div>

            <?php if (session()->get('UserName') !== null) { ?>

                <div id="NavCenterX3" style="display: none;">
                    <a href="/"><button onclick="Home()" id="buttonNavHomeM">
                            <span id="textHM" class="teks">Home</span>
                            <span id="iconHM">
                                <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                            </span>
                        </button></a>
                </div>

                <div id="NavCenterX2">
                    <button onclick="Profil()" id="buttonNavProfil">
                        <span id="textP" class="teks">Profil</span>
                        <span id="iconP"><img src="/ProfilUser/<?= session()->get('Profil') ?>" style="width: 17px; transform: scale(2.86); aspect-ratio: 1 / 1; object-fit:cover; border-radius: 10em;"></span>
                    </button>
                </div>

            <?php } else { ?>

                <div id="NavCenterX3">
                    <a href="/"><button onclick="Home()" id="buttonNavHomeM">
                            <span id="textHM" class="teks">Home</span>
                            <span id="iconHM">
                                <ion-icon src="/FileWeb/Ionicons/Home.svg" class="icon18"></ion-icon>
                            </span>
                        </button></a>
                </div>

                <div id="NavCenterX2" style="display: none;">
                    <button onclick="Profil()" id="buttonNavProfil"></button>
                </div>

            <?php } ?>

            <?php if (session()->get('UserName') !== null) { ?>

                <div id="NavCenterX">
                    <a href="logout"><button onclick="Logout()" id="buttonNavLogout">
                            <span id="textL" class="teks">Logout</span>
                            <span id="iconL">
                                <ion-icon src="/FileWeb/Ionicons/Logout.svg" class="icon22"></ion-icon>
                            </span>
                        </button></a>
                </div>

            <?php } else { ?>

                <div id="NavCenterX">
                    <a href="/login"><button onclick="Logout()" id="buttonNavLogout">
                            <span id="textL" class="teks">Login</span>
                            <span id="iconL">
                                <ion-icon src="/FileWeb/Ionicons/Login.svg" class="icon22"></ion-icon>
                            </span>
                        </button></a>
                </div>

            <?php } ?>

            <div id="MenuPopUp">
                <button onclick="Menu()" id="buttonMenu">
                    <table style="transform: scale(0.78);">
                        <tr class="buttonMenuAB">
                            <th id="buttonMenuA">
                                <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                            </th>
                        </tr>
                        <tr class="buttonMenuT">
                            <th>
                                <ion-icon src="/FileWeb/Ionicons/Menu.svg" class="iconM"></ion-icon>
                            </th>
                        </tr>
                        <tr class="buttonMenuAB">
                            <th id="buttonMenuB">
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
    <!-- Navigasi -->

    <header id="header2"></header>