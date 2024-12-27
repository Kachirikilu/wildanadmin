let names = [
  "All",
  "All view",
  "Back home",
  "Random",
  "E-Learning",
  "Tugas",
  "Information",
  "Miscellaneous",
  "Technology",
  "Electronic",
  "Gadget",
  "Photography",
  "Automotive",
  "Science",
  "Education",
  "Sport",
  "International",
  "National",
  "Political",
  "Economy",
  "Tradition",
  "Food",
  "Film",
  "Music",
  "Horror",
  "Anime",
  "Games",
  "Memes"
];
//Sort names in ascending order
let sortedNames = names.sort();

//reference
let inputAuto = document.getElementById("autoComplete");
let inputAuto2 = document.getElementById("autoComplete2");

inputAuto.onkeyup = inputAuto.onkeypress = function() {
  inputAuto2.value = this.value;
}
inputAuto2.onkeyup = inputAuto2.onkeypress = function() {
  inputAuto.value = this.value;
}

//Execute function on keyup
inputAuto.addEventListener("keyup", (e) => {
  //loop through above array
  //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
  removeElements();
  for (let i of sortedNames) {
    //convert inputAuto to lowercase and compare with each string

    if (
      i.toLowerCase().startsWith(inputAuto.value.toLowerCase()) &&
      inputAuto.value != ""
    ) {
      //create li element
      let listItem = document.createElement("li");
      let listItem2 = document.createElement("li");
      //One common class name
      listItem.classList.add("list-items");
      listItem.style.cursor = "pointer";
      listItem.setAttribute("onclick", "displayNames('" + i + "')");
      listItem2.classList.add("list-items2");
      listItem2.style.cursor = "pointer";
      listItem2.setAttribute("onclick", "displayNames('" + i + "')");
      //Display matched part in bold
      let word = "<b>" + i.substr(0, inputAuto.value.length) + "</b>";
      word += i.substr(inputAuto.value.length);
      //display the value in array
      listItem.innerHTML = word;
      listItem2.innerHTML = word;
      document.querySelector(".list").appendChild(listItem);
      document.querySelector(".list2").appendChild(listItem2);
    }
  }
});

//Execute function on keyup
inputAuto2.addEventListener("keyup", (e) => {
  //loop through above array
  //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
  removeElements();
  for (let i of sortedNames) {
    //convert inputAuto to lowercase and compare with each string

    if (
      i.toLowerCase().startsWith(inputAuto2.value.toLowerCase()) &&
      inputAuto2.value != ""
    ) {
      //create li element
      let listItem = document.createElement("li");
      let listItem2 = document.createElement("li");
      //One common class name
      listItem.classList.add("list-items");
      listItem.style.cursor = "pointer";
      listItem.setAttribute("onclick", "displayNames('" + i + "')");
      listItem2.classList.add("list-items2");
      listItem2.style.cursor = "pointer";
      listItem2.setAttribute("onclick", "displayNames('" + i + "')");
      //Display matched part in bold
      let word = "<b>" + i.substr(0, inputAuto2.value.length) + "</b>";
      word += i.substr(inputAuto2.value.length);
      //display the value in array
      listItem.innerHTML = word;
      listItem2.innerHTML = word;
      document.querySelector(".list").appendChild(listItem);
      document.querySelector(".list2").appendChild(listItem2);
    }
  }
});

function displayNames(value) {
  inputAuto.value = value;
  removeElements();
  inputAuto2.value = value;
  removeElements();
}
function removeElements() {
  //clear all the item
  let items = document.querySelectorAll(".list-items");
  items.forEach((item) => {
    item.remove();
  });
  let items2 = document.querySelectorAll(".list-items2");
  items2.forEach((item2) => {
    item2.remove();
  });
}