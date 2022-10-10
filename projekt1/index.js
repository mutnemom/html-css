let close = document.querySelectorAll(".btn-close");
let open = document.querySelectorAll('.btn-open');
let ex = document.getElementById("nav");
let width = document.querySelector("body");
let width2 = width.offsetWidth;

function menuOpen() {
  ex.setAttribute(
    "style",
    "display: flex; flex-direction: column; justify-content: space-evenly; position: absolute; top: 0; right: 0; background-color: #205375; height:90vh; width: 90vw; margin: 0"
  );
  open[0].style.display = "none";
  close[0].setAttribute(
    "style",
    "display: flex; position: absolute; top: 10px; right: 10px;"
  );
}

open[0].addEventListener("click", function () {
  menuOpen();
});

close[0].addEventListener('click', function () {
  document.getElementById("nav").style.display = "none";
  open[0].style.display = "flex";
  close[0].style.display = 'none';
})

function menuHamburger() {
  if (width2 < 600) {
    document.getElementById("nav").style.display = "none";
    open[0].style.display = "flex";
    close[0].style.display = "none";
  }
}

document.getElementById("nav").addEventListener("click", function () {
  menuHamburger();
});
