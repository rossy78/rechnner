<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property string $estado
 * @property string $pais
 *
 * @property Ciudad[] $ciudads
 * @property Pais $pais0
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado', 'pais'], 'required', 'message' => 'El campo es obligatorio'],
            [['estado', 'pais'], 'string', 'max' => 50],
            [['estado', 'pais'], 'unique', 'targetAttribute' => ['estado', 'pais'], 'message' => 'The combination of Estado and Pais has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'estado' => 'Estado',
            'pais' => 'Pais',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCiudads()
    {
        return $this->hasMany(Ciudad::className(), ['estado' => 'estado', 'pais' => 'pais']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPais0()
    {
        return $this->hasOne(Pais::className(), ['pais' => 'pais']);
    }
}
