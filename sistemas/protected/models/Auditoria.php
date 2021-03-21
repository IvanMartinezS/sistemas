<?php

/**
 * This is the model class for table "t99999_auditoria".
 *
 * The followings are the available columns in table 't99999_auditoria':
 * @property string $Co_Auditoria
 * @property string $Nb_Tabla
 * @property string $Co_Fila
 * @property string $Co_Tipo_Operacion
 * @property string $Tx_Sentencia
 * @property string $Tx_Error
 * @property string $Co_Auditoria_Auditoria
 * @property string $Co_Usuario
 * @property string $Co_MAC
 * @property string $Co_IP
 * @property string $Fe_Ins
 * @property integer $St_Error
 *
 * The followings are the available model relations:
 * @property T00100Usuario[] $t00100Usuarios
 * @property T00300Producto[] $t00300Productos
 * @property T00330Atributo[] $t00330Atributos
 * @property Auditoria $coAuditoriaAuditoria
 * @property Auditoria[] $t99999Auditorias
 */
class Auditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't99999_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nb_Tabla, Co_Tipo_Operacion, Tx_Sentencia, Co_Usuario, Fe_Ins', 'required'),
			array('St_Error', 'numerical', 'integerOnly'=>true),
			array('Nb_Tabla', 'length', 'max'=>255),
			array('Co_Fila, Co_Tipo_Operacion, Co_Auditoria_Auditoria, Co_Usuario', 'length', 'max'=>10),
			array('Tx_Sentencia, Tx_Error', 'length', 'max'=>5000),
			array('Co_MAC', 'length', 'max'=>1),
			array('Co_IP', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Co_Auditoria, Nb_Tabla, Co_Fila, Co_Tipo_Operacion, Tx_Sentencia, Tx_Error, Co_Auditoria_Auditoria, Co_Usuario, Co_MAC, Co_IP, Fe_Ins, St_Error', 'safe', 'on'=>'search'),
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
			't00100Usuarios' => array(self::HAS_MANY, 'T00100Usuario', 'Co_Auditoria'),
			't00300Productos' => array(self::HAS_MANY, 'T00300Producto', 'Co_Auditoria'),
			't00330Atributos' => array(self::HAS_MANY, 'T00330Atributo', 'Co_Auditoria'),
			'coAuditoriaAuditoria' => array(self::BELONGS_TO, 'Auditoria', 'Co_Auditoria_Auditoria'),
			't99999Auditorias' => array(self::HAS_MANY, 'Auditoria', 'Co_Auditoria_Auditoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Co_Auditoria' => 'Co Auditoria',
			'Nb_Tabla' => 'Nb Tabla',
			'Co_Fila' => 'Co Fila',
			'Co_Tipo_Operacion' => 'Co Tipo Operacion',
			'Tx_Sentencia' => 'Tx Sentencia',
			'Tx_Error' => 'Tx Error',
			'Co_Auditoria_Auditoria' => 'Co Auditoria Auditoria',
			'Co_Usuario' => 'Co Usuario',
			'Co_MAC' => 'Co Mac',
			'Co_IP' => 'Co Ip',
			'Fe_Ins' => 'Fe Ins',
			'St_Error' => 'St Error',
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

		$criteria->compare('Co_Auditoria',$this->Co_Auditoria,true);
		$criteria->compare('Nb_Tabla',$this->Nb_Tabla,true);
		$criteria->compare('Co_Fila',$this->Co_Fila,true);
		$criteria->compare('Co_Tipo_Operacion',$this->Co_Tipo_Operacion,true);
		$criteria->compare('Tx_Sentencia',$this->Tx_Sentencia,true);
		$criteria->compare('Tx_Error',$this->Tx_Error,true);
		$criteria->compare('Co_Auditoria_Auditoria',$this->Co_Auditoria_Auditoria,true);
		$criteria->compare('Co_Usuario',$this->Co_Usuario,true);
		$criteria->compare('Co_MAC',$this->Co_MAC,true);
		$criteria->compare('Co_IP',$this->Co_IP,true);
		$criteria->compare('Fe_Ins',$this->Fe_Ins,true);
		$criteria->compare('St_Error',$this->St_Error);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Auditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
