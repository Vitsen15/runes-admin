<?php

use app\models\RuneProperties;
use app\models\Runes;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RunesRunePropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Свойства рун';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-rune-properties-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Связать свойство с руной', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'rune_id',
                'filter' => Runes::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'rune.name'
            ],
            [
                'attribute' => 'property_id',
                'filter' => RuneProperties::find()->select(['property', 'id'])->indexBy('id')->column(),
                'value' => 'property.property'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
