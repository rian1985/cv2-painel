<?php

/**
 * This is the model class for table "cv2_paginas".
 *
 * The followings are the available columns in table 'cv2_paginas':
 * @property integer $id
 * @property string $conteudo
 * @property integer $id_tipo_pagina
 * @property integer $id_vendedor
 *
 * The followings are the available model relations:
 * @property Cv2TiposPaginas $idTipoPagina
 * @property Cv2Vendedores $idVendedor
 */
class Cv2Paginas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Paginas the static model class
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
		return 'cv2_paginas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo_pagina, id_vendedor', 'required'),
			array('id_tipo_pagina, id_vendedor', 'numerical', 'integerOnly'=>true),
			array('conteudo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, conteudo, id_tipo_pagina, id_vendedor', 'safe', 'on'=>'search'),
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
			'idTipoPagina' => array(self::BELONGS_TO, 'Cv2TiposPaginas', 'id_tipo_pagina'),
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
			'conteudo' => 'Conteudo',
			'id_tipo_pagina' => 'Id Tipo Pagina',
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
		$criteria->compare('conteudo',$this->conteudo,true);
		$criteria->compare('id_tipo_pagina',$this->id_tipo_pagina);
		$criteria->compare('id_vendedor',$this->id_vendedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}