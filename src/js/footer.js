import { Popover } from "bootstrap";

// Tooltip Bootstrap
const popoverTriggerList = document.querySelectorAll(
  '[data-bs-toggle="popover"]'
);
const popoverList = [...popoverTriggerList].map(
  (popoverTriggerEl) => new Popover(popoverTriggerEl)
);

// Whatsapp
let elementoRebote = document.querySelector(".rebote");

function reiniciarAnimacion() {
  elementoRebote.style.animation = "none"; // Detener la animación actual
  setTimeout(function () {
    elementoRebote.style.animation = "rebote 1s"; // Reiniciar la animación
  }, 0);
}

// Usar setInterval para reiniciar la animación cada 4 segundos de forma infinita
setInterval(reiniciarAnimacion, 15000);
