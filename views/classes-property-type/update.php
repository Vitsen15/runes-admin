<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassesPropertyType */

$this->title = 'Обновить тип свойства:';
$this->params['breadcrumbs'][] = ['label' => 'Типы свойств для классов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->class->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="classes-property-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
