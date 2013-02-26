<?php

/**
 * This is the model class for table "cv2_itens".
 *
 * The followings are the available columns in table 'cv2_itens':
 * @property integer $id
 * @property string $descricao
 * @property integer $id_tipos_itens
 *
 * The followings are the available model relations:
 * @property Cv2TiposItens $idTiposItens
 * @property Cv2VeiculosItens[] $cv2VeiculosItens
 */
class Cv2Itens extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Itens the static model class
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
		return 'cv2_itens';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, id_tipos_itens', 'required'),
			array('id_tipos_itens', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, id_tipos_itens', 'safe', 'on'=>'search'),
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
			'idTiposItens' => array(self::BELONGS_TO, 'Cv2TiposItens', 'id_tipos_itens'),
			'cv2VeiculosItens' => array(self::HAS_MANY, 'Cv2VeiculosItens', 'id_itens'),
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
			'id_tipos_itens' => 'Id Tipos Itens',
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
		$criteria->compare('id_tipos_itens',$this->id_tipos_itens);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}