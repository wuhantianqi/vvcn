$(document).ready(function () {
	// 导航
	$(".menu_main").mouseover(function () {
		$(this).find("dl").show();
	}).mouseout(function () {
		$(this).find("dl").hide();
	});
	//	搜索栏点击事件
	$(".head-form span").click(function () {
		$(".head-form ul").toggle();
	});

	$(".head-form ul").find("li").click(function () {

		$(".head-form span").html($(this).text());
		$(".head-form ul").hide();
	});

	//	服务分类
	$(".menu_sel .menu-mour").mouseover(function () {
		$(".menu_sel #menu_er").show();
	});

	$("#menu_er .menu_ej_r").eq(0).css("display", "block");
	$("#menu_er .menu_ul li").eq(0).addClass("ll");
	$("#menu_er .menu_ul li").eq(0).find("p").addClass("pp");

	$("#menu_er .menu_ul li").each(function () {
		var index = $(this).index();
		var posi = $(this).find("i").css("background-position-y");
		$("#menu_er .menu_ul li").eq(0).find("i").css({

			backgroundPositionY: (parseInt(posi) - 35) + "px"
		});
		$(this).mouseover(function () {
			$("#menu_er .menu_ul li i").css({
				backgroundPositionY: -55 + "px"
			})
			$(this).find("i").css({

				backgroundPositionY: (parseInt(posi) - 35) + "px"
			});
			$("#menu_er .menu_ul li.ll").removeClass("ll");
			$(this).addClass("ll");
			$("#menu_er .menu_ul li p.pp").removeClass("pp");
			$(this).find("p").addClass("pp");

			$("#menu_er .menu_ej_r").css("display", "none");
			$("#menu_er .menu_ej_r").eq(index).css("display", "block");

		});
	});

	//	装修美图下面切换
	$(".zxmt_ull li").eq(0).addClass("dd");
	$(".zxmt_ul_er1").eq(0).css("display", "block");
	$(".zxmt_ull li").each(function () {
		var index = $(this).index();
		$(this).mouseover(function () {
			$(".zxmt_ul_er1").css("display", "none");
			$(".zxmt_ul_er1").eq(index).css("display", "block");
			$(".zxmt_ull li.dd").removeClass("dd");
			$(this).addClass("dd");
		});
	});


	//精英设计
	$(".jjsj_s ul li div").eq(0).css("display", "block");
	$(".jjsj_s ul li").each(function () {
		var index = $(this).index();
		$(this).mouseover(function () {
			$(".jjsj_s ul li div").css("display", "none");
			$(".jjsj_s ul li div").eq(index).css("display", "block");
		})
	})
	$(".jjsj_x ul li div").eq(4).css("display", "block");
	$(".jjsj_x ul li").each(function () {
		var index = $(this).index();
		$(this).mouseover(function () {
			$(".jjsj_x ul li div").css("display", "none");
			$(".jjsj_x ul li div").eq(index).css("display", "block");
		})
	})


	//装修攻略

	$(".zxgl_s .zxgl_s_l").click(function () {
		var ll = $(".zxgl_s .zxgl_s_img").offset().left;
		var max = 0;
		max += ll;

		if (parseInt(max) >= -938.5) {
			$(".zxgl_s .zxgl_s_img").animate({
				left: "-=430px"
			}, 1000);
		}

	})
	$(".zxgl_s .zxgl_s_r").click(function () {
		var rl = $(".zxgl_s .zxgl_s_img").offset().left;
		var max = 0;
		max += rl;

		if (parseInt(max) <= 0) {
			$(".zxgl_s .zxgl_s_img").animate({
				left: "+=430px"
			}, 1000);
		}


	})
})
