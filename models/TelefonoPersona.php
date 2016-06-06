<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefono_persona".
 *
 * @property string $persona
 * @property string $telefono
 *
 * @property Persona $persona0
 */
class TelefonoPersona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telefono_persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['persona', 'telefono'], 'required', 'message' => 'El campo es obligatorio'],
            [['persona', 'telefono'], 'string', 'max' => 20],
            [['persona', 'telefono'], 'unique', 'targetAttribute' => ['persona', 'telefono'], 'message' => 'The combination of Persona and Telefono has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'persona' => 'Persona',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersona0()
    {
        return $this->hasOne(Persona::className(), ['cedula' => 'persona']);
    }
}
