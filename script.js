// Typing Animation

const text = [
    "Full Stack Developer",
    "PHP Developer",
    "Mathematics Educator",
    "Tech Enthusiast"
];

let count = 0;
let index = 0;
let currentText = '';
let letter = '';

(function type(){

    if(count === text.length){
        count = 0;
    }

    currentText = text[count];
    letter = currentText.slice(0, ++index);

    document.getElementById('typing').textContent = letter;

    if(letter.length === currentText.length){
        count++;
        index = 0;
    }

    setTimeout(type, 150);

})();

// Smooth Scroll

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener('click', function(e){

        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior:'smooth'
        });

    });

});
