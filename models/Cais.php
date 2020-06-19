<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cais".
 *
 * @property int $idCais
 * @property int|null $noNavios
 * @property int|null $noNaviosPartir
 * @property int|null $noNaviosChegar
 *
 * @property Navio[] $navios
 * @property Terminal[] $terminals
 */
class Cais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noNavios', 'noNaviosPartir', 'noNaviosChegar'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCais' => 'Id Cais',
            'noNavios' => 'No Navios',
            'noNaviosPartir' => 'No Navios Partir',
            'noNaviosChegar' => 'No Navios Chegar',
        ];
    }

    /**
     * Gets query for [[Navios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNavios()
    {
        return $this->hasMany(Navio::className(), ['idCais' => 'idCais']);
    }

    /**
     * Gets query for [[Terminals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTerminals()
    {
        return $this->hasMany(Terminal::className(), ['idCais' => 'idCais']);
    }
}
