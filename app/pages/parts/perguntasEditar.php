<?php

$QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
$ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);

while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
    $IdQuestao = $ResBuscarQuestoes['id_prova'];
	//Colocar os títulos das questões de acordo com a matéria
	switch($ResBuscarQuestoes['modulo_prova']){
		case 1: $Titulo = "Cloud Computing";break;
		case 2: $Titulo = "Vocabulary";break;
		case 3: $Titulo = "Contratos de Trabalho";break;
		case 4: $Titulo = "Identidade Visual";break;
		case 5: $Titulo = "Painel de Controle";break;
		case 6: $Titulo = "Chunks";break;
		case 7: $Titulo = "Empreendedorismo";break;
		case 8: $Titulo = "Formatação de Computadores";break;
	}
	?>
	<!--Exibir conteúdo da questão dentro de um formulário para atualização-->
	<form action="#" method="post">
		<div class="form-group">
			<div class="col-md-12">
				<label class="lead" for="conteudo_pergunta<?php echo $IdQuestao?>">Pergunta <?php echo $IdQuestao.' - '.$Titulo;?></label>
				<textarea id="conteudo_pergunta<?php echo $IdQuestao?>" class="form-control" name="conteudo_pergunta<?php echo $ResBuscarQuestoes['id_prova']?>"><?php echo $ResBuscarQuestoes['pergunta_prova']?>
				</textarea>
			</div>
			<input type="hidden" name="questao" value="<?php echo $IdQuestao?>">
			<input type="hidden" name="atualizar_questao">
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="form-group">
			<div class="col-md-12">
			    <div class="col-md-3 text-center">
			        <label class="lead" for="RespostaCorreta">Resposta Correta:</label>
			    </div>
				<?php
				$QueryBuscarRespostaCerta = "SELECT * FROM respostas_provas WHERE id_pergunta = $IdQuestao AND verdadeira = 1";
				$ExeQrBuscarRespostaCerta = mysql_query($QueryBuscarRespostaCerta);
				
				while($ReqRespostaCerta = mysql_fetch_assoc($ExeQrBuscarRespostaCerta)){
					?>
					<!--Exibir o texto da resposta certa e botão do formulário para atualizar-->
					<div class="col-md-7">
						<input type="text" id="RespostaCorreta" name="RespostaCorreta" class="form-control" value="<?php echo $ReqRespostaCerta['resposta']?>">
					</div>
					<input type="hidden" name="respostaCertaId" value="<?php echo $ReqRespostaCerta['id']?>">
					
					<button type="submit" name="atualizarRespostaVerdadeira" class="btn btn-warning">
					Alterar Resposta Certa
					</button>
					<?php
				}
				?>
			</div>
		</div>
	</form>
	<div class="clearfix"></div>
	<!-- Exibir formulário para alterar as respostar erradas da prova -->
	<form action="#" method="post">
		<div class="form-group">
			<div class="col-md-12">
				<?php
				$QueryBuscarRespostasErradas = "SELECT * FROM respostas_provas WHERE id_pergunta = $IdQuestao AND verdadeira = 0";
				
				$ExeQrBuscarRespostasErradas = mysql_query($QueryBuscarRespostasErradas);
				
				while($ResBuscarRespostasErradas = mysql_fetch_assoc($ExeQrBuscarRespostasErradas)){
					?>
					<div class="col-md-3">
                        <label for="RespostaErrada<?php echo $ResBuscarRespostasErradas['id']?>">
                        Resposta Errada:
                        </label>
					</div>
					<div class="col-md-7">
					    <input type="text" name="RespostaErrada<?php echo $ResBuscarRespostasErradas['id']?>" id="RespostaErrada<?php echo $ResBuscarRespostasErradas['id']?>" value="<?php echo $ResBuscarRespostasErradas['resposta']?>" class="form-control">
					
                        <input type="hidden" name="RespostaErrada<?php echo $ResBuscarRespostasErradas['id']?>" value="RespostaErrada<?php echo $ResBuscarRespostasErradas['id']?>">
					</div>
					<?php
				}
				?>
			</div>
			<div class="col-md-12">
				<input type="hidden" name="aula" value="<?php echo $AulaProva?>">
                <input type="hidden" name="atualizar_questao">
				<button type="submit" name="atualizarRespostasErradas" class="btn btn-success">
				Atualizar Respostas Erradas
				</button>
			</div>
		</div>
	</form>
	<hr class="col-md-12 bordered">
	<?php
}