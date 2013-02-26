<?php

/**
 * This is the model class for table "cv2_propostas_recebidas".
 *
 * The followings are the available columns in table 'cv2_propostas_recebidas':
 * @property integer $id
 * @property string $nome
 * @property string $email
 * @property string $telefone
 * @property string $proposta
 * @property string $cidade
 * @property string $estado
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2PropostasRecebidas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2PropostasRecebidas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cv2_propostas_recebidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, email, proposta, id_veiculo', 'required'),
			array('id_veiculo', 'numerical', 'integerOnly'=>true),
			array('nome, email, cidade, estado', 'length', 'max'=>45),
			array('telefone', 'length', 'max'=>55),
			array('proposta', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, email, telefone, proposta, cidade, estado, id_veiculo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idVeiculo' => array(self::BELONGS_TO, 'Cv2VeiculosVeiculos', 'id_veiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'email' => 'Email',
			'telefone' => 'Telefone',
			'proposta' => 'Proposta',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'id_veiculo' => 'Id Veiculo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('proposta',$this->proposta,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('id_veiculo',$this->id_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}