<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Words;
use app\models\Equipment;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WordsEquipmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Снаряжение рунных слов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="words-equipment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить снаряжение к слову', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'runes_word_id',
                'filter' => Words::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'runesWord.name'
            ],
            [
                'attribute' => 'equipment_id',
                'filter' => Equipment::find()->select(['description', 'type_id'])->indexBy('type_id')->column(),
                'value' => 'equipment.description'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
