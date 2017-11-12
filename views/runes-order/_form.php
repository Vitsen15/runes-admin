<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RunesOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="runes-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rune_id')->textInput() ?>

    <?= $form->field($model, 'runes_word_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rune_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
