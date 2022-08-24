$(function () {
    const language = $('#language').val(),
        submit_button = document.getElementById("kt_ecommerce_edit_our_story_submit"),
        our_story_title_input = $("#our_story_title"),
        image_file_input = $("#image_file_input"),
        our_story_title_en_input = $("#our_story_title_en"),
        uploaded_image = $("#uploaded_image"),
        description_input = $("#our_story_description"),
        description_en_input = $("#our_story_description_en"),
        home_page_text_input = $("#our_story_home_page_text"),
        home_page_text_en_input = $("#our_story_home_page_text_en"),
        add_our_story_form = $("#kt_ecommerce_edit_our_story_form");

    let  our_story_image = "",
        image_updated = 0,
        app_url = $('#app_url').val();

    $(document).ready(function () {
        edit_our_story();
        image_update();
    });

    function edit_our_story() {
        submit_button.addEventListener('click', function () {
            let our_story_title = our_story_title_input.val(),
                our_story_title_en = our_story_title_en_input.val(),
                description = description_input.val(),
                description_en = description_en_input.val(),
                home_page_text = home_page_text_input.val(),
                home_page_text_en = home_page_text_en_input.val();
            our_story_image = prepare_image_base64(uploaded_image.css('background-image'));
            if (our_story_image == "none") {
                our_story_image = "";
            }
            if (our_story_image.indexOf(app_url)  > -1 && our_story_image.indexOf(".jpg")  <= -1)
                our_story_image = "";

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url+"/admin/our-story/store",
                data: {
                    our_story_title: our_story_title,
                    our_story_title_en: our_story_title_en,
                    our_story_image: our_story_image,
                    image_updated: image_updated,
                    our_story_description: description,
                    our_story_description_en: description_en,
                    our_story_home_page_text: home_page_text,
                    our_story_home_page_text_en: home_page_text_en,
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

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_error").html(val);
            $("#" + index).focus();
        });
    }

    function success_submit(id) {
        //Success Submit
        $(".errors").html("");
        add_our_story_form.attr("data-kt-redirect", app_url+"/admin");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            }).then((function (e) {
                e.isConfirmed && (submit_button.disabled = !1, window.location = add_our_story_form.attr("data-kt-redirect"))
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

    function image_update() {
        image_file_input.on('change', function (ev) {
            image_updated = 1;
        });
    }
});
