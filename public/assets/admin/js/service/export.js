$(function () {
    const type_export_selector = $("#type_export_selector");
    let type = type_export_selector.val();
    $(document).ready(function () {
        export_file();
        select_type();
    });

    function export_file() {
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
                            let date = $("#pariod_date").val(),
                                from_to = date.split(' '),
                                from = from_to[0],
                                to = from_to[2];
                            console.log(to);
                            //from = date_timestamp(from);
                            //to = date_timestamp(to);
                            "Valid" == t ?
                                $.ajax({
                                    xhrFields: {
                                        responseType: 'blob',
                                    },
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    type: "get",
                                    url: $("#app_url").val() + "/report/categories",
                                    data: {
                                        type: type,
                                        from: from,
                                        to: to,
                                    },
                                    success: function (result, status, xhr) {

                                        (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function () {
                                            e.removeAttribute("data-kt-indicator"), Swal.fire({
                                                text: "Customer list has been successfully exported!",
                                                icon: "success",
                                                buttonsStyling: !1,
                                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                                customClass: {confirmButton: "btn btn-primary"}
                                            }).then((function (t) {
                                                t.isConfirmed && (a.hide(), e.disabled = !1)
                                                var disposition = xhr.getResponseHeader('content-disposition');
                                                var matches = /"([^"]*)"/.exec(disposition);
                                                var filename = (matches != null && matches[1] ? matches[1] : 'categories.pdf');
                                                if (type == 1) {
                                                    filename = (matches != null && matches[1] ? matches[1] : 'categories.xlsx');
                                                } else if (type == 2) {
                                                    filename = (matches != null && matches[1] ? matches[1] : 'categories.csv');
                                                }
                                                var blob = new Blob([result], {
                                                    type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                                                });
                                                var link = document.createElement('a');
                                                link.href = window.URL.createObjectURL(blob);
                                                link.download = filename;

                                                document.body.appendChild(link);

                                                link.click();
                                                document.body.removeChild(link);
                                            }))
                                        }), 2e3));

                                    }
                                })
                                : Swal.fire({
                                    text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                    customClass: {confirmButton: "btn btn-primary"}
                                })
                        }))
                    })), n.addEventListener("click", (function (t) {
                        t.preventDefault(), Swal.fire({
                            text: "Are you sure you would like to cancel?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, cancel it!",
                            cancelButtonText: "No, return",
                            customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                        }).then((function (t) {
                            t.value ? (i.reset(), a.hide()) : "cancel" === t.dismiss && Swal.fire({
                                text: "Your form has not been cancelled!.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn btn-primary"}
                            })
                        }))
                    })), o.addEventListener("click", (function (t) {
                        t.preventDefault(), Swal.fire({
                            text: "Are you sure you would like to cancel?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, cancel it!",
                            cancelButtonText: "No, return",
                            customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                        }).then((function (t) {
                            t.value ? (i.reset(), a.hide()) : "cancel" === t.dismiss && Swal.fire({
                                text: "Your form has not been cancelled!.",
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
    }

    function select_type() {
        type_export_selector.on('change', function () {
            type = $(this).val();
        });
    }

    function date_timestamp(date) {
        date = date.split("-");
        console.log(date[2], date[1] - 1, date[0])
        date = new Date(date[2], date[1] - 1, date[0]);
        date = date.getTime();
        console.log(date)
        return date;
    }
});
