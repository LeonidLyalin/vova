<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PollsResult;

/**
 * PollsResultSearch represents the model behind the search form about `frontend\models\PollsResult`.
 */
class PollsResultSearch extends PollsResult {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['num', 'id_poll', 'id_answer', 'id_user'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params) {
        $query = PollsResult::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('polls_answers');
        // grid filtering conditions
        $query->andFilterWhere([
                    'polls_result.num' => $this->num,
                    'polls_result.id_poll' => $this->id_poll,
                    'polls_result.id_answer' => $this->id_answer,
                    'polls_result.id_user' => $this->id_user,
                ]);
               

        return $dataProvider;
    }

}
