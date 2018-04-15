<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bukuipb */

$this->title = 'Update Bukuipb: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Bukuipbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukuipb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
