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

function Menu() {
    let x = document.getElementById("Nav2");
        if (x.style.display == "inline") {
            setTimeout(out, 240);
            x.style.animation = "ul-topA2R 240ms ease forwards"
            function out() {
                x.style.display = "none";
            }
        } 
        else {
            x.style.animation = "ul-topA2 240ms ease forwards";
            x.style.display = "inline";
        }
}