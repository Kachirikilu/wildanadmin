function go() {
  let inputSusu = document.getElementById("inputKentang");

  if (inputSusu.value == "0") {
      document.getElementById("task").innerHTML = "Beli telur"
  } else if (inputSusu.value == "1") {
      document.getElementById("task").innerHTML = "Beli telur dan hanya beli satu kentang"
  } else if (inputSusu.value == "2") {
      document.getElementById("task").innerHTML = "Beli telur dan hanya beli dua kentang"
  } else if (inputSusu.value == "3") {
      document.getElementById("task").innerHTML = "Beli telur dan hanya beli tiga kentang"
  } else if (inputSusu.value == "4") {
  document.getElementById("task").innerHTML = "Beli telur dan 4 kentang"
  }  else if (inputSusu.value == "5.1") {
    document.getElementById("task").innerHTML = "Hanya beli satu kentang"
  } else if (inputSusu.value == "5.2") {
    document.getElementById("task").innerHTML = "Hanya beli dua kentang"
  } else if (inputSusu.value == "5.3") {
    document.getElementById("task").innerHTML = "Hanya beli tiga kentang"
  } else if (inputSusu.value == "5.4") {
    document.getElementById("task").innerHTML = "Hanya beli 4 kentang"
  } else if (inputSusu.value == "6") {
    document.getElementById("task").innerHTML = "Pulang dengan tangan kosong"
  }
}

let resultX = document.getElementById("layerKalkulatorHP");
let result = document.getElementById("layerKalkulatorHPX");
let prima = document.getElementById("outputPrima");

function jumlahDigit5(x) {
  let count = 0;
  for (let i = 1; i <= x; i++) {
      let angka = i;
      while (angka > 0) {
          if (angka % 10 === 5) {
              count++;
          }
          angka = eval(angka / 10);
      }
  }
  return count;
  }

const displayHP = (a) => {
  if (a == "clear") {
    result.value = "";
    resultX.value = "";
    prima.value = "";
    document.getElementById('primaOutput').style.opacity = "0";
  } else if (a == "del") {
    if (result.value == "Error!") {
      result.value = "";
      resultX.value = "";
      prima.value = "";
    } else if (result.value == "Count yourself") {
      result.value = "";
      resultX.value = "";
      prima.value = "";
    } else if (result.value == "Undefined!") {
      result.value = "";
      resultX.value = "";
      prima.value = "";
    } else if (result.value == "undefined") {
      result.value = "";
      resultX.value = "";
      prima.value = "";
    } else {
    result.value = result.value.slice(0, -1);
    resultX.value = result.value;
    prima.value = result.value;
    }
  } else if (a == "action") {
    try {
      if (eval(result.value) > 1e+308) {
        result.value = "Count yourself";
        resultX.value = "Count yourself";
        prima.value = "Error!";
      } else if (result.value == "") {
        result.value = "";
        resultX.value = "";
        prima.value = "";
      } else {
          let c = eval(result.value);
          result.value = c;
          resultX.value = c;
          prima.value = c;

          if (c < 2) {
              let digit5 = jumlahDigit5(prima.value);
              document.getElementById("primaOutput").innerHTML = 'Ada ' + digit5 + ' angka 5 pada rentang angka 1 sampai ' + prima.value + '.';
              document.getElementById('primaOutput').style.opacity = "1";
              return false;
            }
            for(var i = 2 ; i <= Math.sqrt(c) ; i++){
              if (c % i == 0){
                  let digit5 = jumlahDigit5(prima.value);
                  document.getElementById("primaOutput").innerHTML = 'Ada ' + digit5 + ' angka 5 pada rentang angka 1 sampai ' + prima.value + ', dan ' + prima.value + ' bukan bilangan prima.';
                  document.getElementById('primaOutput').style.opacity = "1";
                return false;
              }
            }
            let digit5 = jumlahDigit5(prima.value);
            document.getElementById("primaOutput").innerHTML = 'Ada ' + digit5 + ' angka 5 pada rentang angka 1 sampai ' + prima.value + ', dan ' + prima.value + ' termasuk bilangan prima.';
            document.getElementById('primaOutput').style.opacity = "1";
            return true;

      }
    } catch (error) {
      result.value = "Error!";
      resultX.value = "Error!";
      prima.value = "Error!";
    }

  } else if (a == "kurungL") {
    result.value += "(";
    resultX.value += "(";
  } else if (a == "kurungR") {
    result.value += ")";
    resultX.value += ")";
  } else if (a == "%") {
    result.value += "*0.01";
    resultX.value += "%";
  } else if (a == "×") {
    result.value += "*";
    resultX.value += "×";
  } else if (a == "÷") {
    result.value += "/";
    resultX.value += "÷";
  } else if (a == "*1e+1") {
    result.value += "*1e+";
    resultX.value += "e";
  } else {
    if (result.value == "Error!") {
      result.value = "";
      result.value += a;
      resultX.value = "";
      resultX.value += a;
    } else if (result.value == "Count yourself") {
      result.value = "";
      result.value += a;
      resultX.value = "";
      resultX.value += a;
    } else if (result.value == "undefined") {
      result.value = "";
      result.value += a;
      resultX.value = "";
      resultX.value += a;
    } else if (result.value == "0") {
      result.value = "";
      result.value += a;
      resultX.value = "";
      resultX.value += a;
    } else {
      result.value += a;
      resultX.value += a;
    }
  }
  if (result.value == "Infinity") {
    result.value = "Count yourself";
    resultX.value = "Count yourself";
    prima.value = "Error!";
  }

};

function MoreHP() {
  x = document.getElementById("bRight1HP");
  y = document.getElementById("bRight2HP");
  if (x.style.display == "grid") {
    x.style.display = "none";
    y.style.display = "grid";
  } else {
    x.style.display = "grid";
    y.style.display = "none";
  }
}

function onHP() {
  x = document.getElementById("layaroffHP"); 
  y = document.getElementById("layarHP");
  z = document.getElementById("poniX");
  gesturi = document.getElementById("gesturiPhone")
  // layarX = document.getElementById("layerKalkulatorHP")
  if (x.style.display == "inline") {
    x.style.display = "none";
    y.style.display = "inline";
    z.style.animation = "panelLayerX 0ms ease forwards";
    // layarX.style.color = ("black");
    gesturi.style.display = "inline";
  } else {
    x.style.display = "inline";
    y.style.display = "none";
    gesturi.style.display = "none";
  }
}

document.getElementById("poniX").onmouseover = function() {over1()};
document.getElementById("poniX").onmouseout = function() {out1()};

function over1() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayer 480ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayer 480ms ease forwards";
        }
}
function out1() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayerR 440ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayerR 440ms ease forwards";
        }
}
document.getElementById("poniRS1").onmouseover = function() {over2()};
document.getElementById("poniRS1").onmouseout = function() {out2()};

function over2() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayer 480ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayer 480ms ease forwards";
        }
}
function out2() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayerR 440ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayerR 440ms ease forwards";
        }
}
document.getElementById("poniRS2").onmouseover = function() {over3()};
document.getElementById("poniRS2").onmouseout = function() {out3()};

function over3() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayer 480ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayer 480ms ease forwards";
        }
}
function out3() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayerR 440ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayerR 440ms ease forwards";
        }
}

document.getElementById("poniRS3").onmouseover = function() {over4()};
document.getElementById("poniRS3").onmouseout = function() {out4()};

function over4() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayer 480ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayer 480ms ease forwards";
        }
}
function out4() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayerR 440ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayerR 440ms ease forwards";
        }
}

document.getElementById("poniRS4").onmouseover = function() {over5()};
document.getElementById("poniRS4").onmouseout = function() {out5()};

function over5() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayer 480ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayer 480ms ease forwards";
        }
}
function out5() {
    let x = document.getElementById("poniX");
        if (x.style.animation == "panelLayerR 440ms ease forwards") {
            }
        else {
            x.style.animation = "panelLayerR 440ms ease forwards";
        }
}