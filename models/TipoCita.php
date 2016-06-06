<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_cita".
 *
 * @property string $tipo_cita
 *
 * @property Cita[] $citas
 */
class TipoCita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_cita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_cita'], 'required', 'message' => 'El campo es obligatorio'],
            [['tipo_cita'], 'string', 'max' => 25],
            [['tipo_cita'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tipo_cita' => 'Tipo Cita',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::className(), ['tipo_cita' => 'tipo_cita']);
    }
}
