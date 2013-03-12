<div class="TituloPaginas">Lixeira<div class="FiltroAnuncios"><a href="<?php echo $this->createUrl('/lixeira'); ?>">Veículos</a> | <a href="<?php echo $this->createUrl('/lixeira/propostas-recebidas'); ?>">Propostas recebidas</a> </div></div>

<div class="CaixaPaginas">
    
   
 <?php
               if (count($list) > 0){
                            foreach ($list as $veiculos):
                                ?>
	<div class="ListagemVeiculos">
    	<div class="DataCadastro"><?php echo DateHelper::toBrDateString($veiculos['data_cadastro']); ?></div>
		<div class="NomeVeiculo"><?php echo $veiculos['marca'] ?> -  <?php echo $veiculos['descricao'] ?></div>
        <div class="ValorNormalVeiculo">R$ <?php echo $veiculos['valor'] ?></div>
        <div class="TipoVeiculo"><?php echo $veiculos['tipo']; ?></div>
        <div style="clear:both"></div>
        <div class="ItensAcao">
            
            
             <?php if($veiculos['tipo'] === 'Carro'){ ?><a href="<?php echo $this->createUrl('carros/restaura/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Restaurar</a> <?php } ?>
             <?php if($veiculos['tipo'] === 'Moto'){ ?><a href="<?php echo $this->createUrl('motos/restaura/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Restaurar</a> <?php } ?>
              <?php if($veiculos['tipo'] === 'Caminhão'){ ?> <a href="<?php echo $this->createUrl('caminhoes/restaura/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Restaurar</a> <?php } ?>
               <?php if($veiculos['tipo'] === 'Ônibus'){ ?><a href="<?php echo $this->createUrl('onibus/restaura/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Restaurar</a> <?php } ?>
              
            
            
       </div>
   
        </div>

<?php
                            endforeach;
               } else { ?>
                 <p>Você não tem veículos na excluídos.</p>
               <?php } ?>

	
       
    </div>
    