<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RunePropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типы свойств';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rune-properties-index">

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
            'property',
            [
                'attribute' => 'in_weapon',
                'filter' => [1 => 'Да', 0 => 'Нет'],
                'value' => function ($model)
                {
                    return $model->in_weapon ? 'Да' : 'Нет';
                }
            ],
            [
                'attribute' => 'in_armour',
                'filter' => [1 => 'Да', 0 => 'Нет'],
                'value' => function ($model)
                {
                    return $model->in_armour ? 'Да' : 'Нет';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
