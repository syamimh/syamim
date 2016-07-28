<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Negeri;
use backend\models\DaerahLookup;
use backend\models\TanggunganJcfmUnder18;
use backend\models\HubunganLookup;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmUnder18 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jcfm-under18-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['placeholder' => 'Nama Penuh']) ?>

    <?= $form->field($model, 'no_ic')->textInput(['placeholder' => '980615-07-5688']) ?>

    <?= $form->field($model, 'bangsa')->dropDownList([ 'Melayu' => 'Melayu', 'India' => 'India', 'Cina' => 'Cina'],
        ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'warganegara')->dropDownList([ 'Warganegara' => 'Warganegara', 'Bukan warganegara' => 'Bukan warganegara'], 
        ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'Jantina')->dropDownList([ 'Lelaki' => 'Lelaki', 'Perempuan' => 'Perempuan'], ['prompt' => 'Sila Pilih']) ?>

    <?= $form->field($model, 'tarikh_lahir')->widget(DatePicker::classname(),
        ['value' => date('d-M-Y'),
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'removeButton' => false,
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'format' => 'dd-M-yyyy',
                'todayHighlight' => true]]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['placeholder' => 'Tempat Lahir']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poskod')->textInput() ?>

    <?= $form->field($model, 'negeri')->dropDownList(
        ArrayHelper::map(Negeri::find()->all(),'id','senarai_negeri'),
        [
            'prompt'=>'Sila Pilih',
            'onchange'=>
                '$.post("index.php?r=jcfm-under18/lists&id='.'"+$(this).val(),
                    function(data){
                        $("select#daerahList").html(data);
                    })'
        ]) ?>

    <?= $form->field($model, 'daerah')->dropDownList(
        ArrayHelper::map(DaerahLookup::find()->where(
            ['id_negeri'=>$model->id])->asArray()->all(),'senarai_daerah', 'senarai_daerah'),
            ['prompt' => 'Sila Pilih', 'id'=>'daerahList']) ?>

    <?= $form->field($model, 'no_fon_rumah')->textInput(['placeholder'=>'03-56837409']) ?>

    <?= $form->field($model, 'no_fon_bimbit')->textInput(['placeholder' => '011-2345678']) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jawatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sebab[]')->checkboxList([
        'Mempunyai anak/jagaan yang kurang upaya' => 'Mempunyai anak/jagaan yang kurang upaya.',
        'Ingin menyokong perjuangan hak asasi OKU' => 'Ingin menyokong perjuangan hak asasi OKU.'
    ]); ?>

    <div class="form-group" id="tanggungan">

        <p><b>Butir-butir anak/jagaan/adik-beradik/saudara kurang upaya(sekiranya ada:)</b></p>
        
        <?= $form->field($modelTanggungan, 'nama[]')->textInput(['placeholder' => 'Nama Penuh']) ?>

        <?= $form->field($modelTanggungan, 'no_ic[]')->textInput(['placeholder' => '980615-07-5688']) ?>

        <?= $form->field($modelTanggungan, 'bangsa[]')->dropDownList([ 'Melayu' => 'Melayu', 'India' => 'India', 'Cina' => 'Cina'], ['prompt' => 'Sila Pilih']) ?>

        <?= $form->field($modelTanggungan, 'warganegara[]')->dropDownList([ 'Warganegara' => 'Warganegara', 'Bukan warganegara' => 'Bukan warganegara'], ['prompt' => 'Sila Pilih']) ?>

        <?= $form->field($modelTanggungan, 'jantina[]')->dropDownList([ 'Lelaki' => 'Lelaki', 'Perempuan' => 'Perempuan'], ['prompt' => 'Sila Pilih']) ?>

        <?= $form->field($modelTanggungan, 'no_kad_oku[]')->textInput(['placeholder' => 'GI2065363592819']) ?>

        <?= $form->field($modelTanggungan, 'hubungan[]')->dropDownList(
            ArrayHelper::map(HubunganLookup::find()->all(),'jenis_hubungan', 'jenis_hubungan'), 
                ['prompt' => 'Sila Pilih']) ?>

        <div class="form-group" id="tanggunganTambahan"></div>

        

    </div>

    <?= $form->field($model, 'hasrat[]')->checkboxList([
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

    <button class="btn btn-primary" id="tambahTanggungan">Tambah</button>

</div>
