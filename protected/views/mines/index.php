<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo Yii::t('common','mines');?></title>
    <style>
        .type_area{
            width: 1200px;
            margin: 0 auto;
            overflow: auto;
        }
        .slDetail_cont{
            background: #1c192e;
            color: #fff;
        }
        .currency{
            margin-top: 72px;
            font-size: 48px;
            line-height: 66px;
        }
        .text{
            line-height: 48px;
            font-size: 20px;
            color: #9c9c9c;
        }
        .left1{
            width: 752px;
            float: left;
            margin-bottom: 50px;
        }
        .surplus{
            line-height: 100px;
            font-size: 22px;
            color: #0092da;
            margin-top: 54px;
        }
        .content{
            position: relative;
            width: 100%;
            margin: 0 190px 18px 0;
            height: 60px;
        }
        .buyinput{
            height: 56px;
            border: 2px solid #fff;
            border-radius: 3px;
            width: 376px;
            background: #15385b;
            line-height: 60px;
            padding-left: 20px;
            color: #fff;
        }
        .trade{
            position: absolute;
            font-size: 22px;
            line-height: 60px;
            right: 50%;
        }
        .int_rig,.buy{
            text-align: center;
            line-height: 60px;
            position: absolute;
            margin-left: 16px;
            border-radius: 3px;
            font-size: 22px;
        }
        .int_rig{
            width: 158px;
            background: #15385b;
        }
        .buy{
            width: 160px;
            background: #15385b;
            right: 0;
            color: #fff;
        }
        .buy:hover{
            color: #fff;
        }
        .active{
            width:100%;
            height: 50px;
            background: #192540;
            position: relative;
        }
        .bar{
            display: inline-block;
            width: 100%;
            height: 10px;
            position: absolute;
            background:-webkit-linear-gradient(left,transparent,#0092da);/* Safari 5.1 - 6.0 */
            background:-o-linear-gradient(right,transparent,#0092da);/* Opera 11.1 - 12.0 */
            background:-moz-linear-gradient(right,transparent,#0092da);/* Firefox 3.6 - 15 */
            background:linear-gradient(to right,transparent,#0092da);/* 标准*/
        }
        .progress{
            display: inline-block;
            line-height: 40px;
            font-size: 20px;
            padding: 10px 0 0 20px;
        }
        .right1{
            float: right;
        }
        .right1 .row{
            width: 262px;
            height: 80px;
            background: url("images/top-右侧背景@2x.png") no-repeat;
            background-size: 100% 100%;
            margin-bottom: 10px;
        }
        .right1 .row span{
            display: block;
            padding-left: 40px;
        }
        .right1 .row span b{
            font-size: 32px;
        }
        .right1 .row span:nth-child(1){
            color: #0092da;
            font-size: 22px;
            line-height: 40px;
        }
        .right1 .row span:nth-child(2){
            font-size: 16px;
        }
        .process{
            margin-top: 60px;
            line-height: 102px;
            font-size: 26px;
            color: #009dea;
            clear: both;
        }
        .line{
            width: 530px;
            height: 2px;
            background: url("images/anvantage-分割装饰@2x.png")no-repeat;
            background-size: 100% 100%;
        }
        .introduction{
            display: block;
            font-size: 22px;
            color: #696969;
            line-height: 30px;
            margin: 43px 0 8px 0;
        }
        .productlist li{
            line-height: 38px;
            color: #9c9c9c;
            font-size: 12px;
        }
        .productlist li i{
            float: left;
            width: 6px;
            height: 6px;
            background: url("images/菱形@2x.png") no-repeat;
            background-size: 100% 100%;
            margin: 15px 10px 0 0;
        }
        .card{
            overflow: auto;
            clear: both;
            padding-top: 40px;
        }
        .card li{
            float: left;
            width: 380px;
            height: 280px;
            background: #232134;
            color: #fff;
            margin-right: 30px;
            position: relative;
        }
        .card li:last-child{
            margin-right: 0;
        }
        .cardleft1,.cardleft2,.cardleft3{
            position: absolute;
            width: 85px;
            height: 80px;
            top: 10px;
            left: 20px;
        }
        .cardleft1{
            background: url("images/卡片1左侧-icon@2x.png") no-repeat;
            background-size: 100% 100%;
        }
        .cardleft2{
            background: url("images/卡片2-左侧icon@2x.png") no-repeat;
            background-size: 100% 100%;
        }
        .cardleft3{
            background: url("images/卡片3-左侧icon@2x.png") no-repeat;
            background-size: 100% 100%;
        }
        .cardright{
            position: absolute;
            right: 20px;
            top: 0;
            width: 57px;
            height: 41px;
            background: url("images/卡片右侧@2x.png") no-repeat;
            background-size: 100% 100%;
        }
        .carline{
            position: absolute;
            top: 110px;
            z-index: 1;
            width: 200px;
            height: 16px;
            background:-webkit-linear-gradient(left,transparent,#0c73ac);/* Safari 5.1 - 6.0 */
            background:-o-linear-gradient(right,transparent,#0c73ac);/* Opera 11.1 - 12.0 */
            background:-moz-linear-gradient(right,transparent,#0c73ac);/* Firefox 3.6 - 15 */
            background:linear-gradient(to right,transparent,#0c73ac);/* 标准*/
        }
        .cardtext{
            line-height: 40px;
            font-size: 16px;
            position: absolute;
            z-index: 2;
            margin:90px 0 0 23px;
        }
        .cardcontent{
            position: absolute;
            top: 142px;
            font-size: 14px;
            line-height: 25px;
            margin: 13px 23px 0;
        }
        .introduce{
            line-height: 54px;
            margin-top: 65px;
            font-size: 32px;
            color: #009dea;
        }
        .referral{
            line-height: 40px;
            color: #696969;
            font-size: 22px;
            margin-bottom: 45px;
        }
        video{
            margin-bottom: 45px;
        }
        .arovane{
            width: 100%;
            height: 635px;
            margin-bottom: 45px;
        }
        .arovane img{
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
<?php require(dirname(__FILE__).'/../header.php'); ?>
<div class="slDetail_cont">
   <div class="type_area">
         <p class="currency">
                    <!--  <img src="images/bc_logo_@2x.png" style="vertical-align: inherit;">-->
                    <span>L3+ FUTURES,DELIVERY IN 15 DAYS</span>
                </p>
                <div class="left1">
                    <p class="text">New power contracts,lower energy consumption and more cost-effoctive</p>
                    <p class="surplus">SURPLUS 100.00M</p>
                    <p class="content">
                        <input type="text" class="buyinput" placeholder="2.50 USD/M" onkeyup="NumberCheck(this)">
                        <span class="trade">M=</span>
                        <span class="int_rig"><b class="btczong">0</b>USD</span>
                        <a href="#" class="buy">STOCK</a>
                    </p>
                    <p class="active">
                        <span class="bar"></span>
                        <span class="progress">SELL 45%</span>
                    </p>
                </div>
                <ul class="right1">
                    <li class="row">
                        <span>PROWER</span>
                        <span><b>2</b>&nbsp;&nbsp;w / MHS</span>
                    </li>
                    <li class="row">
                        <span>MANAGEMENT</span>
                        <span><b>10%</b>&nbsp;&nbsp;Profit</span>
                    </li>
                    <li class="row">
                        <span>ELECTIRCITY</span>
                        <span><b>0.0025</b>&nbsp;&nbsp;USD / Day</span>
                    </li>
                    <li class="row">
                        <span>DELIVERY TIME</span>
                        <span><b>15</b>&nbsp;&nbsp;Day</span>
                    </li>
                </ul>
    </div>
</div>
        <div class="cont">
          <div class="type_area">
                <p class="process"><?php echo Yii::t('mines','advantage');?></p>
                <p class="line"></p>
                <ul class="card">
                    <li>
                        <i class="cardleft1"></i>
                        <i class="cardright"></i>
                        <i class="carline"></i>
                        <p class="cardtext"><?php echo Yii::t('mines','mines_select');?></p>
                        <p class="cardcontent"><?php echo Yii::t('mines','mines_select_text');?></p>
                    </li>
                    <li>
                        <i class="cardleft2"></i>
                        <i class="cardright"></i>
                        <i class="carline"></i>
                        <p class="cardtext"><?php echo Yii::t('mines','mines_manage');?></p>
                        <p class="cardcontent"><?php echo Yii::t('mines','mines_manage_text');?></p>
                    </li>
                    <li>
                        <i class="cardleft3"></i>
                        <i class="cardright"></i>
                        <i class="carline"></i>
                        <p class="cardtext"><?php echo Yii::t('mines','mines_risk_control');?></p>
                        <p class="cardcontent"><?php echo Yii::t('mines','mines_risk_control_text');?></p>
                    </li>
                </ul>

        <p class="introduce"><?php echo Yii::t('mines','mines_introduce');?></p>
        <p class="referral"><?php echo Yii::t('mines','mines_introduce_text1');?></p>
        <video src="/video/movie.mp4" width="100%" height="635px" controls="controls"></video>

        <p class="referral"><?php echo Yii::t('mines','mines_introduce_text2');?></p>

        <p class="referral"><?php echo Yii::t('mines','mines_introduce_text3');?></p>

        <div class="arovane"><img src="/images/arovane.png"></div>
        <p class="referral">
        <?php echo Yii::t('mines','mines_introduce_text4');?>
        </p>
        <p class="referral">
        <?php echo Yii::t('mines','mines_introduce_text5');?>
        </p>
        <p class="referral" style="margin-bottom: 360px;"><?php echo Yii::t('mines','mines_introduce_text6');?></p>
      </div>
   </div>

<?php require(dirname(__FILE__).'/../footer.php'); ?>
<script>
    var element = layui.element;


</script>
</body>
</html>

