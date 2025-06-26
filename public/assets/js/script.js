
// const menu = document.querySelector('.manu');

// if (menu.children.length > 0) {
//     for (let i = 0; i < menu.children.length; i++) {
//         menu.children[i].addEventListener('click', function (event) {
//             alert("Clicked");
//         });
//     }
// }




// const btn1 = document.getElementById("change");

// btn1.addEventListener("click", function () {
//     const userName = document.getElementById("innerText");
//     if (userName) {
//         userName.innerHTML = "I'm a Full-Stack Developer<br><span>Based in Dhaka</span>";
//     }
// });




function showInfo(title,discription,imgUrl){
    const displayInfo = document.getElementById("infoDisplay");
    displayInfo.innerHTML=`
    <div class="exp-item container">
        <img src="${imgUrl}" >
        <h2>${title}</h2>
        <br>
        <p>${discription}</p>
    </div>
    
    `;
}


