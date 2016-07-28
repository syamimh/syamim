<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmAbove18 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jcfm Above18s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jcfm-above18-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'no_ic',
            'bangsa',
            'warganegara',
            'jantina',
            'tarikh_lahir',
            'tempat_lahir',
            'no_kad_oku',
            'alamat:ntext',
            'poskod',
            'daerah',
            'negeri',
            'lesen_kenderaan',
            'no_fon_rumah',
            'no_fon_bimbit',
            'nama_pusat_latihan',
            'sebab',
            'hasrat',
        ],
    ]) ?>

</div>
