<?php

/**
 * This is the model class for table "cv2_veiculos_carros".
 *
 * The followings are the available columns in table 'cv2_veiculos_carros':
 * @property integer $id
 * @property string $modelo
 * @property integer $portas
 * @property string $quilometros
 * @property string $combustivel
 * @property string $direcao
 * @property string $transmissao
 * @property string $cor
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2VeiculosCarros extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosCarros the static model class
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
		return 'cv2_veiculos_carros';
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
			array(' portas, id_veiculo', 'numerical', 'integerOnly'=>true),
			array('modelo, quilometros, transmissao', 'length', 'max'=>30),
			array('combustivel', 'length', 'max'=>50),
			array('direcao, cor', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, modelo, portas, quilometros, combustivel, direcao, transmissao, conforto, seguranca, exterior, som, cor, id_veiculo', 'safe', 'on'=>'search'),
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
			'portas' => 'Portas',
			'quilometros' => 'Quilômetros',
			'combustivel' => 'Combustível',
			'direcao' => 'Direção',
			'transmissao' => 'Transmissão',
			'cor' => 'Cor',
			'id_veiculo' => 'Id Veiculo',
                    'conforto' => 'conforto',
                    'seguranca' => 'seguranca',
                    'exterior' => 'exterior',
                    'som' => 'som'
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
		$criteria->compare('portas',$this->portas);
		$criteria->compare('quilometros',$this->quilometros,true);
		$criteria->compare('combustivel',$this->combustivel,true);
		$criteria->compare('direcao',$this->direcao,true);
		$criteria->compare('transmissao',$this->transmissao,true);
                $criteria->compare('conforto',$this->conforto,true);
                $criteria->compare('seguranca',$this->seguranca,true);
                $criteria->compare('exterior',$this->exterior,true);
                $criteria->compare('som',$this->som,true);
		$criteria->compare('cor',$this->cor,true);
		$criteria->compare('id_veiculo',$this->id_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}