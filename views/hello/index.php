<?php
use yii\helpers\HtmlPurifier;
?>
<h1><?php echo \yii\helpers\Html::encode($view_hello);?></h1>
<h1><?php echo HTMLPurifier::process($view_hello)?></h1>