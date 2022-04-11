 $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#grnvalidate').validate({
    rules: {
      grn_number: {
        required: true,
        grn_number: true,
      },
      po_no: {
        required: true,
        po_no: true,
      },
      supplier_no: {
        required: true,
        supplier_no: true,
      },
      delivery_no: {
        required: true,
        delivery_no: true,
      },
      sdate: {
        required: true,
        sdate: true,
      },
      charging_details: {
        required: true
      },
    },
    messages: {
      grn_number: {
        required: "Please enter a email address",
        grn_number: "Please enter a vaild email address"
      },
        po_no: {
        required: "Please enter a email address",
        po_no: "Please enter a vaild email address"
      },
        supplier_no: {
        required: "Please enter a email address",
        supplier_no: "Please enter a vaild email address"
      },
        delivery_no: {
        required: "Please enter a email address",
        delivery_no: "Please enter a vaild email address"
      },
        sdate: {
        required: "Please enter a email address",
        sdate: "Please enter a vaild email address"
      },
      charging_details: {
        required: "Please provide a password",
        charging_details: "Your password must be at least 5 characters long"
      },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});