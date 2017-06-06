<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0072)http://localhost/iwebshop4.7/index.php?controller=ucenter&action=address -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="stylesheet" href="cart_files/index.css">
	<link rel="shortcut icon" href="http://localhost/iwebshop4.7/favicon.ico">
	<script type="text/javascript" charset="UTF-8" src="cart_files/jquery-1.12.4.min.js.下载"></script>
	<script type="text/javascript" charset="UTF-8" src="cart_files/form.js.下载"></script>
	<script type="text/javascript" charset="UTF-8" src="cart_files/artDialog.js.下载"></script><script type="text/javascript" charset="UTF-8" src="cart_files/iframeTools.js.下载"></script><link rel="stylesheet" type="text/css" href="cart_files/aero.css">
	<script type="text/javascript" charset="UTF-8" src="cart_files/validate.js.下载"></script><link rel="stylesheet" type="text/css" href="cart_files/style.css">
	<script type="text/javascript" charset="UTF-8" src="cart_files/artTemplate.js.下载"></script><script type="text/javascript" charset="UTF-8" src="cart_files/artTemplate-plugin.js.下载"></script>
	<script type="text/javascript" src="cart_files/common.js.下载"></script>
	<script type="text/javascript" src="cart_files/site.js.下载"></script>
    @include('components.head')
    @include('components.top')
</head>
<body class="index"><div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move; display: block;"></div><a class="aui_close" style="display: block;">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div>
<div class="ucenter container">
	{{--<div class="header">--}}
		{{--<h1 class="logo"><a title="iWebShop开源电子商务平台" style="background:url(/iwebshop4.7/views/default/skin/default/images/front/logo.gif) center no-repeat;background-size:contain;" href="http://localhost/iwebshop4.7/">iWebShop开源电子商务平台</a></h1>--}}
		{{--<ul class="shortcut">--}}
			{{--<li class="first"><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=index">我的账户</a></li><li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=order">我的订单</a></li><li class="last"><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help_list">使用帮助</a></li>--}}
		{{--</ul>--}}
		{{--<p class="loginfo">Abne您好，欢迎您来到iWebShop开源电子商务平台购物！[<a class="reg" href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=logout">安全退出</a>]</p>--}}
	{{--</div>--}}
	<div class="navbar">
		<ul>
			<li><a href="http://localhost/iwebshop4.7/">首页</a></li>
						<li><a href="http://www.aircheng.com/">产品官网<span> </span></a></li>
						<li><a href="http://localhost/iwebshop4.7/index.php?controller=systemadmin&amp;action=index">后台管理<span> </span></a></li>
						<li><a href="http://localhost/iwebshop4.7/index.php?controller=seller&amp;action=index">商家管理<span> </span></a></li>
					</ul>
		<div class="mycart" name="mycart">
			<dl>
				<dt><a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">购物车<b name="mycart_count">1</b>件</a></dt>
				<dd><a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">去结算</a></dd>
			</dl>

			<!--购物车浮动div 开始-->
			<div class="shopping" id="div_mycart" style="display:none;">
			</div>
			<!--购物车浮动div 结束-->

			<!--购物车模板 开始-->
			<script type="text/html" id="cartTemplete">
			<dl class="cartlist">
				<%for(var item in goodsData){%>
				<%var data = goodsData[item]%>
				<dd id="site_cart_dd_<%=item%>">
					<div class="pic f_l"><img width="55px" height="55px" src="/iwebshop4.7/<%=data['img']%>"></div>
					<h3 class="title f_l"><a href="/iwebshop4.7/index.php?controller=site&action=products&id=<%=data['goods_id']%>"><%=data['name']%></a></h3>
					<div class="price f_r t_r">
						<b class="block">￥<%=data['sell_price']%> x <%=data['count']%></b>
						<input class="del" type="button" value="删除" onclick="removeCart('<%=data['id']%>','<%=data['type']%>');$('#site_cart_dd_<%=item%>').hide('slow');" />
					</div>
				</dd>
				<%}%>

				<dd class="static"><span>共<b name="mycart_count"><%=goodsCount%></b>件商品</span>金额总计：<b name="mycart_sum">￥<%=goodsSum%></b></dd>

				<%if(goodsData){%>
				<dd class="static">
					<label class="btn_orange"><input type="button" value="去购物车结算" onclick="window.location.href='/iwebshop4.7/index.php?controller=simple&action=cart';" /></label>
				</dd>
				<%}%>
			</dl>
			</script>
			<!--购物车模板 结束-->

		</div>
	</div>

	<div class="searchbar">
		<div class="allsort">
                {{--<a href="javascript:void();">全部商品分类</a>--}}

			<!--总的商品分类-开始-->
			<ul class="sortlist" id="div_allsort" style="display:none">
								<li>
					<h2><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=1">家用电器</a></h2>

					<!--商品分类 浮动div 开始-->
					<div class="sublist" style="display:none">
						<div class="items">
							<strong>选择分类</strong>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=2">大家电</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=3">平板电视</a>|
																	</dd>
							</dl>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=13">生活电器</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=15">电风扇</a>|
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=16">冷风扇</a>|
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=17">扫地机器人</a>|
																	</dd>
							</dl>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=14">厨房电器</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=18">电饭煲</a>|
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=19">微波炉</a>|
																	</dd>
							</dl>
													</div>
					</div>
					<!--商品分类 浮动div 结束-->
				</li>
								<li>
					<h2><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=4">食品饮料</a></h2>

					<!--商品分类 浮动div 开始-->
					<div class="sublist" style="display:none">
						<div class="items">
							<strong>选择分类</strong>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=5">进口食品</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=6">牛奶</a>|
																	</dd>
							</dl>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=33">酒品</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=34">红酒和白酒</a>|
																	</dd>
							</dl>
													</div>
					</div>
					<!--商品分类 浮动div 结束-->
				</li>
								<li>
					<h2><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=7">家具</a></h2>

					<!--商品分类 浮动div 开始-->
					<div class="sublist" style="display:none">
						<div class="items">
							<strong>选择分类</strong>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=8">家装建材</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=9">灯饰照明</a>|
																	</dd>
							</dl>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=31">卧室家具</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=32">实木床</a>|
																	</dd>
							</dl>
													</div>
					</div>
					<!--商品分类 浮动div 结束-->
				</li>
								<li>
					<h2><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=10">服装</a></h2>

					<!--商品分类 浮动div 开始-->
					<div class="sublist" style="display:none">
						<div class="items">
							<strong>选择分类</strong>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=11">男装</a>
								</dt>

								<dd>
																		<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=12">衬衫</a>|
																	</dd>
							</dl>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=20">女包</a>
								</dt>

								<dd>
																	</dd>
							</dl>
														<dl class="category selected">
								<dt>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=pro_list&amp;cat=21">女装</a>
								</dt>

								<dd>
																	</dd>
							</dl>
													</div>
					</div>
					<!--商品分类 浮动div 结束-->
				</li>
							</ul>
			<!--总的商品分类-结束-->

		</div>

		<div class="searchbox">
			<form method="get" action="http://localhost/iwebshop4.7/index.php">
				<input type="hidden" name="controller" value="site">
				<input type="hidden" name="action" value="search_list">
				<input class="text" type="text" name="word" autocomplete="off" value="" placeholder="请输入关键词...">
				<input class="btn" type="submit" value="商品搜索">
			</form>
		</div>

		<div class="hotwords">热门搜索：
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=search_list&amp;word=%E7%9C%9F%E7%9A%AE%E5%A5%B3%E5%8C%85">真皮女包</a>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=search_list&amp;word=%E8%A1%AC%E8%A1%A3">衬衣</a>
									<a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=search_list&amp;word=%E8%BF%9B%E5%8F%A3%E7%89%9B%E5%A5%B6">进口牛奶</a>
					</div>
	</div>

	<div class="position">
		您当前的位置： <a href="http://localhost/iwebshop4.7/">首页</a> » <a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=index">我的账户</a>
	</div>
	<div class="wrapper clearfix">
		<div class="sidebar f_l">
			<img src="cart_files/ucenter.gif" width="180" height="40">

												<div class="box">
				<div class="title"><h2 class="bg1">交易记录</h2></div>
				<div class="cont">
					<ul class="list">
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=order">我的订单</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=integral">我的积分</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=redpacket">我的代金券</a></li>
											</ul>
				</div>
			</div>
									<div class="box">
				<div class="title"><h2 class="bg2">服务中心</h2></div>
				<div class="cont">
					<ul class="list">
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=refunds">退款申请</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=complain">站点建议</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=consult">商品咨询</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=evaluation">商品评价</a></li>
											</ul>
				</div>
			</div>
									<div class="box">
				<div class="title"><h2 class="bg3">应用</h2></div>
				<div class="cont">
					<ul class="list">
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=message">短信息</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=favorite">收藏夹</a></li>
											</ul>
				</div>
			</div>
									<div class="box">
				<div class="title"><h2 class="bg4">账户资金</h2></div>
				<div class="cont">
					<ul class="list">
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=account_log">帐户余额</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=online_recharge">在线充值</a></li>
											</ul>
				</div>
			</div>
									<div class="box">
				<div class="title"><h2 class="bg5">个人设置</h2></div>
				<div class="cont">
					<ul class="list">
												<li class="current"><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">地址管理</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=info">个人资料</a></li>
												<li><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=password">修改密码</a></li>
											</ul>
				</div>
			</div>
					</div>
		<div class="main f_r">
    <div class="tabs">
		<div class="uc_title m_10 tabs_menu">
			<label class="current node"><span>地址管理</span></label>
		</div>
	    <div class="tabs_content">
	        <div id="address_list" class="form_content m_10 node">
	            <div class="uc_title2 m_10"><strong>已保存的有效地址</strong></div>
	            <table class="list_table" width="100%" cellpadding="0" cellspacing="0">
	            	{{--<colgroup>--}}
	                	{{--<col width="60px">--}}
		                {{--<col width="60px">--}}
		                {{--<col width="60px">--}}
		                {{--<col width="60px">--}}
		                {{--<col width="60px">--}}
	            	{{--</colgroup>--}}
	                <thead>  <form action="/home/addressinser" method="post">
	                	<tr>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <td width="80px ">所在地区</td><td><select id="sheng" name="sheng">
                                    <option value="">请选择</option>
                                    <?php foreach ($res as $key => $v) {;?>
                                    <option  value="<?php echo $v->region_id;?>"><?php echo $v->region_name;?></option>
                                    <?php };?>
                                </select>省
                            <select name="shi" id="shi"><option value="">请选择</option></select>市
                            <select name="xian" id="xian"><option value="">请选择</option></select>县/区</td></tr>
                        <tr><td width="80px ">详细地址</td><td><textarea name="street" id="" cols="30" rows="10"></textarea></td></tr>
                        <tr>
                            <td>收货手机号</td>
                            <td><input type="text"name="mobile"/></td>
                        </tr>
                        <tr>
                            <td>收货人姓名</td>
                            <td><input type="text"name="consignee"/></td>
                        </tr>
                        <tr>
                              <td></td> <td><input type="submit" value="确定"/><input type="reset" value="清除"/></td>
                            </form>
	                	</tr>
	                </thead>
	                <tbody>
                    </tbody>

	                {{--<tfoot>--}}
	                	{{--<tr class="">--}}
	                		{{--<td colspan="6" class="t_l">--}}
	                			{{--<label class="btn_gray_s"><input type="button" value="新增地址" onclick="editAddress();"></label>--}}
	                		{{--</td>--}}
	                	{{--</tr>--}}
	                {{--</tfoot>--}}
	            </table>
	        </div>
	    </div>
    </div>
</div>
        <meta name="_token" content="{{ csrf_token() }}"/>
<script type="text/javascript">
    $("#sheng").change(function(){
        var id=$(this).val();
        var msg=getAjax(id);
        $('#shi').html(msg);
    });
    $("#shi").change(function(){
        var id=$(this).val();
        // alert(id);
        var msg=getAjax(id);
        $('#xian').html(msg);
    });

    function getAjax(id)
    {
        var str ='<option value="">请选择</option>';
        $.ajax({
            type:"POST",
            url:"/home/pro",
            data:"id="+id,
            async:false,
            dataType:"json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success:function(msg)
            {
                $.each(msg,function(k,v){
                    str+='<option value="'+v.region_id+'">'+v.region_name+'</option>';
                });

            }
        });
        return str;

    }
    function getAjax(id)
    {
        var str ='<option value="">请选择</option>';
        $.ajax({
            type:"POST",
            url:"/home/pro",
            data:"id="+id,
            async:false,
            dataType:"json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success:function(msg)
            {
                $.each(msg,function(k,v){
                    str+='<option value="'+v.region_id+'">'+v.region_name+'</option>';
                });
            }
        });

        return str;
    }
//地址修改
function editAddress(addressId)
{
	art.dialog.open(creatUrl("block/address/id/"+addressId),
	{
		"id":"addressWindow",
		"title":"收货地址",
		"ok":function(iframeWin, topWin){
			var formObject = iframeWin.document.forms[0];
			if(formObject.onsubmit() === false)
			{
				alert("请正确填写各项信息");
				return false;
			}
			$.getJSON(formObject.action,$(formObject).serialize(),function(content){
				if(content.result == false)
				{
					alert(content.msg);
					return;
				}
				window.location.reload();
			});
			return false;
		},
		"okVal":"提交",
		"cancel":true,
		"cancelVal":"取消",
	});
}
</script>
	</div>

	<div class="help m_10">
		<div class="cont clearfix">
						<dl>
     			<dt><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help_list&amp;id=3">购物指南</a></dt>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=4">购物流程</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=26">会员制度</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=27">积分说明</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=28">交易条款</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=29">订单状态</a></dd>
				      		</dl>
      					<dl>
     			<dt><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help_list&amp;id=4">支付帮助</a></dt>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=30">货到付款</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=31">在线支付</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=32">银行电汇</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=33">余额支付</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=53">支付帮助</a></dd>
				      		</dl>
      					<dl>
     			<dt><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help_list&amp;id=6">配送帮助</a></dt>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=34">配送范围及运费</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=35">上门自提</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=36">加急快递</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=37">商品验货与签收</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=38">EMS/邮政普包</a></dd>
				      		</dl>
      					<dl>
     			<dt><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help_list&amp;id=5">售后服务</a></dt>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=39">换货说明</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=40">退货说明</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=41">退/换货注意事项</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=42">余额的使用与提现</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=43">发票制度</a></dd>
				      		</dl>
      					<dl>
     			<dt><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help_list&amp;id=7">帮助信息</a></dt>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=44">关于我们</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=45">常见问题</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=46">找回密码</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=47">退订邮件/短信</a></dd>
									<dd><a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=help&amp;id=48">联系客服</a></dd>
				      		</dl>
      				</div>
	</div>
	<div class="footer" style="text-align:center"><p class="links"><a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">关于我们</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">常见问题</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">安全交易</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">购买流程</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">如何付款</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">联系我们</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=ucenter&amp;action=address">合作提案</a></p><p class="copyright">Powered by <a href="http://www.aircheng.com/">iWebShop</a></p>Copyright © 2005-2014 <a class="copyys" target="_blank" href="http://www.miibeian.gov.cn/">鲁ICP备01000010号</a></div></div>
<script type="text/javascript">
//DOM加载完毕后运行
$(function()
{
	//隔行换色
	$(".list_table tr:nth-child(even)").addClass('even');
	$(".list_table tr").hover(
		function () {
			$(this).addClass("sel");
		},
		function () {
			$(this).removeClass("sel");
		}
	);

	var allsortLateCall = new lateCall(200,function(){$('#div_allsort').show();});

	//商品分类
	$('.allsort').hover(
		function(){
			allsortLateCall.start();
		},
		function(){
			allsortLateCall.stop();
			$('#div_allsort').hide();
		}
	);
	$('.sortlist li').each(
		function(i)
		{
			$(this).hover(
				function(){
					$(this).addClass('hover');
					$('.sublist:eq('+i+')').show();
				},
				function(){
					$(this).removeClass('hover');
					$('.sublist:eq('+i+')').hide();
				}
			);
		}
	);

	//排行,浏览记录的图片
	$('#ranklist li').hover(
		function(){
			$(this).addClass('current');
		},
		function(){
			$(this).removeClass('current');
		}
	);

	//按钮高亮
	var localUrl = "/iwebshop4.7/index.php?controller=ucenter&action=address";
	$('a[href^="'+localUrl+'"]').parent().addClass('current');
});
</script>


<script type="text/javascript">
_webUrl = "/iwebshop4.7/index.php?controller=_controller_&action=_action_&_paramKey_=_paramVal_";_themePath = "/iwebshop4.7/views/default/";_skinPath = "/iwebshop4.7/views/default/skin/default/";
//创建URL地址
function creatUrl(param)
{
	var urlArray   = [];
	var _tempArray = param.split("/");
	for(var index in _tempArray)
	{
		if(_tempArray[index])
		{
			urlArray.push(_tempArray[index]);
		}
	}

	if(urlArray.length >= 2)
	{
		var iwebshopUrl = _webUrl.replace("_controller_",urlArray[0]).replace("_action_",urlArray[1]);

		//存在URL参数情况
		if(urlArray.length >= 4)
		{
			iwebshopUrl = iwebshopUrl.replace("_paramKey_",urlArray[2]);

			//卸载原数组中已经拼接的数据
			urlArray.splice(0,3);

			if(iwebshopUrl.indexOf("?") == -1)
			{
				iwebshopUrl = iwebshopUrl.replace("_paramVal_",urlArray.join("/"));
			}
			else
			{
				var _paramVal_ = "";
				for(var i in urlArray)
				{
					if(i == 0)
					{
						_paramVal_ += urlArray[i];
					}
					else if(i%2 == 0)
					{
						_paramVal_ += "="+urlArray[i];
					}
					else
					{
						_paramVal_ += "&"+urlArray[i];
					}
				}
				iwebshopUrl = iwebshopUrl.replace("_paramVal_",_paramVal_);
			}
		}
		return iwebshopUrl;
	}
	return '';
}

//切换验证码
function changeCaptcha()
{
	$('#captchaImg').prop('src',creatUrl("site/getCaptcha/random/"+Math.random()));
}
</script><div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255);"></div></body></html>