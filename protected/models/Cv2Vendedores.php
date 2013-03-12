<?php

/**
 * This is the model class for table "cv2_vendedores".
 *
 * The followings are the available columns in table 'cv2_vendedores':
 * @property integer $id
 * @property string $nome
 * @property string $nome_fantasia
 * @property string $razao_social
 * @property string $cpf
 * @property string $cnpj
 * @property string $celular
 * @property string $telefone
 * @property string $data
 * @property string $email
 * @property integer $id_tipo
 * @property integer $bloqueado
 *
 * The followings are the available model relations:
 * @property Cv2Dominios[] $cv2Dominioses
 * @property Cv2Faturas[] $cv2Faturases
 * @property Cv2Localizacoes[] $cv2Localizacoes
 * @property Cv2Menus[] $cv2Menuses
 * @property Cv2Paginas[] $cv2Paginases
 * @property Cv2Usuarios[] $cv2Usuarioses
 * @property Cv2VeiculosVeiculos[] $cv2VeiculosVeiculoses
 * @property Cv2TiposVendedores $idTipo
 * @property Cv2VendedoresTemplates[] $cv2VendedoresTemplates
 */
class Cv2Vendedores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Vendedores the static model class
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
		return 'cv2_vendedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, id_tipo, telefone, nome', 'required','message'=>'{attribute} deve ser preenchido.'),
			array('id_tipo, bloqueado, cpf, cnpj, telefone, celular', 'numerical', 'integerOnly'=>true,'message'=>'Somente números'),
			array('nome, email', 'length', 'max'=>50),
			array('nome_fantasia, razao_social', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, nome_fantasia, razao_social, cpf, cnpj, celular, telefone, data, email, id_tipo, bloqueado', 'safe', 'on'=>'search'),
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
			'cv2Dominioses' => array(self::HAS_MANY, 'Cv2Dominios', 'id_vendedor'),
			'cv2Faturases' => array(self::HAS_MANY, 'Cv2Faturas', 'id_vendedor'),
			'cv2Localizacoes' => array(self::HAS_MANY, 'Cv2Localizacoes', 'id_vendedor'),
			'cv2Menuses' => array(self::HAS_MANY, 'Cv2Menus', 'id_vendedor'),
			'cv2Paginases' => array(self::HAS_MANY, 'Cv2Paginas', 'id_vendedor'),
			'cv2Usuarioses' => array(self::HAS_MANY, 'Cv2Usuarios', 'id_vendedor'),
			'cv2VeiculosVeiculoses' => array(self::HAS_MANY, 'Cv2VeiculosVeiculos', 'id_vendedor'),
			'idTipo' => array(self::BELONGS_TO, 'Cv2TiposVendedores', 'id_tipo'),
			'cv2VendedoresTemplates' => array(self::HAS_MANY, 'Cv2VendedoresTemplates', 'id_vendedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'nome_fantasia' => 'Nome Fantasia',
			'razao_social' => 'Razão Social',
			'cpf' => 'CPF',
			'cnpj' => 'CNPJ',
			'celular' => '(DDD)Celular',
			'telefone' => '(DDD)Telefone',
			'data' => 'Data',
			'email' => 'Email',
			'id_tipo' => 'Id Tipo',
			'bloqueado' => 'Bloqueado',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('nome_fantasia',$this->nome_fantasia,true);
		$criteria->compare('razao_social',$this->razao_social,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('bloqueado',$this->bloqueado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}