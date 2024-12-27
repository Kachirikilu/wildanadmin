const textAreaEditor11 = CodeMirror.fromTextArea(
  document.getElementById("textArea11"),
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

const cssEditor11 = CodeMirror.fromTextArea(
  document.getElementById("cssCode11"),
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

const jsEditor11 = CodeMirror.fromTextArea(document.getElementById("jsCode11"), {
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

function runCode11() {
  const textArea11 = textAreaEditor11.getValue();
  const cssCode11 = cssEditor11.getValue();
  const jsCode11 = jsEditor11.getValue();

  const htmlResult11Container = document.getElementById("htmlResult11");
  const cssResult11Container = document.getElementById("cssResult11");
  const jsResult11Container = document.getElementById("jsResult11");

  // Clear previous results
  htmlResult11Container.innerHTML = "";
  cssResult11Container.innerHTML = "";
  jsResult11Container.innerHTML = "";

  // HTML rendering
  const htmlResult11 = document.createElement("div");
  htmlResult11.innerHTML = extractHTML(textArea11);
  htmlResult11Container.appendChild(htmlResult11);

  // CSS rendering
  const cssCode11X = extractCSS(textArea11);
  const styleTag11X = document.createElement("style");
  styleTag11X.innerHTML = cssCode11X;
  htmlResult11Container.appendChild(styleTag11X);

  // JavaScript execution
  const jsCode11X = extractJS(textArea11);
  try {
    eval(jsCode11X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode11;
  cssResult11Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode11);
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
  return match ? match[11] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[11] : "";
}

function copyCode11() {
  const codeToCopy = textAreaEditor11.getValue();
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
function copyCode11CSS() {
  const codeToCopy = cssEditor11.getValue();
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
function copyCode11JS() {
  const codeToCopy = jsEditor11.getValue();
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

let htmlButton11X = document.getElementById("htmlButton11X");
let cssButton11X = document.getElementById("cssButton11X");
let jsButton11X = document.getElementById("jsButton11X");

let wadahHTML11 = document.getElementById("wadahHTML11");
let wadahCSS11 = document.getElementById("wadahCSS11");
let wadahJS11 = document.getElementById("wadahJS11");

let copyHTML11 = document.getElementById("copyHTML11");
let copyCSS11 = document.getElementById("copyCSS11");
let copyJS11 = document.getElementById("copyJS11");

function htmlButton11() {
  htmlButton11X.style.color = "white";
  cssButton11X.style.color = "gray";
  jsButton11X.style.color = "gray";

  wadahHTML11.style.display = "inline";
  wadahCSS11.style.display = "none";
  wadahJS11.style.display = "none";

  copyHTML11.style.display = "inline";
  copyCSS11.style.display = "none";
  copyJS11.style.display = "none";
}
function cssButton11() {
  htmlButton11X.style.color = "gray";
  cssButton11X.style.color = "white";
  jsButton11X.style.color = "gray";

  wadahHTML11.style.display = "none";
  wadahCSS11.style.display = "inline";
  wadahJS11.style.display = "none";

  copyHTML11.style.display = "none";
  copyCSS11.style.display = "inline";
  copyJS11.style.display = "none";
}
function jsButton11() {
  htmlButton11X.style.color = "gray";
  cssButton11X.style.color = "gray";
  jsButton11X.style.color = "white";

  wadahHTML11.style.display = "none";
  wadahCSS11.style.display = "none";
  wadahJS11.style.display = "inline";

  copyHTML11.style.display = "none";
  copyCSS11.style.display = "none";
  copyJS11.style.display = "inline";
}
