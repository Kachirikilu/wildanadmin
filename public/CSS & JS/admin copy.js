homeScroll = document.getElementById("home");

window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

document.getElementById("buttonMenu").onmouseover = function() {menuMouseOver()};
document.getElementById("buttonMenu").onmouseout = function() {menuMouseOut()};
document.getElementById("buttonMenuX").onmouseover = function() {menuMouseOverX()};
document.getElementById("buttonMenuX").onmouseout = function() {menuMouseOutX()};

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
function menuMouseOverX() {
    let bawah = document.getElementById("buttonMenuBX");
        if (bawah.style.animation == "buttonMenu2B 160ms ease forwards") {
            }
        else {
            bawah.style.animation = "buttonMenu2B 160ms ease forwards";
        }
    let atas = document.getElementById("buttonMenuAX");
        if (atas.style.animation == "buttonMenu2A 160ms ease forwards") {
            }
        else {
            atas.style.animation = "buttonMenu2A 160ms ease forwards";
        }
}
function menuMouseOutX() {
    let bawah = document.getElementById("buttonMenuBX");
        if (bawah.style.animation == "buttonMenu2BR 100ms ease forwards") {
            }
        else {
            bawah.style.animation = "buttonMenu2BR 100ms ease forwards";
        }
    let atas = document.getElementById("buttonMenuAX");
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

document.getElementById("buttonNavHome").onmouseover = function() {menuMouseOverHome()};
document.getElementById("buttonNavHome").onmouseout = function() {menuMouseOutHome()};
document.getElementById("buttonNavHomeM").onmouseover = function() {menuMouseOverHomeM()};
document.getElementById("buttonNavHomeM").onmouseout = function() {menuMouseOutHomeM()};
document.getElementById("buttonNavHomeX").onmouseover = function() {menuMouseOverHomeX()};
document.getElementById("buttonNavHomeX").onmouseout = function() {menuMouseOutHomeX()};
document.getElementById("buttonNavHomeMX").onmouseover = function() {menuMouseOverHomeMX()};
document.getElementById("buttonNavHomeMX").onmouseout = function() {menuMouseOutHomeMX()};

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
function menuMouseOverHomeM() {
    let icon = document.getElementById("iconHM");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textHM");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutHomeM() {
    let icon = document.getElementById("iconHM");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textHM");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}
function menuMouseOverHomeX() {
    let icon = document.getElementById("iconHX");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textHX");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutHomeX() {
    let icon = document.getElementById("iconHX");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textHX");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}
function menuMouseOverHomeMX() {
    let icon = document.getElementById("iconHMX");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textHX");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutHomeMX() {
    let icon = document.getElementById("iconHMX");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textHMX");
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
document.getElementById("buttonNavCreateX").onmouseover = function() {menuMouseOverCreateX()};
document.getElementById("buttonNavCreateX").onmouseout = function() {menuMouseOutCreateX()};

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
function menuMouseOverCreateX() {
    let icon = document.getElementById("iconCreX");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textCreX");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutCreateX() {
    let icon = document.getElementById("iconCreX");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textCreX");
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
document.getElementById("buttonNavNewsX").onmouseover = function() {menuMouseOverNewsX()};
document.getElementById("buttonNavNewsX").onmouseout = function() {menuMouseOutNewsX()};

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
function menuMouseOverNewsX() {
    let icon = document.getElementById("iconNX");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textNX");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutNewsX() {
    let icon = document.getElementById("iconNX");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textNX");
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
document.getElementById("buttonNavChatX").onmouseover = function() {menuMouseOverChatX()};
document.getElementById("buttonNavChatX").onmouseout = function() {menuMouseOutChatX()};

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
function menuMouseOverChatX() {
    let icon = document.getElementById("iconCX");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textCX");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutChatX() {
    let icon = document.getElementById("iconCX");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textCX");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavProfil").onmouseover = function() {menuMouseOverProfil()};
document.getElementById("buttonNavProfil").onmouseout = function() {menuMouseOutProfil()};
document.getElementById("buttonNavProfilX").onmouseover = function() {menuMouseOverProfilX()};
document.getElementById("buttonNavProfilX").onmouseout = function() {menuMouseOutProfilX()};

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
function menuMouseOverProfilX() {
    let icon = document.getElementById("iconPX");
        if (icon.style.animation == "iconAni2 400ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni2 400ms ease forwards";
        }
    let text = document.getElementById("textPX");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutProfilX() {
    let icon = document.getElementById("iconPX");
        if (icon.style.animation == "iconAni2R 320ms ease forwards") {
            }
        else {
            icon.style.animation = "iconAni2R 320ms ease forwards";
        }
    let text = document.getElementById("textPX");
        if (text.style.animation == "textAniR 320ms ease forwards") {
            }
        else {
            text.style.animation = "textAniR 320ms ease forwards";
        }
}

document.getElementById("buttonNavLogout").onmouseover = function() {menuMouseOverLogout()};
document.getElementById("buttonNavLogout").onmouseout = function() {menuMouseOutLogout()};
document.getElementById("buttonNavLogoutX").onmouseover = function() {menuMouseOverLogoutX()};
document.getElementById("buttonNavLogoutX").onmouseout = function() {menuMouseOutLogoutX()};

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
function menuMouseOverLogoutX() {
    let icon = document.getElementById("iconLX");
        if (icon.style.animation == "iconAni 400ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAni 400ms ease forwards";
        }
    let text = document.getElementById("textLX");
        if (text.style.animation == "textAni 400ms ease forwards") {
        }
        else {
            text.style.animation = "textAni 400ms ease forwards";
        }
}
function menuMouseOutLogoutX() {
    let icon = document.getElementById("iconLX");
        if (icon.style.animation == "iconAniR 320ms ease forwards") {
        }
        else {
            icon.style.animation = "iconAniR 320ms ease forwards";
        }
    let text = document.getElementById("textLX");
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

// function Menu() {
//     let x = document.getElementById("Nav2A");
//         if (x.style.display == "flex") {
//             setTimeout(out, 260);
//             x.style.animation = "buttonNav2R 260ms ease forwards"
//             function out() {
//                 x.style.display = "none";
//             }
//         } 
//         else {
//             x.style.animation = "buttonNav2 360ms ease forwards";
//             x.style.display = "flex";
//         }

        
//     let nav = document.getElementById("Nav")
//     let navX = document.getElementById("NavX")
//         if (navX.style.display == "flex") {
//             navX.style.display = "none"
//             nav.style.animation = "navR 500ms ease forwards"
//         }
//         else if (navX.style.display == "none"){
//             navX.style.display = "none"
//         }

//     // Pembatas
//     let imageClose = document.getElementById("ul-top3Image")
//     if (imageClose.style.display == "inline") {
//        setTimeout(out, 260);
//        imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             imageClose.style.display = "none"
//        }
//     }
//     let colorClose = document.getElementById("ul-top3Color")
//     if (colorClose.style.display == "inline") {
//        setTimeout(out, 260);
//        colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             colorClose.style.display = "none"
//        }
//     }
//     let chatClose = document.getElementById("ul-top3C")
//     if (chatClose.style.display == "inline") {
//         setTimeout(out, 260);
//         chatClose.style.animation = "ul-top3CR 260ms ease forwards"
//         function out() {
//             chatClose.style.display = "none"
//         }
//     }
//     let userClose = document.getElementById("ul-top3DU")
//     if (userClose.style.display == "inline") {
//        setTimeout(out, 260);
//        userClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             userClose.style.display = "none"
//        }
//     }
//     let profilClose = document.getElementById("ul-top3DP")
//     if (profilClose.style.display == "inline") {
//         setTimeout(out, 260);
//         profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             profilClose.style.display = "none"
//         }
//     }
    
//     let header = document.getElementById("header")

//     let blur2Close = document.getElementById("blur2")
//     if (blur2Close.style.filter == "blur(8px)") {
//         setTimeout(out, 260);
//         blur2Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur2Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }

//     let blur3Close = document.getElementById("blur3")
//     if (blur3Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur3Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur3Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }

//     let blur4Close = document.getElementById("blur4")
//     if (blur4Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur4Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur4Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }

//     let blur5Close = document.getElementById("blur5")
//     if (blur5Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur5Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur5Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }
// }

// function DataUser() {

//     let profil = document.getElementById("ul-top3DP")
//     let color = document.getElementById("ul-top3Color")
//     let image = document.getElementById("ul-top3Image")
//     if (profil.style.display == "none") {
//         if (color.style.display == "none") {
//             if (image.style.display == "none") {
//                 let nav = document.getElementById("Nav")
//                 let navX = document.getElementById("NavX")
//                 if (navX.style.display == "none") {
//                     navX.style.animation = "navX 600ms ease forwards"
//                     nav.style.animation = "nav 600ms ease forwards"
//                     navX.style.display = "flex"
//                     nav.style.display == "translateY(-100vh)"
//                 } else {
//                     navX.style.animation = "navXR 500ms ease forwards"
//                     nav.style.animation = "navR 500ms ease forwards"
//                     setTimeout(out, 500);
//                     function out() {
//                         navX.style.display = "none"
//                         nav.style.transform == "translateY(0%)"
//                     }
//                 }
//             }
//         }
//     }

//     // News
//     let user = document.getElementById("ul-top3DU")
//     if (user.style.display == "none") {
//         user.style.animation = "ul-top3W 600ms ease forwards";
//         user.style.display = "inline"
//     }
//     else {
//         setTimeout(out, 500);
//         user.style.animation = "ul-top3WR 500ms ease forwards"
//         function out() {
//             user.style.display = "none"
//         }
//     }

    
//     let blur3 = document.getElementById("blur3")
//     let header = document.getElementById("header")
//     if (blur3.style.filter == "none") {
//         blur3.style.animation = "blur 600ms ease forwards";
//         blur3.style.filter = "blur(5px)"
//         header.style.pointerEvents = "none"
//     }
//     else {
//         setTimeout(out, 500);
//         blur3.style.animation = "blurR 500ms ease forwards"
//         function out() {
//             blur3.style.filter = "none"
//             header.style.pointerEvents = "auto"
//         }
//     }

//     // Pembatas
//     let imageClose = document.getElementById("ul-top3Image")
//     if (imageClose.style.display == "inline") {
//        setTimeout(out, 260);
//        imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             imageClose.style.display = "none"
//        }
//     }
//     let colorClose = document.getElementById("ul-top3Color")
//     if (colorClose.style.display == "inline") {
//         setTimeout(out, 260);
//         colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             colorClose.style.display = "none"
//         }
//     }
//     let chatClose = document.getElementById("ul-top3C")
//     if (chatClose.style.display == "inline") {
//         setTimeout(out, 260);
//         chatClose.style.animation = "ul-top3CR 260ms ease forwards"
//         function out() {
//             chatClose.style.display = "none"
//         }
//     }
//     let profilClose = document.getElementById("ul-top3DP")
//     if (profilClose.style.display == "inline") {
//         setTimeout(out, 260);
//         profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             profilClose.style.display = "none"
//         }
//     }
//     let blur2Close = document.getElementById("blur2")
//     if (blur2Close.style.filter == "blur(8px)") {
//         setTimeout(out, 260);
//         blur2Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur2Close.style.filter = "none"
//        }
//     }

//     let blur4Close = document.getElementById("blur4")
//     if (blur4Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur4Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur4Close.style.filter = "none"
//        }
//     }
//     if (blur4Close.style.pointerEvents == "none") {
//         setTimeout(out, 260);
//         function out() {
//             blur4Close.style.pointerEvents = "auto"
//         }
//     }

//     let x = document.getElementById("Nav2A");
//     if (x.style.display == "flex") {
//         setTimeout(out, 400);
//         x.style.animation = "buttonNav2R 400ms ease forwards"
//         function out() {
//             x.style.display = "none";
//         }
//     }
// }



// function Profil() {

//     let user = document.getElementById("ul-top3DU")
//     let color = document.getElementById("ul-top3Color")
//     let image = document.getElementById("ul-top3Image")
//     if (user.style.display == "none") {
//         if (color.style.display == "none") {
//             if (image.style.display == "none") {
//                 let nav = document.getElementById("Nav")
//                 let navX = document.getElementById("NavX")
//                 if (navX.style.display == "none") {
//                     navX.style.animation = "navX 600ms ease forwards"
//                     nav.style.animation = "nav 600ms ease forwards"
//                     navX.style.display = "flex"
//                     nav.style.transform == "translateY(-100vh)"
//                 } else {
//                     navX.style.animation = "navXR 500ms ease forwards"
//                     nav.style.animation = "navR 500ms ease forwards"
//                     setTimeout(out, 500);
//                     function out() {
//                         navX.style.display = "none"
//                         nav.style.transform == "translateY(0%)"
//                     }
//                 }
//             }
//         }
//     }


//     // Profil
//     let profil = document.getElementById("ul-top3DP")
//     if (profil.style.display == "none") {
//         profil.style.animation = "ul-top3W 600ms ease forwards";
//         profil.style.display = "inline";
//     }
//     else {
//         setTimeout(out, 500);
//         profil.style.animation = "ul-top3WR 500ms ease forwards"
//         function out() {
//             profil.style.display = "none"
//         }
//     }

//     let blur2 = document.getElementById("blur2")
//     let header = document.getElementById("header")
//     if (blur2.style.filter == "none") {
//         blur2.style.animation = "blur2 600ms ease forwards";
//         blur2.style.filter = "blur(8px)"
//         header.style.pointerEvents = "none"
//     }
//     else {
//         setTimeout(out, 500);
//         blur2.style.animation = "blur2R 500ms ease forwards"
//         function out() {
//             blur2.style.filter = "none"
//             header.style.pointerEvents = "auto"
//         }
//     }


//     // Pembatas
//     let imageClose = document.getElementById("ul-top3Image")
//     if (imageClose.style.display == "inline") {
//        setTimeout(out, 260);
//        imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             imageClose.style.display = "none"
//        }
//     }
//     let colorClose = document.getElementById("ul-top3Color")
//     if (colorClose.style.display == "inline") {
//        setTimeout(out, 260);
//        colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             colorClose.style.display = "none"
//        }
//     }
//     let chatClose = document.getElementById("ul-top3C")
//     if (chatClose.style.display == "inline") {
//         setTimeout(out, 260);
//         chatClose.style.animation = "ul-top3CR 260ms ease forwards"
//         function out() {
//             chatClose.style.display = "none"
//         }
//     }
//     let userClose = document.getElementById("ul-top3DU")
//     if (userClose.style.display == "inline") {
//        setTimeout(out, 260);
//        userClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             userClose.style.display = "none"
//        }
//     }

//     let blur3Close = document.getElementById("blur3")
//     if (blur3Close.style.filter == "blur(5px)") {
//        setTimeout(out, 260);
//        blur3Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur3Close.style.filter = "none"
//        }
//     }
//     let blur4Close = document.getElementById("blur4")
//     if (blur4Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur4Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur4Close.style.filter = "none"
//        }
//     }
//     let blur5Close = document.getElementById("blur5")
//     if (blur5Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur5Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur5Close.style.filter = "none"
//        }
//     }

//     let x = document.getElementById("Nav2A");
//     if (x.style.display == "flex") {
//         setTimeout(out, 400);
//         x.style.animation = "buttonNav2R 400ms ease forwards"
//         function out() {
//             x.style.display = "none";
//         }
//     }
// }



// function Chat() {

//     let nav = document.getElementById("Nav")
//     let navX = document.getElementById("NavX")
//     if (navX.style.display == "flex") {
//         setTimeout(out, 500);
//         navX.style.animation = "navXR 500ms ease forwards"
//         nav.style.animation = "navR 500ms ease forwards"
//         function out() {
//             navX.style.display = "none"
//             nav.style.transform == "translateY(0%)"
//         }
//     }
    
//     // Chat
//     let chat = document.getElementById("ul-top3C")
//     if (chat.style.display == "none") {
//         chat.style.animation = "ul-top3C 450ms ease forwards";
//         chat.style.display = "inline"
//         const scrollElement = document.querySelector(".scroll-body");
//         scrollElement.scrollTop += 999999999999;
//     }
//     else {
//         setTimeout(out, 350);
//         chat.style.animation = "ul-top3CR 350ms ease forwards"
//         function out() {
//             chat.style.display = "none"
//         }
//     }

//    // Pembatas

//     let header = document.getElementById("header")
//     header.style.pointerEvents = "auto";

//     let imageClose = document.getElementById("ul-top3Image")
//     if (imageClose.style.display == "inline") {
//         setTimeout(out, 260);
//         imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             imageClose.style.display = "none"
//         }
//     }
//     let colorClose = document.getElementById("ul-top3Color")
//     if (colorClose.style.display == "inline") {
//         setTimeout(out, 260);
//         colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             colorClose.style.display = "none"
//         }
//    }
//     let profilClose = document.getElementById("ul-top3DP")
//     if (profilClose.style.display == "inline") {
//         setTimeout(out, 260);
//         profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             profilClose.style.display = "none"
//         }
//     }
//     let userClose = document.getElementById("ul-top3DU")
//     if (userClose.style.display == "inline") {
//        setTimeout(out, 260);
//        userClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             userClose.style.display = "none"
//        }
//     }
//     let blur2Close = document.getElementById("blur2")
//     if (blur2Close.style.filter == "blur(8px)") {
//         setTimeout(out, 260);
//         blur2Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur2Close.style.filter = "none"
//        }
//     }

//     let blur3Close = document.getElementById("blur3")
//     if (blur3Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur3Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur3Close.style.filter = "none"
//        }
//     }

//     let blur4Close = document.getElementById("blur4")
//     if (blur4Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur4Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur4Close.style.filter = "none"
//        }
//     }

//     let blur5Close = document.getElementById("blur5")
//     if (blur5Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur5Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur5Close.style.filter = "none"
//        }
//     }

//     let x = document.getElementById("Nav2A");
//     if (x.style.display == "flex") {
//         setTimeout(out, 400);
//         x.style.animation = "buttonNav2R 400ms ease forwards"
//         function out() {
//             x.style.display = "none";
//         }
//     }
// }



// function HomeR() {

//     let nav = document.getElementById("Nav")
//     let navX = document.getElementById("NavX")
//     if (navX.style.display == "flex") {
//         setTimeout(out, 500);
//         navX.style.animation = "navXR 500ms ease forwards"
//         nav.style.animation = "navR 500ms ease forwards"
//         function out() {
//             navX.style.display = "none"
//             nav.style.transform == "translateY(0%)"
//         }
//     }

//    // Pembatas
//    let imageClose = document.getElementById("ul-top3Image")
//    if (imageClose.style.display == "inline") {
//       setTimeout(out, 260);
//       imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
//        function out() {
//            imageClose.style.display = "none"
//       }
//    }
//    let colorClose = document.getElementById("ul-top3Color")
//     if (colorClose.style.display == "inline") {
//         setTimeout(out, 260);
//         colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             colorClose.style.display = "none"
//         }
//     }
//     let profilClose = document.getElementById("ul-top3DP")
//     if (profilClose.style.display == "inline") {
//         setTimeout(out, 260);
//         profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             profilClose.style.display = "none"
//         }
//     }
//     let userClose = document.getElementById("ul-top3DU")
//     if (userClose.style.display == "inline") {
//         setTimeout(out, 260);
//         userClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             userClose.style.display = "none"
//        }
//     }

//     let header = document.getElementById("header")

//     let blur2Close = document.getElementById("blur2")
//     if (blur2Close.style.filter == "blur(8px)") {
//         setTimeout(out, 260);
//         blur2Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur2Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }

//     let blur3Close = document.getElementById("blur3")
//     if (blur3Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur3Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur3Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }

//     let blur4Close = document.getElementById("blur4")
//     if (blur4Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur4Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur4Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }

//     let blur5Close = document.getElementById("blur5")
//     if (blur5Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur5Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur5Close.style.filter = "none"
//             header.style.pointerEvents = "auto"
//        }
//     }

//     let x = document.getElementById("Nav2A");
//     if (x.style.display == "inline") {
//         setTimeout(out, 400);
//         x.style.animation = "buttonNav2R 400ms ease forwards"
//         function out() {
//             x.style.display = "none";
//         }
//     }
// }


// function Color() {

//     let user = document.getElementById("ul-top3DU")
//     let profil = document.getElementById("ul-top3DP")
//     let image = document.getElementById("ul-top3Image")
//     if (user.style.display == "none") {
//         if (profil.style.display == "none") {
//             if (image.style.display == "none") {
//                 let nav = document.getElementById("Nav")
//                 let navX = document.getElementById("NavX")
//                 if (navX.style.display == "none") {
//                     navX.style.animation = "navX 600ms ease forwards"
//                     nav.style.animation = "nav 600ms ease forwards"
//                     navX.style.display = "flex"
//                     nav.style.transform == "translateY(-500%)"
//                 } else {
//                     navX.style.animation = "navXR 500ms ease forwards"
//                     nav.style.animation = "navR 500ms ease forwards"
//                     setTimeout(out, 500);
//                     function out() {
//                         navX.style.display = "none"
//                         nav.style.transform == "translateY(0%)"
//                     }
//                 }
//             }
//         }
//     }

//     // News
//     let color = document.getElementById("ul-top3Color")
//     if (color.style.display == "none") {
//         color.style.animation = "ul-top3W 600ms ease forwards";
//         color.style.display = "inline"
//     }
//     else {
//         setTimeout(out, 500);
//         color.style.animation = "ul-top3WR 500ms ease forwards"
//         function out() {
//             color.style.display = "none"
//         }
//     }

//     let blur4 = document.getElementById("blur4")
//     if (blur4.style.filter == "none") {
//         blur4.style.animation = "blur 600ms ease forwards";
//         blur4.style.filter = "blur(5px)"
//     }
//     else {
//         setTimeout(out, 500);
//         blur4.style.animation = "blurR 500ms ease forwards"
//         function out() {
//             blur4.style.filter = "none"
//         }
//     }

//     // Pembatas
//     let imageClose = document.getElementById("ul-top3Image")
//     if (imageClose.style.display == "inline") {
//        setTimeout(out, 260);
//        imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             imageClose.style.display = "none"
//        }
//     }
//     let userClose = document.getElementById("ul-top3DU")
//     if (userClose.style.display == "inline") {
//        setTimeout(out, 260);
//        userClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             userClose.style.display = "none"
//        }
//     }
//     let chatClose = document.getElementById("ul-top3C")
//     if (chatClose.style.display == "inline") {
//         setTimeout(out, 260);
//         chatClose.style.animation = "ul-top3CR 260ms ease forwards"
//         function out() {
//             chatClose.style.display = "none"
//         }
//     }
//     let profilClose = document.getElementById("ul-top3DP")
//     if (profilClose.style.display == "inline") {
//         setTimeout(out, 260);
//         profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             profilClose.style.display = "none"
//         }
//     }
//     let blur2Close = document.getElementById("blur2")
//     if (blur2Close.style.filter == "blur(8px)") {
//         setTimeout(out, 260);
//         blur2Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur2Close.style.filter = "none"
//        }
//     }
//     let blur3Close = document.getElementById("blur3")
//     if (blur3Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur3Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur3Close.style.filter = "none"
//        }
//     }
//     let blur5Close = document.getElementById("blur5")
//     if (blur5Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur5Close.style.animation = "blurR 260ms ease forwards"
//         function out() {
//             blur5Close.style.filter = "none"
//        }
//     }

//     let x = document.getElementById("Nav2A");
//     if (x.style.display == "inline") {
//         setTimeout(out, 400);
//         x.style.animation = "buttonNav2R 400ms ease forwards"
//         function out() {
//             x.style.display = "none";
//         }
//     }
// }

// function Image() {

//     let user = document.getElementById("ul-top3DU")
//     let profil = document.getElementById("ul-top3DP")
//     let image = document.getElementById("ul-top3Image")
//     if (user.style.display == "none") {
//         if (profil.style.display == "none") {
//             if (image.style.display == "none") {
//                 let nav = document.getElementById("Nav")
//                 let navX = document.getElementById("NavX")
//                 if (navX.style.display == "none") {
//                     navX.style.animation = "navX 600ms ease forwards"
//                     nav.style.animation = "nav 600ms ease forwards"
//                     navX.style.display = "flex"
//                     nav.style.transform == "translateY(-500%)"
//                 } else {
//                     navX.style.animation = "navXR 500ms ease forwards"
//                     nav.style.animation = "navR 500ms ease forwards"
//                     setTimeout(out, 500);
//                     function out() {
//                         navX.style.display = "none"
//                         nav.style.transform == "translateY(0%)"
//                     }
//                 }
//             }
//         }
//     }

//     // News
//     if (image.style.display == "none") {
//         image.style.animation = "ul-top3W 600ms ease forwards";
//         image.style.display = "inline"
//     }
//     else {
//         setTimeout(out, 500);
//         image.style.animation = "ul-top3WR 500ms ease forwards"
//         function out() {
//             image.style.display = "none"
//         }
//     }

//     let blur5 = document.getElementById("blur5")
//     if (blur5.style.filter == "none") {
//         blur5.style.animation = "blur 600ms ease forwards";
//         blur5.style.filter = "blur(5px)"
//     }
//     else {
//         setTimeout(out, 500);
//         blur5.style.animation = "blurR 500ms ease forwards"
//         function out() {
//             blur5.style.filter = "none"
//         }
//     }

//     // Pembatas
//     let userClose = document.getElementById("ul-top3DU")
//     if (userClose.style.display == "inline") {
//        setTimeout(out, 260);
//        userClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             userClose.style.display = "none"
//        }
//     }
//     let chatClose = document.getElementById("ul-top3C")
//     if (chatClose.style.display == "inline") {
//         setTimeout(out, 260);
//         chatClose.style.animation = "ul-top3CR 260ms ease forwards"
//         function out() {
//             chatClose.style.display = "none"
//         }
//     }
//     let profilClose = document.getElementById("ul-top3DP")
//     if (profilClose.style.display == "inline") {
//         setTimeout(out, 260);
//         profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
//         function out() {
//             profilClose.style.display = "none"
//         }
//     }
//     let blur2Close = document.getElementById("blur2")
//     if (blur2Close.style.filter == "blur(8px)") {
//         setTimeout(out, 260);
//         blur2Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur2Close.style.filter = "none"
//        }
//     }
//     let blur3Close = document.getElementById("blur3")
//     if (blur3Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur3Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur3Close.style.filter = "none"
//        }
//     }
//     let blur4Close = document.getElementById("blur4")
//     if (blur4Close.style.filter == "blur(5px)") {
//         setTimeout(out, 260);
//         blur4Close.style.animation = "blur2R 260ms ease forwards"
//         function out() {
//             blur4Close.style.filter = "none"
//        }
//     }

//     let x = document.getElementById("Nav2A");
//     if (x.style.display == "inline") {
//         setTimeout(out, 400);
//         x.style.animation = "buttonNav2R 400ms ease forwards"
//         function out() {
//             x.style.display = "none";
//         }
//     }
// }



// let home = document.getElementById("home")

// function Webkit() {
//     if (home.style.width == "calc(100% + 20px)") {
//         home.style.width = "100%";
//         localStorage.setItem("lebarWeb", "100%");
//     } else {
//         home.style.width = "calc(100% + 20px)";
//         localStorage.setItem("lebarWeb", "100% + 20px");
//     }
// }


// if (localStorage) {
//     lebarWeb = localStorage.getItem("lebarWeb")
// }
// if (lebarWeb == "100% + 20px") {
//     home.style.width = "calc(100% + 20px)";
// } else if (lebarWeb == "100%") {
//     home.style.width = "100%";
// }


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

        
    let nav = document.getElementById("Nav")
    let navX = document.getElementById("NavX")
        if (navX.style.display == "flex") {
            navX.style.display = "none"
            nav.style.animation = "navR 500ms ease forwards"
        }
        else if (navX.style.display == "none"){
            navX.style.display = "none"
        }

    // Pembatas
    let imageClose = document.getElementById("ul-top3Image")
    if (imageClose.style.display == "inline") {
       setTimeout(out, 260);
       imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            imageClose.style.display = "none"
       }
    }
    let colorClose = document.getElementById("ul-top3Color")
    if (colorClose.style.display == "inline") {
       setTimeout(out, 260);
       colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            colorClose.style.display = "none"
       }
    }
    let chatClose = document.getElementById("ul-top3C")
    if (chatClose.style.display == "inline") {
        setTimeout(out, 260);
        chatClose.style.animation = "ul-top3CR 260ms ease forwards"
        function out() {
            chatClose.style.display = "none"
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
    let profilClose = document.getElementById("ul-top3DP")
    if (profilClose.style.display == "inline") {
        setTimeout(out, 260);
        profilClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            profilClose.style.display = "none"
        }
    }
    
    let header = document.getElementById("header")

    // let blur2Close = document.getElementById("blur2")
    // if (blur2Close.style.filter == "blur(8px)") {
    //     setTimeout(out, 260);
    //     blur2Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur2Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }

    // let blur3Close = document.getElementById("blur3")
    // if (blur3Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur3Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur3Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }

    // let blur4Close = document.getElementById("blur4")
    // if (blur4Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur4Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur4Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }

    // let blur5Close = document.getElementById("blur5")
    // if (blur5Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur5Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur5Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }
}

function DataUser() {

    let profil = document.getElementById("ul-top3DP")
    let color = document.getElementById("ul-top3Color")
    let image = document.getElementById("ul-top3Image")
    if (profil.style.display == "none") {
        if (color.style.display == "none") {
            if (image.style.display == "none") {
                let nav = document.getElementById("Nav")
                let navX = document.getElementById("NavX")
                if (navX.style.display == "none") {
                    navX.style.animation = "navX 600ms ease forwards"
                    nav.style.animation = "nav 600ms ease forwards"
                    navX.style.display = "flex"
                    nav.style.display == "translateY(-100vh)"
                } else {
                    navX.style.animation = "navXR 500ms ease forwards"
                    nav.style.animation = "navR 500ms ease forwards"
                    setTimeout(out, 500);
                    function out() {
                        navX.style.display = "none"
                        nav.style.transform == "translateY(0%)"
                    }
                }
            }
        }
    }

    // News
    let user = document.getElementById("ul-top3DU")
    if (user.style.display == "none") {
        user.style.animation = "ul-top3W 600ms ease forwards";
        user.style.display = "inline"
    }
    else {
        setTimeout(out, 500);
        user.style.animation = "ul-top3WR 500ms ease forwards"
        function out() {
            user.style.display = "none"
        }
    }

    
    // let blur3 = document.getElementById("blur3")
    // let header = document.getElementById("header")
    // if (blur3.style.filter == "none") {
    //     blur3.style.animation = "blur 600ms ease forwards";
    //     blur3.style.filter = "blur(5px)"
    //     header.style.pointerEvents = "none"
    // }
    // else {
    //     setTimeout(out, 500);
    //     blur3.style.animation = "blurR 500ms ease forwards"
    //     function out() {
    //         blur3.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //     }
    // }

    // Pembatas
    let imageClose = document.getElementById("ul-top3Image")
    if (imageClose.style.display == "inline") {
       setTimeout(out, 260);
       imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            imageClose.style.display = "none"
       }
    }
    let colorClose = document.getElementById("ul-top3Color")
    if (colorClose.style.display == "inline") {
        setTimeout(out, 260);
        colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            colorClose.style.display = "none"
        }
    }
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
    // let blur2Close = document.getElementById("blur2")
    // if (blur2Close.style.filter == "blur(8px)") {
    //     setTimeout(out, 260);
    //     blur2Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur2Close.style.filter = "none"
    //    }
    // }

    // let blur4Close = document.getElementById("blur4")
    // if (blur4Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur4Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur4Close.style.filter = "none"
    //    }
    // }
    // if (blur4Close.style.pointerEvents == "none") {
    //     setTimeout(out, 260);
    //     function out() {
    //         blur4Close.style.pointerEvents = "auto"
    //     }
    // }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "flex") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}



function Profil() {

    let user = document.getElementById("ul-top3DU")
    let color = document.getElementById("ul-top3Color")
    let image = document.getElementById("ul-top3Image")
    if (user.style.display == "none") {
        if (color.style.display == "none") {
            if (image.style.display == "none") {
                let nav = document.getElementById("Nav")
                let navX = document.getElementById("NavX")
                if (navX.style.display == "none") {
                    navX.style.animation = "navX 600ms ease forwards"
                    nav.style.animation = "nav 600ms ease forwards"
                    navX.style.display = "flex"
                    nav.style.transform == "translateY(-100vh)"
                } else {
                    navX.style.animation = "navXR 500ms ease forwards"
                    nav.style.animation = "navR 500ms ease forwards"
                    setTimeout(out, 500);
                    function out() {
                        navX.style.display = "none"
                        nav.style.transform == "translateY(0%)"
                    }
                }
            }
        }
    }


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

    // let blur2 = document.getElementById("blur2")
    // let header = document.getElementById("header")
    // if (blur2.style.filter == "none") {
    //     blur2.style.animation = "blur2 600ms ease forwards";
    //     blur2.style.filter = "blur(8px)"
    //     header.style.pointerEvents = "none"
    // }
    // else {
    //     setTimeout(out, 500);
    //     blur2.style.animation = "blur2R 500ms ease forwards"
    //     function out() {
    //         blur2.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //     }
    // }


    // Pembatas
    let imageClose = document.getElementById("ul-top3Image")
    if (imageClose.style.display == "inline") {
       setTimeout(out, 260);
       imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            imageClose.style.display = "none"
       }
    }
    let colorClose = document.getElementById("ul-top3Color")
    if (colorClose.style.display == "inline") {
       setTimeout(out, 260);
       colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            colorClose.style.display = "none"
       }
    }
    let chatClose = document.getElementById("ul-top3C")
    if (chatClose.style.display == "inline") {
        setTimeout(out, 260);
        chatClose.style.animation = "ul-top3CR 260ms ease forwards"
        function out() {
            chatClose.style.display = "none"
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

    // let blur3Close = document.getElementById("blur3")
    // if (blur3Close.style.filter == "blur(5px)") {
    //    setTimeout(out, 260);
    //    blur3Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur3Close.style.filter = "none"
    //    }
    // }
    // let blur4Close = document.getElementById("blur4")
    // if (blur4Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur4Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur4Close.style.filter = "none"
    //    }
    // }
    // let blur5Close = document.getElementById("blur5")
    // if (blur5Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur5Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur5Close.style.filter = "none"
    //    }
    // }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "flex") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}



function Chat() {

    let nav = document.getElementById("Nav")
    let navX = document.getElementById("NavX")
    if (navX.style.display == "flex") {
        setTimeout(out, 500);
        navX.style.animation = "navXR 500ms ease forwards"
        nav.style.animation = "navR 500ms ease forwards"
        function out() {
            navX.style.display = "none"
            nav.style.transform == "translateY(0%)"
        }
    }
    
    // Chat
    let chat = document.getElementById("ul-top3C")
    if (chat.style.display == "none") {
        chat.style.animation = "ul-top3C 450ms ease forwards";
        chat.style.display = "inline"
        const scrollElement = document.querySelector(".scroll-body");
        scrollElement.scrollTop += 999999999999;
    }
    else {
        setTimeout(out, 350);
        chat.style.animation = "ul-top3CR 350ms ease forwards"
        function out() {
            chat.style.display = "none"
        }
    }

   // Pembatas

    let header = document.getElementById("header")
    header.style.pointerEvents = "auto";

    let imageClose = document.getElementById("ul-top3Image")
    if (imageClose.style.display == "inline") {
        setTimeout(out, 260);
        imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            imageClose.style.display = "none"
        }
    }
    let colorClose = document.getElementById("ul-top3Color")
    if (colorClose.style.display == "inline") {
        setTimeout(out, 260);
        colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            colorClose.style.display = "none"
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
    // let blur2Close = document.getElementById("blur2")
    // if (blur2Close.style.filter == "blur(8px)") {
    //     setTimeout(out, 260);
    //     blur2Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur2Close.style.filter = "none"
    //    }
    // }

    // let blur3Close = document.getElementById("blur3")
    // if (blur3Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur3Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur3Close.style.filter = "none"
    //    }
    // }

    // let blur4Close = document.getElementById("blur4")
    // if (blur4Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur4Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur4Close.style.filter = "none"
    //    }
    // }

    // let blur5Close = document.getElementById("blur5")
    // if (blur5Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur5Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur5Close.style.filter = "none"
    //    }
    // }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "flex") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}



function HomeR() {

    let nav = document.getElementById("Nav")
    let navX = document.getElementById("NavX")
    if (navX.style.display == "flex") {
        setTimeout(out, 500);
        navX.style.animation = "navXR 500ms ease forwards"
        nav.style.animation = "navR 500ms ease forwards"
        function out() {
            navX.style.display = "none"
            nav.style.transform == "translateY(0%)"
        }
    }

   // Pembatas
   let imageClose = document.getElementById("ul-top3Image")
   if (imageClose.style.display == "inline") {
      setTimeout(out, 260);
      imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
       function out() {
           imageClose.style.display = "none"
      }
   }
   let colorClose = document.getElementById("ul-top3Color")
    if (colorClose.style.display == "inline") {
        setTimeout(out, 260);
        colorClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            colorClose.style.display = "none"
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

    let header = document.getElementById("header")

    // let blur2Close = document.getElementById("blur2")
    // if (blur2Close.style.filter == "blur(8px)") {
    //     setTimeout(out, 260);
    //     blur2Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur2Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }

    // let blur3Close = document.getElementById("blur3")
    // if (blur3Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur3Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur3Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }

    // let blur4Close = document.getElementById("blur4")
    // if (blur4Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur4Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur4Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }

    // let blur5Close = document.getElementById("blur5")
    // if (blur5Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur5Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur5Close.style.filter = "none"
    //         header.style.pointerEvents = "auto"
    //    }
    // }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "inline") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}


function Color() {

    let user = document.getElementById("ul-top3DU")
    let profil = document.getElementById("ul-top3DP")
    let image = document.getElementById("ul-top3Image")
    if (user.style.display == "none") {
        if (profil.style.display == "none") {
            if (image.style.display == "none") {
                let nav = document.getElementById("Nav")
                let navX = document.getElementById("NavX")
                if (navX.style.display == "none") {
                    navX.style.animation = "navX 600ms ease forwards"
                    nav.style.animation = "nav 600ms ease forwards"
                    navX.style.display = "flex"
                    nav.style.transform == "translateY(-500%)"
                } else {
                    navX.style.animation = "navXR 500ms ease forwards"
                    nav.style.animation = "navR 500ms ease forwards"
                    setTimeout(out, 500);
                    function out() {
                        navX.style.display = "none"
                        nav.style.transform == "translateY(0%)"
                    }
                }
            }
        }
    }

    // News
    let color = document.getElementById("ul-top3Color")
    if (color.style.display == "none") {
        color.style.animation = "ul-top3W 600ms ease forwards";
        color.style.display = "inline"
    }
    else {
        setTimeout(out, 500);
        color.style.animation = "ul-top3WR 500ms ease forwards"
        function out() {
            color.style.display = "none"
        }
    }

    // let blur4 = document.getElementById("blur4")
    // if (blur4.style.filter == "none") {
    //     blur4.style.animation = "blur 600ms ease forwards";
    //     blur4.style.filter = "blur(5px)"
    // }
    // else {
    //     setTimeout(out, 500);
    //     blur4.style.animation = "blurR 500ms ease forwards"
    //     function out() {
    //         blur4.style.filter = "none"
    //     }
    // }

    // Pembatas
    let imageClose = document.getElementById("ul-top3Image")
    if (imageClose.style.display == "inline") {
       setTimeout(out, 260);
       imageClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            imageClose.style.display = "none"
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
    // let blur2Close = document.getElementById("blur2")
    // if (blur2Close.style.filter == "blur(8px)") {
    //     setTimeout(out, 260);
    //     blur2Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur2Close.style.filter = "none"
    //    }
    // }
    // let blur3Close = document.getElementById("blur3")
    // if (blur3Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur3Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur3Close.style.filter = "none"
    //    }
    // }
    // let blur5Close = document.getElementById("blur5")
    // if (blur5Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur5Close.style.animation = "blurR 260ms ease forwards"
    //     function out() {
    //         blur5Close.style.filter = "none"
    //    }
    // }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "inline") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}

function Image() {

    let user = document.getElementById("ul-top3DU")
    let profil = document.getElementById("ul-top3DP")
    let image = document.getElementById("ul-top3Image")
    if (user.style.display == "none") {
        if (profil.style.display == "none") {
            if (image.style.display == "none") {
                let nav = document.getElementById("Nav")
                let navX = document.getElementById("NavX")
                if (navX.style.display == "none") {
                    navX.style.animation = "navX 600ms ease forwards"
                    nav.style.animation = "nav 600ms ease forwards"
                    navX.style.display = "flex"
                    nav.style.transform == "translateY(-500%)"
                } else {
                    navX.style.animation = "navXR 500ms ease forwards"
                    nav.style.animation = "navR 500ms ease forwards"
                    setTimeout(out, 500);
                    function out() {
                        navX.style.display = "none"
                        nav.style.transform == "translateY(0%)"
                    }
                }
            }
        }
    }

    // News
    if (image.style.display == "none") {
        image.style.animation = "ul-top3W 600ms ease forwards";
        image.style.display = "inline"
    }
    else {
        setTimeout(out, 500);
        image.style.animation = "ul-top3WR 500ms ease forwards"
        function out() {
            image.style.display = "none"
        }
    }

    // let blur5 = document.getElementById("blur5")
    // if (blur5.style.filter == "none") {
    //     blur5.style.animation = "blur 600ms ease forwards";
    //     blur5.style.filter = "blur(5px)"
    // }
    // else {
    //     setTimeout(out, 500);
    //     blur5.style.animation = "blurR 500ms ease forwards"
    //     function out() {
    //         blur5.style.filter = "none"
    //     }
    // }

    // Pembatas
    let userClose = document.getElementById("ul-top3DU")
    if (userClose.style.display == "inline") {
       setTimeout(out, 260);
       userClose.style.animation = "ul-top3WR2 460ms ease forwards"
        function out() {
            userClose.style.display = "none"
       }
    }
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
    // let blur2Close = document.getElementById("blur2")
    // if (blur2Close.style.filter == "blur(8px)") {
    //     setTimeout(out, 260);
    //     blur2Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur2Close.style.filter = "none"
    //    }
    // }
    // let blur3Close = document.getElementById("blur3")
    // if (blur3Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur3Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur3Close.style.filter = "none"
    //    }
    // }
    // let blur4Close = document.getElementById("blur4")
    // if (blur4Close.style.filter == "blur(5px)") {
    //     setTimeout(out, 260);
    //     blur4Close.style.animation = "blur2R 260ms ease forwards"
    //     function out() {
    //         blur4Close.style.filter = "none"
    //    }
    // }

    let x = document.getElementById("Nav2A");
    if (x.style.display == "inline") {
        setTimeout(out, 400);
        x.style.animation = "buttonNav2R 400ms ease forwards"
        function out() {
            x.style.display = "none";
        }
    }
}



let home = document.getElementById("home")

function Webkit() {
    if (home.style.width == "var(--widthPC1)") {
        home.style.width = "var(--widthPC2)";
        localStorage.setItem("lebarWeb", "widthPC2");
    } else {
        home.style.width = "var(--widthPC1)";
        localStorage.setItem("lebarWeb", "widthPC1");
    }
}


if (localStorage) {
    lebarWeb = localStorage.getItem("lebarWeb")
}
if (lebarWeb == "widthPC2") {
    home.style.width = "var(--widthPC2)";
} else if (lebarWeb == "widthPC1") {
    home.style.width = "var(--widthPC1)";
}




document.addEventListener("DOMContentLoaded", function () {
    const pictureDivUtama = document.getElementById("pictureDivUtama");
    const nextButton = document.getElementById("nextButton");
    const prevButton = document.getElementById("prevButton");
    let currentPosition = 0;

    const imageWidth = pictureDivUtama.clientWidth; // Lebar gambar

    nextButton.addEventListener("click", function () {
        currentPosition -= imageWidth;
        if (currentPosition <= -2 * imageWidth) {
            currentPosition = 0;
        }
        updatePosition();
    });

    prevButton.addEventListener("click", function () {
        currentPosition += imageWidth;
        if (currentPosition > 0) {
            currentPosition = -2 * imageWidth;
        }
        updatePosition();
    });

    function updatePosition() {
        pictureDivUtama.style.transform = `translateX(${currentPosition}px)`;
    }
});


if (nilai > 70) {
    console.log("Lulus");
} else {
    console.log("Tidak Lulus");
}