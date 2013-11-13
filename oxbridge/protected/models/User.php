<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $last_login_time
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 * @property integer $type
 * @property string $name
 * @property integer $sex
 * @property string $job_title
 * @property string $card_num
 * @property integer $birthday
 * @property string $professional
 * @property string $degree
 * @property string $qualificaiotn
 * @property integer $department_id
 */
class User extends OxbridgeActiveRecord
{
    public $password_repeat;
    private $PWD_MIX ="ADFAFKLOOQ90009-=.,L``DD";

    public $USER_TYPE_ADMIN =2;
    public $USER_TYPE_DEPARTMENT_ADMIN =1;
    public $USER_NORMAL = 0;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, username, password, name, job_title, card_num, professional, degree, qualificaiotn','required'),
			array('create_user_id, update_user_id, sex, birthday, department_id', 'numerical', 'integerOnly'=>true),
			array('email, username, password, name, job_title, card_num, professional, degree, qualificaiotn', 'length', 'max'=>40),
            array('email, username,card_num','unique'),
            array('password', 'compare'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.// Please remove those attributes that should not be searched.
			array('id, email, username, password, name, sex, job_title, card_num, birthday, professional, degree, qualificaiotn, department_id', 'safe', 'on'=>'search'),
		    array('type','setUserType')
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => '邮箱：',
			'username' => '用户名：',
			'password' => '密码：',
			'last_login_time' => 'Last Login Time',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
			'type' => 'Type',
			'name' => '姓名：',
			'sex' => '性别：',
			'job_title' => '职称',
			'card_num' => '身份证号：',
			'birthday' => '出生日期：',
			'professional' => '专业',
			'degree' => '学位：',
			'qualificaiotn' => '学历',
			'department_id' => '部门：',
            'password_repeat' => '确认密码'
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('card_num',$this->card_num,true);
		$criteria->compare('birthday',$this->birthday);
		$criteria->compare('professional',$this->professional,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('qualificaiotn',$this->qualificaiotn,true);
		$criteria->compare('department_id',$this->department_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    protected function afterValidate(){
        parent::afterValidate();
        $this->password = $this->encrypt($this->password);
    }
    public function encrypt($value){
        return  $this->password = md5($this->PWD_MIX.$value);
    }

    /**
     * 设置用户类型
     */
    public  function  setUserType(){
        return true;
    }
}