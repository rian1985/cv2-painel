<?php

/**
 * This is the model class for table "cv2_veiculos_veiculos".
 *
 * The followings are the available columns in table 'cv2_veiculos_veiculos':
 * @property integer $id
 * @property string $descricao
 * @property integer $visualizacoes
 * @property string $foto_1
 * @property string $foto_2
 * @property string $foto_3
 * @property string $foto_4
 * @property string $foto_5
 * @property string $foto_6
 * @property string $valor
 * @property string $valor_promocional
 * @property string $itens
 * @property string $observacoes
 * @property string $data_cadastro
 * @property integer $ano
 * @property integer $unico_dono
 * @property integer $novo
 * @property integer $id_vendedor
 * @property integer $id_marca
 * @property integer $id_tipo
 * @property integer $id_localizacao
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Cv2PropostasRecebidas[] $cv2PropostasRecebidases
 * @property Cv2VeiculosCaminhoes[] $cv2VeiculosCaminhoes
 * @property Cv2VeiculosCarros[] $cv2VeiculosCarroses
 * @property Cv2VeiculosMotos[] $cv2VeiculosMotoses
 * @property Cv2VeiculosMovimentacoes[] $cv2VeiculosMovimentacoes
 * @property Cv2VeiculosNauticos[] $cv2VeiculosNauticoses
 * @property Cv2VeiculosOnibus[] $cv2VeiculosOnibuses
 * @property Cv2VeiculosOutros[] $cv2VeiculosOutroses
 * @property Cv2Localizacoes $idLocalizacao
 * @property Cv2VeiculosMarcas $idMarca
 * @property Cv2VeiculosTipos $idTipo
 * @property Cv2Vendedores $idVendedor
 */
class Cv2VeiculosVeiculos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosVeiculos the static model class
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
		return 'cv2_veiculos_veiculos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, valor, ano, id_vendedor, id_marca, id_tipo, id_localizacao, destaque, anunciado', 'required','message'=>'{attribute} não pode ficar em branco.'),
			array('visualizacoes, ano, unico_dono, condicoes, id_vendedor, id_marca, id_tipo, id_localizacao, status', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>150),
			array('foto_1, foto_2, foto_3, foto_4, foto_5, foto_6', 'length', 'max'=>50),
			array('valor, valor_promocional', 'length', 'max'=>20),
			array('itens, observacoes', 'safe'),
                    // array('foto_1,foto_2,foto_3,foto_4,foto_5,foto_6', 'file', 'types'=>'jpg, gif, png'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, visualizacoes, destaque, anunciado, foto_1, foto_2, foto_3, foto_4, foto_5, foto_6, valor, valor_promocional, itens, observacoes, data_cadastro, ano, unico_dono, condicoes, id_vendedor, id_marca, id_tipo, id_localizacao, status', 'safe', 'on'=>'search'),
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
			'cv2PropostasRecebidases' => array(self::HAS_MANY, 'Cv2PropostasRecebidas', 'id_veiculo'),
			'cv2VeiculosCaminhoes' => array(self::HAS_MANY, 'Cv2VeiculosCaminhoes', 'id_veiculo'),
			'cv2VeiculosCarroses' => array(self::HAS_MANY, 'Cv2VeiculosCarros', 'id_veiculo'),
			'cv2VeiculosMotoses' => array(self::HAS_MANY, 'Cv2VeiculosMotos', 'id_veiculo'),
			'cv2VeiculosMovimentacoes' => array(self::HAS_MANY, 'Cv2VeiculosMovimentacoes', 'id_veiculo'),
			'cv2VeiculosNauticoses' => array(self::HAS_MANY, 'Cv2VeiculosNauticos', 'id_veiculo'),
			'cv2VeiculosOnibuses' => array(self::HAS_MANY, 'Cv2VeiculosOnibus', 'id_veiculo'),
			'cv2VeiculosOutroses' => array(self::HAS_MANY, 'Cv2VeiculosOutros', 'id_veiculo'),
			'idLocalizacao' => array(self::BELONGS_TO, 'Cv2Localizacoes', 'id_localizacao'),
			'idMarca' => array(self::BELONGS_TO, 'Cv2VeiculosMarcas', 'id_marca'),
			'idTipo' => array(self::BELONGS_TO, 'Cv2VeiculosTipos', 'id_tipo'),
                    
                    'veiculos_carro' => array(self::BELONGS_TO, 'Cv2VeiculosTipos', 'id_tipo',
                    'together' => true,
                    'condition' => 'veiculos_carro.id = :id',
                    'params' => array(
                    ':id' => 1)),

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
			'descricao' => 'Descricao',
			'visualizacoes' => 'Visualizações',
			'foto_1' => 'Foto 1',
			'foto_2' => 'Foto 2',
			'foto_3' => 'Foto 3',
			'foto_4' => 'Foto 4',
			'foto_5' => 'Foto 5',
			'foto_6' => 'Foto 6',
			'valor' => 'Valor (R$)',
			'valor_promocional' => 'Valor promocional (R$)',
			'itens' => 'Itens',
			'observacoes' => 'Observações',
			'data_cadastro' => 'Data cadastro',
			'ano' => 'Ano',
			'unico_dono' => '
Único Dono? ',
                    'condicoes' => '
Condições Do Veículo?',
			'id_vendedor' => 'Vendedor',
			'id_marca' => 'Marca',
			'id_tipo' => 'Tipo',
			'id_localizacao' => 'Localização',
			'status' => 'Status',
                    'destaque' => 'Anunciar este veículo no portal centraldoveiculo.com.br como DESTAQUE na home do portal, custo de R$ 9,90 por veículo.',
                    'anunciado' => 'Anunciar este veículo no portal centraldoveiculo.com.br, não gera qualquer tipo de custo é gratuito.'
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
		$criteria->compare('visualizacoes',$this->visualizacoes);
		$criteria->compare('foto_1',$this->foto_1,true);
		$criteria->compare('foto_2',$this->foto_2,true);
		$criteria->compare('foto_3',$this->foto_3,true);
		$criteria->compare('foto_4',$this->foto_4,true);
		$criteria->compare('foto_5',$this->foto_5,true);
		$criteria->compare('foto_6',$this->foto_6,true);
		$criteria->compare('valor',$this->valor,true);
		$criteria->compare('valor_promocional',$this->valor_promocional,true);
		$criteria->compare('itens',$this->itens,true);
		$criteria->compare('observacoes',$this->observacoes,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('ano',$this->ano);
		$criteria->compare('unico_dono',$this->unico_dono);
		$criteria->compare('id_vendedor',$this->id_vendedor);
		$criteria->compare('id_marca',$this->id_marca);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_localizacao',$this->id_localizacao);
		$criteria->compare('status',$this->status);
                $criteria->compare('destaque',$this->destaque);
                $criteria->compare('anunciado',$this->anunciado);
                $criteria->compate('condicoes',$this->condicoes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
                
	}
        
       
}