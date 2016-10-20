<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Com;

/**
 * ComSearch represents the model behind the search form about `app\models\Com`.
 */
class ComSearch extends Com
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_id', 'com_type_id', 'depart_id', 'com_status_id', 'buy_type_id', 'budget_id'], 'integer'],
            [['brand', 'detail', 'accept_date', 'asset_code', 'machine_code', 'cpu_type', 'cpu_speed', 'ram', 'display', 'cd_type', 'harddisk', 'com_date', 'insurance_date', 'create_date', 'update_date', 'staff', 'note', 'discharge_date'], 'safe'],
            [['price'], 'number'],
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
        $query = Com::find();

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
            'com_id' => $this->com_id,
            'com_type_id' => $this->com_type_id,
            'accept_date' => $this->accept_date,
            'price' => $this->price,
            'depart_id' => $this->depart_id,
            'com_status_id' => $this->com_status_id,
            'com_date' => $this->com_date,
            'insurance_date' => $this->insurance_date,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'discharge_date' => $this->discharge_date,
            'buy_type_id' => $this->buy_type_id,
            'budget_id' => $this->budget_id,
        ]);

        $query->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'asset_code', $this->asset_code])
            ->andFilterWhere(['like', 'machine_code', $this->machine_code])
            ->andFilterWhere(['like', 'cpu_type', $this->cpu_type])
            ->andFilterWhere(['like', 'cpu_speed', $this->cpu_speed])
            ->andFilterWhere(['like', 'ram', $this->ram])
            ->andFilterWhere(['like', 'display', $this->display])
            ->andFilterWhere(['like', 'cd_type', $this->cd_type])
            ->andFilterWhere(['like', 'harddisk', $this->harddisk])
            ->andFilterWhere(['like', 'staff', $this->staff])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
