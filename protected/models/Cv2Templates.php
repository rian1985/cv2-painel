<?php

/**
 * This is the model class for table "cv2_templates".
 *
 * The followings are the available columns in table 'cv2_templates':
 * @property integer $id
 * @property string $nome
 * @property string $pasta
 * @property string $cor_texto_menu
 * @property string $cor_menu
 * @property string $cor_site
 * @property string $logo
 * @property string $banner
 * @property string $background
 * @property string $cor_links
 * @property string $cor_textos
 *
 * The followings are the available model relations:
 * @property Cv2VendedoresTemplates[] $cv2VendedoresTemplates
 */
class Cv2Templates extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cv2Templates the static model class
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
		return 'cv2_templates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, pasta, cor_texto_menu, cor_menu, cor_site, logo, banner, background, cor_links, cor_textos', 'required'),
			array('nome, pasta, cor_texto_menu, cor_menu, cor_site, logo, banner, background, cor_links, cor_textos', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, pasta, cor_texto_menu, cor_menu, cor_site, logo, banner, background, cor_links, cor_textos', 'safe', 'on'=>'search'),
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
			'cv2VendedoresTemplates' => array(self::HAS_MANY, 'Cv2VendedoresTemplates', 'id_template'),
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
			'pasta' => 'Pasta',
			'cor_texto_menu' => 'Cor Texto Menu',
			'cor_menu' => 'Cor Menu',
			'cor_site' => 'Cor Site',
			'logo' => 'Logo',
			'banner' => 'Banner',
			'background' => 'Background',
			'cor_links' => 'Cor Links',
			'cor_textos' => 'Cor Textos',
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
		$criteria->compare('pasta',$this->pasta,true);
		$criteria->compare('cor_texto_menu',$this->cor_texto_menu,true);
		$criteria->compare('cor_menu',$this->cor_menu,true);
		$criteria->compare('cor_site',$this->cor_site,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('banner',$this->banner,true);
		$criteria->compare('background',$this->background,true);
		$criteria->compare('cor_links',$this->cor_links,true);
		$criteria->compare('cor_textos',$this->cor_textos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}