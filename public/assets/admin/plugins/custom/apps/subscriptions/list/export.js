"use strict";

// Class definition
var KTSubscriptionsExport = function () {
    var element;
    var submitButton;
    var cancelButton;
    var closeButton;
    var validator;
    var form;
    var modal;

    // Init form inputs
    var handleForm = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'date': {
                        validators: {
                            notEmpty: {
                                message: 'Date range is required'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Action buttons
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        setTimeout(function () {
                            submitButton.removeAttribute('data-kt-indicator');

                            Swal.fire({
                                text: "Customer list has been successfully exported!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();

                                    // Enable submit button after loading
                                    submitButton.disabled = false;
                                }
                            });

                            //form.submit(); // Submit form
                        }, 2000);
                    } else {
                        Swal.fire({
                            text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });

        cancelButton.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                text: language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",
                cancelButtonText: language === "en" ? "No, return" : "لا تراجع",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        closeButton.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                text: language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",
                cancelButtonText: language === "en" ? "No, return" : "لا تراجع",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }

    var initForm = function () {
        const datepicker = form.querySelector("[name=date]");

        // Handle datepicker range -- For more info on flatpickr plugin, please visit: https://flatpickr.js.org/
        $(datepicker).flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            mode: "range"
        });
    }

    return {
        // Public functions
        init: function () {
            // Elements
            element = document.querySelector('#kt_subscriptions_export_modal');
            modal = new bootstrap.Modal(element);

            form = document.querySelector('#kt_subscriptions_export_form');
            submitButton = form.querySelector('#kt_subscriptions_export_submit');
            cancelButton = form.querySelector('#kt_subscriptions_export_cancel');
            closeButton = element.querySelector('#kt_subscriptions_export_close');

            handleForm();
            initForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSubscriptionsExport.init();
});
