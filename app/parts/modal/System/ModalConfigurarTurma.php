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
                    <div class="formgroup"></div>
                    <div class="formgroup"></div>
                    <div class="formgroup"></div>
                    <div class="formgroup"></div>
                    <div class="formgroup"></div>
                    <div class="formgroup"></div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="IdTurma" value="<?php echo $ReturnTurmas['id']?>">
                    <button class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary" name="SalvarConfiguracao">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>