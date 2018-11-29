<?php
$Turma = $_POST['IdTurma'];
 $H_Entrada = $_POST['h_entrada'];
 "<br>";
 $H_Saida = $_POST['h_saida'];
 "<br>";
 $Professor = $_POST['professor'];
 "<br>";
 "Status: ". $Status = $_POST['Status'];
 "Salvando as alterações da turma: ". $NomeTurma = $_POST['NomeTurma'];
 "<br>";

for($i=1;$i<=8;$i++){
    $modulo = "modulo".$i;
    " = ";
    $Modulo[$i] = $_POST['Modulo'.$i];
    "<br>";
     $QueryUpdateModulos = "UPDATE turmas SET $modulo = '$Modulo[$i]', turma_confirmada = '$Status' WHERE id = $Turma ";
    "<br>";
    
    $ExeQrUpdateModulos = mysql_query($QueryUpdateModulos);
}
if($ExeQrUpdateModulos){
    ?>
    <!-- Modal Turma alterada-->
<div class="modal fade in text-muted" id="AlterarSenha" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title lead">Dados da turma alterados</h4>
            </div>
            <div class="modal-body">
                <p class="lead text-center">
                    Os dados da turma <b><?php echo $NomeTurma?></b> foram alterados com sucesso, confira abaixo e caso necessário, mude novamente
                </p>
                
                <div class="form-group col-md-3">
                    <label for="Horario_Entrada">Horário de Entrada: </label>
                    <input type="text" disabled value="<?php echo $H_Entrada?>:00" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="Horario_Saida">Horário de Saída: </label>
                    <input type="text" disabled value="<?php echo $H_Saida?>:00" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="Professor">Professor: </label>
                    <input type="text" disabled value="<?php echo $Professor?>" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="Status">Status da turma: </label>
                    <?php 
                    $QrStatusTurma = "SELECT * FROM turmas WHERE id = '$Turma'";
                    $ExeQrStatusTurma = mysql_query($QrStatusTurma);
                    while($ReturnStatus = mysql_fetch_assoc($ExeQrStatusTurma)){
                        if($ReturnStatus['turma_confirmada'] == 1){
                            ?>
                            <input type="text" disabled value="Ativada" class="form-control">
                            <?php
                        }else{
                            ?>
                            <input type="text" disabled value="Desativada" class="form-control">
                        <?php
                        }
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="form-group">
                    
                    <?php
                        for($i = 1; $i <= 8; $i++){
                            ?>
                            <div class="col-md-3">
                            <label for="Modulo<?php echo $i?>">Módulo <?php echo $i?>:</label>
                            <select name="Modulo<?php echo $i?>" id="Modulo<?php echo $i?>" class="form-control">
                            <?php
                                $QueryBuscarModulos = "SELECT * FROM turmas WHERE id = '$Turma'";
                                $ExeQrBuscarModulos = mysql_query($QueryBuscarModulos);
                                if(mysql_num_rows($ExeQrBuscarModulos)>=1){
                                    while($Aula = mysql_fetch_assoc($ExeQrBuscarModulos)){
                                    ?>
                                        <option value="<?php echo $Aula['modulo'.$i]?>">
                                        <?php 
                                        //Texto do option
                                        $QrBuscarTituloAula = "SELECT * FROM aulas WHERE id = ".$Aula['modulo'.$i];
                                        $ExeQrBuscarTituloAula = mysql_query($QrBuscarTituloAula);
                                        while($NomeModulo = mysql_fetch_assoc($ExeQrBuscarTituloAula)){
                                            echo $Aula['modulo'.$i] ." - ". $NomeModulo['titulo_aula'];
                                        }
                                        ?>
                                        </option>

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
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="modal-footer">
                <a href="?page=Turmas" class="btn btn-warning">Fechar</a>
            </div>
        </div>
    </div>
</div>
    <?php
}else{
    echo "Erro: ".mysql_error();
}