<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tabel Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1 style="color: white"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-warning']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'npm',
            'prodi',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
