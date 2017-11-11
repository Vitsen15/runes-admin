<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\Words;
use \app\models\PropertyType;
use \app\models\PropertyEffect;
use \app\models\PropertyValueType;


/* @var $this yii\web\View */
/* @var $model app\models\WordProperties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="word-properties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'word_id')->dropDownList(Words::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'property_type_id')->dropDownList(PropertyType::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'property_effect_id')->dropDownList(PropertyEffect::find()->select(['effect_type', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'property_value_type_id')->dropDownList(PropertyValueType::find()->select(['value_type', 'id'])->indexBy('id')->column())?>

    <?= $form->field($model, 'property_duration')->textInput() ?>

    <?= $form->field($model, 'property_min_value')->textInput() ?>

    <?= $form->field($model, 'property_max_value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
