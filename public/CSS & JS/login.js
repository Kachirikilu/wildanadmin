document.getElementById("buttonLogoutRegistrasi").onmouseover = function() {menuMouseOverLogoutRe()};
document.getElementById("buttonLogoutRegistrasi").onmouseout = function() {menuMouseOutLogoutRe()};

function menuMouseOverLogoutRe() {
    let x = document.getElementById("textLogin");
        if (x.style.animation == "textLogin 500ms ease forwards") {
            }
        else {
            x.style.animation = "textLogin 500ms ease forwards";
        }
    let y = document.getElementById("textRegistrasi");
        if (y.style.animation == "textRegistrasi 500ms ease forwards") {
            }
        else {
            y.style.animation = "textRegistrasi 500ms ease forwards";
        }
}
function menuMouseOutLogoutRe() {
    let x = document.getElementById("textLogin");
        if (x.style.animation == "textLoginR 420ms ease forwards") {
            }
        else {
            x.style.animation = "textLoginR 420ms ease forwards";
        }
    let y = document.getElementById("textRegistrasi");
        if (y.style.animation == "textRegistrasiR 420ms ease forwards") {
            }
        else {
            y.style.animation = "textRegistrasiR 420ms ease forwards";
        }
}