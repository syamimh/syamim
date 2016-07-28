<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmAbove18Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jcfm-above18-search">

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

    <?php // echo $form->field($model, 'tarikh_lahir') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'no_kad_oku') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'poskod') ?>

    <?php // echo $form->field($model, 'daerah') ?>

    <?php // echo $form->field($model, 'negeri') ?>

    <?php // echo $form->field($model, 'lesen_kenderaan') ?>

    <?php // echo $form->field($model, 'no_fon_rumah') ?>

    <?php // echo $form->field($model, 'no_fon_bimbit') ?>

    <?php // echo $form->field($model, 'nama_pusat_latihan') ?>

    <?php // echo $form->field($model, 'sebab') ?>

    <?php // echo $form->field($model, 'hasrat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
