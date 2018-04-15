<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tabel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tabel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_Buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Penulis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tahun_Terbit')->textInput() ?>

    <?= $form->field($model, 'Tampat_Terbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Penerbit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
