class ContactForm {
  constructor() {
    this.init();
  }

  init() {
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
}

export default ContactForm;
