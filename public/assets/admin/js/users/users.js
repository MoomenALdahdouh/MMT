var table = $('#kt_table_users');
$(function () {
    const language = $('#language').val(),
        app_url = $('#app_url').val();
    $(document).ready(function () {
        "use strict";
        get_users();
        //users();
        /*Table Actions*/
        table_function();
    });

    function table_function() {
        user_status();
        $(document).on('click', '#delete', function () {
            let id = $(this).data('id');
            confirm_delete(id);
        });
    }

    function user_status() {
        $(document).on('click', '#message_status', function () {
            let id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/admin/users/status/" + id,
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


    function edit_user(id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: app_url + "/admin/users/edit/" + id,
            success: function (response) {
            }
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
            delete_user(id);
        });
    }

    function delete_user(id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "DELETE",
            url: app_url + "/admin/users/delete/" + id,
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

    function get_users() {
        var KTUsersList = function () {
            var t, e, n = () => {
                t.querySelectorAll('[data-kt-user-table-filter="delete_row"]').forEach((t => {
                    t.addEventListener("click", (function (t) {
                        t.preventDefault();
                        const n = t.target.closest("tr"),
                            o = n.querySelector('[data-kt-user-table-filter="user_name"]').innerText;
                        Swal.fire({
                            text: language === "en" ? "Are you sure you want to delete " + o + "?" : "هل أنت متأكد أنك تريد حذف "+ o +"؟",
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
                                text: language === "en" ? "You have deleted " + o + "!." : "لقد قمت بحذف "+ o +"!.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn fw-bold btn-primary"}
                            }).then((function () {
                                e.row($(n)).remove().draw()
                            })) : "cancel" === t.dismiss && Swal.fire({
                                text: o + " was not deleted.",
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
                    (t = document.querySelector("#kt_table_users")) && ((e = $(t).DataTable({
                        searchable: true,
                        order: [[0, "asc"]],
                        ajax: {
                            "url": app_url + "/admin/users",
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
                                data: 'created_at',
                                name: 'created_at',
                            },
                            {
                                data: 'roles',
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
                        ],"columnDefs": [{
                        "render": function (data, type, full, meta) {
                        return meta.row + 1; // adds id to serial no
                    },
                        "targets": 0
                }],
                    })).on("draw", (function () {
                        n()
                    })), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function (t) {
                        e.search(t.target.value).draw()
                    })), n())
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function () {
            KTUsersList.init()
        }));
    }
});
