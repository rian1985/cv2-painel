<?php

/**
 * This is the model class for table "cv2_mensagens_lidas".
 *
 * The followings are the available columns in table 'cv2_mensagens_lidas':
 * @property integer $id
 * @property integer $id_mensagem
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Cv2Mensagens $idMensagem
 * @property Cv2Usuarios $idUsuario
 */
class Cv2MensagensLidas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2MensagensLidas the static model class
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
		return 'cv2_mensagens_lidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mensagem, id_usuario', 'required'),
			array('id_mensagem, id_usuario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_mensagem, id_usuario', 'safe', 'on'=>'search'),
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
			'idMensagem' => array(self::BELONGS_TO, 'Cv2Mensagens', 'id_mensagem'),
			'idUsuario' => array(self::BELONGS_TO, 'Cv2Usuarios', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_mensagem' => 'Id Mensagem',
			'id_usuario' => 'Id Usuario',
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
		$criteria->compare('id_mensagem',$this->id_mensagem);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}