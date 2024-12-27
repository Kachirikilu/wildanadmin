const textAreaEditor10 = CodeMirror.fromTextArea(
  document.getElementById("textArea10"),
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

const cssEditor10 = CodeMirror.fromTextArea(
  document.getElementById("cssCode10"),
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

const jsEditor10 = CodeMirror.fromTextArea(document.getElementById("jsCode10"), {
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

function runCode10() {
  const textArea10 = textAreaEditor10.getValue();
  const cssCode10 = cssEditor10.getValue();
  const jsCode10 = jsEditor10.getValue();

  const htmlResult10Container = document.getElementById("htmlResult10");
  const cssResult10Container = document.getElementById("cssResult10");
  const jsResult10Container = document.getElementById("jsResult10");

  // Clear previous results
  htmlResult10Container.innerHTML = "";
  cssResult10Container.innerHTML = "";
  jsResult10Container.innerHTML = "";

  // HTML rendering
  const htmlResult10 = document.createElement("div");
  htmlResult10.innerHTML = extractHTML(textArea10);
  htmlResult10Container.appendChild(htmlResult10);

  // CSS rendering
  const cssCode10X = extractCSS(textArea10);
  const styleTag10X = document.createElement("style");
  styleTag10X.innerHTML = cssCode10X;
  htmlResult10Container.appendChild(styleTag10X);

  // JavaScript execution
  const jsCode10X = extractJS(textArea10);
  try {
    eval(jsCode10X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode10;
  cssResult10Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode10);
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
  return match ? match[10] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[10] : "";
}

function copyCode10() {
  const codeToCopy = textAreaEditor10.getValue();
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
function copyCode10CSS() {
  const codeToCopy = cssEditor10.getValue();
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
function copyCode10JS() {
  const codeToCopy = jsEditor10.getValue();
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

let htmlButton10X = document.getElementById("htmlButton10X");
let cssButton10X = document.getElementById("cssButton10X");
let jsButton10X = document.getElementById("jsButton10X");

let wadahHTML10 = document.getElementById("wadahHTML10");
let wadahCSS10 = document.getElementById("wadahCSS10");
let wadahJS10 = document.getElementById("wadahJS10");

let copyHTML10 = document.getElementById("copyHTML10");
let copyCSS10 = document.getElementById("copyCSS10");
let copyJS10 = document.getElementById("copyJS10");

function htmlButton10() {
  htmlButton10X.style.color = "white";
  cssButton10X.style.color = "gray";
  jsButton10X.style.color = "gray";

  wadahHTML10.style.display = "inline";
  wadahCSS10.style.display = "none";
  wadahJS10.style.display = "none";

  copyHTML10.style.display = "inline";
  copyCSS10.style.display = "none";
  copyJS10.style.display = "none";
}
function cssButton10() {
  htmlButton10X.style.color = "gray";
  cssButton10X.style.color = "white";
  jsButton10X.style.color = "gray";

  wadahHTML10.style.display = "none";
  wadahCSS10.style.display = "inline";
  wadahJS10.style.display = "none";

  copyHTML10.style.display = "none";
  copyCSS10.style.display = "inline";
  copyJS10.style.display = "none";
}
function jsButton10() {
  htmlButton10X.style.color = "gray";
  cssButton10X.style.color = "gray";
  jsButton10X.style.color = "white";

  wadahHTML10.style.display = "none";
  wadahCSS10.style.display = "none";
  wadahJS10.style.display = "inline";

  copyHTML10.style.display = "none";
  copyCSS10.style.display = "none";
  copyJS10.style.display = "inline";
}
