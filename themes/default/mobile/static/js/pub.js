$(document).ready(function () {
	if ($('.tender').length == 0)
	{
		$('.page_center_box').css('padding-bottom', 0);
	}//判断底部招标是否存在，存在内容page_center_box部分底部padding-bottom值为0！
	if ($('.zxCompanyFoot').length > 0)
	{
		$('.page_center_box').css('padding-bottom', '0.6rem');
	}
	
	if ($('#search-bar').length > 0)/*判断是否存在这个html代码*/
	{
		$('#search-bar .list').width(100 / $('#search-bar .list').length + '%');
		$('.page_center_box').css('top', '0.9rem');
	}
	if ($('#search-barTwo').length > 0)/*判断是否存在这个html代码*/
	{
		$('#search-barTwo .list').width(100 / $('#search-barTwo .list').length + '%');
		$('.page_center_box').css('top', '0.9rem');
	}
	if ($('#htSearch-bar').length > 0)
	{
		$('#htSearch-bar .list').width(100 / $('#htSearch-bar .list').length + '%');
		$('.page_center_box').css('top', '0.9rem');
	}
	if ($('#topSearch').length > 0&&$('#search-bar').length > 0)/*判断是否存在这个html代码*/
	{	
		$('#search-bar').css('top', '1.05rem');
		$('.page_center_box').css('top', '1.44rem');
	}else if($('#topSearch').length > 0){
		$('.page_center_box').css('top', '1.05rem');
	}

	//首页滚动效果
	var myscroll;
	function loaded() {
		setTimeout(function() {
				myscroll = new iScroll("wrapper", {
					hScrollbar: false,
					vScrollbar: false,

					onBeforeScrollStart: null
				});
			},
			100);
	}
	window.addEventListener("load", loaded, false);
	
	//案例美图切换
	$(".m-anli-menu li").each(function(index, el) {
		$(this).click(function(event) {
			/* Act on the event */
			$(".anli-meitu ul").css('display','none');
			$(".anli-meitu ul").eq(index).css('display','block');
		});
	});

});