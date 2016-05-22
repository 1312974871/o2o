<?php

namespace app\models;

use Yii;

class ServerStation extends \yii\db\ActiveRecord
{

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
    private $_statusLabel;

    public static function tableName()
    {
        return 'mj_server_station';
    }

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

    public function rules()
    {
        return [
            [['company_id', 'zone_id', 'manager_id', 'created', 'status'], 'integer'],
            [['latitude', 'longitude', 'name'], 'required'],
            [['name', 'latitude', 'longitude'], 'string', 'max' => 64],
            [['address'], 'string', 'max' => 128],
        ];
    }

    public function getCompany(){
        return $this->hasOne(Company::className(), ["id"=>"company_id"]);
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'company' => Yii::t('app', 'Company'),
            'zone_id' => Yii::t('app', 'Zone ID'),
            'address' => Yii::t('app', 'Address'),
            'manager_id' => Yii::t('app', 'Manager ID'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'created' => Yii::t('app', 'Created'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
