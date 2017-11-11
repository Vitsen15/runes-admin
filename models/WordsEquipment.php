<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "words_equipment".
 *
 * @property integer $id
 * @property string $runes_word_id
 * @property integer $equipment_id
 *
 * @property Equipment $equipment
 * @property Words $runesWord
 */
class WordsEquipment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'words_equipment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['runes_word_id', 'equipment_id'], 'required'],
            [['runes_word_id', 'equipment_id'], 'integer'],
            [['equipment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Equipment::className(), 'targetAttribute' => ['equipment_id' => 'type_id']],
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
            'runes_word_id' => 'Слово',
            'equipment_id' => 'Инвентарь',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipment()
    {
        return $this->hasOne(Equipment::className(), ['type_id' => 'equipment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRunesWord()
    {
        return $this->hasOne(Words::className(), ['id' => 'runes_word_id']);
    }
}
