<?php

namespace app\models;

use Yii;

class CommonType extends \yii\db\ActiveRecord
{

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
    private $_statusLabel;

    public static function tableName()
    {
        return 'mj_common_type';
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

    public static function getArrayByUpid($upid){
        return self::find()->where(["upid"=>$upid])->all();
    }

    public static function getChildrenByTag($tag){
        $object = self::find()->andFilterWhere(["code"=>$tag])->one();
        return self::find()->andFilterWhere(["upid"=>$object->id,"status"=>self::STATUS_ACTIVE])->all();
    }

    public function rules()
    {
        return [
            [['name', 'code', 'upid', 'sort'], 'required'],
            [['upid', 'sort', 'status'], 'integer'],
            [['name', 'code'], 'string', 'max' => 64],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'IDentifier'),
            'upid' => Yii::t('app', 'Parent ID'),
            'sort' => Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
