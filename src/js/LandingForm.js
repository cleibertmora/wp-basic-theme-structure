import { nonce, urlAjax } from "../global";

class LandingForm {
  constructor() {
    this.init();
  }

  init() {
    // JS para el LANDING
    const scrollButton = document.getElementById("scrollButton");
    const scrollButton2 = document.getElementById("scrollButton2"); // Nuevo botón
    const targetSection = document.getElementById("targetSection"); // Sección original
    const otraSeccion = document.getElementById("otraSeccion"); // Nueva sección

    if (scrollButton) {
      scrollButton.addEventListener("click", function () {
        if (targetSection) {
          targetSection.scrollIntoView({
            behavior: "smooth",
          });
        }
      });
    }

    if (scrollButton2) {
      scrollButton2.addEventListener("click", function () {
        if (otraSeccion) {
          otraSeccion.scrollIntoView({
            behavior: "smooth",
          });
        }
      });
    }

    // Formulario
    const contactForm = document.querySelector(".form_landind_page");
    if (contactForm) {
      contactForm.addEventListener(
        "wpcf7mailsent",
        (event) => {
          // do the magic
          // console.log("-------- INFO - LANDING ------------");
          // console.log(event);

          // Envio de datos
          if (event.detail && event.detail.inputs) {
            this.handleSubmitInfo(event.detail.inputs);
          }
        },
        false
      );
    }
  }

  async handleSubmitInfo(inputs) {
    try {
      let inputName = inputs.find((tmp) => tmp.name === "names");
      let inputEmail = inputs.find((tmp) => tmp.name === "email");
      let inputPhone = inputs.find((tmp) => tmp.name === "phone");
      let inputActivity = inputs.find((tmp) => tmp.name === "activity");

      const data = new FormData();
      data.append("action", "submit_form_info_landing");
      data.append("_ajax_nonce", nonce);
      data.append("name", inputName ? inputName.value : "");
      data.append("email", inputEmail ? inputEmail.value : "");
      data.append("phone", inputPhone ? inputPhone.value : "");
      data.append("activity", inputActivity ? inputActivity.value : "");

      const response = await fetch(urlAjax, {
        method: "POST",
        body: data,
      });

      const text = await response.text();
    } catch (error) {}
  }
}

export default LandingForm;
