// import Test from "./modules/test";
jQuery(document).ready(function(){
    jQuery('.top__boxes__box').matchHeight();
    jQuery('.header__menubuton').click(function(){
        jQuery(this).toggleClass('actived');
        jQuery('.header__menu').toggleClass('actived');
    })
})
jQuery(function () {

    $(".progress").each(function () {

        var value = $(this).attr('data-value');
        var left = $(this).find('.progress-left .progress-bar');
        var right = $(this).find('.progress-right .progress-bar');

        if (value > 0) {
            if (value <= 50) {
                right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
            } else {
                right.css('transform', 'rotate(180deg)')
                left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
            }
        }

    })

    function percentageToDegrees(percentage) {

        return percentage / 100 * 360

    }

});


/*start events*/
    $(function() {
        $(document).ready(function() {
            $(".js_less").hide();
            $(".js_more").click(function() {
                $(this).hide();
                $(this).parent().parent().addClass("active");
                $(this).parent().find(".js_click_show").show();
                $(this).parent().find(".js_less").slideToggle(350);
            });
            $(".js_click_show").click(function() {
                $(this).hide();
                $(this).parent().parent().parent().removeClass("active");
                $(this).parent().parent().find(".js_less").slideToggle(350);
                $(this).parent().toggleClass("scp-programs-active", 350);
                $(this).parent().parent().find(".js_more").show();
            });
        });
    });