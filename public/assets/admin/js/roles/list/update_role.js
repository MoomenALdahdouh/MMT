$(function () {
    const language = $('#language').val();
    const add_cart_button = $("#add_cart_button"),
        app_url = $("#app_url").val(),
        role_id = $("#role_id").val(),
        action_permission_selected_input = $(".action_permission_selected"),
        permission_selected_input = $(".permission_selected");
    let permissions = [],
        old_permissions = JSON.parse($("#role_permissions_array").val());

    $(document).ready(function () {
        roles();
        old_permissions_selected();
        permissions_selected();
    });

    function Action(id, permission_id, key) {
        this.id = id;
        this.permission_id = permission_id;
        this.key = key;
    }

    function Permission(id, actions) {
        this.id = id;
        this.actions = actions;
    }

    function old_permissions_selected() {
        $(".kt_modal_edit_role").click(function () {
            let role_id = $(this).data("id");
            console.log(role_id);

            $('#kt_modal_update_role_form input[type=checkbox]').each(function () {
                console.log($(this).val());
            });
        })
    }

    function permissions_selected() {
        action_permission_selected_input.click(function () {
            let permission_id = $(this).data("id"),
                action_id = $(this).val(),
                key = action_id + "" + permission_id,
                action = new Action(action_id, permission_id, key),
                old_action = permissions.filter(x => x.key === key);
            if (old_action.length === 0)
                permissions.push(action);
            else {
                permissions = permissions.filter(x => x.key !== key);
            }
        });
    }

    function roles() {
        "use strict";
        var KTUsersUpdateRole = function () {
            const t = document.getElementById("kt_modal_update_role"),
                e = t.querySelector("#kt_modal_update_role_form"),
                n = new bootstrap.Modal(t);
            return {
                init: function () {
                    (() => {
                        var o = FormValidation.formValidation(e, {
                            fields: {role_name: {validators: {notEmpty: {message: "اسم الدور مطلوب"}}}},
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger,
                                bootstrap: new FormValidation.plugins.Bootstrap5({
                                    rowSelector: ".fv-row",
                                    eleInvalidClass: "",
                                    eleValidClass: ""
                                })
                            }
                        });
                        t.querySelector('[data-kt-roles-modal-action="close"]').addEventListener("click", (t => {
                            t.preventDefault(), Swal.fire({
                                text: language === "en" ? "Are you sure you would like to close?" : "هل أنت متأكد أنك تريد الإغلاق؟",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Yes, close it!" : "نعم ، أغلقه!",
                                cancelButtonText: language === "en" ? "No, return" : "لا رجوع",
                                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                            }).then((function (t) {
                                t.value && n.hide()
                            }))
                        })), t.querySelector('[data-kt-roles-modal-action="cancel"]').addEventListener("click", (t => {
                            t.preventDefault(), Swal.fire({
                                text: language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Yes, cancel it!" : "نعم ، قم بإلغائها!",
                                cancelButtonText: language === "en" ? "No, return" : "لا رجوع",
                                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                            }).then((function (t) {
                                t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                                    text: language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                    customClass: {confirmButton: "btn btn-primary"}
                                })
                            }))
                        }));
                        const r = t.querySelector('[data-kt-roles-modal-action="submit"]');
                        r.addEventListener("click", (function (t) {
                            t.preventDefault(), o && o.validate().then((function (t) {
                                console.log("validated!"), "Valid" == t ?
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        type: "POST",
                                        url: app_url + "/admin/users-roles/update/" + role_id,
                                        data: {
                                            name: $("#permission_name_update").val(),
                                            permissions: permissions,
                                        },
                                        success: function (response) {
                                            if ($.isEmptyObject(response.error)) {
                                                (r.setAttribute("data-kt-indicator", "on"), r.disabled = !0, setTimeout((function () {
                                                    r.removeAttribute("data-kt-indicator"), r.disabled = !1,
                                                        Swal.fire({
                                                            text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                                                            icon: "success",
                                                            buttonsStyling: !1,
                                                            confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                                            customClass: {confirmButton: "btn btn-primary"}
                                                        }).then((function (t) {
                                                            t.isConfirmed && n.hide()
                                                        }))
                                                }), 2e3));
                                                disabled_button(true);
                                                $("#permissions_content").html(response);
                                            } else {
                                                Swal.fire({
                                                    text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                                                    icon: "error",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                                    customClass: {confirmButton: "btn btn-primary"}
                                                })
                                                print_error(response.error);
                                            }
                                        }
                                    }) : Swal.fire({
                                        text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                        customClass: {confirmButton: "btn btn-primary"}
                                    })
                            }))
                        }))
                    })(), (() => {
                        const t = e.querySelector("#kt_roles_select_all"), n = e.querySelectorAll('[type="checkbox"]');
                        t.addEventListener("change", (t => {
                            if (t.target.checked) {
                                permissions = [];
                                n.forEach((e => {
                                    e.checked = t.target.checked
                                    let permission_id = e.getAttribute("data-id"),
                                        action_id = e.value,
                                        key = action_id + "" + permission_id,
                                        action = new Action(action_id, permission_id, key),
                                        old_action = permissions.filter(x => x.key === key);
                                    if (old_action.length === 0)
                                        permissions.push(action);
                                    else {
                                        permissions = permissions.filter(x => x.key !== key);
                                    }
                                }))
                            } else {
                                permissions = [];
                                n.forEach((e => {
                                    e.checked = t.target.checked
                                }))
                            }
                        }))
                    })()
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function () {
            KTUsersUpdateRole.init()
        }));
    }

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_update_error").html(val);
            $("#" + index).focus();
        });
    }
});
