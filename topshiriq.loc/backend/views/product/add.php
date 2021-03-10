<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
])?>
	<div class="row">
		<div class="col-12">
			<h1>Mahsulot qo'shish</h1>

		    <?= $form->field($mahsulot, 'nomi') ?>
		    <?= $form->field($mahsulot, 'narxi') ?>
		    <?= $form->field($mahsulot, 'category') ?>
		    <?= $form->field($mahsulot, 'reyting') ?>

    		<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
    	</div>
    </div>

<?php ActiveForm::end() ?>
