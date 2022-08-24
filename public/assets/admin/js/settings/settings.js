$(function () {
    const language = $('#language').val(),
        submit_button = document.getElementById("kt_ecommerce_edit_settings_submit"),
        description_input = $("#settings_description"),
        description_en_input = $("#settings_description_en"),
        app_url = $('#app_url').val(),
        add_settings_form = $("#kt_ecommerce_edit_settings_form");


    $(document).ready(function () {
        edit_settings();
        status();
    });

    function status() {
        $("#payment_status").on('change', function () {
            if ($(this).val() == "1") {
                $("#payment_status_val").val("0")
                $("#payment_status_name").html(language == "en" ? "Test" : "فحص")
            } else {
                $("#payment_status_val").val("1")
                $("#payment_status_name").html(language == "en" ? "Real Payment" : "دفع حقيقي")
            }

        })
    }

    function edit_settings() {
        $("#my_form").submit(function (e) {
            console.log("sss")
            e.preventDefault();
            let action_url = e.currentTarget.action,
                data = $(this).serializeArray();
            console.log(data)
            $.ajax({
                url: action_url,
                type: 'post',
                dataType: 'application/json',
                data: data,
                success: function (response) {
                    let data = JSON.parse(response.responseText);
                    if ($.isEmptyObject(data.error)) {
                        success_submit(data.success);
                    } else {
                        failed_submit(data.error);
                    }
                },
                error: function (response) {
                    let data = JSON.parse(response.responseText);
                    if ($.isEmptyObject(data.error)) {
                        success_submit(data.success);
                    } else {
                        failed_submit(data.error);
                    }
                }
            });
        });
    }

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_error").html(val);
            $("#" + index).focus();
        });
    }

    function success_submit(id) {
        //Success Submit
        $(".errors").html("");
        add_settings_form.attr("data-kt-redirect", app_url + "/admin");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            }).then((function (e) {
                e.isConfirmed && (submit_button.disabled = !1, window.location = add_settings_form.attr("data-kt-redirect"))
            }))
            submit_button.disabled = !1
        }), 1000));//2e3 == 1000
    }

    function failed_submit(errors) {
        //Failed Submit
        $(".errors").html("");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            })
            submit_button.disabled = !1
            print_error(errors);
        }), 1000));
    }

});
