<div class="TituloPaginas">Suas mensagens do sistema</div>
<div class="CaixaPaginas">
<?php if (count($listmensagens) > 0){
                            foreach ($listmensagens as $mensagens):
                                ?>
	<div class="ListagemMensagens">
    	<div class="DataCadastro"><span class="Dia"><?php echo DateHelper::toBrDateString($mensagens->data); ?></div>
		<div class="DescricaoMsg"><a href="<?php echo $this->createUrl('mensagens/'. "$mensagens->id"); ?>"><?php echo $mensagens->titulo; ?></a></div>
        <div style="clear:both"></div>
    </div>
      <?php
                            endforeach;
               } else { ?>
                 <p>Nenhuma mensagem cadastrado.</p>
               <?php } ?>
</div>