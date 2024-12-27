let names = [
    "All",
    "Random",
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
  
  
  
  let Pencarian1 = document.getElementById("autoComplete");
  let Pencarian2 = document.getElementById("autoComplete2");
  Pencarian1.onkeyup = Pencarian1.onkeypress = function() {
      Pencarian2.value = this.value;
  }
  Pencarian2.onkeyup = Pencarian2.onkeypress = function() {
      Pencarian1.value = this.value;
  }
  
  
  
  //reference
  let input = document.getElementById("autoComplete");
  let input2 = document.getElementById("autoComplete2");
  
  //Execute function on keyup
  input.addEventListener("keyup", (e) => {
    //loop through above array
    //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
    removeElements();
    for (let i of sortedNames) {
      //convert input to lowercase and compare with each string
  
      if (
        i.toLowerCase().startsWith(input.value.toLowerCase()) &&
        input.value != ""
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
        let word = "<b>" + i.substr(0, input.value.length) + "</b>";
        word += i.substr(input.value.length);
        //display the value in array
        listItem.innerHTML = word;
        listItem2.innerHTML = word;
        document.querySelector(".list").appendChild(listItem);
        document.querySelector(".list2").appendChild(listItem2);
      }
    }
  });
  function displayNames(value) {
    input.value = value;
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
  
  //Execute function on keyup
  input2.addEventListener("keyup", (e) => {
    //loop through above array
    //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
    removeElements();
    for (let i of sortedNames) {
      //convert input to lowercase and compare with each string
  
      if (
        i.toLowerCase().startsWith(input2.value.toLowerCase()) &&
        input2.value != ""
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
        let word = "<b>" + i.substr(0, input2.value.length) + "</b>";
        word += i.substr(input2.value.length);
        //display the value in array
        listItem.innerHTML = word;
        listItem2.innerHTML = word;
        document.querySelector(".list").appendChild(listItem);
        document.querySelector(".list2").appendChild(listItem2);
      }
    }
  });
  function displayNames(value) {
    input.value = value;
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