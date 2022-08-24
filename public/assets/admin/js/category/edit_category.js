$(function () {
    const language = $('#language').val(),
        id = $('#item_id').val(),
        submit_button = document.getElementById("kt_ecommerce_edit_category_submit"),
        a = document.getElementById("kt_ecommerce_add_category_status_datepicker"),
        e = document.getElementById("kt_ecommerce_add_category_status"),
        t = document.getElementById("kt_ecommerce_add_category_status_select"),
        category_name_input = $("#category_name"),
        image_file_input = $("#image_file_input"),
        category_name_en_input = $("#category_name_en"),
        uploaded_image = $("#uploaded_image"),
        meta_title_input = $("#meta_title"),
        meta_title_en_input = $("#meta_title_en"),
        meta_description_input = $("#meta_description"),
        meta_description_en_input = $("#meta_description_en"),
        add_category_form = $("#kt_ecommerce_add_category_form"),
        status_type = ["bg-success", "bg-warning", "bg-danger"];

    let category_status = 1,
        category_image = "",
        image_updated = 0,
        app_url = $('#app_url').val();

    $(document).ready(function () {
        status_category();
        edit_category();
        image_update();
    });

    function edit_category() {
        submit_button.addEventListener('click', function () {
            let category_name = category_name_input.val(),
                category_name_en = category_name_en_input.val(),
                meta_title = meta_title_input.val(),
                meta_title_en = meta_title_en_input.val(),
                meta_description = meta_description_input.val(),
                meta_description_en = meta_description_en_input.val();
            category_image = prepare_image_base64(uploaded_image.css('background-image'));
            if (category_image == "none") {
                category_image = "";
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url+"/admin/categories/edit/update/" + id,
                data: {
                    category_name: category_name,
                    category_name_en: category_name_en,
                    category_image: category_image,
                    image_updated: image_updated,
                    status: category_status,
                    meta_title: meta_title,
                    meta_title_en: meta_title_en,
                    meta_description: meta_description,
                    meta_description_en: meta_description_en,
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

    function status_category() {
        const c = () => {
            a.parentNode.classList.remove("d-none")
        }, r = () => {
            a.parentNode.classList.add("d-none")
        }
        $(t).on("change", (function (t) {
            switch (t.target.value) {
                case"published":
                    category_status = 1;
                    e.classList.remove(...status_type), e.classList.add("bg-success"), r();
                    break;
                case"scheduled":
                    e.classList.remove(...status_type), e.classList.add("bg-warning"), c();
                    break;
                case"unpublished":
                    category_status = 0;
                    e.classList.remove(...status_type), e.classList.add("bg-danger"), r()
            }
        }));
    }

    function success_submit(id) {
        //Success Submit
        $(".errors").html("");
        add_category_form.attr("data-kt-redirect", app_url+"/admin/categories");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            }).then((function (e) {
                e.isConfirmed && (submit_button.disabled = !1, window.location = add_category_form.attr("data-kt-redirect"))
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
