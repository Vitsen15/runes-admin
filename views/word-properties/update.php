<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WordProperties */

$this->title = 'Update Word Properties: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Word Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="word-properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
