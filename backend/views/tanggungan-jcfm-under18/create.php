<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TanggunganJcfmUnder18 */

$this->title = 'Create Tanggungan Jcfm Under18';
$this->params['breadcrumbs'][] = ['label' => 'Tanggungan Jcfm Under18s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanggungan-jcfm-under18-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
