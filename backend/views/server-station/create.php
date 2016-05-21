<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ServerStation */

$this->title = Yii::t('app', 'Create Server Station');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Server Stations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="server-station-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
