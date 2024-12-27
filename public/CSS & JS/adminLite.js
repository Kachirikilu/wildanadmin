document.getElementById("buttonMenu").onmouseover = function() {menuMouseOver()};
document.getElementById("buttonMenu").onmouseout = function() {menuMouseOut()};

function menuMouseOver() {
    let bawah = document.getElementById("buttonMenuB");
        if (bawah.style.animation == "buttonMenu2B 160ms ease forwards") {
            }
        else {
            bawah.style.animation = "buttonMenu2B 160ms ease forwards";
        }
    let atas = document.getElementById("buttonMenuA");
        if (atas.style.animation == "buttonMenu2A 160ms ease forwards") {
            }
        else {
            atas.style.animation = "buttonMenu2A 160ms ease forwards";
        }
}
function menuMouseOut() {
    let bawah = document.getElementById("buttonMenuB");
        if (bawah.style.animation == "buttonMenu2BR 100ms ease forwards") {
            }
        else {
            bawah.style.animation = "buttonMenu2BR 100ms ease forwards";
        }
    let atas = document.getElementById("buttonMenuA");
        if (atas.style.animation == "buttonMenu2AR 100ms ease forwards") {
            }
        else {
            atas.style.animation = "buttonMenu2AR 100ms ease forwards";
        }
}

document.getElementById("buttonMenuP").onmouseover = function() {menuPMouseOver()};
document.getElementById("buttonMenuP").onmouseout = function() {menuPMouseOut()};

function menuPMouseOver() {
    let x = document.getElementById("iconMP");
        if (x.style.animation == "buttonMenu2BPop 360ms ease forwards") {
            }
        else {
            x.style.animation = "buttonMenu2BPop 360ms ease forwards";
        }
}
function menuPMouseOut() {
    let x = document.getElementById("iconMP");
        if (x.style.animation == "buttonMenu2BPopR 210ms ease forwards") {
            }
        else {
            x.style.animation = "buttonMenu2BPopR 210ms ease forwards";
        }
}

function Menu() {
    let x = document.getElementById("Nav2A");
        if (x.style.display == "flex") {
            setTimeout(out, 260);
            x.style.animation = "buttonNav2R 260ms ease forwards"
            function out() {
                x.style.display = "none";
            }
        } 
        else {
            x.style.animation = "buttonNav2 360ms ease forwards";
            x.style.display = "flex";
        }

    let profilClose = document.getElementById("ul-top3DP")
    if (profilClose.style.display == "inline") {
        setTimeout(out, 260);
        profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            profilClose.style.display = "none"
        }
    }
    
}

document.getElementById("buttonNavProfil").onmouseover = function() {menuMouseOverProfil()};
document.getElementById("buttonNavProfil").onmouseout = function() {menuMouseOutProfil()};

function menuMouseOverProfil() {
    let icon = document.getElementById("iconP");
        if (icon.style.animation == "iconAni2 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni2 400ms ease forwards";
        }
    let text = document.getElementById("textP");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutProfil() {
    let icon = document.getElementById("iconP");
        if (icon.style.animation == "iconAni2R 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni2R 320ms ease forwards";
        }
    let text = document.getElementById("textP");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

function Profil() {

    // Profil
    let profil = document.getElementById("ul-top3DP")
    if (profil.style.display == "none") {
        profil.style.animation = "ul-top3W 600ms ease forwards";
        profil.style.display = "inline";
    }
    else {
        setTimeout(out, 500);
        profil.style.animation = "ul-top3WR 500ms ease forwards"
        function out() {
            profil.style.display = "none"
        }
    }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "flex") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}