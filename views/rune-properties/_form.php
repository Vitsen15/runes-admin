<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RuneProperties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rune-properties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'property')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_weapon')->dropDownList([1 => 'Да', 0 => 'Нет']) ?>

    <?= $form->field($model, 'in_armour')->dropDownList([1 => 'Да', 0 => 'Нет']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
