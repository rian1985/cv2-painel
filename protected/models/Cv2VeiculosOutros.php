<?php

/**
 * This is the model class for table "cv2_veiculos_outros".
 *
 * The followings are the available columns in table 'cv2_veiculos_outros':
 * @property integer $id
 * @property string $tipo_veiculo
 * @property string $marca
 * @property string $modelo
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2VeiculosOutros extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosOutros the static model class
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
		return 'cv2_veiculos_outros';
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
			array('tipo_veiculo, marca, modelo', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo_veiculo, marca, modelo, id_veiculo', 'safe', 'on'=>'search'),
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
			'tipo_veiculo' => 'Tipo Veiculo',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
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
		$criteria->compare('tipo_veiculo',$this->tipo_veiculo,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('id_veiculo',$this->id_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}