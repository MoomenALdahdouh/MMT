$(function () {
    const submit_button = $("#send_message"),
        full_name_input = $("#full_name"),
        email_input = $("#email"),
        subject_input = $("#subject"),
        message_input = $("#message"),
        app_url = $("#app_url").val();

    $(document).ready(function () {
        create_contact();
    });

    function create_contact() {
        submit_button.click(function () {
            let full_name = full_name_input.val(),
                email = email_input.val(),
                subject = subject_input.val(),
                message = message_input.val();

            console.log(app_url)
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
                    subject: subject,
                    message: message,
                },
                success: function (response) {
                    if ($.isEmptyObject(response.error)) {
                        $("input").val("");
                        $("textarea").val("");
                        //Success modal
                    } else {

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
});
