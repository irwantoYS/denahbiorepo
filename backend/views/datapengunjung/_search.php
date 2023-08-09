<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\DatapengunjungSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="datapengunjung-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pengunjung') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'waktu') ?>

    <?= $form->field($model, 'keperluan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
