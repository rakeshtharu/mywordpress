document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector("#header-carousel");

    if (!carousel) return; // Safety check in case carousel doesn't exist

    // Parallax effect on image: Adds slight movement on scroll or slide.
    carousel.addEventListener("slide.bs.carousel", function (e) {
        const nextImg = e.relatedTarget.querySelector(".hero-img");
        if (!nextImg) return;

        // Adjust for a more subtle parallax effect
        nextImg.style.transform = "scale(1.1) translateY(10px)";
    });

    carousel.addEventListener("slid.bs.carousel", function (e) {
        const activeImg = e.relatedTarget.querySelector(".hero-img");
        if (!activeImg) return;

        setTimeout(() => {
            activeImg.style.transform = "scale(1.15) translateY(-10px)";
        }, 50);
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    let lastScrollTop = 0;  // Track last scroll position

    window.addEventListener("scroll", function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Scroll down: minimize navbar
        if (scrollTop > lastScrollTop) {
            navbar.classList.add("minimized");
            navbar.classList.remove("sticky");
        } else {
            navbar.classList.remove("minimized");
            navbar.classList.add("sticky");
        }

        // When scrolling down past a certain point (e.g., 100px), make navbar sticky
        if (scrollTop > 100) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Prevent negative scroll values
    });
});