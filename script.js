let btns = document.getElementsByClassName("about-link");

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        let current = document.getElementsByClassName("link-active");
        current[0].className = current[0].className.replace(" link-active", "");
        this.className += " link-active";
    });
}
