<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cv2 Veiculos Veiculoses',
);

$this->menu=array(
	array('label'=>'Create Cv2VeiculosVeiculos', 'url'=>array('create')),
	array('label'=>'Manage Cv2VeiculosVeiculos', 'url'=>array('admin')),
);
?>

<h1>Cv2 Veiculos Veiculoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
