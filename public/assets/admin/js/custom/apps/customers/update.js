"use strict";
var KTModalUpdateCustomer = function () {
    var t, e, n, o, c, r;
    return {
        init: function () {
            t = document.querySelector("#kt_modal_update_customer"), r = new bootstrap.Modal(t), c = t.querySelector("#kt_modal_update_customer_form"), e = c.querySelector("#kt_modal_update_customer_submit"), n = c.querySelector("#kt_modal_update_customer_cancel"), o = t.querySelector("#kt_modal_update_customer_close"), e.addEventListener("click", (function (t) {
                t.preventDefault(), e.setAttribute("data-kt-indicator", "on"), setTimeout((function () {
                    e.removeAttribute("data-kt-indicator"), Swal.fire({
                        text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn btn-primary"}
                    }).then((function (t) {
                        disabled_button(true);
                        t.isConfirmed && r.hide()
                    }))
                }), 2e3)
            })), n.addEventListener("click", (function (t) {
                t.preventDefault(), Swal.fire({
                    text: language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",
                    cancelButtonText: language === "en" ? "No, return" : "لا تراجع",
                    customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                }).then((function (t) {
                    t.value ? (c.reset(), r.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }))
            })), o.addEventListener("click", (function (t) {
                t.preventDefault(), Swal.fire({
                    text: language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",
                    cancelButtonText: language === "en" ? "No, return" : "لا تراجع",
                    customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                }).then((function (t) {
                    t.value ? (c.reset(), r.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTModalUpdateCustomer.init()
}));
