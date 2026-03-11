// const linkBotao = document.querySelector("#linkMassa2")

// linkBotao.addEventListener("click", function(){
//     alert("alerta")
// })

const openModalButton = document.querySelectorAll(".open-modal");
const closeModalButton = document.querySelectorAll(".close-modal");
const fade = document.querySelector(".fade");

openModalButton.forEach(button => {
    button.addEventListener("click", (event) => {
        event.preventDefault();

        const modalIndex = button.dataset.modalIndex;
        const modal = document.querySelector(`#modal${modalIndex}`);

        if (modal && fade) {
            modal.classList.remove("hide");
            fade.classList.remove("hide");
        }
    })
})

const closeModal = () => {
    const activeModal = document.querySelector(".modal:not(.hide)");
    if (activeModal) activeModal.classList.add("hide");
    if (fade) fade.classList.add("hide");
}

closeModalButton.forEach(button => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        closeModal();
    })
})

if (fade) {
    fade.addEventListener("click", () => {
        closeModal();
    })
}

