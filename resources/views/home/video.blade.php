<!DOCTYPE html>
<!-- saved from url=(0031)http://www.imooc.com/video/2195 -->
<html>
    <!--head头-->
    @include('components.VideoHead')
<body>
    <!--top头-->
    @include('components.VideoTop')
<div id="studyMain">
<div id="bgarea" class="video-con">
    <div class="js-box-wrap" style="width: 100%; height: 555px;">
        <div id="J_Box" class="course-video-box">
            <div id="video-box" class="video-wrap" style="width:100%;height:100%">
                <div id="video-box-mocoplayer" class="mocoplayer">
            <div src="blob:http://www.imooc.com/6435bfdd-f572-4807-b37b-95c8c603d02b" autobuffer="" preload="auto" class="video-js vjs-default-skin videoCentered vjs-controls-enabled vjs-workinghover vjs-user-active vjs-has-started video-box-mocoplayer-hls-video-dimensions vjs-paused" id="video-box-mocoplayer-hls-video" role="region" aria-label="video player">

            <!--视频的方面-->
            <video id="video-box-mocoplayer-hls-video_html5_api" class="vjs-tech" preload="auto" autobuffer="" src='{{ URL::asset("'".$video[0]['video_path']."'") }}'> </video>
            
            <div></div><div class="vjs-loading-spinner" dir="ltr"></div><div class="vjs-control-bar" dir="ltr" role="group"><button class="vjs-play-control vjs-control vjs-button vjs-paused" type="button" aria-live="polite"><span class="vjs-control-text">Play</span></button><div class="vjs-remaining-time vjs-time-control vjs-control"><div class="vjs-remaining-time-display" aria-live="off">0:01 / 2:32</div></div><div class="vjs-current-time vjs-time-control vjs-control"><div class="vjs-current-time-display" aria-live="off"><span class="vjs-control-text">Current Time</span> 0:01</div></div><div class="vjs-time-control vjs-time-divider"><div><span>/</span></div></div><div class="vjs-duration vjs-time-control vjs-control"><div class="vjs-duration-display" aria-live="off"><span class="vjs-control-text">Duration Time</span> 2:32</div></div><div class="vjs-progress-control vjs-control"><div tabindex="0" class="vjs-progress-holder vjs-slider vjs-slider-horizontal" role="slider" aria-valuenow="1.18" aria-valuemin="0" aria-valuemax="100" aria-label="progress bar" aria-valuetext="0:01"><div class="vjs-load-progress" style="width: 22.9283%;"><span class="vjs-control-text" style="left: 0%; width: 100%;"><span>Loaded</span>: 0%</span></div><div class="vjs-mouse-display" data-current-time="1:28" style="left: 880px;"></div><div class="vjs-play-progress vjs-slider-bar" data-current-time="0:01" style="width: 1.18%;"><span class="vjs-control-text"><span>Progress</span>: 0%</span></div></div></div><div class="vjs-volume-menu-button vjs-menu-button vjs-menu-button-inline vjs-control vjs-button  vjs-volume-menu-button-horizontal vjs-vol-3" tabindex="0" role="button" aria-live="polite"><div class="vjs-menu"><div class="vjs-menu-content"><div tabindex="0" class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal" role="slider" aria-valuenow="100.00" aria-valuemin="0" aria-valuemax="100" aria-label="volume level" aria-valuetext="100.00%"><div class="vjs-volume-level" style="width: 100%;"><span class="vjs-control-text"></span></div></div></div></div><span class="vjs-control-text">Mute</span></div><div class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button " tabindex="0" role="menuitem" aria-live="polite" aria-expanded="false" aria-haspopup="true"><div class="vjs-menu" id="vjsMenu" role="presentation"><ul class="vjs-menu-content" role="menu"><li class="vjs-menu-item" tabindex="-1" role="menuitem" aria-live="polite" style="color: rgb(147, 153, 159);">2.0x<span class="vjs-control-text"></span></li><li class="vjs-menu-item" tabindex="-1" role="menuitem" aria-live="polite" style="color: rgb(147, 153, 159);">1.75x<span class="vjs-control-text"></span></li><li class="vjs-menu-item" tabindex="-1" role="menuitem" aria-live="polite" style="color: rgb(147, 153, 159);">1.5x<span class="vjs-control-text"></span></li><li class="vjs-menu-item" tabindex="-1" role="menuitem" aria-live="polite" style="color: rgb(147, 153, 159);">1.25x<span class="vjs-control-text"></span></li><li class="vjs-menu-item" tabindex="-1" role="menuitem" aria-live="polite" style="color: rgb(240, 20, 20);">1.0x<span class="vjs-control-text"></span></li></ul></div><span class="vjs-control-text">Playback Rate</span><div class="vjs-playback-rate-value">1.0x</div></div><div class="vjs-setting-control vjs-set-control-button"><div class="vjs-set-button"></div></div><button class="vjs-fullscreen-control vjs-control vjs-button " type="button" aria-live="polite"><span class="vjs-control-text">Fullscreen</span></button></div><div class="chaptertitle" id="chapterId" style="visibility: hidden;">&nbsp;&nbsp;&nbsp;&nbsp;7-10 查看错误信息</div><div class="vjs-set-menu-bg" id="setoverlay" style="visibility: hidden;"><div class="vjs-set-menu hd autoBtn" id="autoBtn0" style="background-color: rgb(240, 20, 20);">自动</div><div class="vjs-set-menu hd lBtn" id="lBtn1">普清</div><div class="vjs-set-menu hd mBtn" id="mBtn2">高清</div><div class="vjs-set-menu hd hBtn" id="hBtn3" style="cursor: default; color: rgb(77, 85, 93);">超清</div><div class="vjs-set-menu html5Btn" id="html5Btn">HTML</div><div class="vjs-set-menu flashBtn" id="flashBtn">Flash</div><div class="vjs-set-menu hd line1Btn" id="line1Btn1" style="cursor: default; color: rgb(77, 85, 93);">线路1</div><div class="vjs-set-menu hd line2Btn" id="line2Btn2" style="cursor: default; color: rgb(77, 85, 93);">线路2</div><div class="vjs-set-menu confimBtn" id="confimBtn"></div><div class="vjs-set-menu cancelBtn" id="cancelBtn"></div><div class="vjs-set-menu closeBtn" id="closeBtn"></div></div><div class="mocoplayer-right-pause"></div></div></div></div>
            <div class="next-box J_next-box hide">
                <div class="next-box-inner">
                                            <div class="course-tip-layer J-next-course" data-next-src="/video/2196">
                            <h2>下一节课程： 代码调试功能
                                <span class="course-duration"> (08:04)</span>
                            </h2>
                            <div class="J-next-auto hide next-auto"><em>3</em> 秒后播放下一节</div>
                            <div class="J-next-btn hide next-auto btn btn-green">下一节</div>
                            <a href="http://www.imooc.com/video/2195/0" class="review-course">重新观看</a>
                            
                            <div id="js-ques-box"></div>                        </div>

                                    </div>
            </div>
        </div>
    </div>
    <!--此处结构为练习题，视频，编程公用的侧栏-->
<div class="section-list">
    <div class="operator">
        <div class="op chapter"><em class="icon-menu"></em>章节</div>
        <div class="op notes"><em class="icon-note"></em>笔记</div>
        <div class="op question"><em class="icon-addques"></em>提问</div>
        <div class="op wiki"><em class="icon-wiki"></em>WIKI</div>
    </div>
    <div class="nano has-scrollbar">
        <div class="nano-content" tabindex="0" style="right: -17px;">
            <h3>PHP入门篇</h3>
                        <ul>
                <li class="sec-title">
                    <span>第1章 欢迎学习 PHP!</span>
                </li>
                                                         <li data-id="856">
                                                <a href="http://www.imooc.com/code/856"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>1-1 PHP可以做什么？</a>
                                            </li>
                                                                             <li data-id="857">
                                                <a href="http://www.imooc.com/code/857"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>1-2 认识PHP代码标识</a>
                                            </li>
                                                                             <li data-id="858">
                                                <a href="http://www.imooc.com/code/858"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>1-3 PHP-Echo语句</a>
                                            </li>
                                                                             <li data-id="859">
                                                <a href="http://www.imooc.com/code/859"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>1-4 PHP-计算表达式</a>
                                            </li>
                                                                             <li data-id="860">
                                                <a href="http://www.imooc.com/code/860"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>1-5 PHP-字符串</a>
                                            </li>
                                                                             <li data-id="861">
                                                <a href="http://www.imooc.com/code/861"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>1-6 PHP语句结束符</a>
                                            </li>
                                                                             <li data-id="862">
                                                <a href="http://www.imooc.com/code/862"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>1-7 注释</a>
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第2章 WAMPServer集成环境安装</span>
                </li>
                                                        <li data-id="3510">
                                                <a href="http://www.imooc.com/video/3510"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>2-1 WAMPServer集成环境下载和...(04:30)</a>                        
                                            </li>
                                                                            <li data-id="3518">
                                                <a href="http://www.imooc.com/video/3518"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>2-2 WAMPServer服务控制面板介...(05:47)</a>                        
                                            </li>
                                                                            <li data-id="3520">
                                                <a href="http://www.imooc.com/video/3520"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>2-3 自定义网站根目录(07:27)</a>                        
                                            </li>
                                                                            <li data-id="3521">
                                                <a href="http://www.imooc.com/video/3521"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>2-4 WAMPServer多站点配置...(10:20)</a>                        
                                            </li>
                                                                            <li data-id="3522">
                                                <a href="http://www.imooc.com/video/3522"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>2-5 WAMPServer自拟定端口号...(03:24)</a>                        
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第3章 变量</span>
                </li>
                                                         <li data-id="756">
                                                <a href="http://www.imooc.com/code/756"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-1 PHP-什么是变量</a>
                                            </li>
                                                                             <li data-id="757">
                                                <a href="http://www.imooc.com/code/757"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-2 PHP-如何定义变量</a>
                                            </li>
                                                                             <li data-id="758">
                                                <a href="http://www.imooc.com/code/758"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-3 PHP-变量名的命名规则</a>
                                            </li>
                                                                             <li data-id="743">
                                                <a href="http://www.imooc.com/code/743"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-4 PHP-什么是变量的数据类型...</a>
                                            </li>
                                                                             <li data-id="744">
                                                <a href="http://www.imooc.com/code/744"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-5 PHP变量的数据类型</a>
                                            </li>
                                                                             <li data-id="745">
                                                <a href="http://www.imooc.com/code/745"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-6 PHP标量类型—布尔类型</a>
                                            </li>
                                                                             <li data-id="746">
                                                <a href="http://www.imooc.com/code/746"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-7 PHP标量类型—整型</a>
                                            </li>
                                                                             <li data-id="747">
                                                <a href="http://www.imooc.com/code/747"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-8 PHP标量类型—浮点型</a>
                                            </li>
                                                                             <li data-id="748">
                                                <a href="http://www.imooc.com/code/748"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-9 PHP标量类型—字符串（1）...</a>
                                            </li>
                                                                             <li data-id="749">
                                                <a href="http://www.imooc.com/code/749"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-10 PHP标量类型—字符串（2）...</a>
                                            </li>
                                                                             <li data-id="750">
                                                <a href="http://www.imooc.com/code/750"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-11 PHP标量类型—字符串（3）...</a>
                                            </li>
                                                                             <li data-id="751">
                                                <a href="http://www.imooc.com/code/751"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-12 PHP标量类型—字符串（4）...</a>
                                            </li>
                                                                             <li data-id="754">
                                                <a href="http://www.imooc.com/code/754"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-13 PHP第一种特殊类型—资源...</a>
                                            </li>
                                                                             <li data-id="755">
                                                <a href="http://www.imooc.com/code/755"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>3-14 PHP第二种特殊类型—空类型...</a>
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第4章 常量</span>
                </li>
                                                         <li data-id="804">
                                                <a href="http://www.imooc.com/code/804"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>4-1 PHP-什么是常量</a>
                                            </li>
                                                                             <li data-id="805">
                                                <a href="http://www.imooc.com/code/805"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>4-2 PHP-常量的作用</a>
                                            </li>
                                                                             <li data-id="806">
                                                <a href="http://www.imooc.com/code/806"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>4-3 PHP-认识一下系统常量</a>
                                            </li>
                                                                             <li data-id="807">
                                                <a href="http://www.imooc.com/code/807"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>4-4 PHP-常量如何取值</a>
                                            </li>
                                                                             <li data-id="808">
                                                <a href="http://www.imooc.com/code/808"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>4-5 PHP-如何判定常量是否被定义...</a>
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第5章 PHP中常用的运算符</span>
                </li>
                                                         <li data-id="877">
                                                <a href="http://www.imooc.com/code/877"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-1 什么是运算符</a>
                                            </li>
                                                                             <li data-id="878">
                                                <a href="http://www.imooc.com/code/878"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-2 PHP中的算术运算符</a>
                                            </li>
                                                                             <li data-id="880">
                                                <a href="http://www.imooc.com/code/880"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-3 PHP中的赋值运算符</a>
                                            </li>
                                                                             <li data-id="881">
                                                <a href="http://www.imooc.com/code/881"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-4 PHP中的比较运算符</a>
                                            </li>
                                                                             <li data-id="882">
                                                <a href="http://www.imooc.com/code/882"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-5 PHP中的三元运算符</a>
                                            </li>
                                                                             <li data-id="883">
                                                <a href="http://www.imooc.com/code/883"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-6 PHP中的逻辑运算符</a>
                                            </li>
                                                                             <li data-id="884">
                                                <a href="http://www.imooc.com/code/884"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-7 PHP中的字符串连接运算符...</a>
                                            </li>
                                                                             <li data-id="885">
                                                <a href="http://www.imooc.com/code/885"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-8 PHP中的错误控制运算符</a>
                                            </li>
                                                                             <li data-id="879">
                                                <a href="http://www.imooc.com/code/879"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>5-9 PHP中的算术运算符（2）...</a>
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第6章 语言结构语句</span>
                </li>
                                                         <li data-id="949">
                                                <a href="http://www.imooc.com/code/949"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-1 PHP-顺序结构</a>
                                            </li>
                                                                             <li data-id="955">
                                                <a href="http://www.imooc.com/code/955"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-2 PHP条件结构之if…else…</a>
                                            </li>
                                                                             <li data-id="957">
                                                <a href="http://www.imooc.com/code/957"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-3 PHP条件结构之if…else if…...</a>
                                            </li>
                                                                             <li data-id="958">
                                                <a href="http://www.imooc.com/code/958"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-4 PHP条件结构之if…else if…els...</a>
                                            </li>
                                                                             <li data-id="962">
                                                <a href="http://www.imooc.com/code/962"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-5 PHP条件结构之switch…case…...</a>
                                            </li>
                                                                             <li data-id="963">
                                                <a href="http://www.imooc.com/code/963"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-6 PHP条件结构之switch…case…中...</a>
                                            </li>
                                                                             <li data-id="964">
                                                <a href="http://www.imooc.com/code/964"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-7 PHP中循环结构之while循环语句...</a>
                                            </li>
                                                                             <li data-id="965">
                                                <a href="http://www.imooc.com/code/965"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-8 PHP中循环结构之do while循环语...</a>
                                            </li>
                                                                             <li data-id="966">
                                                <a href="http://www.imooc.com/code/966"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-9 PHP中循环结构之while与do…whil...</a>
                                            </li>
                                                                             <li data-id="967">
                                                <a href="http://www.imooc.com/code/967"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-10 PHP中循环结构之do…while语句的...</a>
                                            </li>
                                                                             <li data-id="968">
                                                <a href="http://www.imooc.com/code/968"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-11 PHP中循环结构之for循环语句...</a>
                                            </li>
                                                                             <li data-id="969">
                                                <a href="http://www.imooc.com/code/969"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-12 PHP中循环结构之foreach循环语句...</a>
                                            </li>
                                                                             <li data-id="970">
                                                <a href="http://www.imooc.com/code/970"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-13 PHP中循环结构之foreach循环语句...</a>
                                            </li>
                                                                             <li data-id="971">
                                                <a href="http://www.imooc.com/code/971"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-14 PHP中结构嵌套之条件嵌套...</a>
                                            </li>
                                                                             <li data-id="972">
                                                <a href="http://www.imooc.com/code/972"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-15 PHP中结构嵌套之循环嵌套...</a>
                                            </li>
                                                                             <li data-id="973">
                                                <a href="http://www.imooc.com/code/973"><i class=""><em class="icon-nolearn"></em></i><em class="icon-code"></em>6-16 PHP中结构嵌套之循环结构与条件...</a>
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第7章 PHP开发工具之Zend Studio</span>
                </li>
                                                        <li data-id="2186">
                                                <a href="http://www.imooc.com/video/2186"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-1 Zend Studio的安装(05:02)</a>                        
                                            </li>
                                                                            <li data-id="2187">
                                                <a href="http://www.imooc.com/video/2187"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-2 创建一个PHP项目(07:13)</a>                        
                                            </li>
                                                                            <li data-id="2188">
                                                <a href="http://www.imooc.com/video/2188"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-3 Zend Studio-复制、移动...(04:53)</a>                        
                                            </li>
                                                                            <li data-id="2189">
                                                <a href="http://www.imooc.com/video/2189"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-4 Zend Studio-代码提示助...(03:23)</a>                        
                                            </li>
                                                                            <li data-id="2190">
                                                <a href="http://www.imooc.com/video/2190"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-5 Zend Studio-搜索和替换...(02:18)</a>                        
                                            </li>
                                                                            <li data-id="2191">
                                                <a href="http://www.imooc.com/video/2191"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-6 Zend Studio-全文检索(02:43)</a>                        
                                            </li>
                                                                            <li data-id="2192">
                                                <a href="http://www.imooc.com/video/2192"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-7 Zend Studio-代码格式化...(02:58)</a>                        
                                            </li>
                                                                            <li data-id="2193">
                                                <a href="http://www.imooc.com/video/2193"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-8 Zend Studio-查看快捷键...(02:19)</a>                        
                                            </li>
                                                                            <li data-id="2194">
                                                <a href="http://www.imooc.com/video/2194"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-9 outline大纲功能(07:01)</a>                        
                                            </li>
                                                                            <li data-id="2195">
                                                <a href="http://www.imooc.com/video/2195"><i class="">正在学<em class="icon-clock"></em></i><em class="icon-video"></em>7-10 查看错误信息(02:32)</a>                        
                                            </li>
                                                                            <li data-id="2196">
                                                <a href="http://www.imooc.com/video/2196"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-11 代码调试功能(08:04)</a>                        
                                            </li>
                                                                            <li data-id="2197">
                                                <a href="http://www.imooc.com/video/2197"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-12 文件自动上传功能(04:33)</a>                        
                                            </li>
                                                                            <li data-id="2198">
                                                <a href="http://www.imooc.com/video/2198"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-13 SVN插件的使用(09:27)</a>                        
                                            </li>
                                                                            <li data-id="2210">
                                                <a href="http://www.imooc.com/video/2210"><i class=""><em class="icon-nolearn"></em></i><em class="icon-video"></em>7-14 Emmet插件的使用(07:51)</a>                        
                                            </li>
                                                </ul>
            
        </div>
    <div class="nano-pane" style="display: block;"><div class="nano-slider" style="height: 119px; transform: translate(0px, 484.884px);"></div></div></div>
</div></div>

<div class="maybe-wenda" id="maybe-wenda" style="display: none;">
    <i class="icon-chat"></i>
    <p class="text">你发的评论可能会是问题？<br>是否将他发到问答中</p>
    <input class="btn ok" type="button" value="好的" id="wenda-ok">
    <input class="btn no" type="button" value="不用" id="wenda-no">
</div>
</div>

<div class="course-subcontainer clearfix">
  <div class="course-left">
      <ul class="course-menu course-video-menu clearfix js-course-menu" data-ower="all" data-sort="last" style="position: absolute; left: 0px;">
    <li class="course-menu-item"><a class="active" href="javascript:void(0)" id="plMenu">评论</a></li>
    <li class="course-menu-item"><a href="javascript:void(0)" id="qaMenu" class="">问答</a></li>
    <li class="course-menu-item"><a href="javascript:void(0)" id="noteMenu">笔记</a></li>
    <!--
    <li class="course-menu-item"><a href="javascript:void(0)" id="wikiMenu">WIKI</a></li>
    -->
        </ul>
<div id="disArea" class="lists-container list-wrap">
    <div id="pl-content" class="list-tab-con" style="display: block;">
        <div class="publish clearfix" id="discus-publish">
            <div class="publish-wrap publish-wrap-pl">
                <div class="pl-input-wrap clearfix">
                    <a href="http://www.imooc.com/u/5332019" class="user-head l">
                        <img src="./查看错误信息-慕课网_files/591d486600012f4201000100-100-100.jpg" alt="教父SouL">
                    </a>
                    <div id="js-pl-input-fake" class="pl-input-inner l">
                       <textarea id="js-pl-textarea" class="js-placeholder" placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！"></textarea>
                       <span class="num-limit"><span id="js-pl-limit">0</span>/300</span>
                    </div>
                    <div class="pl-input-btm input-btm clearfix">
                        <div class="verify-code l"></div>
                        <input type="button" id="js-pl-submit" class="r course-btn" value="发表评论">
                    </div>
                </div>

            </div>
        </div>
        <div id="plLoadListData"><div class="pl-container"> <ul>   <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/2327829/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/55ed8de60001824d04230395-40-40.jpg') }}" title="H00HK"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/2327829/courses" target="_blank">H00HK</a> </div> <div class="pl-list-content">感觉大家不要太苛刻了，很好的beginner教程，如果感觉太简单了就去看高级难度的就好了。</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2015-09-18</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="112736"><i class="icon-thumb-revert"></i>  <span>11</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1974555/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/555b362f00010f3301800180-40-40.jpg') }}" title="weibo_聋的全人_0"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1974555/courses" target="_blank">weibo_聋的全人_0</a> </div> <div class="pl-list-content">要是当年我学eclipse的时候有这教程就好了……</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2015-05-21</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="51246"><i class="icon-thumb-revert"></i>  <span>9</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1963865/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/577e6507000116dd06400640-40-40.jpg') }}" title="九七"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1963865/courses" target="_blank">九七</a> </div> <div class="pl-list-content">因为之前学过其他语言，对编程逻辑的理解没有大问题。本来学这个教程就是想把基础的刷一遍，所以不在意有的地方会比较简单。那些大神们就别喷了，你牛比你也发一个这样的教程，和老师比比，看看谁讲得更清楚</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-08-30</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="281643"><i class="icon-thumb-revert"></i>  <span>5</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1191230/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/58b797c80001023e02000200-40-40.jpg') }}" title="PHP工程师养成中"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1191230/courses" target="_blank">PHP工程师养成中</a> </div> <div class="pl-list-content">2.0倍速啊 亲们</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2017-03-02</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="389314"><i class="icon-thumb-revert"></i>  <span>1</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/4298095/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/5811b7c10001f13901000100-40-40.jpg') }}" title="php_拍黄片"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/4298095/courses" target="_blank">php_拍黄片</a> </div> <div class="pl-list-content">zend死丢丢</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-12-19</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="351430"><i class="icon-thumb-revert"></i>  <span>1</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/4485430/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/5458456b0001812002200220-40-40.jpg') }}" title="慕粉2218228044"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/4485430/courses" target="_blank">慕粉2218228044</a> </div> <div class="pl-list-content">我怀疑1.25速度才是原声。。</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-12-01</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="341840"><i class="icon-thumb-revert"></i>  <span>1</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/3110351/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/56f976f7000125a907400555-40-40.jpg') }}" title="还有杂淰"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/3110351/courses" target="_blank">还有杂淰</a> </div> <div class="pl-list-content">查看错误信息很重要的</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-09-20</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="295045"><i class="icon-thumb-revert"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/3311743/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/575e001e00017a9c01000100-40-40.jpg') }}" title="慕粉3311743"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/3311743/courses" target="_blank">慕粉3311743</a> </div> <div class="pl-list-content">错误信息点那个键查看</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-06-17</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="235178"><i class="icon-thumb-revert"></i>  <span>3</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1954451/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/545850bb0001979202200220-40-40.jpg') }}" title="玩文"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1954451/courses" target="_blank">玩文</a> </div> <div class="pl-list-content">讲得好仔细哦</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-06-13</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="232999"><i class="icon-thumb-revert"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1954501/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/572b41ef0001d54b01800180-40-40.jpg') }}" title="qi657"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1954501/courses" target="_blank">qi657</a> </div> <div class="pl-list-content">老师的英文听的我乐嘎嘎的，真想看看真人，哈哈哈哈</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-05-25</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="223720"><i class="icon-thumb-revert"></i>  <span>1</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1373212/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/533e4ce900010ae802000200-40-40.jpg') }}" title="Geying"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1373212/courses" target="_blank">Geying</a> </div> <div class="pl-list-content">评论里大神好多啊~不喜欢的就别看呗~看不惯你录一个？</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-01-15</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="157184"><i class="icon-thumb-revert"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/2535931/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/5458631e0001ffd402200220-40-40.jpg') }}" title="zhaolele_php"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/2535931/courses" target="_blank">zhaolele_php</a> </div> <div class="pl-list-content">讲这么点真尼玛敷衍人呢   每个视频超不过3 分钟</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2015-11-05</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="129750"><i class="icon-thumb-revert"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/2146690/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/533e4c5600017c5b02010200-40-40.jpg') }}" title="海豚恋上喵"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/2146690/courses" target="_blank">海豚恋上喵</a> </div> <div class="pl-list-content">早点看一下多好！！！</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2015-07-15</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="84580"><i class="icon-thumb-revert"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1061701/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/547857110001034201000100-40-40.jpg') }}" title="Java程序狗"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1061701/courses" target="_blank">Java程序狗</a> </div> <div class="pl-list-content">好棒的提示啊</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2015-05-08</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="46760"><i class="icon-thumb-revert"></i>  <span>1</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1287267/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/54f5c7d70001892801000100-40-40.jpg') }}" title="Feng_小疯"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1287267/courses" target="_blank">Feng_小疯</a> </div> <div class="pl-list-content">这叫警告，不是错误！</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2015-03-30</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="34057"><i class="icon-thumb-revert"></i>  <span>2</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/u/1050280/courses" target="_blank"><img width="40" height="40" src="{{ URL::asset('img/54584c6d0001664502200220-40-40.jpg') }}" title="George1050280"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/u/1050280/courses" target="_blank">George1050280</a> </div> <div class="pl-list-content">so eazy</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2014-12-01</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="5117"><i class="icon-thumb-revert"></i>  <span>1</span></a> </div> </div> </li> </ul></div><div class="page pl-list-page"></div></div>
    </div>
    <div id="qa-content" class="list-tab-con" style="display: none;">
        <div id="qaLoadListData"><div class="sortlist"> 			<div class="ordertab clearfix"> 				<a href="javascript:void(0)" hidefocus="true" data-order="1" class="quealltab onactive">全部</a>				<a href="javascript:void(0)" hidefocus="true" data-order="2" class="quealltab ">精华</a>			</div>		</div><div class="answertabcon"> <div class="wenda-listcon clearfix"> <div class="headslider l"> <a href="http://www.imooc.com/u/3536383/courses" class="wenda-head" target="_blank" title="慕粉3536383"> <img src="{{ URL::asset('img/54586333000160de02200220-80-80.jpg') }}" alt="慕粉3536383" width="40">  <i class="icon-ques-revert nofinish"></i>  </a> </div> <div class="wendaslider"> <h2 class="wendaquetitle"> <a href="http://www.imooc.com/u/3536383/courses" target="_blank" title="慕粉3536383" class="wenda-nickname">慕粉3536383</a> <div class="wendatitlecon">  <a href="http://www.imooc.com/qadetail/150552" target="_blank" class="wendatitle"> <b> problems里面不管代码怎么错，里面都提示不了错误和警告  </b> </a>  </div> </h2>  <div class="replycont clearfix">  <div class="fl replydes"> <span class="replysign praise">[最新  <a href="http://www.imooc.com/space/u/uid/2817365" target="_blank" title="Frank_Han_0531" class="nickname">Frank_Han_0531 </a> 的回答] </span> <span class="replydet">用的Zend 还是 Eclipse？确定右上角 是 PHP视图，Problem左上角的小箭头&gt;Show&gt;选show all。如果是不在PHP视图，可以看看 Markers里，也有错误和警告。</span> </div>  </div> <div class="replymegfooter clearfix"> <div class="wenda-time l"> <em>时间：2016-07-07</em> </div> <a href="http://www.imooc.com/qadetail/150552" target="_blank" class="replynumber r hasanswernum"> <span class="ys"> <b class="numShow">1</b> <span class="number">回答</span> </span> <span class="browsenum"> <b class="numShow">52</b> <span class="number">浏览</span> </span> </a> </div> </div> </div> <div class="wenda-listcon clearfix"> <div class="headslider l"> <a href="http://www.imooc.com/u/2300237/courses" class="wenda-head" target="_blank" title="唯梦闲人"> <img src="{{ URL::asset('img/55e18cad00017b0101000099-80-80.jpg') }}" alt="唯梦闲人" width="40">  <i class="icon-ques-revert nofinish"></i>  </a> </div> <div class="wendaslider"> <h2 class="wendaquetitle"> <a href="http://www.imooc.com/u/2300237/courses" target="_blank" title="唯梦闲人" class="wenda-nickname">唯梦闲人</a> <div class="wendatitlecon">  <a href="http://www.imooc.com/qadetail/100945" target="_blank" class="wendatitle"> <b> 为什么我的没有problems这个状态栏，找也找不到？  </b> </a>  </div> </h2>  <div class="replycont clearfix">  <div class="fl replydes"> <span class="replysign praise">[最赞  <a href="http://www.imooc.com/space/u/uid/2300237" target="_blank" title="唯梦闲人" class="nickname">唯梦闲人 </a> 的回答] </span> <span class="replydet">额，找到了。在窗口&gt;显示视图&gt;问题 &nbsp;那里。</span> </div>  </div> <div class="replymegfooter clearfix"> <div class="wenda-time l"> <em>时间：2015-10-17</em> </div> <a href="http://www.imooc.com/qadetail/100945" target="_blank" class="replynumber r hasanswernum"> <span class="ys"> <b class="numShow">1</b> <span class="number">回答</span> </span> <span class="browsenum"> <b class="numShow">81</b> <span class="number">浏览</span> </span> </a> </div> </div> </div> <div class="wenda-listcon clearfix"> <div class="headslider l"> <a href="http://www.imooc.com/u/215827/courses" class="wenda-head" target="_blank" title="明君"> <img src="{{ URL::asset('img/53b3d38f000193c801000100-80-80.jpg') }}" alt="明君" width="40">  <i class="icon-ques-revert nofinish"></i>  </a> </div> <div class="wendaslider"> <h2 class="wendaquetitle"> <a href="http://www.imooc.com/u/215827/courses" target="_blank" title="明君" class="wenda-nickname">明君</a> <div class="wendatitlecon">  <a href="http://www.imooc.com/qadetail/21436" target="_blank" class="wendatitle"> <b> 提示代码错误 , 往往不是提示行的错误 , 而是提示行的上一行有错误~  </b> </a>  </div> </h2>  <div class="replycont clearfix">  <div class="fl replydes"> <span class="replysign praise">[最新  <a href="http://www.imooc.com/space/u/uid/311333" target="_blank" title="墨西哥鸡味卷" class="nickname">墨西哥鸡味卷 </a> 的回答] </span> <span class="replydet">我也发现。比如少些分号。。。</span> </div>  </div> <div class="replymegfooter clearfix"> <div class="wenda-time l"> <em>时间：2014-08-22</em> </div> <a href="http://www.imooc.com/qadetail/21436" target="_blank" class="replynumber r hasanswernum"> <span class="ys"> <b class="numShow">1</b> <span class="number">回答</span> </span> <span class="browsenum"> <b class="numShow">231</b> <span class="number">浏览</span> </span> </a> </div> </div> </div></div><div class="page discuss-list-page"></div></div>
    </div>
    <div id="note-content" class="list-tab-con" style="display:none">
        <div id="noteLoadListData">
        <div class="course-tool-bar clearfix js-select-state">			<div class="tool-left l js-all-state">		        <a href="javascript:;" class="sort-item active" data-sort="last">最新</a>		        <a href="javascript:;" class="sort-item" data-sort="sugg">点赞</a>	        </div>	        <div class="tool-right r">		        <div class="switch js-ower" data-sort="last">		    		<div class="switch-line"></div>		    		<div class="round js-lookme-round"></div>		  		</div>		        <span class="tool-item">只看我的</span>		    </div>		</div><div id="course_note" class="course_note"></div><div class="page note-list-page"></div></div>
    </div>
    <div id="wiki-content" class="list-tab-con" style="display:none;">
        <div id="wikiLoadListData">
        <div id="course_wiki" class="course_wiki"></div><div class="page wiki-list-page"></div></div>
    </div>
    <div id="mate-content" class="list-tab-con" style="display:none;">
        <div id="mateLoadListData">
        <div class="othterscode-container"></div><div class="page othterscode-list-page"></div></div>
    </div>

</div>
  </div>
  <div class="course-right clearfix">
           <div class="coursedownload">
        <h3>资料下载</h3>
        <ul class="downlist">
                        <li>
              <span><i class="icon icon-folder"></i>Zend Studio快捷键汇总</span>
              <a href="http://img.mukewang.com/down/53ad237300010a0300000000.rar" class="downcode" target="_blank" download="" data-id="125" title="Zend Studio快捷键汇总">下载</a>
            </li>
                    </ul>
    </div>

  <div class="js-recom-box"><div class="box mb40 all-attention-box">                        <h4>大家都关注</h4>                            <div class="js-all-attention all-attention"><a href="http://www.imooc.com/topic/thinkphp" target="_blank" data-id="19" class="orange fs16 bold">视频教程深入学习Thinkphp</a><a href="http://www.imooc.com/topic/fangzhan" target="_blank" data-id="27" class="lake-blue fs14 normal">如何仿站</a><a href="http://www.imooc.com/topic/yii" target="_blank" data-id="20" class="green fs20 bold">YII 2.0实战项目</a><a href="http://www.imooc.com/topic/fullstack" target="_blank" data-id="29" class="blue fs18 bold">全栈工程师</a><a href="http://www.imooc.com/topic/azmianshi" target="_blank" data-id="28" class="orange fs16 normal">Android最新面试技巧</a><a href="http://www.imooc.com/topic/phpframe" target="_blank" data-id="7" class="yellow fs14 normal">在这里找到适合你的PHP框架</a><a href="http://www.imooc.com/topic/ecom" target="_blank" data-id="8" class="lake-blue fs20 bold">如何开发电商网站</a></div></div>
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
<div class="box mb40 recom-course-list-box">                        <h4>推荐课程</h4>                        <ul class="js-recom-course recom-course-list clearfix"><li class="clearfix"><a href="http://coding.imooc.com/class/102.html" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://szimg.mukewang.com/59154cc2000109e005400300-360-202.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">Yii 2.0 从微信端到后台全栈开发图书商城</p>                            <p class="content-text" title=""></p>                            <div class="clearfix learn-detail">中级<span>·</span>70人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://www.imooc.com/learn/380" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover037_s.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">那些年你遇到的错误与异常</p>                            <p class="content-text" title="本课程主要讲解两部分内容，先从PHP中的错误模块谈起，讲解了PHP中常见的错误类型，剖析了PHP中的错误处理。接着又讲解了PHP5面向对象过程中新的错误处理方式--异常模块，由浅入深，讲解异常及异常的实战应用等。">本课程主要讲解两部分内容，先从PHP中的错误模块谈起，讲解了PHP中常见的错误类型，剖析了PHP中的错误处理。接着又讲解了PHP5面向对象过程中新的错误处理方式--异常模块，由浅入深，讲解异常及异常的实战应用等。</p>                            <div class="clearfix learn-detail">中级<span>·</span>17582人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://www.imooc.com/learn/26" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover029_s.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">PHP进阶篇</p>                            <p class="content-text" title="通过PHP学习的进阶篇的学习，你可以对PHP的理论知识由浅入深有更深一步的掌握，这些知识能够使您更加全面的掌握PHP，从而助您在实际工作中使用PHP快速开发网站程序。">通过PHP学习的进阶篇的学习，你可以对PHP的理论知识由浅入深有更深一步的掌握，这些知识能够使您更加全面的掌握PHP，从而助您在实际工作中使用PHP快速开发网站程序。</p>                            <div class="clearfix learn-detail">中级<span>·</span>131649人在学</div>                        </div>                    </a>                </li></ul></div></div>
  <div class="wendalist js-right-wenda" style="display: block;">
    <div class="course-right-title">
        <h3>猿问推荐</h3>
        <a href="http://www.imooc.com/wenda/?block_id=tuijian_yw" target="_blank" class="more">更多</a> 
    </div>

      <ul><li><a href="http://www.imooc.com/wenda/detail/351144?block_id=tuijian_yw" target="_blank">为啥要做程序员，初心是什么？</a><i>9 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/351113?block_id=tuijian_yw" target="_blank">为什么我看了很多PHP教学视频还是学不会？</a><i>13 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/351114?block_id=tuijian_yw" target="_blank">学习编程一定要会英语？</a><i>11 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/351181?block_id=tuijian_yw" target="_blank">看电脑时间长了眼睛很痛，你们是怎么护眼的？</a><i>2 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/351097?block_id=tuijian_yw" target="_blank">小白对php,mysql的一个语法看不懂，麻烦大神能指...</a><i>5 回答</i></li></ul>
  </div>
  <div class="articlelist js-right-article" style="display: block;">
    <div class="course-right-title">
        <h3>手记推荐</h3>
        <a href="http://www.imooc.com/article/?block_id=tuijian_wz" target="_blank" class="more">更多</a> 
    </div>
    <div class="course-right-content">
      
    </div>
    <ul><li><a href="http://www.imooc.com/article/18258?block_id=tuijian_wz" target="_blank">〇〇七章 日期控件的应用</a></li><li><a href="http://www.imooc.com/article/18250?block_id=tuijian_wz" target="_blank">使用Laravel5做权限管理</a></li><li><a href="http://www.imooc.com/article/18245?block_id=tuijian_wz" target="_blank">〇〇五章   php生成excel最简单方法</a></li><li><a href="http://www.imooc.com/article/18221?block_id=tuijian_wz" target="_blank">〇〇四章 input 限制输入内容的正则表达式</a></li><li><a href="http://www.imooc.com/article/18210?block_id=tuijian_wz" target="_blank">【限时抢票】直通PHP全球开发者大会</a></li></ul>
  </div>  </div>
</div>

@include('components.VideoFoot')
<!--Foot脚-->
</body></html>