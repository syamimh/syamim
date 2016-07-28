<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TanggunganJcfmUnder18Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tanggungan Jcfm Under18';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanggungan-jcfm-under18-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tanggungan Jcfm Under18', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'no_ic',
            'bangsa',
            'warganegara',
            // 'jantina',
            // 'no_kad_oku',
            // 'hubungan',
            // 'id_jcfm_under_18',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
