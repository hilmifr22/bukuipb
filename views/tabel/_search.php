<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TabelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tabel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'Nama_Buku') ?>

    <?= $form->field($model, 'Nama_Penulis') ?>

    <?= $form->field($model, 'Tahun_Terbit') ?>

    <?= $form->field($model, 'Tampat_Terbit') ?>

    <?php // echo $form->field($model, 'Nama_Penerbit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
