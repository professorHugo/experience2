<div class="modal fade ConfigurarTurma<?php echo $ReturnTurmas['id']?>" tabindex="-1" role="dialog" aria-labelledby="ModalConfugirarTurma<?php echo $ReturnTurmas['nome_turma']?>">
    <div class="modal-dialog modal-lg" role="document">
       <form method="post" action="#">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Configurar turma: <?php echo $ReturnTurmas['nome_turma']?></h4>
                </div>
                <div class="modal-body">
                    <div class="formgroup">
                        <div class="col-md-4">
                            <label for="HorarioEntrada">Horario de Entrada:</label>
                            <input type="text" value="<?php echo $ReturnTurmas['horario_entrada_turma']?>:00" disabled class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="HorarioSaida">Horario de Saída:</label>
                            <input type="text" value="<?php echo $ReturnTurmas['horario_saida_turma']?>:00" disabled class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="Professor">Professor:</label>
                            <?php 
                                $Professor = $ReturnTurmas['professor_turma'];
                                $QueryBuscarNomeProfessor = "SELECT * FROM usuarios where id = '$Professor'";
                                $ExeQrBuscarNomeProfessor = mysql_query($QueryBuscarNomeProfessor);
                                while($ReturnNome = mysql_fetch_assoc($ExeQrBuscarNomeProfessor)){
                                    ?>
                                    <input type="text" value="<?php echo $ReturnNome['nome']?>" disabled class="form-control">
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="formgroup">
                        <?php
                        for($i = 1; $i <= 8; $i++){
                            ?>
                            <div class="col-md-3">
                            <label for="Modulo<?php echo $i?>">Módulo <?php echo $i?>:</label>
                            <select name="Modulo<?php echo $i?>" id="Modulo<?php echo $i?>" class="form-control">
                            <?php
                            $QueryBuscarModulos = "SELECT * FROM aulas";
                            $ExeQrBuscarModulos = mysql_query($QueryBuscarModulos);
                            if(mysql_num_rows($ExeQrBuscarModulos)>=1){
                                ?>
                                <option value="" disabled selected>Selecione o Módulo</option>
                                <?php
                                while($Modulo = mysql_fetch_assoc($ExeQrBuscarModulos)){
                                    ?>
                                        <option value="<?php echo $Modulo['id']?>"><?php echo $Modulo['titulo_aula']?></option>
                                    
                                    <?php
                                }
                            }
                            ?>
                            </select>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="formgroup"></div>
                </div>
                <div class="clearfix" style="margin-bottom:20px"></div>
                <div class="modal-footer">
                    <input type="hidden" name="IdTurma" value="<?php echo $ReturnTurmas['id']?>">
                    <input type="hidden" name="Confirmar" value="1">
                    <button class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary" name="SalvarConfiguracao">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>