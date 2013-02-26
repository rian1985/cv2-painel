<div class="TituloPaginas">Mensagens cadastradas<div class="FiltroAnuncios"><a href="<?php echo $this->createUrl('mensagens/create'); ?>">Nova mensagem</a></div></div>
	<div class="CaixaPaginas">

            <?php
               if (count($listmensagens) > 0){
                            foreach ($listmensagens as $mensagens):
                                ?>
                              <div class="ListagemMensagens">
			<div class="DataCadastro"><span class="Dia"><?php echo DateHelper::toBrDateString($mensagens->data); ?></div>
			<div class="TituloMsg"><?php echo $mensagens->titulo; ?><div class="ItensAcao" id="ItensAcaoMsg"><a href="<?php echo $this->createUrl('mensagens/update/') . "?id=$mensagens->id"; ?>" class="Alterar">Alterar</a> | <a href="<?php echo $this->createUrl('mensagens/delete/') . "?id=$mensagens->id"; ?>" class="Apagar">Apagar</a></div></div>
			<div class="DescricaoMsg"><?php echo $mensagens->mensagem; ?></div>
			<div style="clear:both"></div>
			
		</div>
                                   
                                <?php
                            endforeach;
               } else { ?>
                 <p>Nenhuma mensagem cadastrado.</p>
               <?php } ?>
	</div>