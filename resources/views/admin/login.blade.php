<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『豪情』后台管理</title>
    <link href="{{ URL::asset('css/admin_login.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form name="myform" novalidate action="<?=url('/admin/login')?>" method="post" >
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="admin_name" value="admin" id="name" size="40" class="admin_input_style" />
                        <span class="span_name"></span>
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="admin_password" value="admin" id="xpassword1" size="40" class="admin_input_style" />
                        <span class="span_pwd"></span>
                    </li>
                    <li>
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <input type="submit" tabindex="3" id="login" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="#">返回首页</a> &copy; 2014 Powered by <a href="http://jscss.me" target="_blank">有主机上线</a></p>
</div>
</body>
</html>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
<script>
    //定义全局变量
    var flag_name = 0;
    var flag_pwd = 0;

    //验证用户名
    $("#name").blur(function(){
        var name = $(this).val();
        var reg_name=/^[\u4E00-\u9FA5A-Za-z0-9]{2,20}$/ ;
        if(name == "") {
            $(".span_name").html("<font color='red'>用户名不能为空!</font>");
        } else {
            if(reg_name.test(name)) {
                var reg_name=/^[\u4E00-\u9FA5A-Za-z0-9]{2,20}$/;
                $(".span_name").html("<font color='green'>√</font>");
                flag_name = 1;
            } else {
                $(".span_name").html("<font color='red'>中文、英文、数字但不包括下划线等符号</font>");
            }
        }
    });
    //验证密码
    $("#xpassword1").blur(function(){
        var admin_password = $("#xpassword1").val();
        var reg_pwd =/^\w{6,12}$/;
        if (admin_password == "") {
            $(".span_pwd").html("<font color='red'>密码不能为空!</font>");
        } else {
            if (reg_pwd.test(admin_password)) {
                $(".span_pwd").html("<font color='green'>√</font>");
                flag_pwd = 1;
            } else {
                $(".span_pwd").html("<font color='red'>密码为6-12位组成!</font>");
            }
        }
    });
    $("#login").click(function(){
        if( flag_name=1 && flag_pwd==1) {
            return true;
        } else {
            return false;
        }

    })
</script>