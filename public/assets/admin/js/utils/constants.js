const app_url = $('#app_url').val(),
    errors_tags = $(".errors"),
    language = $('#language').val(),
    auth_type = $("#auth_type").val(),
    current_url = $("#current_url").val(),
    previous_url = $("#previous_url").val();

var hostUrl = "assets/";
$(function () {
    $(document).ready(function () {
        $(":button[type=submit]").click(function () {
            $(this).addClass("disabled");
        })
        $(":input").on('change',function () {
            $(":button[type=submit]").removeClass("disabled");
        })
        $(":input").on('input',function () {
            $(":button[type=submit]").removeClass("disabled");
        })
    });
});

function disabled_button(status) {
    if (status) {
        $(":button[type=submit]").addClass("disabled");
    } else {
        $(":button[type=submit]").removeClass("disabled");
    }
}
