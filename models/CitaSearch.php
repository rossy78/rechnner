<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cita;

/**
 * CitaSearch represents the model behind the search form about `app\models\Cita`.
 */
class CitaSearch extends Cita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cita', 'llamada', 'resultados', 'servicios_adicionales'], 'integer'],
            [['fecha', 'estado', 'tipo_cita', 'asignado_a', 'tipo_servicio'], 'safe'],
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
        $query = Cita::find();

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
            'id_cita' => $this->id_cita,
            'llamada' => $this->llamada,
            'fecha' => $this->fecha,
            'resultados' => $this->resultados,
            'servicios_adicionales' => $this->servicios_adicionales,
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'tipo_cita', $this->tipo_cita])
            ->andFilterWhere(['like', 'asignado_a', $this->asignado_a])
            ->andFilterWhere(['like', 'tipo_servicio', $this->tipo_servicio]);

        return $dataProvider;
    }
}
