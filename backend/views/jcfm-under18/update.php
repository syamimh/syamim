<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmUnder18 */

$this->title = 'Update Jcfm Under18: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Jcfm Under18', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jcfm-under18-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-update', [
        'model' => $model,
        'modelTanggungan' => $modelTanggungan,
    ]) ?>

</div>
