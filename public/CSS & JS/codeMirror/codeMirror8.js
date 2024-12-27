const textAreaEditor8 = CodeMirror.fromTextArea(
  document.getElementById("textArea8"),
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

const cssEditor8 = CodeMirror.fromTextArea(
  document.getElementById("cssCode8"),
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

const jsEditor8 = CodeMirror.fromTextArea(document.getElementById("jsCode8"), {
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

function runCode8() {
  const textArea8 = textAreaEditor8.getValue();
  const cssCode8 = cssEditor8.getValue();
  const jsCode8 = jsEditor8.getValue();

  const htmlResult8Container = document.getElementById("htmlResult8");
  const cssResult8Container = document.getElementById("cssResult8");
  const jsResult8Container = document.getElementById("jsResult8");

  // Clear previous results
  htmlResult8Container.innerHTML = "";
  cssResult8Container.innerHTML = "";
  jsResult8Container.innerHTML = "";

  // HTML rendering
  const htmlResult8 = document.createElement("div");
  htmlResult8.innerHTML = extractHTML(textArea8);
  htmlResult8Container.appendChild(htmlResult8);

  // CSS rendering
  const cssCode8X = extractCSS(textArea8);
  const styleTag8X = document.createElement("style");
  styleTag8X.innerHTML = cssCode8X;
  htmlResult8Container.appendChild(styleTag8X);

  // JavaScript execution
  const jsCode8X = extractJS(textArea8);
  try {
    eval(jsCode8X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode8;
  cssResult8Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode8);
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
  return match ? match[8] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[8] : "";
}

function copyCode8() {
  const codeToCopy = textAreaEditor8.getValue();
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
function copyCode8CSS() {
  const codeToCopy = cssEditor8.getValue();
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
function copyCode8JS() {
  const codeToCopy = jsEditor8.getValue();
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

let htmlButton8X = document.getElementById("htmlButton8X");
let cssButton8X = document.getElementById("cssButton8X");
let jsButton8X = document.getElementById("jsButton8X");

let wadahHTML8 = document.getElementById("wadahHTML8");
let wadahCSS8 = document.getElementById("wadahCSS8");
let wadahJS8 = document.getElementById("wadahJS8");

let copyHTML8 = document.getElementById("copyHTML8");
let copyCSS8 = document.getElementById("copyCSS8");
let copyJS8 = document.getElementById("copyJS8");

function htmlButton8() {
  htmlButton8X.style.color = "white";
  cssButton8X.style.color = "gray";
  jsButton8X.style.color = "gray";

  wadahHTML8.style.display = "inline";
  wadahCSS8.style.display = "none";
  wadahJS8.style.display = "none";

  copyHTML8.style.display = "inline";
  copyCSS8.style.display = "none";
  copyJS8.style.display = "none";
}
function cssButton8() {
  htmlButton8X.style.color = "gray";
  cssButton8X.style.color = "white";
  jsButton8X.style.color = "gray";

  wadahHTML8.style.display = "none";
  wadahCSS8.style.display = "inline";
  wadahJS8.style.display = "none";

  copyHTML8.style.display = "none";
  copyCSS8.style.display = "inline";
  copyJS8.style.display = "none";
}
function jsButton8() {
  htmlButton8X.style.color = "gray";
  cssButton8X.style.color = "gray";
  jsButton8X.style.color = "white";

  wadahHTML8.style.display = "none";
  wadahCSS8.style.display = "none";
  wadahJS8.style.display = "inline";

  copyHTML8.style.display = "none";
  copyCSS8.style.display = "none";
  copyJS8.style.display = "inline";
}
