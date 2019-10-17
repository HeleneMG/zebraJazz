//TO TOP & FIXED NAVBAR
window.onscroll = function () { fixedNavbar(), scrollFunction() };
var navbar = document.querySelector(".deux");
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
        navbar.classList.add("sticky");
        navbar.classList.remove("deux")
    } else {
        navbar.classList.add("deux");
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

//MENU HAMBURGER
$(document).ready(function () {
    $(".menuNav").hide();
    $(function () {
        $(".menuHamb").on("click", function () {
            $(".menuNav").toggle(200);
        })
        $(".arrow-back").on('click', function () {
            $(".menuNav").toggle(200);
        })
    })
})

//VUEJS
var app1 = new Vue({
    el: '.app1',
    data: {
        message: 'Votre message a bien été envoyé',
        success: false,
    },

    methods: {
        envoi: (e) => {
            if (this.success = true) {
                e.preventDefault();
                fetch("api-json.php")
                    .then(res => res.json())
            }
        },

        close: () => {
            this.success = false
        }
    }
})

//LIGHTBOX


// var listeFormAjax = document.querySelectorAll("form.ajax");
//   listeFormAjax.forEach(function (balise) {

//       balise.addEventListener('submit', function (event) {
//           event.preventDefault();
//           var formData = new FormData(this);
//           fetch("api-json.php", {
//               method: "POST",
//               body: formData
//           })
//       })
//   })
