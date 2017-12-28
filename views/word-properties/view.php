<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WordProperties */

$this->title = $model->propertyType->name;
$this->params['breadcrumbs'][] = ['label' => 'Свойства', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="word-properties-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'word_id',
                'value' => ArrayHelper::getValue($model, 'word.name')
            ],
            [
                'attribute' => 'property_type_id',
                'value' => ArrayHelper::getValue($model, 'propertyType.name')
            ],
            [
                'attribute' => 'property_effect_id',
                'value' => ArrayHelper::getValue($model, 'propertyEffect.effect_type')
            ],
            [
                'attribute' => 'property_value_type_id',
                'value' => ArrayHelper::getValue($model, 'propertyValueType.value_type')
            ],
            'property_duration',
            'property_min_value',
            'property_max_value',
        ],
    ]) ?>

</div>
