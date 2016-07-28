<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JcfmUnder18 */

$this->title = 'Create Jcfm Under18';
$this->params['breadcrumbs'][] = ['label' => 'Jcfm Under18', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jcfm-under18-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelTanggungan' => $modelTanggungan,
    ]) ?> 

</div>
