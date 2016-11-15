<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\House;

/**
 * HouseSearch represents the model behind the search form about `backend\models\House`.
 */
class HouseSearch extends House
{
    /**
     * @inheritdoc
     */
    
    public $adress;
    public function rules()
    {
        return [
            [['id' ], 'integer'],
                //['id', 'number'], 'integer'],
            [['adress','street'], 'safe'],
                //['street', 'letter'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
    public function search($params)
    {
        $query = House::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
                //,
            //'number' => $this->number,
        ]);
        
        $query->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'adress', $this->adress]);

      //  $query->andFilterWhere(['like', 'street', $this->street])
      //      ->andFilterWhere(['like', 'letter', $this->letter]);

        return $dataProvider;
    }
}
