<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $model Cv2VeiculosVeiculos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv2-veiculos-veiculos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($veiculos); ?>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'descricao'); ?>
		<?php echo $form->textField($veiculos,'descricao',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($veiculos,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'visualizacoes'); ?>
		<?php echo $form->textField($veiculos,'visualizacoes'); ?>
		<?php echo $form->error($veiculos,'visualizacoes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'foto_1'); ?>
		<?php echo $form->textField($veiculos,'foto_1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($veiculos,'foto_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'foto_2'); ?>
		<?php echo $form->textField($veiculos,'foto_2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($veiculos,'foto_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'foto_3'); ?>
		<?php echo $form->textField($veiculos,'foto_3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($veiculos,'foto_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'foto_4'); ?>
		<?php echo $form->textField($veiculos,'foto_4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($veiculos,'foto_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'foto_5'); ?>
		<?php echo $form->textField($veiculos,'foto_5',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($veiculos,'foto_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'foto_6'); ?>
		<?php echo $form->textField($veiculos,'foto_6',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($veiculos,'foto_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'valor'); ?>
		<?php echo $form->textField($veiculos,'valor',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($veiculos,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'valor_promocional'); ?>
		<?php echo $form->textField($veiculos,'valor_promocional',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($veiculos,'valor_promocional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'itens'); ?>
		<?php echo $form->textArea($veiculos,'itens',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($veiculos,'itens'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'observacoes'); ?>
		<?php echo $form->textArea($veiculos,'observacoes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($veiculos,'observacoes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'data_cadastro'); ?>
		<?php echo $form->textField($veiculos,'data_cadastro'); ?>
		<?php echo $form->error($veiculos,'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'ano'); ?>
		<?php echo $form->textField($veiculos,'ano'); ?>
		<?php echo $form->error($veiculos,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'unico_dono'); ?>
		<?php echo $form->textField($veiculos,'unico_dono'); ?>
		<?php echo $form->error($veiculos,'unico_dono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'novo'); ?>
		<?php echo $form->textField($veiculos,'novo'); ?>
		<?php echo $form->error($veiculos,'novo'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($veiculos,'id_localizacao'); ?>
		<?php echo $form->textField($veiculos,'id_localizacao'); ?>
		<?php echo $form->error($veiculos,'id_localizacao'); ?>
	</div>
        
        
        

       
        <div class="DivCampos">
        <span class="NomeUsuario">
  <?php echo $form->labelEx($carros,'direcao'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'direcao',array('Assistida', 'Elétrica', 'Hidráulica', 'Mecânica'), array('class'=>'Input','empty' => 'Selecione')); ?>
 </span> 
 <?php echo $form->error($carros,'direcao'); ?>
 </div>
        
        
          <div class="DivCampos">
        <span class="NomeUsuario">
  <?php echo $form->labelEx($carros,'cor'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'cor', array('Amarelo', 'Azul', 'Branco', 'Cinza', 'Dourado', 'Laranja', 'Prata', 'Preto', 'Verde', 'Vermelho', 'Vinho', 'Outro'), array('class'=>'Input','empty' => 'Selecione')); ?>
 </span> 
 <?php echo $form->error($carros,'cor'); ?>
 </div>
    
        
       <div class="DivCampos">
        <span class="NomeUsuario">
  <?php echo $form->labelEx($carros,'combustivel'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'combustivel',array('Álcool', 'Álcool e GNV', 'Diesel', 'Gasolina', 'Gas. Álc. e GNV (tetraflex)','Gas. e Álc. (flex)', 'Gas. e Elétrico (híbrido)', 'Gas. e GNV', 'Outro'), array('class'=>'Input','empty' => 'Selecione')); ?>
 </span> 
 <?php echo $form->error($carros,'combustivel'); ?>
 </div>
        
        <div class="DivCampos">
        <span class="NomeUsuario">
  <?php echo $form->labelEx($carros,'transmissao'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'transmissao',array('Automático', 'Automático Sequencial', 'Automatizado', 'CVT', 'Manual', 'Semi-automático'), array('class'=>'Input','empty' => 'Selecione')); ?>
 </span> 
 <?php echo $form->error($carros,'transmissao'); ?>
 </div>
        
        <div class="DivCampos">
        <span class="NomeUsuario">
  <?php echo $form->labelEx($veiculos,'Marca'); ?>
            <br>
<?php 
$marcas = Cv2VeiculosMarcas::model()->findAll('id_tipo = :id_tipo', array(':id_tipo' => 1));
 $marcas = CHtml::listData($marcas, 'id', 'descricao');
?>
 <?php echo $form->dropDownList($veiculos, 'id_marca', $marcas, array('class'=>'Input','empty' => 'Selecione')); ?>
 </span> 
 <?php echo $form->error($veiculos,'id_marca'); ?>
 </div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($veiculos->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->