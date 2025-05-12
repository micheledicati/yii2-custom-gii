<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var <?= $modelClass ?> $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="form-container">
    <?= "<?php " ?>$form = ActiveForm::begin(['enableClientValidation' => true]); ?>

    <!-- Campi generati dinamicamente -->
    <?php foreach ($attributes as $attribute): ?>
        <?= "<?= " ?>$form->field($model, '<?= $attribute ?>')->textInput() ?>
    <?php endforeach; ?>

    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(Yii::t('app', 'Salva'), ['class' => 'btn btn-success']) ?>
    </div>
    <?= "<?php " ?>ActiveForm::end(); ?> 