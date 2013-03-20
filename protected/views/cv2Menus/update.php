<?php
/* @var $this Cv2MenusController */
/* @var $model Cv2Menus */

$this->breadcrumbs=array(
	'Cv2 Menuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cv2Menus', 'url'=>array('index')),
	array('label'=>'Create Cv2Menus', 'url'=>array('create')),
	array('label'=>'View Cv2Menus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cv2Menus', 'url'=>array('admin')),
);
?>

<h1>Update Cv2Menus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>