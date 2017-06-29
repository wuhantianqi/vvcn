$(document).ready(function () {
	//找装修公司 - 头部菜单切换
	//	$(".z_top .z_top_b").eq(0).css("display", "block");
	//	$(".z_top_nav  ul li").each(function () {
	//
	//		var index = $(this).index();
	//		$(this).mouseover(function () {
	//			$(".z_top .z_top_b").css("display", "none");
	//			$(".z_top .z_top_b").eq(index).css("display", "block");
	//		})
	//	});




	//	找装修公司-表单滚动
	var $this = $(".zzz_biaoge_list");
	var scrollTimer;
	$this.hover(function () {
		clearInterval(scrollTimer);
	}, function () {
		scrollTimer = setInterval(function () {
			scrollNews($this);
		}, 1500);
	}).trigger("mouseout");

	function scrollNews(obj) {


		var lineHeight = obj.find("ul:first").height();
		obj.animate({
			"margin-top": -lineHeight + "px"


		}, 1500, function () {
			obj.css({
				"margin-top": "0px"

			}).find("ul:first").appendTo(obj);
		})
	}



	//	装修课堂今日热点切换

	$(".zxgl_hot_mid .zxgl_hot_ul li a").eq(0).css({
		color: "#ff3333",
		borderBottom: "2px solid #ff3333"
	});
	$(".zxgl_hot_mid .hot_trt").eq(0).css({
		display: "block"
	});
	$(".zxgl_hot_mid .zxgl_hot_ul li").each(function () {
		var index = $(this).index();
		$(this).mouseover(function () {
			$(".zxgl_hot_mid .zxgl_hot_ul li a").css({
				color: "#666",
				borderBottom: "none"
			});
			$(".zxgl_hot_mid .zxgl_hot_ul li a").eq(index).css({
				color: "#ff3333",
				borderBottom: "2px solid #ff3333"
			});
			$(".zxgl_hot_mid .hot_trt").css({
				display: "none"
			});
			$(".zxgl_hot_mid .hot_trt").eq(index).css({
				display: "block"
			});
		})
	})


	//	装修课堂设计与报价切换
	$(".zzx_fb ul li ").eq(0).css({
		borderBottomColor: "#ff3333"
	});
	$(".zzx_ff").eq(0).css({
		display: "block"
	});
	$(".zzx_fb ul li ").each(function () {
		var index = $(this).index();
		if (index < 2) {
			$(this).mouseover(function () {
				$(".zzx_fb ul li ").css({
					borderBottomColor: "transparent"
				});
				$(".zzx_fb ul li ").eq(index).css({
					borderBottomColor: "#ff3333"
				});
				$(".zzx_ff").css({
					display: "none"
				});
				$(".zzx_ff").eq(index).css({
					display: "block"
				});
				if ($(".ac1").css("display") == "block") {
					$(".zzx_fr form .sub").css({
						backgroundColor: "#68c935"
					})
				} else {
					$(".zzx_fr form .sub").css({
						backgroundColor: "#ff6699"
					})
				}
			})
		}

	})

})
