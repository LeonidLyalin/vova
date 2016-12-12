<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_country".
 *
 * @property integer $id
 * @property string $country_name
 *
 * @property TblPerson[] $tblPeople
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_name'], 'required'],
            [['country_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Unique country identifier'),
            'country_name' => Yii::t('app', 'Country name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasMany(Person::className(), ['country_id' => 'id']);
    }
}
