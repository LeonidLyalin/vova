<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[House]].
 *
 * @see House
 */
class HouseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return House[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return House|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
