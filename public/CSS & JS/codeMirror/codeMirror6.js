const textAreaEditor6 = CodeMirror.fromTextArea(
  document.getElementById("textArea6"),
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

const cssEditor6 = CodeMirror.fromTextArea(
  document.getElementById("cssCode6"),
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

const jsEditor6 = CodeMirror.fromTextArea(document.getElementById("jsCode6"), {
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

function runCode6() {
  const textArea6 = textAreaEditor6.getValue();
  const cssCode6 = cssEditor6.getValue();
  const jsCode6 = jsEditor6.getValue();

  const htmlResult6Container = document.getElementById("htmlResult6");
  const cssResult6Container = document.getElementById("cssResult6");
  const jsResult6Container = document.getElementById("jsResult6");

  // Clear previous results
  htmlResult6Container.innerHTML = "";
  cssResult6Container.innerHTML = "";
  jsResult6Container.innerHTML = "";

  // HTML rendering
  const htmlResult6 = document.createElement("div");
  htmlResult6.innerHTML = extractHTML(textArea6);
  htmlResult6Container.appendChild(htmlResult6);

  // CSS rendering
  const cssCode6X = extractCSS(textArea6);
  const styleTag6X = document.createElement("style");
  styleTag6X.innerHTML = cssCode6X;
  htmlResult6Container.appendChild(styleTag6X);

  // JavaScript execution
  const jsCode6X = extractJS(textArea6);
  try {
    eval(jsCode6X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode6;
  cssResult6Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode6);
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
  return match ? match[6] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[6] : "";
}

function copyCode6() {
  const codeToCopy = textAreaEditor6.getValue();
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
function copyCode6CSS() {
  const codeToCopy = cssEditor6.getValue();
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
function copyCode6JS() {
  const codeToCopy = jsEditor6.getValue();
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

let htmlButton6X = document.getElementById("htmlButton6X");
let cssButton6X = document.getElementById("cssButton6X");
let jsButton6X = document.getElementById("jsButton6X");

let wadahHTML6 = document.getElementById("wadahHTML6");
let wadahCSS6 = document.getElementById("wadahCSS6");
let wadahJS6 = document.getElementById("wadahJS6");

let copyHTML6 = document.getElementById("copyHTML6");
let copyCSS6 = document.getElementById("copyCSS6");
let copyJS6 = document.getElementById("copyJS6");

function htmlButton6() {
  htmlButton6X.style.color = "white";
  cssButton6X.style.color = "gray";
  jsButton6X.style.color = "gray";

  wadahHTML6.style.display = "inline";
  wadahCSS6.style.display = "none";
  wadahJS6.style.display = "none";

  copyHTML6.style.display = "inline";
  copyCSS6.style.display = "none";
  copyJS6.style.display = "none";
}
function cssButton6() {
  htmlButton6X.style.color = "gray";
  cssButton6X.style.color = "white";
  jsButton6X.style.color = "gray";

  wadahHTML6.style.display = "none";
  wadahCSS6.style.display = "inline";
  wadahJS6.style.display = "none";

  copyHTML6.style.display = "none";
  copyCSS6.style.display = "inline";
  copyJS6.style.display = "none";
}
function jsButton6() {
  htmlButton6X.style.color = "gray";
  cssButton6X.style.color = "gray";
  jsButton6X.style.color = "white";

  wadahHTML6.style.display = "none";
  wadahCSS6.style.display = "none";
  wadahJS6.style.display = "inline";

  copyHTML6.style.display = "none";
  copyCSS6.style.display = "none";
  copyJS6.style.display = "inline";
}
