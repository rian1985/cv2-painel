<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

    <div class="form CaixaLoginPagina">
        <div style="font-size:24px;color:#006699;padding-bottom:10px">Login</div>
         <div style="font-size:12px;color:#999999;padding-left:10px;padding-bottom:10px">Digite abaixo seus dados de login para acessar o seu painel.</div>
       
		<?php echo $form->labelEx($model,'usuario', array('style' =>'font-size:13px;color:#006699;font-weight:bold;padding:15px 0;margin:auto;width:250px')); ?>
		<?php echo $form->textField($model, 'usuario', array('style' => 'padding:10px;border:1px solid #cccccc;width:220px;color:#666666')); ?>
	
                    <?php echo $form->error($model,'usuario', array('style' =>'font-size:13px;color:#006699;font-weight:bold;padding:15px 0;margin:auto;width:250px')); ?>
            
       
	
		<?php echo $form->labelEx($model,'senha', array('style' =>'font-size:13px;color:#006699;font-weight:bold;padding:15px 0;margin:auto;width:250px')); ?>
		<?php echo $form->passwordField($model,'senha', array('style' => 'padding:10px;border:1px solid #cccccc;width:220px;color:#666666')); ?>
		
                    <?php echo $form->error($model,'senha',array('style' =>'font-size:13px;color:#006699;font-weight:bold;padding:15px 0;margin:auto;width:250px')); ?>
		  

	
		<?php echo CHtml::submitButton('Entrar'); ?>
	
    </div>


<?php $this->endWidget(); ?>
<!-- form -->





