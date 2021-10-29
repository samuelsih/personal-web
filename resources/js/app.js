//custom JS
//Clipboard.js
const mailLink = new ClipboardJS('.mail__btn');

// to display popup
const popup = document.querySelector('.popup');
const mailBtn = document.querySelector('.mail__btn');

mailBtn.addEventListener("click", () => {
    console.log("clik");

    popup.classList.add("active");

    setTimeout(() => {
        popup.classList.remove("active");
    }, 3000);
});
