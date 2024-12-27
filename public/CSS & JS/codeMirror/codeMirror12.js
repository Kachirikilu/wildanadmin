const textAreaEditor12 = CodeMirror.fromTextArea(
  document.getElementById("textArea12"),
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

const cssEditor12 = CodeMirror.fromTextArea(
  document.getElementById("cssCode12"),
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

const jsEditor12 = CodeMirror.fromTextArea(document.getElementById("jsCode12"), {
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

function runCode12() {
  const textArea12 = textAreaEditor12.getValue();
  const cssCode12 = cssEditor12.getValue();
  const jsCode12 = jsEditor12.getValue();

  const htmlResult12Container = document.getElementById("htmlResult12");
  const cssResult12Container = document.getElementById("cssResult12");
  const jsResult12Container = document.getElementById("jsResult12");

  // Clear previous results
  htmlResult12Container.innerHTML = "";
  cssResult12Container.innerHTML = "";
  jsResult12Container.innerHTML = "";

  // HTML rendering
  const htmlResult12 = document.createElement("div");
  htmlResult12.innerHTML = extractHTML(textArea12);
  htmlResult12Container.appendChild(htmlResult12);

  // CSS rendering
  const cssCode12X = extractCSS(textArea12);
  const styleTag12X = document.createElement("style");
  styleTag12X.innerHTML = cssCode12X;
  htmlResult12Container.appendChild(styleTag12X);

  // JavaScript execution
  const jsCode12X = extractJS(textArea12);
  try {
    eval(jsCode12X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode12;
  cssResult12Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode12);
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
  return match ? match[12] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[12] : "";
}

function copyCode12() {
  const codeToCopy = textAreaEditor12.getValue();
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
function copyCode12CSS() {
  const codeToCopy = cssEditor12.getValue();
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
function copyCode12JS() {
  const codeToCopy = jsEditor12.getValue();
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

let htmlButton12X = document.getElementById("htmlButton12X");
let cssButton12X = document.getElementById("cssButton12X");
let jsButton12X = document.getElementById("jsButton12X");

let wadahHTML12 = document.getElementById("wadahHTML12");
let wadahCSS12 = document.getElementById("wadahCSS12");
let wadahJS12 = document.getElementById("wadahJS12");

let copyHTML12 = document.getElementById("copyHTML12");
let copyCSS12 = document.getElementById("copyCSS12");
let copyJS12 = document.getElementById("copyJS12");

function htmlButton12() {
  htmlButton12X.style.color = "white";
  cssButton12X.style.color = "gray";
  jsButton12X.style.color = "gray";

  wadahHTML12.style.display = "inline";
  wadahCSS12.style.display = "none";
  wadahJS12.style.display = "none";

  copyHTML12.style.display = "inline";
  copyCSS12.style.display = "none";
  copyJS12.style.display = "none";
}
function cssButton12() {
  htmlButton12X.style.color = "gray";
  cssButton12X.style.color = "white";
  jsButton12X.style.color = "gray";

  wadahHTML12.style.display = "none";
  wadahCSS12.style.display = "inline";
  wadahJS12.style.display = "none";

  copyHTML12.style.display = "none";
  copyCSS12.style.display = "inline";
  copyJS12.style.display = "none";
}
function jsButton12() {
  htmlButton12X.style.color = "gray";
  cssButton12X.style.color = "gray";
  jsButton12X.style.color = "white";

  wadahHTML12.style.display = "none";
  wadahCSS12.style.display = "none";
  wadahJS12.style.display = "inline";

  copyHTML12.style.display = "none";
  copyCSS12.style.display = "none";
  copyJS12.style.display = "inline";
}
