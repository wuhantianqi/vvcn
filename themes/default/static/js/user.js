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

})
