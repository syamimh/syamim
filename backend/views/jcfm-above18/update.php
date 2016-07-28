<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JcfmAbove18 */

$this->title = 'Update Jcfm Above18: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jcfm Above18s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jcfm-above18-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
