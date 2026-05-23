// =========================
// TYPING EFFECT
// =========================

const words = [
    "Full Stack Developer",
    "Data Analyst",
    "Mathematician",
    "Tech Enthusiast"
];

let wordIndex = 0;
let letterIndex = 0;
let currentWord = "";
let currentLetters = "";

(function typingEffect(){

    if(wordIndex == words.length){
        wordIndex = 0;
    }

    currentWord = words[wordIndex];

    currentLetters = currentWord.slice(0, ++letterIndex);

    document.getElementById("typing").textContent = currentLetters;

    if(currentLetters.length == currentWord.length){

        wordIndex++;

        letterIndex = 0;
    }

    setTimeout(typingEffect, 150);

})();


// =========================
// SMOOTH SCROLL
// =========================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener('click', function(e){

        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior:'smooth'
        });

    });

});


// =========================
// NAVBAR SHADOW
// =========================

window.addEventListener("scroll", function(){

    const header = document.querySelector("header");

    if(window.scrollY > 50){

        header.style.boxShadow = "0 4px 15px rgba(0,0,0,0.4)";

    }else{

        header.style.boxShadow = "none";

    }

});


// =========================
// SCROLL REVEAL ANIMATION
// =========================

const revealElements = document.querySelectorAll(
    ".card, .project-card, .about-container"
);

window.addEventListener("scroll", revealScroll);

function revealScroll(){

    const windowHeight = window.innerHeight;

    revealElements.forEach(element => {

        const revealTop = element.getBoundingClientRect().top;

        if(revealTop < windowHeight - 100){

            element.classList.add("active");

        }

    });

}
