<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Runes;
use app\models\Words;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RunesOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Порядок рун';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать порядок рун', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'runes_word_id',
                'filter' => Words::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'runesWord.name'
            ],
            'rune_order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
