document.getElementById("hamburger-icon").addEventListener("click", function() {
    var body = document.body;
    var menu = document.querySelector(".navbar-sidebar");

    // Toggle visibility class on body
    if (body.classList.contains('navbar-sidebar--show')) {
        body.classList.remove('navbar-sidebar--show');
    } else {
        body.classList.add('navbar-sidebar--show');
    }

    // Toggle animation class on menu
    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
    } else {
        menu.classList.add('active');
    }
});

document.addEventListener("click", function(event) {
    var body = document.body;
    var menu = document.querySelector(".navbar-sidebar");

    if (body.classList.contains('navbar-sidebar--show') && !menu.contains(event.target) && !document.getElementById("hamburger-icon").contains(event.target)) {
        body.classList.remove('navbar-sidebar--show');
        menu.classList.remove('active');  // Ensure the menu also removes its animation class
    }
});
