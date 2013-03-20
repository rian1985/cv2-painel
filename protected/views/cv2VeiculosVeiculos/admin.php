<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $model Cv2VeiculosVeiculos */

$this->breadcrumbs=array(
	'Cv2 Veiculos Veiculoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cv2VeiculosVeiculos', 'url'=>array('index')),
	array('label'=>'Create Cv2VeiculosVeiculos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cv2-veiculos-veiculos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cv2 Veiculos Veiculoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cv2-veiculos-veiculos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descricao',
		'visualizacoes',
		'foto_1',
		'foto_2',
		'foto_3',
		/*
		'foto_4',
		'foto_5',
		'foto_6',
		'valor',
		'valor_promocional',
		'itens',
		'observacoes',
		'data_cadastro',
		'ano',
		'unico_dono',
		'novo',
		'id_vendedor',
		'id_marca',
		'id_tipo',
		'id_localizacao',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
