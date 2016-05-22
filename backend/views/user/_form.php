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

    <?= $form->field($model, 'server_station_id')->dropDownList(["0"=>"请选择"]) ?>
    <?= $form->field($model, 'department_id')->dropDownList(ArrayHelper::map(\app\models\Department::find()->where(["status"=>$model::STATUS_ACTIVE])->all(), "id", "name")) ?>

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
<form action="<?= Yii::$app->urlManager->createUrl(["server-station/json"])?>" id="form_getServerStationes" method="get"><input type="hidden" name="company_id" id="company_id" value="<?= $model->company_id ?>"></form>
<?php

$js = <<<JS
jQuery(function(){
    var company_id = $("#user-company_id").val();
    if(company_id != ""){
        getServerStationes();
    }
   $("#user-company_id").on("change",function(){
        getServerStationes();
   }); 
});
function getServerStationes(){
    $("#company_id").val($("#user-company_id").val());
    $.get($("#form_getServerStationes").attr("action"),$("#form_getServerStationes").serialize(),function(res){
        var str = "";
        $.each(res,function(i,v){
            str += '<option value='+i+'>'+v+'</option>';
        });
        $("#user-server_station_id").html(str);
    });
}
JS;
$this->registerJs($js);
?>