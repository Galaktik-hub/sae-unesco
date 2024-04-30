const links = document.querySelectorAll("nav li");
const nav = document.getElementById("nav");
const icons = document.getElementById("icons");


icons.addEventListener("click", () => {
    nav.classList.toggle("active");
});

links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    });
});

document.addEventListener("click", (event) => {
    const navArea = nav.contains(event.target); // Vérifie si le clic est à l'intérieur du menu
    const iconsArea = icons.contains(event.target); // Vérifie si le clic est sur l'icône de menu

    if (!navArea && !iconsArea) {
        // Si le clic n'est ni dans le menu ni sur l'icône de menu, fermer le menu
        nav.classList.remove("active");
    }
});
