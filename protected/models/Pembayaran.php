<?php

/**
 * This is the model class for table "pembayaran".
 *
 * The followings are the available columns in table 'pembayaran':
 * @property integer $id_pembayaran
 * @property integer $petugas_id
 * @property integer $pasien_id
 * @property integer $jumlah_harga
 *
 * The followings are the available model relations:
 * @property Petugas $petugas
 * @property Pasien $pasien
 */
class Pembayaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('petugas_id, pasien_id, jumlah_harga', 'required'),
			array('petugas_id, pasien_id, jumlah_harga', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pembayaran, petugas_id, pasien_id, jumlah_harga', 'safe', 'on'=>'search'),
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
			'petugas' => array(self::BELONGS_TO, 'Petugas', 'petugas_id'),
			'pasien' => array(self::BELONGS_TO, 'Pasien', 'pasien_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pembayaran' => 'Id Pembayaran',
			'petugas_id' => 'Petugas',
			'pasien_id' => 'Pasien',
			'jumlah_harga' => 'Jumlah Harga',
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

		$criteria->compare('id_pembayaran',$this->id_pembayaran);
		$criteria->compare('petugas_id',$this->petugas_id);
		$criteria->compare('pasien_id',$this->pasien_id);
		$criteria->compare('jumlah_harga',$this->jumlah_harga);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pembayaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
