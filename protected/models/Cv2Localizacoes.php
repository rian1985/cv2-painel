<?php

/**
 * This is the model class for table "cv2_localizacoes".
 *
 * The followings are the available columns in table 'cv2_localizacoes':
 * @property integer $id
 * @property string $descricao
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cep
 * @property integer $id_vendedor
 * @property integer $id_uf
 * @property integer $id_cidade
 *
 * The followings are the available model relations:
 * @property Cv2Vendedores $idVendedor
 * @property Cv2LocalizacoesUfs $idUf
 * @property Cv2LocalizacoesCidades $idCidade
 * @property Cv2VeiculosVeiculos[] $cv2VeiculosVeiculoses
 */
class Cv2Localizacoes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Localizacoes the static model class
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
		return 'cv2_localizacoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_vendedor, id_uf, id_cidade', 'required','message'=>'{attribute} deve ser preenchido.'),
			array('id_vendedor, id_uf, id_cidade', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>250),
			array('logradouro', 'length', 'max'=>150),
			array('numero, cep', 'length', 'max'=>10),
			array('complemento', 'length', 'max'=>20),
			array('bairro', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, logradouro, numero, complemento, bairro, cep, id_vendedor, id_uf, id_cidade', 'safe', 'on'=>'search'),
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
			'idUf' => array(self::BELONGS_TO, 'Cv2LocalizacoesUfs', 'id_uf'),
			'idCidade' => array(self::BELONGS_TO, 'Cv2LocalizacoesCidades', 'id_cidade'),
			'cv2VeiculosVeiculoses' => array(self::HAS_MANY, 'Cv2VeiculosVeiculos', 'id_localizacao'),
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
			'logradouro' => 'Logradouro',
			'numero' => 'Número',
			'complemento' => 'Complemento',
			'bairro' => 'Bairro',
			'cep' => 'CEP',
			'id_vendedor' => 'Id Vendedor',
			'id_uf' => 'Estado',
			'id_cidade' => 'Cidade',
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
		$criteria->compare('logradouro',$this->logradouro,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('id_vendedor',$this->id_vendedor);
		$criteria->compare('id_uf',$this->id_uf);
		$criteria->compare('id_cidade',$this->id_cidade);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}