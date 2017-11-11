<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "word_properties".
 *
 * @property integer $id
 * @property string $word_id
 * @property integer $property_type_id
 * @property integer $property_effect_id
 * @property integer $property_value_type_id
 * @property integer $property_duration
 * @property integer $property_min_value
 * @property integer $property_max_value
 *
 * @property PropertyEffect $propertyEffect
 * @property PropertyType $propertyType
 * @property PropertyValueType $propertyValueType
 * @property Words $word
 */
class WordProperties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'word_properties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['word_id', 'property_type_id'], 'required'],
            [['word_id', 'property_type_id', 'property_effect_id', 'property_value_type_id', 'property_duration', 'property_min_value', 'property_max_value'], 'integer'],
            [['property_effect_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyEffect::className(), 'targetAttribute' => ['property_effect_id' => 'id']],
            [['property_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyType::className(), 'targetAttribute' => ['property_type_id' => 'id']],
            [['property_value_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyValueType::className(), 'targetAttribute' => ['property_value_type_id' => 'id']],
            [['word_id'], 'exist', 'skipOnError' => true, 'targetClass' => Words::className(), 'targetAttribute' => ['word_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'word_id' => 'Слово',
            'property_type_id' => 'Тип',
            'property_effect_id' => 'Эффект',
            'property_value_type_id' => 'Тип значения',
            'property_duration' => 'Длительность',
            'property_min_value' => 'Минимальное значение',
            'property_max_value' => 'Максимальное значение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyEffect()
    {
        return $this->hasOne(PropertyEffect::className(), ['id' => 'property_effect_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyType()
    {
        return $this->hasOne(PropertyType::className(), ['id' => 'property_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyValueType()
    {
        return $this->hasOne(PropertyValueType::className(), ['id' => 'property_value_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWord()
    {
        return $this->hasOne(Words::className(), ['id' => 'word_id']);
    }
}
