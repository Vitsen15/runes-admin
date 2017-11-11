<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property_value_type".
 *
 * @property integer $id
 * @property string $value_type
 *
 * @property WordProperties[] $wordProperties
 */
class PropertyValueType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property_value_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value_type'], 'required'],
            [['value_type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value_type' => 'Value Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordProperties()
    {
        return $this->hasMany(WordProperties::className(), ['property_value_type_id' => 'id']);
    }
}
