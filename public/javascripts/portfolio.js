filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    // console.log(x[i]);
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  // ['column','cafe']
  arr2 = name.split(" ");
  //" show".split(" ") -> ['show']
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  // ['column','show']
  // console.log(arr1);
  arr2 = name.split(" ");
  //" show".split(" ") -> ['show']
  // console.log(arr2);
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);    
    }
  }
  // ['column'].join(" ") => 'column '
  element.className = arr1.join(" ");
}
// arr2=['show']
// arr1 = ['column',"show",'show',"hide"]
// arr1.indexOf(arr2[i]) = 1
// arr1.splice(1,0)


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = document.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


// indexOf trả -1 neu k thay