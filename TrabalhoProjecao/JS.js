document.addEventListener("DOMContentLoaded", function() {
    const dropdowns = document.querySelectorAll(".navbar .dropdown");

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener("mouseenter", function() {
            const icon = this.querySelector("i");
            if (icon) {
                icon.style.transition = "transform 0.3s";
                icon.style.transform = "rotate(180deg)";
            }
        });

        dropdown.addEventListener("mouseleave", function() {
            const icon = this.querySelector("i");
            if (icon) {
                icon.style.transform = "rotate(0deg)";
            }
        });
    });
});
