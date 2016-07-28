<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Negeri;
use backend\models\DaerahLookup;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmAbove18 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jcfm-above18-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['placeholder' => 'Nama Pemohon']) ?>

    <?= $form->field($model, 'no_ic')->textInput(['placeholder' => '980615-07-5688']) ?>

    <?= $form->field($model, 'bangsa')->dropDownList([ 'Melayu' => 'Melayu', 'India' => 'India', 'Cina' => 'Cina', ], ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'warganegara')->dropDownList([ 'Warnganegara' => 'Warnganegara', 'Bukan warganegra' => 'Bukan warganegra', ], ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'jantina')->dropDownList([ 'Lelaki' => 'Lelaki', 'Perempuan' => 'Perempuan', ], ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'tarikh_lahir')->widget(DatePicker::classname(),
        ['value' => date('d-M-Y'),
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'removeButton' => false,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'format' => 'dd-M-yyyy',
                'todayHighlight' => true]]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['placeholder'=>'Tempat Lahir']) ?>

    <?= $form->field($model, 'no_kad_oku')->textInput(['placeholder' => 'GI2065363592819']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poskod')->textInput() ?>

    <?= $form->field($model, 'negeri')->dropDownList(
        ArrayHelper::map(Negeri::find()->all(),'id','senarai_negeri'),
        ['prompt'=>'Sila Pilih',
        'onchange'=>
            '$.post("index.php?r=jcfm-under18/lists&id='.'"+$(this).val(),
                function(data){$("select#daerahList").html(data);
            })'
        ]) ?>

    <?= $form->field($model, 'daerah')->dropDownList(
        ArrayHelper::map(DaerahLookup::find()->where(
            ['id_negeri'=>$model->id])->asArray()->all(),'daerah', 'senarai_daerah'),
            ['prompt' => 'Sila Pilih', 'id'=>'daerahList']) ?>

    <?= $form->field($model, 'lesen_kenderaan')->textInput(['placeholder' => '']) ?>

    <?= $form->field($model, 'no_fon_rumah')->textInput(['placeholder' => '03-56837409']) ?>

    <?= $form->field($model, 'no_fon_bimbit')->textInput(['placeholder' => '011-2345678']) ?>

    <?= $form->field($model, 'nama_pusat_latihan')->textInput(['placeholder' => 'Pusat Latihan']) ?>

    <?= $form->field($model, 'sebab')->checkboxList([
        'Mempunyai anak/jagaan yang kurang upaya' => 'Mempunyai anak/jagaan yang kurang upaya.',
        'Ingin menyokong perjuangan hak asasi OKU' => 'Ingin menyokong perjuangan hak asasi OKU.'
    ]); ?>

    <?= $form->field($model, 'hasrat')->checkboxList([
        'Diberikan pendidikan di sekolah' => 'Diberikan pendidikan di sekolah.',
        'Diberikan latihan voaksional' => 'Diberikan latihan voaksional.',
        'Diberikan pekerjaan/mata pencarian' => 'Diberikan pekerjaan/mata pencarian.',
        'Diberikan pendidikan sosial' => 'Diberikan pendidikan sosial.',
        'Diberikan latihan Kemahiran Hidup' => 'Diberikan latihan Kemahiran Hidup.'
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
