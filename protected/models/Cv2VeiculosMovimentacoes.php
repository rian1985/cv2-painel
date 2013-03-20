<?php

/**
 * This is the model class for table "cv2_veiculos_movimentacoes".
 *
 * The followings are the available columns in table 'cv2_veiculos_movimentacoes':
 * @property integer $id
 * @property string $data
 * @property integer $id_tipo
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2TiposMovimentacoes $idTipo
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2VeiculosMovimentacoes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosMovimentacoes the static model class
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
		return 'cv2_veiculos_movimentacoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo, id_veiculo', 'required'),
			array('id_tipo, id_veiculo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data, id_tipo, id_veiculo', 'safe', 'on'=>'search'),
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
			'idTipo' => array(self::BELONGS_TO, 'Cv2TiposMovimentacoes', 'id_tipo'),
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
			'data' => 'Data',
			'id_tipo' => 'Id Tipo',
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
		$criteria->compare('data',$this->data,true);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_veiculo',$this->id_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}