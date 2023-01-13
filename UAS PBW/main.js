function hamburgerMenu() {
    var x = document.querySelector('.dropdown-content-menu');
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";

    }
}