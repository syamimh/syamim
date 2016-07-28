<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use backend\models\Negeri;
use backend\models\DaerahLookup;
use backend\models\TanggunganJcfmUnder18;
use backend\models\HubunganLookup;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmUnder18 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jcfm-under18-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_ic') ?>

    <?= $form->field($model, 'alamat')->textarea(['rows'=>5]) ?>

    <?= $form->field($model, 'poskod') ?>

    <?= $form->field($model, 'negeri')?>

    <?= $form->field($model, 'daerah') ?>

    <?= $form->field($model, 'no_fon_rumah') ?>

    <?= $form->field($model, 'no_fon_bimbit') ?>

    <?= $form->field($model, 'pekerjaan') ?>

    <?= $form->field($model, 'jawatan') ?>

    <div class="form-group" id="tanggungan">

        <?= GridView::widget([
            'dataProvider' => $modelTanggungan,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                
                'nama',
                'no_ic',
                'bangsa',
                'warganegara',
                'jantina',
                'no_kad_oku',
                'hubungan',

                [
                    'header' => 'Action',
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update}',
                        'buttons' => [
                            'update' => function ($url,$modelTanggungan) {
                                return Html::a('Edit',$url,['value'=>Url::to(['/tanggungan-jcfm-under18/update','id'=>$modelTanggungan->id]),'class'=>'btn btn-success modalUpdateTanggungan']);
                            }
                        ],
                        'urlCreator' => function($action,$modelTanggungan,$key,$index){
                            if($action === 'update'){
                                $url = FALSE;
                                return $url;
                            }
                        }
                ],
            ],
        ]); ?>
        
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
