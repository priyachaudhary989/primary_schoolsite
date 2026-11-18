
document.addEventListener("DOMContentLoaded", function () {

    const toggle = document.querySelector(".toggle");
    const nav = document.querySelector(".nav nav");

    if (toggle && nav) {

        toggle.addEventListener("click", function () {

            nav.classList.toggle("open");

            const isOpen = nav.classList.contains("open");

            toggle.setAttribute("aria-expanded", isOpen);
            toggle.innerHTML = isOpen ? "✕" : "☰";

        });

        nav.querySelectorAll("a").forEach(function (link) {

            link.addEventListener("click", function () {

                nav.classList.remove("open");

                toggle.setAttribute("aria-expanded", "false");
                toggle.innerHTML = "☰";

            });

        });

    }

});
