"use strict";

// Class definition
var KTModalUpdateCustomer = function () {
    var element;
    var submitButton;
    var cancelButton;
    var closeButton;
    var form;
    var modal;

    // Init form inputs
    var initForm = function () {
        // Action buttons
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Show loading indication
            submitButton.setAttribute('data-kt-indicator', 'on');

            // Simulate form submission
            setTimeout(function () {
                // Simulate form submission
                submitButton.removeAttribute('data-kt-indicator');

                // Show popup confirmation
                Swal.fire({
                    text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function (result) {
                    if (result.isConfirmed) {
                        modal.hide();
                    }
                });

                //form.submit(); // Submit form
            }, 2000);
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

    return {
        // Public functions
        init: function () {
            // Elements
            element = document.querySelector('#kt_modal_update_customer');
            modal = new bootstrap.Modal(element);

            form = element.querySelector('#kt_modal_update_customer_form');
            submitButton = form.querySelector('#kt_modal_update_customer_submit');
            cancelButton = form.querySelector('#kt_modal_update_customer_cancel');
            closeButton = element.querySelector('#kt_modal_update_customer_close');

            initForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTModalUpdateCustomer.init();
});
