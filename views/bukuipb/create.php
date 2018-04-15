<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bukuipb */

$this->title = 'Create Bukuipb';
$this->params['breadcrumbs'][] = ['label' => 'Bukuipbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukuipb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
