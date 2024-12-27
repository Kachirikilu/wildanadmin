const textAreaEditor7 = CodeMirror.fromTextArea(
  document.getElementById("textArea7"),
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

const cssEditor7 = CodeMirror.fromTextArea(
  document.getElementById("cssCode7"),
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

const jsEditor7 = CodeMirror.fromTextArea(document.getElementById("jsCode7"), {
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

function runCode7() {
  const textArea7 = textAreaEditor7.getValue();
  const cssCode7 = cssEditor7.getValue();
  const jsCode7 = jsEditor7.getValue();

  const htmlResult7Container = document.getElementById("htmlResult7");
  const cssResult7Container = document.getElementById("cssResult7");
  const jsResult7Container = document.getElementById("jsResult7");

  // Clear previous results
  htmlResult7Container.innerHTML = "";
  cssResult7Container.innerHTML = "";
  jsResult7Container.innerHTML = "";

  // HTML rendering
  const htmlResult7 = document.createElement("div");
  htmlResult7.innerHTML = extractHTML(textArea7);
  htmlResult7Container.appendChild(htmlResult7);

  // CSS rendering
  const cssCode7X = extractCSS(textArea7);
  const styleTag7X = document.createElement("style");
  styleTag7X.innerHTML = cssCode7X;
  htmlResult7Container.appendChild(styleTag7X);

  // JavaScript execution
  const jsCode7X = extractJS(textArea7);
  try {
    eval(jsCode7X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode7;
  cssResult7Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode7);
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
  return match ? match[7] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[7] : "";
}

function copyCode7() {
  const codeToCopy = textAreaEditor7.getValue();
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
function copyCode7CSS() {
  const codeToCopy = cssEditor7.getValue();
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
function copyCode7JS() {
  const codeToCopy = jsEditor7.getValue();
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

let htmlButton7X = document.getElementById("htmlButton7X");
let cssButton7X = document.getElementById("cssButton7X");
let jsButton7X = document.getElementById("jsButton7X");

let wadahHTML7 = document.getElementById("wadahHTML7");
let wadahCSS7 = document.getElementById("wadahCSS7");
let wadahJS7 = document.getElementById("wadahJS7");

let copyHTML7 = document.getElementById("copyHTML7");
let copyCSS7 = document.getElementById("copyCSS7");
let copyJS7 = document.getElementById("copyJS7");

function htmlButton7() {
  htmlButton7X.style.color = "white";
  cssButton7X.style.color = "gray";
  jsButton7X.style.color = "gray";

  wadahHTML7.style.display = "inline";
  wadahCSS7.style.display = "none";
  wadahJS7.style.display = "none";

  copyHTML7.style.display = "inline";
  copyCSS7.style.display = "none";
  copyJS7.style.display = "none";
}
function cssButton7() {
  htmlButton7X.style.color = "gray";
  cssButton7X.style.color = "white";
  jsButton7X.style.color = "gray";

  wadahHTML7.style.display = "none";
  wadahCSS7.style.display = "inline";
  wadahJS7.style.display = "none";

  copyHTML7.style.display = "none";
  copyCSS7.style.display = "inline";
  copyJS7.style.display = "none";
}
function jsButton7() {
  htmlButton7X.style.color = "gray";
  cssButton7X.style.color = "gray";
  jsButton7X.style.color = "white";

  wadahHTML7.style.display = "none";
  wadahCSS7.style.display = "none";
  wadahJS7.style.display = "inline";

  copyHTML7.style.display = "none";
  copyCSS7.style.display = "none";
  copyJS7.style.display = "inline";
}
