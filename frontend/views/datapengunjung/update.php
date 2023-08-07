<?php

use yii\helpers\Html;


/** @var yii\web\View $this */
/** @var app\models\Datapengunjung $model */

$this->title = 'Ubah Identitas : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => ' Ubah Identitas ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'ubah';
?>
<div class="datapengunjung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

