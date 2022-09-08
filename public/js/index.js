
let sidebar = document.querySelector("#sidebar");
let menuToggleButton = document.querySelector("#menuToggleButton");
let closeModalButton = document.querySelector('#closeModalButton');

const toogleModal = ()=>{
    sidebar.classList.toggle('hidden')
}

menuToggleButton.addEventListener('click',toogleModal)

closeModalButton.addEventListener('click',toogleModal)

