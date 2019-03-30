// JavaScript Document

 var inputs = $("form#myForm input, form#myForm textarea");

	var validateInputs = function validateInputs(inputs) {
      var validForm = true;
      inputs.each(function(index) {
        var input = $(this);
        if (!input.val() || (input.type === "radio" && !input.is(':checked'))) {
          $("#sub").attr("disabled", "disabled");
          validForm = false;
        }
      });
      return validForm;
    }


    inputs.each(function() {
      var input = $(this);
      if (input.type === "radio") {
        input.change(function() {
          if (validateInputs(inputs)) {
            $("#sub").removeAttr("disabled");
          }
        });
      } else {
        input.keyup(function() {
          if (validateInputs(inputs)) {
            $("#sub").removeAttr("disabled");
          }
        });
      }
    });