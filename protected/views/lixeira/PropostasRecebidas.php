<div class="TituloPaginas">Lixeira<div class="FiltroAnuncios"><a href="<?php echo $this->createUrl('/lixeira'); ?>">Veículos</a> | <a href="<?php echo $this->createUrl('/lixeira/propostas-recebidas'); ?>">Propostas recebidas</a> </div></div>
<div class="CaixaPaginas">
	<?php
               if (count($propostas) > 0){
                            foreach ($propostas as $proposta):
                                ?>
                               <div class="ListagemVeiculos">
    	<div class="DataCadastro"><?php echo DateHelper::toBrDateString($proposta['data']); ?></div>
		<div class="NomeProposta"><?php echo $proposta['nome'] ?></div>
              
                    <div class="TextoProposta"> <?php echo substr($proposta['proposta'], 0, 50 ), '...'; ?> <span class="EmailProposta"><?php echo $proposta['email'] ?> </span></div>
                    <div style="clear:both"></div>
                    
                     <div class="ItensAcao"><a href="<?php echo $this->createUrl('propostasRecebidas/restaura/') . "?id=".$proposta['id']." "; ?>" class="Destacado">Restaurar</a> </div>      
                               </div>                   
                                        <?php
                            endforeach;
               } else { ?>
                 <p>Você não tem propostas excluídas.</p>
               <?php } ?>
</div>