<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operador".
 *
 * @property string $persona
 *
 * @property Usuario $persona0
 */
class Operador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['persona'], 'required', 'message' => 'El campo es obligatorio'],
            [['persona'], 'string', 'max' => 20],
            [['persona'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'persona' => 'Persona',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersona0()
    {
        return $this->hasOne(Usuario::className(), ['persona' => 'persona']);
    }
}
