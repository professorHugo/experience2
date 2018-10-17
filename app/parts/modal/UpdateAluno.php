<?php
$TipoUpdate = $_POST['TipoUpdate'];
$_POST['MatriculaAluno'];

if($TipoUpdate == "DadosPessoais"){
    //Atualizar dados pessoais do aluno
    $MatriculaAluno = $_POST['MatriculaAluno'];
    $NomeCompleto = $_POST['NomeCompleto'];
    $IdadeAluno = $_POST['IdadeAluno'];
    if(!empty($_FILES["UpdateFoto"]["name"])){
        $FotoAluno = $_FILES["UpdateFoto"]["name"];
        echo $QueryUpdateDadosAluno = "UPDATE usuarios SET nome = '$NomeCompleto', idade = '$IdadeAluno', foto = '$FotoAluno' WHERE matricula = '$MatriculaAluno'";
    }else{
        echo $QueryUpdateDadosAluno = "UPDATE usuarios SET nome = '$NomeCompleto', idade = '$IdadeAluno' WHERE matricula = '$MatriculaAluno'";
    }
    
    $ExeQrUpdateDadosAluno = mysql_query($QueryUpdateDadosAluno);
    
    if($ExeQrUpdateDadosAluno){
        
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
                    Query de Update: <?php echo $QueryUpdateDadosAluno?><br>
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
    }
}else if($TipoUpdate == "DadosAulas"){
    //Atualizar os dados das aulas
    $MatriculaAluno = $_POST['MatriculaAluno'];
    $NomeCompleto = $_POST['NomeCompleto'];
    if(!empty($_POST['ConfirmarAula1'])){
        $ConfirmarAula1 = $_POST['ConfirmarAula1'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula1 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula1 = $ReturnAula['aula1'];
        }
    }
    
    if(!empty($_POST['ConfirmarAula2'])){
        $ConfirmarAula2 = $_POST['ConfirmarAula2'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula2 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula2 = $ReturnAula['aula2'];
        }
    }
    
    if(!empty($_POST['ConfirmarAula3'])){
        $ConfirmarAula3 = $_POST['ConfirmarAula3'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula3 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula3 = $ReturnAula['aula3'];
        }
    }
    
    if(!empty($_POST['ConfirmarAula4'])){
        $ConfirmarAula4 = $_POST['ConfirmarAula4'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula4 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula4 = $ReturnAula['aula4'];
        }
    }
    
    if(!empty($_POST['ConfirmarAula5'])){
        $ConfirmarAula5 = $_POST['ConfirmarAula5'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula5 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula5 = $ReturnAula['aula5'];
        }
    }
    
    if(!empty($_POST['ConfirmarAula6'])){
        $ConfirmarAula6 = $_POST['ConfirmarAula6'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula6 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula6 = $ReturnAula['aula6'];
        }
    }
    
    if(!empty($_POST['ConfirmarAula7'])){
        $ConfirmarAula7 = $_POST['ConfirmarAula7'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula7 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula7 = $ReturnAula['aula7'];
        }
    }
    
    if(!empty($_POST['ConfirmarAula8'])){
        $ConfirmarAula8 = $_POST['ConfirmarAula8'];
    }else{
        $QueryBuscarStatusAula = "SELECT aula8 FROM usuarios WHERE matricula = '$MatriculaAluno'";
        $ExeQrBuscarStatusAula = mysql_query($QueryBuscarStatusAula);
        while($ReturnAula = mysql_fetch_assoc($ExeQrBuscarStatusAula)){
            $ConfirmarAula8 = $ReturnAula['aula8'];
        }
    }
    
    
    
    //Query para atualizar as aulas
    $QueryUpdateAulasAluno = "UPDATE usuarios SET aula1 = '$ConfirmarAula1', aula2 = '$ConfirmarAula2', aula3 = '$ConfirmarAula3', aula4 = '$ConfirmarAula4', aula5 = '$ConfirmarAula5', aula6 = '$ConfirmarAula6', aula7 = '$ConfirmarAula7', aula8 = '$ConfirmarAula8' WHERE matricula = '$MatriculaAluno'";
    
    $ExeQrUpdateAulasAluno = mysql_query($QueryUpdateAulasAluno);
    
    if($ExeQrUpdateAulasAluno){
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
                    Query de Update: <?php echo $QueryUpdateAulasAluno?><br>
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
    
}
