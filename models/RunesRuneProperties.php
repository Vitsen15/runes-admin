<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "runes_rune_properties".
 *
 * @property integer $id
 * @property integer $rune_id
 * @property integer $property_id
 *
 * @property RuneProperties $property
 * @property Runes $rune
 */
class RunesRuneProperties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'runes_rune_properties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rune_id', 'property_id'], 'required'],
            [['rune_id', 'property_id'], 'integer'],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => RuneProperties::className(), 'targetAttribute' => ['property_id' => 'id']],
            [['rune_id'], 'exist', 'skipOnError' => true, 'targetClass' => Runes::className(), 'targetAttribute' => ['rune_id' => 'id']],
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
            'property_id' => 'Property ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(RuneProperties::className(), ['id' => 'property_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRune()
    {
        return $this->hasOne(Runes::className(), ['id' => 'rune_id']);
    }
}
