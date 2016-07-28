<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TanggunganJcfmUnder18 */

$this->params['breadcrumbs'][] = ['label' => 'Tanggungan Jcfm Under18s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tanggungan-jcfm-under18-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $model->id,
    ]) ?>

</div>
