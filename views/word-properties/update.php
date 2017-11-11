<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WordProperties */

$this->title = 'Обновить свойство: ' . $model->propertyType->name;
$this->params['breadcrumbs'][] = ['label' => 'Свойства', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->propertyType->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="word-properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
