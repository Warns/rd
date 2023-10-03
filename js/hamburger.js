document.getElementById("hamburger-icon").addEventListener("click", function() {
    var menu = document.getElementById("slide-in-menu");
    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
    } else {
        menu.classList.add('active');
    }
});

document.addEventListener("click", function(event) {
    var menu = document.getElementById("slide-in-menu");

    if (menu.classList.contains('active') && !menu.contains(event.target) && !document.getElementById("hamburger-icon").contains(event.target)) {
        menu.classList.remove('active');
    }
});
