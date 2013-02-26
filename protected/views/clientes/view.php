<?php
/* @var $this Cv2VendedoresController */
/* @var $model Cv2Vendedores */

$this->breadcrumbs=array(
	'Cv2 Vendedores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cv2Vendedores', 'url'=>array('index')),
	array('label'=>'Create Cv2Vendedores', 'url'=>array('create')),
	array('label'=>'Update Cv2Vendedores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cv2Vendedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cv2Vendedores', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'nome_fantasia',
		'razao_social',
		'cpf',
		'cnpj',
		'celular',
		'telefone',
		'data',
		'email',
		'id_tipo',
		'bloqueado',
	),
)); ?>
