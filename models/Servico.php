<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property int $idServico
 * @property int|null $cargaDescarga
 * @property int $idTerminal
 * @property int $idFuncionario
 * @property int $idCliente
 * @property int $idPrioridade
 * @property int $idAgenda
 *
 * @property Contentor[] $contentors
 * @property Terminal $idTerminal0
 * @property Funcionario $idFuncionario0
 * @property Users $idCliente0
 * @property Prioridade $idPrioridade0
 * @property Agenda $idAgenda0
 * @property Servicocontentor[] $servicocontentors
 * @property Contentor[] $idContentors
 * @property Servicorota[] $servicorotas
 * @property Rota[] $idRotas
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cargaDescarga', 'idTerminal', 'idFuncionario', 'idCliente', 'idPrioridade', 'idAgenda'], 'integer'],
            [['idTerminal', 'idFuncionario', 'idCliente', 'idPrioridade', 'idAgenda'], 'required'],
            [['idTerminal'], 'exist', 'skipOnError' => true, 'targetClass' => Terminal::className(), 'targetAttribute' => ['idTerminal' => 'idTerminal']],
            [['idFuncionario'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::className(), 'targetAttribute' => ['idFuncionario' => 'idFuncionario']],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idCliente' => 'id']],
            [['idPrioridade'], 'exist', 'skipOnError' => true, 'targetClass' => Prioridade::className(), 'targetAttribute' => ['idPrioridade' => 'idPrioridade']],
            [['idAgenda'], 'exist', 'skipOnError' => true, 'targetClass' => Agenda::className(), 'targetAttribute' => ['idAgenda' => 'idAgenda']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idServico' => 'Id Servico',
            'cargaDescarga' => 'Carga Descarga',
            'idTerminal' => 'Id Terminal',
            'idFuncionario' => 'Id Funcionario',
            'idCliente' => 'Id Cliente',
            'idPrioridade' => 'Id Prioridade',
            'idAgenda' => 'Id Agenda',
        ];
    }

    /**
     * Gets query for [[Contentors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContentors()
    {
        return $this->hasMany(Contentor::className(), ['idServico' => 'idServico']);
    }

    /**
     * Gets query for [[IdTerminal0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdTerminal0()
    {
        return $this->hasOne(Terminal::className(), ['idTerminal' => 'idTerminal']);
    }

    /**
     * Gets query for [[IdFuncionario0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFuncionario0()
    {
        return $this->hasOne(Funcionario::className(), ['idFuncionario' => 'idFuncionario']);
    }

    /**
     * Gets query for [[IdCliente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente0()
    {
        return $this->hasOne(Users::className(), ['id' => 'idCliente']);
    }

    /**
     * Gets query for [[IdPrioridade0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdPrioridade0()
    {
        return $this->hasOne(Prioridade::className(), ['idPrioridade' => 'idPrioridade']);
    }

    /**
     * Gets query for [[IdAgenda0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdAgenda0()
    {
        return $this->hasOne(Agenda::className(), ['idAgenda' => 'idAgenda']);
    }

    /**
     * Gets query for [[Servicocontentors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicocontentors()
    {
        return $this->hasMany(Servicocontentor::className(), ['idServico' => 'idServico']);
    }

    /**
     * Gets query for [[IdContentors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdContentors()
    {
        return $this->hasMany(Contentor::className(), ['idContentor' => 'idContentor'])->viaTable('servicocontentor', ['idServico' => 'idServico']);
    }

    /**
     * Gets query for [[Servicorotas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicorotas()
    {
        return $this->hasMany(Servicorota::className(), ['idServico' => 'idServico']);
    }

    /**
     * Gets query for [[IdRotas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdRotas()
    {
        return $this->hasMany(Rota::className(), ['idRota' => 'idRota'])->viaTable('servicorota', ['idServico' => 'idServico']);
    }
}
