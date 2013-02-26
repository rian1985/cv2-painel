<?php
/* @var $this Cv2VendedoresController */
/* @var $model Cv2Vendedores */

$this->breadcrumbs=array(
	'Cv2 Vendedores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cv2Vendedores', 'url'=>array('index')),
	array('label'=>'Create Cv2Vendedores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cv2-vendedores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cv2-vendedores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'nome_fantasia',
		'razao_social',
		'cpf',
		'cnpj',
		/*
		'celular',
		'telefone',
		'data',
		'email',
		'id_tipo',
		'bloqueado',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
