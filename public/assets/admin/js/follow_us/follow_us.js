$(function () {
    const language = $('#language').val(),
        app_url = $('#app_url').val(),
        submit_button = document.getElementById("kt_ecommerce_edit_follow_us_submit"),
        facebook_input = $("#follow_us_facebook"),
        instagram_input = $("#follow_us_instagram"),
        twitter_input = $("#follow_us_twitter"),
        location_input = $("#follow_us_location"),
        map_location_input = $("#map_location"),
        location_en_input = $("#follow_us_location_en"),
        mobile_input = $("#follow_us_mobile"),
        email_input = $("#follow_us_email"),
        add_follow_us_form = $("#kt_ecommerce_edit_follow_us_form");

    $(document).ready(function () {
        edit_follow_us();
        mapping_view();
    });

    function edit_follow_us() {
        submit_button.addEventListener('click', function () {
            let
                facebook = facebook_input.val(),
                instagram = instagram_input.val(),
                twitter = twitter_input.val(),
                location = location_input.val(),
                map_location = map_location_input.val(),
                location_en = location_en_input.val(),
                mobile = mobile_input.val(),
                email = email_input.val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/admin/follow-us/store",
                data: {
                    follow_us_facebook: facebook,
                    follow_us_instagram: instagram,
                    follow_us_twitter: twitter,
                    follow_us_location: location,
                    follow_us_map_location: map_location,
                    follow_us_location_en: location_en,
                    follow_us_mobile: mobile,
                    follow_us_email: email,
                },
                success: function (response) {
                    if ($.isEmptyObject(response.error)) {
                        success_submit(response.success);
                    } else {
                        failed_submit(response.error);
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
        add_follow_us_form.attr("data-kt-redirect", app_url + "/admin");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            }).then((function (e) {
                e.isConfirmed && (submit_button.disabled = !1, window.location = add_follow_us_form.attr("data-kt-redirect"))
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

    function mapping_view() {
        $("#mapping_view").html($("#map_location").val());
        map_location_input.on('input', function () {
            $("#mapping_view").html($("#map_location").val());
        })
    }

});
