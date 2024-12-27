const textAreaEditor3 = CodeMirror.fromTextArea(
  document.getElementById("textArea3"),
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

const cssEditor3 = CodeMirror.fromTextArea(
  document.getElementById("cssCode3"),
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

const jsEditor3 = CodeMirror.fromTextArea(document.getElementById("jsCode3"), {
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

function runCode3() {
  const textArea3 = textAreaEditor3.getValue();
  const cssCode3 = cssEditor3.getValue();
  const jsCode3 = jsEditor3.getValue();

  const htmlResult3Container = document.getElementById("htmlResult3");
  const cssResult3Container = document.getElementById("cssResult3");
  const jsResult3Container = document.getElementById("jsResult3");

  // Clear previous results
  htmlResult3Container.innerHTML = "";
  cssResult3Container.innerHTML = "";
  jsResult3Container.innerHTML = "";

  // HTML rendering
  const htmlResult3 = document.createElement("div");
  htmlResult3.innerHTML = extractHTML(textArea3);
  htmlResult3Container.appendChild(htmlResult3);

  // CSS rendering
  const cssCode3X = extractCSS(textArea3);
  const styleTag3X = document.createElement("style");
  styleTag3X.innerHTML = cssCode3X;
  htmlResult3Container.appendChild(styleTag3X);

  // JavaScript execution
  const jsCode3X = extractJS(textArea3);
  try {
    eval(jsCode3X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode3;
  cssResult3Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode3);
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
  return match ? match[3] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[3] : "";
}

function copyCode3() {
  const codeToCopy = textAreaEditor3.getValue();
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
function copyCode3CSS() {
  const codeToCopy = cssEditor3.getValue();
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
function copyCode3JS() {
  const codeToCopy = jsEditor3.getValue();
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

let htmlButton3X = document.getElementById("htmlButton3X");
let cssButton3X = document.getElementById("cssButton3X");
let jsButton3X = document.getElementById("jsButton3X");

let wadahHTML3 = document.getElementById("wadahHTML3");
let wadahCSS3 = document.getElementById("wadahCSS3");
let wadahJS3 = document.getElementById("wadahJS3");

let copyHTML3 = document.getElementById("copyHTML3");
let copyCSS3 = document.getElementById("copyCSS3");
let copyJS3 = document.getElementById("copyJS3");

function htmlButton3() {
  htmlButton3X.style.color = "white";
  cssButton3X.style.color = "gray";
  jsButton3X.style.color = "gray";

  wadahHTML3.style.display = "inline";
  wadahCSS3.style.display = "none";
  wadahJS3.style.display = "none";

  copyHTML3.style.display = "inline";
  copyCSS3.style.display = "none";
  copyJS3.style.display = "none";
}
function cssButton3() {
  htmlButton3X.style.color = "gray";
  cssButton3X.style.color = "white";
  jsButton3X.style.color = "gray";

  wadahHTML3.style.display = "none";
  wadahCSS3.style.display = "inline";
  wadahJS3.style.display = "none";

  copyHTML3.style.display = "none";
  copyCSS3.style.display = "inline";
  copyJS3.style.display = "none";
}
function jsButton3() {
  htmlButton3X.style.color = "gray";
  cssButton3X.style.color = "gray";
  jsButton3X.style.color = "white";

  wadahHTML3.style.display = "none";
  wadahCSS3.style.display = "none";
  wadahJS3.style.display = "inline";

  copyHTML3.style.display = "none";
  copyCSS3.style.display = "none";
  copyJS3.style.display = "inline";
}
