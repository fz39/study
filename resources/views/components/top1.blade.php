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
