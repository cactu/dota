@extends('home.layouts.master')

@section('main')



@endsection


@section('js')
<script>
    /* 验证码倒计时 */
    var wait = 60;
    function time(e){
        if(wait == 0){
            e.attr('disabled',false);
            e.html('获取验证码');
            wait = 60;
        }else{
            e.attr("disabled",true);
            e.html(wait + 's后重发');
            wait--;
            setTimeout(function() {
                time(e)
            },1000)
        }
    }

    /* 点击获取验证码按钮 */
    $('#myModal').on('click','#get-code',function(){
        if($(this).hasClass('btn-default')){
            $(this).attr('disabled',true);
            time($(this));
        }
        return false;
    });


    /* 下拉框变化时,相应的改变input */
    $('.login-select').on('change',function(){
        var data = $(this).val();
        if(data == 2){
            var name = $('.login-name');
            name.empty();
            var input = '<div class="">';
            input+= '<input type="email" class="form-control" placeholder="请输入邮箱">';
            input+= '</div>';
            name.append(input);

            var pass = $('.login-pass');
            pass.empty();
            var password = '<div class="col-xs-7 col-xs-offset-4" style="padding-left:0;">';
            password+= '<input type="password" class="form-control" placeholder="请输入密码">';
            password+= '</div>';
            pass.append(password);
        }

        if(data == 1){
            var name1 = $('.login-name');
            name1.empty();
            var input1 = '<div class="input-group">';
            input1+= '<div class="input-group-addon">+86</div>';
            input1+= '<input type="text" class="form-control" placeholder="请输入手机号码">';
            input1+= '</div>';
            name1.append(input1);

            var pass1 = $('.login-pass');
            pass1.empty();
            var password1 = '<div class="col-xs-3 col-xs-offset-1" style="padding-right:0;border-right:none;">';
            password1+= '<button class="btn btn-default form-control" id="get-code" style="">获取验证码</button>';
            password1+= '</div>';
            password1+= '<div class="col-xs-7" style="padding-left:0;">';
            password1+= '<input type="text" class="form-control" placeholder="请输入验证码">';
            password1+= '</div>';
            pass1.append(password1);
        }
    });

</script>
@endsection