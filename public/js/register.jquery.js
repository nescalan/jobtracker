$(document).ready(function () {
  $(".content__form").submit(function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Clear any previous error messages
    $(".error-message").remove();

    // Validate each input field
    let isValid = true;

    // Full name validation
    const fullName = $("input[name='full-name']").val().trim();
    if (fullName === "") {
      isValid = false;
      $(
        "<div class='error-message'>Ingrese su nombre completo.</div>"
      ).insertAfter($("input[name='full-name']"));
    }

    // Company validation
    const company = $("input[name='company']").val().trim();
    if (company === "") {
      isValid = false;
      $(
        "<div class='error-message'>Ingrese el nombre de la empresa.</div>"
      ).insertAfter($("input[name='company']"));
    }

    // Email validation
    const email = $("input[name='email']").val().trim();
    if (email === "") {
      isValid = false;
      $(
        "<div class='error-message'>Ingrese un correo electrónico.</div>"
      ).insertAfter($("input[name='email']"));
    } else {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        isValid = false;
        $(
          "<div class='error-message'>Ingrese un correo electrónico válido.</div>"
        ).insertAfter($("input[name='email']"));
      }
    }

    // Password validation
    const password = $("input[name='password']").val().trim();
    const password2 = $("input[name='password2']").val().trim();
    if (password === "") {
      isValid = false;
      $("<div class='error-message'>Ingrese una contraseña.</div>").insertAfter(
        $("input[name='password']")
      );
    } else if (password !== password2) {
      isValid = false;
      $(
        "<div class='error-message'>Las contraseñas no coinciden.</div>"
      ).insertAfter($("input[name='password2']"));
    }

    // If the form is valid, submit it
    if (isValid) {
      this.submit();
    }
  });
});
