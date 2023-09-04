<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var app\models\Datapengunjung $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="datapengunjung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pegawai')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'freezer')->dropDownList(
    ['DF.B.8' => 'DF.B.8', 'DF.B.9' => 'DF.B.9', 'DF.B.10' => 'DF.B.10', 'DF.B.11' => 'DF.B.11']
) ?>
 <div style="text-align: center; margin-top: 20px;">
        <?= Html::img("@web/img/Group16.png", ['style' => 'max-width: 80%;']) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
