<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RunesOrder */

$this->title = 'Create Runes Order';
$this->params['breadcrumbs'][] = ['label' => 'Runes Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
