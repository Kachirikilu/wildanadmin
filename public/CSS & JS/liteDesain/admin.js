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
        if (x.style.display == "inline") {
            setTimeout(out, 400);
            x.style.animation = "buttonNav2R 400ms ease forwards"
            function out() {
                x.style.display = "none";
            }
        } 
        else {
            x.style.animation = "buttonNav2 500ms ease forwards";
            x.style.display = "inline";
        }
}

document.getElementById("buttonNavHome").onmouseover = function() {menuMouseOverHome()};
document.getElementById("buttonNavHome").onmouseout = function() {menuMouseOutHome()};

function menuMouseOverHome() {
    let icon = document.getElementById("iconH");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textH");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutHome() {
    let icon = document.getElementById("iconH");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textH");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavHomeP").onmouseover = function() {menuMouseOverHomeP()};
document.getElementById("buttonNavHomeP").onmouseout = function() {menuMouseOutHomeP()};

function menuMouseOverHomeP() {
    let icon = document.getElementById("iconHP");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textHP");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutHomeP() {
    let icon = document.getElementById("iconHP");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textHP");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavCreate").onmouseover = function() {menuMouseOverCreate()};
document.getElementById("buttonNavCreate").onmouseout = function() {menuMouseOutCreate()};

function menuMouseOverCreate() {
    let icon = document.getElementById("iconCre");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textCre");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutCreate() {
    let icon = document.getElementById("iconCre");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textCre");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavCreateP").onmouseover = function() {menuMouseOverCreateP()};
document.getElementById("buttonNavCreateP").onmouseout = function() {menuMouseOutCreateP()};

function menuMouseOverCreateP() {
    let icon = document.getElementById("iconCreP");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textCreP");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutCreateP() {
    let icon = document.getElementById("iconCreP");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textCreP");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavNews").onmouseover = function() {menuMouseOverNews()};
document.getElementById("buttonNavNews").onmouseout = function() {menuMouseOutNews()};

function menuMouseOverNews() {
    let icon = document.getElementById("iconN");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textN");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutNews() {
    let icon = document.getElementById("iconN");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textN");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavNewsP").onmouseover = function() {menuMouseOverNewsP()};
document.getElementById("buttonNavNewsP").onmouseout = function() {menuMouseOutNewsP()};

function menuMouseOverNewsP() {
    let icon = document.getElementById("iconNP");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textNP");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutNewsP() {
    let icon = document.getElementById("iconNP");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textNP");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavChat").onmouseover = function() {menuMouseOverChat()};
document.getElementById("buttonNavChat").onmouseout = function() {menuMouseOutChat()};

function menuMouseOverChat() {
    let icon = document.getElementById("iconC");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textC");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutChat() {
    let icon = document.getElementById("iconC");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textC");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
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

document.getElementById("buttonNavLogout").onmouseover = function() {menuMouseOverLogout()};
document.getElementById("buttonNavLogout").onmouseout = function() {menuMouseOutLogout()};

function menuMouseOverLogout() {
    let icon = document.getElementById("iconL");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textL");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutLogout() {
    let icon = document.getElementById("iconL");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textL");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavLogoutP").onmouseover = function() {menuMouseOverLogoutP()};
document.getElementById("buttonNavLogoutP").onmouseout = function() {menuMouseOutLogoutP()};

function menuMouseOverLogoutP() {
    let icon = document.getElementById("iconLP");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textLP");
        if (text.style.animation == "textAni 400ms ease forwards") {
            }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutLogoutP() {
    let icon = document.getElementById("iconLP");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textLP");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}





function News() {
    // News
    let wallpaper = document.getElementById("ul-top3DU")
    if (wallpaper.style.display == "none") {
        wallpaper.style.animation = "ul-top3W 600ms ease forwards";
        wallpaper.style.display = "inline"
    }
    else {
        setTimeout(out, 500);
        wallpaper.style.animation = "ul-top3WR 500ms ease forwards"
        function out() {
            wallpaper.style.display = "none"
        }
    }

    let blur = document.getElementById("blur3")
    if (blur.style.filter == "none") {
        blur.style.animation = "blur 600ms ease forwards";
        blur.style.filter = "blur(5px)"
    }
    else {
        setTimeout(out, 500);
        blur.style.animation = "blurR 500ms ease forwards"
        function out() {
            blur.style.filter = "none"
        }
    }

    // Pembatas
    let chatClose = document.getElementById("ul-top3C")
    if (chatClose.style.display == "inline") {
        setTimeout(out, 260);
        chatClose.style.animation = "ul-top3CR 260ms ease forwards"
        function out() {
            chatClose.style.display = "none"
        }
    }
    let profilClose = document.getElementById("ul-top3DP")
    if (profilClose.style.display == "inline") {
        setTimeout(out, 260);
        profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            profilClose.style.display = "none"
        }
    }
    let wallpaperClose = document.getElementById("ul-top3W")
    if (wallpaperClose.style.display == "inline") {
        setTimeout(out, 260);
        wallpaperClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            wallpaperClose.style.display = "none"
        }
    }
    let blur2Close = document.getElementById("blur2")
    if (blur2Close.style.filter == "blur(8px)") {
       setTimeout(out, 260);
       blur2Close.style.animation = "blur2R 260ms ease forwards"
        function out() {
            blur2Close.style.filter = "none"
       }
    }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "inline") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}



function Profil() {
    // Profil
    let profil = document.getElementById("ul-top3DP")
    if (profil.style.display == "none") {
        profil.style.animation = "ul-top3W 600ms ease forwards";
        profil.style.display = "inline"
    }
    else {
        setTimeout(out, 500);
        profil.style.animation = "ul-top3WR 500ms ease forwards"
        function out() {
            profil.style.display = "none"
        }
    }

    let blur2 = document.getElementById("blur2")
    if (blur2.style.filter == "none") {
        blur2.style.animation = "blur2 600ms ease forwards";
        blur2.style.filter = "blur(8px)"
    }
    else {
        setTimeout(out, 500);
        blur2.style.animation = "blur2R 500ms ease forwards"
        function out() {
            blur2.style.filter = "none"
        }
    }

    // Pembatas
    let chatClose = document.getElementById("ul-top3C")
    if (chatClose.style.display == "inline") {
        setTimeout(out, 260);
        chatClose.style.animation = "ul-top3CR 260ms ease forwards"
        function out() {
            chatClose.style.display = "none"
        }
    }
    let wallpaperClose = document.getElementById("ul-top3W")
    if (wallpaperClose.style.display == "inline") {
       setTimeout(out, 260);
       wallpaperClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            wallpaperClose.style.display = "none"
       }
    }
    let userClose = document.getElementById("ul-top3DU")
    if (userClose.style.display == "inline") {
       setTimeout(out, 260);
       userClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            userClose.style.display = "none"
       }
    }
    let blur3Close = document.getElementById("blur3")
    if (blur3Close.style.filter == "blur(5px)") {
       setTimeout(out, 260);
       blur3Close.style.animation = "blurR 260ms ease forwards"
        function out() {
            blur3Close.style.filter = "none"
       }
    }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "inline") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}



function Chat() {
    // chat
    let chat = document.getElementById("ul-top3C")
    if (chat.style.display == "none") {
        chat.style.animation = "ul-top3C 450ms ease forwards";
        chat.style.display = "inline"
    }
    else {
        setTimeout(out, 350);
        chat.style.animation = "ul-top3CR 350ms ease forwards"
        function out() {
            chat.style.display = "none"
        }
    }

   // Pembatas
   let wallpaperClose = document.getElementById("ul-top3W")
    if (wallpaperClose.style.display == "inline") {
       setTimeout(out, 260);
       wallpaperClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            wallpaperClose.style.display = "none"
       }
    }
    let profilClose = document.getElementById("ul-top3DP")
    if (profilClose.style.display == "inline") {
        setTimeout(out, 260);
        profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            profilClose.style.display = "none"
        }
    }
    let userClose = document.getElementById("ul-top3DU")
    if (userClose.style.display == "inline") {
       setTimeout(out, 260);
       userClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            userClose.style.display = "none"
       }
    }
    let blur2Close = document.getElementById("blur2")
    if (blur2Close.style.filter == "blur(8px)") {
       setTimeout(out, 260);
       blur2Close.style.animation = "blur2R 260ms ease forwards"
        function out() {
            blur2Close.style.filter = "none"
       }
    }
    let blur3Close = document.getElementById("blur3")
    if (blur3Close.style.filter == "blur(5px)") {
       setTimeout(out, 260);
       blur3Close.style.animation = "blurR 260ms ease forwards"
        function out() {
            blur3Close.style.filter = "none"
       }
    }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "inline") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}