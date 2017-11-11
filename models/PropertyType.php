<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property_type".
 *
 * @property integer $id
 * @property string $name
 *
 * @property WordProperties[] $wordProperties
 */
class PropertyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordProperties()
    {
        return $this->hasMany(WordProperties::className(), ['property_type_id' => 'id']);
    }
}
