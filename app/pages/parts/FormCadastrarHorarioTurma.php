<div class="modal fade ModalCadastrarHorarioInicial" tabindex="-1" role="dialog" aria-labelledby="ModalCadastrarTurma">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="ModalCadastrarTurma">
                    Cadastrar novo horário de aula
                </h4>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="HorarioInicial">Horario Inicial</label>
                            <select id="HorarioInicial" name="HorarioInicial" class="form-control">
                                <?php
                                for($iHorario = 9; $iHorario <= 20; $iHorario++){
                                    if($iHorario <= 9){
                                        $iHorario = "0".$iHorario;
                                    }
                                    ?>
                                    <option value="<?php echo $iHorario?>"><?php echo $iHorario?>:00</option>
                                    <?php
                                    
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="HorarioFinal">Horario Final: </label>
                            <select name="HorarioFinal" id="HorarioFinal" class="form-control">
                               
                                <?php
                                for($iHorarioFinal = 10; $iHorarioFinal <= 21; $iHorarioFinal++){
                                    ?>
                                    <option value="<?php echo $iHorarioFinal?>"><?php echo $iHorarioFinal?>:00</option>
                                    <?php
                                    
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
                    <button type="submit" class="btn btn-success" name="CadastrarHorarioTurma">Salvar Horario</button>
                </div>
            </form>
        </div>
    </div>
</div>