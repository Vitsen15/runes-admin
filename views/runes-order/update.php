<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RunesOrder */

$this->title = 'Обновить порядок: ' . $model->runesWord->name;
$this->params['breadcrumbs'][] = ['label' => 'Порядок рун', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->runesWord->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="runes-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
