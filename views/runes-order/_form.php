<?php

use app\models\Runes;
use app\models\Words;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RunesOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="runes-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rune_id')->dropDownList(Runes::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'runes_word_id')->dropDownList(Words::find()->select(['name', 'id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'rune_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
