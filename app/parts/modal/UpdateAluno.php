<?php
$TipoUpdate = $_POST['TipoUpdate'];
$_POST['MatriculaAluno'];

if($TipoUpdate == "DadosPessoais"){
    //Atualizar dados pessoais do aluno
    $MatriculaAluno = $_POST['MatriculaAluno'];
    $NomeCompleto = $_POST['NomeCompleto'];
    $IdadeAluno = $_POST['IdadeAluno'];
    $FotoAluno = $_FILES["UpdateFoto"]["name"];
    
    ?>
    <!-- Modal Update Aluno-->
    <div class="modal fade in text-muted" id="AlterarSenha" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title lead">Dados do aluno atualizados com sucesso</h4>
                </div>
                <div class="modal-body">
                    Os dados do aluno será atualizado para os que foram inseridos.<br>
                    Matrícula: <?php echo $MatriculaAluno?><br>
                    Nome: <?php echo $NomeCompleto?><br>
                    Idade: <?php echo $IdadeAluno?><br>
                    <?php
                    if(!empty($_FILES["UpdateFoto"]["name"])){
                        ?>
                        Nome do arquivo de foto: <?php echo $FotoAluno?><br>
                        <?php
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="modal-footer">
                    <a href="?page=Consultar_Alunos" class="btn btn-success"> Voltar </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    
}else if($TipoUpdate == "DadosAulas"){
    //Atualizar os dados das aulas
    $MatriculaAluno = $_POST['MatriculaAluno'];
    $NomeCompleto = $_POST['NomeCompleto'];
    $ConfirmarAula1 = $_POST['ConfirmarAula1'];
    $ConfirmarAula2 = $_POST['ConfirmarAula2'];
    $ConfirmarAula3 = $_POST['ConfirmarAula3'];
    $ConfirmarAula4 = $_POST['ConfirmarAula4'];
    $ConfirmarAula5 = $_POST['ConfirmarAula5'];
    $ConfirmarAula6 = $_POST['ConfirmarAula6'];
    $ConfirmarAula7 = $_POST['ConfirmarAula7'];
    $ConfirmarAula8 = $_POST['ConfirmarAula8'];
    
    ?>
    <!-- Modal Update Aluno-->
    <div class="modal fade in text-muted" id="AlterarSenha" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title lead">Aulas do aluno gravadas com sucesso</h4>
                </div>
                <div class="modal-body">
                    Os dados do aluno será atualizado para os que foram inseridos.<br>
                    Matrícula: <?php echo $MatriculaAluno?><br>
                    Nome: <?php echo $NomeCompleto?><br><br>
                    Aula1 Confirmada: <?php echo $ConfirmarAula1?><br>
                    Aula2 Confirmada: <?php echo $ConfirmarAula2?><br>
                    Aula3 Confirmada: <?php echo $ConfirmarAula3?><br>
                    Aula4 Confirmada: <?php echo $ConfirmarAula4?><br>
                    Aula5 Confirmada: <?php echo $ConfirmarAula5?><br>
                    Aula6 Confirmada: <?php echo $ConfirmarAula6?><br>
                    Aula7 Confirmada: <?php echo $ConfirmarAula7?><br>
                    Aula8 Confirmada: <?php echo $ConfirmarAula8?><br>
                </div>
                <div class="clearfix"></div>
                <div class="modal-footer">
                    <a href="?page=Consultar_Alunos" class="btn btn-success"> Voltar </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
