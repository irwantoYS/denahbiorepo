<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Datapengunjung $model */

$this->title = 'Update Datapengunjung: ' . $model->id_pengunjung;
$this->params['breadcrumbs'][] = ['label' => 'Datapengunjungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengunjung, 'url' => ['view', 'id_pengunjung' => $model->id_pengunjung]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datapengunjung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
