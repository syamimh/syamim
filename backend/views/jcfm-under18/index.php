<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\JcfmUnder18Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jcfm Under18';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jcfm-under18-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Daftar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'no_ic',
            'bangsa',
            'warganegara',
            // 'Jantina',
            // 'tarikh_lahir',
            // 'tempat_lahir',
            // 'alamat:ntext',
            // 'poskod',
            // 'daerah',
            // 'negeri',
            // 'no_fon_rumah',
            // 'no_fon_bimbit',
            // 'pekerjaan',
            // 'jawatan',
            // 'sebab',
            // 'hasrat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
