$(function () {
    const submit_button = $("#send_message"),
        full_name_input = $("#full_name"),
        email_input = $("#email"),
        mobile_input = $("#mobile"),
        message_input = $("#message"),
        recaptcha_input = $("#recaptcha"),
        app_url = $("#app_url").val();

    $(document).ready(function () {
        create_contact();
    });

    function create_contact() {
        submit_button.click(function () {
            let full_name = full_name_input.val(),
                email = email_input.val(),
                mobile = mobile_input.val(),
                recaptcha = recaptcha_input.html(),
                gtoken = grecaptcha.getResponse(),
                message = message_input.val();

            console.log(recaptcha)
            $(".errors").html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/contact-us/store",
                data: {
                    full_name: full_name,
                    email: email,
                    mobile: mobile,
                    message: message,
                    g_recaptcha_response: gtoken,
                },
                success: function (response) {
                    if ($.isEmptyObject(response.error)) {
                        $("input").val("");
                        $("textarea").val("");
                        $("#confirm_modal #message_success").removeClass("d-none");
                        $("#confirm_modal #title_message_success").removeClass("d-none");
                        $("#confirm_modal #message_content").addClass("d-none");
                        submit_button.addClass("d-none");
                        $("#confirm_modal #close_modal_button").removeClass("d-none");
                        $("#confirm_modal").addClass("display", "none");
                        grecaptcha.reset();
                        /*const  success_modal =  $("#success_modal");
                        success_modal.addClass('show');
                        success_modal.css("display",'block');
                        success_modal.attr("role",'dialog');*/
                    } else {
                        $("#confirm_modal #message_error").removeClass("d-none");
                        $("#confirm_modal #title_message_error").removeClass("d-none");
                        $("#confirm_modal #message_content").addClass("d-none");
                        submit_button.addClass("d-none");
                        $("#confirm_modal #close_modal_button").removeClass("d-none");
                        print_error(response.error);
                    }
                    $("#confirm_modal #close_modal_button").click(function () {
                        submit_button.removeClass("d-none");
                        $("#confirm_modal #close_modal_button").addClass("d-none");
                        $("#confirm_modal #title_message_error").addClass("d-none");
                        $("#confirm_modal #message_error").addClass("d-none");
                        $("#confirm_modal #title_message_success").addClass("d-none");
                        $("#confirm_modal #message_success").addClass("d-none");
                        $("#confirm_modal #message_content").removeClass("d-none");
                    });
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
});
