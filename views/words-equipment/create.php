<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WordsEquipment */

$this->title = 'Create Words Equipment';
$this->params['breadcrumbs'][] = ['label' => 'Words Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="words-equipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
