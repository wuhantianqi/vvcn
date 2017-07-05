$(function () {
	//页面弹出框
	$(document).on('click', '.eject', function(event) {
		event.preventDefault();
		layer.open({
			type: 2,	
			title:'',
		    area: ['1030px', '465px'], //宽高
		    content: ['/forms.html','no']
		});
	});
		// 找装修公司户型设计 颜色设计切换
		$('.x-cov').mouseenter(function() {
					$(this).css({
						"opacity": "1",
						"transition": "1s"
					});
				})
				$('.x-cov').mouseleave(function() {
					$(this).css({
						"opacity": "0",
						"transition": "0.3s"
					});
				})
				jQuery.jqtab3 = function(tabtit, tab_conbox, shijian) {
					$(tab_conbox).find(".x-y").siblings().hide();
					$(tabtit).find(".x-cov").bind(shijian, function() {
						var activeindex = $(tabtit).find(".x-cov").index(this);
						$(tab_conbox).children(".x-col-box").eq(activeindex).show().siblings().hide();
						return false;
					});
				};
				$.jqtab3(".x-p", ".x-sec-05-lastli", "mouseenter");
				$(".x-cov").mouseleave(function() {
					$(".x-sec-05-lastli").find(".x-y").show().siblings().hide();
				});



// 找装修公司户型设计 让家更大更美
					$(".ten_d .y span").eq(0).css("backgroundColor", "#ff6666");
					$(".ten_d .y span").each(function() {

						var index = $(this).index();
						var mun = -1169 * index + "px";
						$(this).click(function() {
							$(".ten_d .y span").css("backgroundColor", "#ccc");
							$(this).css("backgroundColor", "#ff6666");
							$(".ten_d .boxfa").animate({
								left: mun
							}, 500)
						})
					})

					$(".ten_m .y span").eq(0).css("backgroundColor", "#ff6666");
					$(".ten_m .y span").each(function() {

						var index = $(this).index();
						var mun = -1169 * index + "px";
						$(this).click(function() {
							$(".ten_m .y span").css("backgroundColor", "#ccc");
							$(this).css("backgroundColor", "#ff6666");
							$(".ten_m .boxfa").animate({
								left: mun
							}, 500)
						})
					})
					$(".ten_s .y span").eq(0).css("backgroundColor", "#ff6666");
					$(".ten_s .y span").each(function() {

						var index = $(this).index();
						var mun = -1169 * index + "px";
						$(this).click(function() {
							$(".ten_s .y span").css("backgroundColor", "#ccc");
							$(this).css("backgroundColor", "#ff6666");
							$(".ten_s .boxfa").animate({
								left: mun
							}, 500)
						})
					})

})
