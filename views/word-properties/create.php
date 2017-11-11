<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WordProperties */

$this->title = 'Create Word Properties';
$this->params['breadcrumbs'][] = ['label' => 'Word Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="word-properties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
