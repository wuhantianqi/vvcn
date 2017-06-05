$(document).ready(function(){
	//头部筛选列表
	$(".choose_menu li").click(function(){
		$(this).siblings().find('.sub_choose_menu').hide();
		$(this).find(".sub_choose_menu").slideToggle(300);
	});
	//搜索框下拉列表
	$('.search_box').click(function(){
		$(this).find('.search_choose').slideToggle(300);							  
    });			
});