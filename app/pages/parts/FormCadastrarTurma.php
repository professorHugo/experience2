<div class="modal fade ModalCadastrarTurma" tabindex="-1" role="dialog" aria-labelledby="ModalCadastrarTurma">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="ModalCadastrarTurma">
                    Cadastrar nova turma
                </h4>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="NomeDaTurma">Nome Da Turma</label>
                            <input type="text" class="form-control" name="NomeDaTurma" id="NomeDaTurma">
                        </div>
                        <div class="col-md-6">
                            <label for="Professor">Professor: </label>
                            <select name="Professor" id="Professor" class="form-control">
                               <?php
                                $QueryBuscarProfessores = "SELECT * FROM usuarios WHERE permissao = 1";
                                $ExeQrBuscarProfessores = mysql_query($QueryBuscarProfessores);
                                
                                if($ExeQrBuscarProfessores){
                                    while($ReturnDataProf = mysql_fetch_assoc($ExeQrBuscarProfessores)){
                                        ?>
                                        <option value="<?php echo $ReturnDataProf['id']?>">
                                            <?php echo $ReturnDataProf['nome']?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="Curso">Curso: </label>
                            <select name="Curso" id="Curso" class="form-control">
                               <?php
                                $QueryBuscarCursos = "SELECT * FROM cursos";
                                $ExeQrBuscarCursos = mysql_query($QueryBuscarCursos);
                                
                                if($ExeQrBuscarCursos){
                                    while($ReturnCursos = mysql_fetch_assoc($ExeQrBuscarCursos)){
                                        ?>
                                        <option value="<?php echo $ReturnCursos['id']?>">
                                            <?php echo $ReturnCursos['nome_curso']?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="HorarioEntrada">Horario Entrada: </label>
                            <select name="HorarioEntrada" id="HorarioEntrada" class="form-control">
                                <?php
                                $QueryBuscarHorariosEntrada = "SELECT * FROM horario_aula ORDER BY horario_entrada ASC";
                                $ExeQrBuscarHorariosEntrada = mysql_query($QueryBuscarHorariosEntrada);
                                if(mysql_num_rows($ExeQrBuscarHorariosEntrada) >= 1){
                                    while($ReturnHEntrada = mysql_fetch_assoc($ExeQrBuscarHorariosEntrada)){
                                        ?>
                                        <option value="<?php echo $ReturnHEntrada['horario_entrada']?>">
                                            <?php echo $ReturnHEntrada['horario_entrada']?>:00
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="HorarioSaida">Horario Saída: </label>
                            <select name="HorarioSaida" id="HorarioSaida" class="form-control">
                                <?php
                                $QueryBuscarHorariosSaida = "SELECT * FROM horario_aula ORDER BY horario_saida ASC";
                                $ExeQrBuscarHorariosSaida = mysql_query($QueryBuscarHorariosSaida);
                                if(mysql_num_rows($ExeQrBuscarHorariosSaida) >= 1){
                                    while($ReturnHSaida = mysql_fetch_assoc($ExeQrBuscarHorariosSaida)){
                                        ?>
                                        <option value="<?php echo $ReturnHSaida['horario_saida']?>">
                                            <?php echo $ReturnHSaida['horario_saida']?>:00
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <div style="width:100%; height: 20px"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success" name="SalvarTurma">Salvar Turma</button>
                </div>
            </form>
        </div>
    </div>
</div>