        <div class="TituloPaginas">Clientes cadastrados<div class="FiltroAnuncios"><a href="#">Todos</a> | <a href="#">Físicos</a> | <a href="#">Jurídicos</a> | <span style="color:#666666;font-size:11px;">Pesquisar:</span><input type="text" style="font-size:12px;"> <input type="submit" value="Buscar" style="border:1px solid #999999;padding:1px;background-color:#CCCCCC"></div></div>
<div class="CaixaPaginas">

     <?php
               if (count($listclientes) > 0){
                            foreach ($listclientes as $clientes):
                                ?>
	<div class="ListagemVendedores">
    	<div class="VendedorDataCadastro"><?php echo DateHelper::toBrDateString($clientes->data); ?></div>
      
		<div class="VendedorFantasia"><?php echo $clientes->nome_fantasia; ?></div>
               
              
		<div class="VendedorRazao"><?php echo $clientes->razao_social; ?></div>
                
              
		<div class="VendedorEmail"><?php echo $clientes->email; ?></div>
		<div class="VendedorTelefone"><?php echo $clientes->telefone; ?></div>
        <div style="clear:both"></div>
        <div class="ItensAcao"><a href="#" class="Visualizar">Visualizar</a> | <a href="#" class="Destacado">Veículos</a> | <a href="#" class="Destacado">Faturas</a> | <a href="<?php echo $this->createUrl('clientes/update/') . "?id=$clientes->id"; ?>" class="Alterar">Alterar</a> | <a href="<?php echo $this->createUrl('clientes/delete/') . "?id=$clientes->id"; ?>" class="Apagar">Apagar</a></div>
    </div>
     <?php
                            endforeach;
               } else { ?>
                 <p>Nenhuma mensagem cadastrado.</p>
               <?php } ?>
</div>