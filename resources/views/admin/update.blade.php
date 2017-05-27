<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}"/>
    <script type="text/javascript" src="{{ URL::asset('js/modernizr.min.js') }}"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="icon-font">&#xe008;</i>作品管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/admin/update_to" method="post" enctype="multipart/form-data">
                    <?php foreach($arr as $k =>$v){ ;?>
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>商品名称：</th>
                                <td>
                                    <input type="hidden" name="goods_id" value="<?= $v->goods_id?>"/>
                                    <input type="hidden" name="_token" value=" {{ csrf_token() }}"/>
                                    <input class="common-text required" id="title" name="goods_name" size="50" value="<?=$v->goods_name?>" type="text">
                                </td>
                            </tr>

      <!--                       <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="smallimg" id="" type="file"><input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/></td>
                            </tr> -->

<!--                            <tr>-->
<!--                                <th>选择标签：</th>-->
<!--                                <td><input type="checkbox"> PHP  <input type="checkbox"> mysql  <input type="checkbox"> Apache <input type="checkbox"> Linux-->
<!--								<input type="checkbox"> redis  <input type="checkbox"> nosql <input type="checkbox"> nginx模块-->
<!--								</td>-->
<!--                            </tr>-->
                            <tr>
                                <th><i class="require-red">*</i>商品图片：</th>
                                <td><input class="common-text" name="goods_img" size="50" value="2321312" type="file"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>商品价格：</th>
                                <td><input class="common-text" name="goods_price" size="50" value="<?=$v->goods_price?>" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>商品积分：</th>
                                <td><input class="common-text" name="goods_integral" size="50" value="<?=$v->goods_integral?>" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td><textarea name="goods_count" class="common-textarea" id="content" cols="30" style="width: 42%;" rows="10" value=""><?=$v->goods_count?></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>

                        </tbody></table>
                    <?php } ;?>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>