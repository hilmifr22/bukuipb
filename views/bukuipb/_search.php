<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BukuipbSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bukuipb-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'Nama Buku') ?>

    <?= $form->field($model, 'Nama Penulis') ?>

    <?= $form->field($model, 'Tahun Terbit') ?>

    <?= $form->field($model, 'Tampat Terbit') ?>

    <?php // echo $form->field($model, 'Nama Penerbit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
