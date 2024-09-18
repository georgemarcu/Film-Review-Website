//pentru dinamica butoanelor de login/register

var x = document.getElementById("log");
var y = document.getElementById("reg");
var z = document.getElementById("btn");

function register() {
  x.style.left = "-400px";
  y.style.left = "50px";
  z.style.left = "110px";
}

function login() {
  x.style.left = "50px";
  y.style.left = "450px";
  z.style.left = "0";
}
