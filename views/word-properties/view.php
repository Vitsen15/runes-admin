<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WordProperties */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Word Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="word-properties-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'word_id',
            'property_type_id',
            'property_effect_id',
            'property_value_type_id',
            'property_duration',
            'property_min_value',
            'property_max_value',
        ],
    ]) ?>

</div>
