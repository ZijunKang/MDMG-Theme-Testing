document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.querySelector(".hamburger-menu");
    const mobileMenu = document.querySelector(".mobile-menu");

    menuButton.addEventListener("click", function () {
        mobileMenu.classList.toggle("show-menu");
    });

    // Close mobile menu when resizing to desktop
    window.addEventListener("resize", function () {
        if (window.innerWidth > 768) {
            mobileMenu.classList.remove("show-menu");
        }
    });
});
