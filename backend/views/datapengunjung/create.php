<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Datapengunjung $model */

$this->title = 'Create Datapengunjung';
$this->params['breadcrumbs'][] = ['label' => 'Datapengunjungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapengunjung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
