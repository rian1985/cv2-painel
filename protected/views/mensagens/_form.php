<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mensagem-form',
    'enableAjaxValidation' => false,
        ));
?>
<div class="TituloPaginas">Nova mensagem cliente</div>
<div class="CaixaPaginas">
<div class="DivCampos">

   <span class="NomeUsuario">*Título:<br></span>
    <div class="right">
        <?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 255, 'style'=>'width: 200px;' )); ?>
        <?php if ($model->hasErrors('titulo')): ?>
            <label for="titulo" generated="true" class="error"><?php echo $model->getError('titulo'); ?></label>
        <?php endif; ?>
    </div>

</div>
 <div style="clear:both;"></div>
 <div class="DivCampos">
    <span class="NomeUsuario">*Mensagem:<br></span>
    <div class="right">
        <?php echo CHtml::activeTextArea($model, 'mensagem', array('class' => 'wysiwyg', 'style' => 'height : 140px; width: 650px;')); ?>
        <?php if ($model->hasErrors('mensagem')): ?>
            <label for="mensagem" generated="true" class="error"><?php echo $model->getError('mensagem'); ?></label>
        <?php endif; ?>
    </div>
 </div>
    <div style="clear:both;"></div>
    <div class="DivCampos">
        <button style="text-align: right" type="submit" class="BotaoPadrao1"><span><?php echo $model->isNewRecord ? 'Criar' : 'Salvar'; ?></span></button>	
   </div>
        <div style="clear:both"></div>
    
</div>

<?php $this->endWidget(); ?>