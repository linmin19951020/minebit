<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="/css/reset.css">
    <style>
        html,body{
            width: 100%;
            height: 100%;
            background: #12101d;
        }
        .wrap{
            width: 380px;
            height: 320px;
            background: #fff;
            overflow: auto;
            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            border-radius: 5px;
        }
        .title{
            background: #34495e;
            color: #fff;
            height: 70px;
            line-height: 70px;
            text-align: center;
            font-size: 20px;
        }
        .reg-center{
            width: 70%;
            height: 40px;
            margin: 20px auto;
        }
        .reg-center span{
            float: left;
            width: 50px;
            height: 40px;
            line-height: 40px;
        }
        .reg-center input{
            height: 38px;
            padding-left: 5px;
            width: 183px;
            border: 1px solid #ccc;
        }
        .forget{
            float: right;
            margin-right: 20%;
            margin-top: -10px;
            color: #3498db;
        }
        .footer{
            clear: both;
            margin-top: 55px;
        }
        .login {
            width: 180px;
            height: 40px;
            border: none;
            margin-left: 30%;
            font-size: 16px;
            cursor: pointer;
            color: #fff;
            background: #3498db;
        }
    </style>
</head>
<body>
<div class="wrap">
    <p class="title">用户登录</p>
    <div class="reg-center">
       <span> 账&nbsp;&nbsp;号:</span>
        <input type="text" class="name" placeholder="请输入账号">
    </div>
    <div class="reg-center">
        <span> 密&nbsp;&nbsp;码:</span>
        <input type="password" class="password" placeholder="请输入密码">
    </div>
    <a href="#" class="forget">忘记密码？</a>
    <div class="footer">
        <button class="login">登录</button>
    </div>
</div>

<script src="/js/jquery-3.3.1.min.js"></script>
<script>
    $('.login').on('click',function () {
        let name = $('.name').val();
        let password = $('.password').val();
        $.ajax({
            type: 'POST',
            url: '/admin/login/dologin',
            data: {name:name,password:password},
            dataType: 'json',
            success: function(data){
                if(data.ret == '1'){
                    window.location.href="/admin/site/index";
                }else{
                    alert(data.msg);
                }
            },
            error: function(data){
                alert('接口发送失败！')
            }
        })
    });
</script>
</body>
</html>
