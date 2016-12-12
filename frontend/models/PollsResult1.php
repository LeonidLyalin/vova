<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "polls_result".
 *
 * @property integer $num
 * @property integer $id_poll
 * @property integer $id_answer
 * @property integer $id_user
 */
class PollsResult1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'polls_result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'id_poll', 'id_answer', 'id_user'], 'integer'],
            [['id_poll', 'id_answer', 'id_user'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num' => Yii::t('app', 'количество ответов'),
            'id_poll' => Yii::t('app', '№ опроса'),
            'id_answer' => Yii::t('app', '№ ответа'),
            'id_user' => Yii::t('app', 'Id User'),
        ];
    }

    /**
     * @inheritdoc
     * @return PollsResultQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PollsResultQuery(get_called_class());
    }
}
