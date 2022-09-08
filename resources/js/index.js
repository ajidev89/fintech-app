
let sidebar = document.querySelector("#sidebar");
let menuToggleButton = document.querySelector("#menuToggleButton");

menuToggleButton.addEventListener('click',() => {
    sidebar.classList.toggle('hidden')
})
