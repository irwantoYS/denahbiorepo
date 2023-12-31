<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Datapengunjung $model */


$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Identitas Diri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datapengunjung-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'id_pegawai',
            'tanggal',
            'jam',
            'keperluan',
            'freezer',
        ],
    ]) ?>
 <div style="text-align: center;">
        <?= Html::img("@web/img/Group16.png", ['style' => 'max-width: 80%;']) ?>
    </div>
<!-- <?= html::img("@web/img/denah.jpeg") ?> -->
</div>
