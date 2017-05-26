<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>对不起好像数据有误哦！</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="{{ URL::asset('css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css?v=4.1.0') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.1.12.min.js') }}"></script>
</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
        <h1>数据有误</h1>
        <h3 class="font-bold">数据库的数据添加失败了</h3>
        <br/>页面将在3秒后跳转到原页面...<br/>还剩<span id="num">3</span>秒
        <div class="error-desc">
            对不起好像数据有误哦！
            <br/>您可以重新提交试试
        </div>
    </div>
    

    <!-- 全局js -->
    <script src="{{ URL::asset('js/jquery.min.js?v=2.1.4') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js?v=3.3.6') }}"></script>

    
    

</body>

</html>
<script language="javascript">
        $(document).ready(function() { 
            function jump(count) { 
                window.setTimeout(function(){ 
                    count--; 
                    if(count > 0) { 
                        $('#num').html(count); 
                        jump(count); 
                    } else { 
                        history.go(-1);
                    } 
                }, 1000); 
            } 
            jump(3); 
        }); 

</script> 