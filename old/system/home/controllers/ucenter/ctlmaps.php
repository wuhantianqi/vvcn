<?php
/*
  title =>  显示标题
  ctl       =>  ctl:act
  priv  => 权限,默认全部权限(gz,hotel,shop)
  menu  => 是否显示菜单, 只有有相应权限并且这里设置true才会显示在菜单上
 */
return
array(
    ///会员菜单
    'member' => array(
        array('title'=>'帐户管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'个人中心', 'ctl'=>'ucenter/index:index', 'nav'=>'ucenter/member:index'),
                array('title'=>'个人中心', 'ctl'=>'ucenter/member:index', 'menu'=>true),
                array('title'=>'修改资料', 'ctl'=>'ucenter/member:info', 'menu'=>true),
                array('title'=>'上传头像', 'ctl'=>'ucenter/member:passwd', 'nav'=>'ucenter/member:info'),
                array('title'=>'更换邮箱', 'ctl'=>'ucenter/member:mail', 'nav'=>'ucenter/member:info'),
                array('title'=>'修改头像', 'ctl'=>'ucenter/member:face', 'nav'=>'ucenter/member:info'),
                array('title'=>'上传头像', 'ctl'=>'ucenter/member:upload', 'nav'=>'ucenter/member:info'),
                array('title'=>'实名认证', 'ctl'=>'ucenter/member/verify:name', 'menu'=>true),
                array('title'=>'手机认证', 'ctl'=>'ucenter/member/verify:mobile', 'nav'=>'ucenter/member/verify:name'),
                array('title'=>'手机认证', 'ctl'=>'ucenter/member/verify:code', 'nav'=>'ucenter/member/verify:name'),
                array('title'=>'EMAIL认证', 'ctl'=>'ucenter/member/verify:mail', 'nav'=>'ucenter/member/verify:name'),
                array('title'=>'帐号绑定', 'ctl'=>'ucenter/member:bindaccount', 'menu'=>true),
                array('title'=>'金币日志', 'ctl'=>'ucenter/member:logs', 'menu'=>true),
                array('title'=>'我的金币', 'ctl'=>'ucenter/member:gold', 'nav'=>'ucenter/member:logs'),
            )
        ),
        array('title'=>'内容管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'装修日记', 'ctl'=>'ucenter/member/diary:index', 'menu'=>true),
                array('title'=>'创建日记', 'ctl'=>'ucenter/member/diary:create', 'nav'=>'ucenter/member/diary:index'),
                array('title'=>'修改日记', 'ctl'=>'ucenter/member/diary:edit', 'nav'=>'ucenter/member/diary:index'),
                array('title'=>'删除日记', 'ctl'=>'ucenter/member/diary:delete', 'nav'=>'ucenter/member/diary:index'),
                array('title'=>'日记文章', 'ctl'=>'ucenter/member/diary:detail', 'nav'=>'ucenter/member/diary:index'),
                array('title'=>'添加文章', 'ctl'=>'ucenter/member/diary:createDiary', 'nav'=>'ucenter/member/diary:index'),
                array('title'=>'修改文章', 'ctl'=>'ucenter/member/diary:editDiary', 'nav'=>'ucenter/member/diary:index'),
                array('title'=>'删除文章', 'ctl'=>'ucenter/member/diary:deleteDiary', 'nav'=>'ucenter/member/diary:index'),
                
                array('title'=>'装修问答', 'ctl'=>'ucenter/member/ask:index', 'menu'=>true),
                array('title'=>'我的回答', 'ctl'=>'ucenter/member/ask:answer', 'nav'=>'ucenter/member/ask:index'),
                /*
                array('title'=>'我的评论', 'ctl'=>'ucenter/member/ask:index', 'menu'=>true),
                array('title'=>'我的回答', 'ctl'=>'ucenter/member/ask:answer', 'nav'=>'ucenter/member/diary:index'),
                */
            )
        ),        
        array('title'=>'我的订单', 'menu'=>true,
            'items'=>array(
                array('title'=>'商城订单', 'ctl'=>'ucenter/member/order:index', 'menu'=>true),
                array('title'=>'更新订单', 'ctl'=>'ucenter/member/order:update', 'nav'=>'ucenter/member/order:index'),
                array('title'=>'我的招标', 'ctl'=>'ucenter/member/yuyue:tenders', 'menu'=>true),
                array('title'=>'查看招标', 'ctl'=>'ucenter/member/yuyue:tendersDetail', 'nav'=>'ucenter/member/yuyue:tendersx'),
                array('title'=>'完善招标', 'ctl'=>'ucenter/member/yuyue:tendersEdit', 'nav'=>'ucenter/member/yuyue:tenders'),
                array('title'=>'设置中标', 'ctl'=>'ucenter/member/yuyue:signLook', 'nav'=>'ucenter/member/yuyue:tenders'),
                array('title'=>'我的预约', 'ctl'=>'ucenter/member/yuyue:company', 'menu'=>true),
                array('title'=>'查看预约', 'ctl'=>'ucenter/member/yuyue:companyDetail', 'nav'=>'ucenter/member/yuyue:company'),
                array('title'=>'预约设计师', 'ctl'=>'ucenter/member/yuyue:designer', 'nav'=>'ucenter/member/yuyue:company'),
                array('title'=>'查看预约', 'ctl'=>'ucenter/member/yuyue:designerDetail', 'nav'=>'ucenter/member/yuyue:company'),
                array('title'=>'预约技工', 'ctl'=>'ucenter/member/yuyue:mechanic', 'nav'=>'ucenter/member/yuyue:company'),               
                array('title'=>'查看技工', 'ctl'=>'ucenter/member/yuyue:mechanicDetail', 'nav'=>'ucenter/member/yuyue:company'),   
                array('title'=>'商铺预约', 'ctl'=>'ucenter/member/yuyue:shop', 'nav'=>'ucenter/member/yuyue:company'),
                array('title'=>'查看预约', 'ctl'=>'ucenter/member/yuyue:shopDetail', 'nav'=>'ucenter/member/yuyue:company'),
                array('title'=>'我的优惠券', 'ctl'=>'ucenter/member:coupon', 'menu'=>true)
            )
        ),
        array('title'=>'常用功能', 'menu'=>false,
            'items'=>array(
                array('title'=>'选择小区', 'ctl'=>'ucenter/misc/select:home'),
                array('title'=>'选择公司', 'ctl'=>'ucenter/misc/select:company'),
                array('title'=>'选择户型', 'ctl'=>'ucenter/misc/select:huxing'),
                array('title'=>'我的案例', 'ctl'=>'ucenter/misc/select:mycase'),
                array('title'=>'访问主页', 'ctl'=>'ucenter/member:home'),
                array('title'=>'我的权限', 'ctl'=>'ucenter/member:group'),
            )
        ),
    ),
    ///设计师
    'designer' => array(
        array('title'=>'资料设置', 'menu'=>true,
            'items'=>array(
                array('title'=>'资料设置', 'ctl'=>'ucenter/designer:index', 'menu'=>true),
                array('title'=>'资料设置', 'ctl'=>'ucenter/designer:info', 'nav'=>'ucenter/designer:index'),
                array('title'=>'属性设置', 'ctl'=>'ucenter/designer:attr', 'nav'=>'ucenter/designer:index'),
				array('title'=>'刷新置顶', 'ctl'=>'ucenter/designer:refresh', 'nav'=>'ucenter/designer:index'),
            )
        ),
        array('title'=>'装修案例', 'menu'=>true,
            'items'=>array(
                array('title'=>'案例管理', 'ctl'=>'ucenter/designer/case:index', 'menu'=>true),
                array('title'=>'添加案例', 'ctl'=>'ucenter/designer/case:create', 'nav'=>'ucenter/designer/case:index'),
                array('title'=>'编辑案例', 'ctl'=>'ucenter/designer/case:edit', 'nav'=>'ucenter/designer/case:index'),
                array('title'=>'案例图片', 'ctl'=>'ucenter/designer/case:detail', 'nav'=>'ucenter/designer/case:index'),
                array('title'=>'删除案例', 'ctl'=>'ucenter/designer/case:delete', 'nav'=>'ucenter/designer/case:index'),
                array('title'=>'更新图片', 'ctl'=>'ucenter/designer/case:update', 'nav'=>'ucenter/designer/case:index'),
                array('title'=>'上传图片', 'ctl'=>'ucenter/designer/case:upload', 'nav'=>'ucenter/designer/case:index'),
                array('title'=>'删除图片', 'ctl'=>'ucenter/designer/case:deletephoto', 'nav'=>'ucenter/designer/case:index'),
				array('title'=>'封面', 'ctl'=>'ucenter/designer/case:defaultphoto', 'nav'=>'ucenter/designer/case:index'),
            )
        ),
		array('title'=>'文章管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'文章管理', 'ctl'=>'ucenter/designer/blog:index', 'menu'=>true),
                array('title'=>'添加文章', 'ctl'=>'ucenter/designer/blog:create', 'nav'=>'ucenter/designer/blog:index'),
                array('title'=>'编辑文章', 'ctl'=>'ucenter/designer/blog:edit', 'nav'=>'ucenter/designer/blog:index'),
                array('title'=>'删除文章', 'ctl'=>'ucenter/designer/blog:delete', 'nav'=>'ucenter/designer/blog:index')
            )
        ),
        array('title'=>'预约管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'预约管理', 'ctl'=>'ucenter/designer/yuyue:designer', 'menu'=>true), 
                array('title'=>'预约详情', 'ctl'=>'ucenter/designer/yuyue:detail', 'nav'=>'ucenter/designer/yuyue:designer'),
                array('title'=>'更新预约', 'ctl'=>'ucenter/designer/yuyue:save', 'nav'=>'ucenter/designer/yuyue:designer'),        
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:index', 'menu'=>true),
                array('title'=>'招标详情', 'ctl'=>'ucenter/misc/tenders:detail', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:look', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我的竞标', 'ctl'=>'ucenter/misc/tenders:looked', 'menu'=>true), 
                array('title'=>'竞标跟踪', 'ctl'=>'ucenter/misc/tenders:track', 'nav'=>'ucenter/misc/tenders:looked'),
                array('title'=>'竞标留言', 'ctl'=>'ucenter/misc/tenders:comment', 'nav'=>'ucenter/misc/tenders:looked'),
            )
        ),              
    ),

    ///技工
    'mechanic' => array(
        array('title'=>'资料设置', 'menu'=>true,
            'items'=>array(
                array('title'=>'资料设置', 'ctl'=>'ucenter/mechanic:index', 'menu'=>true),
                array('title'=>'属性设置', 'ctl'=>'ucenter/mechanic:info', 'nav'=>'ucenter/mechanic:index'),
                array('title'=>'属性设置', 'ctl'=>'ucenter/mechanic:attr', 'nav'=>'ucenter/mechanic:index'),
				array('title'=>'刷新技工', 'ctl'=>'ucenter/mechanic:refresh', 'nav'=>'ucenter/mechanic:index'),
            )
        ),
        array('title'=>'预约管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'预约管理', 'ctl'=>'ucenter/mechanic/yuyue:mechanic', 'menu'=>true), 
                array('title'=>'预约详情', 'ctl'=>'ucenter/mechanic/yuyue:detail', 'nav'=>'ucenter/mechanic/yuyue:mechanic'),
                array('title'=>'更新预约', 'ctl'=>'ucenter/mechanic/yuyue:save', 'nav'=>'ucenter/mechanic/yuyue:mechanic'),
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:index', 'menu'=>true),
                array('title'=>'招标详情', 'ctl'=>'ucenter/misc/tenders:detail', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:look', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我的竞标', 'ctl'=>'ucenter/misc/tenders:looked', 'menu'=>true), 
                array('title'=>'竞标跟踪', 'ctl'=>'ucenter/misc/tenders:track', 'nav'=>'ucenter/misc/tenders:looked'),
                array('title'=>'竞标留言', 'ctl'=>'ucenter/misc/tenders:comment', 'nav'=>'ucenter/misc/tenders:looked'),                
            )
        ),              
    ),

    ///公司菜单
    'company' => array(
        array('title'=>'公司管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'管理中心', 'ctl'=>'ucenter/company:index', 'menu'=>true),
                array('title'=>'公司设置', 'ctl'=>'ucenter/company:info', 'menu'=>true),
				array('title'=>'刷新置顶', 'ctl'=>'ucenter/company:refresh', 'nav'=>'ucenter/company:index'),
                array('title'=>'模板设置', 'ctl'=>'ucenter/company:skin', 'nav'=>'ucenter/company:info'),
                array('title'=>'轮转广告', 'ctl'=>'ucenter/company/banner:index', 'nav'=>'ucenter/company:info'),
                array('title'=>'上传图片', 'ctl'=>'ucenter/company/banner:upload', 'nav'=>'ucenter/company:info'),
                array('title'=>'更新广告', 'ctl'=>'ucenter/company/banner:update', 'nav'=>'ucenter/company:info'),
                array('title'=>'删除广告', 'ctl'=>'ucenter/company/banner:delete', 'nav'=>'ucenter/company:info'),
                array('title'=>'荣誉资质', 'ctl'=>'ucenter/company/photo:index', 'menu'=>true),
                array('title'=>'添加图片', 'ctl'=>'ucenter/company/photo:create', 'nav'=>'ucenter/company/photo:index'),
                array('title'=>'更新图片', 'ctl'=>'ucenter/company/photo:update', 'nav'=>'ucenter/company/photo:index'),
                array('title'=>'删除图片', 'ctl'=>'ucenter/company/photo:delete', 'nav'=>'ucenter/company/photo:index'),
                array('title'=>'团队管理', 'ctl'=>'ucenter/company/team:index', 'menu'=>true),
                array('title'=>'绑定设计师', 'ctl'=>'ucenter/company/team:bind', 'nav'=>'ucenter/company/team:index'),
                array('title'=>'解雇设计师', 'ctl'=>'ucenter/company/team:unbind', 'nav'=>'ucenter/company/team:index'),
                array('title'=>'企业新闻', 'ctl'=>'ucenter/company/news:index', 'menu'=>true),
                array('title'=>'发布新闻', 'ctl'=>'ucenter/company/news:create', 'nav'=>'ucenter/company/news:index'),
                array('title'=>'编辑新闻', 'ctl'=>'ucenter/company/news:edit','nav'=>'ucenter/company/news:index'),               
                array('title'=>'删除新闻', 'ctl'=>'ucenter/company/news:delete','nav'=>'ucenter/company/news:index'),
            )
        ),
        array('title'=>'装修案例', 'menu'=>true,
            'items'=>array(
                array('title'=>'案例管理', 'ctl'=>'ucenter/company/case:index', 'menu'=>true),
                array('title'=>'添加案例', 'ctl'=>'ucenter/company/case:create', 'nav'=>'ucenter/company/case:index'),
                array('title'=>'编辑案例', 'ctl'=>'ucenter/company/case:edit', 'nav'=>'ucenter/company/case:index'),
                array('title'=>'案例图片', 'ctl'=>'ucenter/company/case:detail', 'nav'=>'ucenter/company/case:index'),
                array('title'=>'删除案例', 'ctl'=>'ucenter/company/case:delete', 'nav'=>'ucenter/company/case:index'),
                array('title'=>'更新图片', 'ctl'=>'ucenter/company/case:update', 'nav'=>'ucenter/company/case:index'),
                array('title'=>'上传图片', 'ctl'=>'ucenter/company/case:upload', 'nav'=>'ucenter/company/case:index'),
                array('title'=>'删除图片', 'ctl'=>'ucenter/company/case:deletephoto', 'nav'=>'ucenter/company/case:index'),
				array('title'=>'封面', 'ctl'=>'ucenter/company/case:defaultphoto', 'nav'=>'ucenter/company/case:index'),
            )
        ),

        array('title'=>'在建工地', 'menu'=>true,
            'items'=>array(
                array('title'=>'工地管理', 'ctl'=>'ucenter/company/site:index', 'menu'=>true),
                array('title'=>'发布工地', 'ctl'=>'ucenter/company/site:create', 'nav'=>'ucenter/company/site:index'),
                array('title'=>'修改工地', 'ctl'=>'ucenter/company/site:edit', 'nav'=>'ucenter/company/site:index'),
                array('title'=>'删除工地', 'ctl'=>'ucenter/company/site:delete', 'nav'=>'ucenter/company/site:index'),
                array('title'=>'工地日记', 'ctl'=>'ucenter/company/diary:site', 'nav'=>'ucenter/company/site:index'),
                array('title'=>'发布日记', 'ctl'=>'ucenter/company/diary:create', 'nav'=>'ucenter/company/site:index'),
                array('title'=>'修改日记', 'ctl'=>'ucenter/company/diary:edit', 'nav'=>'ucenter/company/site:index'),
                array('title'=>'删除日记', 'ctl'=>'ucenter/company/diary:delete', 'nav'=>'ucenter/company/site:index'),
            )
        ),
		array('title'=>'团装小区', 'menu'=>true,
            'items'=>array(
                array('title'=>'团装小区', 'ctl'=>'ucenter/company/tuan:index', 'menu'=>true),
                array('title'=>'报名管理', 'ctl'=>'ucenter/company/tuan:sign', 'nav'=>'ucenter/company/tuan:index'),
                array('title'=>'查看', 'ctl'=>'ucenter/company/tuan:detail', 'nav'=>'ucenter/company/tuan:index'),
               
            )
        ),  
        array('title'=>'优惠信息', 'menu'=>true,
            'items'=>array(
                array('title'=>'优惠信息', 'ctl'=>'ucenter/company/youhui:index', 'menu'=>true),
				array('title'=>'刷新优惠', 'ctl'=>'ucenter/company/youhui:refresh', 'nav'=>'ucenter/company/youhui:index'),
                array('title'=>'发布优惠', 'ctl'=>'ucenter/company/youhui:create', 'nav'=>'ucenter/company/youhui:index'),
                array('title'=>'编辑优惠', 'ctl'=>'ucenter/company/youhui:edit', 'nav'=>'ucenter/company/youhui:index'),
				array('title'=>'删除优惠', 'ctl'=>'ucenter/company/youhui:delete', 'nav'=>'ucenter/company/youhui:index'),
                array('title'=>'报名查看', 'ctl'=>'ucenter/company/youhui:youhuiSign', 'nav'=>'ucenter/company/youhui:index'),
                array('title'=>'查看报名', 'ctl'=>'ucenter/company/youhui:sign', 'menu'=>true),
                array('title'=>'报名详情', 'ctl'=>'ucenter/company/youhui:signDetail', 'nav'=>'ucenter/company/youhui:sign'),
                array('title'=>'更新报名', 'ctl'=>'ucenter/company/youhui:signSave', 'nav'=>'ucenter/company/youhui:sign'),
            )
        ),
        array('title'=>'留言管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'点评管理', 'ctl'=>'ucenter/company/comment:company', 'menu'=>true),
                array('title'=>'查看点评', 'ctl'=>'ucenter/company/comment:detail', 'nav'=>'ucenter/company/comment:company'),
                array('title'=>'回复点评', 'ctl'=>'ucenter/company/comment:reply', 'nav'=>'ucenter/company/comment:company')               
            )
        ),
        array('title'=>'预约管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'预约管理', 'ctl'=>'ucenter/company/yuyue:company', 'menu'=>true), 
                array('title'=>'预约详情', 'ctl'=>'ucenter/company/yuyue:detail', 'nav'=>'ucenter/company/yuyue:company'),
                array('title'=>'更新预约', 'ctl'=>'ucenter/company/yuyue:save', 'nav'=>'ucenter/company/yuyue:company'),
                array('title'=>'预约设计师', 'ctl'=>'ucenter/company/yuyue:designer', 'nav'=>'ucenter/company/yuyue:company'),
                array('title'=>'预约详情', 'ctl'=>'ucenter/company/yuyue:designerDetail', 'nav'=>'ucenter/company/yuyue:company'),
                array('title'=>'更新预约', 'ctl'=>'ucenter/company/yuyue:designerSave', 'nav'=>'ucenter/company/yuyue:company'),
               
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:index', 'menu'=>true),
                array('title'=>'招标详情', 'ctl'=>'ucenter/misc/tenders:detail', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:look', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我的竞标', 'ctl'=>'ucenter/misc/tenders:looked', 'menu'=>true), 
                array('title'=>'竞标跟踪', 'ctl'=>'ucenter/misc/tenders:track', 'nav'=>'ucenter/misc/tenders:looked'),
                array('title'=>'竞标留言', 'ctl'=>'ucenter/misc/tenders:comment', 'nav'=>'ucenter/misc/tenders:looked'),
				
            )
        ),
    ),

    ///商铺菜单
    'shop' => array(
        array('title'=>'商铺管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'商铺中心', 'ctl'=>'ucenter/shop:index', 'menu'=>true),
                array('title'=>'商铺设置', 'ctl'=>'ucenter/shop:base', 'menu'=>true),
                array('title'=>'资料设置', 'ctl'=>'ucenter/shop:info', 'nav'=>'ucenter/shop:base'),
                array('title'=>'SEO设置', 'ctl'=>'ucenter/shop:seo', 'nav'=>'ucenter/shop:base'),
                array('title'=>'购买说明', 'ctl'=>'ucenter/shop:gmsm', 'nav'=>'ucenter/shop:base'),
                array('title'=>'模板设置', 'ctl'=>'ucenter/shop:skin', 'nav'=>'ucenter/shop:base'),
                array('title'=>'商铺子分类', 'ctl'=>'ucenter/shop:catechildren', 'nav'=>'ucenter/shop:base'),
                array('title'=>'轮转广告', 'ctl'=>'ucenter/shop/banner:index', 'nav'=>'ucenter/shop:base'),
                array('title'=>'上传图片', 'ctl'=>'ucenter/shop/banner:upload', 'nav'=>'ucenter/shop:base'),
                array('title'=>'更新广告', 'ctl'=>'ucenter/shop/banner:update', 'nav'=>'ucenter/shop:base'),
                array('title'=>'删除广告', 'ctl'=>'ucenter/shop/banner:delete', 'nav'=>'ucenter/shop:base'),
                array('title'=>'店铺资讯', 'ctl'=>'ucenter/shop/news:index', 'menu'=>true),
                array('title'=>'添加资讯', 'ctl'=>'ucenter/shop/news:create'),
                array('title'=>'修改资讯', 'ctl'=>'ucenter/shop/news:edit'),
                array('title'=>'删除资讯', 'ctl'=>'ucenter/shop/news:delete'),
				array('title'=>'刷新商铺', 'ctl'=>'ucenter/shop:refresh', 'nav'=>'ucenter/shop:index'),
            )
        ),
        array('title'=>'财务管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'财务管理', 'ctl'=>'ucenter/shop/money:shop', 'menu'=>true),
                array('title'=>'申请提现', 'ctl'=>'ucenter/shop/money:tixian', 'nav'=>'ucenter/shop/money:shop'),
            )
        ), 
        array('title'=>'商品管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'店铺分类', 'ctl'=>'ucenter/shop/vcate:index', 'menu'=>true),
                array('title'=>'添加分类', 'ctl'=>'ucenter/shop/vcate:create'),
                array('title'=>'修改分类', 'ctl'=>'ucenter/shop/vcate:edit'),
                array('title'=>'删除分类', 'ctl'=>'ucenter/shop/vcate:delete'),                    
                array('title'=>'商品管理', 'ctl'=>'ucenter/product:index', 'menu'=>true),
                array('title'=>'添加商品', 'ctl'=>'ucenter/product:create', 'nav'=>'ucenter/product:index'),
                array('title'=>'修改商品', 'ctl'=>'ucenter/product:edit', 'nav'=>'ucenter/product:index'),
                array('title'=>'删除商品', 'ctl'=>'ucenter/product:delete', 'nav'=>'ucenter/product:index'),
                array('title'=>'商品图片', 'ctl'=>'ucenter/product:photo', 'nav'=>'ucenter/product:index'),
                array('title'=>'上传图片', 'ctl'=>'ucenter/product:upload', 'nav'=>'ucenter/product:index'),
                array('title'=>'删除图片', 'ctl'=>'ucenter/product:deletephoto', 'nav'=>'ucenter/product:index'),
                array('title'=>'更新图片', 'ctl'=>'ucenter/product:updatephoto', 'nav'=>'ucenter/product:index'),
                array('title'=>'商品规格', 'ctl'=>'ucenter/product:spec', 'nav'=>'ucenter/product:index'),
                array('title'=>'更新规格', 'ctl'=>'ucenter/product:updatespec', 'nav'=>'ucenter/product:index'),
                array('title'=>'删除规格', 'ctl'=>'ucenter/product:deletespec', 'nav'=>'ucenter/product:index'),
            )
        ),
        array('title'=>'评论管理', 'menu'=>true,
            'items'=>array(
                array('title'=>'店铺评论', 'ctl'=>'ucenter/shop/comment:shop', 'menu'=>true),
                array('title'=>'查看评论', 'ctl'=>'ucenter/shop/comment:detail', 'nav'=>'ucenter/shop/comment:shop'),
                array('title'=>'回复评论', 'ctl'=>'ucenter/shop/comment:reply', 'nav'=>'ucenter/shop/comment:shop'),
                array('title'=>'商品评论', 'ctl'=>'ucenter/product/comment:shop', 'menu'=>true),
                array('title'=>'查看评论', 'ctl'=>'ucenter/product/comment:detail', 'nav'=>'ucenter/product/comment:shop'),
                array('title'=>'回复评论', 'ctl'=>'ucenter/product/comment:reply', 'nav'=>'ucenter/product/comment:shop'),
            )
        ), 
        array('title'=>'商铺订单', 'menu'=>true,
            'items'=>array(
                array('title'=>'商品订单', 'ctl'=>'ucenter/shop/order:index', 'menu'=>true),
                array('title'=>'订单详情', 'ctl'=>'ucenter/shop/order:update', 'nav'=>'ucenter/shop/order:index'),
                array('title'=>'预约管理', 'ctl'=>'ucenter/shop/yuyue:shop', 'menu'=>true),
                array('title'=>'预约详情', 'ctl'=>'ucenter/shop/yuyue:detail', 'nav'=>'ucenter/shop/yuyue:shop'),      
                array('title'=>'更新预约', 'ctl'=>'ucenter/shop/yuyue:save', 'nav'=>'ucenter/shop/yuyue:shop'),    
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:index', 'menu'=>true),
                array('title'=>'招标详情', 'ctl'=>'ucenter/misc/tenders:detail', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我要投标', 'ctl'=>'ucenter/misc/tenders:look', 'nav'=>'ucenter/misc/tenders:index'),
                array('title'=>'我的竞标', 'ctl'=>'ucenter/misc/tenders:looked', 'menu'=>true), 
                array('title'=>'竞标详情', 'ctl'=>'ucenter/misc/tenders:tracking', 'nav'=>'ucenter/misc/tenders:looked'),
                array('title'=>'竞标详情', 'ctl'=>'ucenter/misc/tenders:track', 'nav'=>'ucenter/misc/tenders:looked'),
            )
        ),
        array('title'=>'优惠券', 'menu'=>true,
            'items'=>array(
                array('title'=>'优惠券', 'ctl'=>'ucenter/shop/coupon:index', 'menu'=>true),
                array('title'=>'添加优惠券', 'ctl'=>'ucenter/shop/coupon:create', 'nav'=>'ucenter/shop/coupon:index'),
                array('title'=>'修改优惠券', 'ctl'=>'ucenter/shop/coupon:edit', 'nav'=>'ucenter/shop/coupon:index'),
                array('title'=>'删除优惠券', 'ctl'=>'ucenter/shop/coupon:delete', 'nav'=>'ucenter/shop/coupon:index'),
                array('title'=>'下载日志', 'ctl'=>'ucenter/shop/coupon:downloads', 'menu'=>true),
                array('title'=>'日志详情', 'ctl'=>'ucenter/shop/coupon:downloadDetail', 'nav'=>'ucenter/shop/coupon:downloads'),
                array('title'=>'更新日志', 'ctl'=>'ucenter/shop/coupon:downloadSave', 'nav'=>'ucenter/shop/coupon:downloads'),
            )
        ),           
    ),
    ///微信设置
    'weixin' => array(
        array('title'=>'微信设置', 'menu'=>true,
            'items'=>array(
                array('title'=>'微信设置', 'ctl'=>'ucenter/weixin:index', 'menu'=>true),
                array('title'=>'公众号设置', 'ctl'=>'ucenter/weixin:info', 'nav'=>'ucenter/weixin:index'),
                array('title'=>'接口配置', 'ctl'=>'ucenter/weixin:config', 'nav'=>'ucenter/weixin:index'),
                array('title'=>'关注回复', 'ctl'=>'ucenter/weixin:welcome', 'nav'=>'ucenter/weixin:index'),
                array('title'=>'宣传页面', 'ctl'=>'ucenter/weixin:leaflets', 'nav'=>'ucenter/weixin:index'),
                array('title'=>'微信菜单', 'ctl'=>'ucenter/weixin/menu:index', 'menu'=>true),
                array('title'=>'添加菜单', 'ctl'=>'ucenter/weixin/menu:create', 'nav'=>'ucenter/weixin/menu:index'),
                array('title'=>'修改菜单', 'ctl'=>'ucenter/weixin/menu:edit', 'nav'=>'ucenter/weixin/menu:index'),
                array('title'=>'删除菜单', 'ctl'=>'ucenter/weixin/menu:delete', 'nav'=>'ucenter/weixin/menu:index'),
                array('title'=>'同步到微信', 'ctl'=>'ucenter/weixin/menu:towechat', 'nav'=>'ucenter/weixin/menu:index'),

                array('title'=>'微信素材', 'ctl'=>'ucenter/weixin/reply:index', 'menu'=>true),
                array('title'=>'添加素材', 'ctl'=>'ucenter/weixin/reply:create', 'nav'=>'ucenter/weixin/reply:index'),
                array('title'=>'修改素材', 'ctl'=>'ucenter/weixin/reply:edit', 'nav'=>'ucenter/weixin/reply:index'),
                array('title'=>'删除素材', 'ctl'=>'ucenter/weixin/reply:delete', 'nav'=>'ucenter/weixin/reply:index'),
                array('title'=>'选择素材', 'ctl'=>'ucenter/weixin/reply:dialog', 'nav'=>'ucenter/weixin/reply:index'),
                array('title'=>'关键字设置', 'ctl'=>'ucenter/weixin/keyword:index', 'menu'=>true),
                array('title'=>'添加关键字', 'ctl'=>'ucenter/weixin/keyword:create', 'nav'=>'ucenter/weixin/keyword:index'),
                array('title'=>'修改关键字', 'ctl'=>'ucenter/weixin/keyword:edit', 'nav'=>'ucenter/weixin/keyword:index'),
                array('title'=>'删除关键字', 'ctl'=>'ucenter/weixin/keyword:delete', 'nav'=>'ucenter/weixin/keyword:index'),
            )
        ),
    ),	
);
