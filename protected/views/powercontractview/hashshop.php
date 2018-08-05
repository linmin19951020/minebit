<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo Yii::t('common','power_shop');?></title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/dist/css/layui.css">
    <style>
        .type_area{
            width: 1200px;
            margin: 0 auto;
            overflow: auto;
        }
        .millshop{
            height: 520px;
            background: url("/images/top-bg@2x.png") no-repeat;
            background-size: 100% 100%;
            color: #fff;
        }
        .shoptext1{
            margin-top: 130px;
            line-height: 114px;
            font-size: 80px;
        }
        .shoptext2{
            line-height: 62px;
            font-size: 30px;
        }
        .shop{
            overflow: auto;
            margin: -140px auto 120px;
            color: #fff;
        }
        .mill{
            float: left;
            width: 380px;
            background: url("/images/背景bj@2x.png") no-repeat;
            background-size: 100% 100%;
            margin:0 30px 30px 0;
        }
        .mar_rig{
            margin-right: 0;
        }
        .one{
            height: 90px;
            line-height: 90px;
            padding-left: 20px;
            position: relative;
        }
        .one img{
            width: 37px;
            height: 37px;
            background-size: 100% 100%;
            position: absolute;
            top: 23px;
        }
        .one span{
            line-height: 38px;
            font-size: 22px;
            display: inline-block;
            margin-left: 57px;
        }
        .two{
            height: 260px;
        }
        .two img{
            display: block;
            width: 260px;
            height: 260px;
            margin: 0 auto;
            background-size: 100% 100%;
        }
        .three{
            height: 44px;
            padding: 0 20px 0 30px;
        }
        .three i{
            float: left;
            width: 60px;
            height: 100%;
            background: url("/images/卡片右侧@2x.png") no-repeat;
            background-size: 100% 100%;
        }
        .three span{
            float: right;
            font-size: 18px;
            color: #0092da;
            margin-top: 22px;
        }
        div.layui-progress{
            margin: 6px 20px 12px;;
            height: 8px;
            background-color: #252c42;
        }
        div.layui-progress-bar{
            height: 8px;
            background-color: #0092da;
        }
        .five{
            line-height: 80px;
            font-size: 26px;
            overflow: auto;
            padding: 0 20px;
        }
        .buy {
            float: right;
            margin-top: 20px;
            width: 100px;
            height: 40px;
            line-height: 40px;
            font-size: 16px;
            background: #42d06c;
            border-radius: 4px;
            color: #fff;
            border: none;
            cursor: pointer;
            text-align:center;
        }
        .nobuy{
            background: #acb0bb;
        }
    </style>
</head>
<body>
<?php require(dirname(__FILE__).'/../header.php'); ?>
<div class="millshop">
    <div class="type_area">
        <p class="shoptext1"><?php echo Yii::t('common','power_shop');?></p>
        <p class="shoptext2"><?php echo Yii::t('common','shop_income_sm');?></p>
    </div>

</div>
<ul class="shop type_area">

</ul>

<script>
let element = layui.element;
   function hashshop() {
       let size = 20;
       $.ajax({
           type: 'POST',
           url: '/powercontract/getlist',
           data:{size:size},
           dataType: 'json',
           success: function(data){
                //console.log(data);
               if(data.ret =='1') {  // 成功
                   if(data.data){
                       let html = data.data.list.map((item, index) => {
                           //console.log(item);
                           //console.log(item.deal_total,item.total);
                          let a = `<li class="mill ${(index+1)%3?"":'mar_rig'}" id=${item.id}>
                                  <p class="one">
                                      <img src=${item.coin_img_url}>
                                      <span>${item.coin_name}</span>
                                  </p>
                                  <p class="two">
                                      <img src=${item.img_url}>
                                  </p>
                                  <p class="three">
                                      <i></i>
                                      <span><b>${item.total}</b>${item.unit_name}</span>
                                  </p>
                                  <div class="layui-progress" lay-filter="demo">
                                    <div class="layui-progress-bar"  lay-percent=${(item.deal_total/item.total)*100+'%'}></div>
                                  </div>
                                  <p class="five">
                                     <span>$ <b>${item.price}</b> USD</span>
                                     <button class="buy ${item.deal_total==item.total?"nobuy ":""}"><?php echo Yii::t('common','buy');?></button>
                                   </p>
                                   </li>`
                               $('.shop').append(a);
                               element.progress('demo', (item.deal_total/item.total)*100+'%');
                               element.render('progress','demo');
                       });
                   }
               }else{
                   layer.msg(data.msg);
               }
           },
           error: function (data) {
               alert('fail！')
           }
       })
   }
   hashshop();

    // 算力详情
   $('.shop').on('click','.mill', function (e) {
       let id = $(this).attr('id');
       window.location.href="/hashdetail?id="+id;
   });
</script>
<?php require(dirname(__FILE__).'/../footer.php'); ?>
</body>
</html>
