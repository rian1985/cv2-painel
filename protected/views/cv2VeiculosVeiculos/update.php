<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $model Cv2VeiculosVeiculos */

$this->breadcrumbs=array(
	'Cv2 Veiculos Veiculoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cv2VeiculosVeiculos', 'url'=>array('index')),
	array('label'=>'Create Cv2VeiculosVeiculos', 'url'=>array('create')),
	array('label'=>'View Cv2VeiculosVeiculos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cv2VeiculosVeiculos', 'url'=>array('admin')),
);
?>

<h1>Update Cv2VeiculosVeiculos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>