$(document).ready(function () {
	//	首页菜单效果

	$(".site-menu ul li").eq(0).addClass("innav");
	var $tDiv = $(".site-menu "),
		$links = $tDiv.find("a"),
		index = 0, //默认第一个菜单项
		urls = location.href.split('?')[0].split('/'); //取得"?"以前的所以"/"截止的所有字符串
	for (var j = urls.length - 1; j > 0; j--) {
		$(".site-menu ul li").eq(0).removeClass("innav");
		if (urls[j] != "index.html") { //判断改字符串是否是"index.html",如果是则返回,如果不是则执行循环
			for (var i = 0; i < $links.length; i++) { //循环底部导航栏li里面的a
				if ($links[i].href.toLocaleLowerCase().indexOf(urls[j]) != -1) {
					index = i;
					$tDiv.find("li:eq(" + index + ")").addClass("innav");
					return;
				}
			}
		}
	}

})
