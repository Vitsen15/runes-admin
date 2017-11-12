<?php

use app\models\Classes;
use app\models\PropertyType;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassesPropertyTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типы свойств для классов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-property-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Связать свойство', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'class_id',
                'filter' => Classes::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'class.name'
            ],
            [
                'attribute' => 'property_type_id',
                'filter' => PropertyType::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'propertyType.name'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
