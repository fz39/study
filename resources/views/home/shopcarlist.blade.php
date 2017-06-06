<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)http://localhost/iwebshop4.7/index.php?controller=simple&action=cart -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">


    <link type="image/x-icon" href="http://localhost/iwebshop4.7/favicon.ico" rel="icon">
    <link rel="stylesheet" href="./cart_files/index.css">
    <script type="text/javascript" charset="UTF-8" src="cart_files/jquery-1.12.4.min.js.下载"></script>
    <script type="text/javascript" charset="UTF-8" src="cart_files/validate.js.下载"></script><link rel="stylesheet" type="text/css" href="./cart_files/style.css">
    <script type="text/javascript" charset="UTF-8" src="cart_files/form.js.下载"></script>
    <script type="text/javascript" charset="UTF-8" src="cart_files/artDialog.js.下载"></script><script type="text/javascript" charset="UTF-8" src="./cart_files/iframeTools.js.下载"></script><link rel="stylesheet" type="text/css" href="./cart_files/aero.css">
    <script type="text/javascript" src="cart_files/common.js.下载"></script>
    <script type="text/javascript" src="cart_files/site.js.下载"></script>
    @include('components.head')
    @include('components.top')
</head>
<body class="second">

    <script type="text/javascript" charset="UTF-8" src="./cart_files/artTemplate.js.下载"></script><script type="text/javascript" charset="UTF-8" src="./cart_files/artTemplate-plugin.js.下载"></script>
    <div class="wrapper clearfix">
        <div class="position mt_10"> <span>您当前的位置：</span> <a href=''> 首页</a> » 购物车</div>
        <div class="myshopping m_10">
            <ul class="order_step">
                <li class="current"><span class="first">1、查看购物车</span></li>
                <li><span>2、填写核对订单信息</span></li>
                <li class="last"><span>3、成功提交订单</span></li>
            </ul>
        </div>

        <div id="cart_prompt" class="cart_prompt f14 t_l" style="display:none">
            <p class="m_10 gray"><b class="orange">恭喜，</b>您的订单已经满足了以下优惠活动！</p>
        </div>

        <!--促销规则模板-->
        <script type="text/html" id="promotionTemplate">
            <p class="indent blue"><%=item['plan']%>，<%=item['info']%></p>
        </script>

        <table width="100%" class="cart_table m_10">
            <colgroup>
                <col width="115px">
                <col>
                <col width="80px">
                <col width="80px">
                <col width="80px">
                <col width="80px">
            </colgroup>
            <thead>
            <tr><th>图片</th><th>商品名称</th><th>单价</th><th>数量</th><th>小计</th><th class="last">操作</th></tr>
            </thead>
            <tbody>
            <script>var item0 = {"name":"单笔发","cost_price":null,"goods_id":"106","img":"upload\/2015\/06\/16\/20150616233513773.jpg","sell_price":"25.00","point":"0","weight":"0.00","store_nums":"19008","exp":"0","goods_no":"SD143446891497","product_id":"0","seller_id":"0","reduce":0,"count":1,"sum":25};</script>

            <?php
                    if(empty($res)){
                        echo "<h3>购物车为空</h3>";
                    }else{
            foreach ($res as $k =>$v){ ;?>
            <tr>
                <td><img src="/<?php echo $v['goods_img']?>" width="66px" height="66px" alt=""></td>
                <td class="t_l">
                    <a href="http://localhost/iwebshop4.7/index.php?controller=site&amp;action=products&amp;id=106" class="blue"><?php echo $v['goods_name'];?></a>
                </td>
                <td><b>￥<?php echo $v['goods_price'];?></b></td>
                <td>
                    <div class="num">
                        <a class="reduce" href="javascript:void(0)" onclick="cart_reduce(item0);">-</a>
                        <input class="tiny" value="<?php echo $v['goods_num'];?>" onchange="cartCount(item0);" type="text" id="count_106_0">
                        <a class="add" href="javascript:void(0)" onclick="cart_increase(item0);">+</a>
                    </div>
                </td>
                <td>￥<b class="red2" id="sum_106_0" value="<?php echo $v['goods_price']*$v['goods_num']?>"><?php echo $v['goods_price']*$v['goods_num']?></b></td>
                <td><a href="javascript:void(0);"class="del" value="<?php echo $v['goods_id']?>">删除</a></td>
            </tr>
            <?php }};?>
            <tr class="stats">
                <td colspan="8">
                    <span>商品总金额：￥<b id="origin_price"></b> - 商品优惠：￥<b id="discount_price">0</b> - 促销活动优惠：￥<b id="promotion_price">0</b></span><br>
                    金额总计（不含运费）：￥<b class="orange" id="sum_price"></b>
                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2" class="t_l">
                    <a class="del" href="javascript:void(0);" onclick="delModel({msg:&#39;确定要清空购物车么？&#39;,link:&#39;/iwebshop4.7/index.php?controller=simple&amp;action=clearCart&#39;});">清空购物车</a>
                </td>
                <td colspan="6" class="t_r">
                    <a class="" href="javascript:void(0)" onclick="window.history.go(-1);">继续购物</a>
                    <a class="" href="">去结算</a>
                </td>
            </tr>
            </tfoot>
        </table>
        <meta name="_token" content="{{ csrf_token() }}"/>
    </div>

    <script type="text/javascript">
        $(".del").click(function(){
           var delid = $(this).attr('value');
            $.ajax({
                type:'post',
                url:'/home/shopcardel',
                data:{
                    id:delid
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                dataType:'json',
                success:function(data){
                    if(data.status==1){
                      location.reload();
                    }
                }
            })
        });
        $(".red2").ready(function(){
            var price = $('.red2').text();
        });

        jQuery(function()
        {
        });
        //购物车数量改动计算
        function cartCount(obj)
        {
            var countInput = $('#count_'+obj.goods_id+'_'+obj.product_id);
            var countInputVal = parseInt(countInput.val());
            var oldNum = countInput.data('oldNum') ? countInput.data('oldNum') : obj.count;

            //商品数量大于1件
            if(isNaN(countInputVal) || (countInputVal <= 0))
            {
                alert('购买的数量必须大于1件');
                countInput.val(1);
                countInput.change();
            }
            //商品数量小于库存量
            else if(countInputVal > parseInt(obj.store_nums))
            {
                alert('购买的数量不能大于此商品的库存量');
                countInput.val(parseInt(obj.store_nums));
                countInput.change();
            }
            else
            {
                var diff = parseInt(countInputVal) - parseInt(oldNum);
                if(diff == 0)
                {
                    return;
                }

                var goods_id   = obj.product_id > 0 ? obj.product_id : obj.goods_id;
                var goods_type = obj.product_id > 0 ? "product"      : "goods";

                //更新购物车中此商品的数量
                $.getJSON("/iwebshop4.7/index.php?controller=simple&action=joinCart",{"goods_id":goods_id,"type":goods_type,"goods_num":diff,"random":Math.random()},function(content){
                    if(content.isError == true)
                    {
                        alert(content.message);
                        countInput.val(1);
                        countInput.change();
                    }
                    else
                    {
                        var goodsId   = [];
                        var productId = [];
                        var num       = [];
                        $('[id^="count_"]').each(function(i)
                        {
                            var idValue = $(this).attr('id');
                            var dataArray = idValue.split("_");

                            goodsId.push(dataArray[1]);
                            productId.push(dataArray[2]);
                            num.push(this.value);
                        });
                        countInput.data('oldNum',countInputVal);
                        $.getJSON("/iwebshop4.7/index.php?controller=simple&action=promotionRuleAjax",{"goodsId":goodsId,"productId":productId,"num":num,"random":Math.random()},function(content){
                            if(content.promotion.length > 0)
                            {
                                $('#cart_prompt .indent').remove();

                                for(var i = 0;i < content.promotion.length; i++)
                                {
                                    $('#cart_prompt').append( template.render('promotionTemplate',{"item":content.promotion[i]}) );
                                }
                                $('#cart_prompt').show();
                            }
                            else
                            {
                                $('#cart_prompt .indent').remove();
                                $('#cart_prompt').hide();
                            }

                            /*开始更新数据*/
                            $('#weight').html(content.weight);
                            $('#origin_price').html(content.sum);
                            $('#discount_price').html(content.reduce);
                            $('#promotion_price').html(content.proReduce);
                            $('#sum_price').html(content.final_sum);
                            $('#sum_'+obj.goods_id+'_'+obj.product_id).html((obj.sell_price * countInputVal).toFixed(2));
                        });
                    }
                });
            }
        }

        //增加商品数量
        function cart_increase(obj)
        {
            //库存超量检查
            var countInput = $('#count_'+obj.goods_id+'_'+obj.product_id);
            if(parseInt(countInput.val()) + 1 > parseInt(obj.store_nums))
            {
                alert('购买的数量大于此商品的库存量');
            }
            else
            {
                countInput.val(parseInt(countInput.val()) + 1);
                countInput.change();
            }
        }

        //减少商品数量
        function cart_reduce(obj)
        {
            //库存超量检查
            var countInput = $('#count_'+obj.goods_id+'_'+obj.product_id);
            if(parseInt(countInput.val()) - 1 <= 0)
            {
                alert('购买的数量必须大于1件');
            }
            else
            {
                countInput.val(parseInt(countInput.val()) - 1);
                countInput.change();
            }
        }

        //移除购物车
        function removeCartByJSON(obj)
        {
            var goods_id   = obj.product_id > 0 ? obj.product_id : obj.goods_id;
            var goods_type = obj.product_id > 0 ? "product"      : "goods";
            $.getJSON("/iwebshop4.7/index.php?controller=simple&action=removeCart",{"goods_id":goods_id,"type":goods_type,"random":Math.random()},function()
            {
                window.location.reload();
            });
        }
    </script>
    <div class="footer" style="text-align:center"><p class="links"><a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">关于我们</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">常见问题</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">安全交易</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">购买流程</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">如何付款</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">联系我们</a>|<a href="http://localhost/iwebshop4.7/index.php?controller=simple&amp;action=cart">合作提案</a></p><p class="copyright">Powered by <a href="http://www.aircheng.com/">得力教育</a></p>Copyright © 2005-2014 <a class="copyys" target="_blank" href="http://www.miibeian.gov.cn/">鲁ICP备01000010号</a></div>	</div>


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