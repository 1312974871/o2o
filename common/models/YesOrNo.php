<?php
namespace common\models;

use Yii;

class YesOrNo {
    const YES = 1;
    const NO = 0;
    public static function getArray(){
        return [
            self::YES => Yii::t("app", "YES"),
            self::NO => Yii::t("app", "NO"),
        ];
    }
}