<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WordsEquipment */

$this->title = 'Обновить снаряжение ';
$this->params['breadcrumbs'][] = ['label' => 'Снаряжение рунных слов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->runesWord->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="words-equipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
