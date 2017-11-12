<?php

namespace app\models;

/**
 * This is the model class for table "runes".
 *
 * @property integer $id
 * @property string $name
 * @property string $img_url
 * @property integer $lvl
 *
 * @property RunesOrder[] $runesOrders
 * @property RunesRuneProperties[] $runesRuneProperties
 */
class Runes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'runes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img_url', 'lvl'], 'required'],
            [['lvl'], 'integer'],
            [['name'], 'string', 'max' => 5],
            [['img_url'], 'string', 'max' => 255],
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
            'img_url' => 'Адрес изображения',
            'lvl' => 'Уровень',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRunesOrders()
    {
        return $this->hasMany(RunesOrder::className(), ['rune_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRunesRuneProperties()
    {
        return $this->hasMany(RunesRuneProperties::className(), ['rune_id' => 'id']);
    }
}
