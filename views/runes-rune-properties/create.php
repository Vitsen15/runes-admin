<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RunesRuneProperties */

$this->title = 'Create Runes Rune Properties';
$this->params['breadcrumbs'][] = ['label' => 'Runes Rune Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-rune-properties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
