<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CommonType */

$this->title = Yii::t('app', 'Create Common Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Common Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
