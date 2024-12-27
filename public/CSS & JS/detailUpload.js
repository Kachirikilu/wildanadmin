let inputFile = document.getElementById("inputGambar");

let preview = document.getElementById("komentarPicture");
let previewDIV = document.getElementById("divKomentarPicture");

let previewLite = document.getElementById("komentarPictureLite");
let previewDIVLite = document.getElementById("divKomentarPictureLite");

let inputX = document.getElementById("inputKomentarSecond")

inputFile.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile.files[0]);
    console.log(inputFile.files[0]);
    reader.onload = () => {
        preview.setAttribute("src", reader.result);
        previewDIV.style.display = "flex";
        previewDIV.style.animation = "gambarKomentar 0.32s ease forwards";
        previewLite.setAttribute("src", reader.result);
        previewDIVLite.style.display = "flex";
        previewDIVLite.style.animation = "gambarKomentar 0.32s ease forwards";
        inputX.value = "TRIGGER"
    }
}

document.getElementById("putaranXKomentar").onmouseover = function() {PictureKomenOver()};
document.getElementById("putaranXKomentar").onmouseout = function() {PictureKomenOut()};
document.getElementById("putaranXKomentarLite").onmouseover = function() {PictureKomenOverL()};
document.getElementById("putaranXKomentarLite").onmouseout = function() {PictureKomenOutL()};

function PictureKomenOver() {
    let x = document.getElementById("putaranXKomentar");
        if (x.style.animation == "RotateIcon 0.46s ease forwards") {
            }
        else {
            x.style.animation = "RotateIcon 0.46s ease forwards";
        }
}
function PictureKomenOut() {
    let x = document.getElementById("putaranXKomentar");
        if (x.style.animation == "RotateIconR 0.56s ease forwards") {
            }
        else {
            x.style.animation = "RotateIconR 0.56s ease forwards";
        }
}
function PictureKomenOverL() {
    let x = document.getElementById("putaranXKomentarLite");
        if (x.style.animation == "RotateIcon 0.46s ease forwards") {
            }
        else {
            x.style.animation = "RotateIcon 0.46s ease forwards";
        }
}
function PictureKomenOutL() {
    let x = document.getElementById("putaranXKomentarLite");
        if (x.style.animation == "RotateIconR 0.56s ease forwards") {
            }
        else {
            x.style.animation = "RotateIconR 0.56s ease forwards";
        }
}


function closePicKomen() {
    inputFile.value = "";
    inputX.value = "";
    previewDIV.style.animation = "gambarKomentarR 0.28s ease forwards"
    setTimeout(out, 820);
    function out() {
        previewDIV.style.display = "none";
    }
    previewDIVLite.style.display = "none";
}
function closePicKomenLite() {
    inputFile.value = "";
    inputX.value = "";
    previewDIVLite.style.animation = "gambarKomentarR 0.28s ease forwards"
    setTimeout(out, 820);
    function out() {
        previewDIVLite.style.display = "none";
    }
    previewDIV.style.display = "none";
}