// Untuk Navbar Mobile device 
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

// Empat function untuk mengatur drop down pada navbar mobile
function dropMenu01() {
  var x = document.getElementById("display-pop-up-01").style.display = 'block';
  document.getElementById('re-drop-01').style.display = "block";
}

function reMenu01() {
   var x = document.getElementById("display-pop-up-01").style.display = 'none';
}


function dropMenu02() {
  var x = document.getElementById("display-pop-up-02").style.display = 'block';
  document.getElementById('re-drop-02').style.display = "block";
}

function reMenu02() {
   var x = document.getElementById("display-pop-up-02").style.display = 'none';
}

