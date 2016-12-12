<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "polls_result".
 *
 * @property integer $num
 * @property integer $id_poll
 * @property integer $id_answer
 * @property integer $id_user
 * @property integer $id
 *
 * @property Polls $idPoll
 * @property PollsAnswers $idAnswer
 * @property User $idUser
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
            [['num', 'id_poll', 'id_answer', 'id_user'], 'integer'],
            [['id_poll', 'id_answer', 'id_user'], 'required'],
            [['id_poll'], 'exist', 'skipOnError' => true, 'targetClass' => Polls::className(), 'targetAttribute' => ['id_poll' => 'id']],
            [['id_answer'], 'exist', 'skipOnError' => true, 'targetClass' => PollsAnswers::className(), 'targetAttribute' => ['id_answer' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
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
            'id' => Yii::t('app', 'ID'),
            'answer' => Yii::t('app', 'answer'),
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
    
     public function getAnswer()
    {
        return $this->idAnswer->answer;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
