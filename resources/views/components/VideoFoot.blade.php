<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="http://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <!--<li><a href="/subject/html" target="_blank">专题页面</a></li>-->
                        <li><a href="http://www.imooc.com/about/us" target="_blank">关于我们</a></li>
                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" charset="utf-8" src="{{ URL::asset('js/ueditor.final.min.js') }}"></script>

<script src="{{ URL::asset('js/ssologin.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/sea.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/sea_config.js') }}"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>



<div style="display: none">
  <script type="text/javascript">
  var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
  document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
  </script><script src="{{ URL::asset('js/h.js') }}" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img border="0" src="./查看错误信息-慕课网_files/21.gif" width="20" height="20"></a>
</div><script type="text/javascript" src="{{ URL::asset('js/user') }}"></script><script type="text/javascript" src="{{ URL::asset('js/iplookup.php') }}"></script>
<!--笔记弹出框-->

<script type="text/imooc-tpl" id="course-note-tpl">
   <div class="note-pop">
        <div id="js-note-input-fake" class="textarea-wrap">
            <textarea data-maxlength="1000" id="js-note-textarea" class="js-placeholder" name="" placeholder="请输入笔记内容..."></textarea>
            <p class="note-text-counter"><span id="js-note-limit">0</span>/1000</p>
        </div>
        <div class="publish-note-btns input-btm clearfix">
            <div class="verify-code clearfix"></div>
                                            <div title="截图"  class="js-shot-video screen-btn" data-type="note">
                    <span>截图</span>
                </div>
                                        <input type="button" title="发表" value="保存" id="js-note-submit" class="moco-btn moco-btn-green r" />
            <!-- <label for="js-isshare"  class="label-checked r"><input type="checkbox" checked="checked" id="js-isshare" class="checked" /> 公开</label> -->
        </div>
</div>
</script>
<!--问答弹出框 通用-->
<script type="text/imooc-tpl" id="course-qa-tpl">

    <div class="qa-pop">

            <div class="question-area">
                <div class="qa-control qa-ipt-title">
                    <input type="text" id="js-qa-title" maxlength="255" class="js-placeholder autocomplete" placeholder="请输入问题标题" />
                </div>
                <a href="http://www.imooc.com/wenda/detail/292353" target="_blank" class="another-meth">如何更好<br />的提问？</a>
                <dl class="send-area-result">
                </dl>
            </div>

        <div class="qa-control-wrap clearfix">
            <div class="qa-control">
                <div class="rich-text-editor">
                    <textarea id="discuss-editor" >请输入讨论内容...</textarea>
                </div>
            </div>
        </div>
        <div id="js-discuss-btm" class="discuss-bottom input-btm clearfix pop-footer">
            <div class="verify-code clearfix"></div>
                                            <div title="截图"  class="js-shot-video screen-btn" data-type="qa">
                    <span>截图</span>
                </div>
                                        <input id="js-discuss-submit" class="r moco-btn moco-btn-green" type="button" value="发布" />
        </div>
        <div id="use-credit-tip" class="use-credit-tip">
            <span class="credit-info">本次提问将花费2个积分</span>
            <a class="credit-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
        </div>
    </div>

</script>
<!--积分弹出框-->
<div class="integral-pop" id="no-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>你的积分不足，无法发表</p>
        <a class="integral-rule" href="http://www.imooc.com/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a href="javascript:void(0)" class="btn btn-green l cancel-cf">确认</a>
            <a href="javascript:void(0)" class="btn btn-grey r cancel-cf">取消</a>
        </div>
    </div>
</div>
<div class="integral-pop" id="enough-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>继续发表请点击 "确定"</p>
        <a class="integral-rule" href="http://www.imooc.com/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a id="interal-use" href="javascript:void(0)" class="btn btn-green l">确认</a>
            <a id="interal-cancel" href="javascript:void(0)" class="btn btn-grey r">取消</a>
        </div>
    </div>
</div>

<!--WIKI弹出框 通用-->
<script type="text/imooc-tpl" id="course-wiki-tpl">
    <div class="wiki-pop">

        <div class='search_box clearfix'>
            <input class='search_ipt' type='text' placeholder='输入你想要找的WiKi词条名称' />
            <input type='button' value='搜索' class='search_btn' />
            <a class='createwiki' href='/wiki/create' target="_blank">创建wiki</a>
        </div>
        
        <div id='js-search-area-result' class='search-area-result'>
        </div>
    </div>

</script>

<div id="video_mark" class="video_mark" style="display:none;"></div>
<!--<div class="fixed-video js-fixed-video">-->
    <!--<h3>点击按住该条进行拖动</h3>-->
    <!--<div class="fixed-video-con"></div>-->
<!--</div>-->
<!--
//此处结构在js里插入
<div class="animate-mp" style="left:50%;top:50%">-->
    <!--<p class="mp"><i>+</i><span class="num">8</span>MP</p>-->
    <!--<p class="desc">haha</p>-->
<!--</div>-->


<div class="moco-usercard-dialog js-moco-usercard-modal"></div>