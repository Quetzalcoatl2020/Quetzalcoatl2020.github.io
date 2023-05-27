var typeFunction = new Typed ("#typing-text", {
    strings: ["an IT Graduate.", "a Programmer.", "a Web Developer.", "a Software Developer."],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true
});

 //navbar scroll effect 
 var navbar = document.querySelector('.navbar');
 var homelink = document.getElementById('home-link');
 var aboutlink = document.getElementById('about-link');
 var projectlink = document.getElementById('project-link');
 var contactlink = document.getElementById('contact-link');
 
 window.addEventListener('scroll', () => {
     if (window.scrollY > 70 ) {
         navbar.classList.add('navbar-scrolled');
     }
     else {
         navbar.classList.remove('navbar-scrolled');
     }
 
     if (window.scrollY >= 0 && window.scrollY <= 280 ) {
         homelink.classList.add('link-active');
     }
     else {
         homelink.classList.remove('link-active');
     }
 
     if (window.scrollY >= 281 && window.scrollY <= 800) {
         aboutlink.classList.add('link-active');
     }
     else {
         aboutlink.classList.remove('link-active');
     }
 
     if (window.scrollY >= 801 && window.scrollY <=  1600) {
         projectlink.classList.add('link-active');
     }
     else {
         projectlink.classList.remove('link-active');
     }
     if (window.scrollY >= 1601) {
         contactlink.classList.add('link-active');
     }
     else {
         contactlink.classList.remove('link-active');
     }
 });

window.addEventListener('scroll', () => {
    if (window.scrollY > 1 && window.scrollY < 399 ) {
        var homelink = document.getElementById('home-link');
        homelink.classList.add('link-active');
    }
    else {
        homelink.classList.remove('link-active');
    }

    if (window.scrollY > 400 ) {
        var homelink = document.getElementById('about-link');
        homelink.classList.add('link-active');
    }
    else {
        homelink.classList.remove('link-active');
    }
});

function highlight (val) {
    var homelink = document.getElementById('home-link');
    var aboutlink = document.getElementById('about-link');
    var projectlink = document.getElementById('project-link');
    var contactlink = document.getElementById('contact-link');
    if (val == "home") {  
        homelink.classList.add('link-active');
    }
    else {
        homelink.classList.remove('link-active');
    }
    if (val == "about") {
        aboutlink.classList.add('link-active');
    }
    else {
        aboutlink.classList.remove('link-active');
    }
    if (val == "project") {
        projectlink.classList.add('link-active'); 
    }
    else {
        projectlink.classList.remove('link-active');
    }
    if (val == "contact") {
        contactlink.classList.add('link-active');
    }
    else {
        contactlink.classList.remove('link-active');
    }
}

function projectHoverIn(val) {

    var card = document.getElementById('project-card'+val);
    var highlight = document.getElementById('highlight'+val);

    card.style.background="#98c2d7";
    highlight.style.color="#0c7075";
    card.style.transition = "all 0.5s";

}
function projectHoverOut(val) {
    var card = document.getElementById('project-card'+val);
    var highlight = document.getElementById('highlight'+val);


    highlight.style.color="#98c2d7";
    card.style.background="linear-gradient(to bottom right,#072e33,#0c7075)";
    card.style.transition = "all 0.5s";
}
