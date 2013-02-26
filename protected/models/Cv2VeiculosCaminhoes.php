<?php

/**
 * This is the model class for table "cv2_veiculos_caminhoes".
 *
 * The followings are the available columns in table 'cv2_veiculos_caminhoes':
 * @property integer $id
 * @property string $quilometros
 * @property string $tracao
 * @property string $direcao
 * @property string $transmissao
 * @property string $cor
 * @property string $capacidade_tracao
 * @property string $capacidade_carga
 * @property string $potencia_maxima
 * @property string $medidas
 * @property string $motor
 * @property string $freios
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2VeiculosCaminhoes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosCaminhoes the static model class
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
		return 'cv2_veiculos_caminhoes';
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
			array('id_veiculo', 'numerical', 'integerOnly'=>true),
			array('quilometros', 'length', 'max'=>30),
			array('tracao, capacidade_tracao, capacidade_carga, potencia_maxima, medidas, motor', 'length', 'max'=>20),
			array('direcao, transmissao', 'length', 'max'=>150),
			array('cor, freios', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, quilometros, tracao, direcao, transmissao, cor, capacidade_tracao, capacidade_carga, potencia_maxima, medidas, motor, freios, id_veiculo', 'safe', 'on'=>'search'),
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
			'quilometros' => 'Quilometros',
			'tracao' => 'Tracao',
			'direcao' => 'Direcao',
			'transmissao' => 'Transmissao',
			'cor' => 'Cor',
			'capacidade_tracao' => 'Capacidade Tracao',
			'capacidade_carga' => 'Capacidade Carga',
			'potencia_maxima' => 'Potencia Maxima',
			'medidas' => 'Medidas',
			'motor' => 'Motor',
			'freios' => 'Freios',
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
		$criteria->compare('quilometros',$this->quilometros,true);
		$criteria->compare('tracao',$this->tracao,true);
		$criteria->compare('direcao',$this->direcao,true);
		$criteria->compare('transmissao',$this->transmissao,true);
		$criteria->compare('cor',$this->cor,true);
		$criteria->compare('capacidade_tracao',$this->capacidade_tracao,true);
		$criteria->compare('capacidade_carga',$this->capacidade_carga,true);
		$criteria->compare('potencia_maxima',$this->potencia_maxima,true);
		$criteria->compare('medidas',$this->medidas,true);
		$criteria->compare('motor',$this->motor,true);
		$criteria->compare('freios',$this->freios,true);
		$criteria->compare('id_veiculo',$this->id_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}