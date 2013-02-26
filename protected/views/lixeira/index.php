<div class="TituloPaginas">Lixeira<div class="FiltroAnuncios"><a href="#">Todos</a> | <a href="#">mais novos</a> | <a href="#">mais antigos</a></div></div>
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
        <div class="ItensAcao"><a href="<?php echo $this->createUrl('carros/restaura/') . "?id=".$veiculos['id']." "; ?>" class="Visualizar">Restaurar</a></div>
   
        </div>

<?php
                            endforeach;
               } else { ?>
                 <p>Você não tem veículos deste tipo vendido.</p>
               <?php } ?>

	
       
    </div>
    