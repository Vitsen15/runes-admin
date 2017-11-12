<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RunesRuneProperties */

$this->title = 'Обновить свойство';
$this->params['breadcrumbs'][] = ['label' => 'Свойства рун', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="runes-rune-properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
