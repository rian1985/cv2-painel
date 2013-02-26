<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $model Cv2VeiculosVeiculos */

$this->breadcrumbs=array(
	'Cv2 Veiculos Veiculoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cv2VeiculosVeiculos', 'url'=>array('index')),
	array('label'=>'Manage Cv2VeiculosVeiculos', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('veiculos'=>$veiculos,'carros'=>$carros)); ?>