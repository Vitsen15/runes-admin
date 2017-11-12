<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RunesRunePropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Runes Rune Properties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-rune-properties-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Runes Rune Properties', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'rune_id',
            'property_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
