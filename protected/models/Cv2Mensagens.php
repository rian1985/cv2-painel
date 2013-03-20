<?php

/**
 * This is the model class for table "cv2_mensagens".
 *
 * The followings are the available columns in table 'cv2_mensagens':
 * @property integer $id
 * @property string $titulo
 * @property string $mensagem
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Cv2MensagensLidas[] $cv2MensagensLidases
 */
class Cv2Mensagens extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Mensagens the static model class
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
		return 'cv2_mensagens';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, mensagem', 'required', 'message' => '{attribute} não pode ficar em branco.'),
			array('titulo, mensagem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, titulo, mensagem, data', 'safe', 'on'=>'search'),
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
			'cv2MensagensLidases' => array(self::HAS_MANY, 'Cv2MensagensLidas', 'id_mensagem'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'mensagem' => 'Mensagem',
			'data' => 'Data',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('mensagem',$this->mensagem,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}