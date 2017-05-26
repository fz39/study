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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?= url('/admin/typeAdd')?>" method="post">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>新建分类</th>
                              <td>
                                 <input class="common-text required" name="type_name" size="50" value="" type="text">
                                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                              </td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>分类级别</th>
                            <td>
                                <select name="type_rank" id="catid" class="rank">
                                    <option value="0" parent=''>一级</option>
									<option value="1" parent='0'>二级</option>
                                    <option value="2" parent='1'>三级</option>
                                </select>
                            </td>
                        </tr>
                        <tr class='type_name'>
                            
                        </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
<script>
$(function($) {
    $('.rank').change(function(){
        var parent = $(this).find("option:selected").attr('parent')
        // alert(rank);
        if(parent == ''){
            alert('当前级别为最高级别')
            $('.type_name').html('')
        }else{
            var a = ''
            $.ajax({
                type: "GET",
                url: "<?= url('/admin/typeName')?>",
                data: "rank="+parent,
                dataType: 'json',
                success: function(data){
                if(data != ''){
                    a += '<th width="120"><i class="require-red">*</i>选择父级分类</th>'
                    a += '<td>'
                    a += "<select name='parent_id'>"
                    for(var i in data){
                        if(data[i]['parent_id'] == undefined){
                            a += "<option value="+data[i]['id']+">"+data[i]['type_name']+"</option>"
                        }else{
                            a += "<option value="+data[i]['parent_id']+"_"+data[i]['id']+">"+data[i]['type_name']+"</option>"
                        }
                    }
                    a += '</select>'
                    a += '</td>'
                    $('.type_name').html(a)
                }else{
                    alert('当前级别没有父级')
                    $('.type_name').html('')
                }  
                }
            });
        }
    })
});
</script>