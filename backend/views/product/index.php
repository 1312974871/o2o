<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
            'id',
            'name',
            'price',
            'curr_price',
            "business_type",
            // 'provider_id',
            // 'image',
            // 'img_id',
            // 'image_id',
            // 'object_img_id',
            // 'sort',
            // 'img_alt',
            // 'start_time:datetime',
            // 'end_time:datetime',
            // 'time_limit:datetime',
            // 'status',
            // 'created',
            // 'upid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
