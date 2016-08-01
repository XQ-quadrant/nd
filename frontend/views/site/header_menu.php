<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */

?>

<header class="main-header">


    <nav class="navbar navbar-static-top " role="navigation">
        <div class="container">
        <!--<div class="navbar-header">

            <a href="<?/*=Url::home()*/?>" class="navbar-brand" >信号与信息处理实验室</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>-->

        <div class="collapse navbar-collapse " id="navbar-collapse" >
        <?php

            $menuItemsCenter = [
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/site/index']],
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/frontend/info']],
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/frontend/info']],
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/frontend/info']],
                //['label' => '研究领域', 'url' => ['/site/about']],
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/site/contact']],
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/useradmin/loader/create']],
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/help/index']],
                ['label' => '<i class="fa  fa-bar-chart-o"></i>机器人', 'url' => ['/site/contact']],
            ];
        //}

        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav panel quick-menu clearfix'],
            'encodeLabels' => false,
            'items' => $menuItemsCenter,
        ]);

        ?>
            </div>

    </nav>

</header>
