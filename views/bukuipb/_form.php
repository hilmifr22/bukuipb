<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bukuipb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bukuipb-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama Buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama Penulis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tahun Terbit')->textInput() ?>

    <?= $form->field($model, 'Tampat Terbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama Penerbit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
