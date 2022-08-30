$(function () {
    const table = $('#kt_ecommerce_contact_us_table'),
        language = $('#language').val(),
        app_url = $('#app_url').val();
    $(document).ready(function () {
        "use strict";
        get_contacts();
        /*Table Actions*/
        table_function();
    });

    let id = "";

    function table_function() {
        $(document).on('click', '#delete', function () {
            id = $(this).data('id');
            confirm_delete(id);
        });

        $(document).on('click', '#edit', function () {
            let id = $(this).data('id');
            let subject = $(this).data('subject');
            let message = $(this).data('message');
            let status = $(this).data('status');
            $("#message_subject").html(subject);
            $("#message_body").html(message);
            /*$("#kt_modal_contact input").attr("id", "message_status" + id)
            console.log(status)
            if (status == 1) {
                $("#message_status" + id).attr("checked", "checked");
            } else {
                $("#message_status" + id).removeAttr("checked");
            }
            $("#message_status" + id).val(status);
            contact_status(id);*/
        });
        contact_status();
    }

    function contact_status() {
        $(document).on('click', '#message_status', function () {
            let id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/admin/contact-us/update/" + id,
                success: function (response) {
                    if (response['success']) {
                        Swal.fire({
                            text: language === "en" ? "You have change order status!.":"لقد قمت بتغيير الحالة !.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                            customClass: {confirmButton: "btn fw-bold btn-primary"}
                        });
                        id = "";
                        table.DataTable().ajax.reload();
                    } else if (response['error']) {
                        Swal.fire({
                            text: language === "en" ? "The order status was not change.":"لم تتغير حالة الطلب.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                            customClass: {confirmButton: "btn fw-bold btn-primary"}
                        });
                        id = "";
                    }
                }
            });
        });
    }

    function confirm_delete(id) {
        const o = "sads";
        Swal.fire({
            text: language === "en" ? "Are you sure you want to delete this item?" : "هل أنت متأكد أنك تريد حذف هذا البند؟",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: language === "en" ? "Yes, delete!" : "نعم ، احذف!",
            cancelButtonText: language === "en" ? "No, cancel" : "لا ، إلغاء",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
        });
        var confirm_delete = document.getElementsByClassName("swal2-confirm");
        confirm_delete[0].addEventListener('click', function () {
            delete_contact_us(id);
        });
    }

    function delete_contact_us(id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "DELETE",
            url: app_url + "/admin/contact-us/delete/" + id,
            success: function (response) {
                if (response['success']) {
                    Swal.fire({
                        text: language === "en" ? "You have deleted the item!." : "لقد قمت بحذف العنصر !.",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn fw-bold btn-primary"}
                    });
                    table.DataTable().ajax.reload();
                } else if (response['error']) {
                    Swal.fire({
                        text: language === "en" ? "The item was not deleted." : "لم يتم حذف العنصر.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn fw-bold btn-primary"}
                    });
                }
            }
        });
    }

    function get_contacts() {
        var KTAppEcommerceCategories = function () {
            var t, e, n = () => {
                t.querySelectorAll('[data-kt-ecommerce-contact-us-filter="delete_row"]').forEach((t => {
                    t.addEventListener("click", (function (t) {
                        t.preventDefault();
                        const n = t.target.closest("tr"),
                            o = n.querySelector('[data-kt-ecommerce-contact-us-filter="contact_us_name"]').innerText;
                        Swal.fire({
                            text: language === "en" ? "Are you sure you want to delete this item?" : "هل أنت متأكد أنك تريد حذف هذا البند؟",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: language === "en" ? "Yes, delete!" : "نعم ، احذف!",
                            cancelButtonText: language === "en" ? "No, cancel" : "لا ، إلغاء",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function (t) {
                            t.value ? Swal.fire({
                                text: language === "en" ? "You have deleted the item!." : "لقد قمت بحذف العنصر !.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn fw-bold btn-primary"}
                            }).then((function () {
                                e.row($(n)).remove().draw()
                            })) : "cancel" === t.dismiss && Swal.fire({
                                text: language === "en" ? "The item was not deleted." : "لم يتم حذف العنصر.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn fw-bold btn-primary"}
                            })
                        }))
                    }))
                }))
            };
            return {
                init: function () {
                    (t = document.querySelector("#kt_ecommerce_contact_us_table")) && ((e = $(t).DataTable({
                        order: [[0, "asc"]],
                        searchable: true,
                        ajax: {
                            "url": app_url + "/admin/contact-us",
                            "type": 'GET',
                        },
                        columns: [
                            {
                                data: 'id',
                                name: 'id',
                            },
                            {
                                data: 'name',
                                name: 'name',
                            },
                            {
                                data: 'email',
                                name: 'email',
                            },
                            {
                                data: 'mobile',
                                name: 'mobile',
                            },
                            {
                                data: 'created_at',
                                name: 'created_at',
                            },
                            {
                                data: 'status',
                                name: 'status',
                            }, {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ], "columnDefs": [{
                            "render": function (data, type, full, meta) {
                                return meta.row + 1; // adds id to serial no
                            },
                            "targets": 0
                        }],
                    })).on("draw", (function () {
                        n()
                    })), document.querySelector('[data-kt-ecommerce-contact-us-filter="search"]').addEventListener("keyup", (function (t) {
                        e.search(t.target.value).draw()
                    })), n())
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function () {
            KTAppEcommerceCategories.init()
        }));
    }
});
