<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_solicitud".
 *
 * @property string $tipo_solicitud
 *
 * @property Llamada[] $llamadas
 */
class TipoSolicitud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_solicitud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_solicitud'], 'required', 'message' => 'El campo es obligatorio'],
            [['tipo_solicitud'], 'string', 'max' => 25],
            [['tipo_solicitud'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tipo_solicitud' => 'Tipo Solicitud',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamadas()
    {
        return $this->hasMany(Llamada::className(), ['tipo_solicitud' => 'tipo_solicitud']);
    }
}
