<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Datapengunjung $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="datapengunjung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pengunjung')->textInput() ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'waktu')->textInput() ?>

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
