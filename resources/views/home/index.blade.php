<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/muke.css">
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
</head>

<body class="backg_huibai">

<!-- 顶部 -->
<div class="width100 float_l height490 img_backg1">
	<div class="width100 float_l height80 line_hei80">
        <!-- 顶部左边 -->
        <div class="float_l">
            <div class="float_l margin_l20">
                <img src="img/uiz1.png">
            </div>
            <div class="float_l">
                <ul class="ul_li fon_siz16">
                    <li><a>实战</a></li>
                    <li><a>路径</a></li>
                    <li><a>猿问</a></li>
                    <li><a>手记</a></li>
                </ul>
            </div>
        </div>
        
        <!-- 顶部右边 -->
        <div class="float_r">
            <div class="float_l top_input">
                <input class="posi_relative" type="text" name="" id="" placeholder="请输入想搜索的内容...">
                <img class="img_sousuo bianshou" src="img/uiz4.png">
            </div>
<!--            <div class="float_l margin_l20">-->
<!--                <img src="img/uiz5.png">-->
<!--            </div>-->

            <div class="float_l margin_l40">
                <img src="img/uiz3.png">
            </div>
            {{--<div class="float_l margin_l35">--}}
                {{--<img src="img/uiz6.png">--}}
            {{--</div>--}}
            <div class="float_l">
                <ul class="ul_li fon_siz16">
                    <li><a href="/register">注册</a></li>
                    <?php if(isset($_COOKIE['user_name'])) {?>
                    <li><span id="span" style="color: #00DD00">欢迎<?php echo $_COOKIE['user_name']?></span></li>
                    <?php }else{?>
                    <li><a href="/login">登录</a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="float_l margin_l35">
                <a href="/login/logout">退出</a>
            </div>

        </div>
	</div>
</div>

<!-- 轮播图 -->
<div class="width100 float_l margin_t-405 margin_b40">
	<div class="width_1200 margin_auto">
    	<div class="width100 float_l height460 posi_relative">
        	<div class="width100 float_l">
                <div class="focusBox">
                    <ul class="pic">
                        <li><a><img src="img/uiz21.jpg" /></a></li>
                        <li><a><img src="img/uiz20.jpg" /></a></li>
                    </ul>
                    <a class="prev" href="javascript:void(0)"></a>
                    <a class="next" href="javascript:void(0)"></a>
                    <ul class="hd">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            
            <div class="width_224 float_l height460 posi_absolute backg_jqian padding_t5 bianshou">
            	<div class="width100 float_l tab_qiehuan ">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>前端开发</span>
                            <span class="float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg15">
                    	<div class="width100 float_l padding40">
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                	<li><a>Photoshop</a></li>
                                    <li>/</li>
                                    <li><a>Maya</a></li>
                                    <li>/</li>
                                    <li><a>Premiere</a></li>
                                    <li>/</li>
                                    <li><a>ZBrush</a></li>
                                </ul>
                            </div>
                            
                            <div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                	<li class="width100 float_l margin_b15"><a>课程 | ps入门教程Ⅱ-路径</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | 手机UI设计基础-尺寸</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | PS入门基础-魔幻调色</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="width100 float_l tab_qiehuan">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>后端开发</span>
                            <span class="float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg16">
                    	<div class="width100 float_l padding40">
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                	<li><a>Photoshop</a></li>
                                    <li>/</li>
                                    <li><a>Maya</a></li>
                                    <li>/</li>
                                    <li><a>Premiere</a></li>
                                    <li>/</li>
                                    <li><a>ZBrush</a></li>
                                </ul>
                            </div>
                            
                            <div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                	<li class="width100 float_l margin_b15"><a>课程 | ps入门教程Ⅱ-路径</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | 手机UI设计基础-尺寸</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | PS入门基础-魔幻调色</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="width100 float_l tab_qiehuan">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>移动开发</span>
                            <span class="float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg17">
                    	<div class="width100 float_l padding40">
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                	<li><a>Photoshop</a></li>
                                    <li>/</li>
                                    <li><a>Maya</a></li>
                                    <li>/</li>
                                    <li><a>Premiere</a></li>
                                    <li>/</li>
                                    <li><a>ZBrush</a></li>
                                </ul>
                            </div>
                            
                            <div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                	<li class="width100 float_l margin_b15"><a>课程 | ps入门教程Ⅱ-路径</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | 手机UI设计基础-尺寸</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | PS入门基础-魔幻调色</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="width100 float_l tab_qiehuan">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>数据库</span>
                            <span class="float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg18">
                    	<div class="width100 float_l padding40">
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                	<li><a>Photoshop</a></li>
                                    <li>/</li>
                                    <li><a>Maya</a></li>
                                    <li>/</li>
                                    <li><a>Premiere</a></li>
                                    <li>/</li>
                                    <li><a>ZBrush</a></li>
                                </ul>
                            </div>
                            
                            <div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                	<li class="width100 float_l margin_b15"><a>课程 | ps入门教程Ⅱ-路径</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | 手机UI设计基础-尺寸</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | PS入门基础-魔幻调色</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="width100 float_l tab_qiehuan">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>云计算&大数据</span>
                            <span class=" float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg16">
                    	<div class="width100 float_l padding40">
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                	<li><a>Photoshop</a></li>
                                    <li>/</li>
                                    <li><a>Maya</a></li>
                                    <li>/</li>
                                    <li><a>Premiere</a></li>
                                    <li>/</li>
                                    <li><a>ZBrush</a></li>
                                </ul>
                            </div>
                            
                            <div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                	<li class="width100 float_l margin_b15"><a>课程 | ps入门教程Ⅱ-路径</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | 手机UI设计基础-尺寸</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | PS入门基础-魔幻调色</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="width100 float_l tab_qiehuan">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>运维&测试</span>
                            <span class="float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg15">
                    	<div class="width100 float_l padding40">
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                	<li><a>Photoshop</a></li>
                                    <li>/</li>
                                    <li><a>Maya</a></li>
                                    <li>/</li>
                                    <li><a>Premiere</a></li>
                                    <li>/</li>
                                    <li><a>ZBrush</a></li>
                                </ul>
                            </div>
                            
                            <div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                	<li class="width100 float_l margin_b15"><a>课程 | ps入门教程Ⅱ-路径</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | 手机UI设计基础-尺寸</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | PS入门基础-魔幻调色</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="width100 float_l tab_qiehuan ">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>视觉设计</span>
                            <span class="float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg17">
                    	<div class="width100 float_l padding40">
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">分类目录</span>
                                <ul class="width100 ul_lis float_l">
                                	<li><a>Photoshop</a></li>
                                    <li>/</li>
                                    <li><a>Maya</a></li>
                                    <li>/</li>
                                    <li><a>Premiere</a></li>
                                    <li>/</li>
                                    <li><a>ZBrush</a></li>
                                </ul>
                            </div>
                            
                            <div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">推荐</span>
                                <ul class="width100 ul_lis float_l">
                                	<li class="width100 float_l margin_b15"><a>课程 | ps入门教程Ⅱ-路径</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | 手机UI设计基础-尺寸</a></li>
									<li class="width100 float_l margin_b15"><a>课程 | PS入门基础-魔幻调色</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            
        </div>
    </div>
</div>
<script>
	$('.tab_qiehuan').hover(function(){
         $(this).children(".bianhuabeijing").css("background-color","#8a8f93").next().css("display","block")
	},function(){
    	 $(this).children(".bianhuabeijing").css("background-color","#a9aaae").next().css("display","none")
	});
</script>

<script type="text/javascript">
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:500});
</script>

<!-- 实战推荐 -->
<div class="width100 float_l margin_b40">
	<div class="width_1200 margin_auto">
    
    	<div class="width100 float_l margin_b20">
        	<div class="float_l">
            	<span class="fon_siz16">实战推荐</span>
            </div>
            <div class="float_r bianshou">
            	<span>更多></span>
            </div>
        </div>
        
        <div class="width100 float_l">
        	<div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>  
            
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div> 
        </div>
        
    </div>
</div>

<!-- 免费好课 -->
<div class="width100 float_l margin_b40">
	<div class="width_1200 margin_auto">
    
    	<div class="width100 float_l margin_b20">
        	<div class="float_l">
            	<span class="fon_siz16">免费好课</span>
            </div>
            <div class="float_r bianshou">
            	<span>更多></span>
            </div>
        </div>
        
        <div class="width100 float_l">
        	<div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>  
            
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div> 
        </div>
        
    </div>
</div>

<!-- web 前端工程师 -->
<div class="width100 float_l padding_tb45 backg_qiangray">
	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg3 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>Web<br>前端工程师</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
            	<span>职业路径<span class="margin_l5 wobianhua">></span></span>
            </div>
			<div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">
            	<a>jQuery源码探索之旅</a>
                <a>高德开发者必由之路——JS API篇</a>
                <a>教你HTML5开发爱心鱼游戏</a>
            </div>
        </div>
        <div class="width_468 float_l margin_r20">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg4 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">像搭积木一样的组件式开发</span>
            </div>
            <div class=" width100 float_l height172 kaishimeiyou img_backg9 text-center line_hei172 ">
            	<span class="fon_siz20 color_white b_weight700">web前端设计从入门到精通</span>
            </div>
        </div>
        <div class="width_224 float_l margin_r20">
        	<div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
        </div>
        <div class="width_224 height364 float_l backg_white border_shadow">
        	<div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width100 float_l padding_lr20 dadiv">
            	<div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- java 工程师 -->
<div class="width100 float_l backg_qiangray padding_b45">
	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg11 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>Java<br>工程师</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
            	<span>职业路径<span class="margin_l5 wobianhua">></span></span>
            </div>
			<div class="width100 float_l padding_lr20 fon_siz12 bianshou line_hei26 color_blue wobeijingguosa margin_t120">
            	<a>jQuery源码探索之旅</a>
                <a>高德开发者必由之路——JS API篇</a>
                <a>教你HTML5开发爱心鱼游戏</a>
            </div>
        </div>
        <div class="width_712 float_l margin_r20">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg10 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">搞定Java加解密</span>
            </div>
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
        </div>

        <div class="width_224 height364 float_l backg_white border_shadow">
        	<div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width100 float_l padding_lr20 dadiv">
            	<div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- php 工程师 -->
<div class="width100 float_l padding_b45 backg_qiangray">
	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg13 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>PHP<br>工程师</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
            	<span>职业路径<span class="margin_l5 wobianhua">></span></span>
            </div>
			<div class="width100 float_l padding_lr20 fon_siz12 bianshou line_hei26 color_zise wobeijingguoas margin_t120">
            	<a>PHP开发工程师闯关记--初识PHP</a>
                <a>从零开始学习ThinkPHP框架</a>
            </div>
        </div>
        <div class="width_468 float_l margin_r20">
        	<div class=" width100 float_l height364 kaishimeiyou img_backg12 text_c line_hei364">
            	<span class="fon_siz20 color_white b_weight700">从零开始学习ThinkPHP框架</span>
            </div>
        </div>
        <div class="width_224 float_l margin_r20">
        	<div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
        </div>
        <div class="width_224 height364 float_l backg_white border_shadow">
        	<div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width100 float_l padding_lr20 dadiv">
            	<div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Android 工程师 -->
<div class="width100 float_l backg_qiangray padding_b45">
	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg11 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>Android<br>工程师</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
            	<span>职业路径<span class="margin_l5 wobianhua">></span></span>
            </div>
			<div class="width100 float_l padding_lr20 fon_siz12 bianshou line_hei26 color_blue wobeijingguosa margin_t120">
            	<a>jQuery源码探索之旅</a>
                <a>高德开发者必由之路——JS API篇</a>
                <a>教你HTML5开发爱心鱼游戏</a>
            </div>
        </div>
        <div class="width_712 float_l margin_r20">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg10 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">搞定Java加解密</span>
            </div>
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
        </div>

        <div class="width_224 height364 float_l backg_white border_shadow">
        	<div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width100 float_l padding_lr20 dadiv">
            	<div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- iOS 工程师 -->
<div class="width100 float_l padding_b45 backg_qiangray">
	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg3 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>iOS<br>工程师</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
            	<span>职业路径<span class="margin_l5 wobianhua">></span></span>
            </div>
			<div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">
            	<a>jQuery源码探索之旅</a>
                <a>高德开发者必由之路——JS API篇</a>
                <a>教你HTML5开发爱心鱼游戏</a>
            </div>
        </div>
        <div class="width_468 float_l margin_r20">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg4 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">像搭积木一样的组件式开发</span>
            </div>
            <div class=" width100 float_l height172 kaishimeiyou img_backg9 text-center line_hei172 ">
            	<span class="fon_siz20 color_white b_weight700">web前端设计从入门到精通</span>
            </div>
        </div>
        <div class="width_224 float_l margin_r20">
        	<div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou margin_b20">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
        </div>
        <div class="width_224 height364 float_l backg_white border_shadow">
        	<div class="width_224 height172 float_l jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="img/uiz7.jpg">
                </div>
                <div class="img_backg2 donghua">
                    <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                    <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                </div>
                <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                    <span class="float_l color_red">￥88.00</span>
                    <span class="float_r color_gray"><span>499</span>人在学</span>
            	</div>
            </div>
            
            <div class="width100 float_l padding_lr20 dadiv">
            	<div class="width100 float_l border_t padding_t10">
                    <ul class="tongli_ys chaochuyincang">
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                        <li><a><span class="diandian">.</span>带你学习Ja学习Jadede模板引擎</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 免费好课 -->
    <div class="width100 float_l padding_t45">
        <div class="width_1200 margin_auto">
            <div class="width100 float_l">
            
                <div class=" width_224 height172 float_l img_backg14 margin_r20">
                    <div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
                        <span>iOS<br>工程师</span>
                    </div>
                    <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
                        <span>职业路径<span class="margin_l5 wobianhua">></span></span>
                    </div>
                </div>  
                
                <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                    <div class="width100 float_l img_100 z_inx_1">
                        <img src="img/uiz7.jpg">
                    </div>
                    <div class="img_backg2 donghua">
                        <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                        <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                    </div>
                    <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                        <span class="float_l color_red">￥88.00</span>
                        <span class="float_r color_gray"><span>499</span>人在学</span>
                    </div>
                </div>
                
                <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                    <div class="width100 float_l img_100 z_inx_1">
                        <img src="img/uiz7.jpg">
                    </div>
                    <div class="img_backg2 donghua">
                        <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                        <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                    </div>
                    <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                        <span class="float_l color_red">￥88.00</span>
                        <span class="float_r color_gray"><span>499</span>人在学</span>
                    </div>
                </div>
                
                <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
                    <div class="width100 float_l img_100 z_inx_1">
                        <img src="img/uiz7.jpg">
                    </div>
                    <div class="img_backg2 donghua">
                        <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                        <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                    </div>
                    <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                        <span class="float_l color_red">￥88.00</span>
                        <span class="float_r color_gray"><span>499</span>人在学</span>
                    </div>
                </div>
                
                <div class="width_224 height172 float_l border_shadow jingguoxianshi over_pos bianshou">
                    <div class="width100 float_l img_100 z_inx_1">
                        <img src="img/uiz7.jpg">
                    </div>
                    <div class="img_backg2 donghua">
                        <span class="margin_t15 float_l ">飞速上手的跨平台App开发</span>
                        <span class="float_l fon_siz12 line_hei16 color_gray margin_t5 posi_relative ">8小时带领大家步步深入学习标签的基础知识，掌握各种样式的基本用法。</span>
                    </div>
                    <div class="width100 float_l padding_lr20 height48 fon_siz12 line_hei48 z_inx_3 posi_relative backg_white">
                        <span class="float_l color_red">￥88.00</span>
                        <span class="float_r color_gray"><span>499</span>人在学</span>
                    </div>
                </div> 
            </div>
            
        </div>
    </div>     
</div>

<!-- iOS 工程师 -->
<div class="width100 float_l padding_b45 backg_qiangray">
	<div class="width_1200 margin_auto">
    	<div class=" width_224 height364 float_l img_backg3 margin_r20">
        	<div class="width100 float_l padding_lr20 color_white fon_siz32 b_weight700 margin_t10">
            	<span>iOS<br>工程师</span>
            </div>
            <div class="width100 float_l padding_lr20 color_white fon_siz16 margin_t30 jiantoubianhua bianshou">
            	<span>职业路径<span class="margin_l5 wobianhua">></span></span>
            </div>
			<div class="width100 float_l padding_lr20 color_white fon_siz12 bianshou line_hei26 color_shenred wobeijingguos margin_t120">
            	<a>jQuery源码探索之旅</a>
                <a>高德开发者必由之路——JS API篇</a>
                <a>教你HTML5开发爱心鱼游戏</a>
            </div>
        </div>
        <div class="width_468 float_l margin_r20">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg4 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">像搭积木一样的组件式开发</span>
            </div>
            <div class=" width100 float_l height172 kaishimeiyou img_backg9 text-center line_hei172 ">
            	<span class="fon_siz20 color_white b_weight700">web前端设计从入门到精通</span>
            </div>
        </div>
        <div class="width_468 float_l">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg4 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">像搭积木一样的组件式开发</span>
            </div>
            <div class=" width100 float_l height172 kaishimeiyou img_backg9 text-center line_hei172 ">
            	<span class="fon_siz20 color_white b_weight700">web前端设计从入门到精通</span>
            </div>
        </div>
    </div>
</div>



<!-- 页脚 -->
<div class="width100 float_l padding_t30 height193">
	<div class="width_1200 margin_auto">
    	<div class="width100 float_l text_c margin_b30">
        	<a class="img_backg5" href="#"></a>
            <a class="img_backg6 posi_relative wexinmaxianshi" href="#"><i class="weixinweima dis_none"><img src="img/idx-btm.png"></i></a>
            <a class="img_backg7" href="#"></a>
            <a class="img_backg8" href="#"></a>
        </div>
        <div class="width100 float_l text_c yejiao color_gray">
            <a>关于我们</a>
            <a>企业合作</a>
            <a>人才招聘</a>
            <a>讲师招募</a>
            <a>联系我们</a>
            <a>意见反馈</a>
            <a>友情链接</a>
    	</div>
        <div class="width100 float_l text_c border_t margin_t20 padding_t20 color_gray fon_siz12">
        	<span>© 2016 imoroc.com  京ICP备13042132号</span>
        </div>
    </div>
</div>



</body>
</html>














