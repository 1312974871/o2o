<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CommonType;

/* @var $this yii\web\View */
/* @var $model app\models\CommonType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="common-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upid')->dropDownList(ArrayHelper::merge([0=>"根节点"],ArrayHelper::map(CommonType::getArrayByUpid(0),"id","name"))) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->radioList(\app\models\CommonType::getArrayStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
