$(function () {
	$(".left_nav .li_tit").click(function () {
		$(this).siblings(".li_det").slideDown().parents("li").siblings("li").find(".li_det").slideUp();
	})
})
