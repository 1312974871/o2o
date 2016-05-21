<?php

namespace app\models;

use Yii;

class Company extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
    private $_statusLabel;

    public static function tableName()
    {
        return 'mj_company';
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
            [['name', 'address', 'latitude', 'longitude'], 'required'],
            [['zone_id', 'created', 'status'], 'integer'],
            [['name', 'address'], 'string', 'max' => 64],
            [['latitude', 'longitude'], 'string', 'max' => 32],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'zone_id' => Yii::t('app', 'Zone ID'),
            'address' => Yii::t('app', 'Address'),
            'created_at' => Yii::t('app', 'Created At'),
            'status' => Yii::t('app', 'Status'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
        ];
    }
}
