<?php

$QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
$ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);
// if(mysql_num_rows($ExeQrBuscarQuestoesProvas) > 0){
?>
<form action="#" method="post">
<?php
while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
  // print_r($ResBuscarQuestoes);
  $QuestaoProva = 1;
  ?>
  <div class="form-group col-md-12">
    <h3>Questão<?php echo $ResBuscarQuestoes['id_prova'].":</b><br> " ;echo $ResBuscarQuestoes['pergunta_prova']?></h3>
    <h4><?php echo $ResBuscarQuestoes['modulo_prova']?></h4>

        <?php
        $ResBuscarQuestoes['id_resposta_correta'];
        $QueryBuscarRespostaCertaProva = "SELECT * FROM respostas_provas WHERE id_pergunta = $ResBuscarQuestoes[id_prova] ORDER BY RAND() LIMIT 4";
        $ExeQrBuscarRespostaCertaProva = mysql_query($QueryBuscarRespostaCertaProva);
        while($Resposta = mysql_fetch_assoc($ExeQrBuscarRespostaCertaProva)){
          // print_r($Resposta);
          ?>
          <p></p>
          <label class="col-md-3 text-justify" style="font-weight: 100;border:1px solid #ddd;min-height:100px">
            <input type="radio" name="<?php echo $Resposta['id_pergunta']?>" value="<?php echo $Resposta['verdadeira']?>">
            <?php echo $Resposta['resposta'];?>
          </label>
          <?php
        }
      ?>
  </div>
  <hr style="border-color:#333;">
  <?php
  $QuestaoProva = $QuestaoProva+1;
}
?>
<input type="submit" name="enviarRespostas" value="Enviar Respostas" class="btn btn-lg btn-success">
<input type="reset" name="limparFormulario" value="Limpar Respostas" class="btn btn-lg btn-warning">
</form>
