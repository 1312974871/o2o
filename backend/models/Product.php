<?php

namespace app\models;

use Yii;

class Product extends \yii\db\ActiveRecord
{

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

    public static function tableName()
    {
        return 'mj_product';
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
            [['name', 'price', 'img_alt', 'start_time', 'end_time', 'time_limit'], 'required'],
            [['price', 'curr_price'], 'number'],
            [['provider_id', 'img_id', 'image_id', 'object_img_id', 'sort', 'start_time', 'end_time', 'time_limit', 'status', 'created_at', 'upid'], 'integer'],
            [['name', 'img_alt'], 'string', 'max' => 64],
            [['business_type'], 'string', 'max' => 16],
            [['image'], 'string', 'max' => 225],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'curr_price' => Yii::t('app', 'Curr Price'),
            'business_type' => Yii::t('app', 'Business Type'),
            'provider_id' => Yii::t('app', 'Provider'),
            'image' => Yii::t('app', 'Image'),
            'img_id' => Yii::t('app', 'Img ID'),
            'image_id' => Yii::t('app', 'Image ID'),
            'object_img_id' => Yii::t('app', 'Object Img ID'),
            'sort' => Yii::t('app', 'Sort'),
            'img_alt' => Yii::t('app', 'Img Alt'),
            'start_time' => Yii::t('app', 'Start Time'),
            'end_time' => Yii::t('app', 'End Time'),
            'time_limit' => Yii::t('app', 'Time Limit'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'upid' => Yii::t('app', 'Upid'),
        ];
    }
}
