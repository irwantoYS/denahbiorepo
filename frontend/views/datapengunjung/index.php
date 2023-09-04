<?php

use app\models\Datapengunjung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DatapengunjungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'History Pengunjung';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapengunjung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Identitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'id_pegawai',
            'tanggal',
            'jam',
            'keperluan',
            'freezer',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Datapengunjung $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
