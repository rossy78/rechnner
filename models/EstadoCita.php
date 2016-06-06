<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_cita".
 *
 * @property string $estado_cita
 *
 * @property Cita[] $citas
 */
class EstadoCita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_cita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado_cita'], 'required'],
            [['estado_cita'], 'string', 'max' => 50],
            [['estado_cita'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'estado_cita' => 'Estado Cita',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::className(), ['estado' => 'estado_cita']);
    }
}
