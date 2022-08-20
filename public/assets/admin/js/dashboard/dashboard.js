$(function () {

    const language = $('#language').val(),
        app_url = $('#app_url').val(), errors_tags = $(".errors"), filter_class = $(".filter_data");
    let cities = new Array();
    var projects = new Array();
    let governorates = new Array();
    let count_cities = [];
    let governorates_number = [];

    let arr = new Array();
    let number = [0];

    let type = 1;


    $(document).ready(function () {
        get_carve();
        /*$.getJSON(
            app_url + "/admin/dashboard/projects",
            {action: this.title},
            function (response) {
                // And in 'response' you now have a ready to use JS object)
                for (var i = 0; i < response.data.length; i++) {
                    if (!projects.includes(response.data[i].name_ar)) {
                        projects.push(response.data[i].name_ar);
                    }
                }
                arr.push(projects);
                get_data();


            });
        $.getJSON(
            app_url + "/admin/dashboard/governorates",
            {action: this.title},
            function (response) {
                // And in 'response' you now have a ready to use JS object)
                for (var i = 0; i < response.data.length; i++) {
                    if (!governorates.includes(response.data[i].name_ar)) {
                        governorates.push(response.data[i].name_ar);
                        get_number_governorates(response.data[i].lookup_id);

                    }
                }
            });
        $.getJSON(
            app_url + "/admin/settings-cities",
            {action: this.title},
            function (response) {
                // And in 'response' you now have a ready to use JS object)
                for (var i = 0; i < response.data.length; i++) {
                    if (!cities.includes(response.data[i].name_ar)) {
                        cities.push(response.data[i].name_ar);
                        get_number_cities(response.data[i].lookup_id);
                    }
                }
                get_data();
            });
        $("#kt_charts_widget_10_tab_1").on("click", function () {
            arr = [];
            arr.push(projects);
        });
        $("#kt_charts_widget_10_tab_3").on("click", function () {
            arr = [];
            arr.push(governorates);
            get_data();
        });
        $("#kt_charts_widget_10_tab_4").on("click", function () {
            arr = [];
            arr.push(cities);
            get_data();
        });*/
    });


    function get_data() {
        var KTChartsWidget10 = function () {
            var e = function (e, t, a, r) {
                var o = document.querySelector(t);
                if (o) {
                    var i = parseInt(KTUtil.css(o, "height")),
                        s = (KTUtil.getCssVariableValue("--bs-gray-900"), KTUtil.getCssVariableValue("--bs-border-dashed-color")),
                        l = {
                            series: [{name: "Net Profit", data: a}],
                            chart: {fontFamily: "inherit", type: "bar", height: i, toolbar: {show: !1}},
                            plotOptions: {
                                bar: {
                                    horizontal: !1,
                                    columnWidth: ["22%"],
                                    borderRadius: 5,
                                    dataLabels: {position: "top"},
                                    startingShape: "flat"
                                }
                            },
                            legend: {show: !1},
                            dataLabels: {
                                enabled: !0,
                                offsetY: -30,
                                style: {fontSize: "13px", colors: ["labelColor"]},
                                formatter: function (e) {
                                    return e + "%";
                                }
                            },
                            stroke: {show: !0, width: 2, colors: ["transparent"]},
                            xaxis: {
                                categories: arr[0],
                                axisBorder: {show: !1},
                                axisTicks: {show: !1},
                                labels: {
                                    style: {
                                        colors: KTUtil.getCssVariableValue("--bs-gray-500"),
                                        fontSize: "13px"
                                    }
                                },
                                crosshairs: {fill: {gradient: {opacityFrom: 0, opacityTo: 0}}}
                            },
                            yaxis: {
                                labels: {
                                    style: {colors: KTUtil.getCssVariableValue("--bs-gray-500"), fontSize: "13px"},
                                    formatter: function (e) {
                                        return parseInt(e) + "K"
                                    }
                                }
                            },
                            fill: {opacity: 1},
                            states: {
                                normal: {filter: {type: "none", value: 0}},
                                hover: {filter: {type: "none", value: 0}},
                                active: {allowMultipleDataPointsSelection: !1, filter: {type: "none", value: 0}}
                            },
                            tooltip: {
                                style: {fontSize: "12px"}, y: {
                                    formatter: function (e) {
                                        return "$" + e + " thousands"
                                    }
                                }
                            },
                            colors: [KTUtil.getCssVariableValue("--bs-primary"), KTUtil.getCssVariableValue("--bs-light-primary")],
                            grid: {borderColor: s, strokeDashArray: 4, yaxis: {lines: {show: !0}}}
                        }, n = new ApexCharts(o, l), d = !1, c = document.querySelector(e);
                    !0 === r && (n.render(), d = !0), c.addEventListener("shown.bs.tab", (function (e) {
                        0 == d && (n.render(), d = !0)
                    }))
                }
            };
            return {
                init: function () {
                    e("#kt_charts_widget_10_tab_1", "#kt_charts_widget_10_chart_1", [30, 18, 43, 70, 13, 37], !0), e("#kt_charts_widget_10_tab_2", "#kt_charts_widget_10_chart_2", [25, 55, 35, 50, 45, 20, 31], !1), e("#kt_charts_widget_10_tab_3", "#kt_charts_widget_10_chart_3", governorates_number, !1), e("#kt_charts_widget_10_tab_4", "#kt_charts_widget_10_chart_4", count_cities, !1)
                }
            }
        }();
        "undefined" != typeof module && (module.exports = KTChartsWidget10), KTUtil.onDOMContentLoaded((function () {
            KTChartsWidget10.init()
        }));
        $('#SvgjsSvg1225').remove();

    }

    function get_number_cities(id) {
        count = [];
        $.getJSON(
            app_url + "/admin/dashboard/cities_number/" + id,
            {action: this.title},
            function (response) {
                count_cities.push(response);
                console.log(count_cities);


            });


    };

    function get_number_governorates(id) {
        governorates_number = [];
        $.getJSON(
            app_url + "/admin/dashboard/governorates_number/" + id,
            {action: this.title},
            function (response) {
                governorates_number.push(response);
                console.log(governorates_number);


            });


    };

    function get_carve() {
        let days = [""];
        for (i = 1; i <= 7; i++) {
            let day = moment().add(i, 'days');
            days.push(day.format('dddd'));
        }
        console.log(days);
        $.getJSON(
            app_url + "/admin/dashboard/individuals_created_at",
            {action: this.title},
            function (response) {
                // And in 'response' you now have a ready to use JS object)

                number.push(response);
                var KTChartsWidget4 = {
                    init: function () {
                        !function () {
                            var e = document.getElementById("kt_charts_widget_4");
                            if (e) {
                                var t = parseInt(KTUtil.css(e, "height")),
                                    a = KTUtil.getCssVariableValue("--bs-gray-500"),
                                    r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                                    o = KTUtil.getCssVariableValue("--bs-primary"),
                                    i = KTUtil.getCssVariableValue("--bs-primary"),
                                    s = new ApexCharts(e, {
                                        series: [{
                                            name: "individual",
                                            data: response
                                        }],
                                        chart: {fontFamily: "inherit", type: "area", height: t, toolbar: {show: 1}},
                                        plotOptions: {},
                                        legend: {show: !1},
                                        dataLabels: {enabled: !1},
                                        fill: {
                                            type: "gradient",
                                            gradient: {
                                                shadeIntensity: 1,
                                                opacityFrom: .3,
                                                opacityTo: .7,
                                                stops: [0, 90, 100]
                                            }
                                        },
                                        stroke: {curve: "smooth", show: !0, width: 3, colors: [o]},
                                        xaxis: {
                                            categories: days,
                                            axisBorder: {show: !1},
                                            axisTicks: {show: !1},
                                            tickAmount: 6,
                                            labels: {rotate: 0, rotateAlways: !0, style: {colors: a, fontSize: "12px"}},
                                            crosshairs: {position: "front", stroke: {color: o, width: 1, dashArray: 3}},
                                            tooltip: {
                                                enabled: !0,
                                                formatter: void 0,
                                                offsetY: 0,
                                                style: {fontSize: "12px"}
                                            }
                                        },
                                        yaxis: {
                                            max: Math.max.apply(Math, response) + 5,
                                            min: 0,
                                            tickAmount: 6,
                                            labels: {
                                                style: {colors: a, fontSize: "12px"}, formatter: function (e) {
                                                    return parseInt(e);
                                                }
                                            }
                                        },
                                        states: {
                                            normal: {filter: {type: "none", value: 0}},
                                            hover: {filter: {type: "none", value: 0}},
                                            active: {
                                                allowMultipleDataPointsSelection: !1,
                                                filter: {type: "none", value: 0}
                                            }
                                        },
                                        tooltip: {
                                            style: {fontSize: "12px"}, y: {
                                                formatter: function (e) {
                                                    return parseInt(e);
                                                }
                                            }
                                        },
                                        colors: [i],
                                        grid: {borderColor: r, strokeDashArray: 4, yaxis: {lines: {show: !0}}},
                                        markers: {strokeColor: o, strokeWidth: 3}
                                    });
                                setTimeout((function () {
                                    s.render()
                                }), 300)
                            }
                        }()
                    }
                };
                "undefined" != typeof module && (module.exports = KTChartsWidget4), KTUtil.onDOMContentLoaded((function () {
                    KTChartsWidget4.init()
                }));
            });

    }
});
