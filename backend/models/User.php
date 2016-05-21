<?php

namespace app\models;

use Yii;

class User extends \common\models\User
{

    public $password;
    public $repassword;
    private $_statusLabel;
    private $_authRoleLabel;
    private $_typeLabel;

    public function getStatusLabel(){
        if($this->_statusLabel === null){
            $statuses = $this->getArrayStatus();
            $this->_statusLabel = $statuses[$this->status];
        }
        return $this->_statusLabel;
    }

    public static function getArrayStatus(){
        return [
            self::STATUS_ACTIVE => Yii::t("app", "STATUS_ACTIVE"),
            self::STATUS_DELETED => Yii::t("app", "STATUS_DELETED"),
        ];
    }
    public static function getArrayType(){
        return [
            self::TYPE_WORKING => Yii::t("app", "TYPE_WORKING"),
            self::TYPE_NOWORKING => Yii::t("app", "TYPE_NOWORKING")
        ];
    }

    public function rules() {
        return [
            [['username', 'worker_no', 'name', 'mobile', 'email', 'company_id', 'server_station_id', "level","type", 'department_id', 'img_id', 'status'], 'required',"on"=>["create-user","update-user"]],
            [['company_id', 'server_station_id', 'department_id', 'level', 'type', 'install', 'fix', 'clean', 'img_id', 'status'], 'integer',"on"=>["create-user","update-user"]],
            [['username', 'mobile'], 'string', 'max' => 32,"on"=>["create-user","update-user"]],
            [['worker_no'], 'string', 'max' => 16,"on"=>["create-user","update-user"]],
            [['name', 'email'], 'string', 'max' => 64,"on"=>["create-user","update-user"]],
            [['avator'], 'string', 'max' => 225,"on"=>["create-user","update-user"]],
            [['username'], 'unique',"on"=>["create-user","update-user"]],

            [["password","repassword"],"required","on"=>["change-password"]],
        ];
    }

    public function scenarios(){
        return [
            "change-password"=>["password","repassword"],
            "create-user"=>['username', 'worker_no', 'name', 'mobile', 'email', "type","level",'company_id', 'server_station_id', 'department_id', 'img_id', 'status'],
            "update-user"=>['username', 'worker_no', 'name', 'mobile', 'email', "type","level",'company_id', 'server_station_id', 'department_id', 'img_id', 'status']
        ];
    }

    public function resetPassword(){
        $this->setPassword($this->password);
        $this->removePasswordResetToken();
        return $this->save(false);
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'worker_no' => Yii::t('app', 'Worker No'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'password' => Yii::t('app', 'Password'),
            'name' => Yii::t('app', 'Name'),
            'mobile' => Yii::t('app', 'Mobile'),
            'email' => Yii::t('app', 'Email'),
            'company_id' => Yii::t('app', 'Company ID'),
            'server_station_id' => Yii::t('app', 'Server Station ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'level' => Yii::t('app', 'Level'),
            'type' => Yii::t('app', 'Type'),
            'install' => Yii::t('app', 'Install'),
            'fix' => Yii::t('app', 'Fix'),
            'clean' => Yii::t('app', 'Clean'),
            'avator' => Yii::t('app', 'Avator'),
            'img_id' => Yii::t('app', 'Img ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'login_time' => Yii::t('app', 'Login Time'),
            "repassword"=>Yii::t("app", "Repassword")
        ];
    }
}
