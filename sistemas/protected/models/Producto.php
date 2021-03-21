<?php

/**
 * This is the model class for table "t00300_producto".
 *
 * The followings are the available columns in table 't00300_producto':
 * @property string $Co_Producto
 * @property string $Nb_Producto
 * @property integer $St_Activo
 * @property string $Co_Auditoria
 *
 * The followings are the available model relations:
 * @property T99999Auditoria $coAuditoria
 * @property T00340ProductoAtributo[] $t00340ProductoAtributos
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't00300_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nb_Producto, Co_Auditoria', 'required'),
			array('St_Activo', 'numerical', 'integerOnly'=>true),
			array('Nb_Producto', 'length', 'max'=>2500),
			array('Co_Auditoria', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Co_Producto, Nb_Producto, St_Activo, Co_Auditoria', 'safe', 'on'=>'search'),
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
			't00340ProductoAtributos' => array(self::HAS_MANY, 'T00340ProductoAtributo', 'Co_Producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Co_Producto' => 'Co Producto',
			'Nb_Producto' => 'Nb Producto',
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

		$criteria->compare('Co_Producto',$this->Co_Producto,true);
		$criteria->compare('Nb_Producto',$this->Nb_Producto,true);
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
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
