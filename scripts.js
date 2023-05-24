var typeFunction = new Typed ("#typing-text", {
    strings: ["an IT Graduate.", "a Programmer.", "a Web Developer.", "a Software Developer."],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true
});

function highlight (val) {
    if (val == "home") {
        var homelink = document.getElementById('home-link');
        homelink.style.borderBottom = "2px solid white";
        homelink.style.fontWeight = "bold";
        homelink.style.color = "white";
        
        var aboutlink = document.getElementById('about-link');
        aboutlink.style.borderBottom = "2px solid transparent";
        aboutlink.style.fontWeight = "normal";
        aboutlink.style.color = "#98c2d7";
        
        var projectlink = document.getElementById('project-link');
        projectlink.style.borderBottom = "2px solid transparent";
        projectlink.style.fontWeight = "normal";
        projectlink.style.color = "#98c2d7";

        var contactlink = document.getElementById('contact-link');
        contactlink.style.borderBottom = "2px solid transparent";
        contactlink.style.fontWeight = "normal";
        contactlink.style.color = "#98c2d7";  
    }
    else if (val == "about") {
        var aboutlink = document.getElementById('about-link');
        aboutlink.style.borderBottom = "2px solid white";
        aboutlink.style.fontWeight = "bold";
        aboutlink.style.color = "white"; 
        
        var homelink = document.getElementById('home-link');
        homelink.style.borderBottom = "2px solid transparent";
        homelink.style.fontWeight = "normal";
        homelink.style.color = "#98c2d7";
        
        var projectlink = document.getElementById('project-link');
        projectlink.style.borderBottom = "2px solid transparent";
        projectlink.style.fontWeight = "normal";
        projectlink.style.color = "#98c2d7";

        var contactlink = document.getElementById('contact-link');
        contactlink.style.borderBottom = "2px solid transparent";
        contactlink.style.fontWeight = "normal";
        contactlink.style.color = "#98c2d7";
    }
    else if (val == "project") {
        var projectlink = document.getElementById('project-link');
        projectlink.style.borderBottom = "2px solid white";
        projectlink.style.fontWeight = "bold";
        projectlink.style.color = "white"; 
        
        var homelink = document.getElementById('home-link');
        homelink.style.borderBottom = "2px solid transparent";
        homelink.style.fontWeight = "normal";
        homelink.style.color = "#98c2d7";
        
        var aboutlink = document.getElementById('about-link');
        aboutlink.style.borderBottom = "2px solid transparent";
        aboutlink.style.fontWeight = "normal";
        aboutlink.style.color = "#98c2d7";

        var contactlink = document.getElementById('contact-link');
        contactlink.style.borderBottom = "2px solid transparent";
        contactlink.style.fontWeight = "normal";
        contactlink.style.color = "#98c2d7";
    }
    else if (val == "contact") {
        var contactlink = document.getElementById('contact-link');
        contactlink.style.borderBottom = "2px solid white";
        contactlink.style.fontWeight = "bold";
        contactlink.style.color = "white";    

        var homelink = document.getElementById('home-link');
        homelink.style.borderBottom = "2px solid transparent";
        homelink.style.fontWeight = "normal";
        homelink.style.color = "#98c2d7";
        
        var aboutlink = document.getElementById('about-link');
        aboutlink.style.borderBottom = "2px solid transparent";
        aboutlink.style.fontWeight = "normal";
        aboutlink.style.color = "#98c2d7";
        
        var projectlink = document.getElementById('project-link');
        projectlink.style.borderBottom = "2px solid transparent";
        projectlink.style.fontWeight = "normal";
        projectlink.style.color = "#98c2d7";
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
