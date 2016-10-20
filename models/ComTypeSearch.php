<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ComType;

/**
 * ComTypeSearch represents the model behind the search form about `app\models\ComType`.
 */
class ComTypeSearch extends ComType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_type_id'], 'integer'],
            [['com_type_name'], 'safe'],
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
        $query = ComType::find();

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
            'com_type_id' => $this->com_type_id,
        ]);

        $query->andFilterWhere(['like', 'com_type_name', $this->com_type_name]);

        return $dataProvider;
    }
}
