<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Datapengunjung $model */

$this->title = 'Update Data Pengunjung: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => ' Update Data Pengunjung', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datapengunjung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
