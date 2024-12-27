document.getElementById("PictureKomentar").onmouseover = function() {PictureKomentarOver()};
document.getElementById("PictureKomentar").onmouseout = function() {PictureKomentarOut()};

function PictureKomentarOver() {
    let x = document.getElementById("iconPicKomen");
        if (x.style.animation == "RotateIcon 0.46s ease forwards") {
            }
        else {
            x.style.animation = "RotateIcon 0.46s ease forwards";
        }
}
function PictureKomentarOut() {
    let x = document.getElementById("iconPicKomen");
        if (x.style.animation == "RotateIconR 0.56s ease forwards") {
            }
        else {
            x.style.animation = "RotateIconR 0.56s ease forwards";
        }
}

let x = document.getElementById("PKomentar");
let x2 = document.getElementById("PKomentarX");
let y = document.getElementById("PictureKomentar");
let z = document.getElementById("deletePKomentar");
let preview = document.getElementById("picturePreview");

function pictureKomentar() {
    x.style.display = "inline"
    y.style.display = "none"
    z.style.display = "inline"
}

function deletePicKomentar() {
    x.value = "";
    x2.value = "";

    x.style.display = "none"
    y.style.display = "inline"
    z.style.display = "none"
    preview.style.display = "none"
}

x.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(x.files[0]);
    console.log(x.files[0]);
    reader.onload = () => {
        preview.setAttribute("src", reader.result);
        preview.style.display = "inline";
    }
}