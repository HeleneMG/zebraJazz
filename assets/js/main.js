//TO TOP & FIXED NAVBAR
window.onscroll = function () { fixedNavbar(), scrollFunction() };
var navbar = document.querySelector("nav");
var mybutton = document.querySelector("#toTop");
var sticky = navbar.offsetTop;

//TO TOP BUTTON apparition
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        $(mybutton).fadeIn(700);
    } else {
        $(mybutton).fadeOut(700);
    }
}

//TO TOP BUTTON action
mybutton.addEventListener('click', function topFunction() {
    $("html, body").animate({ scrollTop: 0 }, 900);
});

//FIXED NAVBAR
function fixedNavbar() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}

//SCROLLREVEAL H1
ScrollReveal().reveal('h1', {
    duration: 200,
    distance: '5px',
    origin: 'left',
    delay: 200,
    reset: true
});

//slider
