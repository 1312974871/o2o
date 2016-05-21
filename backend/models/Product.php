<?php

namespace app\models;

use Yii;

class Product extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'mj_product';
    }

    public function rules()
    {
        return [
            [['name', 'price', 'img_alt', 'start_time', 'end_time', 'time_limit'], 'required'],
            [['price', 'curr_price'], 'number'],
            [['provider_id', 'img_id', 'image_id', 'object_img_id', 'sort', 'start_time', 'end_time', 'time_limit', 'status', 'created', 'upid'], 'integer'],
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
            'provider_id' => Yii::t('app', 'Provider ID'),
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
            'created' => Yii::t('app', 'Created'),
            'upid' => Yii::t('app', 'Upid'),
        ];
    }
}
