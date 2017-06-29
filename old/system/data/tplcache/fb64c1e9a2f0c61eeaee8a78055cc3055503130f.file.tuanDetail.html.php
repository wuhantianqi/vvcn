<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:05:10
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\home\tuanDetail.html" */ ?>
<?php /*%%SmartyHeaderCode:10752593405864ea511-17819752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb64c1e9a2f0c61eeaee8a78055cc3055503130f' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\home\\tuanDetail.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10752593405864ea511-17819752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'tuan' => 0,
    'pager' => 0,
    'home' => 0,
    'item' => 0,
    'package' => 0,
    'p' => 0,
    'huxing' => 0,
    'company' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59340586c4d416_98205206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340586c4d416_98205206')) {function content_59340586c4d416_98205206($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
        <p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
            ><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
">团装小区</a>><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['title'];?>
</a>
        </p>
</div>
<!--面包屑导航结束-->
<div class="subwd mb20">
    <!--左边内容开始-->
    <div class="sub_activity_lt lt">
        <div class="mb10 area">
            <div class="tuanzh_detail_top">
                <span>已报名<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['sign_num'];?>
</font>户</span>
                <span>已签约<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['qy_num'];?>
</font>户</span>
                <span>已施工<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['sg_num'];?>
</font>户</span>
            </div>
            <div class="tuanzh_detail_tpmu">
                <ul>
                    <li>
                        <p class="tit">免费量房</p>
                        <p>现场清楚了解需求</p>
                        <p>给客户以专业建议</p>
                    </li>
                    <li>
                        <p class="tit">免费设计方案</p>
                        <p>免费获取最规范、</p>
                        <p>最实用的设计方案</p>
                    </li>
                    <li class="last">
                        <p class="tit">免费预算</p>
                        <p>精准装修预算报价</p>
                        <p>装修费用更省30%</p>
                    </li>
                </ul>
                <div class="cl"></div>
            </div>
        </div>
        <div class="mb10 area sub_activity pding">
            <div class="sub_activity tuanzh_detail_intro">
                <a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id']),$_smarty_tpl);?>
" class="lt pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['home']->value['thumb'];?>
"/></a>
                <div class="sub_activity_rt tuanzh_pic_rt rt">
                    <h1><a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
</a></h1>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
"><u class="fontcl1">查看小区详情<?php echo $_smarty_tpl->tpl_vars['item']->value['ltime'];?>
</u></a></p>
                    <p class="price">报名立省 :<font class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['tuan']->value['jieyue'];?>
</font></p>
                    <p class="title">
                        <?php if ($_smarty_tpl->tpl_vars['tuan']->value['stime']>$_smarty_tpl->tpl_vars['pager']->value['dateline']){?>
                        <span class="ico_list sub_over_time_ico"></span>
                        <?php }elseif($_smarty_tpl->tpl_vars['tuan']->value['ltime']<$_smarty_tpl->tpl_vars['pager']->value['dateline']){?>
                        <span class="ico_list sub_over_time_ico"></span>                        
                        <?php }else{ ?>
                        <span class="ico_list sub_youhui_time"></span>
                        <?php }?>
                        <span dataline="<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" stime="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['stime'];?>
" remaintime="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['ltime'];?>
"></span>
                    </p>    
                    <h2>
                    <?php if ($_smarty_tpl->tpl_vars['tuan']->value['stime']>$_smarty_tpl->tpl_vars['pager']->value['dateline']){?>
                    <a class="btn btn_over_tuan">还未开始</a>
                    <?php }elseif($_smarty_tpl->tpl_vars['tuan']->value['ltime']<$_smarty_tpl->tpl_vars['pager']->value['dateline']){?>
                    <a class="btn btn_over_tuan">报名结束</a>
                    <?php }else{ ?>
                    <a mini-load='团装报名' mini-width='500' href="<?php echo smarty_function_link(array('ctl'=>'home:tuanSign','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id'],'http'=>'ajax'),$_smarty_tpl);?>
" class="btn btn_sub_tuan">我要报名</a>
                    <?php }?>
                    </h2>
                </div>
                <div class="cl"></div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['package']->value){?>
        <div class="mb10 area">         
            <table class="tuanzh_taocan" cellpadding="0" cellspacing="0">
                <tr><th>户型</th><th>套餐价</th><th>我要报名</th></tr>                
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['package']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                <tr>
                   <td><?php echo $_smarty_tpl->tpl_vars['huxing']->value[$_smarty_tpl->tpl_vars['p']->value['huxing_id']]['title'];?>
</td>
                   <td> <font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
</font>元/平米</td>                   
                   <td> <?php if ($_smarty_tpl->tpl_vars['tuan']->value['ltime']>time()&&$_smarty_tpl->tpl_vars['tuan']->value['stime']<time()){?><a  mini-load='我要报名' mini-width='500' href="<?php echo smarty_function_link(array('ctl'=>'home:tuanSign','arg0'=>$_smarty_tpl->tpl_vars['tuan']->value['tuan_id'],'arg1'=>$_smarty_tpl->tpl_vars['p']->value['package_id'],'http'=>'ajax'),$_smarty_tpl);?>
" class="btn btn_sub_sm">立即报名</a><?php }else{ ?><a href="#" class="btn youhui_over_btn">已结束</a><?php }?></td>
                </tr>
                <?php } ?>                
            </table>
        </div>
        <?php }?>
        <div class="mb20 area">
            <h3 class="side_tit">活动详情</h3>
            <div class="pding"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['content'];?>
</div>
        </div>
    </div>
    <!--左边内容结束-->
    <!--右边内容开始-->
    <div class="side_content rt">
        <?php if ($_smarty_tpl->tpl_vars['company']->value){?>
        <div class="area sub_activity_sj mb10">
            <h3><b>商家信息</b></h3>
            <a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['thumb'];?>
" /></a>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
" class="tit"><b><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</b></a></p>
            <p>在线客服：<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['company']->value['qq'];?>
&site=qq&menu=yes" class="ico_list qq_ico"></a></p>
            <p>服务热线：<?php echo $_smarty_tpl->tpl_vars['company']->value['show_phone'];?>
</p>
            <p>信誉指数：<?php echo $_smarty_tpl->tpl_vars['company']->value['score'];?>
</p>
            <p>公司口号：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['company']->value['slogan'],20,'...');?>
</p>
        </div>
        <?php }else{ ?>
        <?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>
            
        <?php }?>
        <div class="area mb20 ">
            <h3 class="side_tit">最新享受免费服务的业主</h3>
            <ul class="tuanzh_side_menu">
                <li class="title"><span style="width:30%">业主</span><span>联系电话</span><span style="width:30%">日期</span></li>
            </ul>
            <div class="index_nwod_box">
             <ul class="tuanzh_side_menu">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/sign",'limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/sign",'limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><span style="width:25%"><{$item.contact|cutstr:3:'**'}></span><span><{$item.mobile|cutstr:5:'**'}></span><span style="width:30%"><{date('m/d',$item.dateline)}></span></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/sign",'limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            </div>
        </div>
        <div class="mb10 area">
            <h3 class="side_tit">装修公司排行榜</h3>
            <ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name}></a></span>
                    <span class="rt">接单数：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>    
    </div>   
    <!--右边内容结束-->
    <div class="cl"></div>
</div>
<script type="text/javascript">
(function(K, $){
    $(function(){
    var dateTime = new Date();
    var difference = dateTime.getTime() - <?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
*1000; 
    setInterval(function(){
      $("[remaintime]").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('remaintime')) * 1000);
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + difference;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
        var myH=Math.floor(nMS/(1000*60*60)) % 24;
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
        if(myD>= 0){
            var str = myD+"天"+myH+"小时"+myM+"分"+myS+"."+myMS+"秒";
        }else{
            var str = "真遗憾您来晚了，抢购已经结束。";    
        }
        obj.html(str);
      });
    }, 100);
});
})(window.KT, window.jQuery);
</script>
<script>
    jQuery(window).load(function () {
            var width = document.body.clientWidth;
            if(width>700){
                width=700;  
            }
            jQuery("img").each(function () {
                DrawImage(this,width,1000);
            });
        });
        function DrawImage(ImgD, FitWidth, FitHeight) {
            var image = new Image();
            image.src = ImgD.src;
            if (image.width > 0 && image.height > 0) {
                if (image.width / image.height >= FitWidth / FitHeight) {
                    if (image.width > FitWidth) {
                        ImgD.width = FitWidth;
                        ImgD.height = (image.height * FitWidth) / image.width;
                    } else {
                        ImgD.width = image.width;
                        ImgD.height = image.height;
                    }
                } else {
                    if (image.height > FitHeight) {
                        ImgD.height = FitHeight;
                        ImgD.width = (image.width * FitHeight) / image.height;
                    } else {
                        ImgD.width = image.width;
                        ImgD.height = image.height;
                    }
                }
            }
        }
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>