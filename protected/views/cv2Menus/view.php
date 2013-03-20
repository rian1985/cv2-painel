<?php
/* @var $this Cv2MenusController */
/* @var $model Cv2Menus */

$this->breadcrumbs=array(
	'Cv2 Menuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cv2Menus', 'url'=>array('index')),
	array('label'=>'Create Cv2Menus', 'url'=>array('create')),
	array('label'=>'Update Cv2Menus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cv2Menus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cv2Menus', 'url'=>array('admin')),
);
?>

<h1>View Cv2Menus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'url',
		'ativo',
		'id_vendedor',
	),
)); ?>
