<?php

/**
 * This is the model class for table "cv2_usuarios".
 *
 * The followings are the available columns in table 'cv2_usuarios':
 * @property integer $id
 * @property string $usuario
 * @property string $senha
 * @property string $nome
 * @property string $data_entrada
 * @property string $data_saida
 * @property integer $status
 * @property integer $id_vendedor
 * @property integer $id_grupos_usuarios
 * @property integer $tipo
 *
 * The followings are the available model relations:
 * @property Cv2MensagensLidas[] $cv2MensagensLidases
 * @property Cv2Vendedores $idVendedor
 * @property Cv2GruposUsuarios $idGruposUsuarios
 */
class Cv2Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Usuarios the static model class
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
		return 'cv2_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, senha, nome, id_vendedor, id_grupos_usuarios, tipo', 'required','message'=>'{attribute} deve ser preenchido'),
			array('status, id_vendedor, id_grupos_usuarios', 'numerical', 'integerOnly'=>true),
			array('usuario, nome', 'length', 'max'=>50),
			array('senha', 'length', 'max'=>30),
			array('data_saida', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuario, senha, nome, data_entrada, data_saida, status, id_vendedor, id_grupos_usuarios, tipo', 'safe', 'on'=>'search'),
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
			'cv2MensagensLidases' => array(self::HAS_MANY, 'Cv2MensagensLidas', 'id_usuario'),
			'idVendedor' => array(self::BELONGS_TO, 'Cv2Vendedores', 'id_vendedor'),
			'idGruposUsuarios' => array(self::BELONGS_TO, 'Cv2GruposUsuarios', 'id_grupos_usuarios'),
                    'vendedor_liberado' => array(self::BELONGS_TO, 'Cv2Vendedores', 'id_vendedor',
                    'together' => true,
                    'condition' => 'vendedor_liberado.bloqueado = :bloqueado AND vendedor_liberado.id_tipo = :id_tipo',
                    'params' => array(
                    ':bloqueado' => 0,'id_tipo'=> 3
 ),
),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuario' => 'Usuario',
			'senha' => 'Senha',
			'nome' => 'Nome',
			'data_entrada' => 'Data Entrada',
			'data_saida' => 'Data Saida',
			'status' => 'Status',
			'id_vendedor' => 'Id Vendedor',
			'id_grupos_usuarios' => 'Id Grupos Usuarios',
			'tipo' => 'Tipo',
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
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('data_entrada',$this->data_entrada,true);
		$criteria->compare('data_saida',$this->data_saida,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_vendedor',$this->id_vendedor);
		$criteria->compare('id_grupos_usuarios',$this->id_grupos_usuarios);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}