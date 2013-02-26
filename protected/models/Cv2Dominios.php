<?php

/**
 * This is the model class for table "cv2_dominios".
 *
 * The followings are the available columns in table 'cv2_dominios':
 * @property integer $id
 * @property string $hostname
 * @property integer $id_vendedor
 *
 * The followings are the available model relations:
 * @property Cv2Vendedores $idVendedor
 */
class Cv2Dominios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Dominios the static model class
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
		return 'cv2_dominios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hostname, id_vendedor', 'required'),
			array('id_vendedor', 'numerical', 'integerOnly'=>true),
			array('hostname', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, hostname, id_vendedor', 'safe', 'on'=>'search'),
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
			'idVendedor' => array(self::BELONGS_TO, 'Cv2Vendedores', 'id_vendedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hostname' => 'Hostname',
			'id_vendedor' => 'Id Vendedor',
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
		$criteria->compare('hostname',$this->hostname,true);
		$criteria->compare('id_vendedor',$this->id_vendedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}