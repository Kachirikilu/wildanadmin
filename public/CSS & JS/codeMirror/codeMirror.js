const textAreaEditor1 = CodeMirror.fromTextArea(
    document.getElementById("textArea1"), {
        mode: "htmlmixed",
        theme: "dracula",
        // lineNumbers: true,
        autoCloseTags: true,
        // gutters: ["CodeMirror-lint-markers"],
        lint: true,
        extraKeys: {
            "Ctrl-Space": "autocomplete"
        },
    }
);

const cssEditor1 = CodeMirror.fromTextArea(
    document.getElementById("cssCode1"), {
        mode: "css",
        theme: "dracula",
        // lineNumbers: true,
        // gutters: ["CodeMirror-lint-markers"],
        autoCloseTags: true,
        extraKeys: {
            "Ctrl-Space": "autocomplete"
        },
    }
);

const jsEditor1 = CodeMirror.fromTextArea(
    document.getElementById("jsCode1"), {
        mode: "javascript",
        theme: "dracula",
        // lineNumbers: true,
        // gutters: ["CodeMirror-lint-markers"],
        extraKeys: {
            "Ctrl-Space": "autocomplete",
            "Ctrl-Alt-F": "autoCloseBrackets",
        },
        autoCloseBrackets: true,
    }
);

let htmlButton1X = document.getElementById("htmlButton1X");
let cssButton1X = document.getElementById("cssButton1X");
let jsButton1X = document.getElementById("jsButton1X");

let wadahHTML1 = document.getElementById("wadahHTML1");
let wadahCSS1 = document.getElementById("wadahCSS1");
let wadahJS1 = document.getElementById("wadahJS1");

function htmlButton1() {
    htmlButton1X.style.color = "white";
    cssButton1X.style.color = "gray";
    jsButton1X.style.color = "gray";

    wadahHTML1.style.display = "inline";
    wadahCSS1.style.display = "none";
    wadahJS1.style.display = "none";
}
function cssButton1() {
    htmlButton1X.style.color = "gray";
    cssButton1X.style.color = "white";
    jsButton1X.style.color = "gray";

    wadahHTML1.style.display = "none";
    wadahCSS1.style.display = "inline";
    wadahJS1.style.display = "none";
}
function jsButton1() {
    htmlButton1X.style.color = "gray";
    cssButton1X.style.color = "gray";
    jsButton1X.style.color = "white";

    wadahHTML1.style.display = "none";
    wadahCSS1.style.display = "none";
    wadahJS1.style.display = "inline";
}