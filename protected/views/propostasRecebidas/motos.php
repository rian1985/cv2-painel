<div class="TituloPaginas">Propostas recebidas<div class="FiltroAnuncios"><a href="<?php echo $this->createUrl('/propostas-recebidas'); ?>">Todos</a> | <a href="<?php echo $this->createUrl('/propostas-recebidas/carros'); ?>">Carros</a> | <a href="<?php echo $this->createUrl('/propostas-recebidas/motos'); ?>">Motos</a> | <a href="<?php echo $this->createUrl('/propostas-recebidas/caminhoes'); ?>">Caminhões</a> | <a href="<?php echo $this->createUrl('/propostas-recebidas/onibus'); ?>">Ônibus</a> | <a href="<?php echo $this->createUrl('/propostas-recebidas/nautica'); ?>">Naútica</a> | <a href="<?php echo $this->createUrl('/propostas-recebidas/outros'); ?>">Outros</a></div></div>



<div class="CaixaPaginas">
	<?php
               if (count($list) > 0){
                            foreach ($list as $propostas):
                                ?>
                               <div class="ListagemVeiculos">
    	<div class="DataCadastro"><?php echo DateHelper::toBrDateString($propostas['data']); ?></div>
		<div class="NomeProposta"><?php echo $propostas['nome'] ?></div>
              
                    <div class="TextoProposta"> <?php echo substr($propostas['proposta'], 0, 50 ), '...'; ?> <span class="EmailProposta"><?php echo $propostas['email'] ?> </span></div>
                    <div style="clear:both"></div>
                    
                     <div class="ItensAcao"><a href="<?php echo $this->createUrl('propostas-recebidas/'). "/".$propostas['id'].""; ?>" class="Visualizar">Visualizar</a> | <a href="<?php echo $this->createUrl('propostas-recebidas/delete/') . "?id=".$propostas['id']." "; ?>" class="Apagar">Apagar</a></div>
            
                               </div>                
                                   
                                        <?php
                            endforeach;
               } else { ?>
                 <p>Você não tem propostas.</p>
               <?php } ?>
                        
    
</div>