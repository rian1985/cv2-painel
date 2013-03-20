<?php

/**
 * This is the model class for table "cv2_veiculos_nauticos".
 *
 * The followings are the available columns in table 'cv2_veiculos_nauticos':
 * @property integer $id
 * @property string $tipo_veiculo
 * @property string $marca
 * @property string $modelo
 * @property string $comprimento
 * @property string $boaca
 * @property string $calado
 * @property string $pontal
 * @property string $quantidade_motores
 * @property string $motor
 * @property string $marca_motor
 * @property integer $ano_motor
 * @property string $horas_uso
 * @property string $potencia
 * @property string $combustivel
 * @property string $capacidade_tanque
 * @property string $altura_interior
 * @property string $material
 * @property string $quantidade_pessoas
 * @property string $camarotes
 * @property string $banheiro
 * @property integer $id_veiculo
 *
 * The followings are the available model relations:
 * @property Cv2VeiculosVeiculos $idVeiculo
 */
class Cv2VeiculosNauticos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2VeiculosNauticos the static model class
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
		return 'cv2_veiculos_nauticos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_veiculo', 'required'),
			array('ano_motor, id_veiculo', 'numerical', 'integerOnly'=>true),
			array('tipo_veiculo, marca, modelo, comprimento, boaca, calado, pontal, horas_uso, potencia, material', 'length', 'max'=>30),
			array('quantidade_motores', 'length', 'max'=>10),
			array('motor, marca_motor, combustivel, capacidade_tanque, altura_interior, quantidade_pessoas, camarotes, banheiro', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo_veiculo, marca, modelo, tipo_motor, comprimento, equipamentos, boaca, calado, pontal, quantidade_motores, motor, marca_motor, ano_motor, horas_uso, potencia, combustivel, capacidade_tanque, altura_interior, material, quantidade_pessoas, camarotes, banheiro, id_veiculo', 'safe', 'on'=>'search'),
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
			'tipo_veiculo' => 'Tipo',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'comprimento' => 'Comprimento',
			'boaca' => 'Boaca',
			'calado' => 'Calado',
			'pontal' => 'Pontal',
			'quantidade_motores' => 'Quantidade de motores',
			'motor' => 'Motor',
			'marca_motor' => 'Marca motor',
			'ano_motor' => 'Ano do motor',
			'horas_uso' => 'Horas de uso',
			'potencia' => 'Potência (HP)',
			'combustivel' => 'Combustivel',
			'capacidade_tanque' => 'Capacidade do tanque (Litros)',
			'altura_interior' => 'Altura Interior',
			'material' => 'Material',
			'quantidade_pessoas' => 'Quantidade Pessoas',
			'camarotes' => 'Camarotes',
			'banheiro' => 'Banheiro',
			'id_veiculo' => 'Id Veiculo',
                    'equipamentos' => 'Equipamentos',
                    'tipo_motor' => 'Tipo de motor'
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
		$criteria->compare('tipo_veiculo',$this->tipo_veiculo,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('comprimento',$this->comprimento,true);
		$criteria->compare('boaca',$this->boaca,true);
		$criteria->compare('calado',$this->calado,true);
		$criteria->compare('pontal',$this->pontal,true);
		$criteria->compare('quantidade_motores',$this->quantidade_motores,true);
		$criteria->compare('motor',$this->motor,true);
		$criteria->compare('marca_motor',$this->marca_motor,true);
		$criteria->compare('ano_motor',$this->ano_motor);
		$criteria->compare('horas_uso',$this->horas_uso,true);
		$criteria->compare('potencia',$this->potencia,true);
		$criteria->compare('combustivel',$this->combustivel,true);
		$criteria->compare('capacidade_tanque',$this->capacidade_tanque,true);
		$criteria->compare('altura_interior',$this->altura_interior,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('quantidade_pessoas',$this->quantidade_pessoas,true);
		$criteria->compare('camarotes',$this->camarotes,true);
		$criteria->compare('banheiro',$this->banheiro,true);
		$criteria->compare('id_veiculo',$this->id_veiculo);
                $criteria->compare('equipamentos',$this->equipamentos);
                 $criteria->compare('tipo_motor',$this->tipo_motor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}