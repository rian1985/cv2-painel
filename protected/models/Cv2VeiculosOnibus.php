<?php

/**
 * This is the model class for table "cv2_veiculos_onibus".
 *
 * The followings are the available columns in table 'cv2_veiculos_onibus':
 * @property integer $id
 * @property string $modelo
 * @property string $quilometros
 * @property string $combustivel
 * @property integer $quantidade_pessoas
 * @property string $direcao
 * @property string $transmissao
 * @property string $carroceria
 * @property integer $quantidade_andares
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2VeiculosOnibus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosOnibus the static model class
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
		return 'cv2_veiculos_onibus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_veiculo', 'required'),
			array('quantidade_pessoas, quantidade_andares, id_veiculo', 'numerical', 'integerOnly'=>true),
			array('modelo, transmissao, carroceria', 'length', 'max'=>30),
			array('quilometros, direcao', 'length', 'max'=>15),
			array('combustivel', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, modelo, quilometros, combustivel, quantidade_pessoas, direcao, transmissao, carroceria, quantidade_andares, id_veiculo', 'safe', 'on'=>'search'),
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
			'modelo' => 'Modelo',
			'quilometros' => '
Quilômetros',
			'combustivel' => '
Combustível',
			'quantidade_pessoas' => 'Quantidade de pessoas',
			'direcao' => 'Direcao',
			'transmissao' => '
Transmissão',
			'carroceria' => 'Carroceria',
			'quantidade_andares' => 'Quantidade de andares',
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
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('quilometros',$this->quilometros,true);
		$criteria->compare('combustivel',$this->combustivel,true);
		$criteria->compare('quantidade_pessoas',$this->quantidade_pessoas);
		$criteria->compare('direcao',$this->direcao,true);
		$criteria->compare('transmissao',$this->transmissao,true);
		$criteria->compare('carroceria',$this->carroceria,true);
		$criteria->compare('quantidade_andares',$this->quantidade_andares);
		$criteria->compare('id_veiculo',$this->id_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}