document.getElementById("buttonRegistrasiLogout").onmouseover = function() {menuMouseOverRegistrasiLo()};
document.getElementById("buttonRegistrasiLogout").onmouseout = function() {menuMouseOutRegistrasiLo()};

function menuMouseOverRegistrasiLo() {
    let x = document.getElementById("textRegistrasi");
        if (x.style.animation == "textRegistrasi 500ms ease forwards") {
            }
        else {
            x.style.animation = "textRegistrasi 500ms ease forwards";
        }
    let y = document.getElementById("textLogin");
        if (y.style.animation == "textLogin 500ms ease forwards") {
            }
        else {
            y.style.animation = "textLogin 500ms ease forwards";
        }
}
function menuMouseOutRegistrasiLo() {
    let x = document.getElementById("textRegistrasi");
        if (x.style.animation == "textRegistrasiR 420ms ease forwards") {
            }
        else {
            x.style.animation = "textRegistrasiR 420ms ease forwards";
        }
    let y = document.getElementById("textLogin");
        if (y.style.animation == "textLoginR 420ms ease forwards") {
            }
        else {
            y.style.animation = "textLoginR 420ms ease forwards";
        }
}

document.getElementById("More").onmouseover = function() {MoreOver()};
document.getElementById("More").onmouseout = function() {MoreOut()};

function MoreOver() {
    let x = document.getElementById("iconM");
        if (x.style.animation == "RotateIcon 0.46s ease forwards") {
            }
        else {
            x.style.animation = "RotateIcon 0.46s ease forwards";
        }
}
function MoreOut() {
    let x = document.getElementById("iconM");
        if (x.style.animation == "RotateIconR 0.56s ease forwards") {
            }
        else {
            x.style.animation = "RotateIconR 0.56s ease forwards";
        }
}

let more = document.getElementById("More")
let WA = document.getElementById("inputWhatsApp")
let IG = document.getElementById("inputInstagram")
let FB = document.getElementById("inputFacebook")
let Admin = document.getElementById("inputAdminID")

function More() {
    more.style.display = "none";
    WA.style.display = "inline";
    IG.style.display = "inline";
    FB.style.display = "inline";
    Admin.style.display = "inline";
}