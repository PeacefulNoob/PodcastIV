window.jQuery(document).ready(function (a) {
        ! function (a) {
            a(function () {
                a("nav ul li a:not(:only-child)").click(function (e) {
                    a(this).siblings(".nav-dropdown").toggle(), a(".nav-dropdown").not(a(this).siblings()).hide(), e.stopPropagation()
                }), a("html").click(function () {
                    a(".nav-dropdown").hide()
                }), a("#nav-toggle").click(function () {
                    a("nav ul").slideToggle()
                }), a("#nav-toggle").on("click", function () {
                    this.classList.toggle("active")
                })
            })
        }(jQuery), a("#search1").select2({
            minimumResultsForSearch: "",
            placeholder: "Pretrazi "
        }), a("#search_submit").click(function () {
            a("#search1").select2("open")
        }), a(".tabgroup1 > div").hide(), a(".tabgroup1 > div:last-of-type").show(), a(".tabs a").click(function (e) {
            e.preventDefault();
            var t = a(this),
                i = "#" + t.parents(".tabs").data("tabgroup"),
                o = t.closest("li").siblings().children("a"),
                c = t.attr("href");
            o.removeClass("active"), t.addClass("active"), a(i).children("div").hide(), a(c).show()
        }), a(".carousel").carousel({
            interval: 3e3
        }), a(".carousel").carousel("cycle");
        var e, t = window.location.href.match(/\d+$/);
        e = t, a(".tabgroup > div").hide(), a(".tabgroup #" + e).show(), a("." + e).addClass("active"), a(".tabs a").click(function (e) {
            e.preventDefault();
            var t = a(this),
                i = "#" + t.parents(".tabs").data("tabgroup"),
                o = t.closest("li").siblings().children("a"),
                c = t.attr("href");
            o.removeClass("active"), t.addClass("active"), a(i).children("div").hide(), a(c).show()
        }), a(".carousel").carousel({
            interval: 3e3
        }), a(".carousel").carousel("cycle")
    }),
    function (a) {
        "use strict";
        a(window).on("load", function (e) {
            a("#global-loader").fadeOut("slow")
        })
    }(jQuery);
