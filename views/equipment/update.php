<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Equipment */

$this->title = 'Обновить снаряжение: ' . $model->description;
$this->params['breadcrumbs'][] = ['label' => 'Снаряжение', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->type_id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="equipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
