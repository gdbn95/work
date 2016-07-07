<?php
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin()?>

<?= $form->field($model, 'name')?>
<?php ActiveForm::end()?>