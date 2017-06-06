// "分享好友"按钮事件
$(".share-btn").click(function(){
	// 如果已锁定触摸，不允许执行
	if(typeof(touchLock) != 'undefined' && touchLock){
		return false;
	}
	
	$(".share_box").show().animate({bottom: "0px"}, 600);
	
	// 弹出分享后，禁止滑动页面
	$("body").bind("touchmove", function(event) {
		if(event.preventDefault){
			event.preventDefault();// 阻止浏览器默认事件
		}
	});
});

// "取消"按钮事件
$(".share-cancel-btn").click(function(){
	$(".share_box").animate({bottom: "-160px"}, 600, 'swing', function(){$(".share_box").hide();});
	
	// 取消分享后，解除滑动
	$("body").unbind("touchmove");
});

// 按钮点击状态样式
$(".footerbar a").bind('touchstart mousedown', function(){
	$(this).addClass('active');
	return true;
}).bind('touchend mouseup', function(){
	$(this).removeClass('active');
	return true;
});


//微信分享开始
$(".weixin_button").click(function() {
	// alert(11111);exit;
	 var lujing=$("#logimg").attr("src");  //分享中带有的图片
    var url=window.location.href;         //分享页的地址
    var title=document.title;             //分享内容的标题
    weixin("http://m.e-iot.com/images/bg.jpg",url,title);
});
function weixin(a,b,c){ 
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {


window.shareData = {
"imgUrl": a,
"timeLineLink": b,
"sendFriendLink": b,
"weiboLink": b,
"tTitle": c,
"tContent": "8+1互助平台---营销型网站互助分享会",
"fTitle": c,
"fContent": "8+1互助平台---营销型网站互助分享会",
"wContent": "8+1互助平台---营销型网站互助分享会"
};


// 发送给好友
WeixinJSBridge.on('menu:share:appmessage', function (argv) {
WeixinJSBridge.invoke('sendAppMessage', {
"img_url": window.shareData.imgUrl,
"img_width": "640",
"img_height": "640",
"link": window.shareData.sendFriendLink,
"desc": window.shareData.fContent,
"title": window.shareData.fTitle
}, function (res) {
_report('send_msg', '111111');
})
});


// 分享到朋友圈
WeixinJSBridge.on('menu:share:timeline', function (argv) {
WeixinJSBridge.invoke('shareTimeline', {
"img_url": window.shareData.imgUrl,
"img_width": "640",
"img_height": "640",
"link": window.shareData.timeLineLink,
"desc": window.shareData.tContent,
"title": window.shareData.tTitle
}, function (res) {
_report('timeline', res.err_msg);
});
});


// 分享到微博
WeixinJSBridge.on('menu:share:weibo', function (argv) {
WeixinJSBridge.invoke('shareWeibo', {
"content": window.shareData.wContent,
"url": window.shareData.weiboLink
}, function (res) {
_report('weibo', res.err_msg);
});
});
}, false)}


//微信分享结束


$('.share_box a').each(function(){
	var href=$(this).attr('href');
	if(href.indexOf("weibo")!=-1){
		var host="http://"+window.location.host;
		var title=document.title;
		var url=window.location.href;
		var imgsrc=$('.main-pic-img').attr('src')
		if(typeof(imgsrc)=='undefined'){
			var imgsrc=$('#bg').attr('src')
		}
		if(typeof(imgsrc)=='undefined'){
			var imgsrc=$(".content").find('img').attr('src');
		}
	$(this).attr('href',href+'&title='+title+'&url='+url+'&pic='+imgsrc)
	}


	if(href.indexOf("t.qq")!=-1){
		var host="http://"+window.location.host;
		var title=document.title;
		var url=window.location.href;
		var imgsrc=$('.main-pic-img').attr('src')
		if(typeof(imgsrc)=='undefined'){
			var imgsrc=$('#bg').attr('src')
		}
		if(typeof(imgsrc)=='undefined'){
			var imgsrc=$(".content").find('img').attr('src');
		}
	$(this).attr('href',href+'title='+title+'&url='+url+'&pic='+imgsrc)
	}

	if(href.indexOf("renren")!=-1){
			var host="http://"+window.location.host;
			
			var title=document.title;
			var url=window.location.href;
			var imgsrc=$('.main-pic-img').attr('src')
			if(typeof(imgsrc)=='undefined'){
				var imgsrc=$('#bg').attr('src')
			}
			if(typeof(imgsrc)=='undefined'){
				var imgsrc=$(".content").find('img').attr('src');
			}
		$(this).attr('href',href+'Url='+url+'&title='+title+'&pic='+imgsrc)
		}



	if(href.indexOf("qzone")!=-1){
				var host="http://"+window.location.host;
				
				var title=document.title;
				var url=window.location.href;
				var imgsrc=$('.main-pic-img').attr('src')
				if(typeof(imgsrc)=='undefined'){
					var imgsrc=$('#bg').attr('src')
				}
				if(typeof(imgsrc)=='undefined'){
					var imgsrc=$(".content").find('img').attr('src');
				}
			$(this).attr('href',href+'url='+url+'&title='+title+'&pic='+imgsrc)
			}





})