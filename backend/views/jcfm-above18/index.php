<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\JcfmAbove18Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jcfm Above18';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jcfm-above18-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jcfm Above18', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'no_ic',
            'bangsa',
            'warganegara',
            // 'jantina',
            // 'tarikh_lahir',
            // 'tempat_lahir',
            // 'no_kad_oku',
            // 'alamat:ntext',
            // 'poskod',
            // 'daerah',
            // 'negeri',
            // 'lesen_kenderaan',
            // 'no_fon_rumah',
            // 'no_fon_bimbit',
            // 'nama_pusat_latihan',
            // 'sebab',
            // 'hasrat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
