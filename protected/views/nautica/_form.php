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
	

	<?php echo $form->errorSummary(array($veiculos,$nautica)); ?>
<div class="CaixaPaginas">
	<div class="DivCamposVeiculos">
		<span class="NomeUsuario"><?php echo $form->labelEx($veiculos,'Descrição do veículo (ex: Jet ski 2012)'); ?>
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
      
  <?php echo $form->labelEx($nautica,'Tipo'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'tipo_veiculo',array('Barcos','Embarcações Infláveis','Hovercraft','Jet Ski','Hovercraft','Lanchas','Motores','Pedalinho','Veleiro Monocasco e Multicasco','Outros'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($nautica,'tipo_veiculo'); ?>
 </div>
    
    <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($veiculos,'ano'); ?>
            <br>
 <?php echo $form->dropDownList($veiculos, 'ano', range(date('Y'), 1960, -1)
      ,array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($veiculos,'ano'); ?>
 </div>
    
      <div class="DivCaracteristicas">
		<?php echo $form->labelEx($nautica,'calado'); ?>
		<?php echo $form->textField($nautica,'calado',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'calado'); ?>
	</div>
    
    <div class="DivCaracteristicas">
		<?php echo $form->labelEx($nautica,'comprimento'); ?>
		<?php echo $form->textField($nautica,'comprimento',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'comprimento'); ?>
	</div>
    
     <div class="DivCaracteristicas">
		<?php echo $form->labelEx($nautica,'marca'); ?>
		<?php echo $form->textField($nautica,'marca',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'marca'); ?>
	</div>
    
      <div class="DivCaracteristicas">
    <?php echo $form->labelEx($nautica,'modelo'); ?>
          <br>
		<?php echo $form->textField($nautica,'modelo',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'modelo'); ?>
    </div>
    
     <div class="DivCaracteristicas">
    <?php echo $form->labelEx($nautica,'pontal'); ?>
          <br>
		<?php echo $form->textField($nautica,'pontal',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'pontal'); ?>
    </div>
    
    <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($nautica,'banheiro'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'banheiro',array('1', '2', '3', 'mais de 3'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($nautica,'banheiro'); ?>
 </div>
    
     <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($nautica,'Camarote'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'camarotes',array('1', '2', '3', 'mais de 3'), array('class'=>'Select','empty' => 'Selecione')); ?>
 <?php echo $form->error($nautica,'camarotes'); ?>
 </div>
    
    
     <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($nautica,'Quantidade de motores'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'quantidade_motores', array('1', '2', '3', 'mais de 3'), array('class'=>'Select','empty' => 'Selecione')); ?>
 <?php echo $form->error($nautica,'quantidade_motores'); ?>
 </div>
    
      <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($nautica,'Quantidade de pessoas'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'quantidade_pessoas', array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'mais de 10'), array('class'=>'Select','empty' => 'Selecione')); ?>
 <?php echo $form->error($nautica,'quantidade_pessoas'); ?>
 </div>
    
     <div class="DivCaracteristicas">
    <?php echo $form->labelEx($nautica,'capacidade_tanque'); ?>
          <br>
		<?php echo $form->textField($nautica,'capacidade_tanque',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'capacidade_tanque'); ?>
    </div>
    
        <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($nautica,'combustivel'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'combustivel',array('Diesel', 'Gasolina'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($nautica,'combustivel'); ?>
 </div>

     <div class="DivCaracteristicas">
    <?php echo $form->labelEx($nautica,'horas_uso'); ?>
          <br>
		<?php echo $form->textField($nautica,'horas_uso',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'horas_uso'); ?>
    </div>
       <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($nautica,'marca_motor'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'marca_motor', array('Evinrude', 'Honda', 'Johnson', 'Mercury', 'Suzuki', 'Tohatsu', 'Yamaha', 'Outras Marcas'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($nautica,'marca_motor'); ?>
 </div>
    
     <div class="DivCaracteristicas">
      
  <?php echo $form->labelEx($nautica,'material'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'material',  array('Alumínio', 'Fibra de Vidro', 'Madeira', 'Outro'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($nautica,'material'); ?>
 </div>
    
     <div class="DivCaracteristicas">
    <?php echo $form->labelEx($nautica,'potencia'); ?>
          <br>
		<?php echo $form->textField($nautica,'potencia',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'potencia'); ?>
    </div>
    
         <div class="DivCaracteristicas">
  <?php echo $form->labelEx($nautica,'tipo_motor'); ?>
            <br>
 <?php echo $form->dropDownList($nautica, 'tipo_motor',  array('2 tempos', '4 tempos'), array('class'=>'Select','empty' => 'Selecione')); ?>

 <?php echo $form->error($nautica,'tipo_motor'); ?>
 </div>
    
    <div class="DivCaracteristicas">
    <?php echo $form->labelEx($nautica,'ano_motor'); ?>
          <br>
		<?php echo $form->textField($nautica,'ano_motor',array('class'=>'Input')); ?>
		<?php echo $form->error($nautica,'ano_motor'); ?>
    </div>
    
    
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
                $itens = Cv2Itens::model()->with(array('itensEquipamentos'))->findAll();
                
                  
                  $itens = CHtml::listData($itens, 'descricao', 'descricao');   
            ?>
    <div class="SubTituloPaginas">Equipamentos</div>
    <div class="DivAdicionais" style="width:280px;">
       
              <?php   
                echo $form->checkBoxList($nautica, 'equipamentos', $itens, array( 'separator' => '<br>'));
                ?>
          </div>
    <div style="clear:both"></div>
    
<!--    <div class="SubTituloPaginas">Conforto</div>
    <div class="DivAdicionais" style="width:280px;">
        <input type="checkbox"> Abertura interna do porta-malas<br>
        <input type="checkbox"> Alarme de luzes acesas<br>
        <input type="checkbox"> Ar condicionado<br>
        <input type="checkbox"> Ar quente<br>
        <input type="checkbox"> Banco motorista com regulagem de altura<br>
        <input type="checkbox"> Banco traseiro retrátil<br>
        <input type="checkbox"> Bancos elétricos<br>
    </div>
    <div class="DivAdicionais" style="width:230px;">
        <input type="checkbox"> Bancos em couro<br>
        <input type="checkbox"> Computador de bordo<br>
        <input type="checkbox"> Faróis com regulagem interna<br>
        <input type="checkbox"> GPS<br>
        <input type="checkbox"> Piloto automático<br>
        <input type="checkbox"> Porta copos<br>
        <input type="checkbox"> Retrovisores elétricos<br>
    </div>
    <div class="DivAdicionais" style="width:180px;">
        <input type="checkbox"> Sensor de chuva<br>
        <input type="checkbox"> Sensor de estacionamento<br>
        <input type="checkbox"> Sensor de luz<br>
        <input type="checkbox"> Teto solar<br>
        <input type="checkbox"> Trava elétrica central<br>
        <input type="checkbox"> Vidros elétricos<br>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="SubTituloPaginas">Exterior</div>
    <div class="DivAdicionais" style="width:280px;">
        <input type="checkbox"> Capota Marítima<br>
        <input type="checkbox"> Limpador traseiro<br>
        <input type="checkbox"> Pára-choques na cor do veículo<br>
        <input type="checkbox"> Protetor de Caçamba<br>
        <input type="checkbox"> Quebra-mato<br>
    </div>
    <div class="DivAdicionais" style="width:220px;">
        <input type="checkbox"> Santo Antônio<br>
        <input type="checkbox"> Bancos elétricos<br>
        <input type="checkbox"> Suporte para estepe<br>
        <input type="checkbox"> Vidros verdes<br>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="SubTituloPaginas">Segurança</div>
    <div class="DivAdicionais" style="width:280px;">
        <input type="checkbox">Airbag de cortina<br>
        <input type="checkbox">Airbag laterais<br>
        <input type="checkbox">Airbag motorista<br>
        <input type="checkbox">Airbag passageiro<br>
        <input type="checkbox">Alarme<br>
        <input type="checkbox">Blindado<br>
        <input type="checkbox">Break light<br>
        <input type="checkbox">Controle de estabilidade<br>
    </div>
    <div class="DivAdicionais" style="width:230px;">
        <input type="checkbox">Controle de velocidade<br>
        <input type="checkbox">Desembaçador traseiro<br>
        <input type="checkbox">Distribuição eletrônica de frenagem<br>
        <input type="checkbox">Encosto de cabeça traseiro<br>
        <input type="checkbox">Encostro traseiro<br>
        <input type="checkbox">Faróis de neblina dianteiros<br>
        <input type="checkbox">Faróis de neblina traseiros<br>
        <input type="checkbox">Faróis de xenon<br>
    </div>
    <div class="DivAdicionais" style="width:180px;">
        <input type="checkbox">Farol de neblina<br>
        <input type="checkbox">Freios ABS<br>
        <input type="checkbox">Imobilizador de motor<br>
        <input type="checkbox">Rodas de liga leve<br>
        <input type="checkbox">Tração<br>
        <input type="checkbox">Tração 4x4<br>
        <input type="checkbox">Tração elétricas<br>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="SubTituloPaginas">Som</div>
    <div class="DivAdicionais" style="width:280px;">
        <input type="checkbox">AM/FM<br>
        <input type="checkbox">Bluetooth<br>
        <input type="checkbox">Carregador de CD<br>
        <input type="checkbox">Cartão SD<br>
        <input type="checkbox">CD player<br>
        <input type="checkbox">CD player com MP3<br>
    </div>
    <div class="DivAdicionais" style="width:220px;">
        <input type="checkbox">Controle de som no volante<br>
        <input type="checkbox">DVD player<br>
        <input type="checkbox">Entrada auxiliar<br>
        <input type="checkbox">Entrada USB<br>
        <input type="checkbox">Rádio toca fitas<br>
    </div>-->
    
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