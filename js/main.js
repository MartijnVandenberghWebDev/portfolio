"use strict";

document.querySelector(".lightswitchContainer #lightswitch").addEventListener("click", switchThemes);
document.querySelector(".mainMenuHighEnd #lightswitch").addEventListener("click", switchThemes);

function switchThemes() {
    let sunIcon;
    let moonIcon;
    if (this.classList.contains("mobile")){
        sunIcon = document.getElementById("sun");
        moonIcon = document.getElementById("moon");
    } else {
        sunIcon = document.getElementById("sun_pc");
        moonIcon = document.getElementById("moon_pc");
    }

    sunIcon.classList.toggle("invisible");
    moonIcon.classList.toggle("invisible");

    document.querySelector("body").classList.toggle("dark");

}


document.querySelector(".mainMenuHighEnd").addEventListener("click", navigation); //scroll into view.
document.querySelector(".mainMenuMobile").addEventListener("click", navigation); //scroll into view.

function navigation(e) {
    let target = e.target.closest("a");

    if (!this.contains(target)) return;

    if (target.id === "mainTitle") {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
          });
    } else {
        let element = document.querySelector(`.${target.id}`);
    
        element.scrollIntoView({behavior : "smooth"});
    }
}

const openModalBtns = document.querySelectorAll("[data-modal-target]");
const closeModalBtns = document.querySelectorAll("[data-modal-close]");
const overlay = document.querySelector(".overlay");

openModalBtns.forEach(button => {
    button.addEventListener("click", () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
    });
});

closeModalBtns.forEach(button => {
    button.addEventListener("click", () => {
        const modal = button.closest(".modal");
        closeModal(modal);
    });
});

overlay.addEventListener("click", () => {
    const modals = document.querySelectorAll(".modal.active");
    modals.forEach(modal => {closeModal(modal)});
})

function openModal(modal) {
    if(modal === null) return;

    let parentSlide = modal.closest(".slide");

    if(parentSlide !== null) {
        modal = parentSlide;
    }

    modal.classList.add("active");
    overlay.classList.add("active");
}
function closeModal(modal) {
    modal.classList.remove("active");
    overlay.classList.remove("active");

    let video = modal.querySelector("iframe");
    
    if (video !== null) {
        console.log(video.id);
        video.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
    }

}