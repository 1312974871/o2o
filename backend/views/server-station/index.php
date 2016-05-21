<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Server Stations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="server-station-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Server Station'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
            'name',
            [
                "attribute"=>"company",
                "value"=>function($model){
                    return $model->company->name;
                }
            ],
            'zone_id',
            'address',
            // 'manager_id',
            // 'latitude',
            // 'longitude',
            // 'created',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
