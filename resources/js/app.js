import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener("load", function () {
    const loader = document.querySelector("#preloader");

    setTimeout(() => {
        loader.classList.add("load-finish");
    }, 1000);
});