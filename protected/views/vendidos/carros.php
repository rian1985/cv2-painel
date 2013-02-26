<div class="TituloPaginas">Veículos vendidos<div class="FiltroAnuncios"><a href="<?php echo $this->createUrl('/vendidos'); ?>">Todos</a> | <a href="<?php echo $this->createUrl('/vendidos/carros'); ?>">Carros</a> | <a href="<?php echo $this->createUrl('/vendidos/motos'); ?>">Motos</a> | <a href="<?php echo $this->createUrl('/vendidos/caminhoes'); ?>">Caminhões</a> | <a href="<?php echo $this->createUrl('/vendidos/onibus'); ?>">Ônibus</a> | <a href="<?php echo $this->createUrl('/vendidos/nautica'); ?>">Naútica</a> | <a href="<?php echo $this->createUrl('/vendidos/outros'); ?>">Outros</a></div></div>
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
        <div class="ItensAcao"><a href="#" class="Visualizar">Visualizar</a> | <a href="#" class="Apagar">Apagar</a></div>
    </div>                <?php
                            endforeach;
               } else { ?>
                 <p>Você não tem veículos deste tipo vendido.</p>
               <?php } ?>
</div>