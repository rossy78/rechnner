<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property string $rif
 * @property string $razon_social
 * @property string $direccion
 * @property string $contacto
 * @property string $ciudad
 * @property string $email
 *
 * @property Ciudad $ciudad0
 * @property Llamada[] $llamadas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rif', 'razon_social', 'direccion', 'contacto', 'ciudad', 'email'], 'required', 'message' => 'El campo es obligatorio'],
            [['rif'], 'string', 'max' => 15],
            [['razon_social'], 'string', 'max' => 100],
            [['direccion'], 'string', 'max' => 200],
            [['contacto', 'ciudad'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 30],
            [['rif'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rif' => 'Rif',
            'razon_social' => 'Razon Social',
            'direccion' => 'Direccion',
            'contacto' => 'Contacto',
            'ciudad' => 'Ciudad',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCiudad0()
    {
        return $this->hasOne(Ciudad::className(), ['ciudad' => 'ciudad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamadas()
    {
        return $this->hasMany(Llamada::className(), ['cliente' => 'rif']);
    }
}
