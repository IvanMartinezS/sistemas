<?php

/**
 * This is the model class for table "t99999_bitacora".
 *
 * The followings are the available columns in table 't99999_bitacora':
 * @property string $Co_Bitacora
 * @property string $Co_Bitacora_Previo
 * @property string $Co_Usuario
 * @property string $Tx_Elemento_Visual
 * @property string $Fe_Ins
 *
 * The followings are the available model relations:
 * @property Bitacora $coBitacoraPrevio
 * @property Bitacora[] $t99999Bitacoras
 * @property T00100Usuario $coUsuario
 */
class Bitacora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't99999_bitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Co_Bitacora_Previo, Co_Usuario, Tx_Elemento_Visual, Fe_Ins', 'required'),
			array('Co_Bitacora_Previo, Co_Usuario', 'length', 'max'=>10),
			array('Tx_Elemento_Visual', 'length', 'max'=>1500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Co_Bitacora, Co_Bitacora_Previo, Co_Usuario, Tx_Elemento_Visual, Fe_Ins', 'safe', 'on'=>'search'),
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
			'coBitacoraPrevio' => array(self::BELONGS_TO, 'Bitacora', 'Co_Bitacora_Previo'),
			't99999Bitacoras' => array(self::HAS_MANY, 'Bitacora', 'Co_Bitacora_Previo'),
			'coUsuario' => array(self::BELONGS_TO, 'T00100Usuario', 'Co_Usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Co_Bitacora' => 'Co Bitacora',
			'Co_Bitacora_Previo' => 'Co Bitacora Previo',
			'Co_Usuario' => 'Co Usuario',
			'Tx_Elemento_Visual' => 'Tx Elemento Visual',
			'Fe_Ins' => 'Fe Ins',
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

		$criteria->compare('Co_Bitacora',$this->Co_Bitacora,true);
		$criteria->compare('Co_Bitacora_Previo',$this->Co_Bitacora_Previo,true);
		$criteria->compare('Co_Usuario',$this->Co_Usuario,true);
		$criteria->compare('Tx_Elemento_Visual',$this->Tx_Elemento_Visual,true);
		$criteria->compare('Fe_Ins',$this->Fe_Ins,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
