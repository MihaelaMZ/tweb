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
  window.location.href = "../html/uecount.html";
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
  var s = document.getElementsByClassName("container");
  var input = document.getElementById("myInput").value;
  var name = document.getElementsByTagName("h3");
  for (i = 0; i < s.length; i++) {
    s[i].style.display = "none";
  }
  for (i = 0; i < name.length; i++) {
    var nam = document.getElementsByTagName("h3")[i].innerText;
    if (nam == input) s[i].style.display = "flex";
    if (input == "")
      for (i = 0; i < s.length; i++) {
        s[i].style.display = "flex";
      }
  }
}
