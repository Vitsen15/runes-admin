<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RuneProperties */

$this->title = 'Создать свойство';
$this->params['breadcrumbs'][] = ['label' => 'Типы свойств', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rune-properties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
