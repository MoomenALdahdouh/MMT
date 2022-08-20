"use strict";
var KTCustomersExport = function () {
    var t, e, n, o, r, i, a;
    return {
        init: function () {
            t = document.querySelector("#kt_customers_export_modal"), a = new bootstrap.Modal(t), i = document.querySelector("#kt_customers_export_form"), e = i.querySelector("#kt_customers_export_submit"), n = i.querySelector("#kt_customers_export_cancel"), o = t.querySelector("#kt_customers_export_close"), r = FormValidation.formValidation(i, {
                fields: {date: {validators: {notEmpty: {message: "Date range is required"}}}},
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), e.addEventListener("click", (function (t) {
                t.preventDefault(), r && r.validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function () {
                        e.removeAttribute("data-kt-indicator"), Swal.fire({
                            text: "Customer list has been successfully exported!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                            customClass: {confirmButton: "btn btn-primary"}
                        }).then((function (t) {
                            disabled_button(true);
                            t.isConfirmed && (a.hide(), e.disabled = !1)
                        }))
                    }), 2e3)) : Swal.fire({
                        text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }))
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
                    t.value ? (i.reset(), a.hide()) : "cancel" === t.dismiss && Swal.fire({
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
                    t.value ? (i.reset(), a.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }))
            })), function () {
                const t = i.querySelector("[name=date]");
                $(t).flatpickr({altInput: !0, altFormat: "F j, Y", dateFormat: "Y-m-d", mode: "range"})
            }()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTCustomersExport.init()
}));
