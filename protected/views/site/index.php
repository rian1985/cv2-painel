

<div class="TituloPaginas">Avisos</div>
<div class="CaixaPaginas">
<?php if (count($mensagens) > 0){
                            foreach ($mensagens as $mensagem):
                                ?>
	<div class="ListagemMensagens">
    	
		<div class="DescricaoMsg"><a href="<?php echo $this->createUrl('mensagens/'. "$mensagem->id"); ?>"><?php echo $mensagem->titulo; ?></a></div>
        <div style="clear:both"></div>
    </div>
      <?php
                            endforeach;
               } else { ?>
                 <p>Você não tem novas mensagens.</p>
               <?php } ?>
</div>
<div class="TituloPaginas">Faturas à pagar</div>
<div class="CaixaPaginas">

	<p>Você não tem faturas à pagar no momento.</p>
    
</div>

<div class="TituloPaginas">Últimos veículos cadastrados</div>
<div class="CaixaPaginas">
	<?php
               if (count($carros) > 0){
                            foreach ($carros as $veiculos):
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
         <div class="ItensAcao"><a href="#" class="Visualizar">Visualizar</a> | <a href="<?php echo $this->createUrl('carros/tiraDestaque/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Tirar destaque</a> | <a href="<?php echo $this->createUrl('carros/update/') . "?id=".$veiculos['id']." "; ?>" class="Alterar">Alterar</a> | <a href="<?php echo $this->createUrl('carros/delete/') . "?id=".$veiculos['id']." "; ?>" class="Apagar">Apagar</a></div>
    <?php } if($veiculos['destaque'] === '0') { ?>
         <div class="ItensAcao"><a href="#" class="Visualizar">Visualizar</a> | <a href="<?php echo $this->createUrl('carros/destaque/') . "?id=".$veiculos['id']." "; ?>" class="Destacado">Destacar</a> | <a href="<?php echo $this->createUrl('carros/update/') . "?id=".$veiculos['id']." "; ?>" class="Alterar">Alterar</a> | <a href="<?php echo $this->createUrl('carros/delete/') . "?id=".$veiculos['id']." "; ?>" class="Apagar">Apagar</a></div>
         <?php } ?>
                               </div>                
                                   
                                <?php
                            endforeach;
               } else { ?>
                 <p>Nenhum veículo cadastrado.</p>
               <?php } ?>
    
</div>