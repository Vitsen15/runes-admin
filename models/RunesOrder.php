<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "runes_order".
 *
 * @property integer $id
 * @property integer $rune_id
 * @property string $runes_word_id
 * @property integer $rune_order
 *
 * @property Runes $rune
 * @property Words $runesWord
 */
class RunesOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'runes_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rune_id', 'runes_word_id', 'rune_order'], 'required'],
            [['rune_id', 'runes_word_id', 'rune_order'], 'integer'],
            [['rune_id'], 'exist', 'skipOnError' => true, 'targetClass' => Runes::className(), 'targetAttribute' => ['rune_id' => 'id']],
            [['runes_word_id'], 'exist', 'skipOnError' => true, 'targetClass' => Words::className(), 'targetAttribute' => ['runes_word_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rune_id' => 'Rune ID',
            'runes_word_id' => 'Runes Word ID',
            'rune_order' => 'Rune Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRune()
    {
        return $this->hasOne(Runes::className(), ['id' => 'rune_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRunesWord()
    {
        return $this->hasOne(Words::className(), ['id' => 'runes_word_id']);
    }
}
