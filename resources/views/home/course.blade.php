<!doctype html>
<html>
@include('components.courseHead')
<body id="List_courseId">
@include('components.listTop')
<div id="main">

<div class="course-infos">
    <div class="w pr">
        <div class="path">  
            <a href="<?= url('/home/list')?>">课程</a>
                        <i class="path-split">\</i><a href="<?= url('/home/list')?>">{{ $course[0]['one']['type_name'] }}</a>
                        <i class="path-split">\</i><a href="<?= url('/home/list')?>">{{ $course[0]['two']['type_name'] }}</a>
                        <i class="path-split">\</i><a href="<?= url('/home/list')?>"><span>{{ $course[0]['type']['type_name'] }}</span></a>
        </div>
        <div class="hd clearfix">
            <h2 class="l">{{ $course[0]['course_name'] }}</h2>
                    </div>

        <div class="statics clearfix">
            
                        <div class="moco-btn l learn-btn green-btn red-btn"> 
                <a href="http://www.imooc.com/video/356" class="J-learn-course">开始学习</a>
                <em></em>
                <i class="follow-action js-follow-action icon-star_outline" data-cid="24" data-cmd="follow" title="收藏"></i>
            </div>
                        
            
                        
            <div class="static-item l">
                <span class="meta">学习人数</span>
                <span class="meta-value js-learn-num">{{ $course[0]['course_people'] }}</span>
                            </div>
            <div class="static-item l">
                <span class="meta">难度级别</span>
                <span class="meta-value">
                @if($course[0]['course_rank'] == 1)
                    初级
                @else
                    高级
                @endif
                </span>
                <em></em>
            </div>
            <div class="static-item l">
                <span class="meta">课程时长</span>
                <span class="meta-value"> 1小时 0分</span>
                <em></em>
            </div>
            <div class="static-item l score-btn">
                <span class="meta">综合评分</span>
                <span class="meta-value">{{ $course[0]['course_grade'] }}</span>
                <em></em>      
                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="http://www.imooc.com/coursescore/24" class="person-num">
                            <span class="person-num l">{{ $course[0]['course_number'] }}人评价</span>
                        </a>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="extra">
            <!-- credit -->
            <div class="share-rl-tips share-posi js-share-statue" style="display: none;">
                <span class="icon-drop_up share-triangle"></span>
                <span>分享即可 +</span><strong>1积分</strong>
            </div>
            <!-- share -->
            <div class="share-action r bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1496453330964">
                <a href="javascript:;" class="share wx js-share icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                <a href="javascript:;" class="share qq js-share icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="javascript:;" class="share sina js-share icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
            </div>
        </div>
    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="http://img.imooc.com/5774db490001c7e906000338.jpg" alt="" style="display: none" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    <canvas width="1519" height="212" class="cover-canvas" id="js-cover-canvas"></canvas></div>
    
        
</div>


<div class="course-info-main clearfix w">
    <div class="content-wrap">
        <div class="content">
                        <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">简介：{{ $course[0]['course_intro'] }}</p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu ">
	<ul class="course-menu clearfix">
		<li><a class="ui-tabs-active active" id="learnOn" href="http://www.imooc.com/learn/24"><span>章节</span></a></li>
		<li><a id="commentOn" class="" href="http://www.imooc.com/comment/24"><span>评论</span></a></li></li>
	</ul>
	
</div><!-- 课程面板 -->
            <!-- 课程章节 -->
            <div class="mod-chapters">
             @foreach($course as $key=>$val)
              <div class="chapter  chapter-active">
                    <!-- 章节标题 -->
                    @foreach($val['video'] as $k=>$v)
                    <h3>
                        <span class="icon-drop_down js-close js-open"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            {{ $v['video_name'] }}
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content" style="width: 280px; white-space: pre-line; text-align: center;"></div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                    <ul class="video">
                    <li data-media-id="356">
                        <a href="<?= url('/home/video?id='.$v['id'])?>" class="J-media-item">
                        <i class="icon-video type"></i>
                         {{ $v['video_name'] }}(04:06)
                         <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                        </a>
                        </li>
                        </ul>
                       <!-- 章节小节 end -->
                        @endforeach
                </div>
                 @endforeach
               </div>
            <!-- 课程章节 end -->
        </div><!--content end-->


        <div class="aside r">
            <div class="bd">
    
        
        <div class="box mb40 js-usercard-box">
        <h4>讲师提示</h4>
                        <div class="teacher-info">
            <a href="http://www.imooc.com/u/101818/courses?sort=publish" target="_blank">
                <img data-userid="101818" class="js-usercard-dialog" src="{{ URL::asset('img/52d7a0cf00017a3811990799-80-80.jpg') }}" width="80" height="80">
            </a>
            <span class="tit">
                <a href="http://www.imooc.com/u/101818/courses?sort=publish" target="_blank">Alex</a><i class="icon-imooc"></i>
            </span>
            <span class="job"></span>
        </div>
                                <div class="course-info-tip">
                        <dl class="first">
                <dt>课程须知</dt>
                <dd class="autowrap">1.具有一定的前端开发经验 2.掌握HTML+CSS+JavaScript相关知识
</dd>
            </dl>
                                    <dl>
                <dt>老师告诉你能学到什么？</dt>
                <dd class="autowrap">1.了解HTML5的结构标签；
2.掌握新增和删去的标签及相关属性
3.运用HTML5相关知识进行实际开发
</dd>
            </dl>
                    </div>
            </div>
    
    <div class="js-recom-box"><div class="box mb40 all-attention-box">                        <h4>大家都关注</h4>                            <div class="js-all-attention all-attention"><a href="http://www.imooc.com/topic/azmianshi" target="_blank" data-id="28" class="yellow fs14 normal">最全Android面试技巧 2017</a><a href="http://www.imooc.com/topic/fangzhan" target="_blank" data-id="27" class="green fs18 bold">如何仿站</a><a href="http://www.imooc.com/topic/mysql" target="_blank" data-id="25" class="lake-blue fs16 bold">给你最全面的MySQL知识</a><a href="http://www.imooc.com/topic/fullstack" target="_blank" data-id="29" class="blue fs20 bold">全栈开发技能</a><a href="http://www.imooc.com/topic/jquery" target="_blank" data-id="24" class="orange fs14 bold">jQuery小白进阶大神通道</a><a href="http://www.imooc.com/topic/spring" target="_blank" data-id="23" class="yellow fs18 normal">Java Spring技术栈</a><a href="http://www.imooc.com/topic/nodejs" target="_blank" data-id="26" class="lake-blue fs16 bold">5个Node.js项目实例从0讲解</a></div></div>
	<!-- <div class="box mb40 all-attention-box">
		<h4>大家都关注</h4>
		<div class="js-all-attention all-attention">
			<a href="" target="_blank" data-id="1" class="">aa</a>
			<a href="" target="_blank" data-id="2" class="">biubiu~</a>
			<a href="" target="_blank" data-id="3" class="">一个前端开发的修养</a>
			<a href="" target="_blank" data-id="4" class="">呵呵</a>
			<a href="" target="_blank" data-id="5" class="">维萨只有前端有修养</a>
			<a href="" target="_blank" data-id="6" class="">别说笑了</a>
			<a href="" target="_blank" data-id="7" class="">修养是什么</a>
			<a href="" target="_blank" data-id="8" class="">能吃么</a>
		</div>
	</div> -->
	<!-- <div class="box mb40 recom-course-list-box">
		<h4>推荐课程</h4>                   
		<ul class="js-recom-course recom-course-list clearfix">
			<li class="clearfix">                    
				<a href="http://www.imooc.com/learn/327" class="clearfix" target="_blank">
					<div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover015_s.jpg);">
						<div class="cart-color purple"></div>
					</div>
					<div class="l content-box">                            
						<p class="smalle-title">测试克隆慕课网</p>                            
						<p class="content-text" title="asfsafsafsafsadfsafsad">asfsafsafsafsadfsafsad</p>                            
						<div class="clearfix learn-detail">                                
							初级<span>·</span>138人在学                            
						</div>                        
					</div>                    
				</a>                
			</li>
			<li class="clearfix">                    
				<a href="http://www.imooc.com/learn/327" class="clearfix" target="_blank">
					<div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover015_s.jpg);">
						<div class="cart-color purple"></div>
					</div>
					<div class="l content-box">                            
						<p class="smalle-title">测试克隆慕课网</p>                            
						<p class="content-text" title="asfsafsafsafsadfsafsad">asfsafsafsafsadfsafsad</p>                            
						<div class="clearfix learn-detail">                                
							初级<span>·</span>138人在学                            
						</div>                        
					</div>                    
				</a>                
			</li>
			<li class="clearfix">                    
				<a href="http://www.imooc.com/learn/327" class="clearfix" target="_blank">
					<div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover015_s.jpg);">
						<div class="cart-color purple"></div>
					</div>
					<div class="l content-box">                            
						<p class="smalle-title">测试克隆慕课网</p>                            
						<p class="content-text" title="asfsafsafsafsadfsafsad">asfsafsafsafsadfsafsad</p>                            
						<div class="clearfix learn-detail">                                
							初级<span>·</span>138人在学                            
						</div>                        
					</div>                    
				</a>                
			</li>
		</ul>  
	</div> -->
<div class="box mb40 recom-course-list-box">                        <h4>推荐课程</h4>                        <ul class="js-recom-course recom-course-list clearfix"><li class="clearfix"><a href="http://coding.imooc.com/class/75.html" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://szimg.mukewang.com/583e42fb0001e04f05400300-360-202.jpg);"><div class="cart-color orange"></div></div><div class="l content-box">                            <p class="smalle-title">微信小程序入门与实战  常用组件 API 开发技巧 项目实战</p>                            <p class="content-text" title=""></p>                            <div class="clearfix learn-detail">初级<span>·</span>5503人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://www.imooc.com/learn/103" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover023_s.jpg);"><div class="cart-color orange"></div></div><div class="l content-box">                            <p class="smalle-title">使用D3制作图表</p>                            <p class="content-text" title="现在是大数据时代，我们每天都会产生很多的数据，如何通过更直观的方式来展示这些数据并可以让用户马上就可以获得海量信息中的规律呢？使用D3！这个课程会通过实际的例子讲解如何使用D3这个javascript库来制作几种常用类型的图表，让我们来初探数据可视化的奥秘吧！">现在是大数据时代，我们每天都会产生很多的数据，如何通过更直观的方式来展示这些数据并可以让用户马上就可以获得海量信息中的规律呢？使用D3！这个课程会通过实际的例子讲解如何使用D3这个javascript库来制作几种常用类型的图表，让我们来初探数据可视化的奥秘吧！</p>                            <div class="clearfix learn-detail">中级<span>·</span>26292人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://www.imooc.com/learn/601" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover029_s.jpg);"><div class="cart-color orange"></div></div><div class="l content-box">                            <p class="smalle-title">Canvas玩儿转红包照片</p>                            <p class="content-text" title="通过实现最新的腾讯微信红包中图像模糊，图像展示等效果，深入了解canvas的潜能，将canvas的功能更好的结合到自己的产品中。同时完成一个炫丽的，能同时运行在多端的移动web app。">通过实现最新的腾讯微信红包中图像模糊，图像展示等效果，深入了解canvas的潜能，将canvas的功能更好的结合到自己的产品中。同时完成一个炫丽的，能同时运行在多端的移动web app。</p>                            <div class="clearfix learn-detail">高级<span>·</span>38978人在学</div>                        </div>                    </a>                </li></ul></div></div>

</div>        </div>
    </div>
    <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
</div>

</div>
@include('components.courseFoot')
</body></html>