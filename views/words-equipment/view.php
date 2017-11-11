<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\WordsEquipment */

$this->title = $model->runesWord->name;
$this->params['breadcrumbs'][] = ['label' => 'Снаряжение рунных слов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="words-equipment-view">

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
                'attribute' => 'runes_word_id',
                'value' =>  ArrayHelper::getValue($model, 'runesWord.name')
            ],
            [
                'attribute' => 'equipment_id',
                'value' => ArrayHelper::getValue($model, 'equipment.description')
            ],
        ],
    ]) ?>

</div>
