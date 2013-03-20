<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $model Cv2VeiculosVeiculos */
/* @var $form CActiveForm */
?>

 <div class="TituloPaginas">Dados do Veículo</div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv2-veiculos-veiculos-form',
	'enableAjaxValidation'=>false,
'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    ),
)); ?>

	

	<?php echo $form->errorSummary(array($veiculos,$onibus)); ?>
<div class="CaixaPaginas">
	<div class="DivCamposVeiculos">
		<span class="NomeUsuario"><?php echo $form->labelEx($veiculos,'Descrição do veículo (ex: Ford 430) '); ?>
                    <br>
		<?php echo $form->textField($veiculos,'descricao',array('size'=>60,'maxlength'=>150)); ?> </span>
		<?php echo $form->error($veiculos,'descricao'); ?>
        </div>
	
</div>
 <div class="TituloPaginas">Fotos</div>
<div class="CaixaPaginas">

	<div class="DivFotosVeiculos">
      
         <div style="float:left;margin-right:10px;">
		<?php echo $form->labelEx($veiculos,'Adicionar'); ?>
        
		<?php echo $form->fileField($veiculos,'foto_1',array('rows'=>10, 'cols'=>83)); ?>
         </div>
		<?php echo $form->error($veiculos,'foto_1'); ?>
	
   
    
   
          <div style="float:left;margin-right:10px;">
		<?php echo $form->labelEx($veiculos,'Adicionar'); ?>
		<?php echo $form->fileField($veiculos,'foto_2',array('rows'=>10, 'cols'=>83)); ?>
              </div>
		<?php echo $form->error($veiculos,'foto_2'); ?>
	
    
    
          <div style="float:left;margin-right:10px;">
		<?php echo $form->labelEx($veiculos,'Adicionar'); ?>
		<?php echo $form->fileField($veiculos,'foto_3',array('rows'=>10, 'cols'=>83)); ?>
              </div>
		<?php echo $form->error($veiculos,'foto_3'); ?>
    
    
          <div style="float:left;margin-right:10px;">
		<?php echo $form->labelEx($veiculos,'Adicionar'); ?>
		<?php echo $form->fileField($veiculos,'foto_4',array('rows'=>10, 'cols'=>83)); ?>
              </div>
		<?php echo $form->error($veiculos,'foto_4'); ?>
	
    
    
          <div style="float:left;margin-right:10px;">
		<?php echo $form->labelEx($veiculos,'Adicionar'); ?>
		<?php echo $form->fileField($veiculos,'foto_5',array('rows'=>10, 'cols'=>83)); ?>
              </div>
		<?php echo $form->error($veiculos,'foto_5'); ?>
	
    
   
          <div style="float:left;margin-right:10px;">
		<?php echo $form->labelEx($veiculos,'Adicionar'); ?>
		<?php echo $form->fileField($veiculos,'foto_6',array('rows'=>10, 'cols'=>83)); ?>
              </div>
		<?php echo $form->error($veiculos,'foto_6'); ?>
     <div style="clear:both"></div>
</div>
    
</div>
 
 <div class="TituloPaginas">Localização do veículo</div>
    <div class="CaixaPaginas">
      <div class="DivCamposVeiculos">
  <?php echo $form->labelEx($veiculos,'Localização'); ?>
            <br>
<?php 
$localizacoes = Cv2Localizacoes::model()->findAll('id_vendedor = :id_vendedor', array(':id_vendedor' => 20));
 $localizacoes = CHtml::listData($localizacoes, 'id', 'descricao');
?>
 <?php echo $form->dropDownList($veiculos, 'id_localizacao', $localizacoes, array('class'=>'Input','empty' => 'Selecione')); ?>
 </span> 
 <?php echo $form->error($veiculos,'id_localizacao'); ?>
 </div>
        </div> 
        <div class="TituloPaginas">Características do Veículo</div>
<div class="CaixaPaginas">

    <div class="DivCaracteristicas">
       
  <?php echo $form->labelEx($veiculos,'Marca'); ?>
            <br>
<?php 
$marcas = Cv2VeiculosMarcas::model()->findAll('id_tipo = :id_tipo', array(':id_tipo' => 4));
 $marcas = CHtml::listData($marcas, 'id', 'descricao');
?>
 <?php echo $form->dropDownList($veiculos, 'id_marca', $marcas, array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($veiculos,'id_marca'); ?>
 </div>
    
     <div class="DivCaracteristicas">
    <?php echo $form->labelEx($onibus,'modelo'); ?>
          <br>
		<?php echo $form->textField($onibus,'modelo',array('class'=>'Input')); ?>
		<?php echo $form->error($onibus,'modelo'); ?>
    </div>
   
 <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($veiculos,'ano'); ?>
            <br>
 <?php echo $form->dropDownList($veiculos, 'ano', range(date('Y'), 1960, -1)
      ,array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($veiculos,'ano'); ?>
 </div>
    
    
     <div class="DivCaracteristicas">
		<?php echo $form->labelEx($onibus,'quilometros'); ?>
		<?php echo $form->textField($onibus,'quilometros',array('class'=>'Input')); ?>
		<?php echo $form->error($onibus,'quilometros'); ?>
	</div>
    
     <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($onibus,'combustivel'); ?>
            <br>
 <?php echo $form->dropDownList($onibus, 'combustivel',array('Álcool', 'Álcool e GNV', 'Diesel', 'Gasolina', 'Gas. Álc. e GNV (tetraflex)','Gas. e Álc. (flex)', 'Gas. e Elétrico (híbrido)', 'Gas. e GNV', 'Outro'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($onibus,'combustivel'); ?>
 </div>
    
    <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($onibus,'quantidade_pessoas'); ?>
            <br>
 <?php echo $form->dropDownList($onibus, 'quantidade_pessoas',array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'mais de 10'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($onibus,'quantidade_pessoas'); ?>
 </div>
    
     <div class="DivCaracteristicas">
        
  <?php echo $form->labelEx($onibus,'Direção'); ?>
            <br>
 <?php echo $form->dropDownList($onibus, 'direcao',array('Assistida', 'Elétrica', 'Hidráulica', 'Mecânica'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($onibus,'direcao'); ?>
 </div>
    
    
      <div class="DivCaracteristicas">
    
  <?php echo $form->labelEx($onibus,'transmissao'); ?>
            <br>
 <?php echo $form->dropDownList($onibus, 'transmissao',array('Automático', 'Automático Sequencial', 'Automatizado', 'CVT', 'Manual', 'Semi-automático'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($onibus,'transmissao'); ?>
 </div>
    
     <div class="DivCaracteristicas">
    <?php echo $form->labelEx($onibus,'carroceria'); ?>
          <br>
		<?php echo $form->textField($onibus,'carroceria',array('class'=>'Input')); ?>
		<?php echo $form->error($onibus,'carroceria'); ?>
    </div>
    
    <div class="DivCaracteristicas">
    <?php echo $form->labelEx($onibus,'Andares'); ?>
          <br>
		<?php echo $form->textField($onibus,'quantidade_andares',array('class'=>'Input')); ?>
		<?php echo $form->error($onibus,'quantidade_andares'); ?>
    </div>
        
  <div class="DivCaracteristicas">
       
  <?php echo $form->labelEx($veiculos,'Único dono? '); ?>
            <br>
 <?php echo $form->dropDownList($veiculos, 'unico_dono', array('Sim', 'Não'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($veiculos,'unico_dono'); ?>
 </div>
  
     <div class="DivCaracteristicas">
       
  <?php echo $form->labelEx($veiculos,'Condições do veículo?'); ?>
            <br>
 <?php echo $form->dropDownList($veiculos, 'condicoes', array('Novo', 'Usado'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($veiculos,'condicoes'); ?>
 </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">
		<?php echo $form->labelEx($veiculos,'Valor (R$)'); ?>
		<?php echo $form->textField($veiculos,'valor',array('size'=>20,'maxlength'=>20,'class'=>'Input')); ?>
		<?php echo $form->error($veiculos,'valor'); ?>
	</div>
     <div class="DivCaracteristicas">
		<?php echo $form->labelEx($veiculos,'Valor promocional (R$)'); ?>
		<?php echo $form->textField($veiculos,'valor_promocional',array('size'=>20,'maxlength'=>20,'class'=>'Input')); ?>
		<?php echo $form->error($veiculos,'valor_promocional'); ?>
	</div>
    
    <div style="clear:both"></div>
    
</div>
        

<div class="TituloPaginas">Itens adicionais do veículo</div>
<div class="CaixaPaginas">
    <?php
                $itens = Cv2Itens::model()->with(array('itensConfortoOnibus'))->findAll();
                 $itens2 = Cv2Itens::model()->with(array('itensExteriorOnibus'))->findAll();
                  $itens3 = Cv2Itens::model()->with(array('itensSegurancaOnibus'))->findAll();
                    $itens4 = Cv2Itens::model()->with(array('itensSomOnibus'))->findAll();
                  
                  $itens = CHtml::listData($itens, 'descricao', 'descricao');   
                 $itens2 = CHtml::listData($itens2, 'descricao', 'descricao');
                   $itens3 = CHtml::listData($itens3, 'descricao', 'descricao');
                     $itens4 = CHtml::listData($itens4, 'descricao', 'descricao');
                 
            ?>
    <div class="SubTituloPaginas">Conforto</div>
    <div class="DivAdicionais" style="width:280px;">
       
              <?php   
                echo $form->checkBoxList($onibus, 'conforto', $itens, array( 'separator' => '<br>'));
                ?>
          </div>
    
    <div style="clear:both"></div>
     <div class="SubTituloPaginas">Exterior</div>
    <div class="DivAdicionais" style="width:280px;">
    

               <?php echo $form->checkBoxList($onibus, 'exterior', $itens2, array('template' => '<div class="span4">{input} {label}<br></div>', 'separator' => ' '));
                ?>
    </div>
     
     <div style="clear:both"></div>
     <div class="SubTituloPaginas">Segurança</div>
      <div class="DivAdicionais" style="width:280px;">
     <?php echo $form->checkBoxList($onibus, 'seguranca', $itens3, array('template' => '<div class="span4">{input} {label}<br></div>', 'separator' => ' '));
                ?>
      </div>
     
      <div style="clear:both"></div>
     <div class="SubTituloPaginas">Som</div>
      <div class="DivAdicionais" style="width:280px;">
     <?php echo $form->checkBoxList($onibus, 'som', $itens4, array('template' => '<div class="span4">{input} {label}<br></div>', 'separator' => ' '));
                ?>
      </div>
     

    
    <div style="clear:both"></div>
</div>

<div class="TituloPaginas">Observações</div>
<div class="CaixaPaginas">
    
    <div class="DivCamposVeiculos">
		<?php echo $form->labelEx($veiculos,'observacoes'); ?>
		<?php echo $form->textArea($veiculos,'observacoes',array('rows'=>10, 'cols'=>83)); ?>
		<?php echo $form->error($veiculos,'observacoes'); ?>
	</div>

    
</div>

<div class="DivCampos">
<?php echo $form->checkBox($veiculos,'anunciado',array('checked'=>'checked')); ?>
    <?php echo $form->labelEx($veiculos,'anunciado'); ?>
<?php echo $form->error($veiculos,'anunciado'); ?>

    </div>
    <div class="DivCampos">

<?php echo $form->checkBox($veiculos,'destaque'); ?>
    <?php echo $form->labelEx($veiculos,'destaque'); ?>
<?php echo $form->error($veiculos,'destaque'); ?>

    </div>

<div style="clear:both;"></div>
    <div class="DivCampos">
        <button style="text-align: right" type="submit" class="BotaoPadrao1"><span><?php echo $veiculos->isNewRecord ? 'Criar' : 'Salvar'; ?></span></button>	
   </div>
        <div style="clear:both"></div>
        

<?php $this->endWidget(); ?>

<!-- form -->