<div class="TituloPaginas"><?php echo DateHelper::toBrDateString($model->data); ?> - <?php echo $model->email ?></div>
<div class="CaixaPaginas">

	<div class="ListagemMensagens">
            <div class="DescricaoMsg">Veículo: <?php echo $model->idVeiculo->descricao; ?></div>
		<div class="DescricaoMsg"><?php echo $model->proposta; ?></div>
               
                
    </div>
    
</div>