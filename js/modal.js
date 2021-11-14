const myModal = document.getElementById("main-modal-box");

function modalFunction() {
  myModal.style.display = "block";
}

elements = document.getElementsByClassName("close-item-buttons");
const closeModal = function() {
  myModal.style.display = "none";
}
for (let i = 0 ; i < elements.length ; i ++) {
elements[i].addEventListener('click', closeModal);
}

