<?php

use app\models\Classes;
use app\models\PropertyType;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassesPropertyType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-property-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class_id')->dropDownList(Classes::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'property_type_id')->dropDownList(PropertyType::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
