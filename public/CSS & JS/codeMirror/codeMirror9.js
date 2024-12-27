const textAreaEditor9 = CodeMirror.fromTextArea(
  document.getElementById("textArea9"),
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

const cssEditor9 = CodeMirror.fromTextArea(
  document.getElementById("cssCode9"),
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

const jsEditor9 = CodeMirror.fromTextArea(document.getElementById("jsCode9"), {
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

function runCode9() {
  const textArea9 = textAreaEditor9.getValue();
  const cssCode9 = cssEditor9.getValue();
  const jsCode9 = jsEditor9.getValue();

  const htmlResult9Container = document.getElementById("htmlResult9");
  const cssResult9Container = document.getElementById("cssResult9");
  const jsResult9Container = document.getElementById("jsResult9");

  // Clear previous results
  htmlResult9Container.innerHTML = "";
  cssResult9Container.innerHTML = "";
  jsResult9Container.innerHTML = "";

  // HTML rendering
  const htmlResult9 = document.createElement("div");
  htmlResult9.innerHTML = extractHTML(textArea9);
  htmlResult9Container.appendChild(htmlResult9);

  // CSS rendering
  const cssCode9X = extractCSS(textArea9);
  const styleTag9X = document.createElement("style");
  styleTag9X.innerHTML = cssCode9X;
  htmlResult9Container.appendChild(styleTag9X);

  // JavaScript execution
  const jsCode9X = extractJS(textArea9);
  try {
    eval(jsCode9X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode9;
  cssResult9Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode9);
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
  return match ? match[9] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[9] : "";
}

function copyCode9() {
  const codeToCopy = textAreaEditor9.getValue();
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
function copyCode9CSS() {
  const codeToCopy = cssEditor9.getValue();
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
function copyCode9JS() {
  const codeToCopy = jsEditor9.getValue();
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

let htmlButton9X = document.getElementById("htmlButton9X");
let cssButton9X = document.getElementById("cssButton9X");
let jsButton9X = document.getElementById("jsButton9X");

let wadahHTML9 = document.getElementById("wadahHTML9");
let wadahCSS9 = document.getElementById("wadahCSS9");
let wadahJS9 = document.getElementById("wadahJS9");

let copyHTML9 = document.getElementById("copyHTML9");
let copyCSS9 = document.getElementById("copyCSS9");
let copyJS9 = document.getElementById("copyJS9");

function htmlButton9() {
  htmlButton9X.style.color = "white";
  cssButton9X.style.color = "gray";
  jsButton9X.style.color = "gray";

  wadahHTML9.style.display = "inline";
  wadahCSS9.style.display = "none";
  wadahJS9.style.display = "none";

  copyHTML9.style.display = "inline";
  copyCSS9.style.display = "none";
  copyJS9.style.display = "none";
}
function cssButton9() {
  htmlButton9X.style.color = "gray";
  cssButton9X.style.color = "white";
  jsButton9X.style.color = "gray";

  wadahHTML9.style.display = "none";
  wadahCSS9.style.display = "inline";
  wadahJS9.style.display = "none";

  copyHTML9.style.display = "none";
  copyCSS9.style.display = "inline";
  copyJS9.style.display = "none";
}
function jsButton9() {
  htmlButton9X.style.color = "gray";
  cssButton9X.style.color = "gray";
  jsButton9X.style.color = "white";

  wadahHTML9.style.display = "none";
  wadahCSS9.style.display = "none";
  wadahJS9.style.display = "inline";

  copyHTML9.style.display = "none";
  copyCSS9.style.display = "none";
  copyJS9.style.display = "inline";
}
