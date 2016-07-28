<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TanggunganJcfmUnder18Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanggungan-jcfm-under18-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_ic') ?>

    <?= $form->field($model, 'bangsa') ?>

    <?= $form->field($model, 'warganegara') ?>

    <?php // echo $form->field($model, 'jantina') ?>

    <?php // echo $form->field($model, 'no_kad_oku') ?>

    <?php // echo $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'id_jcfm_under_18') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
