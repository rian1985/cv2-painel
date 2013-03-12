<div class="TituloPaginas">Veículos vendidos<div class="FiltroAnuncios"><a href="<?php echo $this->createUrl('/vendidos'); ?>">Todos</a> | <a href="<?php echo $this->createUrl('/vendidos/carros'); ?>">Carros</a> | <a href="<?php echo $this->createUrl('/vendidos/motos'); ?>">Motos</a> | <a href="<?php echo $this->createUrl('/vendidos/caminhoes'); ?>">Caminhões</a> | <a href="<?php echo $this->createUrl('/vendidos/onibus'); ?>">Ônibus</a> | <a href="<?php echo $this->createUrl('/vendidos/nautica'); ?>">Náutica</a> | <a href="<?php echo $this->createUrl('/vendidos/outros'); ?>">Outros</a></div></div>
<div class="CaixaPaginas">
	<?php
               if (count($list) > 0){
                            foreach ($list as $veiculos):
                                ?>
                               <div class="ListagemVeiculos">
    	<div class="DataCadastro"><?php echo DateHelper::toBrDateString($veiculos['data_cadastro']); ?></div>
		<div class="NomeVeiculo"><?php echo $veiculos['marca'] ?> - <?php echo $veiculos['descricao'] ?></div>
              <?php  if($veiculos['valor_promocional'] > 0){ ?> 
                    <div class="ValorNormalVeiculo"><span style="font-size:11px;color:#666666;text-decoration:line-through">R$ <?php echo $veiculos['valor'] ?></span> - R$ <?php echo $veiculos['valor_promocional'] ?></div>
                    <?php } else {?>
                    <div class="ValorNormalVeiculo">R$ <?php echo $veiculos['valor'] ?></div>
<?php } ?>
        <div class="TipoVeiculo"><?php echo $veiculos['tipo']; ?></div>
        <div style="clear:both"></div>
        <?php if($veiculos['destaque'] === '1'){?>
         <div class="ItensAcao"> <?php if($veiculos['tipo'] === 'Outros'){ ?><a href="#" class="Visualizar">Visualizar</a> <?php } ?>
             <?php if($veiculos['tipo'] === 'Outros'){ ?>| <a href="<?php echo $this->createUrl('outros/tiraDestaque/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Tirar destaque</a> <?php } ?>
              <?php if($veiculos['tipo'] === 'Outros'){ ?>| <a href="<?php echo $this->createUrl('outros/update/') . "?id=".$veiculos['id']." "; ?>" class="Alterar">Alterar</a> <?php } ?>
            <?php if($veiculos['tipo'] === 'Outros'){ ?>| <a href="<?php echo $this->createUrl('outros/delete/') . "?id=".$veiculos['id']." "; ?>" class="Apagar">Apagar</a> <?php } ?>

         </div>
             
   <?php } if($veiculos['destaque'] === '0') { ?>
         <div class="ItensAcao"><?php if($veiculos['tipo'] === 'Outros'){ ?><a href="#" class="Visualizar">Visualizar</a> <?php } ?>
             <?php if($veiculos['tipo'] === 'Outros'){ ?>| <a href="<?php echo $this->createUrl('outros/destaque/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Destacar</a> <?php } ?>
              <?php if($veiculos['tipo'] === 'Outros'){ ?>| <a href="<?php echo $this->createUrl('outros/update/') . "?id=".$veiculos['id']." "; ?>" class="Alterar">Alterar</a> <?php } ?>
            <?php if($veiculos['tipo'] === 'Outros'){ ?>| <a href="<?php echo $this->createUrl('outros/delete/') . "?id=".$veiculos['id']." "; ?>" class="Apagar">Apagar</a> <?php } ?>
     
         </div>

         <?php } ?>
            
               
    
                               </div>                
                                   
                                        <?php
                            endforeach;
               } else { ?>
                 <p>Você não tem veículos cadastrados.</p>
               <?php } ?>
                        
    
</div>