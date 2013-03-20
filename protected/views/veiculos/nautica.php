<div class="TituloPaginas">Dados do Veículo</div>
<div class="CaixaPaginas">

	<div class="DivCamposVeiculos">
    
    	<span class="NomeUsuario">Descrição do veículo (ex. Jet ski 2012)<br><input type="text" class="Input"></span>
        
    </div>
    
</div>
<div class="TituloPaginas">Fotos</div>
<div class="CaixaPaginas">

	<div class="DivFotosVeiculos">
    
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="float:left;margin-right:10px;"><a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no_photo.jpg" border="0"><br>Adicionar</a></div>
        <div style="clear:both"></div>
    </div>
    
</div>
<div class="TituloPaginas">Localização do veículo</div>
<div class="CaixaPaginas">

	<div class="DivCamposVeiculos">
    
    	Localização<br><input type="text" class="Input">
        
    </div>
    
</div>
<div class="TituloPaginas">Características do Veículo</div>
<div class="CaixaPaginas">

	<div class="DivCaracteristicas">
    	Tipo<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">
    	Ano<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">Calado<br><input type="text" class="Input"></div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">Comprimento<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">Marca<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">Modelo<br><input type="text" class="Input"></div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">Pontal<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">
    	Banheiros<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">
    	Camarote<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">
    	Quantidade de motores<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">
    	Quantidade de pessoas<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">Capacidade do tanque (Litros)<br><input type="text" class="Input"></div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">
    	Combustível<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">Horas de uso<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">
    	Marca do motor<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">
    	Material<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">Potência (HP)<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">
    	Tipo do motor<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">Ano do motor<br><input type="text" class="Input"></div>
    
    <div class="DivCaracteristicas">
    	Único dono? <br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    <div class="DivCaracteristicas">
    	Condições do veículo?<br>
        <select class="Select">
        	<option>Selecione</option>
        </select>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="DivCaracteristicas">Valor (R$)<br><input type="text" class="Input"></div>
    <div class="DivCaracteristicas">Valor promocional (R$)<br><input type="text" class="Input"></div>
    
    <div style="clear:both"></div>
    
</div>
<div class="TituloPaginas">Itens adicionais do veículo</div>
<div class="CaixaPaginas">

	<div class="SubTituloPaginas">Equipamentos</div>
    <div class="DivAdicionais" style="width:230px;">
        <input type="checkbox"> Ar condicionado<br>
        <input type="checkbox"> Bomba de porão<br>
        <input type="checkbox"> Calefação<br>
        <input type="checkbox"> CD / MP3<br>
        <input type="checkbox"> Cozinha<br>
    </div>
    <div class="DivAdicionais" style="width:230px;">
        <input type="checkbox"> Cockpit<br>
        <input type="checkbox"> Timão duplo<br>
        <input type="checkbox"> Sonda<br>
        <input type="checkbox"> Gerador<br>
        <input type="checkbox"> Geladeira<br>
    </div>
    <div class="DivAdicionais" style="width:230px;">
        <input type="checkbox"> Power trim<br>
        <input type="checkbox"> TV / LCD<br>
        <input type="checkbox"> Rádio VHF<br>
    </div>
    
    <div style="clear:both"></div>
    
</div>

<div class="TituloPaginas">Observações</div>
<div class="CaixaPaginas">

	<div class="DivCamposVeiculos">
    
    	<textarea rows="10" cols="83"></textarea>
        
    </div>
    
</div>
<div class="DivCampos"><input type="submit" value="Salvar" class="BotaoPadrao1"></div>