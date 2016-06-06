<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $codigo_empresa
 * @property string $razon_social
 * @property string $rif
 * @property string $direccion
 * @property string $ciudad
 * @property string $email
 *
 * @property Ciudad $ciudad0
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['razon_social', 'rif', 'direccion', 'ciudad', 'email'], 'required', 'message' => 'El campo es obligatorio'],
            [['razon_social'], 'string', 'max' => 100],
            [['rif'], 'string', 'max' => 15],
            [['direccion'], 'string', 'max' => 200],
            [['ciudad', 'email'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo_empresa' => 'Codigo Empresa',
            'razon_social' => 'Razon Social',
            'rif' => 'Rif',
            'direccion' => 'Direccion',
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
}
