<?php

use app\models\Equipment;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EquipmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Снаряжение';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать снаряжение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type_id',
            [
                'attribute' => 'type_name',
                'filter' => Equipment::find()->select(['type_name'])->indexBy('type_name')->column(),
            ],
            [
                'attribute' => 'description',
                'filter' => Equipment::find()->select(['description'])->indexBy('description')->column(),
            ],
            [
                'attribute' => 'type_parent_id',
                'filter' => Equipment::find()->select(['description', 'type_id'])->indexBy('type_id')->column(),
                'value' => 'typeParent.description'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
