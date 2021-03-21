<?php

/**
 * This is the model class for table "t00330_atributo".
 *
 * The followings are the available columns in table 't00330_atributo':
 * @property string $Co_Atributo
 * @property string $Nb_Atributo
 * @property integer $St_Activo
 * @property string $Co_Auditoria
 *
 * The followings are the available model relations:
 * @property T99999Auditoria $coAuditoria
 * @property T00340ProductoAtributo[] $t00340ProductoAtributos
 */
class Atributo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't00330_atributo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nb_Atributo, Co_Auditoria', 'required'),
			array('St_Activo', 'numerical', 'integerOnly'=>true),
			array('Nb_Atributo', 'length', 'max'=>1500),
			array('Co_Auditoria', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Co_Atributo, Nb_Atributo, St_Activo, Co_Auditoria', 'safe', 'on'=>'search'),
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
			'coAuditoria' => array(self::BELONGS_TO, 'T99999Auditoria', 'Co_Auditoria'),
			't00340ProductoAtributos' => array(self::HAS_MANY, 'T00340ProductoAtributo', 'Co_Atributo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Co_Atributo' => 'Co Atributo',
			'Nb_Atributo' => 'Nb Atributo',
			'St_Activo' => 'St Activo',
			'Co_Auditoria' => 'Co Auditoria',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Co_Atributo',$this->Co_Atributo,true);
		$criteria->compare('Nb_Atributo',$this->Nb_Atributo,true);
		$criteria->compare('St_Activo',$this->St_Activo);
		$criteria->compare('Co_Auditoria',$this->Co_Auditoria,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Atributo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
