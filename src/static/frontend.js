// ---------- JS THEME
(() => {
  "use strict";

  const getStoredTheme = () => localStorage.getItem("theme");
  const setStoredTheme = (theme) => localStorage.setItem("theme", theme);

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme();
    if (storedTheme) {
      return storedTheme;
    }

    return window.matchMedia("(prefers-color-scheme: dark)").matches
      ? "dark"
      : "light";
  };

  const setTheme = (theme) => {
    if (
      theme === "auto" &&
      window.matchMedia("(prefers-color-scheme: dark)").matches
    ) {
      document.documentElement.setAttribute("data-bs-theme", "dark");
    } else {
      document.documentElement.setAttribute("data-bs-theme", theme);
    }
  };

  setTheme(getPreferredTheme());

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector("#bd-theme");

    if (!themeSwitcher) {
      return;
    }

    const themeSwitcherText = document.querySelector("#bd-theme-text");
    const activeThemeIcon = document.querySelector(".theme-icon-active use");
    const btnToActive = document.querySelector(
      `[data-bs-theme-value="${theme}"]`
    );
    const svgOfActiveBtn = btnToActive
      .querySelector("svg use")
      .getAttribute("href");

    document.querySelectorAll("[data-bs-theme-value]").forEach((element) => {
      element.classList.remove("active");
      element.setAttribute("aria-pressed", "false");
    });

    btnToActive.classList.add("active");
    btnToActive.setAttribute("aria-pressed", "true");
    activeThemeIcon.setAttribute("href", svgOfActiveBtn);
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
    themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

    if (focus) {
      themeSwitcher.focus();
    }
  };

  window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", () => {
      const storedTheme = getStoredTheme();
      if (storedTheme !== "light" && storedTheme !== "dark") {
        setTheme(getPreferredTheme());
      }
    });

  window.addEventListener("DOMContentLoaded", () => {
    showActiveTheme(getPreferredTheme());

    document.querySelectorAll("[data-bs-theme-value]").forEach((toggle) => {
      toggle.addEventListener("click", () => {
        const theme = toggle.getAttribute("data-bs-theme-value");
        setStoredTheme(theme);
        setTheme(theme);
        showActiveTheme(theme, true);
      });
    });
  });
})();

// ---------- JS Footer
(() => {
  // Tooltip Bootstrap
  const popoverTriggerList = document.querySelectorAll(
    '[data-bs-toggle="popover"]'
  );

  const popoverList = [...popoverTriggerList].map(
    (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
  );

  // Whatsapp
  let elementoRebote = document.querySelector(".rebote");

  function reiniciarAnimacion() {
    if (elementoRebote) {
      elementoRebote.style.animation = "none"; // Detener la animación actual
      setTimeout(function () {
        elementoRebote.style.animation = "rebote 1s"; // Reiniciar la animación
      }, 0);
    }
  }

  // Usar setInterval para reiniciar la animación cada 4 segundos de forma infinita
  setInterval(reiniciarAnimacion, 15000);
})();

// ---------- JS FORMULARIOS
(() => {
  function initContactForm() {
    const contactForm = document.querySelector(".form_contact_page");
    if (contactForm) {
      contactForm.addEventListener(
        "wpcf7mailsent",
        (event) => {
          // do the magic
          console.log("-------- INFO - CONTACT ------------");
          console.log(event);
        },
        false
      );
    }
  }

  function initLandingForm() {
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
            handleSubmitInfoLanding(event.detail.inputs);
          }
        },
        false
      );
    }
  }

  async function handleSubmitInfoLanding(inputs) {
    try {
      let inputName = inputs.find((tmp) => tmp.name === "names");
      let inputEmail = inputs.find((tmp) => tmp.name === "email");
      let inputPhone = inputs.find((tmp) => tmp.name === "phone");
      let inputActivity = inputs.find((tmp) => tmp.name === "activity");
      const nonce = INFO_GLOCAL_THEME_JS.nonce;

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
    } catch (error) {
      console.log(error);
    }
  }

  // Inicializar
  initContactForm();
  initLandingForm();
})();
