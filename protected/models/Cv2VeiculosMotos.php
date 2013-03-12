<?php

/**
 * This is the model class for table "cv2_veiculos_motos".
 *
 * The followings are the available columns in table 'cv2_veiculos_motos':
 * @property integer $id
 * @property string $versao
 * @property string $quilometros
 * @property string $freios
 * @property string $tipo_motor
 * @property string $partida
 * @property string $cor
 * @property string $alarme
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2VeiculosMotos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosMotos the static model class
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
		return 'cv2_veiculos_motos';
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
			array('modelo', 'length', 'max'=>150),
			array('quilometros, freios, tipo_motor, partida, alarme', 'length', 'max'=>30),
			array('cor', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, modelo, quilometros, freios, tipo_motor, partida, cor, alarme, id_veiculo', 'safe', 'on'=>'search'),
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
			'quilometros' => 'Quilômetros',
			'freios' => 'Sistema de freios',
			'tipo_motor' => 'Marca motor',
			'partida' => 'Partida',
			'cor' => 'Cor',
			'alarme' => 'Alarme',
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
		$criteria->compare('freios',$this->freios,true);
		$criteria->compare('tipo_motor',$this->tipo_motor,true);
		$criteria->compare('partida',$this->partida,true);
		$criteria->compare('cor',$this->cor,true);
		$criteria->compare('alarme',$this->alarme,true);
		$criteria->compare('id_veiculo',$this->id_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}