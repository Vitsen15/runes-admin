<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Runes';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Менеджмент контента базы данных "runes"</h1>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center">Руны</h2>

                <div class="list-group">
                    <a href="<?= Url::to(['runes/index']); ?>" class="list-group-item list-group-item-action">
                        Руны
                    </a>
                    <a href="<?= Url::to(['runes-rune-properties/index']); ?>" class="list-group-item list-group-item-action">
                        Свойства рун
                    </a>
                    <a href="<?= Url::to(['rune-properties/index']); ?>" class="list-group-item list-group-item-action">
                        Типы свойств
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="text-center">Рунные слова</h2>

                <div class="list-group">
                    <a href="<?= Url::to(['words/index']); ?>" class="list-group-item list-group-item-action">
                        Слова
                    </a>
                    <a href="<?= Url::to(['runes-order/index']); ?>" class="list-group-item list-group-item-action">
                        Порядок рун в слве
                    </a>
                    <a href="<?= Url::to(['word-properties/index']); ?>" class="list-group-item list-group-item-action">
                        Свойства слов
                    </a>
                    <a href="<?= Url::to(['property-type/index']); ?>" class="list-group-item list-group-item-action">
                        Типы свойств
                    </a>
                    <a href="<?= Url::to(['words-equipment/index']); ?>" class="list-group-item list-group-item-action">
                        Снаряжение для слов
                    </a>
                    <a href="<?= Url::to(['equipment/index']); ?>" class="list-group-item list-group-item-action">
                        Снаряжение
                    </a>
                    <a href="<?= Url::to(['classes-property-type/index']); ?>" class="list-group-item list-group-item-action">
                        Уникальные типы свойств для классов
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
