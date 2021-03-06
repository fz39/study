<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('Home/css/style.css')}}" />
    <!--[if IE 6]>
    <script src="{{ URL::asset('Home/js/iepng.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->
    
    <script type="text/javascript" src="{{ URL::asset('home/js/jquery-1.8.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('home/js/menu.js')}}'"></script>
            
    <script type="text/javascript" src="{{ URL::asset('home/js/lrscroll_1.js')}}"></script>
     
    
    <script type="text/javascript" src="{{ URL::asset('Home/js/n_nav.js')}}"></script>
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Home/css/ShopShow.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Home/css/MagicZoom.css')}}" />
    <script type="text/javascript" src="{{ URL::asset('Home/js/MagicZoom.js')}}"></script>
    
    <script type="text/javascript" src="{{ URL::asset('Home/js/num.js')}}">
        var jq = jQuery.noConflict();
    </script>
        
    <script type="text/javascript" src="{{ URL::asset('Home/js/p_tab.js')}}"></script>
    
    <script type="text/javascript" src="{{ URL::asset('Home/js/shade.js')}}"></script>
    
<title>尤洪</title>
</head>
<body>  
    <a href="#foot">底部</a>
<!--Begin Header Begin-->
<include file="Commons:header" />
<!--End Header End--> 
<!--Begin Menu Begin-->
<include file="Commons:left" />
<!--End Menu End--> 
<div class="i_bg">
    <div class="postion">
        <span class="fl">
        全部 >
        <foreach name='bread' item='val'>
         {$val.cate_name} >
        </foreach>
        {$goods.goods_name}
        </span>
    </div>    
    <div class="content">
                            
        <div id="tsShopContainer">
            <div id="tsImgS"><a href="__ROOT__{$goods.goods_img}" title="Images" class="MagicZoom" id="MagicZoom"><img src="__ROOT__{$goods.goods_img}" width="390" height="390" /></a></div>
            <div id="tsPicContainer">
                <div id="tsImgSArrL" onclick="tsScrollArrLeft()"></div>
                <div id="tsImgSCon">
                    <ul>
                    <?php
                        $sum=-1;
                    ?>
                    <foreach name='photo' item='val'>
                    <?php
                        $sum+=1;
                    ?>
                        <li onclick="showPic(<?php echo $sum?>)" rel="MagicZoom" class="tsSelectImg">
                        <img src="__ROOT__{$val.photo_org}" tsImgS="__ROOT__{$val.photo_org}" width="79" height="79" />
                        </li>
                    </foreach>
                    </ul>
                </div>
                <div id="tsImgSArrR" onclick="tsScrollArrRight()"></div>
            </div>
            <img class="MagicZoomLoading" width="16" height="16" src="{{ URL::asset('Home/images/loading.gif')}}" alt="Loading..." />
        </div>
        
        <div class="pro_des">
            <div class="des_name">
                <p>{$goods.goods_name}</p>
                “开业巨惠，北京专柜直供”，不光低价，“真”才靠谱！
            </div>
            <div class="des_price">
                本店价格：<b>￥{$goods.shop_price}</b><br />
                消费积分：<span>28R</span>
            </div>
            <foreach name='spec' item='val' key='key'>
                <div class="des_choice">
                    <span class="fl">{$key}选择：</span>
                    <ul>
                    <foreach name='val' item='v'>
                        <li class="checked">{$v.attr_value}<div class="ch_img"></div></li>
                     </foreach>   
                    </ul>
                </div>
            </foreach>

            <div class="des_share">
                <div class="d_sh">
                    分享
                    <div class="d_sh_bg">
                        <a href="#"><img src="{{ URL::asset('Home/images/sh_1.gif')}}" /></a>
                        <a href="#"><img src="{{ URL::asset('Home/images/sh_2.gif')}}" /></a>
                        <a href="#"><img src="{{ URL::asset('Home/images/sh_3.gif')}}" /></a>
                        <a href="#"><img src="{{ URL::asset('Home/images/sh_4.gif')}}" /></a>
                        <a href="#"><img src="{{ URL::asset('Home/images/sh_5.gif')}}" /></a>
                    </div>
                </div>
                <div class="d_care"><a href="" onclick="fun({$goods. goods_id})">关注商品</a></div>
            </div>
            <div class="des_join">
                <div class="j_nums">
                    <input type="text" value="1" name="" class="n_ipt" />
                    <input type="button" value="" onclick="addUpdate(jq(this));" class="n_btn_1" />
                    <input type="button" value="" onclick="jianUpdate(jq(this));" class="n_btn_2" />   
                </div>
                <span class="fl"><a onclick="ShowDiv_1('MyDiv1','fade1')"><img src="{{ URL::asset('Home/images/j_car.png')}}" /></a></span>
            </div>            
        </div>    
        
        <div class="s_brand">
            <div class="s_brand_img"><img src="__ROOT__{$brand.brand_logo}" width="188" height="132" /></div>
            <div class="s_brand_c"><a href="#">进入品牌专区</a></div>
        </div>    
        
    </div>
    <div class="content mar_20">
        <div class="l_history">
            <div class="fav_t">用户还喜欢</div>
            <ul>
                <foreach name='goodsbrand' item='val'>
                <li>
                    <div class="img"><a href="#"><img src="__ROOT__{$val.goods_img}" width="185" height="162" /></a></div>
                    <div class="name"><a href="#">{$val.goods_name}</a></div>
                    <div class="price">
                        <font>￥<span>368.00</span></font> &nbsp; 18R
                    </div>
                </li>
                </foreach>
            </ul>
        </div>
        <div class="l_list">            
            <div class="des_border">
                <div class="des_tit">
                    <ul>
                        <li class="current">推荐搭配</li>
                    </ul>
                </div>
                <div class="team_list">
                    <div class="img"><a href="#"><img src="{{ URL::asset('Home/images/mat_1.jpg')}}" width="160" height="140" /></a></div>
                    <div class="name"><a href="#">倩碧补水组合套装8折促销</a></div>
                    <div class="price">
                        <div class="checkbox"><input type="checkbox" name="zuhe" checked="checked" /></div>
                        <font>￥<span>768.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="{{ URL::asset('Home/images/jia_b.gif')}}" /></div>
                <div class="team_list">
                    <div class="img"><a href="#"><img src="{{ URL::asset('Home/images/mat_2.jpg')}}" width="160" height="140" /></a></div>
                    <div class="name"><a href="#">香奈儿邂逅清新淡香水50ml</a></div>
                    <div class="price">
                        <div class="checkbox"><input type="checkbox" name="zuhe" /></div>
                        <font>￥<span>749.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="{{ URL::asset('Home/images/jia_b.gif')}}" /></div>
                <div class="team_list">
                    <div class="img"><a href="#"><img src="{{ URL::asset('Home/images/mat_3.jpg')}}" width="160" height="140" /></a></div>
                    <div class="name"><a href="#">香奈儿邂逅清新淡香水50ml</a></div>
                    <div class="price">
                        <div class="checkbox"><input type="checkbox" name="zuhe" checked="checked" /></div>
                        <font>￥<span>749.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="{{ URL::asset('Home/images/equl.gif')}}" /></div>
                <div class="team_sum">
                    套餐价：￥<span>1517</span><br />
                    <input type="text" value="1" class="sum_ipt" /><br />
                    <a href="#"><img src="{{ URL::asset('Home/images/z_buy.gif')}}" /></a>
                </div>
                
            </div>
            <div class="des_border">
                <div class="des_tit">
                    <ul>
                        <li class="current"><a href="#p_attribute">商品属性</a></li>
                        <li><a href="#p_details">商品详情</a></li>
                        <li><a href="#p_comment">商品评论</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="des_con contentss" id="p_attribute">
                    
                    <table border="0" align="center" style="width:100%; font-family:'宋体'; margin:10px auto;" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>商品名称：{$goods.goods_name}</td>
                        <td>商品编号：{$goods.goods_id}</td>
                        <td>品牌： {$brand_name}</td>
                        <td>上架时间：{$goods.sale_starttime}</td>
                      </tr>
                      <tr>
                        <td>商品毛重：{$goods.goods_weight}</td>
                      </tr>
                      <tr>
                        
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>                                               
                                            
                        
                </div>
            <!-- </div> -->  
            
            <div class="des_border contentss" id="p_details" style="display:none;">
                <!-- <div class="des_t">商品详情</div> -->
                <div class="des_con">
                {$goods.goods_desc}
                </div>
            </div>  
            
            <div class="des_border contentss" id="p_comment" style="display:none;">
                <!-- <div class="des_t">商品评论</div> -->
                
                <table border="0" class="jud_tab" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="175" class="jud_per">
                        <p>80.0%</p>好评度
                    </td>
                    <td width="300">
                        <table border="0" style="width:100%;" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="90">好评<font color="#999999">（80%）</font></td>
                            <td><img src="{{ URL::asset('Home/images/pl.gif')}}" align="absmiddle" /></td>
                          </tr>
                          <tr>
                            <td>中评<font color="#999999">（20%）</font></td>
                            <td><img src="{{ URL::asset('Home/images/pl.gif')}}" align="absmiddle" /></td>
                          </tr>
                          <tr>
                            <td>差评<font color="#999999">（0%）</font></td>
                            <td><img src="{{ URL::asset('Home/images/pl.gif')}}" align="absmiddle" /></td>
                          </tr>
                        </table>
                    </td>
                    <td width="185" class="jud_bg">
                        购买过雅诗兰黛第六代特润精华露50ml的顾客，在收到商品才可以对该商品发表评论
                    </td>
                    <td class="jud_bg">您可对已购买商品进行评价<br /><a href="#"><img src="{{ URL::asset('Home/images/btn_jud.gif')}}" /></a></td>
                  </tr>
                </table>
                
                
                                
                <table border="0" class="jud_list" style="width:100%; margin-top:30px;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="160"><img src="{{ URL::asset('Home/images/peo1.jpg')}}" width="20" height="20" align="absmiddle" />&nbsp;向死而生</td>
                    <td width="180">
                        颜色分类：<font color="#999999">粉色</font> <br />
                        型号：<font color="#999999">50ml</font>
                    </td>
                    <td>
                        产品很好，香味很喜欢，必须给赞。 <br />
                        <font color="#999999">2015-09-24</font>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td width="160"><img src="{{ URL::asset('Home/images/peo2.jpg')}}" width="20" height="20" align="absmiddle" />&nbsp;就是这么想的</td>
                    <td width="180">
                        颜色分类：<font color="#999999">粉色</font> <br />
                        型号：<font color="#999999">50ml</font>
                    </td>
                    <td>
                        送朋友，她很喜欢，大爱。 <br />
                        <font color="#999999">2015-09-24</font>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td width="160"><img src="{{ URL::asset('Home/images/peo3.jpg')}}" width="20" height="20" align="absmiddle" />&nbsp;墨镜墨镜</td>
                    <td width="180">
                        颜色分类：<font color="#999999">粉色</font> <br />
                        型号：<font color="#999999">50ml</font>
                    </td>
                    <td>
                        大家都说不错<br />
                        <font color="#999999">2015-09-24</font>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td width="160"><img src="{{ URL::asset('Home/images/peo4.jpg')}}" width="20" height="20" align="absmiddle" />&nbsp;那*****洋 <br /><font color="#999999">（匿名用户）</font></td>
                    <td width="180">
                        颜色分类：<font color="#999999">粉色</font> <br />
                        型号：<font color="#999999">50ml</font>
                    </td>
                    <td>
                        下次还会来买，推荐。<br />
                        <font color="#999999">2015-09-24</font>
                    </td>
                  </tr>
                </table>

                    
                    
                <div class="pages">
                    <a href="#" class="p_pre">上一页</a><a href="#" class="cur">1</a><a href="#">2</a><a href="#">3</a>...<a href="#">20</a><a href="#" class="p_pre">下一页</a>
                </div>
                
            </div>
            </div>
            
        </div>
    </div>
    
    
    <!--Begin 弹出层-收藏成功 Begin-->
    <div id="fade" class="black_overlay"></div>
    <div id="MyDiv" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv('MyDiv','fade')"><img src="{{ URL::asset('Home/images/close.gif')}}" /></span>
            </div>
            <div class="notice_c">
                
                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="40"><img src="{{ URL::asset('Home/images/suc.png')}}" /></td>
                    <td>
                        <span style="color:#3e3e3e; font-size:18px; font-weight:bold;">您已成功收藏该商品</span><br />
                        <a href="#">查看我的关注 >></a>
                    </td>
                  </tr>
                  <tr height="50" valign="bottom">
                    <td>&nbsp;</td>
                    <td><a href="#" class="b_sure">确定</a></td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-收藏成功 End-->
    
    
    <!--Begin 弹出层-加入购物车 Begin-->
    <div id="fade1" class="black_overlay"></div>
    <div id="MyDiv1" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv_1('MyDiv1','fade1')"><img src="{{ URL::asset('Home/images/close.gif')}}" /></span>
            </div>
            <div class="notice_c">
                
                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="40"><img src="{{ URL::asset('Home/images/suc.png')}}" /></td>
                    <td>
                        <span style="color:#3e3e3e; font-size:18px; font-weight:bold;">宝贝已成功添加到购物车</span><br />
                        购物车共有1种宝贝（3件） &nbsp; &nbsp; 合计：1120元
                    </td>
                  </tr>
                  <tr height="50" valign="bottom">
                    <td>&nbsp;</td>
                    <td><a href="#" class="b_sure">去购物车结算</a><a href="#" class="b_buy">继续购物</a></td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-加入购物车 End-->
    
    
    
    <!--Begin Footer Begin -->
    <div class="b_btm_bg bg_color" id="foot">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{ URL::asset('Home/images/b1.png')}}" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{ URL::asset('Home/images/b2.png')}}" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{ URL::asset('Home/images/b3.png')}}" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{ URL::asset('Home/images/b4.png')}}" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
        <dl>                                                                                            
            <dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
            <dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
            <dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
            <a href="#" class="b_sh1">新浪微博</a>            
            <a href="#" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="{{ URL::asset('Home/images/er.gif')}}" width="118" height="118" /></div>
            <img src="{{ URL::asset('Home/images/ss.png')}}" />
        </div>
    </div>    
    <div class="btmbg">
        <div class="btm">
            备案/许可证编号 复制必究  <br />
            <img src="{{ URL::asset('Home/images/b_1.gif')}}" width="98" height="33" /><img src="{{ URL::asset('Home/images/b_2.gif')}}" width="98" height="33" /><img src="{{ URL::asset('Home/images/b_3.gif')}}" width="98" height="33" /><img src="{{ URL::asset('Home/images/b_4.gif')}}" width="98" height="33" /><img src="{{ URL::asset('Home/images/b_5.gif')}}" width="98" height="33" /><img src="{{ URL::asset('Home/images/b_6.gif')}}" width="98" height="33" />
        </div>      
    </div>
    <!--End Footer End -->    
</div>

</body>

<script src="{{ URL::asset('Home/js/ShopShow.js')}}"></script>

<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>

<script src="{{ URL::asset('jquery.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $(".des_tit li").click(function(){
            $(this).addClass("current").siblings().removeClass();
            var index=$(this).index();
            $(".contentss").eq(index).show().siblings().hide();
        });
    });
</script>
<script type="text/javascript">
    function fun(goods_id)
    {
        alert(goods_id);
    }
</script>