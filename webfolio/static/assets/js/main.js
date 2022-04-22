"use strict";
let bgPos = document.getElementsByClassName("background-card");
let openNav = document.getElementById("open-nav");
let closeNav = document.getElementById("close-nav");
let openFilter = document.getElementById("open-filter");
let closeFilter = document.getElementById("close-filter");
let triggerNav = document.querySelector(".mobile-nav-menu");
let triggerFilter = document.querySelector(".mobile-filter-menu");

openNav.addEventListener('click', function() {
  triggerNav.classList.toggle("triggered");
  // triggerFilter.classList.toggle("triggered");
},false);
closeNav.addEventListener('click', function() {
  triggerNav.classList.toggle("triggered");
  // triggerFilter.classList.toggle("triggered");
},false);

openFilter.addEventListener('click', function() {
  triggerFilter.classList.toggle("triggered");
  // triggerFilter.classList.toggle("triggered");
},false);
closeFilter.addEventListener('click', function() {
  triggerFilter.classList.toggle("triggered");
  // triggerFilter.classList.toggle("triggered");
},false);

let scrollContainer = document.querySelector(".art-view ul,.any-art-view ul");
scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});

let col_wrapper = document.getElementById("hides").getElementsByTagName("li");
let elementsToRemove = [];
for (var i = 0; i < col_wrapper.length; i++) {
  if (col_wrapper[i].className.toLowerCase() == "hide") {
    elementsToRemove.push(col_wrapper[i]);
  }
}
for (var i = 0; i < elementsToRemove.length; i++) {
  elementsToRemove[i].parentNode.removeChild(elementsToRemove[i]);
}

console.log(scrollContainer);

/*efface du DOM les classes portant la class .hide*/
