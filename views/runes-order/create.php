<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RunesOrder */

$this->title = 'Создать порядок рун';
$this->params['breadcrumbs'][] = ['label' => 'Порядок рун', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
