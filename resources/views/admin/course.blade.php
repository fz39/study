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
                <form action="<?= url('/admin/course')?>" method="post">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>创建课程</th>
                              <td>
                                 <input class="common-text required" name="course_name" size="50" value="" type="text">
                                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                              </td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>选择课程分类</th>
                            <td>
                                <select name="one" id="catid" class="type">
                                    <option>请选择</option>
                                @foreach($one as $k=>$v)
                                    <option value="{{ $v['id'] }}" parent="{{ $v['type_rank'] }}">{{ $v['type_name'] }}</option>
                                @endforeach
                                </select>
                                <span class='a'>

                                </span>
                                <span class='b'>

                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>选择课程等级</th>
                            <td>
                                <select name="course_rank" id="catid" class="course_rank">
                                    <option>请选择</option>
                                    <option value="1" parent=''>基础（免费）</option>
									<option value="2" parent='0'>高级（收费）</option>
                                </select>
                            </td>
                        </tr>
                        <tr class='course_money'>

                        </tr>
                        <tr>
                        <th width="120"><i class="require-red">*</i>描述课程简介</th>
                        <td>
                            <textarea name='course_intro'></textarea>
                        </td>
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
    $('.type').change(function(){
        one = $(this).val();
        // var rank = parseFloat($(this).find("option:selected").attr('parent'))
        // var num = parseFloat(1);
        // var rank = eval(num+rank);
        // alert(rank);
        var a = ''
        $.ajax({
            type: "GET",
            url: "<?= url('/admin/courseName')?>",
            data: "id="+one,
            dataType: 'json',
            success: function(data){
                a += "<select name='two' class='two'>"
                a += "<option>请选择</option>"
                for(var i in data){
                    a += "<option value="+data[i]['id']+">"+data[i]['type_name']+"</option>"
                }
                a += '</select>'
                $('.a').empty();
                $('.b').empty();
                $('.a').html(a)
            }
        });
    })
})
$("body").on('change','.two',function(){
    var id = $(this).val();
    // alert(one+'_'+id)
    var a = ''
    $.ajax({
        type: "GET",
        url: "<?= url('/admin/courseName')?>",
        data: "id="+one+'_'+id,
        dataType: 'json',
        success: function(data){
            a += "<select name='three'>"
            a += "<option>请选择</option>"
            for(var i in data){
                a += "<option value="+data[i]['id']+">"+data[i]['type_name']+"</option>"
            }
            a += '</select>'
            $('.b').html(a)
        }
    })
})
$("body").on('change','.course_rank',function(){
    var id = $(this).val();
    var a = ''
    $('.course_money').empty();
    if(id == 2){
        a += "<th width='120'><i class='require-red'>*</i>高级课程价格</th>"
        a += "<td>"
        a += "<input class='common-text required' name='course_money' size='50'>"
        a += "</td>"
        $('.course_money').html(a)
    }
})
</script>