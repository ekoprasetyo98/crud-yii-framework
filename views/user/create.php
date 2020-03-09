<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-create">

    <h1 style="color: white"><?= Html::encode($this->title) ?></h1>
    <p style="color: red">Nama dan NPM tidak boleh sama</p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    

</div>
<p><a class="btn btn-lg btn-warning" href="?r=user">Kembali</a></p>

