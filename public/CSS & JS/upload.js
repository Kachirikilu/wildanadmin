let inputFile = document.getElementById("inputPicture");
let preview = document.getElementById("picturePreview");

inputFile.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile.files[0]);
    console.log(inputFile.files[0]);
    reader.onload = () => {
        preview.setAttribute("src", reader.result);
        preview.style.display = "inline";
    }
}

let inputFile1 = document.getElementById("inputP1");
let preview1 = document.getElementById("picturePreviewP1");
let deleteP1 = document.getElementById("deleteP1");

inputFile1.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile1.files[0]);
    console.log(inputFile1.files[0]);
    reader.onload = () => {
        preview1.setAttribute("src", reader.result);
        preview1.style.display = "inline";
        deleteP1.style.display = "inline";
    }
}
const display1 = (a) => {
    if (a == "clear") {
        inputFile1.value = "";
        preview1.style.display = "none";
        deleteP1.style.display = "none"
    }
};
let result1 = document.getElementById("P1");
let resultX1 = document.getElementById("P1X");
const display1X = (a) => {
    if (a == "clear") {
        inputFile1.value = "";
        result1.value = "";
        resultX1.value = "";
        preview1.style.display = "none";
        deleteP1.style.display = "none"
    }
};

let inputFile2 = document.getElementById("inputP2");
let preview2 = document.getElementById("picturePreviewP2");
let deleteP2 = document.getElementById("deleteP2");

inputFile2.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile2.files[0]);
    console.log(inputFile2.files[0]);
    reader.onload = () => {
        preview2.setAttribute("src", reader.result);
        preview2.style.display = "inline";
        deleteP2.style.display = "inline";
    }
}
const display2 = (a) => {
    if (a == "clear") {
        inputFile2.value = "";
        preview2.style.display = "none";
        deleteP2.style.display = "none"
    }
};
let result2 = document.getElementById("P2");
let resultX2 = document.getElementById("P2X");
const display2X = (a) => {
    if (a == "clear") {
        inputFile2.value = "";
        result2.value = "";
        resultX2.value = "";
        preview2.style.display = "none";
        deleteP2.style.display = "none"
    }
};

let inputFile3 = document.getElementById("inputP3");
let preview3 = document.getElementById("picturePreviewP3");
let deleteP3 = document.getElementById("deleteP3");

inputFile3.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile3.files[0]);
    console.log(inputFile3.files[0]);
    reader.onload = () => {
        preview3.setAttribute("src", reader.result);
        preview3.style.display = "inline";
        deleteP3.style.display = "inline";
    }
}
const display3 = (a) => {
    if (a == "clear") {
        inputFile3.value = "";
        preview3.style.display = "none";
        deleteP3.style.display = "none"
    }
};
let result3 = document.getElementById("P3");
let resultX3 = document.getElementById("P3X");
const display3X = (a) => {
    if (a == "clear") {
        inputFile3.value = "";
        result3.value = "";
        resultX3.value = "";
        preview3.style.display = "none";
        deleteP3.style.display = "none"
    }
};

let inputFile4 = document.getElementById("inputP4");
let preview4 = document.getElementById("picturePreviewP4");
let deleteP4 = document.getElementById("deleteP4");

inputFile4.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile4.files[0]);
    console.log(inputFile4.files[0]);
    reader.onload = () => {
        preview4.setAttribute("src", reader.result);
        preview4.style.display = "inline";
        deleteP4.style.display = "inline";
    }
}
const display4 = (a) => {
    if (a == "clear") {
        inputFile4.value = "";
        preview4.style.display = "none";
        deleteP4.style.display = "none"
    }
};
let result4 = document.getElementById("P4");
let resultX4 = document.getElementById("P4X");
const display4X = (a) => {
    if (a == "clear") {
        inputFile4.value = "";
        result4.value = "";
        resultX4.value = "";
        preview4.style.display = "none";
        deleteP4.style.display = "none"
    }
};

let inputFile5 = document.getElementById("inputP5");
let preview5 = document.getElementById("picturePreviewP5");
let deleteP5 = document.getElementById("deleteP5");

inputFile5.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile5.files[0]);
    console.log(inputFile5.files[0]);
    reader.onload = () => {
        preview5.setAttribute("src", reader.result);
        preview5.style.display = "inline";
        deleteP5.style.display = "inline";
    }
}
const display5 = (a) => {
    if (a == "clear") {
        inputFile5.value = "";
        preview5.style.display = "none";
        deleteP5.style.display = "none"
    }
};
let result5 = document.getElementById("P5");
let resultX5 = document.getElementById("P5X");
const display5X = (a) => {
    if (a == "clear") {
        inputFile5.value = "";
        result5.value = "";
        resultX5.value = "";
        preview5.style.display = "none";
        deleteP5.style.display = "none"
    }
};

let inputFile6 = document.getElementById("inputP6");
let preview6 = document.getElementById("picturePreviewP6");
let deleteP6 = document.getElementById("deleteP6");

inputFile6.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile6.files[0]);
    console.log(inputFile6.files[0]);
    reader.onload = () => {
        preview6.setAttribute("src", reader.result);
        preview6.style.display = "inline";
        deleteP6.style.display = "inline";
    }
}
const display6 = (a) => {
    if (a == "clear") {
        inputFile6.value = "";
        preview6.style.display = "none";
        deleteP6.style.display = "none"
    }
};
let result6 = document.getElementById("P6");
let resultX6 = document.getElementById("P6X");
const display6X = (a) => {
    if (a == "clear") {
        inputFile6.value = "";
        result6.value = "";
        resultX6.value = "";
        preview6.style.display = "none";
        deleteP6.style.display = "none"
    }
};

let inputFile7 = document.getElementById("inputP7");
let preview7 = document.getElementById("picturePreviewP7");
let deleteP7 = document.getElementById("deleteP7");

inputFile7.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile7.files[0]);
    console.log(inputFile7.files[0]);
    reader.onload = () => {
        preview7.setAttribute("src", reader.result);
        preview7.style.display = "inline";
        deleteP7.style.display = "inline";
    }
}
const display7 = (a) => {
    if (a == "clear") {
        inputFile7.value = "";
        preview7.style.display = "none";
        deleteP7.style.display = "none"
    }
};
let result7 = document.getElementById("P7");
let resultX7 = document.getElementById("P7X");
const display7X = (a) => {
    if (a == "clear") {
        inputFile7.value = "";
        result7.value = "";
        resultX7.value = "";
        preview7.style.display = "none";
        deleteP7.style.display = "none"
    }
};

let inputFile8 = document.getElementById("inputP8");
let preview8 = document.getElementById("picturePreviewP8");
let deleteP8 = document.getElementById("deleteP8");

inputFile8.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile8.files[0]);
    console.log(inputFile8.files[0]);
    reader.onload = () => {
        preview8.setAttribute("src", reader.result);
        preview8.style.display = "inline";
        deleteP8.style.display = "inline";
    }
}
const display8 = (a) => {
    if (a == "clear") {
        inputFile8.value = "";
        preview8.style.display = "none";
        deleteP8.style.display = "none"
    }
};
let result8 = document.getElementById("P8");
let resultX8 = document.getElementById("P8X");
const display8X = (a) => {
    if (a == "clear") {
        inputFile8.value = "";
        result8.value = "";
        resultX8.value = "";
        preview8.style.display = "none";
        deleteP8.style.display = "none"
    }
};

let inputFile9 = document.getElementById("inputP9");
let preview9 = document.getElementById("picturePreviewP9");
let deleteP9 = document.getElementById("deleteP9");

inputFile9.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile9.files[0]);
    console.log(inputFile9.files[0]);
    reader.onload = () => {
        preview9.setAttribute("src", reader.result);
        preview9.style.display = "inline";
        deleteP9.style.display = "inline";
    }
}
const display9 = (a) => {
    if (a == "clear") {
        inputFile9.value = "";
        preview9.style.display = "none";
        deleteP9.style.display = "none"
    }
};
let result9 = document.getElementById("P9");
let resultX9 = document.getElementById("P9X");
const display9X = (a) => {
    if (a == "clear") {
        inputFile9.value = "";
        result9.value = "";
        resultX9.value = "";
        preview9.style.display = "none";
        deleteP9.style.display = "none"
    }
};

let inputFile10 = document.getElementById("inputP10");
let preview10 = document.getElementById("picturePreviewP10");
let deleteP10 = document.getElementById("deleteP10");

inputFile10.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile10.files[0]);
    console.log(inputFile10.files[0]);
    reader.onload = () => {
        preview10.setAttribute("src", reader.result);
        preview10.style.display = "inline";
        deleteP10.style.display = "inline";
    }
}
const display10 = (a) => {
    if (a == "clear") {
        inputFile10.value = "";
        preview10.style.display = "none";
        deleteP10.style.display = "none"
    }
};
let result10 = document.getElementById("P10");
let resultX10 = document.getElementById("P10X");
const display10X = (a) => {
    if (a == "clear") {
        inputFile10.value = "";
        result10.value = "";
        resultX10.value = "";
        preview10.style.display = "none";
        deleteP10.style.display = "none"
    }
};

let inputFile11 = document.getElementById("inputP11");
let preview11 = document.getElementById("picturePreviewP11");
let deleteP11 = document.getElementById("deleteP11");

inputFile11.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile11.files[0]);
    console.log(inputFile11.files[0]);
    reader.onload = () => {
        preview11.setAttribute("src", reader.result);
        preview11.style.display = "inline";
        deleteP11.style.display = "inline";
    }
}
const display11 = (a) => {
    if (a == "clear") {
        inputFile11.value = "";
        preview11.style.display = "none";
        deleteP11.style.display = "none"
    }
};
let result11 = document.getElementById("P11");
let resultX11 = document.getElementById("P11X");
const display11X = (a) => {
    if (a == "clear") {
        inputFile11.value = "";
        result11.value = "";
        resultX11.value = "";
        preview11.style.display = "none";
        deleteP11.style.display = "none"
    }
};

let inputFile12 = document.getElementById("inputP12");
let preview12 = document.getElementById("picturePreviewP12");
let deleteP12 = document.getElementById("deleteP12");

inputFile12.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(inputFile12.files[0]);
    console.log(inputFile12.files[0]);
    reader.onload = () => {
        preview12.setAttribute("src", reader.result);
        preview12.style.display = "inline";
        deleteP12.style.display = "inline";
    }
}
const display12 = (a) => {
    if (a == "clear") {
        inputFile12.value = "";
        preview12.style.display = "none";
        deleteP12.style.display = "none"
    }
};
let result12 = document.getElementById("P12");
let resultX12 = document.getElementById("P12X");
const display12X = (a) => {
    if (a == "clear") {
        inputFile12.value = "";
        result12.value = "";
        resultX12.value = "";
        preview12.style.display = "none";
        deleteP12.style.display = "none"
    }
};