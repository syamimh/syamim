<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\HubunganLookup;

/* @var $this yii\web\View */
/* @var $model backend\models\TanggunganJcfmUnder18 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanggungan-jcfm-under18-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['placeholder' => 'Nama Penuh']) ?>

    <?= $form->field($model, 'no_ic')->textInput(['placeholder' => '980615-07-5688']) ?>

    <?= $form->field($model, 'bangsa')->dropDownList([ 'Melayu' => 'Melayu', 'India' => 'India', 'Cina' => 'Cina'], ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'warganegara')->dropDownList([ 'Warganegara' => 'Warganegara', 'Bukan warganegara' => 'Bukan warganegara'], ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'jantina')->dropDownList([ 'Lelaki' => 'Lelaki', 'Perempuan' => 'Perempuan'], ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'no_kad_oku')->textInput(['placeholder' => 'GI2065363592819']) ?>

    <?= $form->field($model, 'hubungan')->dropDownList(
        ArrayHelper::map(HubunganLookup::find()->all(),'jenis_hubungan', 'jenis_hubungan'), 
            ['prompt' => 'Sila Pilih']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
