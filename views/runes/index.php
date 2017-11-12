<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RunesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Runes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Runes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'img_url:url',
            'lvl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
