<?php
/* @var $this Cv2MenusController */
/* @var $model Cv2Menus */

$this->breadcrumbs=array(
	'Cv2 Menuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cv2Menus', 'url'=>array('index')),
	array('label'=>'Manage Cv2Menus', 'url'=>array('admin')),
);
?>

<h1>Create Cv2Menus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>