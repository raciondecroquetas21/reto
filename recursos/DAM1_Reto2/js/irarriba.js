window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.documentElement.scrollTop > 600 && window.screen.width > 600) {
    document.getElementById("btnup").style.display = "block";
    document.getElementById("fondoindex").style.display = "block";
    document.getElementById("cea").style.display = "none";
} else {
    document.getElementById("btnup").style.display = "none";
    document.getElementById("fondoindex").style.display = "none";
    document.getElementById("cea").style.display = "block";
  }
}
function detectmob() {
   if(window.innerHeight <= 600) {
    document.getElementById("btnup").style.display = "none";
    document.getElementById("fondoindex").style.display = "none";
    document.getElementById("cea").style.display = "block";
   }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}
