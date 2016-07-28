<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JcfmAbove18 */

$this->title = 'Create Jcfm Above18';
$this->params['breadcrumbs'][] = ['label' => 'Jcfm Above18s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jcfm-above18-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
