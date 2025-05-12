<?php
// Questo file è un template Gii: i placeholder <?= ... ?> verranno sostituiti dal generatore.
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var <?= $searchModelClass ?> $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="search-container">
    <?= "<?php " ?>$form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'enableClientValidation' => true,
    ]); ?>

    <?php foreach ($attributes as $attribute): ?>
        <?= "<?= " ?>$form->field($model, '<?= $attribute ?>')->textInput() ?>
    <?php endforeach; ?>

    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(Yii::t('app', 'Cerca'), ['class' => 'btn btn-primary']) ?>
        <?= "<?= " ?>Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>
    <?= "<?php " ?>ActiveForm::end(); ?>
</div> 