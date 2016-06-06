<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HistorialCita;

/**
 * HistorialCitaSearch represents the model behind the search form about `app\models\HistorialCita`.
 */
class HistorialCitaSearch extends HistorialCita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cita', 'motivo'], 'integer'],
            [['fecha', 'usuario'], 'safe'],
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
        $query = HistorialCita::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'cita' => $this->cita,
            'fecha' => $this->fecha,
            'motivo' => $this->motivo,
        ]);

        $query->andFilterWhere(['like', 'usuario', $this->usuario]);

        return $dataProvider;
    }
}
