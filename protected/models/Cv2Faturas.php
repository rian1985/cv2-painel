<?php

/**
 * This is the model class for table "cv2_faturas".
 *
 * The followings are the available columns in table 'cv2_faturas':
 * @property integer $id
 * @property string $data
 * @property integer $id_vendedor
 * @property integer $id_itens_faturas
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Cv2ItensFaturas $idItensFaturas
 * @property Cv2Vendedores $idVendedor
 */
class Cv2Faturas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Faturas the static model class
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
		return 'cv2_faturas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data, id_vendedor, id_itens_faturas', 'required'),
			array('id_vendedor, id_itens_faturas, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data, id_vendedor, id_itens_faturas, status', 'safe', 'on'=>'search'),
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
			'idItensFaturas' => array(self::BELONGS_TO, 'Cv2ItensFaturas', 'id_itens_faturas'),
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
			'data' => 'Data',
			'id_vendedor' => 'Id Vendedor',
			'id_itens_faturas' => 'Id Itens Faturas',
			'status' => 'Status',
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
		$criteria->compare('data',$this->data,true);
		$criteria->compare('id_vendedor',$this->id_vendedor);
		$criteria->compare('id_itens_faturas',$this->id_itens_faturas);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}