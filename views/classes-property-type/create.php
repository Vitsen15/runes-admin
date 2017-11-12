<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClassesPropertyType */

$this->title = 'Связать свойство';
$this->params['breadcrumbs'][] = ['label' => 'Типы свойств для классов  ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-property-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
