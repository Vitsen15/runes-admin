<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \app\models\Words;
use \app\models\PropertyType;
use \app\models\PropertyEffect;
use \app\models\PropertyValueType;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WordPropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Свойства';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="word-properties-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать свойство', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'word_id',
                'value' => 'word.name'
            ],
            [
                'attribute' => 'property_type_id',
                'filter' => PropertyType::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'propertyType.name'
            ],
            [
                'attribute' => 'property_effect_id',
                'filter' => PropertyEffect::find()->select(['effect_type', 'id'])->indexBy('id')->column(),
                'value' => 'propertyEffect.effect_type'
            ],
            [
                'attribute' => 'property_value_type_id',
                'filter' => PropertyValueType::find()->select(['value_type', 'id'])->indexBy('id')->column(),
                'value' => 'propertyValueType.value_type'
            ],
            'property_duration',
            'property_min_value',
            'property_max_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
