<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'username',
            'worker_no',
//            'auth_key',
//            'password_hash',
            // 'password_reset_token',
             'name',
             'mobile',
             'email:email',
//            [
//                "attribute"=>"company",
//                "value"=>function($model){
//                    return $model->company->name;
//                }
//            ],
            // 'server_station_id',
            // 'department_id',
            // 'level',
            // 'type',
            // 'install',
            // 'fix',
            // 'clean',
            // 'avator',
            // 'img_id',
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
             'created_at:datetime',
             'login_time:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{change-password} {update} {delete}',
                'buttons' => [
                    'change-password' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', 'Change Password'),
                            'aria-label' => Yii::t('app', 'View'),
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
                    },
                    'update' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', 'Update'),
                            'aria-label' => Yii::t('app', 'Update'),
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, $options);
                    },
                    'delete' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', 'Delete'),
                            'aria-label' => Yii::t('app', 'Delete'),
                            'data-confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, $options);
                    },
                ]
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
