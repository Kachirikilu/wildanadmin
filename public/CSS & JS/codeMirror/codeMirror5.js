const textAreaEditor5 = CodeMirror.fromTextArea(
  document.getElementById("textArea5"),
  {
    mode: "htmlmixed",
    theme: "dracula",
    lineNumbers: true,
    autoCloseTags: true,
    gutters: ["CodeMirror-lint-markers"],
    lint: true,
    extraKeys: {
      "Ctrl-Space": "autocomplete",
    },
  }
);

const cssEditor5 = CodeMirror.fromTextArea(
  document.getElementById("cssCode5"),
  {
    mode: "css",
    theme: "dracula",
    lineNumbers: true,
    gutters: ["CodeMirror-lint-markers"],
    autoCloseTags: true,
    extraKeys: {
      "Ctrl-Space": "autocomplete",
    },
  }
);

const jsEditor5 = CodeMirror.fromTextArea(document.getElementById("jsCode5"), {
  mode: "javascript",
  theme: "dracula",
  lineNumbers: true,
  gutters: ["CodeMirror-lint-markers"],
  extraKeys: {
    "Ctrl-Space": "autocomplete",
    "Ctrl-Alt-F": "autoCloseBrackets",
  },
  autoCloseBrackets: true,
});

function runCode5() {
  const textArea5 = textAreaEditor5.getValue();
  const cssCode5 = cssEditor5.getValue();
  const jsCode5 = jsEditor5.getValue();

  const htmlResult5Container = document.getElementById("htmlResult5");
  const cssResult5Container = document.getElementById("cssResult5");
  const jsResult5Container = document.getElementById("jsResult5");

  // Clear previous results
  htmlResult5Container.innerHTML = "";
  cssResult5Container.innerHTML = "";
  jsResult5Container.innerHTML = "";

  // HTML rendering
  const htmlResult5 = document.createElement("div");
  htmlResult5.innerHTML = extractHTML(textArea5);
  htmlResult5Container.appendChild(htmlResult5);

  // CSS rendering
  const cssCode5X = extractCSS(textArea5);
  const styleTag5X = document.createElement("style");
  styleTag5X.innerHTML = cssCode5X;
  htmlResult5Container.appendChild(styleTag5X);

  // JavaScript execution
  const jsCode5X = extractJS(textArea5);
  try {
    eval(jsCode5X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode5;
  cssResult5Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode5);
  } catch (error) {
    console.error(error);
  }
}

function extractHTML(code) {
  const regex = /<style>([\s\S]*)<\/style>|<script>([\s\S]*)<\/script>/gm;
  return code.replace(regex, "");
}

function extractCSS(code) {
  const regex = /<style>([\s\S]*)<\/style>/gm;
  const match = regex.exec(code);
  return match ? match[5] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[5] : "";
}

function copyCode5() {
  const codeToCopy = textAreaEditor5.getValue();
  const tempTextArea = document.createElement("textarea");
  tempTextArea.value = codeToCopy;
  document.body.appendChild(tempTextArea);
  tempTextArea.select();

  try {
    document.execCommand("copy");
  } catch (err) {
    console.error("Tidak dapat menyalin teks: ", err);
  }
  document.body.removeChild(tempTextArea);
}
function copyCode5CSS() {
  const codeToCopy = cssEditor5.getValue();
  const tempTextArea = document.createElement("textarea");
  tempTextArea.value = codeToCopy;
  document.body.appendChild(tempTextArea);
  tempTextArea.select();

  try {
    document.execCommand("copy");
  } catch (err) {
    console.error("Tidak dapat menyalin teks: ", err);
  }
  document.body.removeChild(tempTextArea);
}
function copyCode5JS() {
  const codeToCopy = jsEditor5.getValue();
  const tempTextArea = document.createElement("textarea");
  tempTextArea.value = codeToCopy;
  document.body.appendChild(tempTextArea);
  tempTextArea.select();

  try {
    document.execCommand("copy");
  } catch (err) {
    console.error("Tidak dapat menyalin teks: ", err);
  }
  document.body.removeChild(tempTextArea);
}

let htmlButton5X = document.getElementById("htmlButton5X");
let cssButton5X = document.getElementById("cssButton5X");
let jsButton5X = document.getElementById("jsButton5X");

let wadahHTML5 = document.getElementById("wadahHTML5");
let wadahCSS5 = document.getElementById("wadahCSS5");
let wadahJS5 = document.getElementById("wadahJS5");

let copyHTML5 = document.getElementById("copyHTML5");
let copyCSS5 = document.getElementById("copyCSS5");
let copyJS5 = document.getElementById("copyJS5");

function htmlButton5() {
  htmlButton5X.style.color = "white";
  cssButton5X.style.color = "gray";
  jsButton5X.style.color = "gray";

  wadahHTML5.style.display = "inline";
  wadahCSS5.style.display = "none";
  wadahJS5.style.display = "none";

  copyHTML5.style.display = "inline";
  copyCSS5.style.display = "none";
  copyJS5.style.display = "none";
}
function cssButton5() {
  htmlButton5X.style.color = "gray";
  cssButton5X.style.color = "white";
  jsButton5X.style.color = "gray";

  wadahHTML5.style.display = "none";
  wadahCSS5.style.display = "inline";
  wadahJS5.style.display = "none";

  copyHTML5.style.display = "none";
  copyCSS5.style.display = "inline";
  copyJS5.style.display = "none";
}
function jsButton5() {
  htmlButton5X.style.color = "gray";
  cssButton5X.style.color = "gray";
  jsButton5X.style.color = "white";

  wadahHTML5.style.display = "none";
  wadahCSS5.style.display = "none";
  wadahJS5.style.display = "inline";

  copyHTML5.style.display = "none";
  copyCSS5.style.display = "none";
  copyJS5.style.display = "inline";
}
