$(function () {
	$(".zuo_cont1 .li_tit").click(function () {
		$(this).siblings(".li_det").slideDown().parents("li").siblings("li").find(".li_det").slideUp();
	})


	//	精英设计
	//	for (var i = 1; i++; i < 3) {
	//		var n = 5 * i - 1;
	//		$(".sjs-picshow .sjs-line").eq(n).find(".people").css("marginRight", "0");
	//
	//	}

	$(".sjs-picshow .sjs-line ").eq(0).find(".people").animate("width", "420px");
	$(".sjs-picshow .sjs-line").eq(6).animate("width", "420px");
	$(".sjs-picshow .sjs-line").eq(13).animate("width", "420px");
	$(".sjs-picshow .sjs-line").each(function () {

		$(this).find(".people").mouseenter(function () {
			var index = $(this).index();
			$(this).css("width", "185px");
			$(this).animate({
				'width': '420px'

			}, 1000);
			$(this).siblings().animate({
				'width': '185px'
			}, 1000);
		})

	})


	//index-page
	//	$(".side-menu i").each(function () {
	//		var imgUrl = 'url(' + $(this).attr("data-ico") + ')';
	//		$(this).css("background-image", imgUrl);
	//	})
	//	$(".side-menu li").mouseover(function () {
	//		if ($(this).find(".site-banner-right").is(":visible")) {
	//			var imgUrl = 'url(' + $(this).find("i").attr("data-icocur") + ')';
	//			$(this).find("i").css("background-image", imgUrl);
	//			$(this).find(".one-menu").css({
	//				"background-color": "#fff",
	//				"color": "#fa6381"
	//			});
	//		} else {
	//			$(".site-banner-right").hide();
	//			$(".side-menu").find(".one-menu").css({
	//				"background-color": "transparent",
	//				"color": "#555"
	//			});
	//			$(".side-menu i").each(function () {
	//				var imgUrl = 'url(' + $(this).attr("data-ico") + ')';
	//				$(this).css("background-image", imgUrl);
	//			})
	//			$(this).find(".site-banner-right").show();
	//			var imgUrlc = 'url(' + $(this).find("i").attr("data-icocur") + ')';
	//			$(this).find("i").css("background-image", imgUrlc);
	//			$(this).find(".one-menu").css({
	//				"background-color": "#fff",
	//				"color": "#fa6381"
	//			});
	//		}
	//	})

	//	首页服务项目切换
	$(".side-menu li").each(function () {
		$(".site-banner-right").css({
			display: "none"
		})
		$(this).mouseover(function () {
			$(".site-banner-right").hide();
			$(this).find(".site-banner-right").show();
		})

	})
	$("div.wsbanner").mouseleave(function () {
		$(".site-banner-right").hide();

	})




	//精英设计
	//	$(".jjsj_s ul li div").eq(0).css("display", "block");
	//	$(".jjsj_s ul li a").mouseover(function () {
	//		$(".jjsj_s ul li div").css("display", "none");
	//		$(this).parent().find("div").show(1000);
	//	})
	//	$(".jjsj_x ul li div").eq(4).css("display", "block");
	//
	//	$(".jjsj_x ul li a").mouseover(function () {
	//		$(".jjsj_x ul li div").css("display", "none");
	//		$(this).parent().find("div").show(1000);
	//	})


	//鼠标移除层区域后，触发mouseout事件，把整个层隐藏
	//	$('.wsbanner').bind('mouseout', function (e) {
	//		if (checkHover(e, this)) {
	//			$(".side-menu i").each(function () {
	//				var imgUrl = 'url(' + $(this).attr("data-ico") + ')';
	//				$(this).css("background-image", imgUrl);
	//				$(".side-menu").find(".one-menu").css({
	//					"background-color": "transparent",
	//					"color": "#555"
	//				});
	//			})
	//			$(this).find('.site-banner-right').fadeOut();
	//		}
	//	});

	/**
	 * 下面是一些基础函数，解决mouseover与mouserout事件不停切换的问题（问题不是由冒泡产生的）
	 */
	function checkHover(e, target) {
		if (getEvent(e).type == "mouseover") {
			return !contains(target, getEvent(e).relatedTarget ||
					getEvent(e).fromElement) &&
				!((getEvent(e).relatedTarget || getEvent(e).fromElement) === target);
		} else {
			return !contains(target, getEvent(e).relatedTarget ||
					getEvent(e).toElement) &&
				!((getEvent(e).relatedTarget || getEvent(e).toElement) === target);
		}
	}

	function contains(parentNode, childNode) {
		if (parentNode.contains) {
			return parentNode != childNode && parentNode.contains(childNode);
		} else {
			return !!(parentNode.compareDocumentPosition(childNode) & 16);
		}
	}
	//取得当前window对象的事件
	function getEvent(e) {
		return e || window.event;
	}



	//        装修攻略
	//	$(".zxgl-list .img").each(function () {
	//		var imgUrl = 'url(' + $(this).attr("data-ico") + ')';
	//		$(this).css("background-image", imgUrl);
	//	})
	//	$(".zxgl-list li").mouseover(function () {
	//		var imgUrl = 'url(' + $(this).find(".img").attr("data-icocur") + ')';
	//		$(this).find(".img").css("background-image", imgUrl);
	//
	//	})
	//	$(".zxgl-list li").mouseout(function () {
	//		$(".zxgl-list .img").each(function () {
	//			var imgUrl = 'url(' + $(this).attr("data-ico") + ')';
	//			$(this).css("background-image", imgUrl);
	//		})
	//	})


	//		$(this).mouseenter(function () {
	//			$(this).animate({
	//				'width': '420px'
	//			}, 1000);
	//			$(this).slibings().animate({
	//				'width': '185px'
	//			}, 1000);
	//		})

	/*
		$(".sjs-picshow .sjs-line .people").hover(function() {
	        $(this).parent().siblings('.people').animate({'width': '185px'}, 1000);
	        ;
	    })*/
	/*	$(".sjs-picshow .people").hover(function () {
			$(".sjs-picshow").find(".people-dec").remove();
			$(this).append('<div class="people-dec"><h4>马大帅2</h4><p>所属公司：东启创拓装饰</p><p>设计理念：追求精神的极致感受，融入思想和创意，对每一件作品赋之生命授予灵魂……</p><p class="bp"><a href="" class="xq">详情</a><a href="" class="yy">预约</a></p></div>');
			console.log(($(this).index() + 1) / 6);
			var ex = /^\d+$/;
			if (ex.test(($(this).index() + 1) / 6)) {
				if (!($(this).find(".people-dec").is(":visible"))) {
					$(this).find(".people-dec").show();
					$(this).find(".people-dec").animate({left: "-225px", opacity: 1}, 1000);
				} else {
					$(this).find(".people-dec").animate({left: "0px", opacity: 0}, 1000);
					setTimeout(function () {
						$(".sjs-picshow").find(".people-dec").remove();
					}, 1000);
				}
			} else {
				if (!($(this).find(".people-dec").is(":visible"))) {
					$(this).find(".people-dec").show();
					$(this).find(".people-dec").animate({left: "184px", opacity: 1}, 1000);
				} else {
					$(this).find(".people-dec").animate({left: "0px", opacity: 0}, 1000);
					setTimeout(function () {
						$(".sjs-picshow").find(".people-dec").remove();
					}, 1000);
				}

			}

		})*/

	//	品牌设计
	$(".brand-list .brand-box").each(function () {

		$(this).hover(function () {
			$(".brand-show-wrap .gs-name").html($(this).attr('data-title'));
		})

	})

	//	友情链接tab
	$(".friend-title a").hover(function () {
		if ($(this).hasClass('cur')) {

		} else {
			$(".friend-wrap a").removeClass('cur');
			$(this).addClass('cur');
			var oIndex = $(this).index();
			$('.flink').hide();
			$('.flink:eq(' + oIndex + ')').show();
		}
	})

})
