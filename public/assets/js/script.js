
const menu = document.querySelector('.manu');

if (menu.children.length > 0) {
    for (let i = 0; i < menu.children.length; i++) {
        menu.children[i].addEventListener('click', function (event) {
            alert("Clicked");
        });
    }
}

const menu1 = document.querySelector('.experience-grid');

if (menu1.children.length > 0) {
    for (let i = 0; i < menu1.children.length; i++) {
        menu1.children[i].addEventListener('click', function (event) {
            alert("Clicked");
        });
    }
}
const btn1 = document.getElementById("change");

btn1.addEventListener("click", function () {
    const userName = document.getElementById("innerText");
    if (userName) {
        userName.innerHTML = "I'm a Full-Stack Developer<br><span>Based in Dhaka</span>";
    }
});

