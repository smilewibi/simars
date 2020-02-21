<?php

/**
 * This is the model class for table "rawat_inap".
 *
 * The followings are the available columns in table 'rawat_inap':
 * @property integer $id_rawatinap
 * @property integer $ruang_id
 * @property integer $pasien_id
 *
 * The followings are the available model relations:
 * @property Ruang $ruang
 * @property Pasien $pasien
 */
class RawatInap extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rawat_inap';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ruang_id, pasien_id', 'required'),
			array('ruang_id, pasien_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rawatinap, ruang_id, pasien_id', 'safe', 'on'=>'search'),
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
			'ruang' => array(self::BELONGS_TO, 'Ruang', 'ruang_id'),
			'pasien' => array(self::BELONGS_TO, 'Pasien', 'pasien_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rawatinap' => 'Id Rawatinap',
			'ruang_id' => 'Ruang',
			'pasien_id' => 'Pasien',
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

		$criteria->compare('id_rawatinap',$this->id_rawatinap);
		$criteria->compare('ruang_id',$this->ruang_id);
		$criteria->compare('pasien_id',$this->pasien_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RawatInap the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
