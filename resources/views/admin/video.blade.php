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
                <form action="<?= url('/admin/video')?>" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>选择视频课程</th>
                            <td>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <select id="catid" class="type">
                                    <option>请选择</option>
                                    @foreach($one as $k=>$v)
                                    <option value="{{ $v['id'] }}" parent="{{ $v['type_rank'] }}">{{ $v['type_name'] }}</option>
                                    @endforeach
                                </select>
                                <span class='a'>

                                </span>
                                <span class='b'>

                                </span>
                                <span class='c'>

                                </span>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr class='abc'>
                            <th><i class="require-red">*</i>视频名称</th>
                              <td>
                                 <input class="common-text required" name="video_name[]" size="30" type="text">
                              </td>
                              <td>
                              <input type='file' name='video[]'>
                              </td>
                              <td>
                              <input type='button' class='plus' value='＋'>
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
        var a = ''
        $.ajax({
            type: "GET",
            url: "<?= url('/admin/courseName')?>",
            data: "id="+one,
            dataType: 'json',
            success: function(data){
                a += "<select class='two'>"
                a += "<option>请选择</option>"
                for(var i in data){
                    a += "<option value="+data[i]['id']+">"+data[i]['type_name']+"</option>"
                }
                a += '</select>'
                $('.a').empty();
                $('.b').empty();
                $('.c').empty();
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
            a += "<select class='three'>"
            a += "<option>请选择</option>"
            for(var i in data){
                a += "<option value="+data[i]['id']+">"+data[i]['type_name']+"</option>"
            }
            a += '</select>'
            $('.b').empty();
            $('.c').empty();
            $('.b').html(a)
        }
    })
})
$("body").on('change','.three',function(){
    var three = $(this).val();
    // alert(one+'_'+id)
    var a = ''
    $.ajax({
        type: "GET",
        url: "<?= url('/admin/videoCourse')?>",
        data: "three="+three,
        dataType: 'json',
        success: function(data){
            a += "<select name='course_id'>"
            a += "<option>请选择</option>"
            for(var i in data){
                a += "<option value="+data[i]['id']+">"+data[i]['course_name']+"</option>"
            }
            a += '</select>'
            $('.c').html(a)
        }
    })
})
$("body").on('click','.plus',function(){               
    // alert(123)
    var b = ''
     b += "<tr>"
     b += "<th><i class='require-red'>*</i>视频名称</th>"
     b += "<td>"
     b += "<input class='common-text required' name='video_name[]' size='30'>"
     b += "</td>"
     b += "<td>"
     b += "<input type='file' name='video[]'>"
     b += "</td>"
     b += "<td>"
     b += "<input type='button' class='plus' value='＋'>"
     b += "</td>"
     b += "</tr>";
    $(".abc").after(b);
})
</script>