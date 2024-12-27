const textAreaEditor1 = CodeMirror.fromTextArea(
  document.getElementById("textArea1"),
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

const cssEditor1 = CodeMirror.fromTextArea(
  document.getElementById("cssCode1"),
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

const jsEditor1 = CodeMirror.fromTextArea(document.getElementById("jsCode1"), {
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

function runCode1() {
  const textArea1 = textAreaEditor1.getValue();
  const cssCode1 = cssEditor1.getValue();
  const jsCode1 = jsEditor1.getValue();

  const htmlResult1Container = document.getElementById("htmlResult1");
  const cssResult1Container = document.getElementById("cssResult1");
  const jsResult1Container = document.getElementById("jsResult1");

  // Clear previous results
  htmlResult1Container.innerHTML = "";
  cssResult1Container.innerHTML = "";
  jsResult1Container.innerHTML = "";

  // HTML rendering
  const htmlResult1 = document.createElement("div");
  htmlResult1.innerHTML = extractHTML(textArea1);
  htmlResult1Container.appendChild(htmlResult1);

  // CSS rendering
  const cssCode1X = extractCSS(textArea1);
  const styleTag1X = document.createElement("style");
  styleTag1X.innerHTML = cssCode1X;
  htmlResult1Container.appendChild(styleTag1X);

  // JavaScript execution
  const jsCode1X = extractJS(textArea1);
  try {
    eval(jsCode1X);
  } catch (error) {
    console.error(error);
  }

  // CSS rendering
  const styleTag = document.createElement("style");
  styleTag.innerHTML = cssCode1;
  cssResult1Container.appendChild(styleTag);

  // JavaScript execution
  try {
    eval(jsCode1);
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
  return match ? match[1] : "";
}

function extractJS(code) {
  const regex = /<script>([\s\S]*)<\/script>/gm;
  const match = regex.exec(code);
  return match ? match[1] : "";
}

function copyCode1() {
  const codeToCopy = textAreaEditor1.getValue();
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
function copyCode1CSS() {
  const codeToCopy = cssEditor1.getValue();
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
function copyCode1JS() {
  const codeToCopy = jsEditor1.getValue();
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

let htmlButton1X = document.getElementById("htmlButton1X");
let cssButton1X = document.getElementById("cssButton1X");
let jsButton1X = document.getElementById("jsButton1X");

let wadahHTML1 = document.getElementById("wadahHTML1");
let wadahCSS1 = document.getElementById("wadahCSS1");
let wadahJS1 = document.getElementById("wadahJS1");

let copyHTML1 = document.getElementById("copyHTML1");
let copyCSS1 = document.getElementById("copyCSS1");
let copyJS1 = document.getElementById("copyJS1");

function htmlButton1() {
  htmlButton1X.style.color = "white";
  cssButton1X.style.color = "gray";
  jsButton1X.style.color = "gray";

  wadahHTML1.style.display = "inline";
  wadahCSS1.style.display = "none";
  wadahJS1.style.display = "none";

  copyHTML1.style.display = "inline";
  copyCSS1.style.display = "none";
  copyJS1.style.display = "none";
}
function cssButton1() {
  htmlButton1X.style.color = "gray";
  cssButton1X.style.color = "white";
  jsButton1X.style.color = "gray";

  wadahHTML1.style.display = "none";
  wadahCSS1.style.display = "inline";
  wadahJS1.style.display = "none";

  copyHTML1.style.display = "none";
  copyCSS1.style.display = "inline";
  copyJS1.style.display = "none";
}
function jsButton1() {
  htmlButton1X.style.color = "gray";
  cssButton1X.style.color = "gray";
  jsButton1X.style.color = "white";

  wadahHTML1.style.display = "none";
  wadahCSS1.style.display = "none";
  wadahJS1.style.display = "inline";

  copyHTML1.style.display = "none";
  copyCSS1.style.display = "none";
  copyJS1.style.display = "inline";
}
