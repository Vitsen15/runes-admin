<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RunesRuneProperties */

$this->title = $model->rune->name;
$this->params['breadcrumbs'][] = ['label' => 'Свойства рун', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-rune-properties-view">

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
                'attribute' => 'rune_id',
                'value' => ArrayHelper::getValue($model, 'rune.name')
            ],
            [
                'attribute' => 'property_id',
                'value' => ArrayHelper::getValue($model, 'property.property')
            ]
        ],
    ]) ?>

</div>
