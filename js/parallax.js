$(function() {
    var $el = $(".half-banner");
    $(window).on("scroll", function() {
        var scroll = $(document).scrollTop();
        $el.css({
            "background-position": "50%" + (0.05 * scroll + 50) + "%"
        });
    });
});
