<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $model Cv2VeiculosVeiculos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visualizacoes'); ?>
		<?php echo $form->textField($model,'visualizacoes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_1'); ?>
		<?php echo $form->textField($model,'foto_1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_2'); ?>
		<?php echo $form->textField($model,'foto_2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_3'); ?>
		<?php echo $form->textField($model,'foto_3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_4'); ?>
		<?php echo $form->textField($model,'foto_4',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_5'); ?>
		<?php echo $form->textField($model,'foto_5',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_6'); ?>
		<?php echo $form->textField($model,'foto_6',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_promocional'); ?>
		<?php echo $form->textField($model,'valor_promocional',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacoes'); ?>
		<?php echo $form->textArea($model,'observacoes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_cadastro'); ?>
		<?php echo $form->textField($model,'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unico_dono'); ?>
		<?php echo $form->textField($model,'unico_dono'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'id_vendedor'); ?>
		<?php echo $form->textField($model,'id_vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_marca'); ?>
		<?php echo $form->textField($model,'id_marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo'); ?>
		<?php echo $form->textField($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_localizacao'); ?>
		<?php echo $form->textField($model,'id_localizacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->