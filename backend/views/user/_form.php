<?php

use app\models\Company;
use app\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_no')->textInput(['maxlength' => true]) ?>

    <?php if(empty($model->id)){ ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    <?php } ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->dropDownList(ArrayHelper::map(Company::find()->all(), "id", "name")) ?>

    <?= $form->field($model, 'server_station_id')->textInput() ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'type')->radioList(User::getArrayType()) ?>

    <?= $form->field($model, 'install')->checkbox(\common\models\YesOrNo::getArray()) ?>
    <?= $form->field($model, 'fix')->checkbox(\common\models\YesOrNo::getArray()) ?>
    <?= $form->field($model, 'clean')->checkbox(\common\models\YesOrNo::getArray()) ?>

    <?= $form->field($model, 'avator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_id')->textInput() ?>

    <?= $form->field($model, 'status')->radioList(User::getArrayStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
