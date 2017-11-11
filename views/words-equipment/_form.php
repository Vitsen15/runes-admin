<?php

use app\models\Equipment;
use app\models\Words;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WordsEquipment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="words-equipment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'runes_word_id')->dropDownList(Words::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'equipment_id')->dropDownList(Equipment::find()->select(['description', 'type_id'])->indexBy('type_id')->column()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
