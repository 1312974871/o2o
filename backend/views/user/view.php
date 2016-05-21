<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'worker_no',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            'name',
            'mobile',
            'email:email',
            [
                "attribute"=>"company_id",
                "value"=>$model->company->name
            ],
            [
                "attribute"=>"server_station_id",
                "value"=>$model->serverStation->name
            ],
            [
                "attribute"=>"department_id",
                "value"=>$model->department->name
            ],
            'level',
            'type',
            'install',
            'fix',
            'clean',
            'avator',
            'img_id',
            [
                "attribute"=>"status",
                "value"=>$model->statusLabel
            ],
            'created_at:datetime',
            'updated_at:datetime',
            'login_time:datetime',
        ],
    ]) ?>

</div>
