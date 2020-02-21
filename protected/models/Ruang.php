<?php

/**
 * This is the model class for table "ruang".
 *
 * The followings are the available columns in table 'ruang':
 * @property integer $id_ruang
 * @property string $nama_ruang
 * @property string $nama_gedung
 *
 * The followings are the available model relations:
 * @property RawatInap[] $rawatInaps
 */
class Ruang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ruang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_ruang, nama_gedung', 'required'),
			array('nama_ruang, nama_gedung', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ruang, nama_ruang, nama_gedung', 'safe', 'on'=>'search'),
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
			'rawatInaps' => array(self::HAS_MANY, 'RawatInap', 'ruang_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ruang' => 'Id Ruang',
			'nama_ruang' => 'Nama Ruang',
			'nama_gedung' => 'Nama Gedung',
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

		$criteria->compare('id_ruang',$this->id_ruang);
		$criteria->compare('nama_ruang',$this->nama_ruang,true);
		$criteria->compare('nama_gedung',$this->nama_gedung,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ruang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
