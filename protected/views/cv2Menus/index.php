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

<?php echo $this->renderPartial('_form_1', array('listmenus'=>$listmenus,'model'=>$model)); ?>
<div class="TituloPaginas">Configurações de menus</div>
        <div class="CaixaPaginas">
 <?php
                //$itens = Cv2Menus::model()->with(array('idVendedor'))->findAll('id_vendedor = :id_vendedor',array(':id_vendedor' => Yii::app()->user->id_vendedor));

                 // $itens = CHtml::listData($itens, 'nome', 'nome');   
                 
                
                 
            ?>
            <?php   
                //echo $form->checkBoxList($model, 'nome', $itens, array( 'separator' => '<br>'));
                //exit;
                ?>
     <?php
               if (count($listmenus) > 0){
                            foreach ($listmenus as $menus):
                                ?>
	<div class="ListagemMenus">
    
      <div class="CheckMenu"><input type="checkbox"></div>
		<div class="NomeVeiculo"><?php echo $menus->nome; ?></div>
        <div style="clear:both"></div>
        <div class="ItensAcaoMenus"><a href="#" class="Editar">Editar conteúdo</a></div>
		
                </div>
              

       
     <?php
                            endforeach;
               } else { ?>
                 <p>Nenhuma mensagem cadastrado.</p>
               <?php } ?>
</div>
<div style="float:right;margin-bottom:10px"><input type="submit" value="Salvar" class="BotaoPadrao1"></div>

<div style="clear:both"></div>

