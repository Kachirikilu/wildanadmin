const textAreaEditor2 = CodeMirror.fromTextArea(
  document.getElementById("textArea2"),
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

const cssEditor2 = CodeMirror.fromTextArea(
  document.getElementById("cssCode2"),
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

const jsEditor2 = CodeMirror.fromTextArea(document.getElementById("jsCode2"), {
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

function runCode2() {
  const textArea2 = textAreaEditor2.getValue();
  const cssCode2 = cssEditor2.getValue();
  const jsCode2 = jsEditor2.getValue();

  const htmlResult2Container = document.getElementById("htmlResult2");
  const cssResult2Container = document.getElementById("cssResult2");
  const jsResult2Container = document.getElementById("jsResult2");

  // Clear previous results
  htmlResult2Container.innerHTML = "";
  cssResult2Container.innerHTML = "";
  jsResult2Container.innerHTML = "";

  // HTML rendering
  const htmlResult2 = document.createElement("div");
  htmlResult2.innerHTML = extractHTML(textArea2);
  htmlResult2Container.appendChild(htmlResult2);

  // CSS rendering
  const cssCode2X = extractCSS(textArea2);
  const styleTag2X = document.createElement("style");
  styleTag2X.innerHTML = cssCode2X;
  htmlResult2Container.appendChild(styleTag2X);

  // JavaScript execution
  const jsCode2X = extractJS(textArea2);
  try {
    eval(jsCode2X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode2;
  cssResult2Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode2);
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
  return match ? match[2] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[2] : "";
}

function copyCode2() {
  const codeToCopy = textAreaEditor2.getValue();
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
function copyCode2CSS() {
  const codeToCopy = cssEditor2.getValue();
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
function copyCode2JS() {
  const codeToCopy = jsEditor2.getValue();
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

let htmlButton2X = document.getElementById("htmlButton2X");
let cssButton2X = document.getElementById("cssButton2X");
let jsButton2X = document.getElementById("jsButton2X");

let wadahHTML2 = document.getElementById("wadahHTML2");
let wadahCSS2 = document.getElementById("wadahCSS2");
let wadahJS2 = document.getElementById("wadahJS2");

let copyHTML2 = document.getElementById("copyHTML2");
let copyCSS2 = document.getElementById("copyCSS2");
let copyJS2 = document.getElementById("copyJS2");

function htmlButton2() {
  htmlButton2X.style.color = "white";
  cssButton2X.style.color = "gray";
  jsButton2X.style.color = "gray";

  wadahHTML2.style.display = "inline";
  wadahCSS2.style.display = "none";
  wadahJS2.style.display = "none";

  copyHTML2.style.display = "inline";
  copyCSS2.style.display = "none";
  copyJS2.style.display = "none";
}
function cssButton2() {
  htmlButton2X.style.color = "gray";
  cssButton2X.style.color = "white";
  jsButton2X.style.color = "gray";

  wadahHTML2.style.display = "none";
  wadahCSS2.style.display = "inline";
  wadahJS2.style.display = "none";

  copyHTML2.style.display = "none";
  copyCSS2.style.display = "inline";
  copyJS2.style.display = "none";
}
function jsButton2() {
  htmlButton2X.style.color = "gray";
  cssButton2X.style.color = "gray";
  jsButton2X.style.color = "white";

  wadahHTML2.style.display = "none";
  wadahCSS2.style.display = "none";
  wadahJS2.style.display = "inline";

  copyHTML2.style.display = "none";
  copyCSS2.style.display = "none";
  copyJS2.style.display = "inline";
}
