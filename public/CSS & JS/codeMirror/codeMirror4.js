const textAreaEditor4 = CodeMirror.fromTextArea(
  document.getElementById("textArea4"),
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

const cssEditor4 = CodeMirror.fromTextArea(
  document.getElementById("cssCode4"),
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

const jsEditor4 = CodeMirror.fromTextArea(document.getElementById("jsCode4"), {
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

function runCode4() {
  const textArea4 = textAreaEditor4.getValue();
  const cssCode4 = cssEditor4.getValue();
  const jsCode4 = jsEditor4.getValue();

  const htmlResult4Container = document.getElementById("htmlResult4");
  const cssResult4Container = document.getElementById("cssResult4");
  const jsResult4Container = document.getElementById("jsResult4");

  // Clear previous results
  htmlResult4Container.innerHTML = "";
  cssResult4Container.innerHTML = "";
  jsResult4Container.innerHTML = "";

  // HTML rendering
  const htmlResult4 = document.createElement("div");
  htmlResult4.innerHTML = extractHTML(textArea4);
  htmlResult4Container.appendChild(htmlResult4);

  // CSS rendering
  const cssCode4X = extractCSS(textArea4);
  const styleTag4X = document.createElement("style");
  styleTag4X.innerHTML = cssCode4X;
  htmlResult4Container.appendChild(styleTag4X);

  // JavaScript execution
  const jsCode4X = extractJS(textArea4);
  try {
    eval(jsCode4X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode4;
  cssResult4Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode4);
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
  return match ? match[4] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[4] : "";
}

function copyCode4() {
  const codeToCopy = textAreaEditor4.getValue();
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
function copyCode4CSS() {
  const codeToCopy = cssEditor4.getValue();
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
function copyCode4JS() {
  const codeToCopy = jsEditor4.getValue();
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

let htmlButton4X = document.getElementById("htmlButton4X");
let cssButton4X = document.getElementById("cssButton4X");
let jsButton4X = document.getElementById("jsButton4X");

let wadahHTML4 = document.getElementById("wadahHTML4");
let wadahCSS4 = document.getElementById("wadahCSS4");
let wadahJS4 = document.getElementById("wadahJS4");

let copyHTML4 = document.getElementById("copyHTML4");
let copyCSS4 = document.getElementById("copyCSS4");
let copyJS4 = document.getElementById("copyJS4");

function htmlButton4() {
  htmlButton4X.style.color = "white";
  cssButton4X.style.color = "gray";
  jsButton4X.style.color = "gray";

  wadahHTML4.style.display = "inline";
  wadahCSS4.style.display = "none";
  wadahJS4.style.display = "none";

  copyHTML4.style.display = "inline";
  copyCSS4.style.display = "none";
  copyJS4.style.display = "none";
}
function cssButton4() {
  htmlButton4X.style.color = "gray";
  cssButton4X.style.color = "white";
  jsButton4X.style.color = "gray";

  wadahHTML4.style.display = "none";
  wadahCSS4.style.display = "inline";
  wadahJS4.style.display = "none";

  copyHTML4.style.display = "none";
  copyCSS4.style.display = "inline";
  copyJS4.style.display = "none";
}
function jsButton4() {
  htmlButton4X.style.color = "gray";
  cssButton4X.style.color = "gray";
  jsButton4X.style.color = "white";

  wadahHTML4.style.display = "none";
  wadahCSS4.style.display = "none";
  wadahJS4.style.display = "inline";

  copyHTML4.style.display = "none";
  copyCSS4.style.display = "none";
  copyJS4.style.display = "inline";
}
