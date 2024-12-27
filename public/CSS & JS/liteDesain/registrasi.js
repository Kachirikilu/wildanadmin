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