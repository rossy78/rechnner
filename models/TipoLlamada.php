<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_llamada".
 *
 * @property string $tipo_llamada
 *
 * @property Llamada[] $llamadas
 */
class TipoLlamada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_llamada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_llamada'], 'required', 'message' => 'El campo es obligatorio'],
            [['tipo_llamada'], 'string', 'max' => 25],
            [['tipo_llamada'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tipo_llamada' => 'Tipo Llamada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamadas()
    {
        return $this->hasMany(Llamada::className(), ['tipo_llamada' => 'tipo_llamada']);
    }
}
