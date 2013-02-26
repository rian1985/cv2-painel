<?php

/**
 * This is the model class for table "cv2_veiculos_marcas".
 *
 * The followings are the available columns in table 'cv2_veiculos_marcas':
 * @property integer $id
 * @property string $descricao
 * @property string $logomarca
 * @property integer $id_tipo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosTipos $idTipo
 * @property Cv2VeiculosVeiculos[] $cv2VeiculosVeiculoses
 */
class Cv2VeiculosMarcas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosMarcas the static model class
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
		return 'cv2_veiculos_marcas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo', 'required'),
			array('id_tipo', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>150),
			array('logomarca', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, logomarca, id_tipo', 'safe', 'on'=>'search'),
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
			'idTipo' => array(self::BELONGS_TO, 'Cv2VeiculosTipos', 'id_tipo'),
			'cv2VeiculosVeiculoses' => array(self::HAS_MANY, 'Cv2VeiculosVeiculos', 'id_marca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descricao' => 'Descricao',
			'logomarca' => 'Logomarca',
			'id_tipo' => 'Id Tipo',
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
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('logomarca',$this->logomarca,true);
		$criteria->compare('id_tipo',$this->id_tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}