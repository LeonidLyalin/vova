<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property integer $id
 * @property string $street
 * @property integer $number
 * @property string $letter
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'street', 'number'], 'required'],
            [['number'], 'integer'],//id was removed
            [['street'], 'string'],
            [['letter'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           // 'id' => Yii::t('app', '№'),
            'street' => Yii::t('app', 'Street'),
            'number' => Yii::t('app', 'House'),
            'letter' => Yii::t('app', 'Letter'),
        ];
    }

    /**
     * @inheritdoc
     * @return HouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HouseQuery(get_called_class());
    }
}
