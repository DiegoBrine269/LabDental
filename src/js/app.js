let hamburger = document.querySelector(".hamburger");
let navbar = document.querySelector("#navbar");
let main = document.querySelector("main");

document.addEventListener("DOMContentLoaded", function(event) {
    menuBurger();
    onResizeWindow();
    navBarFunctionality();

    if (window.matchMedia("(min-width: 768px)").matches){ 
        navbar.classList.remove("invisible");
    }
    else{
        navbar.classList.add("invisible");
        hamburger.classList.remove("is-active");
    }
    
});

function menuBurger () {
    hamburger.addEventListener("click", function() {
        // Toggle class "is-active"
        hamburger.classList.toggle("is-active");

        if (hamburger.classList.contains("is-active")){
            
        }
        else {
            
        }
    
        hideNavbar();
        
    });
}

function onResizeWindow() {
    window.addEventListener('resize', function(){
        if (window.matchMedia("(min-width: 768px)").matches){ 
            navbar.classList.remove("invisible");
            hamburger.classList.remove("is-active");
            
        }
        else{
            navbar.classList.add("invisible");
        }
    });
}

//Toggles class "visible" to navbar
function hideNavbar() {
    navbar.classList.toggle("invisible");
}

function navBarFunctionality () {
    navbar.addEventListener('click', function (event) {
        if(window.matchMedia("(max-width: 768px)").matches){
            hideNavbar();
            hamburger.classList.remove("is-active");
        }
    })
}

