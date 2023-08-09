<?php

use common\models\Datapengunjung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\DatapengunjungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Datapengunjungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapengunjung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Datapengunjung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pengunjung',
            'nama_lengkap',
            'tanggal',
            'waktu',
            'keperluan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Datapengunjung $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pengunjung' => $model->id_pengunjung]);
                 }
            ],
        ],
    ]); ?>


</div>
