function selectTime(option) {
  var customFieldInput = document.querySelector(".custom-field");
  document.querySelector(".time-dropdown-button").textContent = option;
  if (option === "Preferred Project Duration") {
    customFieldInput.style.display = "block";
  } else {
    customFieldInput.style.display = "none";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var dropdownButton = document.querySelector(".budget-dropdown-button");
  var dropdownContent = document.querySelector(".budget-dropdown-content");

  dropdownButton.addEventListener("click", function () {
    dropdownContent.style.display =
      dropdownContent.style.display === "block" ? "none" : "block";
  });

  // Close the dropdown if the user clicks outside of it
  window.addEventListener("click", function (event) {
    if (!event.target.matches(".budget-dropdown-button")) {
      dropdownContent.style.display = "none";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var dropdownButton = document.querySelector(".time-dropdown-button");
  var dropdownContent = document.querySelector(".time-dropdown-content");

  dropdownButton.addEventListener("click", function () {
    dropdownContent.style.display =
      dropdownContent.style.display === "block" ? "none" : "block";
  });

  // Close the dropdown if the user clicks outside of it
  window.addEventListener("click", function (event) {
    if (!event.target.matches(".time-dropdown-button")) {
      dropdownContent.style.display = "none";
    }
  });
});

function selectBudget(budget) {
  document.querySelector(".budget-dropdown-button").textContent = budget;
  if (budget === "Budget Planner") {
    document.querySelector(".custom-field-input").style.display = "block";
  } else {
    document.querySelector(".custom-field-input").style.display = "none";
  }
}

/* Password Field */
document.addEventListener("DOMContentLoaded", function () {
  const passwordField = document.getElementById("password-field");
  const toggleIcon = document.getElementById("toggle-icon");
  const togglePassword = () => {
    if (passwordField.type === "password") {
      passwordField.type = "text";
      toggleIcon.classList.remove("fa-eye");
      toggleIcon.classList.add("fa-eye-slash");
    } else {
      passwordField.type = "password";
      toggleIcon.classList.remove("fa-eye-slash");
      toggleIcon.classList.add("fa-eye");
    }
  };

  if (toggleIcon) {
    toggleIcon.addEventListener("click", togglePassword);
  }
});

document
  .getElementById("addFieldButton")
  .addEventListener("click", function () {
    console.log("addFieldButton clicked");
    var newFieldContainer = document.createElement("div");

    var newField = document.createElement("textarea");
    newField.type = "textarea";
    newField.placeholder = "Write Your Requirement?";

    var removeButton = document.createElement("button");
    removeButton.textContent = "Remove";
    removeButton.addEventListener("click", function () {
      newFieldContainer.remove();
    });

    newFieldContainer.appendChild(newField);
    newFieldContainer.appendChild(removeButton);

    document.getElementById("fieldContainer").appendChild(newFieldContainer);
  });

// jQuery Code here
(function ($) {
  $(document).ready(function () {
    // Nice select
    $("select").niceSelect();

    // Step up functionalities
    $(document).on("click", ".next-step", function (event) {
      event.preventDefault();
      currentStep++;
      if (currentStep < steps.length) {
        showStep(currentStep);
      } else {
        // Handle form submission or completion here
      }
    });

    // Save Form Data with AJAX
    $("#submit-btn").on("click", function (e) {
      e.preventDefault();

      // Get form data
      var software = $('input[name="software"]').val();
      var website = $('input[name="website"]').val();
      var mobileApp = $('input[name="mobile-app"]').val();
      var requirement = $("#requirement").val();
      var firstName = $('input[name="first-name"]').val();
      var address = $('input[name="address"]').val();
      var email = $('input[name="email"]').val();
      var number = $('input[name="number"]').val();
      var watsAppNumber = $('input[name="whats-app-number"]').val();

      $.ajax({
        type: "POST",
        url: "../../imjol-contact-form.php",
        data: {
          software: software,
          website: website,
          mobileApp: mobileApp,
          requirement: requirement,
          firstName: firstName,
          address: address,
          email: email,
          number: number,
          watsAppNumber: watsAppNumber,
        },
        success: function (response) {},
      });
    });
  });
})(jQuery);
