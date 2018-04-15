<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuipbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bukuipbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukuipb-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bukuipb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no',
            'Nama Buku',
            'Nama Penulis',
            'Tahun Terbit',
            'Tampat Terbit',
            //'Nama Penerbit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
