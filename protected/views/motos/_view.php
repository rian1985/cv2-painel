<?php
/* @var $this Cv2VeiculosVeiculosController */
/* @var $data Cv2VeiculosVeiculos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visualizacoes')); ?>:</b>
	<?php echo CHtml::encode($data->visualizacoes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_1')); ?>:</b>
	<?php echo CHtml::encode($data->foto_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_2')); ?>:</b>
	<?php echo CHtml::encode($data->foto_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_3')); ?>:</b>
	<?php echo CHtml::encode($data->foto_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_4')); ?>:</b>
	<?php echo CHtml::encode($data->foto_4); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_5')); ?>:</b>
	<?php echo CHtml::encode($data->foto_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_6')); ?>:</b>
	<?php echo CHtml::encode($data->foto_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_promocional')); ?>:</b>
	<?php echo CHtml::encode($data->valor_promocional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itens')); ?>:</b>
	<?php echo CHtml::encode($data->itens); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacoes')); ?>:</b>
	<?php echo CHtml::encode($data->observacoes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->data_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unico_dono')); ?>:</b>
	<?php echo CHtml::encode($data->unico_dono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('novo')); ?>:</b>
	<?php echo CHtml::encode($data->novo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marca')); ?>:</b>
	<?php echo CHtml::encode($data->id_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_localizacao')); ?>:</b>
	<?php echo CHtml::encode($data->id_localizacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>