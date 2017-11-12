<?php

use app\models\RuneProperties;
use app\models\Runes;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RunesRuneProperties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="runes-rune-properties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rune_id')->dropDownList(Runes::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'property_id')->dropDownList(RuneProperties::find()->select(['property', 'id'])->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
