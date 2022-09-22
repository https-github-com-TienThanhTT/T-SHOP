

var Lis = document.getElementById("navbarTogglerDemo03");
var btns = Lis.getElementsByClassName("nav-item");
for (var i = 0; i < Lis.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[1].className = current[1].className.replace("active", "");
  this.className += "active";
  });
}
