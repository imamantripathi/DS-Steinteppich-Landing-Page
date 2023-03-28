const slidesContainer = document.querySelector(".slides-container");
const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");

nextButton.addEventListener("click", () => {
  slidesContainer.scrollLeft += slideWidth * 2;
});

prevButton.addEventListener("click", () => {
  slidesContainer.scrollLeft -= slideWidth * 2;
});
// ProvenExpert 
myID = document.getElementById("proven");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= screen.height) {
      myID.className = "hideProven"
    } else {
      myID.className = "showProven"
      
    }
};

window.addEventListener("scroll", myScrollFunc);