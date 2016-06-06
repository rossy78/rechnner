<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_servicios".
 *
 * @property string $tipo_servicio
 *
 * @property Cita[] $citas
 */
class TipoServicios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_servicios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_servicio'], 'required', 'message' => 'El campo es obligatorio'],
            [['tipo_servicio'], 'string', 'max' => 25],
            [['tipo_servicio'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tipo_servicio' => 'Tipo Servicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::className(), ['tipo_servicio' => 'tipo_servicio']);
    }
}
