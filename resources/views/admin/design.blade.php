<!doctype html>
<html>
@include('components.adminHead')
<body>
@include('components.adminTop')
<div class="container clearfix">
    @include('components.adminMenu')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                {{--<form action="/jscss/admin/design/index" method="post">--}}
                    {{--<table class="search-tab">--}}
                        {{--<tr>--}}
                            {{--<th width="120">选择分类:</th>--}}
                            {{--<td>--}}
                                {{--<select name="search-sort" id="">--}}
                                    {{--<option value="">全部</option>--}}
                                    {{--<option value="19">WEB开发</option><option value="20">推荐界面</option>--}}
                                {{--</select>--}}
                            {{--</td>--}}
                            {{--<th width="70">标题:</th>--}}
                            {{--<td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>--}}
                            {{----}}
							{{--<th width="70">标签:</th>--}}
                            {{--<td>--}}
                                {{--<select name="search-sort" id="">--}}
                                    {{--<option value="">全部</option>--}}
                                    {{--<option value="19">php</option><option value="20">mysql</option>--}}
                                {{--</select>--}}
                            {{--</td>--}}

                            {{--<td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/admin/insert"><i class="icon-font"></i>新增作品</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>商品名称</th>
                            <th>商品价格</th>
                            <th>商品积分</th>
                            <th>商品图片</th>
                            <th>商品简介</th>
                            <th>商品状态</th>
                            <th>操作</th>
                        </tr>

                        <?php foreach ($name as $k =>$v){;?>
                        <tr id="list">
                            <td><?php echo $v->goods_id;?></td>
                            <td><a target="_blank" href=""><?php echo $v->goods_name;?></a>
                            </td>
                            <td><?php echo $v->goods_price;?></td>
                            <td><?php echo $v->goods_integral;?></td>
                            <td><img src="<?php echo "/".$v->goods_img;?>" alt="" width="70"height="20"/></td>
                            <td width="20%"><?php echo $v->goods_count;?></td>
                            <td><?php if($v->goods_status==1){
                                    echo '上架';
                                }else{ echo'下架';};?></td>
                            <td>
                                <a class="link-update" href="/admin/update?id=<?php echo $v->goods_id?>">修改</a>
                                <a class="link-del"  href="javascript:void(0)" value="<?php echo $v->goods_id;?>">删除</a>
                            </td>
                        </tr>
                        <?php } ;?>

                    </table>
                    <meta name="_token" content="{{ csrf_token() }}"/>
                    <div class="list-page"></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
<script>
    
    $(".link-del").on('click',function(){
      var sa = $(this).attr('value');
        $.ajax({
            type:'POST',
            url:'/admin/del',
            data:{
               id:sa
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            dataType:'json',
            success:function(data){
                if(data['status']==1){
                    location.reload();
                }
            }
        })

    })
</script>
</html>
