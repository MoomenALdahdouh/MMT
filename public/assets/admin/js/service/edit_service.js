$(function () {
    const language = $('#language').val(),
        id = $('#item_id').val(),
        submit_button = document.getElementById("kt_ecommerce_edit_service_submit"),
        a = document.getElementById("kt_ecommerce_add_service_status_datepicker"),
        e = document.getElementById("kt_ecommerce_add_service_status"),
        t = document.getElementById("kt_ecommerce_add_service_status_select"),
        service_name_input = $("#service_name"),
        image_file_input = $("#image_file_input"),
        service_name_en_input = $("#service_name_en"),
        uploaded_image = $("#uploaded_image"),
        meta_title_input = $("#meta_title"),
        meta_title_en_input = $("#meta_title_en"),
        meta_description_input = $("#meta_description"),
        meta_description_en_input = $("#meta_description_en"),
        add_service_form = $("#kt_ecommerce_add_service_form"),
        status_type = ["bg-success", "bg-warning", "bg-danger"];

    let service_status = 1,
        service_image = "",
        image_updated = 0,
        app_url = $('#app_url').val();

    $(document).ready(function () {
        status_service();
        edit_service();
        image_update();
    });

    function edit_service() {
        submit_button.addEventListener('click', function () {
            let service_name = service_name_input.val(),
                service_name_en = service_name_en_input.val(),
                meta_title = meta_title_input.val(),
                meta_title_en = meta_title_en_input.val(),
                meta_description = meta_description_input.val(),
                meta_description_en = meta_description_en_input.val();
            service_image = prepare_image_base64(uploaded_image.css('background-image'));
            if (service_image == "none") {
                service_image = "";
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url+"/admin/services/edit/update/" + id,
                data: {
                    service_name: service_name,
                    service_name_en: service_name_en,
                    service_image: service_image,
                    image_updated: image_updated,
                    status: service_status,
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

    function status_service() {
        const c = () => {
            a.parentNode.classList.remove("d-none")
        }, r = () => {
            a.parentNode.classList.add("d-none")
        }
        $(t).on("change", (function (t) {
            switch (t.target.value) {
                case"published":
                    service_status = 1;
                    e.classList.remove(...status_type), e.classList.add("bg-success"), r();
                    break;
                case"scheduled":
                    e.classList.remove(...status_type), e.classList.add("bg-warning"), c();
                    break;
                case"unpublished":
                    service_status = 0;
                    e.classList.remove(...status_type), e.classList.add("bg-danger"), r()
            }
        }));
    }

    function success_submit(id) {
        //Success Submit
        $(".errors").html("");
        add_service_form.attr("data-kt-redirect", app_url+"/admin/services");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            }).then((function (e) {
                e.isConfirmed && (submit_button.disabled = !1, window.location = add_service_form.attr("data-kt-redirect"))
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
