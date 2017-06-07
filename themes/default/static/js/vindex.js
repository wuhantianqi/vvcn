$(document).ready(function () {
		$("#index_baner .bx-viewport").css("overflow","visible");
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

	//		面积计算表单
	var nubuer = $(".mjjs_f1 .squre "); //面积
	var fphone = $(".mjjs_f1 .phone "); //电话
	nubuer.blur(function () {
		if ($(this).val() < 20) {
			layer.open({
				content: '建筑面积不能小于5',
				btn: '我知道了'
			});
			nubbul = false;
		}
	})

	//根据面积显示户型
	$(".mjjs_f1 .squre ").on('keyup', function () {
		selectDoorModle($(this).val(), this);
	})
	$(".mjjs_f1 .squre ").focus(function () {

		$(".jg").css("display", "none");
		$(".mjjs_f1 .squre").css("border-color", "#red");
		//		if ($(".myend p").className = 'ondp') {
		//			$(".myend p").removeClass('ondp');
		//						$(".myend h2 em").html('0');
		//						$("#rengongf span").html('0');
		//						$("#cailiaof span").html('0');
		//						$("#shejif span").html('0').css('text-decoration','none');
		//						$("#zhijianf span").html('0').css('text-decoration','none');
		//
		//		}
	})

	//根据面积显示户型
	function selectDoorModle(square, squareEle) {
		var square = Number(square);
		if (square + '' == 'NaN' || $(squareEle).val() == '') {
			return
		};
		if (square < 60) {
			$('#shi').val(1);
			$('#ting').val(1);
			$('#chu').val(1);
			$('#wei').val(1);
			$('#yangtai').val(1);
		} else if (square >= 60 && square < 90) {
			$('#shi').val(2);
			$('#ting').val(1);
			$('#chu').val(1);
			$('#wei').val(1);
			$('#yangtai').val(1);
		} else if (square >= 90 && square < 150) {
			$('#shi').val(3);
			$('#ting').val(2);
			$('#chu').val(1);
			$('#wei').val(2);
			$('#yangtai').val(1);
		} else if (square >= 150) {
			$('#shi').val(4);
			$('#ting').val(2);
			$('#chu').val(1);
			$('#wei').val(2);
			$('#yangtai').val(2);
		}
	}
	/*计算最终结果*/
	$(".mjjs_bt input").click(function () {

		if (isNaN(nubuer.val()) || nubuer.val() == null || nubuer.val() == '') {
			layer.open({
				content: '您的输入正确的面积',
				btn: '我知道了'
			});

			return false;
		}
		var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1}))+\d{8})$/; //手机正则表达式
		$(".mjjs_f1 .phone ").focus(function () {
			$(".jg").css("display", "none");
		})
		if (fphone.val() == '' || fphone.val() == null) {
			layer.open({
				content: '手机号不能为空',
				btn: '我知道了'
			});

			return false;

		} else if (!myreg.test(fphone.val())) {
			layer.open({
				content: '请添写正确的11位手机号码',
				btn: '我知道了'
			});
			return false;

		}
		var squre = $(".mjjs_f1 .squre ").val() * 500;

		if (squre) {

			$(".mjjs_jg h3 span").html(squre).css('color', '#ff5a00');
			$("#rengongf span").html(squre * 0.45).css('color', '#ff5a00');
			$("#cailiaof span").html(Math.floor(squre * 0.55)).css('color', '#ff5a00');
			$("#shejif span").html(Math.round(squre * 0.226666)).css('text-decoration', 'line-through');
			$("#zhijianf span").html(Math.round(squre * 0.063333)).css('text-decoration', 'line-through');

		}
	})


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
