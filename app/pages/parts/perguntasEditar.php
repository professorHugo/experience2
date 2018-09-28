  <?php

  $QueryBuscarQuestoesProvas = "SELECT * FROM questoes_provas WHERE modulo_prova = $AulaProva";
  $ExeQrBuscarQuestoesProvas = mysql_query($QueryBuscarQuestoesProvas);

  while($ResBuscarQuestoes = mysql_fetch_assoc($ExeQrBuscarQuestoesProvas)){
    ?>
    <div class="clearfix"></div>
    <form action="#" method="post">
      <div class="form-group">
        <div class="col-md-12">
          <label for="conteudo_pergunta<?php echo $ResBuscarQuestoes['id_prova']?>">Pergunta <?php echo $ResBuscarQuestoes['id_prova']?>:</label>
          <textarea type="text" id="conteudo_pergunta<?php echo $ResBuscarQuestoes['id_prova']?>" name="conteudo_pergunta" class="form-control" value=""><?php echo $ResBuscarQuestoes['pergunta_prova']?></textarea>
          <input type="hidden" name="questao" value="<?php echo $ResBuscarQuestoes['id_prova']?>">
        </div>
      </div>
      <input type="hidden" name="questao" value="<?php echo $ResBuscarQuestoes['id_prova']?>">
      <div class="form-group">
        <div class="col-md-12">
          <label for="resposta_correta">Resposta correta:</label>
          <p>
            <?php
            $IdResosta = $ResBuscarQuestoes['id_prova'];
            $QueryBuscarRespostaCerta = "SELECT * FROM respostas_provas WHERE id_pergunta = $IdResosta AND verdadeira = 1";
            $ExeQrBuscarRespostaCerta = mysql_query($QueryBuscarRespostaCerta);
            while($ReqRespostaCerta = mysql_fetch_assoc($ExeQrBuscarRespostaCerta)){
              // print_r($ReqRespostaCerta);
              ?>
              <input type="text" id="resposta_correta" name="resposta_correta" class="form-control" value="<?php echo $ReqRespostaCerta['resposta']?>">
              <?php
            }
            ?>
          </p>
        </div>
        <div class="col-md-12">
          <?php
          echo $QueryBuscarREspostasErradas = "SELECT * FROM respostas_provas WHERE id_pergunta = $IdResosta AND verdadeira = 0";
          echo "<br>";
          $ExeQrBuscarREspostasErradas = mysql_query($QueryBuscarREspostasErradas);
          while($ReturnRespErradas = mysql_fetch_assoc($ExeQrBuscarREspostasErradas)){
            ?>
            <label for="RespostaErrada<?php echo $ReturnRespErradas['id']?>">Resposta errada</label>
            <input type="text" name="RespostaErrada<?php echo $ReturnRespErradas['id']?>" id="RespostaErrada<?php echo $ReturnRespErradas['id']?>" value="<?php echo $ReturnRespErradas['resposta']?>">

            <input type="hidden" name="RespostaErradaid" value="<?php echo $ReturnRespErradas['id']?>">
            <?php
          }
          ?>
        </div>
        <div class="col-md-12">
          <input type="hidden" name="aula" value="<?php echo $AulaProva?>">
          <button type="submit" name="atualizar_questao" class="btn btn-success">Atualizar</button>
        </div>
      </div>
    </form>
    <hr class="col-md-12" style="border-color:#333">
    <?php
  }
