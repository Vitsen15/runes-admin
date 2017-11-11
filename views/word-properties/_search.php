<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WordPropertiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="word-properties-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'word_id') ?>

    <?= $form->field($model, 'property_type_id') ?>

    <?= $form->field($model, 'property_effect_id') ?>

    <?= $form->field($model, 'property_value_type_id') ?>

    <?php // echo $form->field($model, 'property_duration') ?>

    <?php // echo $form->field($model, 'property_min_value') ?>

    <?php // echo $form->field($model, 'property_max_value') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
