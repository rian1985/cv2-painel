<?php

/**
 * This is the model class for table "cv2_veiculos_itens".
 *
 * The followings are the available columns in table 'cv2_veiculos_itens':
 * @property integer $id
 * @property integer $id_itens
 * @property integer $id_veiculos_tipos
 *
 * The followings are the available model relations:
 * @property Cv2Itens $idItens
 * @property Cv2VeiculosTipos $idVeiculosTipos
 */
class Cv2VeiculosItens extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosItens the static model class
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
		return 'cv2_veiculos_itens';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_itens, id_veiculos_tipos', 'required'),
			array('id_itens, id_veiculos_tipos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_itens, id_veiculos_tipos', 'safe', 'on'=>'search'),
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
			'idItens' => array(self::BELONGS_TO, 'Cv2Itens', 'id_itens'),
			'idVeiculosTipos' => array(self::BELONGS_TO, 'Cv2VeiculosTipos', 'id_veiculos_tipos'),
                    
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_itens' => 'Id Itens',
			'id_veiculos_tipos' => 'Id Veiculos Tipos',
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
		$criteria->compare('id_itens',$this->id_itens);
		$criteria->compare('id_veiculos_tipos',$this->id_veiculos_tipos);
                $criteria->compare('descricao',$this->descricao);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}