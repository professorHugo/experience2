<div class="modal fade" id="ModalDetalhesAluno<?php echo $ReturnDados['matricula'] ?>" tabindex="-1" role="dialog" aria-labelledby="ModalDetalhesAluno">
    <div class="modal-dialog modal-lg" style="width:80%" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo $ReturnDados['matricula'] . ' - ' . $ReturnDados['nome'] ?></h4>
                </div>
                <div class="modal-body">
                    <section class="col-md-12" style="padding-top: 0; padding-bottom: 15px;">
                        <!-- Navegação dos dados -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#dados_aluno<?php echo $ReturnDados['matricula'] ?>" aria-controls="dados_pagamento<?php echo $ReturnDados['matricula'] ?>" role="tab" data-toggle="tab">
                                    Dados Aluno
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#dados_aula<?php echo $ReturnDados['matricula'] ?>" aria-controls="dados_pagamento<?php echo $ReturnDados['matricula'] ?>" role="tab" data-toggle="tab">
                                    Aulas
                                </a>
                            </li>
                        </ul>
                        <!-- Páginas da navegação dos dados -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="dados_aluno<?php echo $ReturnDados['matricula'] ?>">
                                <?php include 'parts/modal/System/Detalhes_Aluno.php'; ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="dados_aula<?php echo $ReturnDados['matricula'] ?>">
                                <?php include 'parts/modal/System/Detalhes_Aula.php'; ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <label>Matrícula:</label>
                                <span class="form-control">
                                    <?php echo $ReturnDados['matricula'] ?>
                                </span>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
                </div>
        </div>
    </div>
</div>
