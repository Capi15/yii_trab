<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cpostal".
 *
 * @property string $cPostal
 * @property string|null $localidade
 * @property int $idUsers
 *
 * @property Users $idUsers0
 */
class CPostal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cpostal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cPostal', 'idUsers'], 'required'],
            [['idUsers'], 'integer'],
            [['cPostal'], 'string', 'max' => 20],
            [['localidade'], 'string', 'max' => 50],
            [['cPostal'], 'unique'],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cPostal' => 'C Postal',
            'localidade' => 'Localidade',
            'idUsers' => 'Id Users',
        ];
    }

    /**
     * Gets query for [[IdUsers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsers0()
    {
        return $this->hasOne(Users::className(), ['id' => 'idUsers']);
    }
}
