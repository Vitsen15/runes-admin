<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Runes */

$this->title = 'Create Runes';
$this->params['breadcrumbs'][] = ['label' => 'Runes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
