<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 22:32:42
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\home\maps.html" */ ?>
<?php /*%%SmartyHeaderCode:1718859341a0a770fd0-46810302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd3b221f50f33d6edbbb0875ea58393b809ad03' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\home\\maps.html',
      1 => 1432211970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718859341a0a770fd0-46810302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'area_list' => 0,
    'v' => 0,
    'attr_values' => 0,
    'item' => 0,
    'it2' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59341a0ab350a6_38040949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59341a0ab350a6_38040949')) {function content_59341a0ab350a6_38040949($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
$(document).ready(function()
{
	var height = $(window).height();
	$("#baidumap").css("height",height-90);			
	$(window).resize(function(){
		var height = $(window).height();
		$("#baidumap").css("height",height-90);					  
	});
	$('#bg').click(function(){
		var width = $(window).width();
		$(".map_side").animate({marginLeft:0});
		$("#baidumap").animate({width:width-370});
		$(".map").animate({marginLeft:'370px'});
		$(".but_close").hide();
		$(".but_open").show();
	});
	
	$('#bg2').click(function(){
		var width = $(window).width();
		$(".map_side").animate({marginLeft:-370});
		$("#baidumap").animate({width:width});
		$(".map").animate({marginLeft:'0px'});
		$(".but_close").show();
		$(".but_open").hide();
	});
}
)
</script>
<div class="map_nav hoverno">
	<ul class="lt">
		<li>
			<a href="<?php echo smarty_function_link(array('ctl'=>'home:map'),$_smarty_tpl);?>
" class="current">楼盘地图</a>
		</li>
         <li>
			<a href="<?php echo smarty_function_link(array('ctl'=>'site:map'),$_smarty_tpl);?>
">工地地图</a>
		</li>
		<li>
			<a href="<?php echo smarty_function_link(array('ctl'=>'gs:map'),$_smarty_tpl);?>
">公司地图</a>
		</li>
	</ul>
  
	<div class="map_search lt">
		<input class="text" type="text" id='Baidu_Map_SO_Key' placeholder="请输入关键字" />
		<input id = 'Baidu_Map_SO_Btn' onclick="search()"  type="button" class="btn" value="搜索" />
	</div>
	<div class="cl"></div>
</div>
<div class="main">
	<div class="map_side">
		<div class="map_side_sort pding" id = 'attr'>
			<select  id ='area' onchange="change()" class="text">
				<option>区域</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</option>
                <?php } ?>
			</select>
            
             <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
               	<select name='attr' class="text">
					<option><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
：</option>
                        <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['it2']->value['attr_value_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</option>
                        <?php } ?>             
				</select>
			 <?php } ?> 
			<div class="cl"></div>
		</div>
		<p class="side_tit">共找到<font class="fontcl2" id='jq_total_nums'>0</font>个楼盘</p>
		<ul class="map_side_menu block_type" id = 'map_main_l_b'>
			
		</ul>
	</div>
	<div class="map">
    	<div class="mapinfo_but_con">
        	<a class="but_open" id = 'bg2'></a>
            <a class="but_close" id = 'bg' style="display:none"></a>
        </div>
		 <div id='baidumap' style="width: auto; height: 970px;"></div>
	</div>
     <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=824a595f958e444b737a5bc6325ad44f"></script>  
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.bmap.js"></script>
<script>
	

	$(document).ready(function () {
		var val = 	area_id = 	attr1 = 	attr2  = '';
		if($("#Baidu_Map_SO_Key").val()){
			var val = $("#Baidu_Map_SO_Key").val();
		}
		if(!isNaN($("#attr select[class='text']").eq(0).val())){
			var area_id = $("#attr select[class='text']").eq(0).val();
		}
		if(!isNaN($("#attr select[class='text']").eq(1).val())){
			var attr1 = $("#attr select[class='text']").eq(1).val();
		}
		if(!isNaN($("#attr select[class='text']").eq(2).val())){
			var attr2 = $("#attr select[class='text']").eq(2).val();
		}
			map(val,area_id,attr1,attr2);		
		
			
	});
	
	function search(){
		var val = 	area_id = 	attr1 = 	attr2  = '';
		if($("#Baidu_Map_SO_Key").val()){
			var val = $("#Baidu_Map_SO_Key").val();
		}
		if(!isNaN($("#attr select[class='text']").eq(0).val())){
			var area_id = $("#attr select[class='text']").eq(0).val();
		}
		if(!isNaN($("#attr select[class='text']").eq(1).val())){
			var attr1 = $("#attr select[class='text']").eq(1).val();
		}
		if(!isNaN($("#attr select[class='text']").eq(2).val())){
			var attr2 = $("#attr select[class='text']").eq(2).val();
		}
		map(val,area_id,attr1,attr2);
	}
	
	$("#attr select[class='text']").change( function() {
		var val = 	area_id = 	attr1 = 	attr2  = '';
		if($("#Baidu_Map_SO_Key").val()){
			var val = $("#Baidu_Map_SO_Key").val();
		}
		if(!isNaN($("#attr select[class='text']").eq(0).val())){
			var area_id = $("#attr select[class='text']").eq(0).val();
		}
		if(!isNaN($("#attr select[class='text']").eq(1).val())){
			var attr1 = $("#attr select[class='text']").eq(1).val();
		}
		if(!isNaN($("#attr select[class='text']").eq(2).val())){
			var attr2 = $("#attr select[class='text']").eq(2).val();
		}
		map(val,area_id,attr1,attr2);
	});
    function map(val,area_id,attr1,attr2) {
        $.ajaxSetup({cache: false});
        var map = new BMap.Map("baidumap");
		
        map.centerAndZoom("<?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
", 14);
		
        map.addEventListener("load",function(){ //加载完成时
            getResult(val,area_id,attr1,attr2);
        });
		 var Control = new BMap.NavigationControl();
		 map.addControl(Control);
		 map.enableScrollWheelZoom(true);
		 map.addEventListener("moveend", function() {
			getResult(val,area_id,attr1,attr2);
		 });
		 map.addEventListener("zoomend", function() {
			getResult(val,area_id,attr1,attr2);
		 });
        
        map.addEventListener("dragend", function() {
            map.clearOverlays();
            getResult(val,area_id,attr1,attr2);
        });
		
        window.markerData = [];    
        window.infoWindowData = [];
        function addMarker(data){
            var point  = new BMap.Point(data.lng,data.lat);
            window.markerData[data.id] = new BMap.Marker(point);
			var sContent ="<div id = '"+data.home_id+"' class='map_position'><span>"+data.name+"</span><div id = 'attr"+data.home_id+"' class='map_pos_bt'></div></div>";		
			var opts = {
			  position : point, 
			  offset   : new BMap.Size(-12, -30) 
			}
			window.infoWindowData[data.id] = new BMap.Label(sContent, opts);  // 创建文本标注对象]
			window.infoWindowData[data.id].setStyle({border : "0"});
			var content = '';
			content +="<div class='map_tip pding'>";
			content +="<div class='map_tip_top'>";
			content +="<p class='cl'></p></div><div class='map_tip_intro'><div class='lt'>";
			content +="<img src='<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/"+data.thumb+"' title='"+data.name+"' class='pic'/>";
			content +="</div><div class='rt'>";
			content +="<p>参考均价：<b class='fontcl2'>"+data.price+"</b>元/平方米</p>";
			content +="<p>楼盘地址："+data.addr+"</p>";
			content +="<p>竣工时间："+data.jf_date+"</p>";
			content +="<p>开盘时间："+data.kp_date+"</p>";
			content +="<a href="+data.link+" class='rt' style='margin-right:25px;'>查看楼盘详情>></a>";
			content +="</div><div class='cl'></div></div></div>";		
				
				
			map.addOverlay(window.infoWindowData[data.id]); 
			var infoWindow = new BMap.InfoWindow(content,{
			title: "<h3 class='lt'>"+data.name+"</h3>", //标题  									 
			enableAutoPan : true, //自动平移
			width: 450, //宽度  
            height: 190, //高度  
			enableMessage:false});  // 创建信息窗口对象
			
            window.infoWindowData[data.id].addEventListener("click", function(){ 
				 map.openInfoWindow(infoWindow, point);
             
            });
            window.markerData[data.id].openInfoWindow(window.infoWindowData[data.id]);
			$('.map_position').mouseover(function(){
				$(this).find('.map_pos_bt').addClass('map_mouseover');
			}).mouseout(function(){
				$(this).find('.map_pos_bt').removeClass('map_mouseover');
			})
			
        }
		$(".map_main_l_b_1").live('mouseover',function(){
			 var id = $(this).attr('rel');
             $('#'+id).addClass('map_positionjs');
			 $('#attr'+id).addClass('map_mouseover');
             
        });
        $(".map_main_l_b_1").live('mouseout',function(){
			var id = $(this).attr('rel');
		   $('#'+id).removeClass('map_positionjs');
           $('#attr'+id).removeClass('map_mouseover');
        }); 
        function calldata(data){
            var str = ' ';
            var i = 0;
            for(a in data){
              i++;
                addMarker(data[a]);        
                str+='			 <li rel='+data[a].home_id+' class="map_main_l_b_1"><a target="_blank" title="'+data[a].name+'"  href="'+data[a].link+'"><h3>'+data[a].name+'</h3></a>';
				str+='			 <p>地址：'+data[a].addr+'</p>';
				str+='           <p><span class="lt">竣工时间：'+data[a].jf_date+'</span><span class="rt"><b class="fontcl2">'+data[a].price+'</b>元/㎡</span></p>';
				str+='           <p class="cl"></p>';
				str+='           </li>';
            } 
            $("#map_main_l_b").html(str);

        }
        function getResult(val,area_id,attr1,attr2) {
            var bs = map.getBounds();   //获取可视区域
            var bssw = bs.getSouthWest();   //可视区域左下角
            var bsne = bs.getNorthEast();   //可视区域右上角
            $.post(
                '<?php echo smarty_function_link(array('ctl'=>"home:result"),$_smarty_tpl);?>
',
                {'SO[lng_start]':bssw.lng,'SO[lng_end]':bsne.lng,'SO[lat_start]':bssw.lat,'SO[lat_end]':bsne.lat,'SO[name]':val,'SO[area_id]':area_id,'SO[attr1]':attr1,'SO[attr2]':attr2},
                 function(data) {
                    if(data.result){
                       $("#jq_total_nums").html(data.total);
                       calldata(data.result);
                    }
                },'json'
            );
        }
    };
</script>    



<?php }} ?>