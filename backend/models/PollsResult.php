<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "polls_result".
 *
 * @property integer $num
 * @property integer $id_poll
 * @property integer $id_answer
 *
 * @property Polls $idPoll
 * @property PollsAnswers $idAnswer
 */
class PollsResult extends \yii\db\ActiveRecord
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
            [['num', 'id_poll', 'id_answer'], 'integer'],
            [['id_poll', 'id_answer'], 'required'],
            [['id_poll', 'id_answer'], 'unique', 'targetAttribute' => ['id_poll', 'id_answer'], 'message' => 'The combination of № опроса and № ответа has already been taken.'],
            [['id_poll'], 'unique'],
            [['id_poll'], 'exist', 'skipOnError' => true, 'targetClass' => Polls::className(), 'targetAttribute' => ['id_poll' => 'id']],
            [['id_answer'], 'exist', 'skipOnError' => true, 'targetClass' => PollsAnswers::className(), 'targetAttribute' => ['id_answer' => 'id']],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPoll()
    {
        return $this->hasOne(Polls::className(), ['id' => 'id_poll']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnswer()
    {
        return $this->hasOne(PollsAnswers::className(), ['id' => 'id_answer']);
    }
}
