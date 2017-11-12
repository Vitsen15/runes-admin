<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClassesPropertyType */

$this->title = $model->class->name;
$this->params['breadcrumbs'][] = ['label' => 'Типы свойств для классов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-property-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'class_id',
                'value' => ArrayHelper::getValue($model, 'class.name')
            ],
            [
                'attribute' => 'property_type_id',
                'value' => ArrayHelper::getValue($model, 'propertyType.name')
            ],
        ]
    ]) ?>

</div>
