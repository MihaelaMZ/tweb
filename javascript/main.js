// pagina principala
function buttomInf_click() {
  var element = document.getElementById("ImgPag1");
  element.classList.add("ImTab");
  document.getElementById("InfGen").style.display = "block";
  document.getElementById("buton").style.display = "none";
}

//pagina cu anii de aderare
function loadImage(nr) {
  if (nr == 1) {
    document.getElementById("Im").src = "../images/hcountries.gif";
  } else {
    document.getElementById("Im").src = `../images/${nr}.png`;
  }
}

function Page() {
  window.location.href = "../php/uecount.php";
}

//pagina cu tari
var mybutton = document.getElementById("scrollBut");

window.onscroll = function () {
  scroll();
};

function scroll() {
  if (document.documentElement.scrollTop > 400) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function Up() {
  document.documentElement.scrollTop = 0;
}

function CautaTara() {
  var containerEl = document.getElementsByClassName("container");
  var search = document.getElementById("myInput").value;
  var countrysName = document.getElementsByTagName("h3");
  for (i = 0; i < containerEl.length; i++) {
    containerEl[i].style.display = "none";
  }
  search = search.replaceAll(" ", "");
 // search[0] = search[0].toUpperCase();
  for (i = 0; i < countrysName.length; i++) {
    var countName = document.getElementsByTagName("h3")[i].innerText;
    if (countName.indexOf(search) != -1) containerEl[i].style.display = "flex";
    if (search == "") 
      for (i = 0; i < containerEl.length; i++) {
        containerEl[i].style.display = "flex";
      }
  }
}
