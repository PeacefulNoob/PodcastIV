window.jQuery(document).ready(function ($) {
    (function ($) { // Begin jQuery
        $(function () { // DOM ready
            // If a link has a dropdown, add sub menu toggle.
            $('nav ul li a:not(:only-child)').click(function (e) {
                $(this).siblings('.nav-dropdown').toggle();
                // Close one dropdown when selecting another
                $('.nav-dropdown').not($(this).siblings()).hide();
                e.stopPropagation();
            });
            // Clicking away from dropdown will remove the dropdown class
            $('html').click(function () {
                $('.nav-dropdown').hide();
            });
            // Toggle open and close nav styles on click
            $('#nav-toggle').click(function () {
                $('nav ul').slideToggle();
            });
            // Hamburger to X toggle
            $('#nav-toggle').on('click', function () {
                this.classList.toggle('active');
            });
        }); // end DOM ready
    })(jQuery); // end jQuery


    $('#search1').select2({
        minimumResultsForSearch: '',
        placeholder: "Pretrazi "

    });

    $("#search_submit").click(function () {
        $(".searchText").css("transform", " translate(35px, -50%)");
    });






    $('.tabgroup1 > div').hide();
    $('.tabgroup1 > div:last-of-type').show();

    $('.tabs a').click(function (e) {
        e.preventDefault();
        var $this = $(this),
            tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();


    });
    $('.carousel').carousel({
        interval: 3000
    });

    $('.carousel').carousel('cycle');


    var lastNumber = window.location.href.match(/\d+$/);

    showSeaseon(lastNumber);
    /* PODKAST STRANa
     */
    function showSeaseon(id) {
        $('.tabgroup > div').hide();

        $('.tabgroup #' + id).show();
        $('.' + id).addClass('active');
    }


    $('.tabs a').click(function (e) {
        e.preventDefault();
        var $this = $(this),
            tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();


    });


    $('.carousel').carousel({
        interval: 3000
    });

    $('.carousel').carousel('cycle');
});

(function ($) {
    "use strict";

    // ______________ Global Loader
    $(window).on("load", function (e) {
        $("#global-loader").fadeOut("slow");
    });
})(jQuery);
