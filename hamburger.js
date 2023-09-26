document.getElementById("hamburger-icon").addEventListener("click", function() {
    var menu = document.getElementById("slide-in-menu");
    if (menu.style.left === "0px") {
        menu.style.left = "-100%";
    } else {
        menu.style.left = "0px";
    }
});

// This will close the slide-in menu if you click outside of it
document.addEventListener("click", function(event) {
    var menu = document.getElementById("slide-in-menu");

    // Check if menu is open and click is outside both the menu and the hamburger icon
    if (menu.style.left === "0px" && !menu.contains(event.target) && !document.getElementById("hamburger-icon").contains(event.target)) {
        menu.style.left = "-100%";
    }
});
