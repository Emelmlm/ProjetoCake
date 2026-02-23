// const linkBotao = document.querySelector("#linkMassa2")

// linkBotao.addEventListener("click", function(){
//     alert("alerta")
// })

const openModalButton = document.querySelectorAll(".open-modal");
const closeModalButton = document.querySelectorAll(".close-modal");
const modals = document.querySelectorAll(".modal");
const fade = document.querySelectorAll(".fade");

// const toggleModal = () => {
//     [modal, fade].forEach((el) => el.classList.toggle("hide"));
// };

// [openModalButton, closeModalButton, fade].forEach((el) => {
//     el.addEventListener("click", () => toggleModal());
// });

openModalButton.forEach(button => {
    button.addEventListener("click", (event) => {
        event.preventDefault();

        const modalIndex = button.dataset.modalIndex;
        const modal = document.querySelector(`#modal${modalIndex}`);
        modal.classList.toggle("hide");
        fade.classList.toggle("hide");

    })
})

closeModalButton.forEach(button => {
    button.addEventListener("click", (event) => {
        event.preventDefault();

        const modal = event.currentTarget.closest(".modal");

        if (modal) {
            modal.classList.add("hide");
            fade.classList.add("hide");
        }
    })
})

