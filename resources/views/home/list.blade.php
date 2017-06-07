<!doctype html>
<html>
@include('components.listHead')
<body id="List_courseId">
@include('components.listTop')
<div id="main">

    <div class="wrap ">
        <div class="top">
            <div class="course-content">
                <div class="course-nav-box">
                    <div class="course-nav-row clearfix">
                        <span class="hd l">方向：</span>
                        <div class="bd">
                            <ul class="">
                                <li class="course-nav-item on">
                                    <a href="http://www.imooc.com/course/list">全部</a>
                                </li>
								@foreach($one as $k=>$v)
                                <li class="course-nav-item">
                                        <a href="http://www.imooc.com/course/list?c=fe" data-ct="fe">{{ $v['type_name'] }}</a>
                                </li>
								@endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="course-nav-row clearfix">
                        <span class="hd l">分类：</span>
                        <div class="bd">
                            <ul class="">
                                 <li class="course-nav-item on">
                                    <a href="http://www.imooc.com/course/list?type=6">全部</a>
                                </li>
								@foreach($two as $k=>$v)
                                <li class="course-nav-item">
                                    <a href="http://www.imooc.com/course/list?c=html&amp;type=6" data-id="7" data-ct="html">{{ $v['type_name'] }}</a>
                            	</li>
								@endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="course-nav-row clearfix border_bottom_none">
                        <span class="hd l">类型：</span>
                        <div class="bd">
                            <ul class="">

                                <li class="course-nav-item ">
                                        <a href="http://www.imooc.com/course/list?">全部</a>
                                </li>
								@foreach($three as $k=>$v)
                                <li class="course-nav-item ">
                                        <a href="http://www.imooc.com/course/list?type=1">{{ $v['type_name'] }}</a>
                                </li>
								@endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<!--最新 最热-->
    <div class="container">
                <div class="course-tool-bar clearfix">
                    <div class="tool-left l">
                            <a href="http://www.imooc.com/course/list?type=6&amp;sort=last" class="sort-item">最新</a>
                            <a href="http://www.imooc.com/course/list?type=6&amp;sort=pop" class="sort-item active">最热</a>
                            </div>
                    <div class="l">
                        <span class="tool-item" style="display: none;">
                            <a class="follow-learn tool-chk" href="javascript:void(0);">跟我学</a>
                        </span>
                    </div>
                    <div class="tool-right r">
                        
                        <span class="tool-item total-num">
                            共<b>9</b>个课程
                        </span>
                        <span class="tool-item tool-pager">
                                                        <span class="pager-num">
                                <b class="pager-cur">1</b>/<em class="pager-total">1</em>
                            </span>
                                                        <a href="javascript:void(0)" class="pager-action pager-prev  disabled"><i class="icon-left2"></i></a>
                            
                                                        <a href="javascript:void(0)" class="pager-action pager-next disabled"><i class="icon-right2"></i></a>
                                                    </span>
                    </div>
                </div>

			<!--高级课程展示-->
            <div class="course-list">
                <div class="moco-course-list">
                    <ul class="clearfix">
					<div class="moco-course-wrap szcoursewrap">

                
				<a href="<?= url('/home/course?id='.$expert_one['id'])?>" target="_blank" class="szcourse-cart active">
				<div class="szcourse-cart-A">
					<div class="szcourse-cart-b">
						<div class="szcourse-p1 clearfix">
							<i class="imv2-war"></i>
							<span>实战课程</span>
						</div>
						<div class="szcourse-p2">{{ $expert_one['course_name'] }}</div>
						<div class="szcourse-p3">{{ $expert_one['course_intro'] }}</div>
						<div class="szcourse-bottom clearfix">
							<span class="l">{{ $expert_one['course_people'] }}</span>
							<span class="r">￥{{ $expert_one['course_money'] }}</span>
						</div>
					</div>
					<div class="szcourse-cart-o"></div>
					<div class="shizhanpic"></div>
				</div>
				
				<div class="szcourse-cart-B">
					<div>
						<div class="szcourse-name clearfix">{{ $expert_one['course_name'] }}</div>
						<div class="szcourse-bottom clearfix">
							<span class="l">{{ $expert_one['course_people'] }}</span>
							<span class="r">￥{{ $expert_one['course_money'] }}</span>
						</div>
					</div>
				</div>
			</a>
			@foreach($expert as $k=>$v)
			<a href="<?= url('/home/course?id='.$v['id'])?>" target="_blank" class="szcourse-cart ">
				<div class="szcourse-cart-A">
					<div class="szcourse-cart-b">
						<div class="szcourse-p1 clearfix">
							<i class="imv2-war"></i>
							<span>实战课程</span>
						</div>
						<div class="szcourse-p2">{{ $v['course_name'] }}</div>
						<div class="szcourse-p3">{{ $v['course_intro'] }}</div>
						<div class="szcourse-bottom clearfix">
							<span class="l">{{ $v['course_people'] }}</span>
							<span class="r">￥{{ $v['course_money'] }}</span>
						</div>
					</div>
					<div class="szcourse-cart-o"></div>
					<div class="shizhanpic"></div>
				</div>
				
				<div class="szcourse-cart-B">
					<div>
						<div class="szcourse-name clearfix">{{ $v['course_name'] }}</div>
						<div class="szcourse-bottom clearfix">
							<span class="l">{{ $v['course_people'] }}</span>
							<span class="r">￥{{ $v['course_money'] }}</span>
						</div>
					</div>
				</div>
			</a>
			@endforeach
			</div>
		<!--基础课程-->
		@foreach($basis as $k=>$v)
		<div class="index-card-container course-card-container container ">
			<a target="_blank" class="course-card" href="<?= url('/home/course?id='.$v['id'])?>">
				<div class="course-card-top cart-color red">
					<i class="imv2-war"></i>
					<span>{{ $v['type_name'] }}</span>
			</div>
				<div class="course-card-content">
					<h3 class="course-card-name">{{ $v['course_name'] }}</h3>
							<p title="{{ $v['course_intro'] }}">{{ $v['course_intro'] }}</p>
							<div class="clearfix course-card-bottom">
						<div class="course-card-info">基础<span>·</span>{{ $v['course_people'] }}</div>
					</div>
				</div>
			</a>
			<img src="{{ URL::asset('img/new.png') }}" class="course-cart-new">
					<div class="course-card-bk">
				<img src="{{ URL::asset('img/cover030_s.jpg') }}">
			</div>
		</div>
		@endforeach
                    </ul>
                </div>
            </div>
    </div>
<!--基础课程结束-->
</div>
@include('components.listFoot')
</body></html>
<script>

</script>











