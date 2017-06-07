<!doctype html>
<html>
@include('components.head')
<body class="backg_huibai">
@include('components.top')
<!-- 轮播图 -->
<div class="width100 float_l margin_t-405 margin_b40">
	<div class="width_1200 margin_auto">
    	<div class="width100 float_l height460 posi_relative">
        	<div class="width100 float_l">
                <div class="focusBox">
                    <ul class="pic">
                        <li><a><img src="{{ URL::asset('img/uiz21.jpg') }}" /></a></li>
                        <li><a><img src="{{ URL::asset('img/uiz20.jpg') }}" /></a></li>
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
            @foreach($type_arr as $key=>$val)
            	<div class="width100 float_l tab_qiehuan ">
                	<div class="width100 float_l text_c height64 line_hei64 color_white bianhuabeijing backg_jqian padding_lr20">
                        <div class="width100 float_l text_l height64 line_hei64 color_white border_b_baise fon_siz16">
                            <span>{{$val['type_name']}}</span>
                            <span class="float_r">></span>
                        </div>
                    </div>
                    <div class="width_700 float_l lunbofenlei dis_none img_backg15">
                    	<div class="width100 float_l padding40">
                        @if(!empty($val['son']))
                        @foreach($val['son'] as $k=>$v)
                        	<div class="width100 float_l margin_b40">
                            	<span class="width100 color_shenred fon_siz16 float_l margin_b20">{{$v['type_name']}}</span>
                                @if(!empty($v['son']))
                                @foreach($v['son'] as $p)
                                <ul id="menu">
                                	<li><a>{{ $p['type_name'] }}</a></li>
                                    <li>&nbsp;/&nbsp;</li>
                                </ul>
                                 @endforeach
                                 @endif
                            </div>
                           @endforeach 
                        @endif
                        </div>
                    </div>
                </div>
                @endforeach
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                <a>高德开发者必由之路——img API篇</a>
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                <a>高德开发者必由之路——img API篇</a>
                <a>教你HTML5开发爱心鱼游戏</a>
            </div>
        </div>
        <div class="width_712 float_l margin_r20">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg10 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">搞定Java加解密</span>
            </div>
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                <a>高德开发者必由之路——js API篇</a>
                <a>教你HTML5开发爱心鱼游戏</a>
            </div>
        </div>
        <div class="width_712 float_l margin_r20">
        	<div class=" width100 float_l height172 kaishimeiyou img_backg10 text-center line_hei172 margin_b20">
            	<span class="fon_siz20 color_white b_weight700">搞定Java加解密</span>
            </div>
            <div class="width_224 height172 float_l margin_r20 border_shadow jingguoxianshi over_pos bianshou">
            	<div class="width100 float_l img_100 z_inx_1">
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                <a>高德开发者必由之路——img API篇</a>
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                	<img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                        <img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                        <img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                        <img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                        <img src="{{ URL::asset('img/uiz7.jpg') }}">
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
                <a>高德开发者必由之路——img API篇</a>
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

@include('components.foot')

</body>
</html>














