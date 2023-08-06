<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Datapengunjung $model */

$this->title = 'Masukkan Data';
$this->params['breadcrumbs'][] = ['label' => 'Masukkan Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapengunjung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
