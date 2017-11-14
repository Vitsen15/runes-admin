<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Главная',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Руны', 'items' => [
                ['label' => 'Руны', 'url' => ['/runes/index']],
                ['label' => 'Свойства рун', 'url' => ['/runes-rune-properties/index']],
                ['label' => 'Типы свойств', 'url' => ['/rune-properties/index']]
            ]],
            ['label' => 'Рунные слова', 'items' => [
                ['label' => 'Рунные слова', 'url' => ['/words/index']],
                ['label' => 'Порядок рун в слове', 'url' => ['/runes-order/index']],
                ['label' => 'Свойства слов', 'url' => ['/word-properties/index']],
                ['label' => 'Типы свойствв', 'url' => ['/property-type/index']],
                ['label' => 'Снаряжение для слов', 'url' => ['/words-equipment/index']],
                ['label' => 'Снаряжение', 'url' => ['/equipment/index']],
                ['label' => 'Уникальные типы свойств для классов', 'url' => ['/classes-property-type/index']]
            ]],
            ['label' => 'About', 'url' => ['/site/about']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Runes corp. <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
