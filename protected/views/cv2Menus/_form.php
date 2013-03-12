<?php
/* @var $this Cv2MenusController */
/* @var $model Cv2Menus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cv2-menus-form',
	'enableAjaxValidation'=>false,
)); ?>
    
    <?php
                $itens = Cv2Menus::model()->with(array('idVendedor'))->findAll('id_vendedor = :id_vendedor',array(':id_vendedor' => Yii::app()->user->id_vendedor));

                  $itens = CHtml::listData($itens, 'nome', 'nome');           
            ?>
            <?php   
                echo $form->checkBoxList($model, 'nome', $itens, array( 'separator' => '<br>'));
              
                ?>

	

	<?php echo $form->errorSummary($model); ?>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->