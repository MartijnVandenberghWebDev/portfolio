"use-strict";

let visibleAmount = 3;
let imageWidth = 360;

let screenSize = window.matchMedia("(max-width: 1199px)"); //check for tablet
if (screenSize.matches) { // If media query matches
    visibleAmount = 2;
    imageWidth = 210;
}

screenSize = window.matchMedia("(max-width: 767px)"); //check for phone
if (screenSize.matches) { // If media query matches
    visibleAmount = 1;
}

const buttons = document.querySelectorAll(".btn");

buttons.forEach(button => {
    if (button.id === "previous") {
        button.dataset.firstVisible = 1;
    }

    if (button.id === "next") {
        button.dataset.lastVisible = visibleAmount;
    }

    let categorySelector = document.querySelector(`#${button.parentElement.id} :nth-child(2) :first-child`);
    categorySelector.dataset.slideLength = categorySelector.childElementCount;
    categorySelector.dataset.translateX = 0;

    disableButtons(button, 1, visibleAmount, categorySelector.childElementCount);
})

buttons.forEach(button => button.addEventListener("click", (event) => {
    let firstVisible = parseInt(document.querySelector(`#${button.parentElement.id} :first-child`).dataset.firstVisible);
    let lastVisible = parseInt(document.querySelector(`#${button.parentElement.id} #next`).dataset.lastVisible);
    let translateX = parseInt(document.querySelector(`#${button.parentElement.id} :nth-child(2) :first-child`).dataset.translateX);
    let slideLength = parseInt(document.querySelector(`#${button.parentElement.id} :nth-child(2) :first-child`).dataset.slideLength);

    
    let targetId = event.target.id;
    console.log("targetId = " + targetId);
    
    
    if (targetId === "previous" && firstVisible !== 1) {
        firstVisible--;
        lastVisible--;
        translateX += imageWidth;
        
        document.querySelector(`#${button.parentElement.id} :first-child`).dataset.firstVisible = firstVisible;
        document.querySelector(`#${button.parentElement.id} #next`).dataset.lastVisible = lastVisible;
        document.querySelector(`#${button.parentElement.id} :nth-child(2) :first-child`).dataset.translateX = translateX;
    }
    
    if (targetId === "next" && lastVisible < slideLength) {
        firstVisible++;
        lastVisible++;
        translateX -= imageWidth;
        
        console.log("first: " + firstVisible);
        console.log("last: " + lastVisible);
        document.querySelector(`#${button.parentElement.id} :first-child`).dataset.firstVisible = firstVisible;
        document.querySelector(`#${button.parentElement.id} #next`).dataset.lastVisible = lastVisible;
        document.querySelector(`#${button.parentElement.id} :nth-child(2) :first-child`).dataset.translateX = translateX;
    }

    disableButtons(button, firstVisible, lastVisible, slideLength);

    let sliderItems = document.querySelector(`#${button.parentElement.id} :nth-child(2) :first-child`);
    sliderItems.style.transform = `translateX(${translateX}px)`;
}))

function disableButtons(button, firstVisible, lastVisible, slideLength) {
    if (firstVisible === 1) {
        document.querySelector(`#${button.parentElement.id} #previous`).classList.add("inactive");
    } else {
        document.querySelector(`#${button.parentElement.id} #previous`).classList.remove("inactive");
    }

    if (lastVisible >= slideLength) {
        document.querySelector(`#${button.parentElement.id} #next`).classList.add("inactive");
    } else {
        document.querySelector(`#${button.parentElement.id} #next`).classList.remove("inactive");
    }
}