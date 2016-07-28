<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmUnder18 */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Jcfm Under18', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jcfm-under18-view">

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
            'Jantina',
            'tarikh_lahir',
            'tempat_lahir',
            'alamat:ntext',
            'poskod',
            'daerah',
            'negeri',
            'no_fon_rumah',
            'no_fon_bimbit',
            'pekerjaan',
            'jawatan',
            'sebab',
            'hasrat',
        ],
    ]) ?>

</div>
