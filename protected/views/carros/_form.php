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

	

	<?php echo $form->errorSummary(array($veiculos,$carros)); ?>
<div class="CaixaPaginas">
	<div class="DivCamposVeiculos">
		<span class="NomeUsuario"><?php echo $form->labelEx($veiculos,'Descrição do veículo (ex: Corsa, Palio, Corolla) '); ?>
                    <br>
		<?php echo $form->textField($veiculos,'descricao',array('size'=>60,'maxlength'=>150)); ?> </span>
		<?php echo $form->error($veiculos,'descricao'); ?>
        </div>
	
</div>
 <div class="TituloPaginas">Fotos</div>
<div class="CaixaPaginas">

	<div class="DivFotosVeiculos">
             <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
              <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
               <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
                <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
                 <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
                  <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
             
      
        <script>
function getFilePathFromDialog() {
    document.getElementById('fileBrowser').click();
    document.getElementById('filePath').value = document.getElementById('fileBrowser').value;
}
        </script>
        
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" onlick="getFilePathFromDialog();">
<input type="text" id="filePath" name="filePath" /><br />
<input type="file" id="fileBrowser" name="fileBrowser" style="visibility:hidden; display:none;" />

             <div style="float:left;margin-right:10px;"><a href="index.php"> <?php echo CHtml::image('../../imagens/' . $veiculos->id_vendedor . '/' . $veiculos->foto_1, ''); ?><br>Adicionar</a></div>
             
		<div style="float:left;margin-right:10px;">
                    <?php echo $form->labelEx($veiculos,'Adicionar'); ?>
		<?php echo $form->fileField($veiculos,'foto_1'); ?>
                </div>
		<?php echo $form->error($veiculos,'foto_1'); ?>
            
            
   <div style="width:104px; height:104px;" > <?php  //echo CHtml::image('../../imagens/' . $veiculos->id_vendedor . '/' . $veiculos->foto_1, ''); ?> </div>
    
   
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
$localizacoes = Cv2Localizacoes::model()->findAll('id_vendedor = :id_vendedor', array(':id_vendedor' => Yii::app()->user->id_vendedor));
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
$marcas = Cv2VeiculosMarcas::model()->findAll('id_tipo = :id_tipo', array(':id_tipo' => 1));
 $marcas = CHtml::listData($marcas, 'id', 'descricao');
?>
 <?php echo $form->dropDownList($veiculos, 'id_marca', $marcas, array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($veiculos,'id_marca'); ?>
 </div>
    
      <div class="DivCaracteristicas">
    <?php echo $form->labelEx($carros,'modelo'); ?>
          <br>
		<?php echo $form->textField($carros,'modelo',array('class'=>'Input')); ?>
		<?php echo $form->error($carros,'modelo'); ?>
    </div>
    
    
 <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($veiculos,'ano'); ?>
            <br>
 <?php echo $form->dropDownList($veiculos, 'ano', range(date('Y'), 1960, -1)
      ,array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($veiculos,'ano'); ?>
 </div>
    
    <div style="clear:both"></div>

   <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($carros,'portas'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'portas', range(1, 5)
      ,array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($carros,'portas'); ?>
 </div>
    
    <div class="DivCaracteristicas">
		<?php echo $form->labelEx($carros,'quilometros'); ?>
		<?php echo $form->textField($carros,'quilometros',array('class'=>'Input')); ?>
		<?php echo $form->error($carros,'quilometros'); ?>
	</div>
    
    
        <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($carros,'combustivel'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'combustivel',array('Álcool', 'Álcool e GNV', 'Diesel', 'Gasolina', 'Gas. Álc. e GNV (tetraflex)','Gas. e Álc. (flex)', 'Gas. e Elétrico (híbrido)', 'Gas. e GNV', 'Outro'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($carros,'combustivel'); ?>
 </div>

    <div style="clear:both"></div>
    
    
       <div class="DivCaracteristicas">
        
  <?php echo $form->labelEx($carros,'Direção'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'direcao',array('Assistida', 'Elétrica', 'Hidráulica', 'Mecânica'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($carros,'direcao'); ?>
 </div>
    
    
   <div class="DivCaracteristicas">
    
  <?php echo $form->labelEx($carros,'transmissao'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'transmissao',array('Automático', 'Automático Sequencial', 'Automatizado', 'CVT', 'Manual', 'Semi-automático'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($carros,'transmissao'); ?>
 </div>
        
    
       <div class="DivCaracteristicas">
       
  <?php echo $form->labelEx($carros,'cor'); ?>
            <br>
 <?php echo $form->dropDownList($carros, 'cor', array('Amarelo', 'Azul', 'Branco', 'Cinza', 'Dourado', 'Laranja', 'Prata', 'Preto', 'Verde', 'Vermelho', 'Vinho', 'Outro'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($carros,'cor'); ?>
 </div>
    
    
    
    <div style="clear:both"></div>
    
  <div class="DivCaracteristicas">
       
  <?php echo $form->labelEx($veiculos,'unico_dono'); ?>
            <br>
 <?php echo $form->dropDownList($veiculos, 'unico_dono', array('Sim', 'Não'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($veiculos,'unico_dono'); ?>
 </div>
    
    
     <div class="DivCaracteristicas">
       
  <?php echo $form->labelEx($veiculos,'condicoes'); ?>
            <br>
 <?php echo $form->dropDownList($veiculos, 'condicoes', array('Novo', 'Usado'), array('class'=>'Select','empty' => 'Selecione')); ?>
 
 <?php echo $form->error($veiculos,'condicoes'); ?>
 </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">
		<?php echo $form->labelEx($veiculos,'valor'); ?>
		<?php echo $form->textField($veiculos,'valor',array('size'=>20,'maxlength'=>20,'class'=>'Input')); ?>
		<?php echo $form->error($veiculos,'valor'); ?>
	</div>
     <div class="DivCaracteristicas">
		<?php echo $form->labelEx($veiculos,'valor_promocional'); ?>
		<?php echo $form->textField($veiculos,'valor_promocional',array('size'=>20,'maxlength'=>20,'class'=>'Input')); ?>
		<?php echo $form->error($veiculos,'valor_promocional'); ?>
	</div>
    
    <div style="clear:both"></div>
    
</div>
        

<div class="TituloPaginas">Itens adicionais do veículo</div>
<div class="CaixaPaginas">

    <?php
                $itens = Cv2Itens::model()->with(array('itensConforto'))->findAll();
                 $itens2 = Cv2Itens::model()->with(array('itensExterior'))->findAll();
                  $itens3 = Cv2Itens::model()->with(array('itensSeguranca'))->findAll();
                    $itens4 = Cv2Itens::model()->with(array('itensSom'))->findAll();
                  
                  $itens = CHtml::listData($itens, 'descricao', 'descricao');   
                 $itens2 = CHtml::listData($itens2, 'descricao', 'descricao');
                   $itens3 = CHtml::listData($itens3, 'descricao', 'descricao');
                     $itens4 = CHtml::listData($itens4, 'descricao', 'descricao');
                 
            ?>
    <div class="SubTituloPaginas">Conforto</div>
    <div class="DivAdicionais" style="width:280px;">
       
              <?php   
                echo $form->checkBoxList($carros, 'conforto', $itens, array( 'separator' => '<br>'));
                ?>
          </div>
    <div style="clear:both"></div>
     <div class="SubTituloPaginas">Exterior</div>
    <div class="DivAdicionais" style="width:280px;">
    

               <?php echo $form->checkBoxList($carros, 'exterior', $itens2, array('template' => '<div class="span4">{input} {label}<br></div>', 'separator' => ' '));
                ?>
    </div>
     <div style="clear:both"></div>
     <div class="SubTituloPaginas">Segurança</div>
      <div class="DivAdicionais" style="width:280px;">
     <?php echo $form->checkBoxList($carros, 'seguranca', $itens3, array('template' => '<div class="span4">{input} {label}<br></div>', 'separator' => ' '));
                ?>
      </div>
     
      <div style="clear:both"></div>
     <div class="SubTituloPaginas">Som</div>
      <div class="DivAdicionais" style="width:280px;">
     <?php echo $form->checkBoxList($carros, 'som', $itens4, array('template' => '<div class="span4">{input} {label}<br></div>', 'separator' => ' '));
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