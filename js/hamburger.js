document.getElementById("hamburger-icon").addEventListener("click", function() {
    var body = document.body;
    var menu = document.querySelector(".navbar-sidebar");
    var backdrop = document.querySelector(".navbar-sidebar__backdrop");

    // Toggle visibility class on body
    if (body.classList.contains('navbar-sidebar--show')) {
        body.classList.remove('navbar-sidebar--show');
        backdrop.classList.remove('active');  // assuming there's a similar animation for the backdrop
    } else {
        body.classList.add('navbar-sidebar--show');
        backdrop.classList.add('active');  // assuming there's a similar animation for the backdrop
    }

    // Toggle animation class on menu
    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
    } else {
        menu.classList.add('active');
    }
});

var closeBtn = document.getElementById("navbar-sidebar");  // Define the closeBtn variable outside to use it in multiple places
closeBtn.addEventListener("click", function(event) {
    event.stopPropagation();  // Prevent the event from bubbling up

    var body = document.body;
    var menu = document.querySelector(".navbar-sidebar");
    var backdrop = document.querySelector(".navbar-sidebar__backdrop");

    // Logic to close the navbar
    body.classList.remove('navbar-sidebar--show');
    menu.classList.remove('active');
    backdrop.classList.remove('active');
});

document.addEventListener("click", function(event) {
    var body = document.body;
    var menu = document.querySelector(".navbar-sidebar");
    var backdrop = document.querySelector(".navbar-sidebar__backdrop");

    if (body.classList.contains('navbar-sidebar--show') && 
        (!menu.contains(event.target) || event.target === closeBtn) && 
        !document.getElementById("hamburger-icon").contains(event.target)) {
        
        body.classList.remove('navbar-sidebar--show');
        menu.classList.remove('active');
        backdrop.classList.remove('active');  // hide the overlay using its class
    }
});
