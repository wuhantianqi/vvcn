$(function(){
	$(".zuo_cont1 .li_tit").click(function(){
		$(this).siblings(".li_det").slideDown().parents("li").siblings("li").find(".li_det").slideUp();
	})
})