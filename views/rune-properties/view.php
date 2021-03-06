<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RuneProperties */

$this->title = $model->property;
$this->params['breadcrumbs'][] = ['label' => 'Типы свойств', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rune-properties-view">

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
            'property',
            [
                'attribute' => 'in_weapon',
                'value' => $model->in_weapon ? 'Да' : 'Нет'
            ],
            [
                'attribute' => 'in_armour',
                'value' => $model->in_armour ? 'Да' : 'Нет'
            ],
        ],
    ]) ?>

</div>
