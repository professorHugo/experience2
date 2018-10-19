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
                        <div class="col-md-8">
                            <label for="Horario">Horario: </label>
                            <select name="Horario" id="Horario" class="form-control">
                                <option value=""></option>
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