<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Companies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Company'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
            'name',
            'zone_id',
            'address',
            'created_at:datetime',
            [
                "attribute"=>"status",
                "format"=>"html",
                "value"=>function($model){
                    if($model->status == $model::STATUS_ACTIVE){
                        $class = 'label-success';
                    }else{
                        $class = 'label-danger';
                    }
                    return '<span class="label '.$class.'">'.$model->statusLabel.'</span>';
                }
            ],
            // 'status',
            // 'latitude',
            // 'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
