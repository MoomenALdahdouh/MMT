$(function () {
    const language = $('#language').val(),
        add_user_form = document.getElementById("kt_modal_edit_user_form"),
        submit_button = document.getElementById('kt_modal_update_user_submit'),
        discard_button = document.getElementById('kt_modal_update_user_submit'),
        id = $('#user_id').val(),
        app_url = $('#app_url').val(),
        name_input = $(" #name"),
        email_input = $(" #email"),
        mobile_input = $(" #mobile"),
        password_input = $(" #password"),
        password_confirmation_input = $(" #password_confirmation"),
        uploaded_image = $(" #uploaded_image"),
        uploaded_image_view = $(" #uploaded_image_view"),
        image_file_input = $(" #image_file_input");

    let image_updated = 0;

    $(document).ready(function () {
        "use strict"
        image_update();
        update_user();
        //discard_update();
    });

    function update_user() {
        submit_button.addEventListener('click', function () {
            console.log("sss")
            $(".errors").html("");
            let name = name_input.val(),
                email = email_input.val(),
                mobile = mobile_input.val(),
                password = password_input.val(),
                password_confirm = password_confirmation_input.val(),
                user_image = prepare_image_base64(uploaded_image.css('background-image'));

            if (user_image == "none") {
                user_image = "";
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/admin/account/update",
                data: {
                    name: name,
                    email: email,
                    mobile: mobile,
                    password: password,
                    password_confirmation: password_confirm,
                    user_image: user_image,
                    image_updated: image_updated,
                },
                success: function (response) {
                    if ($.isEmptyObject(response.error)) {
                        success_submit();
                        $(".errors").html("");
                    } else {
                        failed_submit(response.error);
                    }
                }
            })
        })
    }

    function success_submit() {
        //Success Submit
        disabled_button(true);
        $(".errors").html("");
        //add_user_form.attr("data-kt-redirect", history.back());
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Form has been successfully submitted!" : "تم تعديل البيانات بنجاح!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            }).then((function (e) {
                e.isConfirmed && (submit_button.disabled = !1, history.back())
            }))
            submit_button.disabled = !1
        }), 1000));//2e3 == 1000
    }

    function failed_submit(errors) {
        disabled_button(false);
        //Failed Submit
        $(".errors").html("");
        console.log(errors);
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            })
            submit_button.disabled = !1;
            print_error(errors);
        }), 1000));
    }

    function prepare_image_base64(image) {
        image = image.replace('url("data:image/jpeg;base64,', '');
        image = image.replace('url("data:image/jpeg;base64,', '');
        image = image.replace('url("data:image/png;base64,', '');
        image = image.replace('url("data:image/jpg;base64,', '');
        image = image.replace('")', '');
        if (image == "none") {
            return "";
        } else
            return image;
    }

    function image_update() {
        image_file_input.on('change', function (ev) {
            image_updated = 1;
        });
    }

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_error").html(val);
            $("#" + index).focus();
        });
    }

    function cancel1() {
        cancel_button.addEventListener("click", (t => {
            if (auth_type == 0) {
                add_form.attr("data-kt-redirect", app_url + "/admin/user");
            } else if (auth_type == 1) {
                window.location.replace(app_url + "/admin/form_cases");
            } else if (auth_type == 2) {
                window.location.replace(app_url + "/admin/form_sp_one");
            } else if (response['speechsuccess']) {
                window.location.replace(app_url + "/admin/form_sp_one");
            } else if (response['facilitators']) {
                window.location.replace(app_url + "/admin/facilitators/form_fa_one");
            } else if (response['supervisors']) {
                window.location.replace(app_url + "/admin/supervisors/approvals");
            } else if (response['case_managers_supervisors']) {
                window.location.replace(app_url + "/admin/supervisors/approvals_one/cases/0");
            } else if (response['specialist_supervisors']) {
                window.location.replace(app_url + "/admin/supervisors/approvals_two/cases/0");
            } else if (response['success_not_type']) {
                window.location.replace(app_url + "/admin/dashboard");
            }
            t.preventDefault(), Swal.fire({
                text: language === "en" ? "Are you sure you would like to cancel?" : "هل أنت متأكد أنك تريد الإلغاء؟",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Yes, cancel it!" : "نعم ، قم بالإلغاء!",
                cancelButtonText: language === "en" ? "No, return" : "لا تراجع",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
            }).then((function (t) {
                t.value ? window.location = add_form.attr("data-kt-redirect") : "cancel" === t.dismiss && Swal.fire({
                    text: language === "en" ? "Your form has not been cancelled!." : "لم يتم إلغاء النموذج الخاص بك !.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                    customClass: {confirmButton: "btn btn-primary"}
                })
            }))
        }))
    }


});

