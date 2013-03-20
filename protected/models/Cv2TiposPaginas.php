<?php

/**
 * This is the model class for table "cv2_tipos_paginas".
 *
 * The followings are the available columns in table 'cv2_tipos_paginas':
 * @property integer $id
 * @property string $descricao
 * @property string $conteudo
 *
 * The followings are the available model relations:
 * @property Cv2Paginas[] $cv2Paginases
 */
class Cv2TiposPaginas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2TiposPaginas the static model class
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
		return 'cv2_tipos_paginas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, conteudo', 'required'),
			array('descricao', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, conteudo', 'safe', 'on'=>'search'),
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
			'cv2Paginases' => array(self::HAS_MANY, 'Cv2Paginas', 'id_tipo_pagina'),
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
			'conteudo' => 'Conteudo',
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
		$criteria->compare('conteudo',$this->conteudo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}