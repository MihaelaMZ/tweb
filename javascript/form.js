$(document).ready(function () {
  $("#singupform").validate({
    rules: {
      uname: {
        required: true,
        minlength: 5,
      },
      email: {
        required: true,
        email: true,
      },
      "current-password": {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      uname: {
        minlength: "Introduceți mai mult de 5 caractere",
      },
      email: {
        email: "Email format: abc@domain.tld",
      },
      "current-password": {
        minlength: "Introduceți mai mult de 8 caractere",
      },
    },
  });

  $("#singinform").validate({
    rules: {
      uname: {
        required: true,
        minlength: 5,
      },
      "current-password": {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      uname: {
        minlength: "Introduceți mai mult de 5 caractere",
      },
      "current-password": {
        minlength: "Introduceți mai mult de 8 caractere",
      },
    },
  });

  $("#contactus").validate({
    rules: {
      firstname: {
        required: true,
        minlength: 3,
      },
      lastname: {
        required: true,
        minlength: 3,
      },
      country: {
        required: true,
        minlength: 3,
      },
      subject: {
        required: true,
        minlength: 10,
      },
    },
    messages: {
      firstname: {
        minlength: "Introduceți mai mult de 3 caractere",
      },
      lastname: {
        minlength: "Introduceți mai mult de 3 caractere",
      },
      country: {
        minlength: "Introduceți mai mult de 3 caractere",
      },
      subject: {
        minlength: "Introduceți mai mult de 10 caractere",
      },
    },
  });
});
