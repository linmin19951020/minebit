<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo Yii::t('common','helps');?></title>
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
        .slDetail_cont p{
            padding: 175px 0;
            text-align: center;
        }
        .currency{
            display: block;
            font-size: 80px;
            margin-bottom: 44px;
        }
        .help{
            font-size: 30px;
            display: block;
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
            background: url("/images/anvantage-分割装饰@2x.png")no-repeat;
            background-size: 100% 100%;
        }
        .collapse{
            margin: 46px 0  100px 0;
        }
        .colla-item{
            margin-bottom: 20px;
        }
        .colla-title{
            height: 56px;
            background: #f5f5f5;
            line-height: 56px;
            color: #696969;
            font-size: 20px;
            margin-bottom: 20px;
            cursor: pointer;
            padding-left: 25px;
            border-left: 6px solid #009dea;
        }
        .colla-content{
            font-size: 14px;
            line-height: 22px;
            color: #8e8e8e;
            display: none;
            padding: 28px;
        }
    </style>
</head>
<body>
<?php require(dirname(__FILE__).'/../header.php'); ?>
<div class="slDetail_cont">
        <p>
        <span class="currency"><?php echo Yii::t('common','faqs');?> </span>
            <span class="help"><?php echo Yii::t('common','help_content');?></span>
        </p>
</div>
<div class="type_area">
    <?php 
        if( $help ){
            foreach( $help as $k=>$v){
    ?>
    <p class="process"><?php echo Yii::t('common','help_faq_type'.$k);?></p>
    <p class="line"></p>
    <div class="collapse">
                <?php foreach( $v as $val ) {?>
                <div class="colla-item">
                <h2 class="colla-title"><?php echo $val['title_'.Yii::app()->language];?></h2>
                    <div class="colla-content"><?php echo $val['content_'.Yii::app()->language];?></div>
                </div>
                <?php
                    }?>
            </div>
        <?php

            }
        }
        ?>
</div>

<script>
   $('.colla-title').on('click',function () {
           if (!window.flag) {
               $(this).next().show();
               window.flag = true;
           }else{
               $(this).next().hide();
               window.flag = false;
           }
       })

</script>
<?php require(dirname(__FILE__).'/../footer.php'); ?>
</body>
</html>
