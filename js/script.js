let btn = document.getElementsByClassName("bt");
let hd = document.getElementsByClassName("hd");

hd[0].style.display = "none";
btn[0].addEventListener("click", () => {
  if (hd[0].style.display === "none") {
    hd[0].style.display = "block";
  } else {
    hd[0].style.display = "none";
  }
});
hd[1].style.display = "none";
btn[1].addEventListener("click", () => {
  if (hd[1].style.display === "none") {
    hd[1].style.display = "block";
  } else {
    hd[1].style.display = "none";
  }
});
hd[2].style.display = "none";
btn[2].addEventListener("click", () => {
  if (hd[2].style.display === "none") {
    hd[2].style.display = "block";
  } else {
    hd[2].style.display = "none";
  }
});
hd[3].style.display = "none";
btn[3].addEventListener("click", () => {
  if (hd[3].style.display === "none") {
    hd[3].style.display = "block";
  } else {
    hd[3].style.display = "none";
  }
});
