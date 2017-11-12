<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RuneProperties */

$this->title = 'Обновить свойство: ' . $model->property;
$this->params['breadcrumbs'][] = ['label' => 'Типы свойств', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->property, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="rune-properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
