
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv2-vendedores-form',
	'enableAjaxValidation'=>false,
)); ?>
          <div class="TituloPaginas">Novo cliente</div>
<div class="CaixaPaginas">

     <h1>Dados do usuário</h1>
	<div id="usuarioCampos" class="DivCampos">
      <span class="NomeUsuario">
		<?php echo $form->labelEx($usuarios,'usuário'); ?>
          <br>
		<?php echo $form->textField($usuarios,'usuario', array('class'=>'Input', 'id'=>'usuario', 'type'=>'text')); ?>
      </span>
		<?php echo $form->error($usuarios,'usuario'); ?>
	</div>
     
      <div id="senhaCampos" class="DivCampos">
           <span class="NomeUsuario">
		<?php echo $form->labelEx($usuarios,'senha'); ?>
               <br>
		<?php echo $form->textField($usuarios,'senha',array('maxlength'=>12,'class'=>'Input', 'id'=>'senha', 'type'=>'password')); ?>
		 </span>
                    <?php echo $form->error($usuarios,'senha'); ?>
	</div>
     
      <div style="clear:both;margin-bottom:35px"></div>
    <h1>Tipo de cliente</h1>
	<div id="tipoCampos" class="DivCampos">
    <?php
                $tipo = array(
                    'F' => 'Físico',
                    'J' => 'Jurídico'
                );
                    echo $form->radioButtonList($usuarios, 'tipo', $tipo, array('template' => '<div id="tipo" class="span4">{input} {label}</div>', 'separator' => ''));
                ?>
             <?php echo $form->error($usuarios,'tipo'); ?>
    </div>
    <div style="clear:both;margin-bottom:35px"></div>
    
        <h1>Dados do cliente</h1>
        
            <script>
    	$(document).ready(function() {
        	var fn = function() {
              $('.Cv2Usuarios_tipo_0')[$('#Cv2Usuarios_tipo_0').is(':checked') ? 'show' : 'hide']();
              $('.Cv2Usuarios_tipo_1')[$('#Cv2Usuarios_tipo_0').is(':checked') ? 'hide' : 'show']();
          };
        	$('#Cv2Usuarios_tipo_0, #Cv2Usuarios_tipo_1').on('change', fn);
        	fn();
      });
    </script>
        
         <div style="overflow: hidden">
	<div id="nomeCampos" class="DivCampos">
            <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'nome'); ?>
                <br>
		<?php echo $form->textField($vendedores,'nome',array('class'=>'Input', 'id'=>'nome', 'type'=>'text')); ?>
            </span>
		<?php echo $form->error($vendedores,'nome'); ?>
	</div>
        
        <div id="emailCampos" class="DivCampos">
              <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'email'); ?>
                  <br>
		<?php echo $form->textField($vendedores,'email',array('class'=>'Input', 'id'=>'email', 'type'=>'text')); ?>
              </span>
		<?php echo $form->error($vendedores,'email'); ?>
	</div>
        
        <div class="DivCampos Cv2Usuarios_tipo_0">
             <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'cpf'); ?>
            <br>
		<?php echo $form->textField($vendedores,'cpf',array('maxlength'=>11, 'class'=>'Input', 'id'=>'cpf', 'type'=>'text')); ?>
             </span>
		<?php echo $form->error($vendedores,'cpf'); ?>
	</div>

         </div>
        
<div style="overflow: hidden">
        <div class="DivCampos Cv2Usuarios_tipo_1">
              <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'cnpj'); ?>
            <br>
		<?php echo $form->textField($vendedores,'cnpj',array('maxlength'=>14, 'class'=>'Input', 'id'=>'cnpj', 'type'=>'text')); ?>
            </span>
		<?php echo $form->error($vendedores,'cnpj'); ?>
	</div>
        
        <div class="DivCampos Cv2Usuarios_tipo_1">
             <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'razao_social'); ?>
                  <br> 
		<?php echo $form->textField($vendedores,'razao_social',array('class'=>'Input', 'id'=>'razaoSocial', 'type'=>'text')); ?>
                  </span>
		<?php echo $form->error($vendedores,'razao_social'); ?>
	</div>
  
	<div class="DivCampos Cv2Usuarios_tipo_1">
             <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'nome_fantasia'); ?>
                 <br> 
		<?php echo $form->textField($vendedores,'nome_fantasia',array('class'=>'Input', 'id'=>'nomeFantasia', 'type'=>'text')); ?>
             </span>
		<?php echo $form->error($vendedores,'nome_fantasia'); ?>
	</div>
</div>
             
       
 <div style="clear:both;margin-bottom:35px"></div>
	
   <h1>Dados do endereço</h1>
   <div id="descricaoCampos" class="DivCampos">
       <span class="NomeUsuario">
		<?php echo $form->labelEx($localizacoes,'descricao'); ?>
       <br>
		<?php echo $form->textField($localizacoes,'descricao',  array('class' => 'InputEndereco', 'id'=>'descricao', 'type'=>'text')); ?>
       </span>
		<?php echo $form->error($localizacoes,'descricao'); ?>
	</div>
   
      <div id="ruaCampos" class="DivCampos">
       <span class="NomeUsuario">
		<?php echo $form->labelEx($localizacoes,'rua'); ?>
       <br>
		<?php echo $form->textField($localizacoes,'rua',  array('class' => 'InputEndereco', 'id'=>'rua', 'type'=>'text')); ?>
       </span>
		<?php echo $form->error($localizacoes,'rua'); ?>
	</div>
   
    <div id="numeroCampos" class="DivCampos">
          <span class="NomeUsuario">
		<?php echo $form->labelEx($localizacoes,'Nº'); ?>
        <br>
		<?php echo $form->textField($localizacoes,'numero', array('class' => 'InputNumero', 'id'=>'numero', 'type'=>'text')); ?>
          </span>
		<?php echo $form->error($localizacoes,'numero'); ?>
	</div>
   
    <div id="complementoCampos" class="DivCampos">
         <span class="NomeUsuario">
		<?php echo $form->labelEx($localizacoes,'complemento'); ?>
             <br>
		<?php echo $form->textField($localizacoes,'complemento',array('class'=>'Input', 'id'=>'complemento', 'type'=>'text')); ?>
              </span>
		<?php echo $form->error($localizacoes,'complemento'); ?>
	</div>
   
     <div id="bairroCampos" class="DivCampos">
          <span class="NomeUsuario">
		<?php echo $form->labelEx($localizacoes,'bairro'); ?>
		<br>
                    <?php echo $form->textField($localizacoes,'bairro',array('class'=>'Input', 'id'=>'bairro', 'type'=>'text')); ?>
               </span>
		<?php echo $form->error($localizacoes,'bairro'); ?>
	</div>
   
     <div class="DivCampos">
          <span class="NomeUsuario">
<?php echo $form->labelEx($localizacoes,'Estado'); ?>
         <br>
<?php
$ufs = Cv2LocalizacoesUfs::model()->findAll();
$ufs = CHtml::listData($ufs, 'id', 'nome');
?>
<?php
echo $form->dropDownList($localizacoes, 'id_uf', $ufs, array('class'=>'Input','empty' => 'Selecione',
  'ajax' => array(
   'type' => 'POST',
   'url' => Yii::app()->createUrl('my/cidades'),
   'success' => 'function(data){$("select#Cv2Localizacoes_id_cidade").html(data);}',
   'data' => array('id' => 'js:$(this).val()')
  )));
?>
          </span>
<?php echo $form->error($localizacoes, 'id_uf'); ?>
</div>
   
   <div class="DivCampos">
        <span class="NomeUsuario">
  <?php echo $form->labelEx($localizacoes,'Cidade'); ?>
            <br>
<?php 
$cidades = Cv2LocalizacoesCidades::model()->findAll('id_uf = :id_uf', array(':id_uf' => $localizacoes->id_uf), array('order' => 'nome ASC'));
 $cidades = CHtml::listData($cidades, 'id', 'nome');
?>
 <?php echo $form->dropDownList($localizacoes, 'id_cidade', $cidades, array('class'=>'Input','empty' => 'Selecione')); ?>
 </span> 
 <?php echo $form->error($localizacoes,'id_cidade'); ?>
 </div>
   
   <div id="cepCampos" class="DivCampos">
        <span class="NomeUsuario">
		<?php echo $form->labelEx($localizacoes,'cep'); ?>
             <br>
		<?php echo $form->textField($localizacoes,'cep', array('class'=>'Input', 'id'=>'cep', 'type'=>'text')); ?>
             </span> 
		<?php echo $form->error($localizacoes,'cep'); ?>
	</div>
   
	<div id="celularCampos" class="DivCampos">
            <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'celular'); ?>
                 <br>
		<?php echo $form->textField($vendedores,'celular', array('class'=>'Input', 'id'=>'celular', 'type'=>'text')); ?>
                 </span> 
		<?php echo $form->error($vendedores,'celular'); ?>
	</div>

	<div id="telefoneCampos" class="DivCampos">
            <span class="NomeUsuario">
		<?php echo $form->labelEx($vendedores,'telefone'); ?>
                <br>
		<?php echo $form->textField($vendedores,'telefone', array('class'=>'Input', 'id'=>'telefone', 'type'=>'text')); ?>
                </span> 
		<?php echo $form->error($vendedores,'telefone'); ?>
	</div>
 <div style="clear:both;"></div>
    <div id="submit" class="DivCampos">
        <button style="text-align: right" type="submit" class="BotaoPadrao1"><span><?php echo $vendedores->isNewRecord ? 'Criar' : 'Salvar'; ?></span></button>	
   </div>
        <div style="clear:both"></div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.1.7.1.js"></script>


