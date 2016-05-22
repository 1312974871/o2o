<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CommonType;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curr_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_type')->dropDownList(ArrayHelper::map(CommonType::getChildrenByTag("business_type"), "id", "name")) ?>

    <?= $form->field($model, 'provider_id')->dropDownList(ArrayHelper::map(\app\models\Provider::find()->all(),"id","name")) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_id')->textInput() ?>

    <?= $form->field($model, 'image_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'object_img_id')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'img_alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'time_limit')->textInput() ?>

    <?= $form->field($model, 'status')->radioList(\app\models\Product::getArrayStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
